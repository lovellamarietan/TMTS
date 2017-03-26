<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keymap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keymap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keymap_id')->textInput() ?>

    <?= $form->field($model, 'thesis_id')->textInput() ?>

    <?= $form->field($model, 'keyword_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
