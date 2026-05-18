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

// AMBIL DATA ORDER
$order = mysqli_query($koneksi,

    "SELECT orders.*, users.username
     FROM orders
     JOIN users
     ON orders.id_user = users.id_user
     ORDER BY orders.id_order DESC"

);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Data Order</title>

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

                    <a href="tambah_pizza.php"
                       class="nav-link text-white">

                       ➕ Tambah Pizza

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a href="data_order.php"
                       class="nav-link text-white">

                       🛒 Data Order

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a href="data_users.php"
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
                Data Order
            </h1>

            <div class="card border-0 shadow rounded-4 p-4">

                <table class="table table-hover">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Customer</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        $no = 1;

                        while($data = mysqli_fetch_assoc($order)) :
                        ?>

                        <tr>

                            <td>
                                <?php echo $no++; ?>
                            </td>

                            <td>
                                <?php echo $data['username']; ?>
                            </td>

                            <td>
                                Rp <?php echo number_format($data['total_harga']); ?>
                            </td>

                            <td>
                                <?php echo $data['tanggal_order']; ?>
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