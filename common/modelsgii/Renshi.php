<?php

namespace common\modelsgii;

use Yii;

/**
 * This is the model class for table "yii2_renshi".
 *
 * @property int $order_id
 * @property string $order_sn 订单号
 * @property int $company_id 公司ID
 * @property int $uid 用户id
 * @property string $name 姓名
 * @property string $tel 电话
 * @property string $sfz 身份证号
 * @property string $type 户口类型 城镇或非城镇
 * @property string $title 商品名称
 * @property int $province 省
 * @property int $city 市
 * @property int $area 区
 * @property int $start_time 起租时间
 * @property int $end_time 到期时间
 * @property int $num 数量
 * @property int $pay_status 支付状态 0未支付 1已支付
 * @property int $pay_time 支付时间
 * @property int $pay_type 支付类型 1微信 2支付宝 3银联 4现金
 * @property int $pay_source 支付途径 1网站 2微信 3后台
 * @property int $is_new 是否新参 1非新参 2新参
 * @property string $fund_base 公积金基数
 * @property string $social_base 社保基数
 * @property int $create_time 订单创建时间
 * @property int $status 状态 1有效 0 删除
 */
class Renshi extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_renshi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
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
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_sn' => 'Order Sn',
            'company_id' => 'Company ID',
            'uid' => 'Uid',
            'name' => 'Name',
            'tel' => 'Tel',
            'sfz' => 'Sfz',
            'type' => 'Type',
            'title' => 'Title',
            'province' => 'Province',
            'city' => 'City',
            'area' => 'Area',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'num' => 'Num',
            'pay_status' => 'Pay Status',
            'pay_time' => 'Pay Time',
            'pay_type' => 'Pay Type',
            'pay_source' => 'Pay Source',
            'is_new' => 'Is New',
            'fund_base' => 'Fund Base',
            'social_base' => 'Social Base',
            'create_time' => 'Create Time',
            'status' => 'Status',
        ];
    }
}
