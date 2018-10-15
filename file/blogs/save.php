<?php
require_once '/inc/db.php';
require_once '/inc/functions.php';
$sql = 	"insert into posts(title,body) values('{$_POST['title']}', '{$_POST['body']}' ) ;" ;
if (!mysqli_query($db,$sql)) {
	echo mysqli_error($db);
	echo '<br>' .  $sql;
}else{
	redirect_to("./");
};
?>