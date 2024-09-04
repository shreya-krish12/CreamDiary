<?php
require_once 'phpqrcode/qrlib.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
// Handle form submission and store amount in session
if (isset($_POST['payment_method']) && $_POST['payment_method'] == 'upi') {
    if (isset($_POST['amount'])) {
        
        $_SESSION['final_cost'] = htmlspecialchars($_POST['amount']);
 
        $_SESSION['payment_method'] = 'upi';
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
  
        echo "Amount not found.";
        exit;
    }
}

// Retrieve the amount and payment method from the session
$final_cost = isset($_SESSION['final_cost']) ? $_SESSION['final_cost'] : 0;
echo $final_cost;
$payment_method = isset($_SESSION['payment_method']) ? $_SESSION['payment_method'] : '';

// Define UPI details
$upi_id = "shreyavk12-1@oksbi"; // Replace with your actual UPI ID
$business_name = "creamdairy"; // Replace with your business name
$merchant_code = "0000"; // Optional, replace if needed
$transaction_id = uniqid(); // Generate a unique transaction ID
$transaction_type = "99"; // Typically for general transactions
$amount = number_format($final_cost, 2, '.', ''); // Format amount to two decimal places

// Construct the UPI URL
$upi_url = "upi://pay?pa=" . urlencode($upi_id) . "&pn=" . urlencode($business_name) . "&mc=" . urlencode($merchant_code) . "&tid=" . urlencode($transaction_id) . "&tt=" . urlencode($transaction_type) . "&am=" . urlencode($amount) . "&cu=INR&url=";

?>

<?php include 'menu_header.php'; ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center">
            <h1>Select Payment Method</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
                <button type="submit" name="payment_method" value="card" class="btn btn-primary">Pay with Card</button>
                <button type="submit" name="payment_method" value="upi" class="btn btn-secondary">Pay with UPI</button>
            </form>
        </div>

        <?php if ($payment_method == 'upi' && $final_cost > 0): ?>
            <div class="text-center mt-4">
                <h2>UPI Payment</h2>
                <p>Scan the QR code below to pay:</p>
                <?php
                // Generate QR code and check if the file is created successfully
                QRcode::png($upi_url, 'qrcode.png');
                if (file_exists('qrcode.png')) {
                    echo "<p>QR code generated successfully.</p>";
                } else {
                    echo "<p>Failed to generate QR code.</p>";
                }
                ?>
                <img src="qrcode.png" alt="UPI QR Code">
                <p>Final Amount: ₹<?php echo $amount; ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'menu_footer.php'; ?>
