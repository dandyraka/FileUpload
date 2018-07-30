<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_GET['ID_SAPI'])){
// Ambil data ID SAPI yang dikirim oleh form_ubah.php melalui URL
$IDSAPI = $_GET['ID_SAPI'];

// Ambil Data yang Dikirim dari Form
$ID_KANDANG = $_POST['ID_KANDANG'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$UMR_SAPI = $_POST['UMR_SAPI'];
$JNS_KELAMIN = $_POST['JNS_KELAMIN'];
$BRT_SAPI = $_POST['BRT_SAPI'];
$JNS_SAPI = $_POST['JNS_SAPI'];


	// Proses upload
	
		// Query untuk menampilkan data sapi berdasarkan ID SAPI yang dikirim
		$query = "SELECT * FROM sapi WHERE ID_SAPI='".$IDSAPI."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		
		// Proses ubah data ke Database
		//UPDATE `sapi` SET `UMR_SAPI` = '15' WHERE `sapi`.`ID_SAPI` = '001'
		$query = "UPDATE `sapi` SET `ID_KANDANG` = '".$ID_KANDANG."', `BRT_SAPI` = '".$BRT_SAPI."' WHERE `sapi`.`ID_SAPI` = '".$IDSAPI."'";
		//$query = "UPDATE sapi SET ID_KANDANG='".$ID_KANDANG."', TGL_LAHIR='".$TGL_LAHIR."', UMR_SAPI='".$UMR_SAPI."', JNS_KELAMIN='".$JNS_KELAMIN."', BRT_SAPI='".$BRT_SAPI."', JNS_SAPI='".$JNS_SAPI."', WHERE `sapi`.`ID_SAPI` ='".$IDSAPI."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
		
		
		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
}
?>


