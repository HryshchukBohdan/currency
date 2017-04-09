<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/i50011.png', ['style' => 'position: relative;bottom: 15px;']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
//            'class' => 'navbar-fixed-top',
            'id' => 'main-menu',
        ],
    ]);

    $nav = [
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' =>'Home', 'url' => ['/site/index']],
            ['label' =>'Cash', 'url' => ['/site/cash']],
            ['label' =>'Webmoney', 'url' => ['/site/webmoney']],
            ['label' =>'Converter', 'url' => ['/site/converter']],
            ['label' => 'Contacts', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]

            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->login. ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ];
    if (empty(Yii::$app->session->get('id'))){
        $nav['items'][4]=['label' => 'Registration', 'url' => ['/site/signup']];
    }
    if (!empty(Yii::$app->session->get('id')=='4')){
        $nav['items'][4]=['label' =>'Administration', 'url' => ['/site/admin']];
    }
    echo Nav::widget($nav);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
