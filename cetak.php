<!DOCTYPE html>
<html lang="en">
  <head>
  <title>&nbsp;</title>
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
  </head>
  
  <body onLoad="cetak();">
    <div class="container">
      

      <div class="jumbotron">
		<center>
		<h2>Data Penjualan Sapi</h2>
		</center>

	<div class="table-responsive">
	<table class="table table-striped">
	<tr>
		<th>NO.</th>
		<th>TGL LAHIR</th>
		<th>UMR SAPI</th>
		<th>JNS KELAMIN</th>
		<th>BRT SAPI</th>
		<th>JNS SAPI</th>
		<th>HARGA</th>
		<th>TERJUAL</th>
		<th>LABA</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM penjualan"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	$i=1;
	$laba_total=0;
	$keuntungan=0;
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		
		//rumus
		$laba = $data['HARGA'] - $data['TERJUAL'];
		$laba_total += $laba;
		$keuntungan += $data['TERJUAL'];
		
		echo "<tr>";
		echo "<td><center>".$i."</center></td>";
		echo "<td><center>".$data['TGL_LAHIR']."</center></td>";
		echo "<td><center>".$data['UMR_SAPI']."</center></td>";
		echo "<td><center>".$data['JNS_KELAMIN']."</center></td>";
		echo "<td><center>".$data['BRT_SAPI']."</center></td>";
		echo "<td><center>".$data['JNS_SAPI']."</center></td>";
		echo "<td><center>Rp. ".number_format($data['HARGA'])."</center></td>";
		echo "<td><center>Rp. ".number_format($data['TERJUAL'])."</center></td>";
		echo "<td><center>Rp. ".number_format($laba)."</center></td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
	<?php echo "<b>Laba : Rp. ".number_format($laba_total)."<br>Keuntungan : Rp. ".number_format($keuntungan)."</b>"; ?>
	</div>
      </div>

    </div>
      <center>Copyright &copy; 2018 SI SAPI PERAH</center>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
	  
	<script type="text/javascript">
		function cetak() { window.print(); }
	</script>
  </body>
</html>
