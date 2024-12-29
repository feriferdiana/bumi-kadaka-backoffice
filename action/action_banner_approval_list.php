<?php

include "con/connection.php";
include "banner/tbl_banner.php";

// Konfigurasi pagination
$limit = 2; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Ambil data
$sql = "SELECT * FROM banner where approved = 0 LIMIT $limit OFFSET $offset";
$dataBanner = $conn->query($sql);

// Hitung total halaman
$totalSql = "SELECT COUNT(*) AS total FROM banner";
$totalResult = $conn->query($totalSql);
$totalData = $totalResult->fetch_assoc()['total'];
$totalPages = ceil($totalData / $limit);


?>