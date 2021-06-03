<?php require_once 'dbh.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
	<title>KBTH CHILD HEALTH DEPARTMENT</title>
</head>
<body oncentextmenu="return false">

	<div class="bg-container-contact100" style="background-image: url(images/bg.jpeg);">
		<div class="contact100-header flex-sb-m">
			<a href="index.php" class="contact100-header-logo">
				<img src="images/download.png" alt="LOGO">
			</a>

			<div>
				<button class="btn-show-contact100">
					Log in here
				</button>
			</div>
		</div>
	</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<button class="btn-hide-contact100">
				<i class="zmdi zmdi-close"></i>
			</button>

			<div class="contact100-form-title" style="background-image: url(images/bg-02.jpg);">
				<span>Log in here</span>
			</div>

			<form class="contact100-form validate-form" action="process_login.php" method="POST">
				 <?php
				 if(isset($_GET['message']))
                  {
                    $message = $_GET['message'];
                    echo $message;
                    set_time_limit(10);
                  }?>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="Email ..." required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="email">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</label>
				</div>
				<div class="wrap-input100 validate-input">
					<input type="password"class="input100" name="password" id="password" placeholder="Password ..." required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="password">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</label>

				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="Submit" id="Submit" value="do">
						Sign in
					</button>
				</div>

				<div class="container-fluid">
					

			</form>
		</div>
	</div>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
