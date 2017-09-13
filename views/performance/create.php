<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Performance */
/* @var $artist app\models\Artist[] */
/* @var $concert app\models\Concert[] */

$this->title = 'Create Performance';
$this->params['breadcrumbs'][] = ['label' => 'Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="performance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'artist' => $artist,
        'concert' => $concert,
    ]) ?>

</div>
