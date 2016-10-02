<?php
require_once ('connect.php');

if($_SESSION['$uid']==null){
    echo "<script>alert('请先登录！"."{$_SESSION['$uid']}"."')</script>";
    echo "<script>window.location.href='/article/admin/login/admin.login.php';</script>";
}

$num=10;
$page=$_GET['page'];
$hang=$num*($page-1);
$all1=mysql_query('select * from article');
$nesnm=mysql_num_rows($all1);
$demo1x=ceil($nesnm/$num);



$show="select * from article ORDER by dateline DESC limit $hang,$num ";

$query=mysql_query($show);
if($query&&mysql_num_rows($query)){

    while($row=mysql_fetch_assoc($query)){
        $date[]=$row;
    }
}else{
    echo '执行sql失败！';
    echo mysql_errno();
}
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>文章列表</title>
    <style>
        *{
            margin:0 0;
            padding:0 0;
            list-style: none;
        }
        a{
            text-decoration: none;
        }
        .title{
            color: #999999;
            font-size: 20px;
            font-family: "微软雅黑", "宋体", Arial;
            line-height: 25px;
        }
        input{
            line-height: 30px;
            height: 30px;
        }
        li{
            color: white;
        }
        .page{
            margin:auto;
        }
        .page li{
            height: 30px;
            width: 30px;
            border: solid #b2dba1 0.5px;
            float: left;
            color: #b2dba1;
            line-height: 30px;
            text-align: center;
            margin: auto 5px;
        }
        .page li:hover{
            background-color: #93e4ff;
            border:solid #ffbfdd 0.1px;
        }
        .page li a:hover{
            color: white;
            cursor: pointer;
        }
        .float{
            float: left;
            height: 30px;
            line-height: 30px;
            margin:auto 7px;
        }
    </style>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css ">
    <script src="bootstrap/js/jquery-3.1.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div style="width: 100%;height: 30px;margin: auto;background: lightgrey;position: relative;">
</div>
<ul style="min-width:100px;max-width:1100px;height:70px;margin-left: auto;margin-right:auto;background: lightgreen;position: relative;clear: both;font-family: 'Bitstream Charter';font-size:30px;line-height: 70px;">
    <li style="float: left;text-align: center;margin-left:15px;color: white"><a href="article.list.php">首   页</a></li>
    <li style="float: left;text-align: center;margin-left:15px;color: white"><a href="./admin/article.manage.php">文章管理</a></li>
    <li style="float: left;text-align: center;margin-left:15px;color: white"><a href="./admin/article.add.php">发表文章</a></li>
    <li style="float: right;text-align: center;margin-left:15px;color: white"><a href="./admin/login/quit.php">退出</a></li>
</ul>
<div style="width: 1000px;height: auto;margin:auto;padding-top: 10px;">
    <div style="width: 700px;background: cornsilk;float:left">
        <?php
        if(!empty($date)){

            foreach($date as $value){
                ?>

                <div style="height:auto; margin: 0px 20px;border-bottom:solid 1px gainsboro;padding: 5px; ">
                    <a href="article.show.php?id=<?php echo $value['id'] ?>"><h1 class="title"><?php echo $value['title']?></h1></a>
                    <a href="article.show.php?id=<?php echo $value['id'] ?>"><p><?php echo $value['description']?></p></a>
                </div>


                <?php
            }
        }else{
            echo '语法有吴';
        }
        ?>
        <div style="clear: both;margin: 20px auto;width: 500px;background: none;">
            <div class="float"><a href="article.list.php?page=1">首页</a></div>
            <div class="float"><a href="<?php echo $_SERVER['PHP_SELF'].'?page='.($page-1);  ?>">上一页</a></div>
            <div class="float">
                <ul class="page">
                    <li><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a>4</a></li>
                    <li><a>5</a></li>
                </ul>
            </div>
            <div class="float"><a href="<?php echo $_SERVER['PHP_SELF'].'?page='.($page+1);  ?>">下一页</a></div>
            <div class="float"><a  href="article.list.php?page=">末页</a></div>
            <div class="float"><a  href="article.list.php?page=">共<?php echo $demo1x; ?>页</a></div>
            <br>
        </div>

    </div>
    <div style="float:left;margin-left: 15px; width: 285px; padding-top: 10px;">
        <form method="get" action="article.search.php"  >
            <input style="width:225px;" type="text" name="author">
            <input style="width:50px;font-family: 'Bitstream Charter';" type="submit" value="search">
        </form>
    </div>
</div>
</body>
</html>
