<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bk_admin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>