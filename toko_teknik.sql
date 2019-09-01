-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 03:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_teknik`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(3) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `id_jenis` int(3) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_jenis`, `stok`, `harga`, `deskripsi`, `foto`) VALUES
(13, 'Sabit', 4, 8, 50000, 'gawe mbacok ndasmu', 'Wisata-Tebing-Bereksi-Jogja.png'),
(14, 'Cangkul', 4, 5, 70000, 'gawe macul raimu', 'Wisata-Hits-Seribu-Batu-Songgo-Langit-Jogja.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(3) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_barang`) VALUES
(4, 'Pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `namaKelas` varchar(10) NOT NULL,
  `waliKelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `namaKelas`, `waliKelas`) VALUES
(1, '1', 'dsd'),
(2, '1', 'dsd');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama`, `jk`, `kelas`) VALUES
(1, 'dsd', 'Laki-laki', 1),
(2, 'gtgtg', 'Laki-laki', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(13) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jk`, `alamat`, `no_hp`, `jabatan`) VALUES
(7, 'ahmad qorib', 'Laki-laki', 'jl blok o no 23', 32454356, 'Pegawai-Sf-1'),
(9, 'haris dwi', 'Laki-laki', 'Jl parangtritis no 222', 2147483647, 'Pegawai-Sf-2');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supp` int(3) NOT NULL,
  `nama_sup` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_jual`
--

CREATE TABLE `trans_jual` (
  `no_trans` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(20) NOT NULL,
  `bayar` int(20) NOT NULL,
  `kembali` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_jual`
--

INSERT INTO `trans_jual` (`no_trans`, `tgl`, `waktu`, `id_barang`, `nama_barang`, `harga`, `qty`, `total`, `bayar`, `kembali`) VALUES
(1, '2018-12-08', '16:19:10', 13, 'Sabit', 1000, 2, 2000, 5000, 3000);

--
-- Triggers `trans_jual`
--
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER INSERT ON `trans_jual` FOR EACH ROW BEGIN
 UPDATE barang SET stok=stok-NEW.qty
 WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai'),
(6, 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'coba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_id_jenis` (`id_jenis`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supp`);

--
-- Indexes for table `trans_jual`
--
ALTER TABLE `trans_jual`
  ADD PRIMARY KEY (`no_trans`),
  ADD KEY `fk_id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supp` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans_jual`
--
ALTER TABLE `trans_jual`
  MODIFY `no_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_barang` (`id_jenis`);

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `trans_jual`
--
ALTER TABLE `trans_jual`
  ADD CONSTRAINT `fk_id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
