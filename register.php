<?php
include 'koneksi.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

   $query = "INSERT INTO users (username, password, role)
             VALUES
             ('$username', '$password', 'customer')";

    mysqli_query($conn, $query);

    echo "
    <script>
        alert('Register berhasil!');
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register - Pizza Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-5">

            <div class="card shadow main-card">

                <h2 class="text-center mb-4 title">
                    🍕 Pizza Time Register
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
                            name="register"
                            class="btn btn-pizza w-100">

                        Register

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>