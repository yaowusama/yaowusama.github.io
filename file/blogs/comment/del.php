<?php 
require_once '../inc/db.php';
require_once '../inc/function.php';
$sql="delete from comment where id=:id";
$blog_id=$_GET['blog_id'];
$query = $db->prepare($sql);
$query->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
if (!$query->execute()) { 
  print_r($query->errorInfo());
}else{
  redirect_to("../src/show.php?id=" . $blog_id);
};
 ?>