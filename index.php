<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>FM - 总有一曲歌会走进你的心房。</title>
	<link rel="stylesheet" href="css/stylesheets/style.css">
	<script src="https://lib.sinaapp.com/js/jquery/1.7/jquery.js"></script>
</head>
<body>
	<div id="player">
		<div class="cover"></div>
		<div class="tag">
			<strong>歌曲名</strong>
			<div class="time">
				<div class="time"><i style="float:left" class="iconfont">&#x3435;</i><div class="timer">0:00</div></div>
			</div>
			<span class="artist">歌手</span>
			<span class="album">专辑</span>
		</div>
		<div style="clear:both;"></div>
		<div class="control">
				<div class="left">
					<div class="repeat"><i class="iconfont">&#xf002f;</i></div>
					<div class="rewind"><i class="iconfont">&#xe6ad;</i></div>
					<div class="playback"><i class="iconfont">&#xe684;</i></div>
					<div id="stop" class="playback"><i class="iconfont">&#xe6ba;</i></div>
					<div class="fastforward"><i class="iconfont">&#xe6a9;</i></div>
					<div class="shuffle"><i class="iconfont">&#xf0031;</i></div>
				</div>
		</div>
		<div class="progress">
				<div class="slider">
					<div class="loaded"></div>
					<div class="pace"></div>
				</div>
				<div class="right">
					<div class="repeat"></div>
					<div class="shuffle"></div>
				</div>
		</div>
	</div>
		<div id="menu">
		<div class="sound">
		<div class="min"><i class="iconfont">&#xf00ae;</i></div>
		<div class="volume">
			<div class="mute"></div>
			<div class="slider">
				<div class="pace"></div>
			</div>
		</div>
		<div class="max"><i class="iconfont">&#xf00b1;</i></div>
		</div>
			<div class="list"><i class="iconfont">&#xe654;</i></div>
	</div>
	<div class="playlist">
		<div id="playlist"></div>
	</div>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery-ui-1.8.17.custom.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/style.js"></script>
</body>
</html>