<?php

	include "users/tbl_users_session.php";

	$url = explode('/', $_SERVER['REQUEST_URI']);
	array_pop($url);

	if(isset($_COOKIE['id_user']) or isset($_COOKIE['name_user'])) {
		$idUser = $_COOKIE['id_user'];
		deleteUsersSession($idUser);

		unset($_COOKIE['id_user']);
		setcookie('id_user', '', -1, '/'); 

		unset($_COOKIE['name_user']);
		setcookie('name_user', '', -1, '/'); 

		header("Location: /".$url[1]."/index.php");
	}

?>