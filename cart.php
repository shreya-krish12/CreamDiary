<?php session_start(); ?>
<?php include 'menu_header.php'; ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Cart</h5>
            <h1 class="mb-5">Your Selected Items</h1>
        </div>

        <?php
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'quantity_') === 0) {
                    $item_name = str_replace('quantity_', '', $key);
                    $item_price = $_POST['price_' . $item_name];
                    $item_quantity = intval($value);

                    if ($item_quantity > 0) {
                        $_SESSION['cart'][$item_name] = array(
                            'price' => $item_price,
                            'quantity' => $item_quantity
                        );
                    } elseif ($item_quantity == 0 && isset($_SESSION['cart'][$item_name])) {
                        unset($_SESSION['cart'][$item_name]);
                    }
                }
            }
        }

        if (count($_SESSION['cart']) > 0) {
            echo '<form action="cart.php" method="post">';
            echo '<div class="row g-4">';
            foreach ($_SESSION['cart'] as $item_name => $details) {
                echo '
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES/MENU/' . strtolower(str_replace(' ', '_', $item_name)) . '.jpg" alt="' . $item_name . '" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>' . $item_name . '</span>
                                <span class="text-primary">Rs. ' . number_format($details['price'], 2) . '</span>
                            </h5>
                            <small class="fst-italic">Quantity: 
                                <input type="number" name="quantity_' . $item_name . '" value="' . $details['quantity'] . '" min="0" class="form-control d-inline-block w-auto">
                            </small>
                            <input type="hidden" name="price_' . $item_name . '" value="' . $details['price'] . '">
                        </div>
                    </div>
                </div>';
            }
            echo '</div>';
            echo '<div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Update Cart</button>
                  </div>';
            echo '</form>';
            echo '<a href="checkout.php" class="btn btn-primary mt-5">Proceed to Checkout</a>';
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>
    </div>
</div>

<?php include 'menu_footer.php'; ?>

