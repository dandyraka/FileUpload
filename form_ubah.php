<html>
<head>
	<title>si_sapiperah</title>
</head>
<body>
	<h1>Ubah Data Sapi</h1>
	
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
		<td><input type="text" name="ID_KANDANG" value="<?php echo $data['ID_KANDANG']; ?>"></td>
	</tr>
	<tr>
		<td>JNS KELAMIN</td>
		<td>
		<?php
		if($data['JNS_KELAMIN'] == "Laki-laki"){
			echo "<input type='radio' name='JNS_KELAMIN' value='JANTAN' checked='checked'> JANTAN";
			echo "<input type='radio' name='JNS_KELAMIN' value='BETINA'> BETINA";
		}else{
			echo "<input type='radio' name='JNS_KELAMIN' value='JANTAN'> JANTAN";
			echo "<input type='radio' name='JNS_KELAMIN' value='BETINA' checked='checked'> BETINA";
		}
		?>
		</td>
	</tr>
	<tr>
		<td>TGL LAHIR</td>
		<td><input type="text" name="TGL_LAHIR" value="<?php echo $data['TGL_LAHIR']; ?>"></td>
	</tr>
	<tr>
		<td>UMR SAPI</td>
		<td><textarea name="UMR_SAPI"><?php echo $data['UMR_SAPI']; ?></textarea></td>
	</tr>
	<tr>
		<td>BRT SAPI</td>
		<td><textarea name="BRT_SAPI"><?php echo $data['BRT_SAPI']; ?></textarea></td>
	</tr>
	<tr>
		<td>JNS SAPI</td>
		<td><textarea name="JNS_SAPI"><?php echo $data['JNS_SAPI']; ?></textarea></td>
	</tr>
	</table>
	
	<hr>
	<button type="submit" name="submit">Submit</button>
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
