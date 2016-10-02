<?php
/**
 * Created by PhpStorm.
 * User: xh
 * Date: 2016/9/15
 * Time: 20:19
 */

require_once('config.php');
//启动session
 if(!session_start()){
     echo 'session启动失败';
 };

//连接数据库
if(!$link=mysql_connect(HOST,USERNAME,PAS)){
    echo mysql_errno().'<br/>';
}

//选择数据库
if(!mysql_select_db('article')){
    echo mysql_errno().'<br/>';
}

//设定字符集
if(!mysql_query('set names utf8')){
    echo mysql_errno().'<br/>';
}




























