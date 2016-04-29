<?php
/**
 * 入口
 *
 * @author        lnc
 * @copyright     Copyright (c) 2016 bagesoft. All rights reserved.
 * @link          http://www.lnctime.com
 * @package       LNCCMS 
 * @version       v3.1.0
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('DS', DIRECTORY_SEPARATOR);
define('WWWPATH', str_replace(array('\\', '\\\\'), '/', dirname(__FILE__)));
$framework = dirname(__FILE__) . DS. 'framework'.DS.'yiilite.php';
$config = WWWPATH . DS .'protected'.DS.'config'.DS.'main.php';
require_once ($framework);
Yii::createWebApplication($config)->run();