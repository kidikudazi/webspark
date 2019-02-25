<?php 
$success = "";
//= $cmptreg1= $cmptreg2 = $cmptreg3 = $cmptreg4 = $cmptreg5 = $cmptreg6 = $cmptreg7 = $cmptreg8 = $cmptreg9 = $cmptreg10 = "";

if (isset($_POST['cmptreg1']) || isset($_POST['cmptreg2']) || isset($_POST['cmptreg3']) || isset($_POST['cmptreg4']) || isset($_POST['cmptreg']) || isset($_POST['cmptreg6']) || isset($_POST['cmptreg7']) || isset($_POST['cmptreg8']) || isset($_POST['cmptreg9']) || isset($_POST['cmptreg10'])) {
	# code...
	session_start();
	$count = $_SESSION['count'];

	$header = '
	<html>
	<head>
		<title>RegistrationPage</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	</head>
	<body>
	<ul class="nav nav-pills">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
		<li><a href="#"><span class="fa fa-sign-in"></span>Sign-in</a></li>
		<li><a href="#"><span class="fa fa-users"></span>Create Account</a></li>
		<li><a href="#"><span class="fa fa-exclamation"></span>About</a></li>
	</ul>
	<br>
	<div class="container-fluid">
		<div class="well">
			<form method="post">';

	$footer = '<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	$myfile = "../reg.php";
	$file = fopen($myfile, "a") or die("can not create file");

	fwrite($file, $header);


	for ( $i = 1; $i <= $count ; $i++ ) { 
		# code...
		$_SESSION['val'.$i] = $_POST['val'.$i];
		$content = '<div class="form-group">
			  <input type="text" class="form-control" name="" placeholder = "'.$_SESSION["val".$i].'" required>
			</div>';

		fwrite($file, $content);
	}

	fwrite($file, $footer);
	fclose($file);
	$success = "Registration page created successfully";
}



 ?>