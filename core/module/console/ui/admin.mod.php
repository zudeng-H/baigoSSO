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
    'base'          => true, //基本设置
    'ssin'          => true, //启用会话
    'db'            => true, //连接数据库
);
$obj_runtime->run($arr_set);


$ctrl_admin = new CONTROL_CONSOLE_UI_ADMIN(); //初始化管理员对象

switch ($GLOBALS['route']['bg_act']) {
    case 'show':
        $ctrl_admin->ctrl_show(); //显示
    break;

    case 'auth':
        $ctrl_admin->ctrl_auth(); //授权表单
    break;

    case 'form':
        $ctrl_admin->ctrl_form(); //创建、编辑表单
    break;

    default:
        $ctrl_admin->ctrl_list(); //列出
    break;
}
