<?php 
$target =$_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
 $link = $_SERVER['DOCUMENT_ROOT'].'/public/storage'; symlink($target, $link); 
echo "Done"; 
?>
