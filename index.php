 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Time - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <link rel="stylesheet" href="css/index.css">
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
   <!-- hero -->
<section class="hero">

    <!-- kiri -->
    <div class="hero-left">

        <span class="tag">
            PIZZA TERBAIK UNTUK KAMU
        </span>

        <h2>
            Bingung Mau <br>
            Makan Apa?
        </h2>

        <p>
            Pizza-Time membantu kamu menemukan pizza terbaik
            dengan topping premium dan rasa yang bikin nagih.
        </p>

        <div class="buttons">
            <a href="menu.php" class="btn-secondary">Lihat Menu</a>
        </div>

    </div>

    <!-- kanan -->
    <div class="hero-right">

        <div class="circle"></div>

        <div class="food-card">

            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=1000" alt="">

            <h3>Pepperoni Pizza</h3>

            <p>Cocok untuk makan siang atau malam</p>

            <h4>Rp 45.000</h4>

        </div>

    </div>

</section>

<!-- menu rekomendasi -->
<section class="container py-5">

    <h2 class="text-center mb-5 text-danger">
        REKOMENDASI MENU
    </h2>

    <div class="row justify-content-center g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 p-3 text-center h-100">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsksPyvPntSJGOPoaFE2XcDXfHP9eVHvHrmQ&s"
                     class="card-img-top rounded-4"
                     alt="">

                <div class="card-body">

                    <h3 class="card-title">
                        Keju Moza
                    </h3>

                    <p class="card-text">
                        Lelehan Keju Moza Yang melimpah
                    </p>

                    <h3 class="text-danger">
                        Rp 45.000
                    </h3>

                </div>

            </div>

        </div>
        <!-- CARD 2 -->
        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 p-3 text-center h-100">

                <img src="data:image/jpeg;base64,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"
                     class="card-img-top rounded-4"
                     alt="">

                <div class="card-body">

                    <h3 class="card-title">
                        Peperoni Pizza
                    </h3>

                    <p class="card-text">
                        Pizaa dengan peperoni premium
                    </p>

                    <h3 class="text-danger">
                        Rp 60.000
                    </h3>

                </div>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 p-3 text-center h-100">

                <img src="https://images.unsplash.com/photo-1594007654729-407eedc4be65?q=80&w=1000"
                     class="card-img-top rounded-4"
                     alt="">

                <div class="card-body">

                    <h3 class="card-title">
                        Meat Lovers
                    </h3>

                    <p class="card-text">
                        Daging melimpah dan juicy.
                    </p>

                    <h3 class="text-danger">
                        Rp 55.000
                    </h3>

                </div>

            </div>

        </div>

    </div>

    </div>

<!-- button -->
<div class="text-center mt-5">

    <a href="menu.php" class="btn btn-danger px-5 py-3 rounded-pill">
        Order Now
    </a>

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