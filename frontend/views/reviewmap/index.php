<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReviewmapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reviewmaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviewmap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reviewmap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reviewmap_id',
            'thesis_id',
            'reviewer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
