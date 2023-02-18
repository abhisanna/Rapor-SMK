<?php 
 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
 
$query = "UPDATE xrpl_2 SET nama='$nama', nis='$nis' WHERE id='$id'";
$result = mysqli_query($conn, $query);
 
header("location: index.php?pesan=update");

?>