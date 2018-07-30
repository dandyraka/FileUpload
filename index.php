<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sewa DVD Termurah dan Terlengkap">
    <meta name="author" content="DVD Kuy!">
    <title>si sapi perah</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="assets/css/chart.css">
	<script type="text/javascript">
		$(document).ready(function(){
			var url = $("#cartoonVideo").attr('src');
			$("#myModal").on('hide.bs.modal', function(){
				$("#cartoonVideo").attr('src', '');
			});
			$("#myModal").on('show.bs.modal', function(){
				$("#cartoonVideo").attr('src', url);
			});
		});
	</script>
	<style type="text/css">
		.modal-content video{
			margin: 0 auto;
			display: block;
		}
		.modal-content img{
			margin: 0 auto;
			display: block;
		}
	</style>
  </head>
  
  <body>
    <div class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">si sapi perah</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
			  <li class="active"><a href="index.php">Home</a></li>
			  <li><a href="upload.php">upload</a></li>
			  <li><a href="transaksi.php">transaksi</a></li>
            </ul>
          </div>
        </div>
      </div>
      

      <div class="jumbotron">
		<center>
		<h2>Sistem Informasi Sapi Perah</h2>
		<h4>Data Sapi</h4>
		</center>

	<a href="form_simpan.php"><button type="button" class="btn btn-primary">Tambah Data</button></a><br><br>
	<div class="table-responsive">
	<table class="table table-striped">
	<tr>
		<th>ID SAPI</th>
		<th>ID KANDANG</th>
		<th>TGL LAHIR</th>
		<th>UMR SAPI</th>
		<th>JNS KELAMIN</th>
		<th>BRT SAPI</th>
		<th>JNS SAPI</th>
		<th>KUOTA KANDANG</th>
		<th>Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM sapi"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		//kandang
		$query1 = "SELECT KAPSTS_KANDANG FROM kandang where ID_KANDANG ='".$data['ID_KANDANG']."'"; // Query untuk menampilkan semua data siswa
		$sql1 = mysqli_query($connect, $query1); // Eksekusi/Jalankan query dari variabel $query
		$datax = mysqli_fetch_array($sql1);
	
		echo "<tr>";
		echo "<td><center>".$data['ID_SAPI']."</center></td>";
		echo "<td><center>".$data['ID_KANDANG']."</center></td>";
		echo "<td><center>".$data['TGL_LAHIR']."</center></td>";
		echo "<td><center>".$data['UMR_SAPI']."</center></td>";
		echo "<td><center>".$data['JNS_KELAMIN']."</center></td>";
		echo "<td><center>".$data['BRT_SAPI']."</center></td>";
		echo "<td><center>".$data['JNS_SAPI']."</center></td>";
		echo "<td><center>".$datax['KAPSTS_KANDANG']."</center></td>";
		echo "<td><a href='form_ubah.php?ID_SAPI=".$data['ID_SAPI']."'><button type='button' class='btn btn-info'>Ubah</button></a> <a href='proses_hapus.php?ID_SAPI=".$data['ID_SAPI']."&ID_KANDANG=".$data['ID_KANDANG']."'><button type='button' class='btn btn-danger'>Hapus</button></a></td>";
		echo "</tr>";
	}
	?>
	</table>
	</div>
      </div>

    </div>
      <center>Copyright &copy; 2018 SI SAPI PERAH</center>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
