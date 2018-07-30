<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID SAPI yang dikirim oleh index.php melalui URL
$IDSAPI = $_GET['ID_SAPI'];
$IDKNDG = $_GET['ID_KANDANG'];

// Query untuk menghapus data SAPI berdasarkan ID SAPI yang dikirim
$query2 = "DELETE FROM sapi WHERE ID_SAPI='".$IDSAPI."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: index.php"); // Redirect ke halaman index.php
	$query3 = "update kandang set KAPSTS_KANDANG = KAPSTS_KANDANG+1 where ID_KANDANG = '".$IDKNDG."'";
	$sql3 = mysqli_query($connect, $query3);
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
