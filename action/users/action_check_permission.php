<?php

	include "action/con/connection.php";
	include "tbl_users_permission.php";

	// active header
    $url = $_SERVER['REQUEST_URI'];

    $urlPath = explode("/", $url);

    $page = $urlPath[count($urlPath) - 1];

    $pageSplit = explode("-", $page);

    $showDashboard;
    $showBanner;
    $showNews;
    $showApproval;
    $showUser;
    $showAccess;

    if(isset($pageSplit[0])){

    	if($pageSplit[0] == "dashboard"){
    		$showDashboard = "active";
    	}
    	else{
    		$showDashboard = "";
    	}

    	if($pageSplit[0] == "banner"){
    		$showBanner = "active";
    	}
    	else{
    		$showBanner = "";
    	}

    	if($pageSplit[0] == "news"){
    		$showNews = "active";
    	}
    	else{
    		$showNews = "";
    	}

    	if($pageSplit[0] == "approval"){
    		$showApproval = "active";
    	}
    	else{
    		$showApproval = "";
    	}

    	if($pageSplit[0] == "user"){
    		$showUser = "active";
    	}
    	else{
    		$showUser = "";
    	}

    	if($pageSplit[0] == "access"){
    		$showAccess = "active";
    	}
    	else{
    		$showAccess = "";
    	}

    }


	// permission
	if(isset($_COOKIE['id_user'])) {
		$idUser = $_COOKIE['id_user'];

		$dataPermission = findUsersPermission($idUser);

		$displayListBanner;
		$displayAddBanner;
		$displayEditBanner;
		$displayDeleteBanner;
		$displayApprovalBanner;
		$displayManagementBanner;
		
		$displayAddBerita;
		$displayEditBerita;
		$displayDeleteBerita;
		$displayApprovalBerita;
		$displayManagementBerita;

		$displayManagementAkun;
		$displayDaftarAkun;
		$displayTambahAkun;
		$displayUbahAkun;
		$displayHapusAkun;
		$displayApprovalAkun;

		$displayManagementAkses;

		if(isset($dataPermission)){
			if(count($dataPermission) > 0){
				//  Banner
				if($dataPermission['is_list_banner'] == true){
					$displayListBanner = "block";
				}
				else{
					$displayListBanner = "none";

				}
				if($dataPermission['is_add_banner'] == true){
					$displayAddBanner = "block";
				}
				else{
					$displayAddBanner = "none";
				}
				if($dataPermission['is_edit_banner'] == true){
					$displayEditBanner = "block";
				}
				else{
					$displayEditBanner = "none";
				}
				if($dataPermission['is_delete_banner'] == true){
					$displayDeleteBanner = "block";
				}
				else{
					$displayDeleteBanner = "none";
				}
				if($dataPermission['is_approval_banner'] == true){
					$displayApprovalBanner = "block";
				}
				else{
					$displayApprovalBanner = "none";
				}
				if($dataPermission['is_list_banner'] == true or $dataPermission['is_add_banner'] == true or $dataPermission['is_edit_banner'] == true or $dataPermission['is_approval_banner']){
					$displayManagementBanner = "block";
				}
				else{
					$displayManagementBanner = "none";
				}


				// Berita
				if($dataPermission['is_list_news'] == true){
					$displayListBerita = "block";
				}
				else{
					$displayListBerita = "none";

				}
				if($dataPermission['is_add_news'] == true){
					$displayAddBerita = "block";
				}
				else{
					$displayAddBerita = "none";
				}
				if($dataPermission['is_edit_news'] == true){
					$displayEditBerita = "block";
				}
				else{
					$displayEditBerita = "none";
				}
				if($dataPermission['is_delete_news'] == true){
					$displayDeleteBerita = "block";
				}
				else{
					$displayDeleteBerita = "none";
				}
				if($dataPermission['is_approval_news'] == true){
					$displayApprovalBerita = "block";
				}
				else{
					$displayApprovalBerita = "none";
				}
				if($dataPermission['is_list_news'] == true or $dataPermission['is_add_news'] == true or $dataPermission['is_edit_news'] == true or $dataPermission['is_approval_news']){
					$displayManagementBerita = "block";
				}
				else{
					$displayManagementBerita = "none";
				}


				// Approval Users
				if($dataPermission['is_approval_users'] == true){
					$displayPersetujuan = "block";
				}
				else{
					$displayPersetujuan = "none";
				}

				// Management User
				if($dataPermission['is_list_users'] == true or $dataPermission['is_add_users'] == true or $dataPermission['is_edit_users'] == true or $dataPermission['is_delete_users'] == true or $dataPermission['is_approval_users'] == true){
					$displayManagementAkun = "block";
				}
				else{
					$displayManagementAkun = "none";
				}


				// Add Users
				if($dataPermission['is_list_users'] == true){
					$displayTambahAkun = "block";
				}
				else{
					$displayTambahAkun = "none";
				}
				if($dataPermission['is_add_users'] == true){
					$displayTambahAkun = "block";
				}
				else{
					$displayTambahAkun = "none";
				}
				if($dataPermission['is_edit_users'] == true){
					$displayUbahAkun = "block";
				}
				else{
					$displayUbahAkun = "none";
				}
				if($dataPermission['is_delete_users'] == true){
					$displayHapusAkun = "block";
				}
				else{
					$displayHapusAkun = "none";
				}
				if($dataPermission['is_approval_users'] == true){
					$displayApprovalAkun = "block";
				}
				else{
					$displayApprovalAkun = "none";
				}

				// Manajemen Akses
				if($dataPermission['is_management_access'] == true){
					$displayManagementAkses = "block";
				}
				else{
					$displayManagementAkses = "none";
				}
			}
		}
		else{
			$displayManagementBanner = "none";
			$displayListBanner = "none";
			$displayAddBanner = "none";
			$displayEditBanner = "none";
			$displayDeleteBanner = "none";
			$displayApprovalBanner = "none";
		}
    }
	
?>