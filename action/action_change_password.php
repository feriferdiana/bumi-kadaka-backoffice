<?php

include "con/connection.php";
include "users/tbl_users.php";

session_start();

$id_user= isset($_COOKIE['id_user']) ? $_COOKIE['id_user'] : null;
$old_pass= $_POST['old_pass'];
$new_pass= $_POST['new_pass'];
$confirm_pass= $_POST['confirm_new_pass'];

$user = findUsers($id_user);

if(md5($old_pass) != $user['password']){
	$_SESSION['message_change_password'] = "Password lama tidak sesuai!";
	header("Location: ../change-password.php");
}
else{
	if($new_pass != $confirm_pass){
		$_SESSION['message_change_password'] = "Password baru dan konfirmasi password tidak sesuai!";
		header("Location: ../change-password.php");
	}
	else{
		updatePass($new_pass, $id_user);

		$_SESSION['message_change_password'] = "Password berhasil diubah!";
		header("Location: ../change-password.php");
	}
}

?>