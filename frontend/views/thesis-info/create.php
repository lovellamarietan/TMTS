<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ThesisInfo */

$this->title = 'Create Thesis Info';
$this->params['breadcrumbs'][] = ['label' => 'Thesis Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesis-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
