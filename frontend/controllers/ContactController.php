<?php

namespace frontend\controllers;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Goods;
use common\modelsgii\Page;

class ContactController extends \yii\web\Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex() {
		$company = \common\modelsgii\Config::find()->where(array("name" => "WEB_SITE_COMPANY"))->one();
		$this->getView()->title = "联系我们-" . $company->value;
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$adCate = AdCat::find()->where(array("name" => 'contact', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		$content = Page::find()->where(array('name' => 'contact', 'type' => 1))->one();
		$goodsList = Goods::find()->where(array("status" => 1))->orderBy('sort asc')->limit(5)->all();
		return $this->render('index', array('content' => $content, 'adverList' => $adverList, 'goodsList' => $goodsList));
	}

}
