-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 11:26 AM
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
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `id_costumer` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `foto_ktp_orang` varchar(100) NOT NULL,
  `verifikasi` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id_costumer`, `nama`, `alamat`, `no_hp`, `email`, `username`, `password`, `foto_ktp`, `foto_ktp_orang`, `verifikasi`) VALUES
(1, 'Iskandar', 'Alamat Pengirim ditulis lengkap meliputi : Nama Jalan dan nomor jalan, RT, RW, Desa/Kelurahan, Kecamatan, Kota/Kabupaten, Provinsi, kode pos dan Negara (Apabila dikirim ke negera lain).Alamat penerima dibutuhkan apabila kiriman tersebut', '082237653721', 'iskandar@gmail.com', 'cs', '95cc64dd2825f9df13ec4ad683ecf339', 'TRBh9SyerxpqbIMcvuYK7Fi2s0kXjl.jpg', 'aE6gfLOP0Tx4MR8miwnHZJeUsQ7uXA.jpg', 1);

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
  `bahan_bakar` varchar(10) NOT NULL,
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

INSERT INTO `mobil` (`no_pol`, `merek`, `jenis`, `tipe`, `tahun_pembuatan`, `harga_sewa`, `bahan_bakar`, `kapasitas_penumpang`, `fasilitas`, `id_rental`, `tanggal_post`, `foto_depan`, `foto_samping`, `foto_belakang`, `foto_dalam1`, `foto_dalam2`) VALUES
('B 41 UA', 'TOYOTA', 'METIC', 'PAJERO SPORT', 2012, 350000, 'PREMIUM', '8', 'TV LED,AC.', 49, '2018-03-15 19:55:46', 'ybxGKQOnAFld6ehf0utc8JPDVk2mB1.jpg', 'PSK8xHVLwGZcpeClOv4IzisrbNB0tW.jpg', 'I4cXgNZJytDTl32w97SAdYhfuEoHGi.jpg', 'Qni3NWvfEeZBrAq0ybSoPDGFxu2V7Y.jpg', 't4JM5QpxOIHjLRhowc8m3V6dYngTCl.jpg'),
('BK 1696 WE', 'HONDA', 'MANUAL', 'BRIO E SATYA', 2013, 250000, 'PREMIUM', '5', 'TV,AC,PEWANGI MOBIL, BANTAL KEPALA.', 47, '2018-03-15 04:23:59', '5qN6YdJwMal81ZgcKuLWRtvmpU2SxQ.jpg', 'EZFTtG36dqvxrQ4MLsHCb1V25KIOj7.jpg', 'JenfGmjMOZDo1pNPiASlqEK9yrCgb8.jpg', 'KpO2TuHer9ZzRaxfGJ1PDml05Ckjyg.jpg', '0RUIf46mlKbi7cPEpTn25BN3DFkzQ9.jpg'),
('BK 9633 YZ', 'TOYOTA', 'MANUAL', 'INNOVA G 2.0', 2014, 250000, 'PREMIUM', '8', 'TV LED,AC.', 49, '2018-03-15 19:53:54', 'iQaptRVyuxnTHW6m97LdMz5DbNhsAq.jpg', '0O5fJNqRZUjwiIc7l2uoEAT8yzWgpP.jpg', '4owSsAr2gnpb8C7uFyJWKqLXtm5H6a.jpg', 'Ckatj3YgfHoUMcSJAKF8OQVwlndzyI.jpg', 'ct96Kli0pJRVqOUPGf8xg4ysNAwInm.jpg'),
('BL 1303 LC', 'TOYOTA', 'AOUTOMETIC', 'INNOVA REBORN', 2016, 400000, 'PREMIUM', '8', 'TV LED,BULU DEPAN,SARUNG SETANG,PARFUM.', 48, '2018-03-15 05:45:37', 'uMKL0tCiWVcapPQZ9w8Nesml2FoE5U.jpg', '5AdDGiUrIHeoXsuKRP32LOS8T6cZ9j.jpg', '8Cd9gzlou6iBq1T5anWOHe4FtZSP0Y.jpg', 'Azm6bRpTgHonkJEQi7vMeDOyP918ws.jpg', 'cdbpwmXJW3AESYteRaTqir12QkFyKG.jpg'),
('BL 1517 QP', 'TOYOTA', 'MANUAL', 'PAJERO SPORT', 2013, 450000, 'PREMIUM', '8', 'AC,TVLED.', 48, '2018-03-15 05:59:13', 'ZMfkUtB7pbOKFusCPheciSWyLV08Yx.jpg', 'teqfmyzjND1wWVBKvEUcP3bs5nFZgI.jpg', 'pftKH7husoGyXqRN5FJnaevU1TLE2m.jpg', 'dz8j0BGnRghZIsJ3mAXYTW27oa65iO.jpg', 'IQosm39nTcGV8qHUWexXkZbvSzYfhA.jpg'),
('BL 348 LR', 'TOYOTA', 'MANUAL', 'AVANZA G', 2013, 280000, 'PREMIUM', '8', 'TIPE,AC,PARFUM.', 47, '2018-03-18 06:15:35', 'kcMT5RdwnbUFO1YDaSp4vVhEgLWf08.png', 'iSyMRUG4Lae9cAJrToxVP1NIkzC05j.JPG', 'yMGC4bZkUQVfhasoIKYn2c1Oig6HvR.png', 'IyHOrBt5FATNxjZ4Pe0cXiSgh3z78Y.png', 'YBXGTpZHcWFglruay5sQMV1qKt0D47.png'),
('BL 415 LS', 'TOYOTA', 'MANUAL', 'AVANZA VELOZ', 2014, 300000, 'PREMIUM', '8', 'TV LED,AC,PARFUM,BULU INTERIOR DEPAN.', 48, '2018-03-18 06:18:03', 'jlsLOVHeQPIrgvMhxRAZYWdqC0uzym.jpg', 'ErZlCdcbgOuiGAWtwBo4vHMjS23pPk.png', '9hgAvTa5K2uRsbrEcFjNXDW1dOMyoG.png', 'UHwcDFYt0lBnTAsMh78KZeyJIEQWa3.jpg', '48lCFLpkiqXZVtfUj0oWxHvhuGRyEg.jpg'),
('BL 512 EB', 'TOYOTA', 'MANUAL', 'AVANZA G', 2010, 200000, 'PREMIUM', '8', 'tipe,parfum', 49, '2018-03-18 06:18:45', 'UDIohArQ60ELJs9fVO7w2cnNZptgCY.jpg', 'VMBaUn5RCXK896xJPprAc34WqbEm0w.png', 'XJr1sEjO2PfdI9tNFwSDlnoq56gcWH.jpg', 'OpJ8lrm6CeqkGFR4wtuU5nXBaHifKA.png', '2BfT0UGmnYlVtygawriJ6Ze45hN9cH.png'),
('BL 641 LS', 'TOYOTA', 'MANUAL', 'INNOVA G 2.0', 2013, 350000, 'PREMIUM', '8', 'TV,AC,PARFUM,BANTAL KEPALA.', 47, '2018-03-15 05:31:05', 'azYwF9pJQyK6AdBbl48ZUHkSCmsgW7.jpg', '046xrpyJsBovi8gOPt7nYbRk2UmQ5z.png', 'xeOYkGL4K7byr6VAEUMTosJwIvzXpN.png', 'HDb1x4l0BcuQp7TkV9rOKjJNivgCd5.jpg', 'cOR7GI9Xa21dBikZyHn4Twz8mQ0ALr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_costumer` int(11) NOT NULL,
  `no_pol` varchar(10) NOT NULL,
  `invoice` int(255) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `harga` int(10) NOT NULL,
  `bank_pengirim` varchar(50) DEFAULT NULL,
  `rek_pengirim` varchar(100) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `verifikasi_pembayaran` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_costumer`, `no_pol`, `invoice`, `tanggal_pesan`, `tanggal_mulai`, `tanggal_selesai`, `harga`, `bank_pengirim`, `rek_pengirim`, `bukti_pembayaran`, `nominal`, `verifikasi_pembayaran`) VALUES
(1, 'BK 1696 WE', 1, '2018-04-10 09:24:38', '2018-04-16', '2018-04-17', 150000, 'BCA', '123456789', 'wGUntEOMWHqayF09xmsJcKfQ2RrTzi.jpg', 12345689, 2),
(1, 'BK 1696 WE', 2, '2018-04-09 14:44:46', '2018-04-18', '2018-04-20', 150000, NULL, NULL, NULL, NULL, 0);

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
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_rental` varchar(255) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pemilik_rekening` varchar(100) NOT NULL,
  `rekening` varchar(25) NOT NULL,
  `bank` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id_rental`, `nama_rental`, `alamat`, `nama_pemilik`, `no_hp_pemilik`, `no_hp_rental`, `status`, `id_admin`, `username`, `password`, `foto_rental`, `nik`, `tanggal_daftar`, `pemilik_rekening`, `rekening`, `bank`) VALUES
(47, 'CV. Caecear', 'Jl. Pocut Baren Banda Aceh', 'Muhammad Reza', '085277898890', '0651788998', 1, 'admin', 'M_Reza', '21232f297a57a5a743894a0e4a801fc3', 'O8uCWXKEyqgHmLUi5fwrd21TpBhV0M.jpg', '1171090804920002', '2018-04-02 14:42:51', 'Rizal', '09876543212345678', 'Aceh'),
(48, 'cv. Cn Rental', 'Jln soekarno hatta belakang gedung wali nanggroe banda aceh', 'ILHAM', '085260878012', '0651878977', 1, 'admin', 'ilham', '21232f297a57a5a743894a0e4a801fc3', 'gjS41XuERkiHpvVhJ5eY9CWU76Z0NL.jpg', '11710901820001', '2018-03-15 05:39:00', '', '', ''),
(49, 'CV. Plaza Atjeh', 'Jl. Prof. Ali Hasyimi, Lamteh, Ulee Kareng, Banda Aceh', 'Muhammad Rizal', '08126999151', '065134785', 1, 'admin', 'rizal', '21232f297a57a5a743894a0e4a801fc3', '0Tk9oDUFwdisAZKCVp6ELXQtNcr12J.jpg', '11810902810001', '2018-03-15 19:44:54', '', '', '');

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
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id_costumer`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_pol`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`invoice`);

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
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id_costumer` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `invoice` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
