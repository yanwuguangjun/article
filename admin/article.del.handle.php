<?php
/**
 * Created by PhpStorm.
 * User: xh
 * Date: 2016/9/15
 * Time: 20:21
 */
require_once('../connect.php');
$id = $_GET['id'];
$deletesql = "delete from article where id='$id'";
$query = mysql_query($deletesql);
if ($query) {
    echo "<script>alert('文章删除成功！');window.history.back();</script>";
} else {
    echo "<script>alert('文章删除失败！');window.history.back();</script>";
}







































