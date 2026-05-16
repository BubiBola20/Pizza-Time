<?php
session_start();

include '../koneksi.php';

// CEK LOGIN
if(!isset($_SESSION['role'])){

    header("Location: ../login.php");

}

// CEK ADMIN
if($_SESSION['role'] != 'admin'){

    header("Location: ../index.php");

}

// AMBIL DATA USER
$user = mysqli_query($koneksi,
    "SELECT * FROM users
     WHERE role='customer'");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Data User</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
          href="../css/style.css">

</head>
<body>

<div class="container-fluid">

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 bg-danger min-vh-100 p-4">

            <h3 class="text-white fw-bold mb-4">
                🍕 Pizza-Time
            </h3>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">

                    <a href="dashboard.php"
                       class="nav-link text-white">

                       📊 Dashboard

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a href="data_user.php"
                       class="nav-link text-white">

                       👤 Data User

                    </a>

                </li>

                <li class="nav-item mt-4">

                    <a href="../logout.php"
                       class="btn btn-light w-100 rounded-pill">

                       Logout

                    </a>

                </li>

            </ul>

        </div>

        <!-- CONTENT -->
        <div class="col-md-10 p-5">

            <h1 class="fw-bold mb-4">
                Data Customer
            </h1>

            <div class="card border-0 shadow rounded-4 p-4">

                <table class="table table-hover">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Username</th>
                            <th>Role</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        $no = 1;

                        while($data = mysqli_fetch_assoc($user)) :
                        ?>

                        <tr>

                            <td>
                                <?php echo $no++; ?>
                            </td>

                            <td>
                                <?php echo $data['username']; ?>
                            </td>

                            <td>
                                <?php echo $data['role']; ?>
                            </td>

                        </tr>

                        <?php endwhile; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>