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
          </div>
        </div>
      </div>
	  
	  <div class="jumbotron">
		<center>
		<h2>Sistem Informasi Sapi Perah</h2>
		<h4>Data Sapi</h4>
		</center>
      
  
<body>
	<h3>Ubah Data Sapi</h3>
	
	<?php
	if(isset($_GET['ID_SAPI'])){
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data ID SAPI yang dikirim oleh index.php melalui URL
	$IDSAPI = $_GET['ID_SAPI'];
	
	// Query untuk menampilkan data SAPI berdasarkan ID SAPI yang dikirim
	$query = "SELECT * FROM sapi WHERE ID_SAPI='".$IDSAPI."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	}
	?>
	
	<form method="post" action="proses_ubah.php?ID_SAPI=<?php echo $IDSAPI; ?>">
	<table cellpadding="8">
	<tr>
		<td>ID KANDANG</td>
		<td><input type="text" class="form-control is-valid" name="ID_KANDANG" value="<?php echo $data['ID_KANDANG']; ?>"></td>
	</tr>
	<tr>
		<td>BRT SAPI</td>
		<td><textarea class="form-control is-valid" name="BRT_SAPI"><?php echo $data['BRT_SAPI']; ?></textarea></td>
	</tr>
	</table>
	
	<hr>
	<button type="submit" class="btn btn-success" name="submit">Submit</button>
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</div>
      <center>Copyright &copy; 2018 SI SAPI PERAH</center>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
