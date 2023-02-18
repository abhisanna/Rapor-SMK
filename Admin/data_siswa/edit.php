<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SMK CINTA KASIH TZU CHI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/tc.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						RAPOR MID SEMESTER 1<br>TAHUN AJARAN 2020/2021
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="editProses.php">
					<div class="wrap-input100 validate-input m-b-15" data-validate="Nama is required">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Masukkan nama lengkap">
						<span class="focus-input100"></span>
					</div>

					<select class="form-control" name="kelas">
						<option value="" disabled selected hidden>-- Pilihan Kelas --</option>
						<option value="X RPL 1">X RPL 1</option>
						<option value="X RPL 2">X RPL 2</option>
						<option value="X AKL">X AKL</option>
						<option value="X OTKP">X OTKP</option>
						<option value="XI RPL">XI RPL</option>
						<option value="XI AKL">XI AKL</option>
						<option value="XI OTKP">XI OTKP</option>
						<option value="XII RPL">XII RPL</option>
						<option value="XII AKL">XII AKL</option>
						<option value="XII OTKP">XII OTKP</option>
					</select>

					<div class="wrap-input100 validate-input" data-validate = "NIS is required">
						<span class="label-input100">NIS</span>
						<input class="input100" type="password" id="pass" name="nis" placeholder="Masukkan NIS">
						<span class="focus-input100"></span>
					</div>

					<div class="w-full p-b-15">
						<div class="contact100-form-checkbox">
							<div class="p-t-15">
							<input class="input-checkbox100" id="ckb1" type="checkbox" onclick="change()" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Tampilkan NIS
							</label>
							</div>
						</div>
					</div>

						<center><div class="textt"><h6 class="p-b-7" style="color: red;">!! NIS dapat di lihat pada Kartu Pelajar</h6>
						<label class="p-b-15">Created by: Nathasya & Abhisanna</label></div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div></center>
				</form>
				<script>
					function change() {
						var pass = document.getElementById('pass');
						if (pass.type === "password") {
							pass.type = "text";
						} else {
							pass.type = "password";
						}
					}
				</script>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>