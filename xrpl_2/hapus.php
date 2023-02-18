<?php 

include 'koneksi.php';
 
$id = $_GET['id'];
 
mysqli_query($conn,"DELETE FROM xrpl_2 WHERE id='$id'");
 
header("location: index.php");
 
?>