-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2015 at 02:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alasan`
--

CREATE TABLE IF NOT EXISTS `tb_alasan` (
`id_alasan` int(4) NOT NULL,
  `alasan` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alasan`
--

INSERT INTO `tb_alasan` (`id_alasan`, `alasan`) VALUES
(1, 'Masalah Jaringan'),
(2, 'Belum Ada Uang'),
(3, 'Tarif Mahal'),
(4, 'Pindah /Pelanggan Tidak Ditemukan'),
(5, 'Cabut / Tidak Digunakan Lagi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembyrn`
--

CREATE TABLE IF NOT EXISTS `tb_pembyrn` (
`id_pmbyrn` int(4) NOT NULL,
  `id_plgn` int(4) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `sisa` int(50) NOT NULL,
  `tagihan` int(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tgl_tagihan` date NOT NULL,
  `id_alasan` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_plgn`
--

CREATE TABLE IF NOT EXISTS `tb_plgn` (
`id_plgn` int(4) NOT NULL,
  `dp` varchar(50) NOT NULL,
  `snd` varchar(50) NOT NULL,
  `nd_ref` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `multikontak` varchar(20) NOT NULL,
  `sentral` varchar(50) NOT NULL,
  `segment` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alasan`
--
ALTER TABLE `tb_alasan`
 ADD PRIMARY KEY (`id_alasan`);

--
-- Indexes for table `tb_pembyrn`
--
ALTER TABLE `tb_pembyrn`
 ADD PRIMARY KEY (`id_pmbyrn`);

--
-- Indexes for table `tb_plgn`
--
ALTER TABLE `tb_plgn`
 ADD PRIMARY KEY (`id_plgn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alasan`
--
ALTER TABLE `tb_alasan`
MODIFY `id_alasan` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pembyrn`
--
ALTER TABLE `tb_pembyrn`
MODIFY `id_pmbyrn` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_plgn`
--
ALTER TABLE `tb_plgn`
MODIFY `id_plgn` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
