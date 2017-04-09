<?php
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <h1><?= Html::encode($this->title) ?></h1>
            <h2>Registration:</h2>
<?php
    $form = ActiveForm::begin(['class'=>'form-horizontal']);
?>
<?php echo $form->field($model,'name')->textInput(['autofocus'=>true])?>
<?php echo $form->field($model,'surname')->textInput()?>
<?php echo $form->field($model,'login')->textInput()?>
<?php echo $form->field($model,'email')->textInput()?>
<?php echo $form->field($model,'password')->passwordInput()?>
<?php echo Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php
    ActiveForm::end();
?>
        </div>
    </div>
</div>