<?php

	function insert($nameFile, $sourceFile, $size, $priority, $status){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$id = uniqid();
		$dateNow = date('Y-m-d H:i:s');

		$sql = "INSERT INTO banner (id, nama_file, source_file, size, priority, status, approved, created_date) VALUES (?,?,?,?,?,?,0,?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssiss", $id, $nameFile, $sourceFile, $size, $priority, $status, $dateNow);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function listBanner(){
		global $conn;

		$sql = "SELECT * FROM banner";
		$result = $conn->query($sql);

		$data = []; // Buat array kosong untuk menyimpan data

		if ($result->num_rows > 0) {
		    while ($row = $result->fetch_assoc()) {
		        $data[] = $row; // Tambahkan setiap baris data ke array
		    }
		}

		return $data;
	}

	function findBannerId($id){
		global $conn;

		$sql = "SELECT * FROM banner WHERE id = ?";
		$stmt = $conn->prepare($sql);
	    $stmt->bind_param("s", $id);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    $data = $result->fetch_assoc();

		return $data;
	}

	function updateFull($id, $nameFile, $sourceFile, $size, $priority, $status){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE banner set nama_file = ?, source_file = ?, size = ?, priority = ?, status = ?, approved = 0 , update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssss", $nameFile, $sourceFile, $size, $priority, $status, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();

	}

	function updateData($id, $nameFile, $priority, $status){

		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE banner set nama_file = ?, priority = ?, status = ?, approved = 0, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssss", $nameFile, $priority, $status, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();

	}

?>