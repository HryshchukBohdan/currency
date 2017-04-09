<?php

namespace app\controllers;

use app\models\Auctions;
use app\models\Login;
use app\models\PropForm;
use app\models\Propositions;
use app\models\Signup;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\ContactForm;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()
    {
        $model = new Propositions();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->user_id = Yii::$app->session->get('id');
            $model->save();
            return $this->goHome();
        }
        $propositions = Propositions::find()->orderBy(['id'=>SORT_DESC])->with('user')->all();
//        $count = Propositions::find()->count();
//        var_dump($propositions);die();
        return $this->render('index',['propositions'=>$propositions,'model'=>$model]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
       if(!Yii::$app->user->isGuest){
           return $this->goHome();
       }
        $login_model = new Login();
        if (Yii::$app->request->post('Login')){
            $login_model->attributes = Yii::$app->request->post('Login');
            if ($login_model->validate()){
                Yii::$app->user->login($login_model->getUser());
                $_SESSION['id'] = $login_model->getUser()->id;
                return $this->goHome();
            }
        }
        return $this->render('login',['login_model'=>$login_model]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        if (!Yii::$app->user->isGuest){
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }


        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    public function actionWebmoney(){

        return $this->render('webmoney');
    }

    public function actionCash(){
        return $this->render('cash');
    }
    public function actionAbout()
    {

        return $this->render('about');
    }

    public function actionSignup(){
        $model = new Signup();
        if (isset($_POST['Signup'])){
           $model->attributes=Yii::$app->request->post('Signup');
           if($model->validate() && $model->signup()){
               return $this->goHome();
           }
        }
        return $this->render('signup',['model'=>$model]);
    }
    public function actionAdmin(){
        return $this->render('admin');
    }

    public function actionAuction($id) {

        if ($user_id = Yii::$app->session->get('id')) {

            $model = new Auctions();
            $prop = Propositions::find()->where(['id' => $id])->one();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->user_id = $user_id;
                $model->id_prop = $prop->id;
                $model->save();
                return $this->goHome();
            }
            return $this->render('auction', ['model' => $model, 'sum' => ceil($prop->sum), 'course' => round($prop->course, 2)]);
        } else {
            return $this->redirect(['login']);
        }
    }

    public function actionAccept($id){

        if ($user_id = Yii::$app->session->get('id')) {

            $model = new Auctions();
            $prop = Propositions::find()->where(['id' => $id])->one();

            $model->user_id = $user_id;
            $model->id_prop = $prop->id;

            $model->sum = $prop->sum * $prop->course;
            $model->kurs = $prop->course;

            $model->save();
//            var_dump($model->kurs);
//            var_dump($model->sum);
//            var_dump($model->user_id);
//            var_dump($model->id_prop);

            return $this->goHome();

        } else {
            return $this->redirect(['login']);
        }
    }
}
