<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		require_once "../inc/function.php";
		require_once "../inc/db.php";
		$id = $_POST['id'];
		$sql = "update blogs set 
					title = '".$_POST['title']."',
					body = '".$_POST['body']."',
					created_at = '".date("Y.m.d")."'
				where id = ".$_POST['id'];
//文件上传
		if (isset($_FILES["myfile"])) {
			if ($_FILES["myfile"]["error"] > 0){
		    	echo "Error: " . $_FILES["myfile"]["error"] . "<br />";
		    }else{
			    echo $_FILES["myfile"]["name"]."<br/>";

				$dir = './upload/'.iconv('UTF-8','gbk',basename($_FILES['myfile']['name']));
				//文件上传
				if (move_uploaded_file($_FILES['myfile']['tmp_name'],$dir)){
		            $info='文件上传成功';
		        }
		        else{
		            $info='文件上传失败';
		        }
	    	}
			$sql = "update blogs set 
						title = '".$_POST['title']."',
						body = '".$_POST['body']."',
						created_at = '".date("Y.m.d")."',
						filename = '".$_FILES["myfile"]["name"].
						"' where id = ".$_POST['id'];
		}
		echo $sql;
//返回
		$query = $db->query($sql);
		if(!$query){
			echo 'error';
		}else{
			//重定向
			redirect_to("show.php?id={$id}");
		}
	 ?>

</body>
</html>