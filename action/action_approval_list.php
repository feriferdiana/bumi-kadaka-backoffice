<?php

include "con/connection.php";
include "approval/tbl_approval.php";

// Konfigurasi pagination
$limit = 2; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Ambil data
$sql = "SELECT * FROM approval LIMIT $limit OFFSET $offset";
$dataApproval = $conn->query($sql);

// Hitung total halaman
$totalSql = "SELECT COUNT(*) AS total FROM approval";
$totalResult = $conn->query($totalSql);
$totalData = $totalResult->fetch_assoc()['total'];
$totalPages = ceil($totalData / $limit);

?>