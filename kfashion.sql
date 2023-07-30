-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2023 at 01:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `clients_data`
--

CREATE TABLE `clients_data` (
  `clientID` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_data`
--

INSERT INTO `clients_data` (`clientID`, `fullname`, `address`, `email`, `gender`, `date`) VALUES
(1, 'Joshua Isaac', 'No. 7 Mopol Street Mararaba', 'kunlex23@gmail.com', 'Male', '2023-07-21 00:04:14'),
(2, 'Joshua Bless', 'No. 7 Mopol Street Mararaba', 'Kunlex23@gmail.com', 'Female', '2023-07-21 12:11:22'),
(3, 'Clara Joshua', 'No. 7 Mopol Street Mararaba', 'jcarestech7@gmail.com', 'Female', '2023-07-21 16:57:20'),
(4, 'Light Joshua', 'No. 7 Mopol Street Mararaba', 'jcarestech7@gmail.com', 'Male', '2023-07-21 18:10:19'),
(5, 'Joy Michael', 'gwarimpa', 'jujdjfoho@hvjwlblf', 'Female', '2023-07-23 12:18:01'),
(6, 'Habeeb', 'ibadan', 'jfbfbi@s', 'Male', '2023-07-26 18:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `workID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `style` varchar(50) NOT NULL,
  `measurement` varchar(50) NOT NULL,
  `sewing` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delivery_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `shoulder` varchar(50) NOT NULL,
  `StatusC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`workID`, `fullname`, `style`, `measurement`, `sewing`, `date`, `delivery_date`, `status`, `contact`, `shoulder`, `StatusC`) VALUES
(1, 'Joshua Isaac', 'shirt', 'Gory', 'Emaka', '2023-07-26 13:27:14', '11/09/2023', 'in progress', '080777', '8', '0'),
(2, 'Joshua Isaac', 'T-Shirt', 'Gory', 'Emaka', '2023-07-26 13:27:14', '11/09/2023', 'in progress', '080777', '10', '1'),
(3, 'Moses Ade', 'shirt', 'Glory', 'Eunice', '2023-07-26 14:56:32', '1/08/2023', 'in progress', '080777', '8', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_data`
--
ALTER TABLE `clients_data`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`workID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients_data`
--
ALTER TABLE `clients_data`
  MODIFY `clientID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `workID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
