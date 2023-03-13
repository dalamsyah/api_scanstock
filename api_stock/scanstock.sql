-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 02:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scanstock`
--

-- --------------------------------------------------------

--
-- Table structure for table `stokcount`
--

CREATE TABLE `stokcount` (
  `idstokcount` bigint(20) UNSIGNED NOT NULL,
  `item_code` varchar(30) NOT NULL,
  `sn` varchar(30) NOT NULL,
  `sn2` varchar(30) NOT NULL,
  `scan` int(10) UNSIGNED DEFAULT NULL,
  `scan_datetime` datetime DEFAULT NULL,
  `loc` varchar(10) DEFAULT NULL,
  `zone` varchar(10) DEFAULT NULL,
  `area` varchar(10) DEFAULT NULL,
  `rack` varchar(10) DEFAULT NULL,
  `bin` varchar(10) DEFAULT NULL,
  `loc_scan` varchar(10) DEFAULT NULL,
  `zone_scan` varchar(10) DEFAULT NULL,
  `area_scan` varchar(10) DEFAULT NULL,
  `rack_scan` varchar(10) DEFAULT NULL,
  `bin_scan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stokcount`
--

INSERT INTO `stokcount` (`idstokcount`, `item_code`, `sn`, `sn2`, `scan`, `scan_datetime`, `loc`, `zone`, `area`, `rack`, `bin`, `loc_scan`, `zone_scan`, `area_scan`, `rack_scan`, `bin_scan`) VALUES
(1, 'itemcode1', 'bb123', 'aa', 2, '2023-03-07 16:47:58', 'WH2', 'A', 'B', 'C', 'D', NULL, NULL, NULL, NULL, NULL),
(2, 'itemcode2', 'aa256', 'aa', 2, '2023-03-07 16:47:58', 'WH2', 'A', 'B', 'C', 'D', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stokcount`
--
ALTER TABLE `stokcount`
  ADD PRIMARY KEY (`idstokcount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stokcount`
--
ALTER TABLE `stokcount`
  MODIFY `idstokcount` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
