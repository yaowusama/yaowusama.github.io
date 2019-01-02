<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>edit | 博客 </title>
</head>
<body>
	<?php

		require_once "../inc/db.php";
		$query = $db->prepare('select * from blogs where id = :id;');
		$query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
		$query->execute();
		$post = $query->fetchObject();
	?>
	<!--##得到名为post的表##-->



	<h1>edit post: <?php echo $post->id ?></h1>

	<form action="update.php" method="post">		
		<input type="hidden" name="id" value = "<?php echo $post->id?>"/>
		<label for="title">title</label>
		<input type="text" name="title" value="<?php echo $post->title?>" />
		<br/>
		<label for="body">body</label>
		<textarea name="body"><?php echo $post->body ?></textarea>
		<br/>
		<label for="file">文件名：</label>
		<input type="file" name="file">
		<br/>
		<input type="submit" value="提交" />
	</form>

</body>
</html>