<?php 
	require_once '../inc/db.php';
	require_once '../inc/function.php';
	
	$id = $_GET['id'];
	$sql = "delete from blogs where id = {$id}";
//删除博客
	$query = $db->query($sql);
	if(!$query){
		echo "error";
	}
//删除相关评论
	$sql = "delete from comment where blog_id = {$id}";
	$query = $db->query($sql);
	if(!$query){
		echo "error";
	}
	else{
		redirect_to("../");
	}
 ?>