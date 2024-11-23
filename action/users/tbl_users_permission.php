<?php

	function findUsersPermission($idUser){
		$url = explode('/', $_SERVER['REQUEST_URI']);
		array_pop($url);
		include $_SERVER['DOCUMENT_ROOT'] . '/' . $url[1] . '/' . 'action/con/connection.php';

		$sql = "SELECT * FROM users_permission where id_user = ? ";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $idUser); // "i" untuk integer, "s" untuk string dan harus variable
		$stmt->execute();

		$result = $stmt->get_result();

    	return $result->fetch_assoc();
	}

?>