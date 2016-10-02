<?php
/**
 * Created by PhpStorm.
 * User: xh
 * Date: 2016/9/15
 * Time: 20:20
 */


require_once('../connect.php');
$id = $_GET['id'];
$query = mysql_query("select * from article where id=$id");
$date = mysql_fetch_assoc($query);
echo mysql_errno();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>文章修改界面</title>
    <style>
        * {
            margin: 0 0;
            padding: 0 0;
            list-style: none;
        }
    </style>
</head>
<body>
<div
    style="background-color: #0a8cd2;height: 100px;width: 100%;text-align: center;font-family: 禹卫书法隶书简体;font-size: 35px;line-height: 100px;">
    文章修改页面
</div>
<div style="width: 100%;height: auto;">
    <div id="left" style="float: left;background-color: lightgrey;padding: 25px auto;width: 20%;height: 70%;">
        <ul style="margin: 25px 20px auto 20px;">
            <li><a href="../article.list.php">首 页</a></li>
            <li><a href="article.add.php">发布文章</a></li>
            <li><a href="article.manage.php">文章列表</a></li>
        </ul>
    </div>
    <div id="right" style="float: left;width: 80%;height: 70%;background-color: lightgoldenrodyellow;">

        <form action="article.modify.handle.php" id="formadd" method="post">
            <input type="hidden" name="id" value="<?php echo $date['id'] ?>">
            标题：<input type="text" name="title" form="formadd" value="<?php echo $date['title']; ?>"><br/><br/>
            作者：<input type="text" name="author" form="formadd" value="<?php echo $date['author']; ?>"><br/><br/>
            简介：<textarea style="width: 800px;" type="text" name="description"
                         form="formadd"><?php echo $date['description']; ?></textarea><br/><br/>
            内容：<textarea style="width: 800px;height: 200px;" type="text" name="content"
                         form="formadd"><?php echo $date['content']; ?></textarea><br/><br/>
            <input style="background-color: yellowgreen;border-color: lightyellow;" type="submit" value=" 提 交 ">
            <time></time>

        </form>

        </d>
    </div>
    <div
        style="clear:both;padding:10px 30px; clear: both;padding: 20px 100px auto 100px;height: 100px;font-size: 20px;color: lightslategrey;font-family: "
        微软雅黑
    ", "宋体", Arial;">版权所有：星期五的羊
</div>
</body>
</html>











