<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$userQuery = $conn->query("SELECT id FROM users WHERE username = '$username'");
$user = $userQuery->fetch_assoc();
$user_id = $user['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status'])) {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];
    $conn->query("UPDATE dispatch SET status = '$status' WHERE id = $order_id AND user_id = $user_id");
}

$result = $conn->query("SELECT * FROM dispatch WHERE user_id = $user_id");

?>

<?php include 'header.php'; ?>

<div class="container">
    <h2>My Dispatch Table</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Status</th>
                <th>Update Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['order_id']; ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo ucfirst($row['status']); ?></td>
                    <td>
                        <form method="POST" action="dispatch.php">
                            <input type="hidden" name="order_id" value="<?php echo $row['id']; ?>">
                            <select name="status" class="form-select" required>
                                <option value="ordered" <?php if ($row['status'] == 'ordered') echo 'selected'; ?>>Ordered</option>
                                <option value="preparing" <?php if ($row['status'] == 'preparing') echo 'selected'; ?>>Preparing</option>
                                <option value="out for delivery" <?php if ($row['status'] == 'out for delivery') echo 'selected'; ?>>Out for Delivery</option>
                                <option value="received" <?php if ($row['status'] == 'received') echo 'selected'; ?>>Received</option>
                            </select>
                            <button type="submit" name="update_status" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
