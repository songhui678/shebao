<?php
$params = array_merge(
	require (__DIR__ . '/../../common/config/params.php'),
	require (__DIR__ . '/../../common/config/params-local.php'),
	require (__DIR__ . '/params.php'),
	require (__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-home',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	/* 默认路由 */
	'defaultRoute' => 'index',
	/* 控制器默认命名空间 */
	'controllerNamespace' => 'frontend\controllers',
	/* 模块 */
	'modules' => [

	],
	'components' => [

		/* 修改默认的request组件 */
		'request' => [
			'class' => 'common\core\Request',
			'baseUrl' => Yii::getAlias('@frontendUrl'),
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'index/error',
		],

		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
	],
	'params' => $params,
];
