<?php
// Include Composer's autoloader
require '../../MAIL/vendor/autoload.php';


// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'shreyavk12@gmail.com'; // SMTP username
    $mail->Password = 'dukf jyne nwlu nrjs'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('shreyavk12@gmail.com', 'Mailer');
    $mail->addAddress('sriharini1428@gmail.com', 'Joe User'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'SAMPLE MAIL';
    $mail->Body    = 'Hey how yuh doing ?';
    $mail->AltBody = 'SAMPLE SAMPLE';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
