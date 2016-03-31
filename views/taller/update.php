<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taller */

$this->title = 'Update Taller: ' . ' ' . $model->id_taller;
$this->params['breadcrumbs'][] = ['label' => 'Tallers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_taller, 'url' => ['view', 'id' => $model->id_taller]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taller-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
