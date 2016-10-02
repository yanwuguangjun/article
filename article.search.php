<?php
/**
 * Created by PhpStorm.
 * User: xuhui
 * Date: 16-9-20
 * Time: 下午5:15
 */
require_once ('connect.php');

$key=$_GET['author'];


$show="select * from article where author like '%$key%' ORDER by dateline DESC";

$query=mysql_query($show);



//if($query){
//    echo '执行sql成功';
//}
//if(mysql_num_rows($query)>0){
//    echo '返回数据条数成功';
//}else{
//    echo mysql_errno();
//    echo '数据条数未知';
//}


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
    </style>
</head>
<body>
<div style="width: 100%;height: 30px;margin: auto;background: lightgrey;position: relative;">
</div>
<ul style="min-width:100px;max-width:1100px;height:70px;margin-left: auto;margin-right:auto;background: lightgreen;position: relative;clear: both;font-family: 'Bitstream Charter';font-size:30px;line-height: 70px;">
    <li style="float: left;text-align: center;margin-left:15px;color: white"><a href="article.list.php">首   页</a></li>
    <li style="float: left;text-align: center;margin-left:15px;color: white"><a href="./admin/article.manage.php">文章管理</a></li>
    <li style="float: left;text-align: center;margin-left:15px;color: white"><a href="./admin/article.add.php">发表文章</a></li>
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
        <div style="clear: both;margin: auto;width: 100%;background: none;">
            下一页
        </div>
    </div>
    <div style="float:left;margin-left: 15px; width: 285px; ">
        <form action="article.search.php" id="search" style="margin-top: 5px;" method="get">
            <input style="width:225px;" type="text" id="s" name="author" value="">
            <input style="width:50px;font-family: 'Bitstream Charter';" type="submit" id="x" value="search">
        </form>
    </div>
</div>
</body>
</html>





