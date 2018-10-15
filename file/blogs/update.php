<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		require_once "/inc/functions.php";
		require_once "/inc/db.php";
		$id = $_POST['id'];
		$sql = "update posts set title = '".$_POST['title']."',body = '".$_POST['body']."' where id = ".$_POST['id'];
		if(!mysqli_query($db,$sql)){
			echo mysqli_error();
			echo '<br>'.$sql;
		}else{
			redirect_to("show.php?id={$id}");
		}
	 ?>

</body>
</html>