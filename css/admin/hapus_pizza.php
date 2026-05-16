<?php
session_start();

include 'koneksi.php';

// CEK LOGIN
if(!isset($_SESSION['role'])){

    header("Location: ../login.php");

}

// CEK ROLE ADMIN
if($_SESSION['role'] != 'admin'){

    header("Location: ../index.php");

}

// AMBIL ID PIZZA
$id = $_GET['id'];

// HAPUS DATA
mysqli_query($koneksi,

    "DELETE FROM pizza
     WHERE id_pizza='$id'"

);

// KEMBALI KE DASHBOARD
header("Location: dashboard.php");

?>