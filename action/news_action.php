<?php

include "con/connection.php";

$sql = "SELECT * FROM news where status = 'ACTIVE' order by priority asc";
$dataNews = $conn->query($sql);

?>