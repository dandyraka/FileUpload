<?php
if(isset($_GET['filename'])){
	$filename = $_GET['filename'];
	$path = "uploads/".$filename;
	if (!unlink($path)){
		echo ("Gagal menghapus berkas $filename");
	} else {
		echo ("Berkas $filename terhapus!");
	}
}
?>