-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2020 at 09:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `nm_app` varchar(255) DEFAULT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `home_txt` text DEFAULT NULL,
  `footer_txt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `nm_app`, `nama_toko`, `alamat_toko`, `home_txt`, `footer_txt`) VALUES
(1, 'Transaksi App', 'Toko Baju Bandung', 'Jl. Kepastian Dan Yakin No. 11 - Kota', '<strong>Transaksi App (Point of Sales)</strong> adalah aplikasi sederhana yang dapat digunakan untuk mengontrol keluar masuk barang serta dapat melakukan transaksi penjualan secara langsung.', 'Belanja Hemat Dan Nyaman');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` bigint(20) NOT NULL,
  `kode_barang` varchar(255) DEFAULT NULL,
  `kategori_barang` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `harga_beli` bigint(20) DEFAULT NULL,
  `harga_jual` bigint(20) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `waktu_masuk` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `kategori_barang`, `nama_barang`, `satuan`, `harga_beli`, `harga_jual`, `tanggal_masuk`, `waktu_masuk`) VALUES
(1, 'TUN2020080711', 1, 'TUNIK01', '1', 100000, 150000, '2020-08-07', '05:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `barang_master`
--

CREATE TABLE `barang_master` (
  `id_bmaster` bigint(20) NOT NULL,
  `id_br` bigint(20) DEFAULT NULL,
  `stok` bigint(20) DEFAULT NULL,
  `tglup` date DEFAULT NULL,
  `wktup` time DEFAULT NULL,
  `tipe` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_master`
--

INSERT INTO `barang_master` (`id_bmaster`, `id_br`, `stok`, `tglup`, `wktup`, `tipe`) VALUES
(1, 1, 10, '2020-08-07', '05:50:37', 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `kode_kategori` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `kode_kategori`) VALUES
(1, 'TUNIK', 'TUN');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_master` bigint(20) DEFAULT NULL,
  `id_brg` bigint(20) DEFAULT NULL,
  `jml_jual` bigint(20) DEFAULT NULL,
  `sub_total` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_master`
--

CREATE TABLE `penjualan_master` (
  `id_pjmaster` bigint(20) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_trx` bigint(20) DEFAULT NULL,
  `grand_total` bigint(20) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `bayar` bigint(20) DEFAULT NULL,
  `kembalian` bigint(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl_trx` date DEFAULT NULL,
  `waktu_trx` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `satuan`) VALUES
(1, 'PCS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `akses_user` int(11) DEFAULT NULL,
  `status_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `akses_user`, `status_user`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 1, 1),
(2, 'toko1', '3e1c6b5251b09df82c350eb5cd4db2807ddd821a', 'Toko 1', 2, 1),
(3, 'toko2', 'e8b91b1bfca5e1648c040b2ede9b1c8ae89ed23e', 'Toko 2', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_master`
--
ALTER TABLE `barang_master`
  ADD PRIMARY KEY (`id_bmaster`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `penjualan_master`
--
ALTER TABLE `penjualan_master`
  ADD PRIMARY KEY (`id_pjmaster`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_master`
--
ALTER TABLE `barang_master`
  MODIFY `id_bmaster` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan_master`
--
ALTER TABLE `penjualan_master`
  MODIFY `id_pjmaster` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
