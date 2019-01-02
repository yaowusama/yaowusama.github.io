<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css.css">
	<!--##数据源信息##-->
	<script src="./jquery.js"></script>
	<script src="./test.js" type="text/javascript"></script>
</head>
<body>

	<!--
	-->
	<div id = "background"></div>
	<div id="top" class="content">
		<h1 id="a">欢迎使用商城管理系统</h1>
		<div id="login_button" class="button">
			<p>登录</p>
		</div>
	</div>
	<div id="login" class="content">
		<div class="content">
		<h1>欢迎登录</h1>
			<form id="form" action="./src/sqlserver.php" method="post">
				<label for="sno">用户名</label>
				<input class="input" type="text" name="sno" placeholder="用户名">
				<br>
				<label for="password">密码</label>
				<input class="input" type="text" name="password" placeholder="密码">
				<br>
				<input id="submit" class="button" type="submit" name="登录" value="登录">
			</form>
		</div>
	</div>

	<!--
	<div id="center" class="content">
		<form id="form" action="./src/sqlserver.php" method="post">
			<label for="id">用户名</label>
			<input class="input" type="text" name="sno">
			<input class="button" type="submit" name="">
			<br>
			<label for="id">密码</label>
			<input class="input" type="text" name="sno">
			<input class="button" type="submit" name="">
		</form>
	</div>
	-->
</body>
</html>