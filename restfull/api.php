<?php
	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");

	// Ambil parameter dari URL
	$id = isset($_GET['id']) ? intval($_GET['id']) : null;

	// Contoh data statis
	$users = [
	    1 => ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
	    2 => ["id" => 2, "name" => "Bob", "email" => "bob@example.com"],
	];

	// Cek apakah data ditemukan
	if ($id && isset($users[$id])) {
	    $response = [
	        "status" => "success",
	        "data" => $users[$id]
	    ];
	} else {
	    $response = [
	        "status" => "error",
	        "message" => "User not found"
	    ];
	}

	// Kembalikan respons sebagai JSON
	echo json_encode($response);
?>