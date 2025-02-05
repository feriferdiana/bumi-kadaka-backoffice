<?php

include "con/connection.php";

$id_user= isset($_COOKIE['id_user']) ? $_COOKIE['id_user'] : null;

$sql = "SELECT * FROM users where id = ? and status = 'ACTIVE'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id_user); // "i" untuk integer, "s" untuk string dan harus variable
$stmt->execute();

$result = $stmt->get_result();

$detailUsersNavbar = $result->fetch_assoc();

?>