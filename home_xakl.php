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

    <script type="text/javascript" src="jspdf.min.js"></script>
    <script type="text/javascript" src="jquery-git.js"></script>
    <script type='text/javascript'>//<![CDATA[
    $(window).on('load', function() {
    var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#pdfview').click(function () {
        doc.fromHTML($('#pdfdiv').html(), 15, 15, {
            'width': 700,
                'elementHandlers': specialElementHandlers
        });
        doc.save('rapor.pdf');
    });
    });//]]> 
    </script>
  </head>
  <body>
		<div id="pdfdiv">
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
              <a id="pdfview"><span class="fa fa-download mr-3"></span> Download</a>
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
                
                $result = mysqli_query($conn, "SELECT * FROM xakl_n ORDER BY id DESC");
                
                $row = mysqli_fetch_array($result);
                include 'xakl_walas/predikat.php';

                ?>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Pendidikan Agama dan Budi Pekerti</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['agamap']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_agamap; echo $row ['p_agamap']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['agamak']; ?></th>
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
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mtkp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mtkp; echo $row ['p_mtkp']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mtkk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mtkk; echo $row ['p_mtkk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">5</th>
                <th colspan="4">Sejarah Indonesia</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['sejarahp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_sejarahp; echo $row ['p_sejarahp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['sejarahk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_sejarahk; echo $row ['p_sejarahk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">6</th>
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
                <th colspan="4">Seni Budaya</th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['sbdp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_sbdp; echo $row ['p_sbdp']?></th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['sbdk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_sbdk; echo $row ['p_sbdk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Pendidikan Jasmani, Olah Raga, dan Kesehatan</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['pjokp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_pjokp; echo $row ['p_pjokp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['pjokk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_pjokk; echo $row ['p_pjokk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Bahasa Mandarin</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mandp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mandp; echo $row ['p_mandp']?></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['mandk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_mandk; echo $row ['p_mandk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
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
                <th colspan="11">C1. Dasar Bidang Keahlian</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Simulasi dan Komunikasi Digital</th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['simdigp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_simdigp; echo $row ['p_simdigp']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['simdigk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_simdigk; echo $row ['p_simdigk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Ekonomi Bisnis</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['ekbisp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_ekbisp; echo $row ['p_ekbisp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['ekbisk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_ekbisk; echo $row ['p_ekbisk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Administrasi Umum</th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['admp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_admp; echo $row ['p_admp']?></th>
                <th colspan="1" style="text-align: center;">76</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['admk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_admk; echo $row ['p_admk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">IPA</th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['ipap']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_ipap; echo $row ['p_ipap']?></th>
                <th colspan="1" style="text-align: center;">75</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['ipak']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_ipak; echo $row ['p_ipak']?></th>
                </tr>
                <tr>
                <th colspan="11">C2. Dasar Program Keahlian</th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">1</th>
                <th colspan="4">Etika Profesi</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['etprofp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_etprofp; echo $row ['p_etprofp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['etprofk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_etprofk; echo $row ['p_etprofk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">2</th>
                <th colspan="4">Aplikasi Pengolah Angka/<font weight="italic">Spreedsheet</font></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['spreadp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_spreadp; echo $row ['p_spreadp']?></th>
                <th colspan="1" style="text-align: center;">77</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['spreadk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_spreadk; echo $row ['p_spreadk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">3</th>
                <th colspan="4">Akuntansi Dasar</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['akdp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_akdp; echo $row ['p_akdp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['akdk']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_akdk; echo $row ['p_akdk']?></th>
                </tr>
                <tr>
                <th colspan="1" style="text-align: center;">4</th>
                <th colspan="4">Perbankan Dasar</th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['perbankanp']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_perbankanp; echo $row ['p_perbankanp']?></th>
                <th colspan="1" style="text-align: center;">78</th>
                <th colspan="1" style="text-align: center;"><?php echo $row['perbankank']; ?></th>
                <th colspan="1" style="text-align: center;"><?php echo $p_perbankank; echo $row ['p_perbankank']?></th>
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
          <th colspan="5" style="text-align: center;"></th>
          <th colspan="6" style="text-align: center;"></th>
          </tr>
          <tr>
          <th colspan="1" style="text-align: center;">2</th>
          <th colspan="5" style="text-align: center;"></th>
          <th colspan="6" style="text-align: center;"></th>
          </tr>
          <tr>
          <th colspan="1" style="text-align: center;">3</th>
          <th colspan="5" style="text-align: center;"></th>
          <th colspan="6" style="text-align: center;"></th>
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
    </div>
    <div id="editor"></div>
    
    <script src="js_sidebar/jquery.min.js"></script>
    <script src="js_sidebar/popper.js"></script>
    <script src="js_sidebar/bootstrap.min.js"></script>
    <script src="js_sidebar/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  </body>
</html>