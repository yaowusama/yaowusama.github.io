<?php
	require_once '../inc/db.php';
	require_once '../inc/function.php';
	$date= date("Y.m.d");
	$author=$_COOKIE['name'];
	$catalog=$_POST['catalog'];
	$sql = 	"insert into blogs
				(title,body,created_at,author,catalog)
			values('{$_POST['title']}','{$_POST['body']}','{$date}','{$author}','{$catalog}');";


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
			$sql = 	"insert into blogs
					(title,body,created_at,author,catalog,filename)
					values
					('{$_POST['title']}','{$_POST['body']}','{$date}','{$author}','{$catalog}','{$_FILES["myfile"]["name"]}');";
		}
//
	$query = $db->query($sql);
	if (!$query) {
		echo "error";
	}else{
		redirect_to("../");
	};
?>