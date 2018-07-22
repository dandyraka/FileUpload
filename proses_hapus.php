<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID SAPI yang dikirim oleh index.php melalui URL
$IDSAPI = $_GET['ID_SAPI'];

// Query untuk menampilkan data SAPI berdasarkan ID SAPI yang dikirim
$query = "SELECT * FROM sapi WHERE ID_SAPI='".$IDSAPI."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql


// Query untuk menghapus data SAPI berdasarkan ID SAPI yang dikirim
$query2 = "DELETE FROM sapi WHERE ID_SAPI='".$IDSAPI."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: index.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
