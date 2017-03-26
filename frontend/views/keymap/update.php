<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keymap */

$this->title = 'Update Keymap: ' . $model->keymap_id;
$this->params['breadcrumbs'][] = ['label' => 'Keymaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keymap_id, 'url' => ['view', 'id' => $model->keymap_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keymap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
