<?php 

include 'koneksi.php';
 
$id = $_GET['id'];
 
mysqli_query($conn,"DELETE FROM xiakl WHERE id='$id'");
 
header("location: index.php");
 
?>