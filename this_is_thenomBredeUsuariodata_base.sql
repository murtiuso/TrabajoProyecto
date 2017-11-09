-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 09, 2017 at 02:42 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `this_is_thenomBredeUsuariodata_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `Serialnumbers`
--

CREATE TABLE `Serialnumbers` (
  `id` int(11) NOT NULL,
  `appName` tinytext COLLATE utf16_spanish2_ci NOT NULL,
  `version` int(11) DEFAULT NULL,
  `serialNumber` tinytext COLLATE utf16_spanish2_ci NOT NULL,
  `purchased` tinytext COLLATE utf16_spanish2_ci,
  `validUntil` tinytext COLLATE utf16_spanish2_ci,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Dumping data for table `Serialnumbers`
--

INSERT INTO `Serialnumbers` (`id`, `appName`, `version`, `serialNumber`, `purchased`, `validUntil`, `price`) VALUES
(1, '', 0, '', '', '', 0),
(2, '', 0, '', '', '', 0),
(3, '', 0, '', '', '', 0),
(4, '', 0, '', '', '', 0),
(5, '', 0, '', '', '', 0),
(6, '', 0, '', '', '', 0),
(7, '', 0, '', '', '', 0),
(8, '', 0, '', '', '', 0),
(9, 'lalala', 3, '1234', '8-11-17', NULL, NULL),
(10, '', 0, '', '', '', 0),
(11, '', 0, '', '', '', 0),
(12, '', 0, '', '', '', 0),
(13, '', 0, '', '', '', 0),
(14, 'lalla', 3, '44', '8-11-17', '', 0),
(15, '', 0, '', '', '', 0),
(16, '', 0, '', '', '', 0),
(17, '', 0, '', '', '', 0),
(18, 'MAMP PRO', 4, '445', '2017-11-08', '', 19.5),
(19, '', 0, '', '', '', 0),
(20, 'onePassword', 6, '12345', '2017-11-06', '2017-12-14', 35.6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userName` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userName`, `password`) VALUES
(1, 'muirtiuso', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Serialnumbers`
--
ALTER TABLE `Serialnumbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Serialnumbers`
--
ALTER TABLE `Serialnumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
