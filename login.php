<?php
session_start();

include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
              WHERE username='$username'
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);

    if ($data) {

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['id_user'] = $data['id_user'];

        if ($data['role'] == 'admin') {

            header("Location: admin/dashboard.php");

        } else {

            header("Location: menu.php");

        }

    } else {

        echo "
        <script>
            alert('Login gagal!');
        </script>
        ";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login - Pizza Time</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-5">

            <div class="card shadow main-card">

                <h2 class="text-center mb-4 title">
                    🍕 Pizza Time Login
                </h2>

                <form method="POST">

                    <div class="mb-3">

                        <label class="form-label">
                            Username
                        </label>

                        <input type="text"
                               name="username"
                               class="form-control"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               required>

                    </div>

                    <button type="submit"
                            name="login"
                            class="btn btn-pizza w-100">

                        Login

                    </button>

                </form>

                <p class="text-center mt-3">
                    Belum punya akun?
                    <a href="register.php">
                        Register
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>