-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 02:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no_pol` varchar(10) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `tahun_pembuatan` int(5) NOT NULL,
  `harga_sewa` int(12) NOT NULL,
  `bahan bakar` varchar(10) NOT NULL,
  `kapasitas_penumpang` varchar(10) NOT NULL,
  `fasilitas` text NOT NULL,
  `id_rental` int(100) NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto_depan` varchar(100) NOT NULL,
  `foto_samping` varchar(100) NOT NULL,
  `foto_belakang` varchar(100) NOT NULL,
  `foto_dalam1` varchar(100) NOT NULL,
  `foto_dalam2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`no_pol`, `merek`, `jenis`, `tipe`, `tahun_pembuatan`, `harga_sewa`, `bahan bakar`, `kapasitas_penumpang`, `fasilitas`, `id_rental`, `tanggal_post`, `foto_depan`, `foto_samping`, `foto_belakang`, `foto_dalam1`, `foto_dalam2`) VALUES
('09876543', '12345', '12345', '12345', 1234, 12345, '12345', '123456', '12345', 1, '2018-02-24 10:12:31', '', '1.png', '', '', ''),
('10987', '12345', '12345', '12345', 1234, 12345, '12345', '123456', '12345', 1, '2018-02-24 10:12:36', '', '2.jpg', '', '', ''),
('12345', '12345', '12345', '12345', 1234, 12345, '12345', '123456', '12345', 1, '2018-02-24 10:12:41', '', '3.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(100) NOT NULL,
  `nama_rental` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_hp_pemilik` varchar(15) NOT NULL,
  `no_hp_rental` varchar(15) NOT NULL,
  `status` int(2) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_rental` varchar(255) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id_rental`, `nama_rental`, `alamat`, `nama_pemilik`, `no_hp_pemilik`, `no_hp_rental`, `status`, `id_admin`, `username`, `password`, `foto_rental`, `nik`, `tanggal_daftar`) VALUES
(1, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, 'rental', '7301c0af5f01e12298929b3a03aee210', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(3, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '', '', '2.jpg', '098765432345678', '2018-02-24 09:33:13'),
(6, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '1', '', '3.jpg', '098765432345678', '2018-02-24 09:47:28'),
(7, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '2', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(8, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '3', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(9, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '4', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(10, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '6', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(11, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '7', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(12, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '8', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(13, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '9', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(14, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '10', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(15, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '11', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(16, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '12', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(17, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '13', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(18, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '14', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(19, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '15', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(20, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '16', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(21, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '17', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(22, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '28', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(23, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '19', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(24, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '18', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(25, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '29', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(26, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '21', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(27, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '22', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(28, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '23', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(29, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '24', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(30, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '26', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(31, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '25', '', '1.png', '098765432345678', '2018-02-24 09:33:13'),
(36, 'suakaak', 'lamtemen', 'subandro', '0987654321', '0987654321', 1, 1, '100', '', '1.png', '098765432345678', '2018-02-24 09:33:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_pol`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
