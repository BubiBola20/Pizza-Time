<?php
session_start();

include 'koneksi.php';

// REGISTER
if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // CEK USERNAME
    $cek = mysqli_query($koneksi,
        "SELECT * FROM users
         WHERE username='$username'");

    if(mysqli_num_rows($cek) > 0){

        $error = "Username sudah digunakan!";

    } else {

        // INSERT USER
        mysqli_query($koneksi,

            "INSERT INTO users
            VALUES(

                NULL,
                '$username',
                '$password',
                'customer'

            )"

        );

        $success = "Register berhasil! Silakan login.";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register - Pizza Time</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
          href="css/style.css">

</head>
<body>
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


<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card border-0 shadow-lg rounded-4 p-4">

                <!-- TITLE -->
                <div class="text-center mb-4">

                    <h1 class="text-danger fw-bold">
                        🍕 Pizza-Time
                    </h1>

                    <p class="text-muted">
                        Buat akun untuk memesan pizza favoritmu
                    </p>

                </div>

                <!-- ERROR -->
                <?php if(isset($error)) : ?>

                    <div class="alert alert-danger">

                        <?php echo $error; ?>

                    </div>

                <?php endif; ?>

                <!-- SUCCESS -->
                <?php if(isset($success)) : ?>

                    <div class="alert alert-success">

                        <?php echo $success; ?>

                    </div>

                <?php endif; ?>

                <!-- FORM -->
                <form method="POST">

                    <!-- USERNAME -->
                    <div class="mb-3">

                        <label class="form-label">
                            Username
                        </label>

                        <input type="text"
                               name="username"
                               class="form-control rounded-pill"
                               required>

                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-4">

                        <label class="form-label">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control rounded-pill"
                               required>

                    </div>

                    <!-- BUTTON -->
                    <div class="d-grid">

                        <button type="submit"
                                name="register"
                                class="btn btn-danger rounded-pill py-2">

                            Register

                        </button>

                    </div>

                </form>

                <!-- LOGIN -->
                <div class="text-center mt-4">

                    <p>

                        Sudah punya akun?

                        <a href="login.php"
                           class="text-danger fw-bold text-decoration-none">

                           Login

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>