<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

$arr_set = array(
    'base'      => true,
    'db'        => true,
    'pub'       => true,
);

$obj_runtime->run($arr_set);

$ctrl_index = new CONTROL_PUB_UI_INDEX();

$ctrl_index->ctrl_index();
