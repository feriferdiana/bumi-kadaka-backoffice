<?php
	include "../action/banner_action.php";

	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");

	$data = [];

	if ($dataBanner->num_rows > 0) {
    while ($row = $dataBanner->fetch_assoc()) {
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