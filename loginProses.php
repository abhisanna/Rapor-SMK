<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];

    if (!empty($_POST['nama']) && !empty($_POST['nis'])) {
        $query = mysqli_query($conn, "SELECT * FROM $kelas WHERE nama = '$nama' AND nis = '$nis'");
        $result = mysqli_num_rows($query);
        if ($result && $kelas == 'xrpl1_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xrpl1.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xrpl2_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xrpl2.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xakl_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xakl.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xotkp_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xotkp.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xiakl_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xiakl.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xiotkp_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xiotkp.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xirpl_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xirpl.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xiirpl_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xiirpl.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xiiakl_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xiiakl.php?pesan=berhasil");
        }
        else if ($result && $kelas == 'xiiotkp_n') {
            $_SESSION['nama'] = $nama;
            header("location:home_xiiotkp.php?pesan=berhasil");
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Nama, kelas, atau NIS salah");';
            echo 'window.location.href = "index.html?pesan=gagal";';
            echo '</script>';    
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Nama, kelas, dan NIS salah");';
        echo 'window.location.href = "index.html?pesan=gagal";';
        echo '</script>';
}

?>