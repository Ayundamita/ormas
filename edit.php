<?php
include 'connect.php';

if (isset($_POST['Save'])) {
	$no = $_POST['no'];
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

	$result = mysqli_query($connection, "UPDATE ormas SET nama_organisasi='$nama_organisasi' , bid_kegiatan='$bid_kegiatan' , ruang_lingkup='$ruang_lingkup', alamat='$alamat', asas='$asas', tujuan='$tujuan', pendiri='$pendiri', pembina='$pembina', penasehat='$penasehat' WHERE no='$no' ");
	
	header("location:tabel.php");
}
	$no =$_GET['no'];
	$result = mysqli_query($connection, "SELECT * FROM ormas" );
?>


<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center"> Edit Data Ormas</h1>
<form method="POST" action="edit.php">
<table align="center">
	<?php 
	while ($data = mysqli_fetch_array($result)) {
		//$no = $data['no'];
		//$nama_organisasi = $data['nama_organisasi'];
		//$bid_kegiatan = $data['bid_kegiatan'];
		//$ruang_lingkup = $data['ruang_lingkup'];
		//$alamat = $data ['alamat'];
		//$tempat = $data ['tempat'];
		//$asas = $data ['asas'];
		//$tujuan = $data ['tujuan'];
		//$pendiri = $data ['pendiri'];
		//$pembina = $data ['pembina'];
		//$penasehat = $data ['penasehat'];
		
		echo' 
	<tr>
		<td>Nama Organisasi</td>
	<td><input type="text" name="nama_organisasi" value=" '.$data['nama_organisasi'].'"> </td><br>
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
	
</tr>';
	}
?>
<tr>
	<td>
		<input type="submit" name="Save" value="Save">
	</td>
</tr>
</table>
</body>
</html>