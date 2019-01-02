<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css.css">
</head>
<body>
	<h1>注册</h1>
	<form action="./save.php" method="post">
		<label name="name">name</label>
		<input class="input" type="text" name="name">
		<br>
		<label name="password">密码</label>
		<input class="input" type="text" name="password">
		<br>
		<input class="button" type="submit" name="">
	</form>
	
	<?php
	//得到什么信息就打印出来
		if(isset($_GET['info'])){
			echo $_GET['info'];
		}
	?>
</body>
</html>