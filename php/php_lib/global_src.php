<?php
/**
 * Created by PhpStorm.
 * User: Linker
 * Date: 2018/1/26
 * Time: 13:10
 */

$_G_APP_ROOT = 'http://leseg.top/instructor_rating_system/';
$_G_DB_SERVER = '45.78.24.43';
$_G_DB_NAME = 'counselorquestionnaire';
$_G_YB_APP_ID = '08d85c3b31fd7aea';
$_G_YB_APP_SECRET = 'fd9a6d25ad92f0f2567f522d2cc6ee13';
$_G_REDIRECT_URI = 'http://202.115.195.224/news_sys/index.html&state=3';
$_G_OAUTH_ADDR = 'https://oauth.yiban.cn/code/html?client_id='.$_YB_APP_ID.'&redirect_uri='.$_REDIRECT_URI;

$ret_data_struct = array(
    "Status"=>'',
    "StatusCode"=>'',
    "Description"=>'',
    "Error"=>'',
    "Ret_Data"=>''
);

$_G_ERROR_TEXT = array(
    "db"=>array(
        "con"=>"数据库连接出错",
        "query"=>"数据库语句执行错误",
        "unknown"=>"数据库出现未知错误,code:"
    ),
    "par"=>array(
        "illegal"=>"非法参数，有未填写的项目或错误填写的项目",
        "privilege"=>"您没有权限运行"
    )
);