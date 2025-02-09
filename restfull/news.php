<?php
	include "../action/news_action.php";

	header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

	$data = [];

	if ($dataNews->num_rows > 0) {
    while ($row = $dataNews->fetch_assoc()) {
	        $data[] = $row;
	    }
	}
	
	$response = [
        "status" => "success",
        "code" => "200",
        "data" => $data
    ];

	echo json_encode($response);
?>