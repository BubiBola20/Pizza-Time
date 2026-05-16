<?php
session_start();

include 'koneksi.php';

// AMBIL DATA PIZZA
$query = mysqli_query($koneksi,
    "SELECT * FROM pizza");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pizza Time - Menu</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
          href="css/style.css">

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar bg-danger">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold"
           href="index.php">

           🍕 Pizza-Time

        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <!-- HOME -->
                <li class="nav-item">

                    <a class="nav-link"
                       href="index.php">

                       Home

                    </a>

                </li>

                <!-- MENU -->
                <li class="nav-item">

                    <a class="nav-link active"
                       href="menu.php">

                       Menu

                    </a>

                </li>

                <!-- CHECKOUT -->
                <li class="nav-item">

                    <a class="nav-link"
                       href="checkout.php">

                       Checkout

                    </a>

                </li>

                <!-- LOGIN / LOGOUT -->
                <?php if(isset($_SESSION['username'])) : ?>

                    <li class="nav-item">

                        <a class="nav-link"
                           href="#">

                           Halo,
                           <?php echo $_SESSION['username']; ?>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"
                           href="logout.php">

                           Logout

                        </a>

                    </li>

                <?php else : ?>

                    <li class="nav-item">

                        <a class="nav-link"
                           href="login.php">

                           Login

                        </a>

                    </li>

                <?php endif; ?>

                <!-- CART -->
                <li class="nav-item ms-lg-3">

                    <a class="btn btn-light rounded-pill px-3"
                       href="cart.php">

                       🛒 Cart

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- TITLE -->
<section class="container py-5">

    <h1 class="text-center mb-5 display-4 fw-bold text-danger">
        MENU PIZZA
    </h1>

    <!-- ROW -->
    <div class="row g-4">

        <?php while($data = mysqli_fetch_assoc($query)) : ?>

        <!-- CARD -->
        <div class="col-md-4">

            <div class="card h-100 shadow border-0 rounded-4">

                <!-- GAMBAR -->
                <img src="<?php echo $data['gambar']; ?>"
                     class="card-img-top rounded-top-4"
                     alt="">

                <!-- BODY -->
                <div class="card-body text-center">

                    <!-- NAMA -->
                    <h3 class="card-title">

                        <?php echo $data['nama_pizza']; ?>

                    </h3>

                    <!-- DESKRIPSI -->
                    <p class="card-text">

                        <?php echo $data['deskripsi']; ?>

                    </p>

                    <!-- HARGA -->
                    <h4 class="text-danger mb-3">

                        Rp
                        <?php echo number_format($data['harga']); ?>

                    </h4>

                    <!-- BUTTON -->
                    <?php if(isset($_SESSION['username'])) : ?>

                        <a href="cart.php?id=<?php echo $data['id_pizza']; ?>"
                           class="btn btn-danger rounded-pill px-4">

                            Order Now

                        </a>

                    <?php else : ?>

                        <a href="login.php"
                           class="btn btn-danger rounded-pill px-4">

                            Order Now

                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

</section>

<!-- FOOTER -->
<footer>

    <div class="footer-container">

        <!-- ABOUT -->
        <div class="footer-box">

            <h2>🍕 Pizza-Time</h2>

            <p>
                Pizza-Time adalah tempat terbaik untuk menikmati
                pizza dengan topping premium, rasa autentik,
                dan kualitas terbaik untuk menemani harimu.
            </p>

        </div>

        <!-- SOSMED -->
        <div class="footer-box">

            <h3>Sosial Media</h3>

            <p>📷 Instagram : @pizzatime.id</p>

            <p>🎵 TikTok : @pizzatime.id</p>

            <p>📘 Facebook : Pizza-Time</p>

        </div>

    </div>

    <div class="copyright">

        <p>
            © 2026 Pizza-Time | All Rights Reserved
        </p>

    </div>

</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>