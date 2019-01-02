<?php
$dir="./img/";
$filename="1.jpg";
$f_url=$dir.$filename;
$fileres = file_get_contents($dir.$filename);
header('Content-type: image/jpeg');
echo $fileres;
 ?>
