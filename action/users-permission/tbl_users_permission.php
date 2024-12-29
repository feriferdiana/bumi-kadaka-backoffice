<?php

	require_once __DIR__ . '/../util/uuid.php'; 

	function findByIdUsers($idUser){
		global $conn;

		$status = "ACTIVE";

		$sql = "SELECT * FROM access_user where id_user = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $idUser);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function findByIdUsersPermissions($idUser){
		global $conn;

		$status = "ACTIVE";

		$sql = "SELECT * FROM users_permission where id_user = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $idUser);
		$stmt->execute();

		$result = $stmt->get_result();

		return $result->fetch_assoc();
	}

	function updateAccess($is_list_news,$is_add_news,$is_edit_news,$is_delete_news,$is_approval_news,$is_list_banner,$is_add_banner,$is_edit_banner,$is_delete_banner,$is_approval_banner,$is_list_users,$is_add_users,$is_edit_users,$is_delete_users,$is_approval_users,$is_management_access, $id_user){
		global $conn;
		
		$sql = "UPDATE users_permission set is_list_news = ? , is_add_news = ? ,is_edit_news = ? ,is_delete_news = ? ,is_approval_news = ? ,is_list_banner = ? ,is_add_banner = ? ,is_edit_banner = ? ,is_delete_banner = ? ,is_approval_banner = ? ,is_list_users = ? ,is_add_users = ? ,is_edit_users = ? ,is_delete_users = ? ,is_approval_users = ? , is_management_access = ? WHERE id_user = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssssssssssssss", $is_list_news,$is_add_news,$is_edit_news,$is_delete_news,$is_approval_news,$is_list_banner,$is_add_banner,$is_edit_banner,$is_delete_banner,$is_approval_banner,$is_list_users,$is_add_users,$is_edit_users,$is_delete_users,$is_approval_users,$is_management_access, $id_user);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

	function insertAccess($is_list_news,$is_add_news,$is_edit_news,$is_delete_news,$is_approval_news,$is_list_banner,$is_add_banner,$is_edit_banner,$is_delete_banner,$is_approval_banner,$is_list_users,$is_add_users,$is_edit_users,$is_delete_users,$is_approval_users,$is_management_access, $id_user){
		global $conn;

		date_default_timezone_set('Asia/Jakarta');
		$dateNow = date('Y-m-d H:i:s');
		$id = guidv4();
		
		$sql = "INSERT INTO users_permission VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,null)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssssssssssssssss", $id, $id_user, $is_list_news,$is_add_news,$is_edit_news,$is_delete_news,$is_approval_news,$is_list_banner,$is_add_banner,$is_edit_banner,$is_delete_banner,$is_approval_banner,$is_list_users,$is_add_users,$is_edit_users,$is_delete_users,$is_approval_users,$is_management_access, $dateNow);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}

?>