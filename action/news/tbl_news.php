<?php

	function insert($title, $description, $nameFile, $sourceFile, $size, $priority, $status){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$id = uniqid();
		$dateNow = date('Y-m-d H:i:s');

		$sql = "INSERT INTO news (id, title, description, nama_file, source_file, size, priority, status, approved, created_date) VALUES (?,?,?,?,?,?,?,?,0,?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssssss", $id, $title, $description, $nameFile, $sourceFile, $size, $priority, $status, $dateNow);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function findNewsId($id){
		global $conn;

		$sql = "SELECT * FROM news WHERE id = ?";
		$stmt = $conn->prepare($sql);
	    $stmt->bind_param("s", $id);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    $data = $result->fetch_assoc();

		return $data;
	}

	function updateFull($id, $title, $description, $nameFile, $sourceFile, $size, $priority, $status){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		echo $id;

		$sql = "UPDATE news set title = ?, description = ?,  nama_file = ?, source_file = ?, size = ?, priority = ?, status = ?, approved = 0 , update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssssss", $title, $description, $nameFile, $sourceFile, $size, $priority, $status, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();

	}

	function updateData($id, $title, $description, $priority, $status){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE news set title = ?, description = ?, priority = ?, status = ?, approved = 0, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssss", $title, $description, $priority, $status, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();

	}

	function deleteNews($id){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE news set status = 'DELETED'WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();

	}

	function approveNews($id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE news set approved = 1, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function rejectNews($id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE news set approved = 2, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

?>