<?php

	include "action/con/connection.php";
	include "tbl_users_permission.php";

	if(isset($_COOKIE['id_user'])) {
		$idUser = $_COOKIE['id_user'];

		$dataPermission = findUsersPermission($idUser);

		$displayNews;
		$displayBanner;
		$displayPersetujuan;
		$displayManagementAkun;
		$displayTambahAkun;
		$displayUbahAkun;
		$displayHapusAkun;

		if(count($dataPermission) != 0){
			// News
			if($dataPermission['is_news'] == true){
				$displayNews = "block";
			}
			else{
				$displayNews = "none";
			}

			// Banner
			if($dataPermission['is_banner'] == true){
				$displayBanner = "block";
			}
			else{
				$displayBanner = "none";
			}

			// Approval Users
			if($dataPermission['is_approval_users'] == true){
				$displayPersetujuan = "block";
			}
			else{
				$displayPersetujuan = "none";
			}

			// Management User
			if($dataPermission['id_add_users'] == true or $dataPermission['is_edit_users'] == true or $dataPermission['is_delete_users'] == true){
				$displayManagementAkun = "block";
			}
			else{
				$displayManagementAkun = "none";
			}


			// Add Users
			if($dataPermission['id_add_users'] == true){
				$displayTambahAkun = "block";
			}
			else{
				$displayTambahAkun = "none";
			}

			// Edit Users
			if($dataPermission['is_edit_users'] == true){
				$displayUbahAkun = "block";
			}
			else{
				$displayUbahAkun = "none";
			}

			// Delete Users
			if($dataPermission['is_delete_users'] == true){
				$displayHapusAkun = "block";
			}
			else{
				$displayHapusAkun = "none";
			}
		}
    }


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

    }

	
?>