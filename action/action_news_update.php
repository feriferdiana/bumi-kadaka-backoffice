<?php

session_start();

include "con/connection.php";
include "news/tbl_news.php";

// update data
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$status = $_POST['status'];

// Cek apakah file diunggah
if (isset($_POST['upload'])) {
    // Tentukan folder tujuan untuk menyimpan file
    $uploadDir = "upload/news/";

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

                    // insert data
                    $fileNameBanner = $_FILES['file']['name'];
                    $fileSizeBanner = $_FILES['file']['size'];
                    $source = "upload/news/". $newFileName;
                    $status = $_POST['status'];

                    updateFull($id, $title, $description, $newFileName, $source, $fileSizeBanner, $priority, $status);

                    $_SESSION['message_news'] = "Data berhasil diubah";

                    header("Location: ../news-list.php");

                } else {
                    echo "Terjadi kesalahan saat mengupload file.";
                    $_SESSION['message_news'] = "Data gagal disimpan, Terjadi kesalahan saat mengupload file.";

                    header("Location: ../news-list.php");
                }
            } else {
                echo "Ukuran file terlalu besar. Maksimum 5MB.";
                $_SESSION['message_news'] = "Data gagal disimpan, Ukuran file terlalu besar. Maksimum 5MB.";

                header("Location: ../news-list.php");
            }
        } else {
            echo "Terjadi kesalahan: $fileError.";
            $_SESSION['message_news'] = "Data gagal disimpan, Terjadi kesalahan: $fileError.";

            header("Location: ../news-list.php");
        }
    } else {
        $_SESSION['message_news'] = "Data berhasil diubah";
        updateData($id, $title, $description, $priority, $status);
    }
}

header("Location: ../news-edit-list.php");


?>