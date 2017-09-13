<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerformanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Performances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Performance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'attribute' => 'artist_id',
                'label' => 'Artist',
                'value' => function ($model) {
                        return $model->artist->artist;
                    },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Artist::find()->all(), 'id', 'artist')
            ],
            [
                'attribute' => 'place_id',
                'label' => 'Place',
                'value' => function ($model) {
                        return $model->concert->place;
                    },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Concert::find()->all(), 'id', 'place')
            ],
            [
                'attribute' => 'date',
                'label' => 'Date',
                'format' => 'raw',
                'value' => 'date',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Performance::find()->all(), 'date', 'date')
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
