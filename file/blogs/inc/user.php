<?php
	require_once "db.php";

	if (logged()) {
		$name = $_COOKIE['name'];
		$password = $_COOKIE['password'];
		$sql="select * from users where name = '{$name}'";
		$query=$db->query($sql);
		$user=$query->fetchObject();
		$name=$user->name;
		$password=$user->password;
	}

	function logged(){
		if (isset($_COOKIE['name'])){
			return 1;
		}else{
			return 0;
		}
	}
//函数
?>