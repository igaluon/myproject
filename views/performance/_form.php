<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Performance */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="performance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'artist')->dropDownList(\yii\helpers\ArrayHelper::map($artist, 'artist', 'artist'), ['prompt' => '']) ?>

    <?= $form->field($model, 'place')->dropDownList(\yii\helpers\ArrayHelper::map($concert, 'place', 'place'), ['prompt' => '']) ?>


    <?= $form->field($model, 'date')->widget(DatePicker::ClassName(), [ 'name' => 'check_issue_date','pluginOptions' => [ 'format' => 'yyyy-mm-dd', 'todayHighlight' => true ]]);?>

<!--     'value' => date('dM-Y', strtotime('+2 days')), 'options' => ['placeholder' => 'Select issue date ...'], 'pluginOptions' => [ 'format' => 'yyyy/dd/mm', 'todayHighlight' => true ]-->


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
