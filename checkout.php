<?php

session_start();

include 'koneksi.php';

// HITUNG TOTAL
$total = 0;

if(isset($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $cart){

        $total += $cart['harga'];

    }

}


// CHECKOUT
if(isset($_POST['checkout'])){

    $nama        = $_POST['nama'];
    $email       = $_POST['email'];
    $no_hp       = $_POST['no_hp'];
    $alamat      = $_POST['alamat'];
    $pembayaran  = $_POST['pembayaran'];

    // SIMPAN KE DATABASE
    mysqli_query($koneksi,

    "INSERT INTO pesanan

    VALUES(

        '',
        '$nama',
        '$email',
        '$no_hp',
        '$alamat',
        '$pembayaran',
        '$total',
        NOW()

    )");

    // HAPUS CART
    unset($_SESSION['cart']);

    echo "

    <script>

        alert('Pesanan berhasil dibuat! 🍕');

        window.location='index.php';

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

    <title>Checkout Pizza</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
          href="css/style.css">

</head>

<body style="background-color:#f8f4f1;">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3">

    <div class="container">

        <a class="navbar-brand fw-bold fs-3"
           href="index.php">

           🍕 Pizza-Time

        </a>

        <a href="cart.php"
           class="btn btn-light rounded-pill px-4">

           ← Kembali Cart

        </a>

    </div>

</nav>

<!-- CHECKOUT -->
<section class="container py-5">

    <h1 class="text-center fw-bold mb-5">

        💳 Checkout Pesanan

    </h1>

    <div class="row g-4">

        <!-- FORM -->
        <div class="col-lg-7">

            <div class="card border-0 shadow rounded-4 p-4">

                <h3 class="fw-bold mb-4">

                    Data Pemesan

                </h3>

                <form method="POST">

                    <!-- NAMA -->
                    <div class="mb-3">

                        <label class="form-label">
                            Nama Lengkap
                        </label>

                        <input type="text"
                               name="nama"
                               class="form-control rounded-3"
                               required>

                    </div>

                    <!-- EMAIL -->
                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               class="form-control rounded-3"
                               required>

                    </div>

                    <!-- NO HP -->
                    <div class="mb-3">

                        <label class="form-label">
                            Nomor HP
                        </label>

                        <input type="text"
                               name="no_hp"
                               class="form-control rounded-3"
                               required>

                    </div>

                    <!-- ALAMAT -->
                    <div class="mb-4">

                        <label class="form-label">
                            Alamat
                        </label>

                        <textarea name="alamat"
                                  class="form-control rounded-3"
                                  rows="4"
                                  required></textarea>

                    </div>

                    <!-- PEMBAYARAN -->
                    <div class="mb-4">

                        <label class="form-label">
                            Metode Pembayaran
                        </label>

                        <select name="pembayaran"
                                class="form-select rounded-3">

                            <option>Transfer Bank</option>

                            <option>COD</option>

                            <option>E-Wallet</option>

                        </select>

                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                            name="checkout"
                            class="btn btn-danger rounded-pill w-100 py-3">

                        Pesan Sekarang

                    </button>

                </form>

            </div>

        </div>

        <!-- SUMMARY -->
        <div class="col-lg-5">

            <div class="card border-0 shadow rounded-4 p-4 sticky-top"
                 style="top:100px;">

                <h3 class="fw-bold mb-4">

                    Ringkasan Pesanan

                </h3>

                <?php

                if(isset($_SESSION['cart'])){

                foreach($_SESSION['cart'] as $cart){

                ?>

                <div class="d-flex align-items-center mb-4">

                    <img src="<?php echo $cart['gambar']; ?>"

                         width="90"
                         height="90"

                         style="object-fit:cover;
                                border-radius:15px;">

                    <div class="ms-3">

                        <h5>

                            <?php echo $cart['nama']; ?>

                        </h5>

                        <p class="text-danger mb-0">

                            Rp
                            <?php echo number_format($cart['harga']); ?>

                        </p>

                    </div>

                </div>

                <?php
                }
                }
                ?>

                <hr>

                <!-- SUBTOTAL -->
                <div class="d-flex justify-content-between mb-3">

                    <h5>Subtotal</h5>

                    <h5>

                        Rp
                        <?php echo number_format($total); ?>

                    </h5>

                </div>

                <!-- ONGKIR -->
                <div class="d-flex justify-content-between mb-3">

                    <h5>Ongkir</h5>

                    <h5>Rp 10.000</h5>

                </div>

                <hr>

                <!-- TOTAL -->
                <div class="d-flex justify-content-between">

                    <h4 class="fw-bold">
                        Total
                    </h4>

                    <h4 class="text-danger fw-bold">

                        Rp
                        <?php echo number_format($total + 10000); ?>

                    </h4>

                </div>

            </div>

        </div>

    </div>

</section>

</body>
</html>