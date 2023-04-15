<?php include('./connections/connection.php'); ?>
<?php include('./connections/global.php'); ?>
<?php include('./connections/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Spardha || Login </title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/logo-bg.png" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<?php
			if (@$_GET['status'] == 1) {
				echo "<div class='row'><div class='col-md-12 btn btn-success mb-4'>You can now login to your account!</div></div>";
			}
			$login = @$_POST['login'];
			if ($login) {
				$email = @$_POST['email'];
				$pwd = @$_POST['pwd'];
				Login($conn, $email, $pwd);
			}
			?>
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-bg.png" width="30%" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign In</h4>
						<form action="./login.php" method="post">
							<div class="form-group mb-3">
								<label class="floating-label" for="Email">Email address</label>
								<input type="text" name="email" class="form-control" id="Email" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" name="pwd" class="form-control" id="Password" placeholder="">
							</div>
							<input type="submit" name="login" value="Login" class="btn btn-block btn-primary mb-4"></input>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

</body>

</html>