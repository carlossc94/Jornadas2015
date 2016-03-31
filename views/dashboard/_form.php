<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscripciones-form">

	<?php
	$items =array();
	foreach ($talleres as $key => $row) {
		if($row->ocupados<$row->cupo)//Hay disponible
		{

			$limites =explode('-',$row->semestre);


			if($alumno->semestre>=$limites[0] && $alumno->semestre<=$limites[1])
			{
				$items[$row->id_taller]=$row->nombre;
			}
		}
	}

	?>

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id_alumno')->textInput() ?>-->


    <?php
    echo $form->field($model, 'id_taller')
        ->dropDownList(
            $items,           // Flat array ('id'=>'label')
            ['prompt'=>'Seleccione el Taller']    // options
        );?>

    <!--<?= $form->field($model, 'fecha')->textInput() ?>-->

    <!--<?= $form->field($model, 'id_usuario')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
