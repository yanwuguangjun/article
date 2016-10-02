<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/1 0001
 * Time: 18:28
 */
if (!require_once('/xampp/htdocs/article/config.php')) {
    echo 'require filed';
}
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册用户</title>
    <link rel="stylesheet" href="<?php echo path; ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo path; ?>/bootstrap/css/bootstrap-theme.min.css ">
    <script src="<?php echo path; ?>/bootstrap/js/jquery-3.1.0.min.js"></script>
    <script src="<?php echo path; ?>/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row" style="margin-top: 200px;">
    <div class="col-xs-6 col-md-4"></div>
    <div class="col-xs-6 col-md-4">
        <form role="form" action="sign.handle.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">用户名</label>
                <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密码</label>
                <input type="password" name="pas" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
            </div>
            <button type="submit" class="btn btn-default">注册</button>
        </form>
    </div>
    <div class="col-xs-6 col-md-4"></div>
</div>


</body>
</html>
