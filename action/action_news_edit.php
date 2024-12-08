<?php

include "con/connection.php";
include "news/tbl_news.php";


$id = isset($_GET['id']) ? $_GET['id'] : null;

$editNews = findNewsId($id);

?>