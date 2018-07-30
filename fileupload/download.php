<?php
if(isset($_GET['filename'])){
	$filename = $_GET['filename'];
	$path = "uploads/".$filename;
	header("Content-Description: File Transfer"); 
	header("Content-Type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename='" . basename($path) . "'"); 
	readfile ($path);
	exit();
}
?>