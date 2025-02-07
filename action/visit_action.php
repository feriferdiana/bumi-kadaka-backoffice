<?php

function findSameDay($latitude, $longitude){
	global $conn;

	date_default_timezone_set('Asia/Jakarta');

	$dateNow = date('Y-m-d');

	$sql = "SELECT * FROM visit where latitude = ? and longitude = ? and date(created_date) = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $latitude, $longitude, $dateNow);
	$stmt->execute();

	$result = $stmt->get_result();
	return $result->fetch_assoc();
}

function insert($latitude, $longitude, $address, $village, $subdistrict, $city, $state, $postcode){
	global $conn;

	date_default_timezone_set('Asia/Jakarta');

	$id = uniqid();
	$dateNow = date('Y-m-d H:i:s');

	$sql = "INSERT INTO visit (id, latitude, longitude, address, village, subdistrict, city, state, postcode, created_date) VALUES (?,?,?,?,?,?,?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssssssss", $id, $latitude, $longitude, $address, $village, $subdistrict, $city, $state, $postcode, $dateNow);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}

?>