<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KeymapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keymaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keymap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Keymap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'keymap_id',
            'thesis_id',
            'keyword_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
