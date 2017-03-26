<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keymap */

$this->title = $model->keymap_id;
$this->params['breadcrumbs'][] = ['label' => 'Keymaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keymap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->keymap_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->keymap_id], [
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
            'keymap_id',
            'thesis_id',
            'keyword_id',
        ],
    ]) ?>

</div>
