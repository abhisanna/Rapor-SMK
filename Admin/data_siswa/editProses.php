<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
 
mysqli_query("UPDATE xakl SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xiakl SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xiiakl SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xiiotkp SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xiirpl SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xiotkp SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xirpl SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xotkp SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xrpl_1 SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
mysqli_query("UPDATE xrpl_2 SET nama='$nama', kelas='$kelas', nis='$nis' WHERE id='$id'");
 
header("location:../index.php?pesan=update");
?>