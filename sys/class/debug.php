<?php
class DEBUG{
	static function INIT(){
		$GLOBALS['debug']['time_start'] = self::getmicrotime();
		$GLOBALS['debug']['query_num'] = 0;
	}
	static function getmicrotime(){
		list($usec, $sec) = explode(' ',microtime());
		return ((float)$usec + (float)$sec);
	}
	static function output(){
		$return[] = 'MySQL 请求 <span style="color:green">'.$GLOBALS['debug']['query_num'].'</span> 次';
		$return[] = '运行时间：<span style="color:red">'.number_format((self::getmicrotime() - $GLOBALS['debug']['time_start']), 6).'</span>秒';
		return implode('</li><li>', $return);
	}
	static function query_counter(){
		$GLOBALS['debug']['query_num']++;
	}
}
?>