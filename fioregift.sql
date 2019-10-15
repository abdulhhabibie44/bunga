-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 12:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fioregift`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_akses` int(5) NOT NULL,
  `nama_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_produk`
--

CREATE TABLE `tb_kategori_produk` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_produk`
--

INSERT INTO `tb_kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bunga jajanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `nama_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `nama_foto`) VALUES
(2, 1, 'Box Gift', '15000', 'Jajan lebih ke Delfi', 'Produk__1571144386.jpg'),
(3, 1, 'Ballon Bouquet', '35000', 'Terbang nih', 'Produk__1571144452.jpg'),
(4, 1, 'Parcel Bouquet', '40000', 'Bagus oee', 'Produk__1571144790.jpg'),
(5, 1, 'Fabric Bouquet', '70000', 'Indah cuy', 'Produk__1571144860.jpg'),
(6, 1, 'Flower Bouquet', '90000', 'Pilih yang mana', 'Produk__1571144904.jpg'),
(7, 1, 'Snack Bouquet', '168000', 'Kece abis', 'Produk__1571144938.jpg'),
(8, 1, 'Paper Bouquet', '120000', 'Ihir', 'Produk__1571144972.jpg'),
(9, 1, 'Tanggo Bouquet', '140000', 'Banyak tanggo', 'Produk__1571145055.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_akses` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `alamat`, `email`, `telp`, `username`, `password`, `id_akses`) VALUES
(1, 'Teguh', 'Malang', 'teguh@gmail.com', '088753463473', 'teguh', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tanggal_pesan` varchar(100) NOT NULL,
  `bukti_tf` varchar(100) NOT NULL,
  `status_validasi` varchar(100) NOT NULL,
  `tanggal_validasi` varchar(100) NOT NULL,
  `id_produk_1` int(5) NOT NULL,
  `id_produk_2` int(5) NOT NULL,
  `id_produk_3` int(5) NOT NULL,
  `id_produk_4` int(5) NOT NULL,
  `id_produk_5` int(5) NOT NULL,
  `jml_produk_1` int(5) NOT NULL,
  `jml_produk_2` int(5) NOT NULL,
  `jml_produk_3` int(5) NOT NULL,
  `jml_produk_4` int(5) NOT NULL,
  `jml_produk_5` int(5) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal_pesan`, `bukti_tf`, `status_validasi`, `tanggal_validasi`, `id_produk_1`, `id_produk_2`, `id_produk_3`, `id_produk_4`, `id_produk_5`, `jml_produk_1`, `jml_produk_2`, `jml_produk_3`, `jml_produk_4`, `jml_produk_5`, `nama_pemesan`, `cp`, `tujuan`) VALUES
(1, 0, '', '', '', '', 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 'Nirwan', '0882147483647', 'Malang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_akses` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
