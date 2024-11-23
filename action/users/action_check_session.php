<?php

	include "tbl_users_session.php";
	date_default_timezone_set('Asia/Jakarta');

	if(!isset($_COOKIE['id_user']) or !isset($_COOKIE['name_user'])) {
		header("Location: index.php");
    }
	
?>