-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 08:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_mail`, `user_name`, `user_pass`, `user_role`) VALUES
(1, 'test@gmail.com', 'test-admin', '12345', 'admin'),
(2, 'putri@gmail.com', 'Putri Yang Tertukar', '123', 'user'),
(3, 'bila@gmail.com', 'Bila Rasaku Ini Rasamu', '5f4dcc3b5aa765d61d8327deb882cf99', 'user'),
(4, 'jago@gmail.com', '', '123ilu', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `data_ktp`
--

CREATE TABLE `data_ktp` (
  `id` int(11) NOT NULL,
  `nik` int(17) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kel` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kab_kota` varchar(255) NOT NULL,
  `provinsi` enum('Aceh','Sumatera Utara','Lampung','Jakarta','Jawa Timur','Jawa Barat') NOT NULL,
  `agama` enum('Islam','Katolik','Protestan','Budha','Hindu','Konghucu') DEFAULT NULL,
  `status` enum('Belum Kawin','Kawin','Cerai') DEFAULT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','PNS','Peg Swasta','Pelajar/Mahasiswa','Seniman','Wiraswasta') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ktp`
--

INSERT INTO `data_ktp` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kel`, `alamat`, `kab_kota`, `provinsi`, `agama`, `status`, `pekerjaan`) VALUES
(4, 101, 'jojo', 'mojokerto', '2000-01-01', 'laki-laki', 'jalan lintas', 'mojokerto', 'Jawa Timur', 'Budha', 'Kawin', 'PNS'),
(6, 809, 'ayam geprek', 'Medan', '0000-00-00', 'laki-laki', 'toko', 'sby', 'Jawa Timur', 'Islam', 'Kawin', 'Peg Swasta'),
(8, 987, 'ayam pecak', '', '0000-00-00', 'laki-laki', 'binjai', '', 'Aceh', 'Konghucu', 'Belum Kawin', 'Seniman'),
(9, 9090, 'ayam bakar', 'tempat_lahir', '0000-00-00', '', 'jalan satria', 'kab_kota', '', 'Budha', '', 'PNS'),
(10, 9091, 'ayam tepung krispi', 'tempat_lahir', '0000-00-00', '', 'suzuya', 'kab_kota', '', 'Konghucu', '', ''),
(2, 123412345, 'Nuge', 'Medan', '0000-00-00', '', 'Jalan Ikan Senangin no.14A Binjaii', 'Binjaii', 'Sumatera Utara', 'Islam', 'Kawin', 'PNS'),
(7, 123451234, 'ayam penyet', '', '0000-00-00', 'laki-laki', 'toko', '', 'Aceh', '', NULL, 'Seniman'),
(1, 2147483647, 'Putri', 'Binjai', '1996-06-02', 'perempuan', 'Jalan Ikan Senangin no.14A Binjai', 'Binjai', 'Sumatera Utara', 'Islam', 'Belum Kawin', 'Belum/Tidak Bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(12) NOT NULL,
  `user_role` enum('User','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_ktp`
--
ALTER TABLE `data_ktp`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_ktp`
--
ALTER TABLE `data_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
