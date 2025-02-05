<?php

include "con/connection.php";
include "users/tbl_users.php";

$id_user= isset($_COOKIE['id_user']) ? $_COOKIE['id_user'] : null;

$detailUsersNavbar = findUsers($id_user);

?>