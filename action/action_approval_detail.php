<?php

include "con/connection.php";
include "approval/tbl_approval.php";


$id = isset($_GET['id']) ? $_GET['id'] : null;

$detailApproval = findApprovalId($id);

?>