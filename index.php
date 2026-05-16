<?php
session_start();

include 'koneksi.php';

// AMBIL 3 PIZZA UNTUK REKOMENDASI
$query = mysqli_query($koneksi,
    "SELECT * FROM pizza LIMIT 3");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pizza Time - Home</title>

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

                    <a class="nav-link active"
                       href="index.php">

                       Home

                    </a>

                </li>

                <!-- MENU -->
                <li class="nav-item">

                    <a class="nav-link"
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

<!-- HERO -->
<section class="hero">

    <!-- KIRI -->
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

            <a href="menu.php"
               class="btn-secondary">

               Lihat Menu

            </a>

        </div>

    </div>

    <!-- KANAN -->
    <div class="hero-right">

        <div class="circle"></div>

        <div class="food-card">

            <?php
            $hero = mysqli_fetch_assoc($query);
            ?>

            <img src="<?php echo $hero['gambar']; ?>"
                 alt="">

            <h3>

                <?php echo $hero['nama_pizza']; ?>

            </h3>

            <p>

                <?php echo $hero['deskripsi']; ?>

            </p>

            <h4>

                Rp
                <?php echo number_format($hero['harga']); ?>

            </h4>

        </div>

    </div>

</section>

<!-- MENU REKOMENDASI -->
<section class="container py-5">

    <h2 class="text-center mb-5 text-danger fw-bold">

        REKOMENDASI MENU

    </h2>

    <div class="row justify-content-center g-4">

        <?php
        mysqli_data_seek($query, 0);

        while($data = mysqli_fetch_assoc($query)) :
        ?>

        <!-- CARD -->
        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 p-3 text-center h-100">

                <img src="<?php echo $data['gambar']; ?>"
                     class="card-img-top rounded-4"
                     alt="">

                <div class="card-body">

                    <h3 class="card-title">

                        <?php echo $data['nama_pizza']; ?>

                    </h3>

                    <p class="card-text">

                        <?php echo $data['deskripsi']; ?>

                    </p>

                    <h3 class="text-danger">

                        Rp
                        <?php echo number_format($data['harga']); ?>

                    </h3>

                </div>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

    <!-- BUTTON -->
    <div class="text-center mt-5">

        <a href="menu.php"
           class="btn btn-danger px-5 py-3 rounded-pill">

           Order Now

        </a>

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