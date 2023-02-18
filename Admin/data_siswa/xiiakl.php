<?php 

session_start();

if(!isset($_SESSION['username'])) {
  header("location: index.html");
}

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>XII AKL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
	  				<h3><?php echo $_SESSION['username']; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="../home.php"><span class="fas fa-user-friends mr-3"></span> Home</a>
          </li>
          <li class="active">
              <a href="#"><span class="fas fa-book-open mr-3"></span> Data nilai</a>
          </li>
          <li class="active">
            <a href="../signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Data siswa</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">NIS</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM xiiakl")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query)) {

                ?>
                <tr>
                <th scope="row"><?php echo $nomor++; ?></th>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td>
                    <a class="btn btn-success" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
		            <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
      </div>
		</div>

    <script src="../../js_sidebar/jquery.min.js"></script>
    <script src="../../js_sidebar../popper.js"></script>
    <script src="../../js_sidebar../bootstrap.min.js"></script>
    <script src="../../js_sidebar../main.js"></script>
  </body>
</html>