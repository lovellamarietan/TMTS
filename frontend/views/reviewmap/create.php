<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Reviewmap */

$this->title = 'Create Reviewmap';
$this->params['breadcrumbs'][] = ['label' => 'Reviewmaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviewmap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
