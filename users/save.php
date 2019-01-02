<?php
	require_once "../inc/db.php";
	require_once "../inc/function.php";
//获取参数
	$name=$_POST['name'];
	$password=$_POST['password'];
//确认正确输入
	$sql="select distinct name from users";
	$query=$db->query($sql);
	foreach ($query as $obj) {
		if ($obj->name == $name) {
			redirect_to("./register.php?info=用户名已存在");
		}
	}
//密码加密
	$hash = password_hash($password, PASSWORD_DEFAULT);
	$sql="insert into users(name,password) values('{$name}','{$hash}')";
	$query=$db->exec($sql);
	if($query){
		redirect_to("../?info=注册成功，欢迎登陆");
		setcookie('name',$name,time()+3600,'/');
		setcookie('password',$password,time()+3600,'/');
	}else{
		echo "error";
	}
?>