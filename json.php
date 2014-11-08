<?php 
	//导入数据库操作文件
	include dirname(__FILE__).'/sys/db.config.php';
	//关闭PHP报错
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	//获取数据
	$arr = DB::fetch_all("SELECT title,artist,album,cover,mp3,ogg,lrc FROM music");
	//将取到的数据转为JSON
	$json = json_encode($arr);
	//数据JSON数据用于JS获取
	echo $json;
 ?>
