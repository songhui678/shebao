<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Renshi */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Renshis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renshi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
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
            'order_id',
            'order_sn',
            'company_id',
            'uid',
            'name',
            'tel',
            'sfz',
            'type',
            'title',
            'province',
            'city',
            'area',
            'start_time:datetime',
            'end_time:datetime',
            'num',
            'pay_status',
            'pay_time:datetime',
            'pay_type',
            'pay_source',
            'is_new',
            'fund_base',
            'social_base',
            'create_time:datetime',
            'status',
        ],
    ]) ?>

</div>
