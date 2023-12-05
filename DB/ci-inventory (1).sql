-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2023 at 08:15 AM
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
-- Database: `ci-inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_barang` int NOT NULL,
  `jenis_barang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok_barang`, `jenis_barang`) VALUES
(4, 'Kabel UTP PANDUIT CAT 6 NETKEY NUC6C04BU-C', 2, 5),
(5, 'Projector EPSON  EB-X51', 4, 2),
(6, 'Logitech C270 Webcam HD 720P', 6, 2),
(7, 'Cisco SF220-24-K9-EU 24 Port Smart Plus Managed Switch Hub', 10, 2),
(8, 'Mikrotik RB 1100 Ah4x', 2, 2),
(9, 'Mikrotik CCR1009-7G-1C-1S+', 1, 2),
(10, 'LOGITECH K120 KEYBOARD LOGITECT K120 PLUG AND PLAY USB', 20, 2),
(11, 'Mouse Wired Logitech M90', 20, 2),
(12, 'Ram PC VGeN Ddr4 8gb Pc19200 2400Mhz Longdimm', 15, 3),
(13, 'Converter HDMI to VGA Adapter HDMI Male to VGA Female', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_barang`
--

CREATE TABLE `tb_jenis_barang` (
  `id` int NOT NULL,
  `nama` varchar(120) NOT NULL,
  `is_actived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_jenis_barang`
--

INSERT INTO `tb_jenis_barang` (`id`, `nama`, `is_actived`) VALUES
(2, 'unit', 1),
(3, 'pcs', 1),
(4, 'meter', 1),
(5, 'Kardus (315 Meter)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `id` int NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `tujuan` varchar(120) NOT NULL,
  `id_user` int NOT NULL,
  `id_barang` int NOT NULL,
  `jumlah_barang` int NOT NULL,
  `is_completed` smallint NOT NULL,
  `is_return` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`id`, `tgl_peminjaman`, `tgl_pengembalian`, `tujuan`, `id_user`, `id_barang`, `jumlah_barang`, `is_completed`, `is_return`) VALUES
(1, '2023-11-25', '2023-11-27', 'keperluan meeting', 6, 5, 2, 1, 1),
(2, '2023-11-24', '2023-11-27', 'keperluan meeting', 6, 5, 1, 1, 1),
(3, '2023-11-24', '2023-11-28', 'keperluan meeting', 8, 6, 1, 1, 1),
(4, '2023-11-30', '2023-12-01', 'keperluan meeting', 6, 6, 3, 2, 0),
(5, '2023-12-06', '2023-12-08', 'keperluan meeting', 6, 5, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `image` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_id` int NOT NULL,
  `is_actived` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_actived`, `date_created`) VALUES
(5, 'ujang', 'ujang@gmail.com', 'default.jpg', '$2y$10$0K5BYgjH7ezIP3hMLadIAOG2T.LRkgWOiifyhwlcryCxPMI1htNne', 1, 1, 1696380198),
(6, 'eko', 'eko@gmail.com', 'default.jpg', '$2y$10$XiTmaub7rsv6Sk/bGBO7YudzHMxuPQTx7Yql1UqHm7hDRMJ6GYmdm', 2, 1, 1696986330),
(8, 'Ujang Nurzaman', 'ujang.nurzaman03@gmail.com', 'default.jpg', '$2y$10$pgAdIRzAUrUdCo29ynfNOeFXfZvimKCSEbMuHVAGyK8BPwoAfCx8q', 2, 1, 1699410657);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `jenis_barang` (`jenis_barang`);

--
-- Indexes for table `tb_jenis_barang`
--
ALTER TABLE `tb_jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_jenis_barang`
--
ALTER TABLE `tb_jenis_barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `fk_barang_jenis_barang` FOREIGN KEY (`jenis_barang`) REFERENCES `tb_jenis_barang` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
