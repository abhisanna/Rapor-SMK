<?php

session_start();
include '../koneksi.php';

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
    
    if (!empty($_POST['uname']) && !empty($_POST['pwd'])) {
        $query = mysqli_query($conn, "SELECT * FROM userlogin WHERE uname = '$uname' AND pwd = '$pwd'");
        $result = mysqli_num_rows($query);
        if ($result) {
            $_SESSION['uname'] = $uname;
            header("location:home.php?pesan=berhasil");
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Uname atau pwd salah");';
            echo 'window.location.href = "index.html?pesan=gagal";';
            echo '</script>';
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Uname dan pwd salah");';
        echo 'window.location.href = "index.html?pesan=gagal";';
        echo '</script>';
}

    if($result > 0) {
        $data = mysqli_fetch_assoc($query);

        if($data['level']=="agama"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "agama";
            header("location:../agama/index.php");
        }
        else if($data['level']=="pkn"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "pkn";
            header("location:../pkn/index.php");
        }
        else if($data['level']=="pjok"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "pjok";
            header("location:../pjok/index.php");
        }
        else if($data['level']=="simkomdig"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "simkomdig";
            header("location:../simkomdig/index.php");
        }
        else if($data['level']=="fisika"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "fisika";
            header("location:../fisika/index.php");
        }
        else if($data['level']=="produktifxrpl1"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxrpl1";
            header("location:../produktifxrpl1/index.php");
        }
        else if($data['level']=="produktifxirpl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxirpl";
            header("location:../produktifxirpl/index.php");
        }
        else if($data['level']=="produktifxiirpl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxiirpl";
            header("location:../produktifxiirpl/index.php");
        }
        else if($data['level']=="produktifxiotkp"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxiotkp";
            header("location:../produktifxiotkp/index.php");
        }
        else if($data['level']=="produktifxiiotkp"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxiiotkp";
            header("location:../produktifxiiotkp/index.php");
        }
        else if($data['level']=="produktifxiakl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxiakl";
            header("location:../produktifxiakl/index.php");
        }
        else if($data['level']=="produktifxiiakl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxiiakl";
            header("location:../produktifxiiakl/index.php");
        }
        else if($data['level']=="produktifxrpl2"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxrpl2";
            header("location:../produktifxrpl2/index.php");
        }
        else if($data['level']=="produktifxakl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxakl";
            header("location:../produktifxakl/index.php");
        }
        else if($data['level']=="produktifxotkp"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "produktifxotkp";
            header("location:../produktifxotkp/index.php");
        }
        else if($data['level']=="kimia"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "kimia";
            header("location:../kimia/index.php");
        }
        else if($data['level']=="ekbis"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "ekbis";
            header("location:../ekbis/index.php");
        }
        else if($data['level']=="adm"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "adm";
            header("location:../adm/index.php");
        }
        else if($data['level']=="ipa"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "ipa";
            header("location:../ipa/index.php");
        }
        else if($data['level']=="budaya humanis"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "budaya humanis";
            header("location:../bhum/index.php");
        }
        else if($data['level']=="sejarah"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "sejarah";
            header("location:../sejarah/index.php");
        }
        else if($data['level']=="bahasa indonesia"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "bahasa indonesia";
            header("location:../bindo/index.php");
        }
        else if($data['level']=="bahasa inggris"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "bahasa inggris";
            header("location:../bahasa inggris/index.php");
        }
        else if($data['level']=="mandarin"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "mandarin";
            header("location:../mandarin/index.php");
        }
        else if($data['level']=="seni budaya"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "seni budaya";
            header("location:../sbd/index.php");
        }
        else if($data['level']=="matematika"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "matematika";
            header("location:../matematika/index.php");
        }
        else if($data['level']=="admin"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "admin";
            header("location:home.php");
        }
        else if($data['level']=="xrpl1"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xrpl1";
            header("location:../xrpl1_walas/index.php");
        }
        else if($data['level']=="xrpl2"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xrpl2";
            header("location:../xrpl2_walas/index.php");
        }
        else if($data['level']=="xakl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xakl";
            header("location:../xakl_walas/index.php");
        }
        else if($data['level']=="xotkp"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xotkp";
            header("location:../xotkp_walas/index.php");
        }
        else if($data['level']=="xirpl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xirpl";
            header("location:../xirpl_walas/index.php");
        }
        else if($data['level']=="xiakl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xiakl";
            header("location:../xiakl_walas/index.php");
        }
        else if($data['level']=="xiotkp"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xiotkp";
            header("location:../xiotkp_walas/index.php");
        }
        else if($data['level']=="xiirpl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xiirpl";
            header("location:../xiirpl_walas/index.php");
        }
        else if($data['level']=="xiiakl"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xiirpl";
            header("location:../xiiakl_walas/index.php");
        }
        else if($data['level']=="xiiotkp"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "xiiotkp";
            header("location:../xiiotkp_walas/index.php");
        }
        else if($data['level']=="agama"){
            $_SESSION['uname'] = $uname;
            $_SESSION['level'] = "agama";
            header("location:../agama/index.php");
        }
        else{
            header("location:index.html?pesan=gagal");
        }
    }
    else {
        header("location:index.html?pesan=gagal");
}

?>