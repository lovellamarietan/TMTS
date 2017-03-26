<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisContent */

$this->title = 'Update Thesis Content: ' . $model->content_id;
$this->params['breadcrumbs'][] = ['label' => 'Thesis Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->content_id, 'url' => ['view', 'id' => $model->content_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thesis-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
