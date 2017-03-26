<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisInfo */

$this->title = $model->thesis_id;
$this->params['breadcrumbs'][] = ['label' => 'Thesis Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesis-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->thesis_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->thesis_id], [
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
            'thesis_id',
            'thesis_title',
            'author_id',
            'thesis_status',
            'created_at',
            'proposal_at',
            'proposal_approved_at',
            'final_defense_at',
            'final_approved_at',
            'adviser_id',
        ],
    ]) ?>

</div>
