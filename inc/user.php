<?php
	require_once "db.php";
	require_once "function.php";
	$name = $_COOKIE['name'];
	$password = $_COOKIE['password'];
	$sql="select * from users where name ='{$name}'";
	$query=$db->query($sql);
	$user=$query->fetchObject();
	$name=$user->name;
	$password=$user->password;

//函数
	function isUser(){
		if ($name == $_COOKIE['name']) {
			return 1;
		}else{
			echo "user";
			return 0;
		}
	}
	function isRoot(){
		$name=$_COOKIE['name'];
		if($name=='root'){
			return 1;
		}
		else{
			return 0;
		}
	}
	function logged(){
		if (isset($_COOKIE['name'])){
			return 1;
		}else{
			return 0;
		}
	}
?>