<?php
session_start();

// Check if cart data is received via POST and store it in session
if (isset($_POST['cart'])) {
    $_SESSION['order'] = unserialize($_POST['cart']);
}

// Include header
include 'book_header.php';
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Booking Confirmation</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
            <img  src="IMAGES\MENU\muffin_hot_chocolate.jpg"  style="width:450px ;">
            </div>
            <div class="col-md-6">
                <h4 class="mb-4">Booking Details</h4>
                <form action="pre_bookconfirm.php" method="post">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date">Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="time">Time</label>
                        <input type="time" name="time" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'menu_footer.php'; ?>
