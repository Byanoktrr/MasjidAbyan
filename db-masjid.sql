-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 01:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `waqaf`
--

CREATE TABLE `waqaf` (
  `id` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Nominal` int(10) NOT NULL,
  `MetodePembayaran` varchar(255) NOT NULL,
  `buktiFoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waqaf`
--

INSERT INTO `waqaf` (`id`, `Nama`, `Nominal`, `MetodePembayaran`, `buktiFoto`) VALUES
(2, 'Angger', 20000, 'DANA', 'jpg'),
(3, 'gemoy', 90000, 'OVO', 'jpg'),
(4, 'uwu', 10000, 'OVO', 'jpg'),
(5, 'Clara', 10000, 'DANA', 'jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `waqaf`
--
ALTER TABLE `waqaf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `waqaf`
--
ALTER TABLE `waqaf`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
