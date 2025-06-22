-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2025 at 05:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `kode_barang` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `satuan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int DEFAULT '0',
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama`, `deskripsi`, `satuan`, `stok`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'BRG-9374', 'Pensil Merah', 'Pensil Merah Keren dan Murah', 'pcs', 1000, '67a019fc1f82d.jpg', '2025-01-23 07:08:37', '2025-02-05 04:42:31'),
(2, 'BRG-1253', 'Meja Besi', 'Meja Besi Keren', 'pcs', 70, '', '2025-01-23 13:57:53', '2025-02-05 04:42:59'),
(3, 'BRG-9755', 'Meja Kayu', 'Meja Kayu Keren', 'pcs', 800, '', '2025-01-23 13:59:40', '2025-02-03 03:12:52'),
(4, 'BRG-0295', 'Kursi Besi', 'Kursi Keren', 'pcs', 200, '67a01ceadc5e5.jpg', '2025-01-23 14:00:44', '2025-02-03 01:33:31'),
(5, 'BRG-6284', 'Meja Jepara', 'Meja cantik', 'pcs', 0, NULL, '2025-02-03 21:21:39', '2025-02-03 21:21:39'),
(6, 'BRG-4181', 'Pulpen Hitam', 'Pulpen Keren', 'pcs', 250, NULL, '2025-02-05 05:33:20', '2025-02-05 05:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

CREATE TABLE `pemasok` (
  `id` int NOT NULL,
  `kode_pemasok` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `kontak` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemasok`
--

INSERT INTO `pemasok` (`id`, `kode_pemasok`, `nama`, `alamat`, `kontak`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'SPL-2397', 'Al Farizi Dwi Prasetyo', 'Indramayu', '+62 220 511 019', '67a01cb4f1b2e.png', '2025-01-23 08:42:17', '2025-02-03 01:32:37'),
(5, 'SPL-5229', 'Dandy Royyan Firdaus', 'Cirebon', '+62 220 511 056', '67a038e492757.jpeg', '2025-01-23 14:01:42', '2025-02-03 03:32:52'),
(6, 'SPL-4380', 'Brilliant Fikri Wicaksono', 'Surabaya', '+62 812 2361 4056', '67a038fa5fd1c.png', '2025-01-23 14:05:05', '2025-02-03 03:33:14'),
(7, 'SPL-3065', 'Makima', 'Jepang', '+12 1212 1212 1212', '67a133f102f78.png', '2025-02-03 21:23:19', '2025-02-03 21:24:01'),
(8, 'SPL-7765', 'Kirito', 'Osaka', '+121 1212 1222 1244', '67a2f9670750c.jpg', '2025-02-05 05:33:53', '2025-02-05 05:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `kode_transaksi` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_barang` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pemasok` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah` int NOT NULL,
  `jenis_transaksi` enum('masuk','keluar') COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_transaksi`, `kode_barang`, `kode_pemasok`, `jumlah`, `jenis_transaksi`, `tanggal`, `created_at`, `updated_at`) VALUES
(20, 'TRX-2430', 'BRG-9374', 'SPL-2397', 200, 'masuk', '2025-02-01 05:03:22', '2025-02-01 05:03:22', '2025-02-01 05:03:22'),
(22, 'TRX-1737', 'BRG-9374', 'SPL-5229', 200, 'masuk', '2025-02-01 03:15:50', '2025-02-03 03:15:50', '2025-02-05 05:05:01'),
(23, 'TRX-8213', 'BRG-1253', 'SPL-4380', 100, 'keluar', '2025-02-03 04:41:56', '2025-02-05 04:41:56', '2025-02-05 05:05:46'),
(24, 'TRX-8848', 'BRG-9374', 'SPL-2397', 200, 'masuk', '2025-02-05 04:42:31', '2025-02-05 04:42:31', '2025-02-05 04:42:31'),
(25, 'TRX-1374', 'BRG-1253', 'SPL-5229', 50, 'masuk', '2025-02-05 04:42:59', '2025-02-05 04:42:59', '2025-02-05 04:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sandi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','pengurus','owner') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `sandi`, `level`) VALUES
(11, 'Al Farizi Dwi Prasetyo', 'alfarizi@gmail.com', '$2y$10$9bgzo.3LESVHrFeP4NT6mucxtBaXRcSMXpR5v1TLmDtdq1P5tbpEO', 'admin'),
(12, 'Dandy Royyan Firdaus', 'dandy@gmail.com', '$2y$10$46SxpRNZa1yddxt4wOR69eaUT02FrA6zBs8c51DBXN5/O/IZOR9la', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pemasok` (`kode_pemasok`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_pemasok` (`kode_pemasok`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemasok`
--
ALTER TABLE `pemasok`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_pemasok`) REFERENCES `pemasok` (`kode_pemasok`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
