<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisContent */

$this->title = 'Create Thesis Content';
$this->params['breadcrumbs'][] = ['label' => 'Thesis Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesis-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
