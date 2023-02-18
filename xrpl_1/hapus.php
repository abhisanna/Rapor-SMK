<?php 

include 'koneksi.php';
 
$id = $_GET['id'];
 
mysqli_query($conn,"DELETE FROM xrpl_1 WHERE id='$id'");
 
header("location: index.php");
 
?>