<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Keywords */

$this->title = 'Create Keywords';
$this->params['breadcrumbs'][] = ['label' => 'Keywords', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keywords-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
