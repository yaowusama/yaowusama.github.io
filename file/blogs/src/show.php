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
    require_once '../inc/user.php';
    
    $query = $db->prepare('select * from blogs where id = :id;');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetchObject();    
  ?>
        <div id = "UI"> 
          <ul>
            <a href="/"><li><img src="img/主页.png"><br><p>主页</p></li></a>
            <a href=""><li><img src="img/签到.png"><br><p>签到</p></li></a>
            <a href=""><li><img src="img/邮箱.png"><br><p>邮箱</p></li></a>
            <a href="../"><li><img src="img/返回.png"><br><p>返回</p></li></a>
            <a href="#"><li><img src="img/置顶.png"><br><p>置顶</p></li></a>
          </ul>
        </div>
        <div id = "top">
          <h1><?php echo $post->id; ?>:<?php echo $post->title; ?></h1>
          <p>分类:<?php 
                    if (empty($post->catalog)) {
                      echo "无";
                    }else{
                      echo $post->catalog;
                    }
                 ?></p>
          <p>创作时间:<?php echo $post->created_at; ?>    </p>
          <a href="./author.php?author=<?php echo $post->author ?>"
            >作者:<?php echo $post->author; ?></a>
        </div>
        <div id = 'content'>
          
          
          <p><?php echo $post->body; ?></p>
          <br>

          <?php
          if (!empty($post->filename)) {
            $dir="./upload/";
            $filename=$post->filename;
            $f_url=$dir.$filename;
            echo "<img src=$f_url>";
          }
            

            $id=$_GET['id'];
            if (logged()&&($user->name==$post->author||$user->power>=5)){
              echo  "<a href=edit.php?id=$id>改</a>".
                    "<a href=del.php?id=$id>删</a>";
            }
          ?>

          <hr>

          <h4>评论列表</h4>
            <ul>
          <?php
            $query = $db->query('select * from comment where blog_id = ' . $_GET['id']);
            while ( $comment = $query->fetchObject() ) {
          ?>
          <div class="comment">
                 <li>
                    <h4><?php echo $comment->name; ?>:</h4>
                    <p><?php echo $comment->body; ?></p>
                    <?php
                      $id=$comment->id;
                      $blog_id=$_GET['id'];
                      if (logged()&&($user->name==$post->author||$user->power>=5||$user->name==$comment->name)){
                        echo  "<a href=../comment/del.php?id=$id&blog_id=$blog_id>删</a>";
                      }
                    ?>
                    <p style="float: right;"><?php echo date('Y-m-d',strtotime($comment->created_at));?></p>
                  </li> 
          </div>
          <?php } ?>
            </ul>
          <br>
          <br>
          <br>
          <hr>
          写点评论
          <form action="../comment/save.php" method="post">
            <input type="hidden" name='blog_id' value='<?php echo $_GET['id']; ?>'/>
            
            <input type="hidden" name='name' value='<?php
                                                  if (logged()){
                                                    echo $user->name;
                                                  }else
                                                    echo "游客";
                                                ?>'/>
            <label for="body"></label>
            <textarea name="body"></textarea>
            <br/>
            <input class="submit" type="submit" value="提交" />
          </form>
        </div>
        <script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
</body>
</html>