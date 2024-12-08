<?php

session_start();

include "con/connection.php";
include "approval/tbl_approval.php";

$id = $_POST['id'];
$category = $_POST['category'];
$status = $_POST['status_approval'];

// approval banner
if($category == "BANNER"){
	include "banner/tbl_banner.php";

	// approve
	if($status == "APPROVE"){
		approveBanner($id);

		$_SESSION['message_approval'] = "Data banner berhasil disetujui";
	}
	else{
		rejectBanner($id);

		$_SESSION['message_approval'] = "Data banner berhasil ditolak";
	}
}

// approval news
if($category == "NEWS"){
	include "news/tbl_news.php";

	// approve
	if($status == "APPROVE"){
		approveNews($id);

		$_SESSION['message_approval'] = "Data berita berhasil disetujui";
	}
	else{
		rejectNews($id);

		$_SESSION['message_approval'] = "Data berita berhasil ditolak";
	}
}

header("Location: ../approval-list.php");


?>