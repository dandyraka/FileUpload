<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_POST['ID_SAPI'])){
// Ambil Data yang Dikirim dari Form
$ID_SAPI = $_POST['ID_SAPI'];
$ID_KANDANG = $_POST['ID_KANDANG'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$UMR_SAPI = $_POST['UMR_SAPI'];
$JNS_KELAMIN = $_POST['JNS_KELAMIN'];
$BRT_SAPI = $_POST['BRT_SAPI'];
$JNS_SAPI = $_POST['JNS_SAPI'];


	// Proses simpan ke Database
	$query = "INSERT INTO `sapi` (`ID_SAPI`, `ID_KANDANG`, `TGL_LAHIR`, `UMR_SAPI`, `JNS_KELAMIN`, `BRT_SAPI`, `JNS_SAPI`) VALUES ('".$ID_SAPI."', '".$ID_KANDANG."', '".$TGL_LAHIR."', '".$UMR_SAPI."', '".$JNS_KELAMIN."', '".$BRT_SAPI."','".$JNS_SAPI."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	//$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		//echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		//echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
		echo $query;
	}
}
?>
