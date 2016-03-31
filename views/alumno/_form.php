<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => 30]) ?>



    <?= $form->field($model, 'carrera')->textInput(['maxlength' => 45]) ?>

  <?= $form->field($model, 'semestre')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'grupo')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 10]) ?>
    <?php
    $items=array('N'=>'NO','S'=>'SI');
    echo $form->field($model, 'inscripcion')
        ->dropDownList(
            $items,           // Flat array ('id'=>'label')
            ['prompt'=>'Seleccion']    // options
        );?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
