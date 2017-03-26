<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thesis-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thesis_id')->textInput() ?>

    <?= $form->field($model, 'section_id')->dropDownList([ 'Abstract' => 'Abstract', 'Statement of the Problem' => 'Statement of the Problem', 'Review of Related Literature' => 'Review of Related Literature', 'Methodology' => 'Methodology', 'Results and Discussion' => 'Results and Discussion', 'Summary' => 'Summary', 'Acknowledgment' => 'Acknowledgment', 'References' => 'References', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'content_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
