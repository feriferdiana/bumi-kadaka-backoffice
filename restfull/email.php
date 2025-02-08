<?php
    include "../action/con/connection.php";
    include "../action/email_action.php";

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    $rawData = file_get_contents("php://input");

    $data = json_decode($rawData, true);

    if (json_last_error() === JSON_ERROR_NONE) {

        // request
        $fisrtName = $data['fisrtName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $subject = $data['subject'];
        $message = $data['message'];

        insert($fisrtName, $lastName, $email, $subject, $message);

        // Respon
        echo json_encode([
            'code' => '200',
            'status' => 'success',
            'message' => 'Data received successfully',
            'data' => [
                'fisrtName' => $fisrtName,
                'lastName' => $lastName,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            ]
        ]);
        

    } else {
        // Jika data JSON tidak valid
        echo json_encode([
            'code' => '500',
            'status' => 'error',
            'message' => 'Invalid JSON payload',
        ]);
    }
?>
