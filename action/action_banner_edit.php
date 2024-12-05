<?php

include "con/connection.php";
include "banner/tbl_banner.php";


$id = isset($_GET['id']) ? $_GET['id'] : null;

$editBanner = findBannerId($id);

?>