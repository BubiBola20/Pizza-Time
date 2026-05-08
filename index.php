 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Time - Home</title>
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

        <!-- card 1 -->
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
        <!-- card 2 -->
        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 p-3 text-center h-100">

                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=1000"
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

        <!-- card 3 -->
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