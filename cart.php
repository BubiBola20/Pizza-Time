
<?php
session_start();

// Tambah ke cart
if (isset($_GET['nama'])) {

    $item = [
        'nama'   => $_GET['nama'],
        'harga'  => $_GET['harga'],
        'gambar' => $_GET['gambar']
    ];

    $_SESSION['cart'][] = $item;
}

// Hapus item
if (isset($_GET['hapus'])) {

    $index = $_GET['hapus'];

    unset($_SESSION['cart'][$index]);

    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Total harga
$total = 0;

if (isset($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $cart) {
        $total += $cart['harga'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart Pizza</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color: #f8f4f1;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3">

        <div class="container">

            <a href="index.php" class="navbar-brand fw-bold fs-3">
                🍕 Pizza-Time
            </a>

            <a href="menu.php" class="btn btn-light rounded-pill px-4">
                ← Kembali Menu
            </a>

        </div>

    </nav>


    <!-- Cart -->
    <section class="container py-5">

        <h1 class="text-center fw-bold mb-5">
            🛒 Keranjang Belanja
        </h1>

        <div class="row g-4">

            <!-- Cart Item -->
            <div class="col-lg-8">

                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>

                    <?php foreach ($_SESSION['cart'] as $index => $cart) : ?>

                        <div class="card border-0 shadow rounded-4 mb-4 overflow-hidden">

                            <div class="row g-0 align-items-center">

                                <!-- Gambar -->
                                <div class="col-md-4">

                                    <img src="<?php echo $cart['gambar']; ?>"
                                         class="img-fluid w-100"
                                         style="height: 250px; object-fit: cover;">

                                </div>

                                <!-- Isi -->
                                <div class="col-md-8">

                                    <div class="card-body p-4">

                                        <h3 class="fw-bold mb-3">
                                            <?php echo $cart['nama']; ?>
                                        </h3>

                                        <p class="text-muted mb-3">
                                            Pizza favorit pilihan kamu 🍕
                                        </p>

                                        <h4 class="text-danger mb-4">
                                            Rp <?php echo number_format($cart['harga']); ?>
                                        </h4>

                                        <a href="cart.php?hapus=<?php echo $index; ?>"
                                           class="btn btn-outline-danger rounded-pill px-4">

                                            🗑️ Hapus

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                <?php else : ?>

                    <!-- Cart Kosong -->
                    <div class="card border-0 shadow rounded-4 p-5 text-center">

                        <h3 class="fw-bold mb-3">
                            🛒 Cart Masih Kosong
                        </h3>

                        <p class="text-muted mb-4">
                            Yuk pilih pizza favorit kamu dulu 🍕
                        </p>

                        <a href="menu.php" class="btn btn-danger rounded-pill px-4">
                            Lihat Menu
                        </a>

                    </div>

                <?php endif; ?>

            </div>


            <!-- Ringkasan -->
            <div class="col-lg-4">

                <div class="card border-0 shadow rounded-4 p-4 sticky-top" style="top: 100px;">

                    <h2 class="fw-bold mb-4">
                        Ringkasan Belanja
                    </h2>

                    <div class="d-flex justify-content-between mb-3">

                        <h5>Subtotal</h5>

                        <h5>
                            Rp <?php echo number_format($total); ?>
                        </h5>

                    </div>

                    <div class="d-flex justify-content-between mb-3">

                        <h5>Ongkir</h5>

                        <h5>Rp 10.000</h5>

                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-4">

                        <h4 class="fw-bold">Total</h4>

                        <h4 class="text-danger fw-bold">
                            Rp <?php echo number_format($total + 10000); ?>
                        </h4>

                    </div>

                    <a href="checkout.php"
                       class="btn btn-danger rounded-pill py-3 fw-semibold">

                        Checkout

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
