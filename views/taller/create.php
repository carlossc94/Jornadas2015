<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Taller */

$this->title = 'Agregar Taller';
$this->params['breadcrumbs'][] = ['label' => 'Tallers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taller-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
