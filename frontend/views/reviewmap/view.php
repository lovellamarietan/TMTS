<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reviewmap */

$this->title = $model->reviewmap_id;
$this->params['breadcrumbs'][] = ['label' => 'Reviewmaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviewmap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->reviewmap_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->reviewmap_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reviewmap_id',
            'thesis_id',
            'reviewer_id',
        ],
    ]) ?>

</div>
