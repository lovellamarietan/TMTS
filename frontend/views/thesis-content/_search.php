<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thesis-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'content_id') ?>

    <?= $form->field($model, 'thesis_id') ?>

    <?= $form->field($model, 'section_id') ?>

    <?= $form->field($model, 'content_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
