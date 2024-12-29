<?php

	function insert($description, $nameFile, $sourceFile, $size, $priority, $status){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$id = uniqid();
		$dateNow = date('Y-m-d H:i:s');

		$sql = "INSERT INTO news (id, description, nama_file, source_file, size, priority, status, approved, created_date) VALUES (?,?,?,?,?,?,?,0,?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssssss", $id, $description, $nameFile, $sourceFile, $size, $priority, $status, $dateNow);
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

	function updateFull($id, $description, $nameFile, $sourceFile, $size, $priority, $status){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		echo $id;

		$sql = "UPDATE news set description = ?,  nama_file = ?, source_file = ?, size = ?, priority = ?, status = ?, approved = 0 , update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssssss", $description, $nameFile, $sourceFile, $size, $priority, $status, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();

	}

	function updateData($id, $description, $priority, $status){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE news set description = ?, priority = ?, status = ?, approved = 0, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssss", $description, $priority, $status, $dateNow, $id);
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