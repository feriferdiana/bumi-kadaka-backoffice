<?php

session_start();

include "con/connection.php";
include "news/tbl_news.php";

$id = isset($_GET['id']) ? $_GET['id'] : null;

deleteNews($id);

$_SESSION['message_news'] = "Data berhasil dihapus";

header("Location: ../news-list.php");

?>