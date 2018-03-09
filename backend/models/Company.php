<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "yii2_company".
 *
 * @property int $id
 * @property string $name 公司全称
 * @property string $short_name 公司简称
 * @property string $email 公司邮箱
 * @property string $address 公司地址
 * @property string $phone 公司电话
 * @property int $scale 公司规模
 * @property string $logo
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Company extends \yii\db\ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'yii2_company';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['scale'], 'integer'],
			[['create_time', 'update_time'], 'safe'],
			[['name', 'short_name', 'logo'], 'string', 'max' => 100],
			[['email'], 'string', 'max' => 30],
			[['address'], 'string', 'max' => 255],
			[['phone'], 'string', 'max' => 20],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Name',
			'short_name' => 'Short Name',
			'email' => 'Email',
			'address' => 'Address',
			'phone' => 'Phone',
			'scale' => 'Scale',
			'logo' => 'Logo',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		];
	}
}
