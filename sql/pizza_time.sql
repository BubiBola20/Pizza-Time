-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2026 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pembayaran` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `email`, `no_hp`, `alamat`, `pembayaran`, `total`, `tanggal`) VALUES
(1, 'bahar', 'baha@gmail.com', '083104724091', 'bali', 'Transfer Bank', 40000, '2026-05-18 13:39:12'),
(2, 'tristan', 'tristan@gmail.com', '0303939', 'jogja', 'COD', 45000, '2026-05-18 13:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id_pizza` int(11) NOT NULL,
  `nama_pizza` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id_pizza`, `nama_pizza`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Pepperoni Pizza', 'Pizza dengan pepperoni premium dan keju melimpah.', 45000, 'https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=1000'),
(2, 'Cheese Pizza', 'Lelehan mozzarella super creamy dan lembut.', 40000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsksPyvPntSJGOPoaFE2XcDXfHP9eVHvHrmQ&s'),
(3, 'Meat Lovers', 'Daging melimpah dengan rasa juicy dan gurih.', 55000, 'https://images.unsplash.com/photo-1594007654729-407eedc4be65?q=80&w=1000'),
(4, 'Hawaiian Pizza', 'Kombinasi nanas dan ham yang unik dan lezat.', 48000, 'https://images.unsplash.com/photo-1604382355076-af4b0eb60143?q=80&w=1000'),
(5, 'Veggie Pizza', 'Pizza sehat dengan sayuran fresh pilihan.', 42000, 'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?q=80&w=1000'),
(6, 'BBQ Pizza', 'Saus BBQ spesial dengan daging asap premium.', 50000, 'https://images.unsplash.com/photo-1593560708920-61dd98c46a4e?q=80&w=1000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'xyzbharr', '123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id_pizza`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
