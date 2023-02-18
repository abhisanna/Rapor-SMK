<?php 

include '../koneksi.php';
session_start();

if(!isset($_SESSION['uname'])) {
  header("location: index.php");
}

	if($_SESSION['level'] !="seni budaya"){
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
      <div class="mb-4"></div>
        <table class="table" id="allTable">
            <thead class="thead-dark">
                <tr>
                <th scope="col" style="text-align: center">Id</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">N. Pengetahuan</th>
                <th scope="col" style="text-align: center">N. Keterampilan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                include '../../koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM xrpl2_n")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query)) {

                ?>
                <tr>
                <th scope="row"><?php echo $nomor++; ?></th>
                <td scope="col" style="text-align: center"><?php echo $data['nama']; ?></td>
                <td scope="col" style="text-align: center"><?php echo $data['sbdp']; ?></td>
                <td scope="col" style="text-align: center"><?php echo $data['sbdk']; ?></td>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>