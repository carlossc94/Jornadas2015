<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchInscripciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscripciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alumno') ?>

    <?= $form->field($model, 'id_taller') ?>

    <?= $form->field($model, 'id_inscripcion') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'id_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
