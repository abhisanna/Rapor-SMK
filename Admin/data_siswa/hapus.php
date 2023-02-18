<?php 

include 'koneksi.php';
 
$id = $_GET['id'];
 
mysqli_query($conn,"DELETE FROM xakl WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xiakl WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xiiakl WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xiiotkp WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xiirpl WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xiotkp WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xirpl WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xotkp WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xrpl_1 WHERE id='$id'");
mysqli_query($conn,"DELETE FROM xrpl_2 WHERE id='$id'");
 
header("location: ../home.php");
 
?>