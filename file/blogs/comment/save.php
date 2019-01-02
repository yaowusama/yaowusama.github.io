<?php 
require_once '../inc/db.php';
require_once '../inc/function.php';
$sql = "insert into comment(name,body,created_at,blog_id) values(:name, :body,:created_at,:blog_id);" ;  
$query = $db->prepare($sql);
$query->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
$query->bindParam(':body',$_POST['body'],PDO::PARAM_STR);
$query->bindParam(':created_at',$created_at,PDO::PARAM_STR);
$query->bindParam(':blog_id',$_POST['blog_id'],PDO::PARAM_INT);
$created_at = date('Y-m-d H:i:s');  //CURRENT_TIMESTAMP
if (!$query->execute()) { 
  print_r($query->errorInfo());
}else{
  redirect_to("../src/show.php?id=" . $_POST['blog_id']);
};
?>