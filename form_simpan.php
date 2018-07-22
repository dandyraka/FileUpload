<html>
<head>
	<title>si_sapiperah</title>
</head>
<body>
	<h1>Tambah Data Sapi</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID SAPI</td>
		<td><input type="text" name="ID_SAPI"></td>
	</tr>
	<tr>
		<td>ID KANDANG</td>
		<td><input type="text" name="ID_KANDANG"></td>
	</tr>
	<tr>
		<td>TGL LAHIR</td>
		<td><input type="text" name="TGL_LAHIR"></td>
	</tr>
	</tr>
	<tr>
		<td>UMR SAPI</td>
		<td><input type="text" name="UMR_SAPI"></td>
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
		<td><input type="text" name="BRT_SAPI"></td>
	</tr>
	<tr>
		<td>JNS SAPI</td>
		<td><input type="text" name="JNS_SAPI"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
