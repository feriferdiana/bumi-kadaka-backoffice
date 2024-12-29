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

		$_SESSION['message_banner'] = "Data banner berhasil disetujui";
	}
	else{
		rejectBanner($id);

		$_SESSION['message_banner'] = "Data banner berhasil ditolak";
	}

	header("Location: ../banner-approval-list.php");
}

// approval news
if($category == "NEWS"){
	include "news/tbl_news.php";

	// approve
	if($status == "APPROVE"){
		approveNews($id);

		$_SESSION['message_news'] = "Data berita berhasil disetujui";
	}
	else{
		rejectNews($id);

		$_SESSION['message_news'] = "Data berita berhasil ditolak";
	}

	header("Location: ../news-approval-list.php");
}


?>