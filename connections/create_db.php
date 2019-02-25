<?php 
	session_start();
	$success = $error = "";
	if (isset($_POST['createdb'])) {
		# code...
		$dbname = $_POST['dbname'];
		$server = "localhost";
		$servername = "root";
		$serverpass = "";
		$_SESSION['dbname'] = $dbname;
		// Create connection
		$conn = new mysqli($server, $servername, $serverpass);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE ".$dbname;
		if ($conn->query($sql) === TRUE) {
		    $success = "Database created successfully<br><a href='createtable.php'>Click here to continue</a>";
		} else {
		    $error = "Error creating database: " . $conn->error;
	   	}

	}
 ?>