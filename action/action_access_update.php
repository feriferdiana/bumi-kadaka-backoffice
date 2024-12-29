<?php

include "con/connection.php";
include "users-permission/tbl_users_permission.php";

session_start();

$id_user = $_POST['id_user'];
$is_list_news = isset($_POST['is_list_news']) ? $_POST['is_list_news'] : 0;
$is_add_news = isset($_POST['is_add_news']) ? $_POST['is_add_news'] : 0;
$is_edit_news = isset($_POST['is_edit_news']) ? $_POST['is_edit_news'] : 0;
$is_delete_news = isset($_POST['is_delete_news']) ? $_POST['is_delete_news'] : 0;
$is_approval_news = isset($_POST['is_approval_news']) ? $_POST['is_approval_news'] : 0;
$is_list_banner = isset($_POST['is_list_banner']) ? $_POST['is_list_banner'] : 0;
$is_add_banner = isset($_POST['is_add_banner']) ? $_POST['is_add_banner'] : 0;
$is_edit_banner = isset($_POST['is_edit_banner']) ? $_POST['is_edit_banner'] : 0;
$is_delete_banner = isset($_POST['is_delete_banner']) ? $_POST['is_delete_banner'] : 0;
$is_approval_banner = isset($_POST['is_approval_banner']) ? $_POST['is_approval_banner'] : 0;
$is_list_users = isset($_POST['is_list_users']) ? $_POST['is_list_users'] : 0;
$is_add_users = isset($_POST['is_add_users']) ? $_POST['is_add_users'] : 0;
$is_edit_users = isset($_POST['is_edit_users']) ? $_POST['is_edit_users'] : 0;
$is_delete_users = isset($_POST['is_delete_users']) ? $_POST['is_delete_users'] : 0;
$is_approval_users = isset($_POST['is_approval_users']) ? $_POST['is_approval_users'] : 0;
$is_management_access = isset($_POST['is_management_access']) ? $_POST['is_management_access'] : 0;


$users = findByIdUsersPermissions($id_user);
if($users == null){
	insertAccess($is_list_news,$is_add_news,$is_edit_news,$is_delete_news,$is_approval_news,$is_list_banner,$is_add_banner,$is_edit_banner,$is_delete_banner,$is_approval_banner,$is_list_users,$is_add_users,$is_edit_users,$is_delete_users,$is_approval_users,$is_management_access, $id_user);
}
else{
	updateAccess($is_list_news,$is_add_news,$is_edit_news,$is_delete_news,$is_approval_news,$is_list_banner,$is_add_banner,$is_edit_banner,$is_delete_banner,$is_approval_banner,$is_list_users,$is_add_users,$is_edit_users,$is_delete_users,$is_approval_users,$is_management_access, $id_user);
}

$_SESSION['message_access'] = "Data Akses berhasil diperbarui";

header("Location: ../access-list.php");

?>