<?php 

 $val1 =  $val2 = $val3 =  $val4 = $val5 = $val6 = $val7 = $val8 = $val9 = $val10 = $success = "";

if (isset($_POST['cmptreg1'])) {
	# code...
	$val1 = $_POST['val1'];

	$myfile = "../reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="username" placeholder = "'.$val1.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}

if (isset($_POST['cmptreg2'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}


if (isset($_POST['cmptreg3'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}


if (isset($_POST['cmptreg4'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}

if (isset($_POST['cmptreg5'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value5" placeholder = "'.$val5.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}

if (isset($_POST['cmptreg6'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value5" placeholder = "'.$val5.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value6" placeholder = "'.$val6.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}

if (isset($_POST['cmptreg7'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];
	$val7 = $_POST['val7'];
	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value5" placeholder = "'.$val5.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value6" placeholder = "'.$val6.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value7" placeholder = "'.$val7.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}

if (isset($_POST['cmptreg8'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];
	$val7 = $_POST['val7'];
	$val8 = $_POST['val8'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value5" placeholder = "'.$val5.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value6" placeholder = "'.$val6.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value7" placeholder = "'.$val7.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value8" placeholder = "'.$val8.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}

if (isset($_POST['cmptreg9'])) {
	# code...
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];
	$val7 = $_POST['val7'];
	$val8 = $_POST['val8'];
	$val9 = $_POST['val9'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value5" placeholder = "'.$val5.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value6" placeholder = "'.$val6.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value7" placeholder = "'.$val7.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value8" placeholder = "'.$val8.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value9" placeholder = "'.$val9.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
}
   if (isset($_POST['cmptreg10'])) {
   	# code...
   	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];
	$val7 = $_POST['val7'];
	$val8 = $_POST['val8'];
	$val9 = $_POST['val9'];
	$val10 = $_POST['val10'];

	$myfile = "reg.php";
	$file = fopen($myfile, "w") or die("Can not create file");

	$data = '<!DOCTYPE html>
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
			<form method="post">
			<div class="form-group">
			  <input type="text" class="form-control" name="value1" placeholder = "'.$val1.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value2" placeholder = "'.$val2.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value3" placeholder = "'.$val3.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value4" placeholder = "'.$val4.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value5" placeholder = "'.$val5.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value6" placeholder = "'.$val6.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value7" placeholder = "'.$val7.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value8" placeholder = "'.$val8.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value9" placeholder = "'.$val9.'" required>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="value10" placeholder = "'.$val10.'" required>
			</div>
			<center><button type="submit" class = "btn btn-success btn-sm" name="register"> register </button></center>
			</form>
		</div>
	</div>
	</body>
	</html>';

	fwrite($file, $data);
	fclose($file);

	$success = "successfull";
   }
 ?>