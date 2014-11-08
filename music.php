<?php
	//关闭报错
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	//设置页面编码
	header("Content-Type: text/html; charset=utf-8");
	//导入数据库操作类
	include dirname(__FILE__).'/sys/db.config.php';
	//定义默认播放列表
	$list = array(
						'14950804','71266335','273993',
						'623748','7316465','292766',
						'521408','229114','256126',
						'804842','277911','109854272','123811758'
				);
	//初始化变量用于存储歌曲信息
	$resultinfo = array();
	$resultinfo = array();
	$title = array();
	$artist = array();
	$album = array();
	$cover = array();
	$mp3 = array();
	$lrc = array();
	
	//循环获取到歌曲连接
	foreach ($list as $k=>$s) {
		$data=file_get_contents('http://tingapi.ting.baidu.com/v1/restserver/ting?from=webapp_music&method=baidu.ting.song.downWeb&format=jsonp&callback=song_downWeb&songid='.$list[$k].'&bit=24%2C+64%2C+128%2C+256%2C+320&_t=1408340677656');
		preg_match('/song_downWeb\((.*?)\);/', $data,$res);
		$result = $res?json_decode($res[1]):die('error');
		$resultinfo[] = $result->songinfo;
		$resultlink[] = $result->bitrate;
	}
	
	// 将获取到的歌曲信息存储到变量
	foreach ($resultinfo as $k => $s) {
		$title[] = $s->title;
		$artist[] = $s->author;
		$album[] = $s->album_title;
		$cover[] = 'https://labs.cxsir.com/pic.php?p='.$s->pic_big;
		$lrc[] = $s->lrclink;
	}
	
	// 将获取到歌曲连接存入变量
	foreach ($resultlink as $key=>$val) {
		foreach ($val as $k => $s) {			
			$j=0;
			$file_extension=$s->file_extension;
			$file_bitrate=$s->file_bitrate;
				switch(true){
						case $file_extension=='mp3'&&$file_bitrate=='128':
						$mp3[] = 'http://musicdata.baidu.com/data2/music/'.$s->song_file_id.'/'.$s->song_file_id.'.'.$file_extension;$j=1;
						break;
						case $file_extension=='mp3'&&$file_bitrate=='192':
						$mp3[] = 'http://musicdata.baidu.com/data2/music/'.$s->song_file_id.'/'.$s->song_file_id.'.'.$file_extension;$j=1;
						break;
						case $file_extension=='mp3'&&$file_bitrate=='256':
						$mp3[] = 'http://musicdata.baidu.com/data2/music/'.$s->song_file_id.'/'.$s->song_file_id.'.'.$file_extension;$j=1;
						break;
						case $file_extension=='mp3'&&$file_bitrate=='320':
						$mp3[] = 'http://musicdata.baidu.com/data2/music/'.$s->song_file_id.'/'.$s->song_file_id.'.'.$file_extension;$j=1;
						break;
			}
			if($j==1)break;				
		}
	}

	// 判断数据库是否已经存在该歌曲如果不存在则插入到数据库
	foreach ($title as $k => $val) {
		$sql = mysql_fetch_array(mysql_query("SELECT title FROM music WHERE title='".$title[$k]."'"));
		// echo $title[$k];
		if ($title[$k] == '' || $sql[0] == '') {
			echo "当前歌曲信息不完整，无法写入。{$title[$k]}<br />";
		} else if ($title[$k] != $sql[0] && $title[$k] != ''){
			echo "写入成功。{$title[$k]}<br />";
			$insert = DB::query("INSERT INTO music(title,artist,album,cover,mp3,ogg,lrc) VALUES ('".$title[$k]."','".$artist[$k]."','".$album[$k]."','".$cover[$k]."','".$mp3[$k]."','".$mp3[$k]."','".$lrc[$k]."');");
		} else if($title[$k] == $sql[0]) {
			echo "写入失败，可能数据库已经存在。{$title[$k]}<br />";
		}
	}
?>