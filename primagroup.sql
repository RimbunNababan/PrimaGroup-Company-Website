-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 08:52 AM
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
-- Database: `primagroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` char(36) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `no_hp`, `email`) VALUES
('CUS0001', 'Ferdinand', 'Medan', '082173394314', 'ferdinand@gmail.com'),
('CUS0002', 'Dhea Simbolon', 'Medan', '082173983214', 'dhea@gmail.com'),
('CUS0003', 'Thomas Sihotang', 'Medan', '082173983214', 'thomas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `history_pembayaran`
--

CREATE TABLE `history_pembayaran` (
  `id_history_pembayaran` char(36) NOT NULL,
  `id_pembayaran` char(36) NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `jumlah_angsuran` decimal(15,2) DEFAULT NULL,
  `sisa_pinjaman` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_pembelian`
--

CREATE TABLE `history_pembelian` (
  `id_history_pembelian` char(36) NOT NULL,
  `id_pembelian` char(36) NOT NULL,
  `tanggal_pembelian` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_pembelian` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `jumlah_pembayaran` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` char(36) NOT NULL,
  `id_pembelian` char(36) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah_pembayaran` decimal(15,2) NOT NULL,
  `sisa_pembayaran` decimal(15,2) NOT NULL,
  `angsuran_ke` int(11) DEFAULT NULL,
  `status_pembayaran` enum('Lunas','Belum  Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` char(36) NOT NULL,
  `id_customer` char(36) NOT NULL,
  `blok_rumah` char(36) NOT NULL,
  `metode_pembayaran` enum('Cash','Kredit','KPR') NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `harga_total` decimal(15,2) NOT NULL,
  `diskon` decimal(5,2) DEFAULT 0.00,
  `dp` decimal(15,2) DEFAULT 0.00,
  `total_pembayaran` decimal(15,2) DEFAULT 0.00,
  `angsuran_per_bulan` decimal(15,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `blok_rumah` varchar(50) NOT NULL,
  `harga_jual` decimal(15,2) NOT NULL,
  `status` enum('Kosong','Booking','Kredit','Cash') NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`blok_rumah`, `harga_jual`, `status`, `keterangan`) VALUES
('A-100', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-101', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-102', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-103', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-104', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-105', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-106', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-107', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-108', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-109', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-82', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-83', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-84', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-85', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-86', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-87', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-88', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-89', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-90', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-91', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-92', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-93', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-94', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-95', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-96', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-97', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-98', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('A-99', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-01', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-02', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-03', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-04', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-05', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-06', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-07', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-08', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-09', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-10', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-11', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-12', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-12A', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-14', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-15', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-16', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-17', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-18', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-19', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-20', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-21', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-22', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-23', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-24', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-25', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-26', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-27', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-28', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-29', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-30', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-31', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-32', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-33', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-34', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-35', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-36', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-37', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-38', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-39', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-40', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²'),
('B-41', 166000000.00, 'Kosong', 'Type= 36/91 Kopel, Luas= 7 m x 13 m²');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  ADD PRIMARY KEY (`id_history_pembayaran`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `history_pembelian`
--
ALTER TABLE `history_pembelian`
  ADD PRIMARY KEY (`id_history_pembelian`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `blok_rumah` (`blok_rumah`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`blok_rumah`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  ADD CONSTRAINT `history_pembayaran_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);

--
-- Constraints for table `history_pembelian`
--
ALTER TABLE `history_pembelian`
  ADD CONSTRAINT `history_pembelian_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`blok_rumah`) REFERENCES `rumah` (`blok_rumah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
