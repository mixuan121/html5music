<?php
header("Content-type:text/html;charset=utf-8");
//还需要在下面配置好数据库信息

//include dirname(__FILE__).'/class/debug.php';
//DEBUG::INIT();

$_config = array();

//JAE数据库
// 	header("Content-type:text/html;charset=utf-8");
// 	echo "用户名:" . $_ENV["JAE_MYSQL_USERNAME"] ."</br>";
// 	echo "密码:" .$_ENV["JAE_MYSQL_PASSWORD"] . "</br>";
// 	echo "IP:" . $_ENV["JAE_MYSQL_IP"] ."</br>";
// 	echo "数据库编码:" .$_ENV["JAE_MYSQL_ENCODING"] . "</br>";
// 	echo "端口:" .$_ENV["JAE_MYSQL_PORT"] . "</br>";
// 	echo "数据库名称:" .$_ENV["JAE_MYSQL_DBNAME"] . "</br>";
//SAE数据库
//$_config['db']['server'] = SAE_MYSQL_HOST_M;
//$_config['db']['port'] = SAE_MYSQL_PORT;
//$_config['db']['username'] = SAE_MYSQL_USER;
//$_config['db']['password'] = SAE_MYSQL_PASS;
//$_config['db']['name'] = SAE_MYSQL_DB;

include('db.setting.php');
/* // ------------------  数据库设定 ------------------
	$_config['db']['server'] = 'localhost';			// 数据库服务器地址
	$_config['db']['port'] = '3306';				// 数据库端口
	$_config['db']['username'] ='root';			// 数据库用户名
	$_config['db']['password'] = '';			// 数据库密码
	$_config['db']['name'] = 'tbs1';				// 数据库名
// -------------- END数据库设定 ------------------ */

// 是否使用 MySQL 持续连接
$_config['db']['pconnect'] = false;
date_default_timezone_set("PRC");
include dirname(__FILE__).'/class/db.php';
include('init_sql.php');
?>