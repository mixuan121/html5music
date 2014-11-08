<?php
//初始化
DB::query("CREATE TABLE if not exists setting
(
id int(3) primary key not  null  auto_increment,
_key varchar(200) not  null,
value varchar(200),
time	varchar(200),
ip	varchar(200)
)default charset=utf8"
);//设置表

DB::query("CREATE TABLE if not exists sys_log
(
log_id int(8) primary key not  null  auto_increment,
user_id int(5),
type varchar(50),
description varchar(1000),
time varchar(50)
)default charset=utf8"
);//系统日志

DB::query("CREATE TABLE if not exists music
(
id int(3) primary key not null auto_increment,
title varchar(200),
artist varchar(200),
album varchar(200),
cover varchar(200),
mp3 varchar(200),
ogg varchar(200),
lrc varchar(200)
)default charset=utf8"
); //设置存储数组的表
?>