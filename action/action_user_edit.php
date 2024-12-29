<?php

include "con/connection.php";
include "users/tbl_users.php";


$id = isset($_GET['id']) ? $_GET['id'] : null;

$editUsers = findUserId($id);

?>