<?php
		require_once "./inc/db.php";
		$sql="select * from blogs limit 0,10 order by id desc";
		$query=$db->query($sql);
?>