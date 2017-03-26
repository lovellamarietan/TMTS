<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reviewmap */

$this->title = 'Update Reviewmap: ' . $model->reviewmap_id;
$this->params['breadcrumbs'][] = ['label' => 'Reviewmaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reviewmap_id, 'url' => ['view', 'id' => $model->reviewmap_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reviewmap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
