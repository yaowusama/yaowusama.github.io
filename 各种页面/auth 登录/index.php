<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		require_once "./inc/http_auth.php";
		if (!$_SERVER['PHP_AUTH_USER']) {
			header('WWW-Authenticate: Basic realm="Test auth"');
			header('WWW-Authenticate: Basic realm="Test auth"');
			header('HTTP/1.0 401 Unauthorized');
		}elseif(isAuthor()){
			echo "欢迎你,{$_SERVER['PHP_AUTH_USER']}";
		}else{
			echo "访客游览";
		}
	?>
</body>
</html>