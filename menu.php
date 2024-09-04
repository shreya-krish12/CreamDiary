<?php session_start(); ?>
<?php include 'menu_header.php'; ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Bakery Menu</h5>
            <h1 class="mb-5">Choose Your Favorites</h1>
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
                            <i class="fa fa-wine-glass fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Signature</small>
                                <h6 class="mt-n1 mb-0">Cheesecake</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fa fa-thumbs-up fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Must try</small>
                                <h6 class="mt-n1 mb-0">Combo</h6>
                            </div>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                            <i class="fa fa-wine-glass fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Crafted</small>
                                <h6 class="mt-n1 mb-0">Brews</h6>
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
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('death_by_chocolate', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="death_by_chocolate" name="quantity_death_by_chocolate" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('death_by_chocolate', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_death_by_chocolate" value="35.00">
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
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('nutella_brownie', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="nutella_brownie" name="quantity_nutella_brownie" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('nutella_brownie', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_nutella_brownie" value="40.0">
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
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('cookie_and_creme', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="cookie_and_creme" name="quantity_cookie_and_creme" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('cookie_and_creme', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_cookie_and_creme" value="45.00">
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
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('lotus_biscoff', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="lotus_biscoff" name="quantity_lotus_biscoff" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('lotus_biscoff', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_lotus_biscoff" value="75.00">
                        </div>
                    </div>
                </div>
                <!-- Rasamalai Blast -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\rasamalai_blast.jpg" alt="Rasamalai Blast" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Rasamalai Blast</span>
                                <span class="text-primary">Rs 55.50</span>
                            </h5>
                            <small class="fst-italic">Creamy cake with rasmalai flavor.</small>
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('rasamalai_blast', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="rasamalai_blast" name="quantity_rasamalai_blast" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('rasamalai_blast', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_rasamalai_blast" value="55.50">
                        </div>
                    </div>
                </div>
                <!-- Gulab Jamun Special -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\gulab_jamun_special.jpg" alt="Gulab Jamun Special" style="width: 80px;">
                        <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                <span>Gulab Jamun Special</span>
                                <span class="text-primary">Rs 55.00</span>
                            </h5>
                            <small class="fst-italic">Gulab Jamun flavored cake with syrup.</small>
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('gulab_jamun_special', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="gulab_jamun_special" name="quantity_gulab_jamun_special" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('gulab_jamun_special', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_gulab_jamun_special" value="55.00">
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
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('classic_vanilla', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="classic_vanilla" name="quantity_classic_vanilla" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('classic_vanilla', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_classic_vanilla" value="40.00">
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
                            <div class="d-flex align-items-center">
                                <button type="button" onclick="updateQuantity('triple_chocolate', -1)" class="btn btn-outline-secondary me-2">-</button>
                                <input type="text" id="triple_chocolate" name="quantity_triple_chocolate" value="0" readonly class="form-control text-center" style="width: 60px;">
                                <button type="button" onclick="updateQuantity('triple_chocolate', 1)" class="btn btn-outline-secondary ms-2">+</button>
                            </div>
                            <input type="hidden" name="price_triple_chocolate" value="80.00">
                        </div>
                    </div>
                </div>
                        </div>
                    </div>

                    <!-- Croissant -->
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
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('almond_croissant', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="almond_croissant" name="quantity_almond_croissant" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('almond_croissant', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_almond_croissant" value="250.0">
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
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('chocolate_croissant', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="chocolate_croissant" name="quantity_chocolate_croissant" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('chocolate_croissant', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_chocolate_croissant" value="270.0">
                                    </div>
                                </div>
                            </div>
                            <!-- Raspberry Croissant -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\raspberry_croissant.jpg" alt="Raspberry Croissant" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Raspberry Croissant</span>
                                            <span class="text-primary">Rs 300.00</span>
                                        </h5>
                                        <small class="fst-italic">Croissant filled with raspberry jam.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('raspberry_croissant', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="raspberry_croissant" name="quantity_raspberry_croissant" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('raspberry_croissant', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_raspberry_croissant" value="300.0">
                                    </div>
                                </div>
                            </div>
                            <!-- Ham and Cheese Croissant -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\ham_and_cheese_croissant.jpg" alt="Ham and Cheese Croissant" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ham and Cheese Croissant</span>
                                            <span class="text-primary">Rs 325.00</span>
                                        </h5>
                                        <small class="fst-italic">Savory croissant with ham and cheese.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('ham_and_cheese_croissant', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="ham_and_cheese_croissant" name="quantity_ham_and_cheese_croissant" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('ham_and_cheese_croissant', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_ham_and_cheese_croissant" value="325.00">
                                    </div>
                                </div>
                            </div>
                            <!-- Bread -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\bread.jpg" alt="Bread" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Bread</span>
                <span class="text-primary">Rs 40.00</span>
            </h5>
            <small class="fst-italic">Freshly baked bread with a crisp crust.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('bread', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="bread" name="quantity_bread" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('bread', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_bread" value="40.00">
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
            <small class="fst-italic">Toasted bread with garlic and herbs.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('garlic_bread', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="garlic_bread" name="quantity_garlic_bread" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('garlic_bread', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_garlic_bread" value="60.00">
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
            <small class="fst-italic">Crusty Italian bread with a light and airy crumb.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('italian_bread', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="italian_bread" name="quantity_italian_bread" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('italian_bread', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_italian_bread" value="75.00">
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <!-- Croissant -->
                    <div id="tab-4" class="tab-pane fade show p-0">
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
                    <div class="d-flex align-items-center">
                        <button type="button" onclick="updateQuantity('croissant_cappuccino', -1)" class="btn btn-outline-secondary me-2">-</button>
                        <input type="text" id="croissant_cappuccino" name="quantity_croissant_cappuccino" value="0" readonly class="form-control text-center" style="width: 60px;">
                        <button type="button" onclick="updateQuantity('croissant_cappuccino', 1)" class="btn btn-outline-secondary ms-2">+</button>
                    </div>
                    <input type="hidden" name="price_croissant_cappuccino" value="249.0">
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
                    <div class="d-flex align-items-center">
                        <button type="button" onclick="updateQuantity('muffin_hot_chocolate', -1)" class="btn btn-outline-secondary me-2">-</button>
                        <input type="text" id="muffin_hot_chocolate" name="quantity_muffin_hot_chocolate" value="0" readonly class="form-control text-center" style="width: 60px;">
                        <button type="button" onclick="updateQuantity('muffin_hot_chocolate', 1)" class="btn btn-outline-secondary ms-2">+</button>
                    </div>
                    <input type="hidden" name="price_muffin_hot_chocolate" value="199.0">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\blueberry_muffin_americano.jpg" alt="Blueberry Muffin & Americano" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Blueberry Muffin & Americano</span>
                <span class="text-primary">Rs 189.00</span>
            </h5>
            <small class="fst-italic">A fluffy blueberry muffin paired with a strong and bold Americano.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('blueberry_muffin_americano', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="blueberry_muffin_americano" name="quantity_blueberry_muffin_americano" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('blueberry_muffin_americano', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_blueberry_muffin_americano" value="189.0">
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\cheese_cake_iced_tea.jpg" alt="Cheese Cake & Iced Tea" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Cheese Cake & Iced Tea</span>
                <span class="text-primary">Rs 219.00</span>
            </h5>
            <small class="fst-italic">A rich and creamy cheesecake served with a refreshing iced tea.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('cheese_cake_iced_tea', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="cheese_cake_iced_tea" name="quantity_cheese_cake_iced_tea" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('cheese_cake_iced_tea', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_cheese_cake_iced_tea" value="219.0">
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\red_velvet_cake_mocha.jpg" alt="Red Velvet Cake & Mocha" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Red Velvet Cake & Mocha</span>
                <span class="text-primary">Rs 239.00</span>
            </h5>
            <small class="fst-italic">A decadent red velvet cake paired with a rich mocha coffee.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('red_velvet_cake_mocha', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="red_velvet_cake_mocha" name="quantity_red_velvet_cake_mocha" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('red_velvet_cake_mocha', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_red_velvet_cake_mocha" value="239.0">
        </div>
    </div>
</div>


        <div class="col-lg-6">
            <div class="d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\cinnamon_roll_latte.jpg" alt="Cinnamon Roll & Latte" style="width: 80px;">
                <div class="w-100 d-flex flex-column text-start ps-4">
                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                        <span>Cinnamon Roll & Latte</span>
                        <span class="text-primary">Rs 225.00</span>
                    </h5>
                    <small class="fst-italic">A warm cinnamon roll with a sweet glaze, accompanied by a smooth latte.</small>
                    <div class="d-flex align-items-center">
                        <button type="button" onclick="updateQuantity('cinnamon_roll_latte', -1)" class="btn btn-outline-secondary me-2">-</button>
                        <input type="text" id="cinnamon_roll_latte" name="quantity_cinnamon_roll_latte" value="0" readonly class="form-control text-center" style="width: 60px;">
                        <button type="button" onclick="updateQuantity('cinnamon_roll_latte', 1)" class="btn btn-outline-secondary ms-2">+</button>
                    </div>
                    <input type="hidden" name="price_cinnamon_roll_latte" value="225.0">
                </div>
            </div>
        </div>
                        </div>
                    </div>
                    <!-- Croissant -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                        <!-- Classic New York Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\classic_new_york_cheesecake.jpg" alt="Classic New York Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Classic New York Cheesecake</span>
                <span class="text-primary">Rs 300.00</span>
            </h5>
            <small class="fst-italic">Rich and creamy, this classic cheesecake is smooth and dense with a hint of vanilla.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('classic_new_york_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="classic_new_york_cheesecake" name="quantity_classic_new_york_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('classic_new_york_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_classic_new_york_cheesecake" value="300.00">
        </div>
    </div>
</div>

<!-- Strawberry Swirl Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\strawberry_swirl_cheesecake.jpg" alt="Strawberry Swirl Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Strawberry Swirl Cheesecake</span>
                <span class="text-primary">Rs 320.00</span>
            </h5>
            <small class="fst-italic">A creamy cheesecake with a luscious strawberry swirl, topped with fresh strawberries.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('strawberry_swirl_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="strawberry_swirl_cheesecake" name="quantity_strawberry_swirl_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('strawberry_swirl_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_strawberry_swirl_cheesecake" value="320.00">
        </div>
    </div>
</div>

<!-- Blueberry Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\blueberry_cheesecake.jpg" alt="Blueberry Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Blueberry Cheesecake</span>
                <span class="text-primary">Rs 330.00</span>
            </h5>
            <small class="fst-italic">A velvety cheesecake topped with a sweet blueberry compote.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('blueberry_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="blueberry_cheesecake" name="quantity_blueberry_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('blueberry_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_blueberry_cheesecake" value="330.00">
        </div>
    </div>
</div>

<!-- Chocolate Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\chocolate_cheesecake.jpg" alt="Chocolate Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Chocolate Cheesecake</span>
                <span class="text-primary">Rs 350.00</span>
            </h5>
            <small class="fst-italic">Decadent and rich, this cheesecake is infused with chocolate and topped with a chocolate ganache.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('chocolate_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="chocolate_cheesecake" name="quantity_chocolate_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('chocolate_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_chocolate_cheesecake" value="350.00">
        </div>
    </div>
</div>

<!-- Lemon Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\lemon_cheesecake.jpg" alt="Lemon Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Lemon Cheesecake</span>
                <span class="text-primary">Rs 280.00</span>
            </h5>
            <small class="fst-italic">A refreshing cheesecake with a tangy lemon flavor, topped with a zesty lemon glaze.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('lemon_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="lemon_cheesecake" name="quantity_lemon_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('lemon_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_lemon_cheesecake" value="280.00">
        </div>
    </div>
</div>

<!-- Oreo Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\oreo_cheesecake.jpg" alt="Oreo Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Oreo Cheesecake</span>
                <span class="text-primary">Rs 340.00</span>
            </h5>
            <small class="fst-italic">Creamy cheesecake loaded with crushed Oreo cookies, topped with an Oreo crust and cookie pieces.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('oreo_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="oreo_cheesecake" name="quantity_oreo_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('oreo_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_oreo_cheesecake" value="340.00">
        </div>
    </div>
</div>

<!-- Salted Caramel Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\salted_caramel_cheesecake.jpg" alt="Salted Caramel Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Salted Caramel Cheesecake</span>
                <span class="text-primary">Rs 350.00</span>
            </h5>
            <small class="fst-italic">A smooth cheesecake topped with a rich salted caramel sauce and a sprinkle of sea salt.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('salted_caramel_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="salted_caramel_cheesecake" name="quantity_salted_caramel_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('salted_caramel_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_salted_caramel_cheesecake" value="350.00">
        </div>
    </div>
</div>

<!-- Red Velvet Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\red_velvet_cheesecake.jpg" alt="Red Velvet Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Red Velvet Cheesecake</span>
                <span class="text-primary">Rs 330.00</span>
            </h5>
            <small class="fst-italic">A creamy cheesecake with the distinct flavors of red velvet.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('red_velvet_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="red_velvet_cheesecake" name="quantity_red_velvet_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('red_velvet_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_red_velvet_cheesecake" value="330.00">
        </div>
    </div>
</div>

<!-- Mango Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\mango_cheesecake.jpg" alt="Mango Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Mango Cheesecake</span>
                <span class="text-primary">Rs 310.00</span>
            </h5>
            <small class="fst-italic">A creamy cheesecake topped with a sweet and tangy mango glaze.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('mango_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="mango_cheesecake" name="quantity_mango_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('mango_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_mango_cheesecake" value="310.00">
        </div>
    </div>
</div>

<!-- Tiramisu Cheesecake -->
<div class="col-lg-6">
    <div class="d-flex align-items-center">
        <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\tiramisu_cheesecake.jpg" alt="Tiramisu Cheesecake" style="width: 80px;">
        <div class="w-100 d-flex flex-column text-start ps-4">
            <h5 class="d-flex justify-content-between border-bottom pb-2">
                <span>Tiramisu Cheesecake</span>
                <span class="text-primary">Rs 350.00</span>
            </h5>
            <small class="fst-italic">A delightful fusion of Tiramisu and cheesecake, layered with coffee-soaked ladyfingers.</small>
            <div class="d-flex align-items-center">
                <button type="button" onclick="updateQuantity('tiramisu_cheesecake', -1)" class="btn btn-outline-secondary me-2">-</button>
                <input type="text" id="tiramisu_cheesecake" name="quantity_tiramisu_cheesecake" value="0" readonly class="form-control text-center" style="width: 60px;">
                <button type="button" onclick="updateQuantity('tiramisu_cheesecake', 1)" class="btn btn-outline-secondary ms-2">+</button>
            </div>
            <input type="hidden" name="price_tiramisu_cheesecake" value="350.00">
        </div>
    </div>
</div>
                        </div>
                        </div>
                    <!-- Drinks -->
                    <div id="tab-5" class="tab-pane fade show p-0"> 
                        <div class="row g-4">
                            <!-- Cappuchino -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\Cappuchino.jpg" alt="Coffee" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cappuchino</span>
                                            <span class="text-primary">Rs 159.00</span>
                                        </h5>
                                        <small class="fst-italic">Freshly brewed Cappuchino.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('Cappuchino', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="Cappuchino" name="quantity_Cappuchino" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('Cappuchino', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_Cappuchino" value="159.00">
                                    </div>
                                </div>
                            </div>
                            <!-- Expresso -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\Expresso.jpg" alt="Expresso" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Expresso</span>
                                            <span class="text-primary">Rs 119.00</span>
                                        </h5>
                                        <small class="fst-italic">Refreshing Expresso with various flavors.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('Expresso', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="Expresso" name="quantity_Expresso" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('Expresso', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_Expresso" value="119.00">
                                    </div>
                                </div>
                            </div>
                            <!-- Juice -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\Americano.jpg" alt="Juice" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Americano</span>
                                            <span class="text-primary">Rs 179.00</span>
                                        </h5>
                                        <small class="fst-italic">Freshly squeezed juice.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('Americano', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="Americano" name="quantity_Americano" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('Americano', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_Americano" value="179.00">
                                    </div>
                                </div>
                            </div>
                            <!-- Iced Tea -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\Iced_Tea.jpg" alt="Iced Tea" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Iced Tea</span>
                                            <span class="text-primary">Rs 139.00</span>
                                        </h5>
                                        <small class="fst-italic">Delicious and healthy Iced Tea.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('Iced Tea', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="Iced Tea" name="quantity_Iced Tea" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('Iced Tea', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_Iced Tea" value="139.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\Hot_Chocolate.jpg" alt="Hot Chocolate" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hot Chocolate</span>
                                            <span class="text-primary">Rs 229.00</span>
                                        </h5>
                                        <small class="fst-italic">Delicious and healthy Hot Chocolate.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('Hot Chocolate', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="Hot Chocolate" name="quantity_Hot Chocolate" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('Hot Chocolate', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_Hot Chocolate" value="229.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="IMAGES\MENU\Mocha.jpg" alt="Mocha" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Mocha</span>
                                            <span class="text-primary">Rs 219.00</span>
                                        </h5>
                                        <small class="fst-italic">Delicious and healthy Mocha.</small>
                                        <div class="d-flex align-items-center">
                                            <button type="button" onclick="updateQuantity('Mocha', -1)" class="btn btn-outline-secondary me-2">-</button>
                                            <input type="text" id="Mocha" name="quantity_Mocha" value="0" readonly class="form-control text-center" style="width: 60px;">
                                            <button type="button" onclick="updateQuantity('Mocha', 1)" class="btn btn-outline-secondary ms-2">+</button>
                                        </div>
                                        <input type="hidden" name="price_Mocha" value="219.00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
        </form>
    </div>
</div>


<script>
function updateQuantity(itemId, change) {
    var quantityInput = document.getElementById(itemId);
    var currentValue = parseInt(quantityInput.value);
    var newValue = currentValue + change;

    if (newValue >= 0) {
        quantityInput.value = newValue;
    }
}
</script>

<?php include 'menu_footer.php'; ?>
