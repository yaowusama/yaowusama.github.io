<?php 
	require_once "../inc/user.php";
	require_once "../inc/function.php";
	if (logged()) {
		$name=$_COOKIE['name'];
		$password=$_COOKIE['password'];
		setcookie('name',"",time()-1,"/");
	 	setcookie('password',"",time()-1,"/");
		redirect_to("/");
	}
?>