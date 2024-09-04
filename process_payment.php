<?php
session_start();
echo '<pre>';
print_r($_GET);
echo '</pre>';
// Include the QR code library
require_once 'phpqrcode/qrlib.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if required POST variables are set
    if (!isset($_POST['amount'], $_POST['payment_method'], $_POST['order_id'])) {
        header('Location: paynow.php');
        exit();
    }

    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $order_id = $_POST['order_id'];

    // Store order details in session for access in payment_success.php
    $_SESSION['order_id'] = $order_id;
    $_SESSION['amount'] = $amount;
    $_SESSION['payment_method'] = $payment_method;

    if ($payment_method == 'card') {
        // Process card payment (logic not included in this example)
        header('Location: payment_success.php');
        exit();
    } elseif ($payment_method == 'upi') {
        // Generate UPI QR code
        $upi_id = "example@upi"; // Replace with your actual UPI ID
        $upi_url = "upi://pay?pa=$upi_id&pn=YourBusinessName&mc=0000&tid=1234567890&tt=99&am=$amount&cu=INR&url=";

        // Generate QR code and save it to a file
        $qr_code_file = __DIR__ . '/qrcode.png'; // Absolute path to save the file

        if (QRcode::png($upi_url, $qr_code_file)) {
            echo "QR code generated successfully!";
        } else {
            echo "Failed to generate QR code.";
            exit();
        }

        // Redirect to the payment success page
        header('Location: payment_success.php');
        exit();
    } else {
        // Invalid payment method, redirect to payment page
        header('Location: paynow.php');
        exit();
    }
} else {
    // Redirect to the payment page if the request method is not POST
    header('Location: paynow.php');
    exit();
}
?>
