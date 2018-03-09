<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\RenshiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renshi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'order_sn') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'uid') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'sfz') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'start_time') ?>

    <?php // echo $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'num') ?>

    <?php // echo $form->field($model, 'pay_status') ?>

    <?php // echo $form->field($model, 'pay_time') ?>

    <?php // echo $form->field($model, 'pay_type') ?>

    <?php // echo $form->field($model, 'pay_source') ?>

    <?php // echo $form->field($model, 'is_new') ?>

    <?php // echo $form->field($model, 'fund_base') ?>

    <?php // echo $form->field($model, 'social_base') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
