<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 博客</title>
  <link rel="stylesheet" type="text/css" href="./css.css">
</head>

<body>
  <?php
    require_once './inc/db.php';
    require_once './inc/user.php';
//分类功能
//判断all
    require_once "./inc/db.php";
    $sql="select count(id) as total from blogs";
    $query=$db->query($sql);
    $obj=$query->fetchObject();
    $blog_num=$obj->total;


    if (isset($_GET['page'])) {
      $curr=($_GET['page']-1)*5;
    }else{
      $curr=0;
    }

    if(isset($_POST["catalog"])){
      $catalog=$_POST["catalog"];
      if ($catalog=='all') {
        $sql="select * from blogs order by id desc";
      }else{
        $sql="select * from blogs where catalog = '{$catalog}' order by id desc";
      }
    }else{
      $sql="select * from blogs order by id desc";
    }
    $sql=$sql." limit $curr,5 ";
    $query=$db->query($sql);
    ?>
    <form action="./" method="post" >
      <select name='catalog'>
        <option value="all">all</option>
        <option value="技术贴">技术贴</option>
        <option value="分享">分享</option>
      </select>
      <input type="submit" name="emmm" value="提交">
    </form>
  <?php
    foreach ($query as $post) {
  ?>
    <a target="_parent" href='src/show.php?id=<?php echo $post['id'];?>'>
      <div class="item">
        <div id = 'img'>
          <img src="./img/头像.jpg">
        </div>
        <div id = 'intc'>
          <p><?php echo $post['id']; ?>:<?php echo $post['title']; ?></p>
          <br>
          <p><?php echo $post['body']; ?></p>
        </div>
          <p><?php echo $post['created_at']; ?></p>
          <p>作者<?php echo $post['author']; ?></p>
        <?php
          $id=$post['id'];
          if (logged()&&$user->power>=5) {
            echo  "<a href=src/edit.php?id=$id>改</a>".
                  "<a href=src/del.php?id=$id>删</a>";
          }
        ?>
      </div>
    </a>
    <hr>
  <?php } ?>
  <ul id="page">
    
    <a href="./index.php?page=1"><li>首页</li></a>
    <?php 
      $page=1;
      do{
    ?>  
    <a href="./index.php?page=<?php echo $page; ?>"><li><?php echo $page; ?></li></a>
    
    <?php
      $page++;
      }while(($blog_num-=5)>0)
    ?>
    <a href="./index.php?page=<?php echo (int)($curr/5)+2; ?>"><li>></li></a>
  </ul>
  <br>
  <?php 
    if (logged()) {
      echo "<a href='src/new.html'>新增</a>";    
    }
   ?>
</body>
</html>