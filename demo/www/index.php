<?php
function utime() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
define('START_TIME',utime());
define('APP_PATH', '../app/');
header('Content-Type:text/html; charset=utf-8');
require_once('../../initphp/initphp.php'); //导入配置文件-必须载入
require_once(APP_PATH . 'conf/comm.conf.php'); //公用配置
InitPHP::init(); //框架初始化
echo '<ignore><span style="color:#FFF;background:#000">';
echo number_format(utime()-START_TIME,5).'s';
echo '</span></ignore>';