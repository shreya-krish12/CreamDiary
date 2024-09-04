<?php
session_start();

// Initialize cart and total amount
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$totalAmount = 0;

// Calculate total amount
foreach ($cart as $details) {
    $totalAmount += $details['price'] * $details['quantity'];
}

// Include header
include 'menu_header.php';
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Checkout</h5>
            <h1 class="mb-5">Final Receipt</h1>
        </div>

        <?php if (count($cart) > 0): ?>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row">
                        <?php foreach ($cart as $item_name => $details): ?>
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span><?php echo htmlspecialchars($item_name); ?></span>
                                            <span class="text-primary">Rs.<?php echo number_format($details['price'], 2); ?></span>
                                        </h5>
                                        <small class="fst-italic">Quantity: <?php echo $details['quantity']; ?></small>
                                        <h6 class="d-flex justify-content-between mt-2">
                                            <span>Total Cost: </span>
                                            <span class="text-primary">Rs.<?php echo number_format($details['price'] * $details['quantity'], 2); ?></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-center">
                    <h3 class="mt-4">Total Amount: Rs.<?php echo number_format($totalAmount, 2); ?></h3>
                    <form action="paymail.php" method="post" class="mt-5 w-100 text-center">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <input type="hidden" name="amount" value="<?php echo htmlspecialchars($totalAmount); ?>">
                        <input type="hidden" name="cart" value="<?php echo htmlspecialchars(serialize($cart)); ?>">
                        <button type="submit" class="btn btn-primary mb-3">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
</div>

<?php
// Include footer
include 'menu_footer.php';
?>
