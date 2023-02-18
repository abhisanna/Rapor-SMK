<?php 
 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
 
$query = mysqli_query($conn, "UPDATE xiiakl SET nama='$nama', nis='$nis' WHERE id='$id'");
 
header("location: index.php?pesan=update");

?>