-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 05:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_loginosis`
--

CREATE TABLE `tb_loginosis` (
  `nisn` int(10) DEFAULT NULL,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pw` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jenis_murid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_loginosis`
--

INSERT INTO `tb_loginosis` (`nisn`, `nama`, `pw`, `jenis_murid`) VALUES
(987654321, 'Muhammad Rasya Saputra', '06XIPPLG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_loginsiswa`
--

CREATE TABLE `tb_loginsiswa` (
  `nisn` int(10) DEFAULT NULL,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pw` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jn` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_point`
--

CREATE TABLE `tb_point` (
  `no` int(11) NOT NULL,
  `permasalahan` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `point` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nisn` int(10) NOT NULL,
  `nama` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pw` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jenis_murid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nisn`, `nama`, `pw`, `jenis_murid`) VALUES
(987654321, 'Muhammad Rasya Saputra', '$2y$10$45Pl0QR090Iqfid7t8kuHuX.XkHAe.a6xdyBQvDG8zwbdCFWBlTtO', 0),
(1234567890, 'Dewa Abdul Malik Rafli', '$2y$10$30TlDIHvEkt2tBaI1z2bNu7c/H7mtbhRjia5RsUHdTHVMeYVZMsyK', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
