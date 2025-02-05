<?php

include "con/connection.php";

$sql = "SELECT * FROM banner where status = 'ACTIVE' order by priority asc";
$dataBanner = $conn->query($sql);

?>