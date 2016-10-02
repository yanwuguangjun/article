<?php
/**
 * Created by PhpStorm.
 * User: xh
 * Date: 2016/9/15
 * Time: 20:21
 */

require_once('../connect.php');


$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();

$checkform = ($title | $author | $description | $content);

if ($checkform == null) {
    echo '<script>alert("请将表单填写完整") </script>';
} else {
    $updatesql = "update article set title='$title',author='$author',description='$description',content='$content',dateline='$dateline' where id=$id";
}


if (mysql_query($updatesql)) {
    echo "<script>alert('文章更新成功！发布一篇文章吧！');window.location.href='article.add.php'</script>";
} else {
    echo "<script>alert('文章更新失败，重新修改吧!');</script>";
    echo '错误' . mysql_errno();
}












