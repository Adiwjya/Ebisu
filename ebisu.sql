-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 06:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebisu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi` float NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_detail`
--

CREATE TABLE `bidang_detail` (
  `id_bidang_detail` varchar(10) NOT NULL,
  `id_materi` varchar(10) NOT NULL,
  `id_pengajar` varchar(10) NOT NULL,
  `id_bidang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama`, `deskripsi`) VALUES
('MTR001', 'Digital Marketing', 'Penggunaan E-Commerce untuk menigkatkan hasil produksi  dan memperluas jangkauan pasar'),
('MTR002', 'IT Approach', 'Pengenalan Teknologi Informasi untuk mendukung kebutuhan bisnis '),
('MTR003', ' IT Financial management', 'Penataan dan perencanaan tata kelola sebuah teknologi untuk kepentingan bisnis dan lain-lain'),
('MTR004', 'Product Branding', 'Mengenalkan Label UMKM menggunakan Broadcasting');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi` float NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama`, `deskripsi`, `durasi`, `harga`) VALUES
('PKT001', 'PUBER 1', 'Paket Puas Belajar 1', 12, 2500000),
('PKT002', 'PUBER 2', 'Paket Puas Belajar 2', 6, 1700000),
('PKT003', 'PUBER 3', 'Paket Puas Belajar 3', 6, 700000);

-- --------------------------------------------------------

--
-- Table structure for table `paket_detail`
--

CREATE TABLE `paket_detail` (
  `id_paket_detail` varchar(10) NOT NULL,
  `id_materi` varchar(10) NOT NULL,
  `id_pengajar` varchar(10) NOT NULL,
  `id_paket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_detail`
--

INSERT INTO `paket_detail` (`id_paket_detail`, `id_materi`, `id_pengajar`, `id_paket`) VALUES
('PKTD001', 'MTR001', 'PG0001', 'PKT001'),
('PKTD002', 'MTR002', 'PG0001', 'PKT001'),
('PKTD003', 'MTR003', 'PG0002', 'PKT001'),
('PKTD004', 'MTR001', 'PG0001', 'PKT002'),
('PKTD005', 'MTR002', 'PG0002', 'PKT002'),
('PKTD006', 'MTR003', 'PG0003', 'PKT002'),
('PKTD007', 'MTR001', 'PG0001', 'PKT003'),
('PKTD008', 'MTR003', 'PG0003', 'PKT003');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jenis_bidang` varchar(10) NOT NULL,
  `jenis_paket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `alamat`, `tlp`, `username`, `password`, `jenis_bidang`, `jenis_paket`) VALUES
('PL0001', 'user1', 'user1@gmail.com', 'test', '081xxxxxxxxx', 'user1@gmail.com', '123', '-', 'PKT001'),
('PL0002', 'user2', 'user2@gmail.com', 'test', '081xxxxxxxxx', 'user2@gmail.com', '123', '-', 'PKT002'),
('PL0003', 'noel', 'Noel@gmail.com', 'Uwu', '123', 'Noel@gmail.com', '123', '-', 'PKT001'),
('PL0004', '', '', '', '', '', '', '-', 'PKT001');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_materi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama`, `email`, `alamat`, `tlp`, `username`, `password`, `id_materi`) VALUES
('PG0001', 'Adi Wijaya', 'pengajar1@gmail.com', 'Test', '0000', 'pengajar1@gmail.com', '123', 'MTR001'),
('PG0002', 'pengajar2', 'pengajar2@gmail.com', 'TEST`', 'TEST', 'pengajar2@gmail.com', '123', 'MTR002'),
('PG0003', 'pengajar3', 'p3@gmail.com', 'test', '0899999999', 'p3@gmail.com', '123', 'MTR002'),
('PG0004', '', '', '', '', '', '', 'MTR004');

-- --------------------------------------------------------

--
-- Table structure for table `userconfig`
--

CREATE TABLE `userconfig` (
  `id` varchar(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `akses` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userconfig`
--

INSERT INTO `userconfig` (`id`, `email`, `nama`, `akses`, `password`) VALUES
('L000001', 'admin@gmail.com', 'Admin', 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `bidang_detail`
--
ALTER TABLE `bidang_detail`
  ADD PRIMARY KEY (`id_bidang_detail`),
  ADD KEY `FK_idbidang_key` (`id_bidang`),
  ADD KEY `FK_idmateri_key` (`id_materi`),
  ADD KEY `FK_idpengajar_key` (`id_pengajar`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_detail`
--
ALTER TABLE `paket_detail`
  ADD PRIMARY KEY (`id_paket_detail`),
  ADD KEY `FK_idmateri_paket_key` (`id_materi`),
  ADD KEY `FK_id_paket_key` (`id_paket`),
  ADD KEY `FK_idpengajar_paket_key` (`id_pengajar`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD KEY `FK_idmateri_pengajar_key` (`id_materi`);

--
-- Indexes for table `userconfig`
--
ALTER TABLE `userconfig`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidang_detail`
--
ALTER TABLE `bidang_detail`
  ADD CONSTRAINT `FK_idbidang_key` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idmateri_key` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idpengajar_key` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paket_detail`
--
ALTER TABLE `paket_detail`
  ADD CONSTRAINT `FK_id_paket_key` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idmateri_paket_key` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idpengajar_paket_key` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `FK_idmateri_pengajar_key` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
