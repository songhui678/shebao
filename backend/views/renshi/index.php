<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\RenshiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '人事管理';
$this->params['title_sub'] = '人事管理'; //

?>
<div class="renshi-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Renshi', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?=GridView::widget([
	'dataProvider' => $dataProvider,
	'filterModel' => $searchModel,
	'columns' => [
		['class' => 'yii\grid\SerialColumn'],

		'order_id',
		'order_sn',
		'company_id',
		'uid',
		'name',
		//'tel',
		//'sfz',
		//'type',
		//'title',
		//'province',
		//'city',
		//'area',
		//'start_time:datetime',
		//'end_time:datetime',
		//'num',
		//'pay_status',
		//'pay_time:datetime',
		//'pay_type',
		//'pay_source',
		//'is_new',
		//'fund_base',
		//'social_base',
		//'create_time:datetime',
		//'status',

		['class' => 'yii\grid\ActionColumn'],
	],
]);?>
</div>
