<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keywords */

$this->title = 'Update Keywords: ' . $model->keyword_id;
$this->params['breadcrumbs'][] = ['label' => 'Keywords', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keyword_id, 'url' => ['view', 'id' => $model->keyword_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keywords-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
