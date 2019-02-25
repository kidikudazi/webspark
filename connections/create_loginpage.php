<?php 
$val1 = $val2 = $success = "";
if (isset($_POST['crtlogin'])) {
	# code...
	$val1 = strtolower($_POST['val1']);
	$val2 = strtolower($_POST['val2']);
	if (($val1 == "username" || $val1 == "email")&& $val2 == "password") {
		# code...
	$myfile = "../login.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
	<html>
	<head>
		<title>LoginPage</title>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="username" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="password" class="form-control" name="password" placeholder = "password" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="login"> login </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
	}elseif ($val2 == "none") {
		# code...
		$myfile = "login.php";
	$file = fopen($myfile, "w") or die("Can  not create file");

	$data = '<!DOCTYPE html>
	<html>
	<head>
		<title>LoginPage</title>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="username" placeholder = "'.$val1.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="login"> login </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
	}
	
	
}


 ?>