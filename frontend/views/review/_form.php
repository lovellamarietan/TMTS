<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Review */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'review_due_date')->textInput() ?>

    <?= $form->field($model, 'review_status')->dropDownList([ 'new' => 'New', 'ongoing' => 'Ongoing', 'closed' => 'Closed', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'thesis_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
