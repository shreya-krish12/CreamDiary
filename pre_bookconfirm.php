<?php
session_start();
// Include header
include 'menu_header.php';

// Check if the necessary POST data is set
if (!isset($_POST['name']) || !isset($_POST['date']) || !isset($_POST['time']) || !isset($_POST['address']) || !isset($_POST['phone'])) {
    header("Location: booking.php");
    exit;
}

// Get the booking details
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$orderNumber = uniqid('PREBOOK_');

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
$cart = isset($_SESSION['order']) ? $_SESSION['order'] : array();

// Prepare and bind statement for inserting pre-bookings into the database
$stmt = $conn->prepare("INSERT INTO prebookings (order_number, name, phone, address, date, time, item_name, quantity, price, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssid", $orderNumber, $name, $phone, $address, $date, $time, $item_name, $quantity, $price, $total);

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

// Clear order from session
unset($_SESSION['order']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Booking Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-4">Your Pre-Booking is Confirmed!</h1>
                <p>Thank you, <?php echo htmlspecialchars($name); ?>, for your pre-booking.</p>
                <p>Order Number: <?php echo htmlspecialchars($orderNumber); ?></p>
                <p>Booking Date: <?php echo htmlspecialchars($date); ?></p>
                <p>Booking Time: <?php echo htmlspecialchars($time); ?></p>
                <p>Delivery Address: <?php echo htmlspecialchars($address); ?></p>
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
