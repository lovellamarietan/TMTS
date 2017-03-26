<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisInfo */

$this->title = 'Update Thesis Info: ' . $model->thesis_id;
$this->params['breadcrumbs'][] = ['label' => 'Thesis Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->thesis_id, 'url' => ['view', 'id' => $model->thesis_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thesis-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
