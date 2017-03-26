<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Keymap */

$this->title = 'Create Keymap';
$this->params['breadcrumbs'][] = ['label' => 'Keymaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keymap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
