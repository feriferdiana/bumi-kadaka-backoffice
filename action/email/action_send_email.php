<?php

	function sendEmail(){
		
		$to = "foresthiltesemail@yopmail.com"; // Alamat penerima
		$subject = "Test Email"; // Subjek email
		$message = "Hello, this is a test email sent using PHP's mail() function."; // Isi email
		$headers = "From: sender@example.com" . "\r\n" . // Header email
		           "Reply-To: sender@example.com" . "\r\n" .
		           "X-Mailer: PHP/" . phpversion();

		// Mengirim email
		if (mail($to, $subject, $message, $headers)) {
		    echo "Email sent successfully!";
		} else {
		    echo "Failed to send email.";
		}

	}

?>