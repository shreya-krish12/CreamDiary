<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];

    if ($quantity > 0) {
        $item = [
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => $quantity
        ];

        // If cart already exists, append item, otherwise create a new cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        array_push($_SESSION['cart'], $item);
    }
}

header('Location: cart.php');
exit;
?>
