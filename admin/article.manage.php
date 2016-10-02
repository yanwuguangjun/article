<?php
/**
 * Created by PhpStorm.
 * User: xh
 * Date: 2016/9/15
 * Time: 20:21
 */


require_once('../connect.php');
$show = "select * from article ORDER by dateline DESC";

$query = mysql_query($show);
if ($query && mysql_num_rows($query)) {

    while ($row = mysql_fetch_assoc($query)) {
        $date[] = $row;
    }
} else {
    echo '执行sql失败！';
    echo mysql_errno();
}


?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
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
    文章管理界面
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
        <?php
        if (!empty($date)) {

            foreach ($date as $value) {
                ?>

                <div
                    style=" line-height: 20px;height: 20px; margin: 10px 20px;border:solid 1px gainsboro;padding: 5px; ">

                    <?php echo $value['title'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['description'] ?>
                    <div style="margin-right: 3%;float: right;">
                        <a href="article.del.handle.php?id=<?php echo $value['id'] ?>">删除</a>
                        <a href="article.modify.php?id=<?php echo $value['id'] ?>">修改</a>
                    </div>
                </div>


                <?php
            }
        } else {
            echo '语法有吴';
        }
        ?>
    </div>
</body>
</html>




















