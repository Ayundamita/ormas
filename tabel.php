<?php
include 'connect.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">Daftar Ormas Yang Terdaftar</h1>
<table border="1px">
	<tr>
		<td>No</td>
		<td>Nama Organisasi</td>
		<td>Bidang Kegiatan</td>
		<td>Ruang Lingkup</td>
		<td>Alamat Kantor</td>
		<td>Tempat Dan Waktu Pendirian</td>
		<td>Asas Organisasi</td>
		<td>Tujuan Organisasi</td>
		<td>Nama Pendiri</td>
		<td>Nama Pembina</td>
		<td>Nama Penasehat</td>
		<td>Option</td>
	</tr>

<?php
include 'connect.php';
$no = 1;
$result = mysqli_query($connection, "SELECT * FROM ormas");
foreach ($result as $data) {
	# code...
?>
<tr>
	<td> <?php echo $no++ ; ?> </td>
	<td><?php echo $data ['nama_organisasi'] ?></td>
	<td><?php echo $data ['bid_kegiatan'] ?></td>
	<td><?php echo $data ['ruang_lingkup'] ?></td>
	<td><?php echo $data ['alamat'] ?></td>
	<td><?php echo $data ['tempat'] ?></td>
	<td><?php echo $data ['asas'] ?></td>
	<td><?php echo $data ['tujuan'] ?></td>
	<td><?php echo $data ['pendiri'] ?></td>
	<td><?php echo $data ['pembina'] ?></td>
	<td><?php echo $data ['penasehat'] ?></td>
	<td>  <a  href= "edit.php?no=<?php echo $data['no']; ?>"> Edit Data </a>
	<a  href= "delete.php?no=<?php echo $data['no']; ?>"> Hapus </a>
 </td>
</tr>
<?php
}?>
</table>
</body>
</html>