<?php

namespace backend\models;

/**
 * ---------------------------------------
 * 人事模型
 * ---------------------------------------
 */
class Renshi extends \common\modelsgii\Renshi {

	public function rules() {
		return [
			[['order_sn', 'type', 'title', 'start_time', 'end_time', 'pay_time', 'create_time'], 'required'],
			[['company_id', 'uid', 'province', 'city', 'area', 'start_time', 'end_time', 'num', 'pay_status', 'pay_time', 'pay_type', 'pay_source', 'is_new', 'create_time', 'status'], 'integer'],
			[['fund_base', 'social_base'], 'number'],
			[['order_sn', 'tel', 'sfz'], 'string', 'max' => 20],
			[['name'], 'string', 'max' => 30],
			[['type'], 'string', 'max' => 10],
			[['title'], 'string', 'max' => 100],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			/* 在rules验证前，时间自动完成 */
			[
				'class' => 'yii\behaviors\AttributeBehavior',
				'attributes' => [
					static::EVENT_BEFORE_VALIDATE => 'create_time',
				],
				'value' => time(),
			],
		];
	}
}
