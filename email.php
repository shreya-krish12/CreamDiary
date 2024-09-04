<?php
$to = 'shreyavk12@gmail.com'; // Replace with the recipient's email address
$subject = '        Final receipt';
$message = 'sample bill ';
$headers = 'From: shreyachoco12@gmail.com' . "\r\n" . // Replace with the sender's email address
           'Reply-To: shreyavk12@gmail.com' . "\r\n" . // Replace with the sender's email address
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>
