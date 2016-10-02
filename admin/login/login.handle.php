<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/1 0001
 * Time: 15:06
 */

require_once('/xampp/htdocs/article/connect.php');
$user = $_POST['user'];
$pas = $_POST['pas'];

if (($user && $pas) == null) {
    echo '用户名或密码不能为空';
    echo "<script>window.location.href='admin.login.php'</script>";
} else {

    $sql = "select * from userlist where username='$user' and password='$pas' limit 1";
    $query = mysql_query($sql);
    if ($query) {
        $arr = mysql_fetch_array($query);
        if ($arr) {
            if (($arr['username'] != $user) && ($arr['password'] != $pas)) {
                echo $arr['username'] . $arr['$pas'];
                echo "<script>alert('shibai');</script>";
            } else {
                echo 'wellcome!' . $user;
                $_SESSION['$uid'] = $arr['username'];

                echo "<script>window.location.href='" . path . "/article.list.php'</script>";
            }
        } else {
            echo '用户名或密码错误';
        }
    } else {
        echo '数据库命令执行失败！';
    }


    //$row=mysql_query($sql);
//    if(!mysql_query($sql)){
//        echo '登陆失败！'.mysql_errno();
//    }else {
//        echo 'wellcome!' . $user;
//        $_SESSION['$uid']='1';
//        echo "<script>window.location.href='".path."/article.list.php'</script>";
//    }
}


if ($_SESSION['$uid'] == '1') {
    echo "<script>alert('您已经登陆！');window.location.href='" . path . "/article.list.php'</script>";
}








