<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchTaller */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taller-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_taller') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'instructor') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'hora_inicial') ?>

    <?php // echo $form->field($model, 'hora_final') ?>

    <?php // echo $form->field($model, 'cupo') ?>

    <?php // echo $form->field($model, 'turno') ?>

    <?php // echo $form->field($model, 'imagen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
