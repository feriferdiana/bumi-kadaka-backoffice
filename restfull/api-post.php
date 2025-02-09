<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$rawData = file_get_contents("php://input");

// Decode JSON menjadi array PHP
$data = json_decode($rawData, true);

// Periksa apakah decoding berhasil
if (json_last_error() === JSON_ERROR_NONE) {
    // Akses data
    $name = $data['name'] ?? 'Tidak ada nama';
    $email = $data['email'] ?? 'Tidak ada email';
    $message = $data['message'] ?? 'Tidak ada pesan';

    // Respon
    echo json_encode([
        'status' => 'success',
        'message' => 'Data received successfully',
        'data' => [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]
    ]);
} else {
    // Jika data JSON tidak valid
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid JSON payload',
    ]);
}
?>
