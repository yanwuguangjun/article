<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/1 0001
 * Time: 18:28
 */

require_once('/xampp/htdocs/article/connect.php');
$user = $_POST['user'];
$pas = $_POST['pas'];
$cha = ($user && $pas);
$check = "select username from userlist where username='$user'";

if ($cha == null) {
    echo '<script>alert("请将表单填写完整") </script>';
    echo "<script>window.location.href='admin.sign.php'</script>";
} else {
    $checku = mysql_num_rows(mysql_query($check));
    if ($checku > 0) {
        echo '<script>alert("此用户名不可用！") </script>';
        echo "<script>alert('重新注册吧!');window.location.href='admin.sign.php'</script>";
    } else {
        $sql = "insert into userlist(username,password)values('$user','$pas') ";
        if (mysql_query($sql)) {

            echo "<script>alert('注册成功!用户名" . $user . "');window.location.href='" . path . "/article.list.php'</script>";
        }
    }

}















