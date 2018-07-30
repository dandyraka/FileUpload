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
			  <li><a href="index.php">Home</a></li>
			  <li class="active"><a href="transaksi.php">transaksi</a></li>
			  <li><a href="upload.php">upload</a></li>
            </ul>
          </div>
        </div>
      </div>
      

      <div class="jumbotron">
		<center>
		<h2>Sistem Informasi Sapi Perah</h2>
		<h4>Data Sapi</h4>
		</center>

	<div class="jumbotron">
        <!-- MODAL -->
        <div id='modal_tambah_transaksi' class='modal fade'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title'>Tambah Data</h4>
              </div>
              <div class='modal-body'>
                <form method="POST">
                  ID SAPI : <input type="text" name="ID_SAPI" class="form-control"><br>
				  ID KANDANG : <input type="text" name="ID_KANDANG" class="form-control"><br>
				  TGL LAHIR : <input type="text" name="TGL_LAHIR" class="form-control"><br>
                  UMR SAPI : <input type="text" name="UMR_SAPI" class="form-control"><br>
				  JNS KELAMIN : <input type="text" name="JNS_KELAMIN" class="form-control"><br>
                  BRT SAPI : <input type="text" name="BRT_SAPI" class="form-control"><br>
                  JNS SAPI : <input type="text" name="JNS_SAPI" class="form-control"><br>
                  HARGA : <input type="text" name="HARGA" class="form-control"><br>
				  TERJUAL: <input type="text" name="TERJUAL" class="form-control"><br>
                  <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                </form>
                <?php
                  include 'koneksi.php';
                  if(isset($_POST['submit'])){
                  	$input_ID_SAPI = $_POST['ID_SAPI'];
                  	$input_ID_KANDANG = $_POST['ID_KANDANG'];
					$input_TGL_LAHIR = $_POST['TGL_LAHIR'];
                  	$input_UMR_SAPI = $_POST['UMR_SAPI'];
                  	$input_JNS_KELAMIN = $_POST['JNS_KELAMIN'];
                  	$input_BRT_SAPI = $_POST['BRT_SAPI'];
                  	$input_JNS_SAPI = $_POST['JNS_SAPI'];
                  	$input_HARGA = $_POST['HARGA'];
                  	$input_TERJUAL = $_POST['TERJUAL'];
					$qwery = "INSERT INTO `penjualan` (`ID_SAPI`, `ID_KANDANG`, `TGL_LAHIR`, `UMR_SAPI`, `JNS_KELAMIN`, `BRT_SAPI`, `JNS_SAPI`, `HARGA`, `TERJUAL`) VALUES ('".$input_ID_SAPI."', '".$input_ID_KANDANG."', '".$input_TGL_LAHIR."', '".$input_UMR_SAPI."', '".$input_JNS_KELAMIN."', '".$input_BRT_SAPI."', '".$input_JNS_SAPI."', '".$input_HARGA ."' , '".$input_TERJUAL."');";
                  	$add = mysqli_query($connect, $qwery);
		
                  	if($add){
                  		echo "<br><div class='alert alert-success'>Berhasil menambah list film</div>";
                  	} else {
                  		echo "<br><div class='alert alert-warning'>Gagal menambah list film</div>";
                  	}
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>
        <a href="#modal_tambah_transaksi" data-toggle="modal"><button type="button" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data</button></a>
	<a onClick="doPrint();"><button type="button" class="btn btn-primary">Cetak</button></a><br><br>
	<div class="table-responsive">
	<table class="table table-striped">
	<tr>
		<th>NO.</th>
		<th>ID</th>
		<th>PELANGGAN</th>
		<th>TGL TRANSAKSI</th>
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
		echo "<td><center>".$data['ID_SAPI']."</center></td>";
		echo "<td><center>".$data['PEMESAN']."</center></td>";
		echo "<td><center>".$data['TGL_TRANSAKSI']."</center></td>";
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
		function doPrint(){
			window.open("cetak.php", "status=yes,menubar=no,location=no,toolbar=yes,scrollbars=yes,resizable=yes,width=700,left=100,height=550");
		}
	</script>
  </body>
</html>
