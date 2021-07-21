<?php
session_start();
// if(isset($_SESSION['logged_in'])) {
//     header('location:dashboard.php');
// }  
// else if(isset($_SESSION['logged_in'])) {
//     header('location:home1.php');
// } 
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>HIV-AIDS CLUB MANAGEMENT SYSTEM| Admin Login</title>
	<link rel="stylesheet" href="Blood-Donation/css/font-awesome.min.css">
	<link rel="stylesheet" href="Blood-Donation/css/bootstrap.min.css">
	<link rel="stylesheet" href="Blood-Donation/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="Blood-Donation/css/bootstrap-social.css">
	<link rel="stylesheet" href="Blood-Donation/css/bootstrap-select.css">
	<link rel="stylesheet" href="Blood-Donation/css/fileinput.min.css">
	<link rel="stylesheet" href="Blood-Donation/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="Blood-Donation/css/style.css">
</head>

<body>

	<div class="login-page bk-img" style="background-image: url(Blood-Donation/img/banner.png);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 style="background-color:pink" class="text-center text-bold text-light mt-4x">HIV/AIDS CLUB MANAGEMENT SYSTEM 
						</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post" action="auth/login.inc.php">

									<label for="" class="text-uppercase text-sm">Your Username </label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password"
										class="form-control mb">

									
										<label class="">Roles<span
												style="color:red"></span></label>
										<input type="text" placeholder="role"name='role' class="form-control mb">
									
									<br>
									<br>

									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../includes/js/sweetalert.min.js"></script>
    <?php require_once('../notify.php')?>
	<!-- Loading Scripts -->
	<script src="Blood-Donation/js/jquery.min.js"></script>
	<script src="Blood-Donation/js/bootstrap-select.min.js"></script>
	<script src="Blood-Donation/js/bootstrap.min.js"></script>
	<script src="Blood-Donation/js/jquery.dataTables.min.js"></script>
	<script src="Blood-Donation/js/dataTables.bootstrap.min.js"></script>
	<script src="Blood-Donation/js/Chart.min.js"></script>
	<script src="Blood-Donation/js/fileinput.js"></script>
	<script src="Blood-Donation/js/chartData.js"></script>
	<script src="Blood-Donation/js/main.js"></script>

</body>

</html>