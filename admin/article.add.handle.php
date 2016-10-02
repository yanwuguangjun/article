<?php
/**
 * Created by PhpStorm.
 * User: xh
 * Date: 2016/9/15
 * Time: 20:20
 */
require_once('../connect.php');
mysql_query('set names utf8_bin');
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();

$checkform = ($title && $author && $description && $content);

if ($checkform == null) {
    echo '<script>alert("请将表单填写完整") </script>';
    echo "<script>alert('文章发布失败，重新发布一篇文章吧!');window.location.href='article.add.php'</script>";
} else {
    $insertsql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content','$dateline')";
    if (mysql_query($insertsql)) {
        echo "<script>alert('文章发布成功！再发一篇吧！');window.location.href='article.add.php'</script>";
        echo '成功';
    } else {
        echo "<script>alert('文章发布失败，重新发布一篇文章吧!');window.location.href='article.add.php'</script>";
        echo mysql_errno() . '<br/>';
    }
}

























