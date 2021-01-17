<?php 
include "connect.php";
$id_pesan = $_GET['no'];
mysqli_query($connection, "DELETE FROM ormas WHERE no ='$no' ");
header("location:tabel.php");
?>