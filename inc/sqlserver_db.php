<?php
    $serverName = "LOCALHOST,1433";
	$database = "SampleDB";
	$uid = "sa";
	$pwd = "lt894486894";
	
	$db = new PDO( "sqlsrv:server=$serverName;Database=$database", $uid, $pwd);
	if($db){

	}else{
		echo "失败";
	}
?>