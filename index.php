<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 align="center">From Pendataan Ormas</h1>
<form method="POST">
<table align="center">
	<tr>
		<td>Nama Organisasi</td>
	<td><input type="text" name="nama_organisasi"></td><br>
	</tr>
	<tr>
		<td>Bidang Kegiatan</td>
	<td><input type="text" name="bid_kegiatan"></td><br>
	</tr>
<tr>
	<td>Ruang Lingkup</td>
    <td><input type="text" name="ruang_lingkup"></td><br>
</tr>
<tr>
	<td>Alamat Kantor</td>
	<td><input type="text" name="alamat"></td><br>
</tr>
<tr>
	<td>Tempat dan Waktu Pendirian</td>
	<td><input type="text" name="tempat"></td><br>
</tr>
<tr>
	<td>Asas dan Ciri Organisasi</td>
	<td><input type="text" name="asas"></td><br>
</tr>
<tr>
	<td>Tujuan</td>
 	<td><input type="text" name="tujuan"></td><br>
	</tr>
<tr>
	<td>Pendiri</td>
	<td><input type="text" name="pendiri"></td><br>
	</tr>
	<tr>
	<td>Pembina</td>
	<td><input type="text" name="pembina"></td><br>
	</tr>
	<tr>
	<td>Penasehat</td>
	<td><input type="text" name="penasehat"></td><br>
	</tr>
	<tr>
	<td><input type="submit" name="Save" value="Save"></td>
</tr>
</table>
<?php
include 'connect.php';
if(isset($_POST['Save'])){
	$nama_organisasi = $_POST['nama_organisasi'];
	$bid_kegiatan = $_POST['bid_kegiatan'];
	$ruang_lingkup = $_POST['ruang_lingkup'];
	$alamat = $_POST['alamat'];
	$tempat = $_POST['tempat'];
	$asas = $_POST['asas'];
	$tujuan = $_POST['tujuan'];
	$pendiri = $_POST['pendiri'];
	$pembina = $_POST['pembina'];
	$penasehat = $_POST['penasehat'];
	$result = mysqli_query($connection, "INSERT INTO ormas (nama_organisasi, bid_kegiatan, ruang_lingkup,alamat,tempat,asas, tujuan, pendiri, pembina, penasehat) VALUES ('$nama_organisasi','$bid_kegiatan', '$ruang_lingkup', '$alamat', '$tempat', '$asas', '$tujuan', '$pendiri', '$pembina', '$penasehat') ");
	if ($result) {
		header("location:tabel.php");
		# code...
	}
}
?>
</form>
</body>
</html>