<?php

session_start();

include "con/connection.php";
include "banner/tbl_banner.php";

$id = isset($_GET['id']) ? $_GET['id'] : null;

deleteBanner($id);

$_SESSION['message_banner'] = "Data berhasil dihapus";

header("Location: ../banner-list.php");

?>