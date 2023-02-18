<?php 
 
include '../koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
 
$query = "UPDATE xirpl SET nama='$nama', nis='$nis' WHERE id=$id";
$result = mysqli_query($conn, $query);

header("location: index.php?pesan=update");

?>