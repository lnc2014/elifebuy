<?php
/**
 * 系统配置
 * 
 * @author        lnc
 * @copyright     Copyright (c) 2016 lncsoft. All rights reserved.
 * @link          http://www.lnctime.com 
 * @license       http://www.lnctime.com
 * @version       v1.0
 */

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'LNCCMS',
    'language'=>'zh_cn',
    'theme'=>'default',
    'timeZone'=>'Asia/Shanghai',
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
	),
    'modules'=>array(
		'admini'=>array(
		     'class'=>'application.modules.admini.AdminiModule',
		),
		'account'=>array(
		     'class'=>'application.modules.account.AccountModule',
		)
	),
	'components'=>array(
        'cache'=>array(
           'class'=>'CFileCache',
        ),
		'db'=>array(
			'connectionString' => 'mysql:host=127.0.0.1;dbname=lnccms',
			'emulatePrepare' => true,
			'enableParamLogging' => true,
			'enableProfiling'=>true,
			'username' => 'root',
// 			'password' => '123456',
			'password' => 'li27212871205',
			'charset' => 'utf8',
			'tablePrefix' => 'lnc_',
		),
		'errorHandler'=>array(
            'errorAction'=>'error/index',
        ), 
        'urlManager'=>array(
        	//'urlFormat'=>'path',
        	//'urlSuffix'=>'.html',
        	'showScriptName'=>true,
        	'rules'=>array(
        		'post/<id:\d+>/*'=>'post/show',
        		'post/<id:\d+>_<title:\w+>/*'=>'post/show',
        		'post/catalog/<catalog:[\w-_]+>/*'=>'post/index',
        		'page/show/<name:\w+>/*'=>'page/show',
        		'special/show/<name:[\w-_]+>/*'=>'special/show',
        		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        	),
        ),
	),
	'params'=> require(dirname(__FILE__).DS.'params.php'),
);