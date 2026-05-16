<?php
session_start();

include '../koneksi.php';

// CEK LOGIN
if(!isset($_SESSION['role'])){

    header("Location: ../login.php");

}

// CEK ROLE ADMIN
if($_SESSION['role'] != 'admin'){

    header("Location: ../index.php");

}

// AMBIL ID
$id = $_GET['id'];

// AMBIL DATA PIZZA
$query = mysqli_query($koneksi,
    "SELECT * FROM pizza
     WHERE id_pizza='$id'");

$data = mysqli_fetch_assoc($query);

// BUTTON UPDATE
if(isset($_POST['update'])){

    $nama       = $_POST['nama_pizza'];
    $deskripsi  = $_POST['deskripsi'];
    $harga      = $_POST['harga'];
    $gambar     = $_POST['gambar'];

    mysqli_query($koneksi,

        "UPDATE pizza SET

            nama_pizza = '$nama',
            deskripsi  = '$deskripsi',
            harga      = '$harga',
            gambar     = '$gambar'

         WHERE id_pizza = '$id'"

    );

    header("Location: dashboard.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Pizza</title>

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

            <div class="card border-0 shadow rounded-4 p-5">

                <h2 class="fw-bold mb-4 text-danger">

                    Edit Pizza

                </h2>

                <!-- FORM -->
                <form method="POST">

                    <!-- NAMA -->
                    <div class="mb-3">

                        <label class="form-label">
                            Nama Pizza
                        </label>

                        <input type="text"
                               name="nama_pizza"
                               class="form-control rounded-pill"
                               value="<?php echo $data['nama_pizza']; ?>"
                               required>

                    </div>

                    <!-- DESKRIPSI -->
                    <div class="mb-3">

                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
                                  class="form-control rounded-4"
                                  rows="4"
                                  required><?php echo $data['deskripsi']; ?></textarea>

                    </div>

                    <!-- HARGA -->
                    <div class="mb-3">

                        <label class="form-label">
                            Harga
                        </label>

                        <input type="number"
                               name="harga"
                               class="form-control rounded-pill"
                               value="<?php echo $data['harga']; ?>"
                               required>

                    </div>

                    <!-- GAMBAR -->
                    <div class="mb-4">

                        <label class="form-label">
                            Link Gambar
                        </label>

                        <input type="text"
                               name="gambar"
                               class="form-control rounded-pill"
                               value="<?php echo $data['gambar']; ?>"
                               required>

                    </div>

                    <!-- PREVIEW -->
                    <div class="mb-4 text-center">

                        <img src="<?php echo $data['gambar']; ?>"
                             width="250"
                             class="rounded-4 shadow">

                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                            name="update"
                            class="btn btn-warning rounded-pill px-5">

                        Update Pizza

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>