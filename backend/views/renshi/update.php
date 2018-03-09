<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Renshi */

$this->title = 'Update Renshi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Renshis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="renshi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
