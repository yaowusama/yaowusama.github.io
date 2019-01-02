<?php
	function isAuthor(){
		$password = "173524930";
		$auth = "yaowusama";
		if (
			$_SERVER['PHP_AUTH_USER']==$auth && $_SERVER['PHP_AUTH_PW']==$password) {
			return 1;
		}else{
			return 0;
		}
	}
?>