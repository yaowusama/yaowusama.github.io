<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./huan.css">
	<script src="./jquery.js"></script>
	<script src="./login_jq.js" type="text/javascript"></script>
	<script src="./login.js" type="text/javascript"></script>
</head>
<body>

	<!--登录界面-->
	<div id = "background"></div>

	<div id="login" class="content">
		<div class="content">
			<br>
			<h1>欢迎登录</h1>
			<form id="form" action="./users/login.php" method="post">
				<input id="name" class="input" type="text" name="name" placeholder="用户名">
				<p id = "name_info"><br></p>
				<input id="password" class="input" type="text" name="password" placeholder="密码">
				<p id = "password_info"><br></p>
				<input id="submit" class="button_login" type="submit" name="登录" value="登录">
				<a id="register" class="button_login" href="./users/register.php">注册</a>
			</form>
		</div>
	</div>

	<div id = "header">
		
		<img src="img/logo.png" usemap="logo">
		<a class="button_login" id="login_button" style="position: absolute;right: 15px;top:10px">登录</a>
		<a class="button_login" href="./users/quit.php" style="position: absolute;right: 70px;top:10px">退出</a>
		<map name="logo">
			<area shape="rect" coords="0,0,200,50" href="./" target="_self">
		</map>
	</div>
    <div id = "tag_list">
        <ul>
            <li><a class="button" href="http://www.baidu.com" target="content">度娘</a></li>
            <li><a class="button" href="file/blogs" target="content">水帖</a></li>
            <li><a class="button" href="http://www.runoob.com/html/html-tutorial.html" target="content">菜鸟教程</a></li>
            <li><a class="button" href="">每日美图</a></li>
        </ul>
    </div>
	<div id = "content">
		<iframe src="./file" frameborder="0" name="content"></frame>
	</div>

</body>
</html>