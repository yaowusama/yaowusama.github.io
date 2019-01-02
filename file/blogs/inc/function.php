<?php
	function redirect_to($dest){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $dest");
	}
	function redirect_back(){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: {$SERVER['HTTP_REFERER']}");
	}
	function redirect_home(){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: {$_SERVER['SERVER_NAME']}");
	}
?>