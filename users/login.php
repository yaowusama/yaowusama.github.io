<?php
	require_once "../inc/db.php";
	require_once "../inc/function.php";
	$name=$_POST['name'];
	$password=$_POST['password'];
	if (!isset($name)) {
		redirect_to("/?info=请输入用户名");
	}

//$hash = password_hash($password, PASSWORD_DEFAULT);
	$sql="select password from users where name = '{$name}'";
	$query=$db->query($sql);
	$obj=$query->fetchObject();
//确认密码
	if(password_verify($password,$obj->password)){
	 	setcookie('name',$name,time()+3600,"/");
	 	setcookie('password',$password,time()+3600,"/");
	 	//echo $_COOKIE['name'].time();
	 	redirect_to("../");
	}else{
		redirect_to("../?info=密码错误");
	}
?>