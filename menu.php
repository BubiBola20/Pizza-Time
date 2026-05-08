<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">🍕 Piza-Time</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="cart.php">🛒 </a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="container py-5">

    <h1 class="text-center mb-5 display-3 fw-bold">
        MENU PIZZA
    </h1>

    <!-- CARD MENU -->
    <div class="row g-4">

        <!-- card 1 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=1000"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Pepperoni Pizza
                    </h3>

                    <p class="card-text">
                        Pizza dengan pepperoni premium.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 45.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

        <!-- card 2 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsksPyvPntSJGOPoaFE2XcDXfHP9eVHvHrmQ&s"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Cheese Pizza
                    </h3>

                    <p class="card-text">
                        Lelehan mozzarella super creamy.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 40.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

        <!-- card 3 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://images.unsplash.com/photo-1594007654729-407eedc4be65?q=80&w=1000"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Meat Lovers
                    </h3>

                    <p class="card-text">
                        Daging melimpah dan juicy.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 55.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

        <!-- card 4 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://images.unsplash.com/photo-1604382355076-af4b0eb60143?q=80&w=1000"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Hawaiian Pizza
                    </h3>

                    <p class="card-text">
                        Kombinasi nanas dan ham.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 48.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

        <!-- card 5 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?q=80&w=1000"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Veggie Pizza
                    </h3>

                    <p class="card-text">
                        Pizza sehat dengan sayuran fresh.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 42.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

        <!-- card 6 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://images.unsplash.com/photo-1593560708920-61dd98c46a4e?q=80&w=1000"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        BBQ Pizza
                    </h3>

                    <p class="card-text">
                        Saus BBQ dengan daging asap.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 50.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

         <!-- card 7 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgtuH0yFOOqoRaEpBetx5Sh-duq9Cgjs3hzA&s"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Chiken Pizaa
                    </h3>

                    <p class="card-text">
                        Kelembutan daging ayam yang m.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 200.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

         <!-- card 8 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxFR2Y4oTQYJVyNFWBUzMhPwDCxUmLTbADvg&s"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Spicy Pizaa
                    </h3>

                    <p class="card-text">
                        Saus Pizza yang pedas.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 55.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

         <!-- card 9 -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqc6CExuNUuEJ-nis8XJp_nHvQ0AfmxrCCUw&s"
                     class="card-img-top rounded-top-4"
                     alt="">

                <div class="card-body text-center">

                    <h3 class="card-title">
                        Saesage Pizaa
                    </h3>

                    <p class="card-text">
                        Saussage dengan daging sapu_sapu.
                    </p>

                    <h4 class="text-danger mb-3">
                        Rp 100.000
                    </h4>

                    <a href="cart.php" class="btn btn-danger rounded-pill px-4">
                        Order Now
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- fotter mase -->
<footer>

    <div class="footer-container">

        <div class="footer-box">
            <h2>🍕 Pizza-Time</h2>
        </div>

        <div class="footer-box">
            <h3>Informasi</h3>
            <p>Tentang Kami</p>
            <p>Promo</p>
            <p>Lokasi</p>
        </div>

        <div class="footer-box">
            <h3>Jam Buka</h3>
            <p>Senin - Jumat : 10.00 - 22.00</p>
            <p>Sabtu - Minggu : 09.00 - 23.00</p>
        </div>

         <div class="footer-box">
            <h3>Order Online</h3>
            🛵<p>GrabFood</p>
            🛵<p>GoFood</p>
           🛵 <p>ShopeeFood</p>
        </div>

        <div class="footer-box">
            <h3>Sosmed</h3>
            📷 <p>Instagram : @pizzatime.id</p>
            🎵 <p>TikTok : @pizzatime.id</p>
            📘 <p>Facebook : Pizza-Time</p>
        </div>

    </div>

    <div class="copyright">
        <p>© 2026 Pizza-Time | All Rights Reserved</p>
    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>