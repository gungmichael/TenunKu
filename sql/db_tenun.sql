-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 08:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tenun`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(12) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `qty_barang` int(12) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jenis_barang` int(12) NOT NULL,
  `id_supplier` int(12) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `qty_barang`, `harga_barang`, `jenis_barang`, `id_supplier`, `keterangan`) VALUES
(1, 'Rangrang Motif Geometri', 35, 450000, 6, 1, 'Tenun Rangrang Motif Geometri yang dibuat secara simetris.'),
(20, 'Endek Biru', 45, 345000, 5, 3, 'Endek Sidemen');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `id_barang` int(12) NOT NULL,
  `harga_barang` int(12) NOT NULL,
  `qty_barang` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `kode_jenis` int(12) NOT NULL,
  `pict_tenun` varchar(255) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`kode_jenis`, `pict_tenun`, `nama_jenis`, `keterangan`) VALUES
(1, '../img/product/tenunikat.jpg', 'Tenun Ikat', 'Tenun ikat atau kain ikat adalah kriya tenun Indonesia berupa kain yang ditenun dari helaian benang pakan atau benang lungsin yang sebelumnya diikat dan dicelupkan ke dalam zat pewarna alami.'),
(2, '../img/product/tenunsongket.jpg', 'Tenun Songket', 'Songket digolongkan dalam keluarga tenunan brokat. Songket ditenun dengan tangan menggunakan benang emas dan perak. Benang logam metalik yang tertenun berlatar kain menimbulkan efek kemilau cemerlang.'),
(3, '../img/product/tenungringsing.jpeg', 'Tenun Gringsing', 'Kata gringsing terdiri dari kata gring yang berarti \'sakit\' dan sing yang berarti \'tidak\' sehingga dapat dimaknai bahwa kain gringsing merupakan kain magis yang membuat pemakainya terhindar dari bala.'),
(4, '../img/product/songketsidemen.jpg', 'Tenun Sidemen', 'Umumnya Tenun Sidemen memiliki banyak jenis, seperti contohnya tenun endek dan songket yang memiliki ciri khas tersendiri.'),
(5, '../img/product/tenunendek.jpg', 'Tenun Endek', 'Endek adalah kain tenun yang berasal dari Bali. Kain endek merupakan hasil dari karya seni rupa terapan, yang berarti karya seni yang dapat diterapkan dalam kehidupan sehari-hari.'),
(6, '../img/product/tenunrangrang.jpg', 'Tenun Rangrang', 'Tenun Rangrang merupakan kain bebali yang berasal dari Seraya Timur dan Nusa Penida dengan motif geometris zigzag, belah ketupat, dan lajur œ lajur vertikal dengan warna-warni yang terang dengan inspirasi motif berasal dari keadaan geografis wilayahnya yaitu daerah pegunungan dan perbukitan.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgldaftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(7) NOT NULL DEFAULT 'Member',
  `lastlogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `nama`, `email`, `password`, `notelp`, `alamat`, `tgldaftar`, `role`, `lastlogin`) VALUES
(1, 'Admin', 'admin@tenun.com', 'tenunku', '01234567890', 'Indonesia', '2021-12-16 03:31:17', 'Admin', NULL),
(24, 'ketut saka pradipta', 'admin1@tenun.com', 'saka12345', '081338210729', 'banjar jawa', '2022-12-27 07:40:59', 'Admin', NULL),
(29, 'saka pradipta', 'psychosakapradipta@gmail.com', '$2y$10$yp.kUscIZ.o8OYjcbLaVLOtVpgz9duIt5qYIFmBNsKEjtiQpH13Zq', '081338210729', '-', '2022-12-27 08:05:49', 'Member', NULL),
(30, 'Anone Anone', 'michaelswisnandya15@gmail.com', '$2y$10$veXJWWAlmW07FgXFVb9XYOaklC1i0MkvMHaEUXrm2/JaTgw3r2y86', '085337250315', 'Jl. Astina Pura II, Ds Rendang, Kec. Rendang, Karangasem', '2022-12-27 17:30:45', 'Member', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(12) NOT NULL,
  `waktu_bayar` date NOT NULL,
  `total` int(12) NOT NULL,
  `metode` enum('Credit Card','Debit Card','ATM Bersama') NOT NULL,
  `id_transaksi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(12) NOT NULL,
  `kode_jenis` int(12) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `no_hp` int(14) NOT NULL,
  `alamat_supplier` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kode_jenis`, `nama_supplier`, `no_hp`, `alamat_supplier`, `keterangan`) VALUES
(1, 6, 'Rang Tenun', 0, 'Seraya Barat', 'Penghasil Tenun Rangrang'),
(2, 2, 'Lokakarya', 0, 'Sidemen', 'Penghasil Tenun Songket'),
(3, 5, 'SIDHIMAN', 0, 'Desa Tebola, Sidemen', 'Penghasil Tenun Endek');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `waktu_transaksi` date NOT NULL,
  `keterangan` text NOT NULL,
  `total` int(12) NOT NULL,
  `id_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_jenisbarang` (`jenis_barang`),
  ADD KEY `fk_supplier` (`id_supplier`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `fk_transaksiid1` (`id_transaksi`),
  ADD KEY `fk_barangid` (`id_barang`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_transaksiid` (`id_transaksi`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `fk_jenis` (`kode_jenis`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_userid` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `kode_jenis` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_jenisbarang` FOREIGN KEY (`jenis_barang`) REFERENCES `jenis_barang` (`kode_jenis`),
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_barangid` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksiid1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_transaksiid` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis_barang` (`kode_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
