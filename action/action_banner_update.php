<?php

session_start();

include "con/connection.php";
include "banner/tbl_banner.php";

// insert data
$id = $_POST['id'];
$priority = $_POST['name_priority'];
$status = $_POST['status'];

// Cek apakah file diunggah
if (isset($_POST['upload'])) {
    // Tentukan folder tujuan untuk menyimpan file
    $uploadDir = "upload/banner/";

    // Buat folder jika belum ada
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Ambil informasi file
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    // Validasi file
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (in_array($fileExt, $allowedExtensions)) {
        if ($fileError === 0) {
            if ($fileSize <= 5 * 1024 * 1024) { // Maksimum 5MB
                $newFileName = uniqid('', true) . "." . $fileExt; // Beri nama unik
                $destination = $uploadDir . $newFileName;

                // Pindahkan file
                if (move_uploaded_file($fileTmpName, $destination)) {
                    echo "File berhasil diupload: <a href='$destination'>$newFileName</a>";

                    
                    $fileNameBanner = $_FILES['file']['name'];
                    $fileSizeBanner = $_FILES['file']['size'];
                    $source = "upload/banner/". $newFileName;

                    updateFull($id, $newFileName, $source, $fileSizeBanner, $priority, $status);

                    $_SESSION['message_banner'] = "Data berhasil diubah";

                    header("Location: ../banner-edit-list.php");

                } else {
                    echo "Terjadi kesalahan saat mengupload file.";
                    $_SESSION['message_banner'] = "Data gagal diubah, Terjadi kesalahan saat mengupload file.";

                    header("Location: ../banner-edit.php");
                }
            } else {
                echo "Ukuran file terlalu besar. Maksimum 5MB.";
                $_SESSION['message_banner'] = "Data gagal diubah, Ukuran file terlalu besar. Maksimum 5MB.";

                header("Location: ../banner-edit.php");
            }
        } else {
            echo "Terjadi kesalahan: $fileError.";
            $_SESSION['message_banner'] = "Data gagal diubah, Terjadi kesalahan: $fileError.";

            header("Location: ../banner-edit.php");
        }
    } else {
        $nameBanner = $_POST['name_banner'];
        
        $_SESSION['message_banner'] = "Data berhasil diubah";
        updateData($id, $nameBanner, $priority, $status);
    }
}

header("Location: ../banner-edit-list.php");

?>