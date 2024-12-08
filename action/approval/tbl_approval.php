<?php

	function findApprovalId($id){
		global $conn;

		$sql = "SELECT * FROM approval WHERE id = ?";
		$stmt = $conn->prepare($sql);
	    $stmt->bind_param("s", $id);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    $data = $result->fetch_assoc();

		return $data;
	}

?>