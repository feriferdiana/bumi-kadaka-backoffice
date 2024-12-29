<?php

session_start();

include "con/connection.php";
include "users/tbl_users.php";

$id = $_POST['id'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['birth_place'];
$tanggal_lahir = $_POST['birth_date'];
$gender = $_POST['gender'];

$dataEmail = findUsersEmail($email);
if($dataEmail != null){

    $_SESSION['message_users'] = "Email sudah ada, silahkan gunakan email lain";

    header("Location: ../user-edit-list.php");

}
else {
    // Cek apakah file diunggah
    if (isset($_POST['upload'])) {
        // Tentukan folder tujuan untuk menyimpan file
        $uploadDir = "upload/users/";

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
                        $source = "upload/users/". $newFileName;

                        $password = md5($email);

                        updateFull($nama, $tanggal_lahir, $tempat_lahir, $gender, $email, $source, $id);

                        $_SESSION['message_users'] = "Data berhasil diubah";

                        header("Location: ../user-edit-list.php");

                    } else {
                        echo "Terjadi kesalahan saat mengupload file.";
                        $_SESSION['message_news'] = "Data gagal disimpan, Terjadi kesalahan saat mengupload file.";

                        // header("Location: ../news-add.php");
                    }
                } else {
                    echo "Ukuran file terlalu besar. Maksimum 5MB.";
                    $_SESSION['message_news'] = "Data gagal disimpan, Ukuran file terlalu besar. Maksimum 5MB.";

                    // header("Location: ../news-add.php");
                }
            } else {
                echo "Terjadi kesalahan: $fileError.";
                $_SESSION['message_news'] = "Data gagal disimpan, Terjadi kesalahan: $fileError.";

                // header("Location: ../news-add.php");
            }
        } else {
            updateData($nama, $tanggal_lahir, $tempat_lahir, $gender, $email, $id);

            $_SESSION['message_users'] = "Data berhasil diubah";
            
            header("Location: ../user-edit-list.php");
        }
    }
}

?>