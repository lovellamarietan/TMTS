<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CommentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'section_id') ?>

    <?= $form->field($model, 'line_no') ?>

    <?= $form->field($model, 'comment') ?>

    <?= $form->field($model, 'reviewer_id') ?>

    <?php // echo $form->field($model, 'commented_at') ?>

    <?php // echo $form->field($model, 'comment_status') ?>

    <?php // echo $form->field($model, 'review_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
