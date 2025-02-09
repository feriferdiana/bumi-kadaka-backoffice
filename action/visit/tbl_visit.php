<?php
	function findDataPengunjung(){
		global $conn;
		$sql = "SELECT * FROM visit order by created_date desc";
		$dataBanner = $conn->query($sql);
		return $dataBanner;
	}

	function findDataPengunjungCurrentMonth($currentFirstMonth, $currentLastMonth){
		global $conn;
		$sql = "SELECT count(*) as total_current FROM `visit` where date(created_date) between ? and ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $currentFirstMonth, $currentLastMonth);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function findDataPengunjungOneMonth($oneMonthBeforeFirst, $oneMonthBeforeLast){
		global $conn;
		$sql = "SELECT count(*) as total_current FROM `visit` where date(created_date) between ? and ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $oneMonthBeforeFirst, $oneMonthBeforeLast);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function findDataPengunjungtwoMonth($twoMonthBeforeFirst, $twoMonthBeforeLast){
		global $conn;
		$sql = "SELECT count(*) as total_current FROM `visit` where date(created_date) between ? and ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $twoMonthBeforeFirst, $twoMonthBeforeLast);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}
?>