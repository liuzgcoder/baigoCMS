<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/
include_once("../bg_config/config.inc.php"); //载入配置

$arr_mod = array("article", "tag", "mark", "cate", "upfile", "mime", "thumb", "call", "gen", "user", "admin", "group", "opt", "alert", "logon", "seccode");

$mod = $_GET["mod"];

if (!$mod) {
	$mod = $arr_mod[0];
}

if (!in_array($mod, $arr_mod)) {
	exit("Access Denied");
}

include_once(BG_PATH_MODULE_ADMIN . "admin/" . $mod . ".php");
?>