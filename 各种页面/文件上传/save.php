<?php
	require_once '../inc/db.php';
	require_once '../inc/function.php';
	
	if ($_FILES["myfile"]["error"] > 0){
    	echo "Error: " . $_FILES["myfile"]["error"] . "<br />";
    }else{
	    echo "Upload: " . $_FILES["myfile"]["name"] . "<br />";
	    echo "Type: " . $_FILES["myfile"]["type"] . "<br />";
	    echo "Size: " . ($_FILES["myfile"]["size"] / 1024) . " Kb<br />";
	    echo "Stored in: " . $_FILES["myfile"]["tmp_name"]."<br />";

		$dir = './upload/'.iconv('UTF-8','gbk',basename($_FILES['myfile']['name']));
		if (move_uploaded_file($_FILES['myfile']['tmp_name'],$dir)){
            echo '文件上传成功';
        }
        else{
            echo '文件上传失败';
        }
    }
    if (!$query) {
		echo "error_save";
	}else{
		redirect_to("../");
	}
?>