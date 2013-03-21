<?php

/*
 * -----------------------
 * maijiashe.com
 * -----------------------
 * 项目入口文件
 * -----------------------
 */

/* 当前卖家社程序版本 */
define('VERSION', '1.0');
/* 当前卖家社程序Release */
define('RELEASE', '20121225');

/* 当前项目名称 */
define('APP_NAME', 'app');
/* 当前项目路径 */
define('APP_PATH', './app/');
/* 项目域名 */
define('APP_DOMAIN', 'http://'.$_SERVER['HTTP_HOST']);
/* 当前项目为调试状态 */
define('APP_DEBUG', true);
/* 开始加载 */
require dirname(__FILE__).'/core/ThinkPHP.php';

?>