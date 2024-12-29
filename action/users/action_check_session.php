<?php

	include('action/con/connection.php');
	include "tbl_users_session.php";
	date_default_timezone_set('Asia/Jakarta');

	if(!isset($_COOKIE['id_user']) or !isset($_COOKIE['name_user'])) {
		header("Location: index.php");
    }
    else{
    	$idUser = $_COOKIE['id_user'];

    	$userSession = findUsersSession($idUser);
    	if($userSession == null){
    		header("Location: index.php");
    	}
    	else{
    		if($userSession['date_expired'] < date('Y-m-d H:i:s')){
	    		deleteUsersSession($idUser);
	    		header("Location: index.php");
	    	}

	    	updateSession($idUser);
    	}

    }
	
?>