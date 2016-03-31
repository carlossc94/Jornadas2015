<?php

use yii\helpers\Html;
#use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Taller */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taller-form">

    <?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-md-2',
            'wrapper' => 'col-md-4',
            'error' => '',
            'hint' => '',
        ],
    ],
]); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 100]) ?>
    <?= $form->field($model, 'instructor')->textInput(['maxlength' => 60]) ?>
    <?php
    $items=array('0-1'=>'1','3-5'=>'3-5','7-9'=>'7-9');
    echo $form->field($model, 'semestre')
        ->dropDownList(
            $items,           // Flat array ('id'=>'label')
            ['prompt'=>'Seleccione el Semestre']    // options
        );?>
    <?= $form->field($model, 'estado')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>
    <?php /*$form->field($model, 'fecha')->widget(DatePicker::className(),[
    'dateFormat' => 'yyyy-MM-dd',
    'clientOptions' => [
    'yearRange' => '-115:+0',
    'changeYear' => true],
     'options'=>['class'=>'form-control']
    ]) *///?>

    <?= $form->field($model, 'hora_inicial')->textInput(['maxlength' => 5]) ?>
    <?= $form->field($model, 'hora_final')->textInput(['maxlength' => 5]) ?>
    <?= $form->field($model, 'cupo')->textInput() ?>
    <?= $form->field($model, 'turno')->textInput(['maxlength' => 1]) ?>
    <?= $form->field($model, 'imagen')->textInput(['maxlength' => 100]) ?>
    <div class="form-group">
      <div class="col-lg-offset-4 col-lg-8">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
