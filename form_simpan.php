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
	<h4>Tambah Data Sapi</h4>
	<form method="post" action="proses_simpan.php">
	<table cellpadding="8">
	<tr>
		<td>ID SAPI</td>
		<td><input type="text" class="form-control is-valid" name="ID_SAPI"></td>
	</tr>
	<tr>
		<td>ID KANDANG</td>
		<td>
		<select name="ID_KANDANG" class="form-control">
<?php
 include 'koneksi.php';
 $query = "select ID_KANDANG from kandang";
 $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
 //$data = mysqli_fetch_array($sql);
 while($row = mysqli_fetch_array($sql)){
	 $idkndangx = $row['ID_KANDANG'];
	 echo '<option value="'.$idkndangx.'">'.$idkndangx.'</option>';
 }
?>
		</select>
		</td>
	</tr>
	<tr>
		<td>TGL LAHIR</td>
		<td><fieldset>
         <input type="date" class="form-control is-valid"name="TGL_LAHIR" required><br>
    </fieldset></td>  
	</tr>
	<tr>
		<td>UMR SAPI</td>
		<td><input type="text" class="form-control is-valid" name="UMR_SAPI"></td>
	</tr>
	<tr>
		<td>JNS KELAMIN</td>
		<td>
		<input type="radio" name="JNS_KELAMIN" value="JANTAN"> JANTAN
		<input type="radio" name="JNS_KELAMIN" value="BETINA"> BETINA
		</td>
	</tr>
	<tr>
		<td>BRT SAPI</td>
		<td><input type="text" class="form-control is-valid" name="BRT_SAPI"></td>
	</tr>
	<tr>
		<td>JNS SAPI</td>
		<td><input type="text" class="form-control is-valid" name="JNS_SAPI"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-success" value="Simpan">
	<a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
	 </div>
      <center>Copyright &copy; 2018 SI SAPI PERAH</center>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

