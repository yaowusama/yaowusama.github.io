<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>动态网页</title>
</head>
<body>
	<?php
		require_once './inc/db.php';
		//require_once $_SERVER['DOCUMENT_ROOT'] . "./inc/db.php";
		$id = $_GET['id'];
		$sql = 'select * from posts where id = ' . $id;
		$query = mysqli_query($db,$sql);
		$post = mysqli_fetch_object($query);
	?>
	<h1><?php echo $post->title ?></h1>
	<p><?php echo $post->body ?></p>
</body>
</html>