<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thesis-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'thesis_id') ?>

    <?= $form->field($model, 'thesis_title') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'thesis_status') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'proposal_at') ?>

    <?php // echo $form->field($model, 'proposal_approved_at') ?>

    <?php // echo $form->field($model, 'final_defense_at') ?>

    <?php // echo $form->field($model, 'final_approved_at') ?>

    <?php // echo $form->field($model, 'adviser_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
