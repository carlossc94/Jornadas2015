<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */

$this->title = 'Create Inscripciones';
$this->params['breadcrumbs'][] = ['label' => 'Inscripciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripciones-create">
<div class="row row-centered">
      <div class="col-xs-6 col-centered">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'talleres'=>$talleres,'alumno'=>$alumno,
    ]) ?>

</div>
</div>

</div>
