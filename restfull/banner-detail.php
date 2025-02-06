<?php
	include "../action/con/connection.php";
	include "../action/banner_detail_action.php";

	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");

	// Ambil parameter dari URL
	$id = isset($_GET['id']) ? $_GET['id']: null;

	// Contoh data statis
	$news = findNewsLandingPage($id);

	// Cek apakah data ditemukan
	if ($id && isset($news)) {
	    $response = [
	    	"code" => "200",
	        "status" => "success",
	        "data" => $news
	    ];
	} else {
	    $response = [
	    	"code" => "500",
	        "status" => "error",
	        "message" => "User not found"
	    ];
	}

	echo json_encode($response);
?>