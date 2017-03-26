<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'section_id')->dropDownList([ 'Abstract' => 'Abstract', 'Statement of the Problem' => 'Statement of the Problem', 'Review of Related Literature' => 'Review of Related Literature', 'Methodology' => 'Methodology', 'Results and Discussion' => 'Results and Discussion', 'Summary' => 'Summary', 'References' => 'References', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'line_no')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reviewer_id')->textInput() ?>

    <?= $form->field($model, 'commented_at')->textInput() ?>

    <?= $form->field($model, 'comment_status')->dropDownList([ 'open' => 'Open', 'resolved' => 'Resolved', 'confirmed' => 'Confirmed', 'rejected' => 'Rejected', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'review_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
