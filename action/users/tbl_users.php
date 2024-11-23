<?php

	$url = explode('/', $_SERVER['REQUEST_URI']);
	array_pop($url);
	include $_SERVER['DOCUMENT_ROOT'] . '/' . $url[1] . '/' . 'action/con/connection.php';

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

?>