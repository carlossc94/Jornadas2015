<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchInscripciones */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inscripciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inscripciones', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_inscripcion',
            [
                'attribute' => 'alumno',
                'value' => 'alumno.nombre'
                ],
              [
                'attribute' => 'taller',
                'value' => 'taller.nombre'
              ],
            #'id_taller',

            'fecha',
            #'id_usuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
