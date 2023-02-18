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
                E-mail : sekretariat@cintakasihtzuchi.sch.id / www.cintakasihtzuchi.sch.id</th>
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
                <?php
                
                $result = mysqli_query($conn, "SELECT * FROM xirpl_n ORDER BY id DESC");
                
                $row = mysqli_fetch_array($result);
                include 'xirpl_walas/predikat.php';

                ?>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Pendidikan Agama dan Budi Pekerti</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['agamap']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_agamap; echo $row ['p_agamap']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['agamak'];?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_agamak; echo $row ['p_agamak']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Pendidikan Pancasila dan Kewarganegaraan</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['ppknp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_ppknp; echo $row ['p_ppknp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['ppknk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_ppknk; echo $row ['p_ppknk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Bahasa Indonesia</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['bindop']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_bindop; echo $row ['p_bindop']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['bindok']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_bindok; echo $row ['p_bindok']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">Matematika</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mtkp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mtkp; echo $row ['p_mtkp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mtkk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mtkk; echo $row ['p_mtkk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">5</th>
                <th colspan="4">Bahasa Inggris dan Bahasa Asing Lainnya</th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['bingp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_bingp; echo $row ['p_bingp']?></th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['bingk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_bingk; echo $row ['p_bingk']?></th>
                </tr>
                <tr>
                <th colspan="11">B. Muatan Kewilayahan</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Pendidikan Jasmani, Olah Raga, dan Kesehatan</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['pjokp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_pjokp; echo $row ['p_pjokp']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['pjokk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_pjokk; echo $row ['p_pjokk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Bahasa Mandarin</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mandp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mandp; echo $row ['p_mandp']?></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mandk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mandk; echo $row ['p_mandk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Budaya Humanis</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['bhump']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_bhump; echo $row ['p_bhump']?></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['bhumk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_bhumk; echo $row ['p_bhumk']?></th>
                </tr>
                <tr>
                <th colspan="11">C. Muatan Peminatan Kejuruan</th>
                </tr>
                <tr>
                <th colspan="11">C3. Kompetensi Keahlian</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Permodelan Perangkat Lunak</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['permodp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_permodp; echo $row ['p_permodp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['permodk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_permodk; echo $row ['p_permodk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Basis data</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['basdatap']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_basdatap; echo $row ['p_basdatap']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['basdatak']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_basdatak; echo $row ['p_basdatak']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Pemrograman Berorientasi Objek</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['pbop']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_pbop; echo $row ['p_pbop']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['pbok']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_pbok; echo $row ['p_pbok']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">Pemrograman Web dan Perangkat Bergerak</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['progwebp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_progwebp; echo $row ['p_progwebp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['progwebk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_progwebk; echo $row ['p_progwebk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">5</th>
                <th colspan="4">Produk Kreatif dan Kewirausahaan</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['kwup']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_kwup; echo $row ['p_kwup']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['kwuk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_kwuk; echo $row ['p_kwuk']?></th>
                </tr>
                <tbody>
            </tbody>
            </thead>
          </table>
          <br>
          <table border="1" width="100%" style="color: black;">
          <tr>
          <th width="3%" style="text-align: center;">No</th>
          <th width="41.5%" colspan="5" style="text-align: center;">Kegiatan Ekstrakurikuler</th>
          <th width="49.5%" colspan="6" style="text-align: center;">Deskripsi</th>
          </tr>
          <tr>
          <th colspan="1" style="text-align: center;">1</th>
          <th colspan="5" style="text-align: center;"><?php echo $row['eskula'] ?></th>
          <th colspan="6" style="text-align: center;"><?php echo $row['ket_eskula'] ?></th>
          </tr>
          <tr>
          <th colspan="1" style="text-align: center;">2</th>
          <th colspan="5" style="text-align: center;"><?php echo $row['eskulb'] ?></th>
          <th colspan="6" style="text-align: center;"><?php echo $row['ket_eskulb'] ?></th>
          </tr>
          <tr>
          <th colspan="1" style="text-align: center;">3</th>
          <th colspan="5" style="text-align: center;"><?php echo $row['eskulc'] ?></th>
          <th colspan="6" style="text-align: center;"><?php echo $row['ket_eskulc'] ?></th>
          </tr>
          </table>
          <br>
          <table border="1" width="50%" style="color: black;">
          <tr>
          <th colspan="1" style="text-align: center;">Ketidakhadiran</th>
          </tr>
          <tr>
          <th style="text-align: center;"><br><br><br></th>
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