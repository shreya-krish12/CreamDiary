<?php
// Include the QR Code library
require_once 'phpqrcode/qrlib.php';
session_start();

// Get the amount from the POST request or query string
$amount = isset($_POST['amount']) ? $_POST['amount'] : (isset($_GET['amount']) ? $_GET['amount'] : "0.00");

// Define UPI details
$upi_id = "shreyavk12-1@oksbi"; // Replace with your actual UPI ID
$business_name = "Creamdairy";  // Replace with your business name
$transaction_id = uniqid();      // Generate a unique transaction ID

// Construct the UPI URL
$upi_url = "upi://pay?pa=" . urlencode($upi_id) .
           "&pn=" . urlencode($business_name) .
           "&am=" . urlencode($amount) .
           "&tid=" . urlencode($transaction_id) .
           "&cu=INR&tr=" . urlencode($transaction_id);

// Include header
include 'menu_header.php';
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Payment</h5>
            <h1 class="mb-5">Scan & Pay</h1>
        </div>
        <h1>Pay Rs. <?php echo htmlspecialchars($amount); ?> to <?php echo htmlspecialchars($business_name); ?></h1>
        <p>UPI ID: <?php echo htmlspecialchars($upi_id); ?></p>
        <p>Transaction ID: <?php echo htmlspecialchars($transaction_id); ?></p>

        <h2>Scan the QR code below to pay:</h2>
        <?php
        // Generate and display the QR code
        $qr_temp_file = 'qrcode_' . $transaction_id . '.png'; // Unique file name for the QR code
        QRcode::png($upi_url, $qr_temp_file, QR_ECLEVEL_L, 5);
        echo "<img src='{$qr_temp_file}' alt='UPI QR Code'>";
        ?>

        <!-- Form to redirect to Thank You page -->
        <form action="thankyou.php" method="post" class="mt-4">
            <input type="hidden" name="transaction_id" value="<?php echo htmlspecialchars($transaction_id); ?>">
            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
            <input type="hidden" name="order_number" value="<?php echo htmlspecialchars(generateOrderNumber()); ?>">
            <input type="hidden" name="payment_method" value="UPI">
            <button type="submit" class="btn btn-primary">Payment Completed</button>
        </form>
    </div>
</div>

<?php
// Include footer
include 'menu_footer.php';

// Function to generate a unique order number
function generateOrderNumber($length = 8) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $orderNumber = '';
    for ($i = 0; $i < $length; $i++) {
        $orderNumber .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $orderNumber;
}
?>
