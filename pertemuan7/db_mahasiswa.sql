-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(1) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `idmhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `paskey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `paskey`, `iduser`) VALUES
(1, 'Alit Pranadita', 'alitpranadita10@gmail.com', 'Tinkkesz', '1234', 'f5f2cfe879401b947de2b702145ba417'),
(2, 'mayun', 'mayuncreativedesign@gmail.com', 'mayuntubet', '123', '82c08770b6b77e777afff084477820a6'),
(5, 'Saka', 'saka@gmail.com', 'Saka 1945', '12345', '5fbcd78c66f547c474a945a45e4e2939');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
