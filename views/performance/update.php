<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Performance */


$this->title = 'Update Performance: ' . $model->artist->artist;
$this->params['breadcrumbs'][] = ['label' => 'Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="performance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'artist' => $artist,
        'concert' => $concert,
    ]) ?>

</div>
