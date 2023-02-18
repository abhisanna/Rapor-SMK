<?php 

include '../koneksi.php';
session_start();

if(!isset($_SESSION['uname'])) {
  header("location: index.php");
}

	if($_SESSION['level'] !="adm"){
		header("location:../../admin/index.html?pesan=belum_login");
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Rapor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="../../images/icons/tc.ico"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpfath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/50ee1b438c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="position: relative;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(../../images/bg_3.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../../images/user.png);"></div>
	  				<h3><?php echo $_SESSION['uname']; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
          <a href="../index.php"><span class="fas fa-home mr-3"></span> Beranda</a>
          </li>
          <li class="active">
            <a href="../signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
      <a class="btn btn-success active" href="update.php">Input nilai</a>
      <a class="btn btn-success active" id="downloadex" href= "#" onclick="javascript:fnExcelReport();">Download (Excel)</a>
      <div class="mb-4"></div>
      <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col" style="text-align: center">Id</th>
                <th scope="col" style="text-align: center">Nama</th>  
                <th scope="col" style="text-align: center">KKM</th>
                <th scope="col" style="text-align: center">N. Pengetahuan</th>
                <th scope="col" style="text-align: center">Predikat</th>
                <th scope="col" style="text-align: center">KKM</th>
                <th scope="col" style="text-align: center">N. Keterampilan</th>
                <th scope="col" style="text-align: center">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                include '../../koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM xakl_n")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query)) {

                ?>
                <tr>
                <th scope="row"><?php echo $nomor++; ?></th>
                <td scope="col" style="text-align: center"><?php echo $data['nama']; ?></td>
                <td scope="col" style="text-align: center">76</td>
                <td scope="col" style="text-align: center"><?php echo $data['admp']; ?></td>
                <td scope="col" style="text-align: center"><?php echo $data['p_admp']; ?></td>
                <td scope="col" style="text-align: center">76</td>
                <td scope="col" style="text-align: center"><?php echo $data['admk']; ?></td>
                <td scope="col" style="text-align: center"><?php echo $data['p_admk']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
      </div>
		</div>

    <script src="../../js_sidebar/jquery.min.js"></script>
    <script src="../../js_sidebar/popper.js"></script>
    <script src="../../js_sidebar/bootstrap.min.js"></script>
    <script src="../../js_sidebar/main.js"></script>
    <script src="../../js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script type="text/javascript">
      function fnExcelReport() {
        var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';

        tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';
        tab_text = tab_text + '<x:Name>Data nilai</x:Name>';

        tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
        tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';
        
        tab_text = tab_text + "<table border='1px'>";
        tab_text = tab_text + $('#allTable').html();
        tab_text = tab_text + '</table></body></html>';

        var data_type = 'data:application/vnd.ms-excel';

        $('#downloadex').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#downlaodex').attr('download', 'datanilai_xrpl2.xls');
      }  
    </script>
  </body>
</html>