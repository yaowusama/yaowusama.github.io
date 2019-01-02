<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css.css">
</head>
<body>
	<h1>登录</h1>
	<form action="./login.php" method="post">
		<label name="name">name</label>
		<input class="input" type="text" name="name">
		<br>
		<label name="password">密码</label>
		<input class="input" type="text" name="password">
		<br>
		<!--
		<input type="checkbox" name="save_id">保存用户名
		<br>
		-->
		<input class="button" type="submit" name="">
	</form>
	<br>
	<?php
	//得到什么信息就打印出来
		if(isset($_GET['info'])){
			echo $_GET['info'];
		}
	?>
	<br>
	<a href="./register.php">注册</a>

</body>
</html>