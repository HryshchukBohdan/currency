<?php
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <h1><?= Html::encode($this->title) ?></h1>
            <h2>Test:</h2>
<?php
    $form = ActiveForm::begin(['class'=>'form-horizontal']);
?>
<?php echo $form->field($model,'kurs')->textInput(['value' => $course, 'onchange' => "conversionKursToSum($sum)"])?>
<?php echo $form->field($model,'sum')->textInput(['value' => ($sum * $course), 'onchange' => "conversionSumToKurs($sum)"])?>
<?php echo $form->field($model,'comment')->textInput()?>
<?php echo Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php
    ActiveForm::end();
?>
        </div>
    </div>
</div>