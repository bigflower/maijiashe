<?php
$conf  = require "config.inc.php";
$array = array (
	'APP_GROUP_LIST'		=> 'home',
	'DEFAULT_GROUP'			=> 'home',
	'DEFAULT_MODULE'		=> 'index',
	'DEFAULT_THEME'			=> 'default',
	'SHOW_PAGE_TRACE'		=> true,
	'URL_CASE_INSENSITIVE'	=> true,					// 模块名不区分大小写
	'DB_FIELDS_CACHE'		=> false,					// 不缓存数据表字段
	'URL_MODEL'				=> 2,
	'VAR_SESSION_ID'		=> 'session_id',
	'USER_ID'				=> 'user_id',
	'USER_NICK'				=> 'user_nick',

	'URL_HTML_SUFFIX'		=> '.html',					// 伪静态扩展名
	'TOKEN_ON'				=> true,
	'TOKEN_NAME'			=> '__maijiashe_token__',
	'TOKEN_TYPE'			=> 'md5',
	'HTTP_CACHE_CONTROL'	=> 'no-cache,no-store',
	'LANG_SWITCH_ON'		=> true,					// 开启语言包
	'LANG_AUTO_DETECT'		=> true,					// 自动侦测语言 开启多语言功能后有效
	'DEFAULT_LANG'			=> 'zh-cn',					// 默认语言
// 'APP_AUTOLOAD_PATH'		=> '@.Oauth',				// 自动加载项目类库
	'LOAD_EXT_CONFIG'		=> 'url,db',				// 扩展配置
	
	'DATA_CACHE_SUBDIR'		=> true,
	'DATA_PATH_LEVEL'		=> 3,
);
return array_merge($conf, $array);
?>