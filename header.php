<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PT Bumi Kadaka Backoffice</title>
	<meta name="description" content="kadaka">
	<meta name="keywords" content="kadaka, ">
	<meta name="author" content="PT Bumi Kadaka Backoffice">
	<link rel="shortcut icon" href="assets/img/icons/ico-bumi-kadaka.png" />
	<link rel="canonical" href="https://naya.ai/" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
	<link href="assets/vendors/file-input/fileup.min.css" rel="stylesheet">
	<link href="assets/vendors/nice-select/nice-select.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link href="assets/vendors/daterangepicker/daterangepicker.css" rel="stylesheet">

	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

	<?php include('action/users/action_check_session.php'); ?>

	<div class="wrapper">

		<!-- sidebar -->
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand text-center mt-2" href="index.php"><span class="align-middle">
					<!-- <img src="assets/img/logo/naya-wordmark-white.png" class="" alt="PT Bumi Kada"> -->
				</span></a>

				<?php include('action/users/action_check_permission.php'); ?>
				<?php $display = "none";?>

				<!-- side  navigation-->
				<ul class="sidebar-nav">
					<li class="sidebar-header"></li>
					<li class="sidebar-item <?=$showDashboard?>">
						<a class="sidebar-link" href="dashboard-page.php">
							<span class="material-icons align-middle">home</span> 
							<span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item <?=$showBanner?>" style="display:<?=$displayManagementBanner?>;">
						<a data-bs-target="#pages-banner" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<span class="material-icons align-middle">burst_mode</span> 
							<span class="align-middle">Manajemen Banner</span>
						</a>
						<ul id="pages-banner" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item" style="display:<?=$displayListBanner?>;">
								<a class="sidebar-link" href="banner-list.php">Daftar Banner</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayAddBanner?>;">
								<a class="sidebar-link" href="banner-add.php">Tambah Banner</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayEditBanner?>;">
								<a class="sidebar-link" href="banner-edit-list.php">Ubah Banner</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayApprovalBanner?>;">
								<a class="sidebar-link" href="banner-approval-list.php">Persetujuan Banner</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item <?=$showNews?>" style="display:<?=$displayManagementBerita?>;">
						<a data-bs-target="#pages-news" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<span class="material-icons align-middle">assignment</span> 
							<span class="align-middle">Manajemen Berita</span>
						</a>
						<ul id="pages-news" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item" style="display:<?=$displayListBerita?>;">
								<a class="sidebar-link" href="news-list.php">Daftar Berita</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayAddBerita?>;">
								<a class="sidebar-link" href="news-add.php">Tambah Berita</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayEditBerita?>;">
								<a class="sidebar-link" href="news-edit-list.php">Ubah Berita</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayApprovalBerita?>;">
								<a class="sidebar-link" href="news-approval-list.php">Persetujuan Berita</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item <?=$showUser?>" style="display:<?=$displayManagementAkun?>;">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<span class="material-icons align-middle">manage_accounts</span> 
							<span class="align-middle">Manajemen Akun</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item" style="display:<?=$displayDaftarAkun?>;">
								<a class="sidebar-link" href="user-list.php">Daftar Akun</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayTambahAkun?>;">
								<a class="sidebar-link" href="user-add.php">Tambah Akun</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayUbahAkun?>;">
								<a class="sidebar-link" href="user-edit-list.php">Ubah Akun</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayHapusAkun?>;">
								<a class="sidebar-link" href="user-delete.php">Hapus Akun</a>
							</li>
							<li class="sidebar-item" style="display:<?=$displayApprovalAkun?>;">
								<a class="sidebar-link" href="user-approval-list.php">Persetujuan Akun</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item <?=$showAccess?>" style="display:<?=$displayManagementAkses?>;">
						<a class="sidebar-link" href="access-list.php">
							<span class="material-icons align-middle">key</span> 
							<span class="align-middle">Manajemen Akses</span>
						</a>
					</li>
				</ul>
				<!-- //side  navigation-->

				<div class="sidebar-cta d-none">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Hello there</strong>
						<div class="mb-3 text-sm">Are you looking for more components? Check out our premium version.</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- //sidebar -->