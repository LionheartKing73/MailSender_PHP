<?php
	require 'phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 1;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.intelligentea.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'support@intelligentea.com';                 // SMTP username
	$mail->Password = 'qwerty1050';                           // SMTP password
	$mail->SMTPSecure = 'lws';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('god111funds@hotmail.com', '');
	$mail->addAddress('dmitry198711@hotmail.com', 'Admin');     // Add a recipient
	
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
?>