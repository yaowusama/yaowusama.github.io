<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>show | 博客</title>
  <link rel="stylesheet" type="text/css" href="css.css">
  <script src="./jquery.js"></script>
  <script src="./animate.js" type="text/javascript"></script>
</head>
<body>
  <?php
    require_once '../inc/db.php'; 
    require_once '../inc/function.php'; 
    require_once '../inc/user.php';
    $name = $_GET['author'];
    $sql="select * from blogs where author = '{$name}'";
    $query=$db->query($sql);
  ?>
        <div id = "UI"> 
          <ul>
            <a href=""><li><img src="img/主页.png"><br><p>主页</p></li></a>
            <a href=""><li><img src="img/签到.png"><br><p>签到</p></li></a>
            <a href=""><li><img src="img/邮箱.png"><br><p>邮箱</p></li></a>
            <a href="../"><li><img src="img/返回.png"><br><p>返回</p></li></a>
            <a href="#"><li><img src="img/置顶.png"><br><p>置顶</p></li></a>
          </ul>
        </div>
        <div id = "top">
          
        </div>
        <div id = 'content'>
          <ul>
            <?php 
              foreach ($query as $post){
            ?>
              <li>
                <a href="./show.php?id=<?php echo $post['id'] ?>">
                  <p><?php echo $post['title'] ?></p>
                  <p><?php echo $post['created_at'] ?></p>
                </a>
              </li>
            <?php
              }
            ?>
          </ul>
        </div>
        <script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
</body>
</html>