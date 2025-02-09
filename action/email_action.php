<?php

function insert($firstName, $lastName, $email, $subject, $message){
	global $conn;

	date_default_timezone_set('Asia/Jakarta');

	$name = $firstName . " " . $lastName;

	$id = uniqid();
	$dateNow = date('Y-m-d H:i:s');

	$sql = "INSERT INTO email (id, name, email, subject, message, created_date) VALUES (?,?,?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssss", $id, $name, $email, $subject, $message, $dateNow);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}



?>