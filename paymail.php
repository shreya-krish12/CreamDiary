<?php
session_start();

require '../../MAIL/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $totalAmount = $_POST['amount'];
    $cart = unserialize($_POST['cart']);

    // Create the receipt content
    $receipt = "<h1>Your Receipt</h1><ul>";
    foreach ($cart as $item_name => $details) {
        $receipt .= "<li>{$item_name}: Rs.{$details['price']} x {$details['quantity']} = Rs." . ($details['price'] * $details['quantity']) . "</li>";
    }
    $receipt .= "</ul><h3>Total Amount: Rs.{$totalAmount}</h3>";

    try {
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shreyavk12@gmail.com';
        $mail->Password = 'dukf jyne nwlu nrjs';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('shreyavk12@gmail.com', 'Cream Diary');
        $mail->addAddress($email); // Send to the user's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your Final Receipt';
        $mail->Body    = $receipt;

        $mail->send();
        echo "<script>alert('Receipt sent to your email.'); window.location='qr.php?amount={$totalAmount}';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
