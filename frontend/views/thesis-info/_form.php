<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thesis-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thesis_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'thesis_status')->dropDownList([ 'draft' => 'Draft', 'proposal-in-review' => 'Proposal-in-review', 'proposal-approved' => 'Proposal-approved', 'final-defense-in-review' => 'Final-defense-in-review', 'final-defense-approved' => 'Final-defense-approved', 'archived' => 'Archived', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'proposal_at')->textInput() ?>

    <?= $form->field($model, 'proposal_approved_at')->textInput() ?>

    <?= $form->field($model, 'final_defense_at')->textInput() ?>

    <?= $form->field($model, 'final_approved_at')->textInput() ?>

    <?= $form->field($model, 'adviser_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
