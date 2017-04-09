<?php
$session = Yii::$app->session;
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <h1><?= Html::encode($this->title) ?></h1>
            <h2>Login:</h2>
            <?php
            $form = ActiveForm::begin(['class'=>'form-horizontal']);
            ?>
            <?php echo $form->field($login_model,'login')->textInput()?>
            <?php echo $form->field($login_model,'password')->passwordInput()?>
            <div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <?php
            ActiveForm::end();
            ?>
        </div>
    </div>
</div>