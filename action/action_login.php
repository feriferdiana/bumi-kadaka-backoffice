<?php
	include "con/connection.php";
	include "users/tbl_users.php";
	include "users/tbl_users_session.php";

	$email = $_POST["email"];
	$password = $_POST["password"];

	$md5Password = md5($password);

	$dataLogin = loginUser($email,$md5Password);
	$idUser = $dataLogin['id'];

	if ($dataLogin != null) {

		// check session
		$dataSession = findUsersSession($idUser);

		if($dataSession == null){
			// insert session
			insertSession($idUser);

			// save cookie id user
			$cookie_name = "id_user";
			$cookie_value = $idUser;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

			// save cookie id user
			$users = findUsers($idUser);
			$cookie_name_user = "name_user";
			$cookie_value_user = $users['name'];
			setcookie($cookie_name_user, $cookie_value_user, time() + (86400 * 30), "/"); // 86400 = 1 day

			header("Location: ../page-dashboard.php");
		}
		else{
			updateSession($idUser);

			// save cookie id user
			$cookie_name = "id_user";
			$cookie_value = $idUser;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

			// save cookie id user
			$users = findUsers($idUser);
			$cookie_name_user = "name_user";
			$cookie_value_user = $users['name'];
			setcookie($cookie_name_user, $cookie_value_user, time() + (86400 * 30), "/"); // 86400 = 1 day

			header("Location: ../page-dashboard.php");
		}
	} else {
		$_SESSION['message'] = "Email / Password tidak sesuai!";
		header("Location: ../index.php");
	}
?>