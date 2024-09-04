<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cream Diary</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <span class="sr-only">Loading...</span>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Cream Diary</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item">Booking</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="login.php" class="btn btn-primary py-2 px-4">LOGIN</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicacies</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Experience the art of pastry perfection with our handcrafted cakes, where every bite is a celebration of flavor. Crafted with premium ingredients for a taste that's simply irresistible.</p>
                            <a href="cakemenu.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">BOOK YOUR PASTRY</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="IMAGES/cropped_image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Our bakery is led by master chefs who craft each item with ensuring every bite is a delight.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>We pride ourselves on using the finest ingredients to create high-quality, fresh, and flavorful bakery items.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Conveniently place your orders online, and enjoy our delicious offerings delivered right to your doorstep.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Our bakery is here to satisfy your cravings any time, day or night, with round-the-clock service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Section Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="IMAGES/11.jpg" alt="About Image 1">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="IMAGES/23.jpg" style="margin-top: 25%;" alt="About Image 2">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="IMAGES/28.jpg" alt="About Image 3">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="IMAGES/15.jpg" alt="About Image 4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Cream Diary</h1>
                        <p class="mb-4">At Cream Diary, we invite you to experience our exceptional range of creamy delights and artisanal treats, crafted with passion and precision.</p>
                        <p class="mb-4">Discover the magic of Cream Diary—where quality ingredients and inventive recipes come together to create a truly unforgettable experience.</p>
                        <p class="mb-4">Step into Cream Diary and let our creamy creations wrap you in comfort, turning ordinary days into cherished memories with each delectable bite.</p>
                        <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0 counter" data-count="15">0<h2>+</h2></h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                 </div>
                            </div>
                         </div>
    <div class="col-sm-6">
        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
            <h1 class="flex-shrink-0 display-5 text-primary mb-0 counter" data-count="150">0<h2>+</h2></h1>
            <div class="ps-4">
                <p class="mb-0">Pintresty</p>
                <h6 class="text-uppercase mb-0">Inspired cakes</h6>
            </div>
        </div>
    </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="history.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->
<!-- Menu section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Bakery Menu</h5>
            <h1 class="mb-5">Try our Trending Delicacy</h1>
        </div>
        <form action="cart.php" method="post">
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-birthday-cake fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Perfect</small>
                                <h6 class="mt-n1 mb-0">Pastry</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-cookie fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Fresh</small>
                                <h6 class="mt-n1 mb-0">Bakery</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-thumbs-up fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Must try</small>
                                <h6 class="mt-n1 mb-0">Combo</h6>
                            </div>
                        </a>
                    </li>
                    
                </ul>
                <div class="tab-content">
                    <!-- Pastry -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                             <!-- Death by Chocolate -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\death_by_chocolate.jpg" alt="Death by Chocolate" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Death by Chocolate</span>
                                <span class="text-primary">Rs 35.00</span>
                            </h5>
                            <small class="fst-italic">Rich and decadent chocolate cake.</small>
                            
                        </div>
                    </div>
                </div>
                <!-- Nutella Brownie -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\nutella_brownie.jpg" alt="Nutella Brownie" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Nutella Brownie</span>
                                <span class="text-primary">Rs 40.00</span>
                            </h5>
                            <small class="fst-italic">Chewy brownie with Nutella swirls.</small>
                           
                        </div>
                    </div>
                </div>
                <!-- Cookie and Creme -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\cookie_and_creme.jpg" alt="Cookie and Creme" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Cookie and Creme</span>
                                <span class="text-primary">Rs 45.00</span>
                            </h5>
                            <small class="fst-italic">Cookies and cream flavor with chunks of cookies.</small>
                            
                        </div>
                    </div>
                </div>
                <!-- Lotus Biscoff -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\lotus_biscoff.jpg" alt="Lotus Biscoff" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Lotus Biscoff</span>
                                <span class="text-primary">Rs 75.00</span>
                            </h5>
                            <small class="fst-italic">Delicious Biscoff flavored cake.</small>
                            
                        </div>
                    </div>
                </div>
                <!-- Classic Vanilla -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\classic_vanilla.jpg" alt="Classic Vanilla" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Classic Vanilla</span>
                                <span class="text-primary">Rs 40.00</span>
                            </h5>
                            <small class="fst-italic">Traditional vanilla flavored cake.</small>
                            
                        </div>
                    </div>
                </div>
                <!-- Triple Chocolate -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\triple_chocolate.jpg" alt="Triple Chocolate" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Triple Chocolate</span>
                                <span class="text-primary">Rs 80.00</span>
                            </h5>
                            <small class="fst-italic">A chocolate lover's dream with three types of chocolate.</small>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Almond Croissant -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\almond_croissant.jpg" alt="Almond Croissant" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Almond Croissant</span>
                                            <span class="text-primary">Rs 250.00</span>
                                        </h5>
                                        <small class="fst-italic">Flaky croissant with almond filling.</small>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Chocolate Croissant -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\chocolate_croissant.jpg" alt="Chocolate Croissant" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chocolate Croissant</span>
                                            <span class="text-primary">Rs 270.00</span>
                                        </h5>
                                        <small class="fst-italic">Rich and buttery croissant filled with chocolate.</small>
                                        
                                    </div>
                                </div>
                            </div>
                       

<!-- Garlic Bread -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\garlic_bread.jpg" alt="Garlic Bread" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Garlic Bread</span>
                <span class="text-primary">Rs 60.00</span>
            </h5>
            <small class="fst-italic">Crispy garlic bread with herbs.</small>
            
        </div>
    </div>
</div>

<!-- Italian Bread -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\italian_bread.jpg" alt="Italian Bread" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Italian Bread</span>
                <span class="text-primary">Rs 75.00</span>
            </h5>
            <small class="fst-italic">Soft and fluffy Italian bread.</small>
            
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                        <div class="col-lg-6">
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\croissant_cappuccino.jpg" alt="Butter Croissant & Cappuccino" style="width: 80px;">
                <div class="w-100 d-flex flex-column text-start ps-4">
                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                        <span>Butter Croissant & Cappuccino</span>
                        <span class="text-primary">Rs 249.00</span>
                    </h5>
                    <small class="fst-italic">A freshly baked butter croissant paired with a rich, creamy cappuccino.</small>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\muffin_hot_chocolate.jpg" alt="Chocolate Muffin & Hot Chocolate" style="width: 80px;">
                <div class="w-100 d-flex flex-column text-start ps-4">
                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                        <span>Chocolate Muffin & Hot Chocolate</span>
                        <span class="text-primary">Rs 199.00</span>
                    </h5>
                    <small class="fst-italic">A moist chocolate muffin served with a warm, velvety hot chocolate.</small>
                    
                </div>
            </div>
        </div>

                            </div>
                            </div>
</div>



       
            
<?php include 'menu_footer.php'; ?>        

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script>
    $(document).ready(function () {
        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).data('count')
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
</body>

</html>
