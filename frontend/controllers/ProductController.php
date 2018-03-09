<?php

namespace frontend\controllers;

use common\helpers\ArrayHelper;
use common\helpers\FuncHelper;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Article;
use common\modelsgii\Goods;
use common\modelsgii\GoodsCat;
use yii\data\Pagination;
use yii\web\Controller;

class ProductController extends Controller {

	/**
	 * @var string
	 */
	public $layout = 'main';
	public function actionIndex($id = 1) {
		$company = \common\modelsgii\Config::find()->where(array("name" => "WEB_SITE_COMPANY"))->one();
		$this->getView()->title = "产品中心-" . $company->value;
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$cate = GoodsCat::find()->where(array("id" => $id))->one();
		$cateTree = $this->cateTree();
		$cateList = GoodsCat::find()->where(array('pid' => 0, "status" => 1))->orderBy('sort asc')->limit(7)->asArray()->all();
		$goodsCateArr = ArrayHelper::getSubs($id);
		// var_export($cateList);exit;
		$goodsCount = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->count('goods_id');

		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '12']);
		$goodsList = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$adCate = AdCat::find()->where(array("name" => 'product', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}

		if (!empty($cate)) {
			return $this->render('index', array('cate' => $cate, 'cateTree' => $cateTree, 'cateList' => $cateList, 'pages' => $pages, 'goodsList' => $goodsList, 'adverList' => $adverList));
		} else {
			$this->redirect(array('index/error'));
		}
	}
	/**
	 * [actionShow 产品详情]
	 * @DateTime 2017-12-15T11:57:16+0800
	 * @param    [type]                   $id [description]
	 * @return   [type]                       [description]
	 */
	public function actionShow($id) {
		$goods = Goods::find()->where(array("goods_id" => $id, "status" => 1))->one();
		$this->getView()->title = $goods->goods_name . "-产品中心-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = $goods->keywords . '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = $goods->description;

		$goods->view = $goods->view + 1;
		$goods->save();
		$cateTree = $this->cateTree();
		$cateList = GoodsCat::find()->where(array('pid' => 0, "status" => 1))->orderBy('sort asc')->limit(7)->asArray()->all();
		//最新资讯
		$articleList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(10)->all();

		$adCate = AdCat::find()->where(array("name" => 'product', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		//推荐产品
		$goodsList = array();
		if (!empty($goods)) {
			$goodsList = Goods::find()->where(array("cat_id" => $goods->cat_id, "status" => 1))->orderBy('create_time asc')->limit(3)->all();

			return $this->render('show', array('goods' => $goods, 'cateTree' => $cateTree, 'cateList' => $cateList, 'articleList' => $articleList, 'goodsList' => $goodsList, 'adverList' => $adverList));
		} else {
			$this->redirect(array('index/error'));
		}
	}
	/**
	 * [actionCate 产品分类列表]
	 * @DateTime 2017-12-15T11:57:50+0800
	 * @return   [type]                   [description]
	 */
	public function actionCate($id) {

		$cate = GoodsCat::find()->where(array("id" => $id))->one();
		$this->getView()->title = $cate->title . "-新默真科技（北京）有限公司";
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';

		$cateList = GoodsCat::find()->where(array('pid' => 0, "status" => 1))->orderBy('sort asc')->limit(7)->asArray()->all();
		$cateTree = $this->cateTree();
		//获取分类下所有子分类
		$goodsCateArr = ArrayHelper::getSubs($id);
		$goodsCount = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->count('goods_id');

		$pages = new Pagination(['totalCount' => $goodsCount, 'pageSize' => '12']);
		$goodsList = Goods::find()->where(array("cat_id" => $goodsCateArr, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$adCate = AdCat::find()->where(array("name" => 'product', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}

		if (!empty($cate)) {
			return $this->render('cate', array('cate' => $cate, 'cateList' => $cateList, 'cateTree' => $cateTree, 'pages' => $pages, 'goodsList' => $goodsList, 'adverList' => $adverList));
		} else {
			$this->redirect(array('index/error'));
		}
	}

	/**
	 * [actionZan 产品详情]
	 * @DateTime 2017-12-15T11:57:16+0800
	 * @param    [type]                   $id [description]
	 * @return   [type]                       [description]
	 */
	public function actionZan() {

		$id = \Yii::$app->request->get('id');

		$goods = Goods::find()->where(array("goods_id" => $id, "status" => 1))->one();
		if (!empty($goods)) {
			$goods->up = $goods->up + 1;
			$goods->save();
			return FuncHelper::ajaxReturn(200, '点赞成功', $goods);
		} else {
			return FuncHelper::ajaxReturn(400, '点赞失败', $id);
		}
	}

	/**
	 * ---------------------------------------
	 * 获取栏目数据tree结构
	 * ---------------------------------------
	 */
	private function cateTree() {
		$lists = GoodsCat::find()->where(array("status" => 1))->orderBy('sort asc')->asArray()->all();
		$lists = ArrayHelper::list_to_tree($lists, 'id', 'pid');
		// $lists = ArrayHelper::jstree($lists);
		return $lists;
	}

}
