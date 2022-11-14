-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 03:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restaurant_bar`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `psw`) VALUES
(1, 'kpananda77@gmail.com', 'gongjuu', '$2y$10$cZjQx8N5sk24wTCp0ZVdEu.3CnGgdCi.Eevee8SAqc1tzqY/x6zEK'),
(2, 'chimaa@gmail.com', 'chi', '$2y$10$XIrgR6lZ3neua.8fG3Vviep7HE2Jtf/CjrDAS2B1hBC7QRchQXXX.'),
(3, 'chimaa@gmail.com', 'Admin', '$2y$10$VV/dqmIlQ0.IKIh080PakuodHRAW6wpLqCpKOMNm5Zrz5xAbxoORa'),
(4, 'adwiahmuhajir@gmail.com', 'dina', '$2y$10$MoANKDzR6ebRsMb2/cD0ceS8Sa7Bv/43ZX1VaCvFL5kPt2SNhPq3a'),
(5, 'kania@gmail.com', 'kacans', '$2y$10$VyVPVnSt3fca9FukxSFD.Ouh8Cg1mfTu8Ub4kFpz1QQj2ynb3mFOC');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `tglinput` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`id`, `nama`, `harga`, `tglinput`, `gambar`) VALUES
(2, 'strawberry cheese cake', 550000, '11-11-2022', 'strawberry cheese cake.jpg'),
(3, 'patbingsu', 80000, '11-11-2022', 'patbingsu.jpg'),
(4, 'cookies', 35000, '11-11-2022', 'cookies.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `tglinput` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `harga`, `tglinput`, `gambar`) VALUES
(14, 'Spicy Chicken', 150000, '11-11-2022', 'Spicy Chicken.jpg'),
(15, 'Bulgogi', 25000, '11-11-2022', 'Bulgogi.jpg'),
(16, 'Kimchi ', 130000, '11-11-2022', 'Kimchi .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `tglinput` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id`, `nama`, `harga`, `tglinput`, `gambar`) VALUES
(5, 'Matcha Cocunut Latte', 50000, '11-11-2022', 'Matcha Cocunut Latte.jpg'),
(6, 'soju', 100000, '11-11-2022', 'soju.jpg'),
(7, 'fresh korean strawberry milk', 75000, '11-11-2022', 'fresh korean strawberry milk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) NOT NULL,
  `id_makanan` varchar(10) NOT NULL,
  `id_minuman` varchar(10) NOT NULL,
  `id_dessert` varchar(10) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nama`, `no_telp`, `ruangan`, `tanggal`, `jumlah`, `notes`) VALUES
(13, 'kania', '082220604444', 'Private VIP', '2022-10-30', 2, 'apajksnkbsjanljsanku'),
(14, 'dina', '082220604444', 'Private VIP', '2022-11-11', 2, 'siapin yg rapiii yahh!!!'),
(15, 'chima dan ikhwan', '0852503914447', 'Private VIP', '2022-11-08', 2, 'buat yang romantis ruangannya'),
(16, 'kacansszzz', '085055321199', 'Private', '2022-11-16', 7, 'gada note'),
(17, 'jenooooo', '08682787199', 'Public', '2022-12-07', 3, 'kusus'),
(18, 'zayn malik', '082220604444', 'Private VIP', '2022-12-09', 1, 'alone aja aku'),
(19, 'one direction c', '081388932803', 'Public', '2022-11-18', -5, 'yang bagus yah tempatmya soalnya mau comebacke ot5 boongg!!!'),
(20, 'NCT ', '082220608888', 'Private VIP', '2022-11-25', 9, 'mau dinner sama kacans'),
(21, 'stranger things crew', '082220607777', 'Public', '2023-04-13', 13, 'buat season 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
