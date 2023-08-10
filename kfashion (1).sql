-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2023 at 11:41 PM
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
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_data`
--

INSERT INTO `clients_data` (`clientID`, `fullname`, `contact`, `address`, `email`, `gender`, `date`) VALUES
(11, 'Joshua Isaac', '08064681151', 'No. 7 Mopol Street Mararaba', 'Kunlex23@gmail.com', 'Male', '2023-08-10 12:03:16'),
(12, 'Daniel James', '08132897955', 'no address', 'xyz@gmail.com', 'Male', '2023-08-10 12:04:26');

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
  `shoulder2burst` varchar(50) NOT NULL,
  `shoulder2under_burst` varchar(50) NOT NULL,
  `burst` varchar(50) NOT NULL,
  `burst_span` varchar(50) NOT NULL,
  `round_uder_burst` varchar(50) NOT NULL,
  `blouse_lenght` varchar(50) NOT NULL,
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
  `round_knee` varchar(50) NOT NULL,
  `StatusC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`workID`, `fullname`, `style`, `measurement`, `sewing`, `date`, `delivery_date`, `status`, `contact`, `shoulder`, `shoulder2burst`, `shoulder2under_burst`, `burst`, `burst_span`, `round_uder_burst`, `blouse_lenght`, `blouse_hips`, `blouse_waist`, `back_half_cut`, `neck_depth`, `round_sleeve`, `sleeve_lenght`, `shoulder2knee`, `skirt_waist`, `skirt_length`, `hips`, `full_length`, `round_knee`, `StatusC`) VALUES
(27, 'Daniel James', 'Shirt', 'Linda', 'Glory', '2023-08-10 12:07:14', '2023-08-15', '1', '', '13', '15', '71', 'N/A', 'N/a', 'N/a', '14', '523', '99', '88', '77', '44', '34', '46', '46', '46', '46', '46', '46', 'In Progress'),
(28, 'Daniel James', 'Trouser', 'Linda', 'Lydia', '2023-08-10 12:08:37', '2023-08-15', '1', '', '13', '78', '7', 'h', 'j', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'In Progress'),
(29, 'Joshua Isaac', 'Shirt', 'Grace', 'Lydia', '2023-08-10 12:12:37', '2023-08-16', '0', '', '13', '78', '7', 'h', 'j', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '2', '4', '4', '4', '4', '4', '4', 'Done');

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
  MODIFY `clientID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `workID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
