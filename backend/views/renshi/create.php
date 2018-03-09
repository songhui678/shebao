<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Renshi */

$this->title = 'Create Renshi';
$this->params['breadcrumbs'][] = ['label' => 'Renshis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renshi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
