<?php

include "con/connection.php";
include "visit/tbl_visit.php";
include "email/tbl_email.php";

date_default_timezone_set('Asia/Jakarta');

// pengunjung
$pengunjung = findDataPengunjung();

// count pengunjung
	// current
	$currentFirstMonth = date('Y-m-01');
	$currentLastMonth = date('Y-m-t');

	$dataCurrentMonth = findDataPengunjungCurrentMonth($currentFirstMonth, $currentLastMonth);

	// one month before
	$oneMonthBeforeFirst = date('Y-m-01', strtotime('-1 month'));
	$oneMonthBeforeLast = date('Y-m-t', strtotime('-1 month'));

	$dataOneBeforeMonth = findDataPengunjungOneMonth($oneMonthBeforeFirst, $oneMonthBeforeLast);

	// two month before
	$twoMonthBeforeFirst = date('Y-m-01', strtotime('-2 month'));
	$twoMonthBeforeLast = date('Y-m-t', strtotime('-2 month'));

	$datatwoBeforeMonth = findDataPengunjungtwoMonth($twoMonthBeforeFirst, $twoMonthBeforeLast);

	// total
	$dataCountVisit = $dataCurrentMonth['total_current'] + $dataOneBeforeMonth['total_current'] + $datatwoBeforeMonth['total_current'];

// count email
$dataCountEmail = findTotalEmail();
	
?>