<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if(isset($_POST['user'])) { 
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.example.example';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'example@example.example';                 // SMTP username
	    $mail->Password = 'your_password_of_your_email';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('From@example.example', 'From Name');
	    $mail->addAddress('destination@gmail.example', 'Destination Name');     // Add a recipient

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'The Subject of the email';
	    $mail->Body    = 'The input that was sent through the form is: ' . ($_POST['user']);
	    $mail->send();
	    echo "
					<html>
					<head>
						<meta http-equiv='REFRESH' content='0 ; url=https://yoursite.com'>
					<script>
						alert('Your personal success Alert.');
					</script>
					</head>
					</html>
				";
	    ;
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ';
	}
}
else{
	{
				echo "
					<html>
					<head>
						<meta http-equiv='REFRESH' content='0 ; url=yoursite.com'>
					<script>
						alert('Your personal denied Alert');
					</script>
					</head>
					</html>
				";
				}
}