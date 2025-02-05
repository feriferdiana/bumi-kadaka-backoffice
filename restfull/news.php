<?php
	include "action/news_action.php";

	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");

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