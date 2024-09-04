<?php
session_start();
require_once 'db_connection.php'; // Include your database connection

// Check if user is logged in or not (if required)
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $flavor = $_POST['flavor'] ?? '';
    $design = $_FILES['design']['name'] ?? '';

    // Validate and process the flavor
    if (empty($flavor)) {
        $error = "Please select a flavor.";
    }

    // Handle file upload
    if (!empty($design)) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["design"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is a JPEG
        if ($imageFileType != 'jpeg' && $imageFileType != 'jpg') {
            $error = "Sorry, only JPEG files are allowed.";
        } else {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["design"]["tmp_name"], $target_file)) {
                $uploadSuccess = "File uploaded successfully.";
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Save the order to the database
    if (empty($error)) {
        $user_id = $_SESSION['user_id']; // Assuming user ID is stored in session
        $query = "INSERT INTO orders (user_id, flavor, design) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_id, $flavor, $design]);

        echo "Order placed successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles.css"> <!-- Your CSS file -->
</head>
<body>
    <h1>Checkout</h1>

    <?php if (isset($error)): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form action="checkout.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Select Cake Flavor:</legend>
            <?php
            $flavors = [
                'Vanilla', 'Chocolate', 'Strawberry', 'Red Velvet', 'Lemon', 
                'Carrot', 'Coffee', 'Almond', 'Coconut', 'Mint'
            ];

            foreach ($flavors as $flavor) {
                echo '<label>';
                echo '<input type="radio" name="flavor" value="' . htmlspecialchars($flavor) . '"> ' . htmlspecialchars($flavor);
                echo '</label><br>';
            }
            ?>
        </fieldset>

        <fieldset>
            <legend>Upload Your Design (JPEG only):</legend>
            <input type="file" name="design" accept=".jpg, .jpeg" required>
        </fieldset>

        <button type="submit">Place Order</button>
    </form>

    <footer>
        <p>&copy; 2024 Cream Diary. All rights reserved.</p>
    </footer>
</body>
</html>
