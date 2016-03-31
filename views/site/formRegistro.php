<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row row-centered">
      <div class="col-xs-6 col-centered">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>
    <?php
    $items=array('1'=>'1','3'=>'3','5'=>'5','7'=>'7','9'=>'9');
    echo $form->field($model, 'semestre')
        ->dropDownList(
            $items,           // Flat array ('id'=>'label')
            ['prompt'=>'Seleccione el Semestre']    // options
        );?>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
