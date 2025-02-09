<?php

	function findTotalEmail(){
		global $conn;
		$sql = "SELECT count(*) as total_email FROM email";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

?>