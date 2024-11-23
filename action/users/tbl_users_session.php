<?php

	require_once __DIR__ . '/../util/uuid.php'; 
	date_default_timezone_set('Asia/Jakarta');

	function findUsersSession($idUser){
		global $conn;

		$sql = "SELECT * FROM users_session where id_user = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $idUser); // "i" untuk integer, "s" untuk string dan harus variable
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function insertSession($idUser){
		global $conn;
		$id = guidv4();

		$sql_insert = 
		"INSERT INTO users_session (id, id_user, date_login, date_expired, created_date) 
		 VALUES ('".$id."', '".$idUser."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s', strtotime('+15 minutes'))."', '".date('Y-m-d H:i:s')."')";

		$conn->query($sql_insert);
	}

	function updateSession($idUser){
		global $conn;

		// update
		$sql_update = "UPDATE users_session set date_login = '".date('Y-m-d H:i:s')."', date_expired = '".date('Y-m-d H:i:s', strtotime('+15 minutes'))."' WHERE id_user = '".$idUser."' ";
		$conn->query($sql_update);
	}

	function deleteUsersSession($idUsers){
		global $conn;

		$sql_search = "DELETE FROM users_session where id_user = '".$idUsers."' ";
		$result_search = $conn->query($sql_search);
	}

?>