<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KeywordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keywords';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keywords-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Keywords', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'keyword_id',
            'keyword',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
