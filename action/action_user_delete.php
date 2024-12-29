<?php

session_start();

include "con/connection.php";
include "users/tbl_users.php";

$id = isset($_GET['id']) ? $_GET['id'] : null;

deleteData($id);

$_SESSION['message_users'] = "Data berhasil dihapus";

header("Location: ../user-delete.php");

?>