<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * 冻干机相关页面 前端资源
 */
class DgjAsset extends AssetBundle {
	public $sourcePath = '@common/metronic';
	/* 全局CSS文件 */
	public $css = [
		'dgj/css/layout.min.css',
		'dgj/css/Index.css',
		'dgj/css/58e5bd1aac30899558b844f3.css',
	];
	/* 全局JS文件 */
	public $js = [
		'dgj/scripts/uaredirect.js',
		'dgj/scripts/JQuery.js',
		'dgj/scripts/jquery.SuperSlide.2.1.1.js',
		'dgj/scripts/template-sub-domain.js',
		'dgj/scripts/58e5bd1aac30899558b844f3.js',
		'dgj/scripts/public.js',
	];
	/* 依赖关系 */
	public $depends = [

	];
}
