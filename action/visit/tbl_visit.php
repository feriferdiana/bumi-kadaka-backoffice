<?php
	function findDataPengunjung(){
		global $conn;
		$sql = "SELECT * FROM visit order by created_date desc";
		$dataBanner = $conn->query($sql);
		return $dataBanner;
	}
?>