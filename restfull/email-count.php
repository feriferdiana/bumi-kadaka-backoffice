<?php
	include "../action/con/connection.php";
	include "../action/banner_action.php";

	header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

	$data = [];

	$sql = "SELECT count(*) as total_email FROM email";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	$dataEmail = $result->fetch_assoc();
	
	$response = [
        "status" => "success",
        "code" => "200",
        "data" => $dataEmail
    ];

	echo json_encode($response);
?>