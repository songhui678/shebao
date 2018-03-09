<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {
	public $sourcePath = '@common/metronic';
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
	public $depends = [

	];
}
