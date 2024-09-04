<?php
session_start();
// Include header
include 'menu_header.php';

// Check if the necessary POST data is set
if (!isset($_POST['transaction_id']) || !isset($_POST['amount']) || !isset($_POST['order_number']) || !isset($_POST['payment_method'])) {
    header("Location: qr.php");
    exit;
}

// Get the transaction details
$transaction_id = $_POST['transaction_id'];
$totalAmount = $_POST['amount'];
$orderNumber = $_POST['order_number'];
$paymentMethod = $_POST['payment_method'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creamdairy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get cart data
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Prepare and bind statement for inserting orders into the database
$stmt = $conn->prepare("INSERT INTO orders (order_number, item_name, quantity, price, total) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssidd", $orderNumber, $item_name, $quantity, $price, $total);

// Insert each item into the database
foreach ($cart as $item_name => $details) {
    $quantity = $details['quantity'];
    $price = $details['price'];
    $total = $price * $quantity;

    $stmt->execute();
}

// Close statement and connection
$stmt->close();
$conn->close();

// Clear cart
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-4">Thank You for Your Order!</h1>
                <p>Your order has been placed successfully.</p>
                <p>Order Number: <?php echo htmlspecialchars($orderNumber); ?></p>
                <p>Total Amount: Rs. <?php echo number_format($totalAmount, 2); ?></p>
                <p>Paid Using: <?php echo htmlspecialchars($paymentMethod); ?></p>
                <p>Transaction ID: <?php echo htmlspecialchars($transaction_id); ?></p>
                <a href="menu.php" class="btn btn-primary mt-4">Back to Menu</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
// Include footer
include 'menu_footer.php';
?>
