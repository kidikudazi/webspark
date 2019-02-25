<?php 
$db = $tblname = $success = $error = "";

if (isset($_POST['cmptdb1'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}
}

if (isset($_POST['cmptdb2'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}

if (isset($_POST['cmptdb3'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	".$val3." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}


if (isset($_POST['cmptdb4'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	".$val3." varchar(255) not null,
	".$val4." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}


if (isset($_POST['cmptdb5'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	".$val3." varchar(255) not null,
	".$val4." varchar(255) not null,
	".$val5." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}

if (isset($_POST['cmptdb6'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	".$val3." varchar(255) not null,
	".$val4." varchar(255) not null,
	".$val5." varchar(255) not null,
	".$val6." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}


if (isset($_POST['cmptdb6'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];
	$val7 = $_POST['val7'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	".$val3." varchar(255) not null,
	".$val4." varchar(255) not null,
	".$val5." varchar(255) not null,
	".$val6." varchar(255) not null,
	".$val7." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}

if (isset($_POST['cmptdb6'])) {
	# code...
	session_start();
	$db = $_SESSION['dbname'];
	$tblname = $_SESSION['tablename'];

	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$val3 = $_POST['val3'];
	$val4 = $_POST['val4'];
	$val5 = $_POST['val5'];
	$val6 = $_POST['val6'];
	$val7 = $_POST['val7'];
	$val8 = $_POST['val8'];

	$servhost = "localhost";
	$servname = "root";
	$servpass = "";
	$dbname = $db;

	// Create connection
	$conn = new mysqli($servhost, $servname, $servpass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
   // sql to create table
	$sql = "CREATE TABLE ".$tblname."(
	Id int auto_increment primary key not null,
	".$val1." varchar(255) not null,
	".$val2." varchar(255) not null,
	".$val3." varchar(255) not null,
	".$val4." varchar(255) not null,
	".$val5." varchar(255) not null,
	".$val6." varchar(255) not null,
	".$val7." varchar(255) not null,
	".$val8." varchar(255) not null,
	reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	    $success = "Table ".$tblname." created successfully";
	} else {
	    $error  = "Error creating table: " . $conn->error;
	}

}
 ?>