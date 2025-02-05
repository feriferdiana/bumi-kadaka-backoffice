<?php

	function findUsers($idUser){
		global $conn;

		$status = "ACTIVE";

		$sql = "SELECT * FROM users where id = ? and status = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $idUser, $status); // "i" untuk integer, "s" untuk string dan harus variable
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function loginUser($email, $password){
		global $conn;

		$sql = "SELECT * FROM users where email = ? and password = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $email, $password); // "i" untuk integer, "s" untuk string dan harus variable
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function findUserId($id){
		global $conn;

		$sql = "SELECT * FROM users WHERE id = ?";
		$stmt = $conn->prepare($sql);
	    $stmt->bind_param("s", $id);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    $data = $result->fetch_assoc();

		return $data;
	}

	function findUsersEmail($email){
		global $conn;

		$status = "ACTIVE";

		$sql = "SELECT * FROM users where email = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $email);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function insert($name, $birth_date, $birth_place, $gender, $email, $password, $foto){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$id = uniqid();
		$dateNow = date('Y-m-d H:i:s');

		$sql = "INSERT INTO users (id, name, birth_date, birth_place, gender, email, password, foto, status, created_date, update_date, approved) VALUES (?,?,?,?,?,?,?,?,'PENDING',?, null, 0)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssssss", $id, $name, $birth_date, $birth_place, $gender, $email, $password, $foto, $dateNow);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function updateFull($nama, $tanggal_lahir, $tempat_lahir, $gender, $email, $source, $id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE users set name = ?, birth_date = ?, birth_place = ?, gender = ?, email = ?, foto = ?, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssssss", $nama, $tanggal_lahir, $tempat_lahir, $gender, $email, $source, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function updateData($nama, $tanggal_lahir, $tempat_lahir, $gender, $email, $id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE users set name = ?, birth_date = ?, birth_place = ?, gender = ?, email = ?, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssss", $nama, $tanggal_lahir, $tempat_lahir, $gender, $email, $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function approveUser($id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE users set status = 'ACTIVE', approved = 1 WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function rejectUser($id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE users set status = 'REJECTED', approved = 2 WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function deleteData($id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE users set status = 'DEACTIVE' WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function updatePass($new_pass, $id){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');

		$dateNow = date('Y-m-d H:i:s');

		$sql = "UPDATE users set password = ?, update_date = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sss", md5($new_pass), $dateNow, $id);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

?>