<?php

namespace frontend\controllers;
use common\helpers\FuncHelper;
use common\modelsgii\Ad;
use common\modelsgii\AdCat;
use common\modelsgii\Article;
use common\modelsgii\ArticleCat;
use yii\data\Pagination;
use yii\web\Controller;

class ArticleController extends Controller {
	/**
	 * @var string
	 */
	public $layout = 'main';

	public function actionIndex($id = 1) {
		$company = \common\modelsgii\Config::find()->where(array("name" => "WEB_SITE_COMPANY"))->one();
		$this->getView()->title = "新闻中心-" . $company->value;
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = '进口冻干机 美国VirTis冻干机-新默真科技，为您提供美国SP SCIENTIFIC公司生产的最佳配置的冷冻干燥设备，包括实验型冻干机、中试型冻干机、小型生产型及产业型冻干机；协助您选择最高性能的酶标仪；为您推荐最稳定的蠕动泵和灌装机！新默真科技，为您提供冻干机、酶标仪、蠕动泵和灌装机等产品专业的技术咨询和服务。';
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $id))->one();
		$cateList = ArticleCat::find()->where(array("pid" => 0))->orderBy('sort asc')->all();
		$articleCount = Article::find()->where(array("category_id" => $id, "status" => 1))->count('id');
		$pages = new Pagination(['totalCount' => $articleCount, 'pageSize' => '12']);
		$articleList = Article::find()->where(array("category_id" => $id, "status" => 1))->orderBy('sort asc')->offset($pages->offset)->limit($pages->limit)->all();
		$toutiaoArticle = Article::find()->where(array("category_id" => $id, "status" => 2))->orderBy('create_time desc')->one();
		$adCate = AdCat::find()->where(array("name" => 'article', "status" => 1))->one();
		$adverList = array();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "type" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('index', array('cateList' => $cateList, 'cate' => $cate, 'articleList' => $articleList, 'pages' => $pages, "toutiaoArticle" => $toutiaoArticle, 'adverList' => $adverList));
	}

	public function actionShow($id) {

		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		$company = \common\modelsgii\Config::find()->where(array("name" => "WEB_SITE_COMPANY"))->one();
		$this->getView()->title = $article->title . "-新闻中心-" . $company->value;
		$this->getView()->metaTags['keywords'] = '美国VirTis冻干机，冷冻干燥机，超微粉气流粉碎机，微射流均质机，加拿大Simport耗材';
		$this->getView()->metaTags['description'] = $article->description;

		// Article::updateByPk($id, array('view' => $article->view + 1));
		$article->view = $article->view + 1;
		$article->save();
		$cate = ArticleCat::find()->where(array("pid" => 0, "id" => $article->category_id))->one();
		//推荐资讯
		$tujianList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();
		//相关资讯
		$xiangguanList = Article::find()->where(array("status" => 1))->orderBy('create_time asc')->limit(3)->all();
		// Article::findBySql('SELECT * FROM user')->one();  此方法是用 sql  语句查询 user 表里面的一条数据；
		$sql = "select id,title from yii2_article where id<" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$nextArticle = Article::findBySql($sql)->one();

		$sql = "select id,title from yii2_article where id>" . $id . " and category_id=" . $article->category_id . " and status=1 order by id asc limit 1";
		$beforeArticle = Article::findBysql($sql)->one();
		$adCate = AdCat::find()->where(array("name" => 'article', "status" => 1))->one();
		if (!empty($adCate)) {
			$adverList = Ad::find()->where(array("cate_id" => $adCate->id, "status" => 1))->orderBy('sort asc')->limit(5)->all();
			// var_dump($adverList);exit;
		}
		return $this->render('show', array('cate' => $cate, 'article' => $article, 'tujianList' => $tujianList, 'xiangguanList' => $xiangguanList, 'nextArticle' => $nextArticle, 'beforeArticle' => $beforeArticle, 'adverList' => $adverList));
	}
	/**
	 * [actionZan 产品详情]
	 * @DateTime 2017-12-15T11:57:16+0800
	 * @param    [type]                   $id [description]
	 * @return   [type]                       [description]
	 */
	public function actionZan() {
		$id = \Yii::$app->request->get('id');
		$article = Article::find()->where(array("id" => $id, "status" => 1))->one();
		if (!empty($article)) {
			$article->up = $article->up + 1;
			$article->save();
			return FuncHelper::ajaxReturn(200, '点赞成功', $article);
		} else {
			return FuncHelper::ajaxReturn(400, '点赞失败', $id);
		}
	}
}
