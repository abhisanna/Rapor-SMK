<?php 
 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelass = "XI AKL";

mysqli_query($conn, "UPDATE xiakl SET nama='$nama', NULL, nis='$nis' WHERE id='$id'");
 
header("location: index.php?pesan=update");

?>