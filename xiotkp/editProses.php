<?php 
 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
 
$query = mysqli_query($conn, "UPDATE xiotkp SET nama='$nama', nis='$nis' WHERE id='$id'")or die(mysqli_error());
 
header("location: index.php?pesan=update");

?>