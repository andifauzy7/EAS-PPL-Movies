-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 12:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tiket`
--

CREATE TABLE `kategori_tiket` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `harga_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_tiket`
--

INSERT INTO `kategori_tiket` (`id_kategori`, `nama_kategori`, `harga_kategori`) VALUES
(1, 'Ekonomi', 25000),
(2, 'Reguler', 50000),
(3, 'VIP', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `kursi_studio`
--

CREATE TABLE `kursi_studio` (
  `id_kursi` varchar(6) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_pemesan` int(11) DEFAULT NULL,
  `status_kursi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi_studio`
--

INSERT INTO `kursi_studio` (`id_kursi`, `id_kategori`, `id_pemesan`, `status_kursi`) VALUES
('E-001', 1, NULL, 1),
('E-002', 1, NULL, 1),
('E-003', 1, NULL, 0),
('E-004', 1, NULL, 0),
('E-005', 1, NULL, 0),
('E-006', 1, NULL, 1),
('E-007', 1, NULL, 1),
('E-008', 1, NULL, 0),
('E-009', 1, NULL, 0),
('E-010', 1, NULL, 0),
('E-011', 1, NULL, 0),
('E-012', 1, NULL, 0),
('E-013', 1, NULL, 0),
('E-014', 1, NULL, 0),
('E-015', 1, NULL, 0),
('E-016', 1, NULL, 1),
('E-017', 1, NULL, 0),
('E-018', 1, NULL, 0),
('E-019', 1, NULL, 0),
('E-020', 1, NULL, 0),
('R-001', 2, NULL, 0),
('R-002', 2, NULL, 0),
('R-003', 2, NULL, 1),
('R-004', 2, NULL, 0),
('R-005', 2, NULL, 0),
('R-006', 2, NULL, 0),
('R-007', 2, NULL, 0),
('R-008', 2, NULL, 0),
('R-009', 2, NULL, 0),
('R-010', 2, NULL, 1),
('R-011', 2, NULL, 1),
('R-012', 2, NULL, 0),
('R-013', 2, NULL, 0),
('R-014', 2, NULL, 0),
('R-015', 2, NULL, 0),
('R-016', 2, NULL, 0),
('R-017', 2, NULL, 0),
('R-018', 2, NULL, 0),
('R-019', 2, NULL, 0),
('R-020', 2, NULL, 0),
('V-001', 3, NULL, 1),
('V-002', 3, NULL, 0),
('V-003', 3, NULL, 0),
('V-004', 3, NULL, 1),
('V-005', 3, NULL, 0),
('V-006', 3, NULL, 0),
('V-007', 3, NULL, 1),
('V-008', 3, NULL, 0),
('V-009', 3, NULL, 0),
('V-010', 3, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `hp_pemesan` varchar(12) NOT NULL,
  `bukti_pemesanan` varchar(255) NOT NULL,
  `status_pemesanan` int(11) NOT NULL,
  `tgl_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `hp_pemesan`, `bukti_pemesanan`, `status_pemesanan`, `tgl_pemesanan`, `total_pemesanan`) VALUES
(10, 'Andi Fauzy Dewantara', '085322677320', '10hands.jpg', 2, '2021-02-17 23:16:40', 50000),
(11, 'Febriyoga', '081220391796', '11AndiFauzy.jpg', 1, '2021-02-08 12:55:27', 25000),
(14, 'Fahmi Widianto', '08654423', '14blue.jpg', 1, '2021-02-08 12:56:55', 25000),
(15, 'Rendi Kamil', '081220391796', '1599u-wallpapers-thoreau-1280x800.gif', 1, '2021-02-08 12:56:58', 25000),
(16, 'Fahmi Idris', '081220391796', '16AndiFauzy.jpg', 1, '2021-02-08 12:57:02', 125000),
(17, 'Aji Zapar', '087766549954', '17c836f3fd5aeb7ff47e5fd80e3fe5d81a.jpg', 1, '2021-02-08 12:57:05', 50000),
(18, 'Adhitya Febhiakbar', '08996827350', '18winnerconcert.jpg', 1, '2021-02-08 12:59:54', 125000),
(19, 'Khali Fauzy', '08996827350', '-', 0, '2021-02-17 22:41:26', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pemesan` int(11) NOT NULL,
  `id_kursi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pemesan`, `id_kursi`) VALUES
(10, 'E-001'),
(10, 'E-007'),
(11, 'E-002'),
(14, 'E-006'),
(15, 'E-016'),
(16, 'V-001'),
(16, 'R-003'),
(17, 'R-010'),
(18, 'R-011'),
(18, 'V-007'),
(19, 'V-004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_tiket`
--
ALTER TABLE `kategori_tiket`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kursi_studio`
--
ALTER TABLE `kursi_studio`
  ADD PRIMARY KEY (`id_kursi`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_pemesan` (`id_pemesan`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `id_kursi` (`id_kursi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_tiket`
--
ALTER TABLE `kategori_tiket`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kursi_studio`
--
ALTER TABLE `kursi_studio`
  ADD CONSTRAINT `kursi_studio_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_tiket` (`id_kategori`),
  ADD CONSTRAINT `kursi_studio_ibfk_2` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_kursi`) REFERENCES `kursi_studio` (`id_kursi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
