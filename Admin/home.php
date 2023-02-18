<?php 

session_start();

if(!isset($_SESSION['uname'])) {
  header("location: index.html");
}

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="../images/icons/tc.ico"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpfath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/50ee1b438c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="position: relative;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(../images/bg_3.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../images/user.png);"></div>
	  				<h3><?php echo $_SESSION['uname']; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
        <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fas fa-home mr-3"></span> Pilih Kelas</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="../xrpl_1/index.php">X RPL 1</a>
                </li>
                <li>
                    <a href="../xrpl_2/index.php">X RPL 2</a>
                </li>
                <li>
                    <a href="../xakl/index.php">X AKL</a>
                </li>
                <li>
                    <a href="../xotkp/index.php">X OTKP</a>
                </li>
                <li>
                    <a href="../xirpl/index.php">XI RPL</a>
                </li>
                <li>
                    <a href="../xiakl/index.php">XI AKL</a>
                </li>
                <li>
                    <a href="../xiotkp/index.php">XI OTKP</a>
                </li>
                <li>
                    <a href="../xiirpl/index.php">XII RPL</a>
                </li>
                <li>
                    <a href="../xiiakl/index.php">XII AKL</a>
                </li>
                <li>
                    <a href="../xiiotkp/index.php">XII OTKP</a>
                </li>
	            </ul>
	        </li>
          <li class="active">
            <a href="signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <p class="mb-4 active" style="text-align: center;">Semangat Admin, salam hangat (NR & Abhi)</p>
      </div>

    <script src="../js_sidebar/jquery.min.js"></script>
    <script src="../js_sidebar/popper.js"></script>
    <script src="../js_sidebar/bootstrap.min.js"></script>
    <script src="../js_sidebar/main.js"></script>
  </body>
</html>