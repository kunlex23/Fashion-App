-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 02:35 AM
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
-- Database: `kfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `clientID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `measurement` varchar(50) NOT NULL,
  `shoulder` varchar(50) NOT NULL,
  `shoulder2burst` varchar(50) NOT NULL,
  `shoulder2under_burst` varchar(50) NOT NULL,
  `burst` varchar(50) NOT NULL,
  `burst_span` varchar(50) NOT NULL,
  `round_uder_burst` varchar(50) NOT NULL,
  `blouse_lenght` varchar(50) NOT NULL,
  `arm_hole` varchar(50) NOT NULL,
  `blouse_hips` varchar(50) NOT NULL,
  `blouse_waist` varchar(50) NOT NULL,
  `back_half_cut` varchar(50) NOT NULL,
  `neck_depth` varchar(50) NOT NULL,
  `round_sleeve` varchar(50) NOT NULL,
  `sleeve_lenght` varchar(50) NOT NULL,
  `shoulder2knee` varchar(50) NOT NULL,
  `skirt_waist` varchar(50) NOT NULL,
  `skirt_length` varchar(50) NOT NULL,
  `hips` varchar(50) NOT NULL,
  `full_length` varchar(50) NOT NULL,
  `trouser_length` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`clientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
