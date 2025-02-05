<?php

include "con/connection.php";

$sql = "SELECT * FROM banner where status = 'ACTIVE' and approved = 1 order by priority asc";
$dataBanner = $conn->query($sql);

?>