<?php 

include 'koneksi.php';
session_start();

if(!isset($_SESSION['nama'])) {
  header("location: index.html");
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Rapor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" type="image/png" href="images/icons/tc.ico"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpfath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/50ee1b438c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="position: relative;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_3.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/user.png);"></div>
	  				<h3><?php echo $_SESSION['nama']; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
          <a onclick="window.print();"><span class="fas fa-print mr-3"></span> Print</a>
          </li>
          <li class="active">
              <a id="download"><span class="fa fa-download mr-3"></span> Download</a>
          </li>
          <li class="active">
            <a href="signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" id="invoice">
        <table width="100%;" border=1 style="color: black;"> 
            <thead>
                <tr>
                <th colspan="11" style="text-align: center; padding-bottom: 2%; padding-top: 2%;" >SMK CINTA KASIH TZU CHI<br> Telp. 021-5439 7565, 5439 7462, Fax : 021-5439 7573 <br>
                E-mail : sekretariat@cintakasihtzuchi.sch.id//www.cintakasih.sch.id</th>
                </tr>
                <tr style="text-align: center;">
                <th rowspan="2" width="3%" colspan="1" scope="col">No</th>
                <th rowspan="2" colspan="4" width="40%" scope="col">Nama Pelajaran</th>
                <th colspan="3" width="24%" colspan="3" scope="col">Pengetahuan</th>
                <th colspan="3" width="24%" colspan="3" scope="col">Keterampilan</th>
                </tr>
                <tr style="text-align: center;">
                <th width="8%" colspan="1" scope="col">KKM</th>
                <th width="8%" colspan="1" scope="col">Angka</th>
                <th width="8%" colspan="1" scope="col">Predikat</th>
                <th width="8%" colspan="1" scope="col">KKM</th>
                <th width="8%" colspan="1" scope="col">Angka</th>
                <th width="8%" colspan="1" scope="col">Predikat</th>
                </tr>
                <tr>
                <th colspan="11">A. Muatan Nasional</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Pendidikan Agama dan Budi Pekerti</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Pendidikan Pancasila dan Kewarganegaraan</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Bahasa Indonesia</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">Matematika</th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">5</th>
                <th colspan="4">Sejarah Indonesia</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">6</th>
                <th colspan="4">Bahasa Inggris dan Bahasa Asing Lainnya</th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="11">B. Muatan Kewilayahan</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Seni Budaya</th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Pendidikan Jasmani, Olah Raga, dan Kesehatan</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Bahasa Mandarin</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">Budaya Humanis</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="11">C. Muatan Peminatan Kejuruan</th>
                </tr>
                <tr>
                <th colspan="11">C1. Dasar Bidang Keahlian</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Simulasi dan Komunikasi Digital</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Fisika</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Kimia</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="11">C2. Dasar Program Keahlian</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Sistem Komputer</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Komputer dan Jaringan Dasar</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Pemrograman Dasar</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">Dasar Desain Grafis</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"></th>
                <th colspan="1" style="text-align: center;"></th>
                </tr>
                <tbody>
                <!-- <?php 
                
                include 'koneksi.php';

                $query = mysqli_query($conn, "SELECT * FROM xakl")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query)) {

                ?>
                <tr>
                <th scope="row"><?php echo $nomor++; ?></th>
                <td colspan><?php echo $data['agama']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td>
                </td>
                </tr>
                <?php } ?> -->
            </tbody>
            </thead>
          </table>
          <br>
          <table border="1" width="100%" style="color: black;">
          <tr>
          <th width="43.5%" colspan="5" style="text-align: center;">Kegiatan Ekstrakurikuler</th>
          <th width="49.5%" colspan="6" style="text-align: center;">Deskripsi</th>
          </tr>
          </table>
      </div>
		</div>

    <script src="js_sidebar/jquery.min.js"></script>
    <script src="js_sidebar/popper.js"></script>
    <script src="js_sidebar/bootstrap.min.js"></script>
    <script src="js_sidebar/main.js"></script>
    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  </body>
</html>