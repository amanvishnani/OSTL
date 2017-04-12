<?php


require_once('class.phpmailer.php');

$mail = new PHPMailer or die('BP1');

$mail->isSMTP();                       // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com';                        // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'test@amanvishnani.com';            // SMTP username
$mail->Password = 'test@123';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('test@amanvishnani.com', 'Test Mailer');
$mail->addAddress('hiraman12345@gmail.com', 'Hiraman');     // Add a recipient

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}