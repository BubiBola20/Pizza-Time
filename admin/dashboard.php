<?php
session_start();

include '../koneksi.php';

// CEK LOGIN ADMIN
if(!isset($_SESSION['role'])){

    header("Location: ../login.php");

}

// CEK ROLE
if($_SESSION['role'] != 'admin'){

    header("Location: ../index.php");

}

// TOTAL PIZZA
$pizza = mysqli_query($koneksi,
    "SELECT * FROM pizza");

$total_pizza = mysqli_num_rows($pizza);

// TOTAL USER
$user = mysqli_query($koneksi,
    "SELECT * FROM users
     WHERE role='customer'");

$total_user = mysqli_num_rows($user);

// TOTAL ORDER
$order = mysqli_query($koneksi,
    "SELECT * FROM orders");

$total_order = mysqli_num_rows($order);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

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
                Dashboard Admin
            </h1>

            <p class="text-muted mb-5">
                Selamat datang,
                <?php echo $_SESSION['username']; ?>
            </p>

            <!-- CARD STATISTIK -->
            <div class="row g-4 mb-5">

                <!-- TOTAL PIZZA -->
                <div class="col-md-4">

                    <div class="card border-0 shadow rounded-4 p-4">

                        <h5 class="text-muted">
                            Total Pizza
                        </h5>

                        <h1 class="fw-bold text-danger">
                            <?php echo $total_pizza; ?>
                        </h1>

                    </div>

                </div>

                <!-- TOTAL USER -->
                <div class="col-md-4">

                    <div class="card border-0 shadow rounded-4 p-4">

                        <h5 class="text-muted">
                            Total Customer
                        </h5>

                        <h1 class="fw-bold text-danger">
                            <?php echo $total_user; ?>
                        </h1>

                    </div>

                </div>

                <!-- TOTAL ORDER -->
                <div class="col-md-4">

                    <div class="card border-0 shadow rounded-4 p-4">

                        <h5 class="text-muted">
                            Total Order
                        </h5>

                        <h1 class="fw-bold text-danger">
                            <?php echo $total_order; ?>
                        </h1>

                    </div>

                </div>

            </div>

            <!-- TABEL PIZZA -->
            <div class="card border-0 shadow rounded-4 p-4">

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <h3 class="fw-bold">
                        Data Pizza
                    </h3>

                    <a href="tambah_pizza.php"
                       class="btn btn-danger rounded-pill">

                       + Tambah Pizza

                    </a>

                </div>

                <table class="table table-hover">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Nama Pizza</th>
                            <th>Harga</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        $no = 1;

                        while($data = mysqli_fetch_assoc($pizza)) :
                        ?>

                        <tr>

                            <td>
                                <?php echo $no++; ?>
                            </td>

                            <td>
                                <?php echo $data['nama_pizza']; ?>
                            </td>

                            <td>
                                Rp <?php echo number_format($data['harga']); ?>
                            </td>

                            <td>

                                <a href="edit_pizza.php?id=<?php echo $data['id_pizza']; ?>"
                                   class="btn btn-warning btn-sm rounded-pill">

                                   Edit

                                </a>

                                <a href="hapus_pizza.php?id=<?php echo $data['id_pizza']; ?>"
                                   class="btn btn-danger btn-sm rounded-pill">

                                   Hapus

                                </a>

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