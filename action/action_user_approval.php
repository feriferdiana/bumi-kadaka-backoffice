<?php

session_start();

include "con/connection.php";
include "users/tbl_users.php";

$id = $_POST['id'];
$status = $_POST['status_approval'];

// approve
if($status == "APPROVE"){
	approveUser($id);

	$_SESSION['message_users'] = "Data user berhasil disetujui";
}
else{
	rejectUser($id);

	$_SESSION['message_users'] = "Data user berhasil ditolak";
}

header("Location: ../user-approval-list.php");


?>