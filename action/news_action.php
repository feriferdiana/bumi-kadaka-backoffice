<?php

include "con/connection.php";

$sql = "SELECT * FROM news where status = 'ACTIVE' and approved = 1 order by priority asc";
$dataNews = $conn->query($sql);

?>