<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * 关于我们相关页面 前端资源
 */
class ArticleAsset extends AssetBundle {
	public $sourcePath = '@common/metronic';
	/* 全局CSS文件 */
	public $css = [
		'dgj/css/article.css',
		'dgj/css/article_list.css',
	];
	/* 全局JS文件 */
	public $js = [
	];
	/* 依赖关系 */
	public $depends = [

	];
}
