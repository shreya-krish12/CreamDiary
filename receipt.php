<?php 
session_start();

if (!isset($_GET['order_id']) || !isset($_SESSION['order'][$_GET['order_id']])) {
    // Redirect to the menu if no order is found
    header('Location: menu.php');
    exit();
}

$order_id = $_GET['order_id'];
$order = $_SESSION['order'][$order_id];
$order_details = $_SESSION['order_details'][$order_id];

$order_date = $order_details['date'];
$final_cost = $order_details['total_cost'];
$shipping_cost = $final_cost - array_sum(array_column($order, 'price')) * array_sum(array_column($order, 'count'));
?>

<?php include 'menu_header.php'; ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="card">
            <div class="title">Purchase Receipt</div>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                        <span id="heading">Date</span><br>
                        <span id="details"><?php echo $order_date; ?></span>
                    </div>
                    <div class="col-5 text-end">
                        <span id="heading">Order No.</span><br>
                        <span id="details"><?php echo $order_id; ?><br><br></span>
                    </div>
                </div>      
            </div>      
            <div class="pricing">
                <?php foreach ($order as $item): ?>
                    <?php if ($item['count'] > 0): ?>
                        <div class="row">
                            <div class="col-9">
                                <span id="name"><br><?php echo $item['name'] . ' (x' . $item['count'] . ')'; ?></span>  
                            </div>
                            <div class="col-3 text-end">
                                <span id="price"><br>$<?php echo number_format($item['price'] * $item['count'], 2); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="row">
                    <div class="col-9">
                        <span id="name"><br><br>Shipping</span>
                    </div>
                    <div class="col-3 text-end">
                        <span id="price"><br><br>$<?php echo number_format($shipping_cost, 2); ?></span>
                    </div>
                </div>
            </div>
            <div class="total">
                <div class="row">
                    <div class="col-9">
                        <span id="name"><br><br>FINAL TOTAL :</span>
                    </div>

                    <div class="col-3 text-end"><big><br><br>$<?php echo number_format($final_cost, 2); ?></big></div>
                </div>
            </div>
            <div class="text-center mt-4">
    <a href="paynow.php?order_id=<?php echo urlencode($order_id); ?>&amount=<?php echo urlencode(number_format($final_cost, 2)); ?>" class="btn btn-success">Proceed to Payment</a>
</div>

        </div>
        <div class="text-center mt-5">
            <a href="menu.php" class="btn btn-primary">Back to Menu</a>
        </div>
    </div>
</div>

<?php include 'menu_footer.php'; ?>
