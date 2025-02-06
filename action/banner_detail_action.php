<?php

	function findNewsLandingPage($id){
		global $conn;

		$sql = "SELECT * FROM news where id = ? and status = 'ACTIVE' and approved = 1;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $id);
		$stmt->execute();

		$result = $stmt->get_result();
		return $result->fetch_assoc();
	}

?>