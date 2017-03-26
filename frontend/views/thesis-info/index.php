<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ThesisInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thesis Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesis-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Thesis Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'thesis_id',
            'thesis_title',
            'author_id',
            'thesis_status',
            'created_at',
            // 'proposal_at',
            // 'proposal_approved_at',
            // 'final_defense_at',
            // 'final_approved_at',
            // 'adviser_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
