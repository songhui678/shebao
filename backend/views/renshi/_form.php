<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Renshi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="renshi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sfz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput() ?>

    <?= $form->field($model, 'city')->textInput() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'pay_status')->textInput() ?>

    <?= $form->field($model, 'pay_time')->textInput() ?>

    <?= $form->field($model, 'pay_type')->textInput() ?>

    <?= $form->field($model, 'pay_source')->textInput() ?>

    <?= $form->field($model, 'is_new')->textInput() ?>

    <?= $form->field($model, 'fund_base')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_base')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
