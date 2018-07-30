<?php
if(isset($_GET['filename'])){
	$filename = $_GET['filename'];
	$path = "uploads/".$filename;
	if (!unlink($path)){
		echo ("Gagal menghapus berkas $filename");
	} else {
		echo ("Berkas $filename terhapus!");
		$open = fopen('log.txt', 'a');
		fwrite($open, date('Y/m/d').' '.$filename.' - dihapus'.PHP_EOL);
		fclose($open);
	}
}
?>