<?php
if(isset($_GET['filename'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP Unggah Berkas">
    <meta name="author" content="Dandy">
    <title>PHP Unggah Berkas</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	input[type="file"] {
		display: none;
	}
	.custom-file-upload {
		border: 1px solid #ccc;
		display: inline-block;
		padding: 6px 12px;
		cursor: pointer;
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
            <a class="navbar-brand" href="#">PHP Unggah Berkas</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
			  <li class="active"><a href="upload.php">Upload</a></li>
            </ul>
          </div>
        </div>
      </div>
<?php
	$filename = $_GET['filename'];
	$path = "uploads/".$filename;
?>
      <div class="jumbotron">
		<form method="POST">
			<p>Edit data :</p>
			<textarea name="datax" class="form-control" rows="10"><?php $open = fopen($path, 'r');  echo fread($open,filesize($path)); ?></textarea>
			<input type="submit" value="Simpan" class="btn"></input>
		</form>
<?php
if(isset($_POST['datax'])){
	$datax = $_POST['datax'];
	$filename = $_GET['filename'];
	$path = "uploads/".$filename;
	
	$open = fopen($path, 'w+');
	fread($open,filesize($path));
	$simpan = fwrite($open, $datax);
	fclose($open);
	
	$open2 = fopen('log.txt', 'a');
			fwrite($open2, date('Y/m/d').' '.$filename.' - diedit'.PHP_EOL);
			fclose($open2);
	
	$shareurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$fixshareurl = str_replace('edit.php?filename='.$filename, 'download.php?filename='.$filename, $shareurl);
	
	echo "<br><div class='alert alert-success'>Data berhasil diubah</div>";
	echo "<div class='alert alert-info'>Akses berkas Anda <a href='".$path."' target='_blank'><b>DISINI</b></a>";
	echo "<br>Hapus berkas Anda <a href='delete.php?filename=".$filename."' target='_blank'><b>DISINI</b></a>";
	echo "<br>Share link <input type='text' class='form-group' value='".$fixshareurl."'></div>";
}
?>
</div>
    </div>
      <center>Copyright &copy; 2018</center>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}
?>