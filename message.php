<?php
// Retrieve name and email from URL parameters
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Valued Customer';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Message Received - Cream Diary</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'contact_header.php'; ?>

    <!-- Message Received Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-4 text-primary mb-4">Thank You, <?php echo $name; ?>!</h1>
                <p class="mb-4">Your message has been successfully sent. We will get back to you shortly at <strong><?php echo $email; ?></strong>.</p>
                <a href="index.php" class="btn btn-primary py-3 px-5">Go Back to Home</a>
            </div>
        </div>
    </div>
    <!-- Message Received End -->

    <?php include 'contact_footer.php'; ?>
</body>
</html>
