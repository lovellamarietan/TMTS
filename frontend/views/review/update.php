<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Review */

$this->title = 'Update Review: ' . $model->review_id;
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->review_id, 'url' => ['view', 'id' => $model->review_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="review-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
