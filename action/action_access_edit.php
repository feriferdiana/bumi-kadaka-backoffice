<?php

include "con/connection.php";
include "users-permission/tbl_users_permission.php";


$id = isset($_GET['id']) ? $_GET['id'] : null;

$editAccess = findByIdUsers($id);

?>