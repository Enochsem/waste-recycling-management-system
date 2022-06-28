-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 11:11 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `businessName` varchar(50) NOT NULL,
  `location` varchar(150) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `businessName`, `location`, `contact`, `email`, `password`) VALUES
(7, 'Enoch Sem', 'kooboo', 'Tema', '0554317909', 'enochsem15@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `carNumber` varchar(10) NOT NULL,
  `carType` varchar(30) NOT NULL,
  `carColor` varchar(10) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `carNumber`, `carType`, `carColor`, `contact`) VALUES
(2, 'camilo', 'GT-123', 'Nissan', 'Blue', '5456465656');

-- --------------------------------------------------------

--
-- Table structure for table `paste`
--

CREATE TABLE `paste` (
  `id` int(10) NOT NULL,
  `amount` int(30) NOT NULL,
  `dirverName` varchar(100) NOT NULL,
  `carNumber` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `waste` varchar(20) NOT NULL,
  `quantity` int(200) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `clientid` int(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paste`
--

INSERT INTO `paste` (`id`, `amount`, `dirverName`, `carNumber`, `price`, `waste`, `quantity`, `status`, `clientid`, `contact`, `location`) VALUES
(4, 2, 'vida', 'GT-12345555', '0554317909', 'polythene', 1, 1, 0, '0554317909', 'Tema');

-- --------------------------------------------------------

--
-- Table structure for table `recyclers`
--

CREATE TABLE `recyclers` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recyclers`
--

INSERT INTO `recyclers` (`id`, `name`, `contact`, `location`) VALUES
(2, 'sem enoch', '0555556655', 'Tema');

-- --------------------------------------------------------

--
-- Table structure for table `waste`
--

CREATE TABLE `waste` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `discription` varchar(200) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `weight` int(100) NOT NULL,
  `quantity` int(200) NOT NULL,
  `imagelink` varchar(100) DEFAULT NULL,
  `supplierName` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waste`
--

INSERT INTO `waste` (`id`, `name`, `category`, `discription`, `price`, `weight`, `quantity`, `imagelink`, `supplierName`, `contact`, `location`) VALUES
(11, 'plastic chair', 'plastic', '', '3', 4, 5, 'uploads/undraw_rocket.svg', 'Enoch Sem', '0554317909', 'Tema'),
(12, 'Elfreda', 'polythene', '', '44', 55, 22, 'uploads/undraw_posting_photo.svg', 'Enoch Sem', '0554317909', 'Tema'),
(13, 'gbfvdcxgb', 'polythene', '', '2', 1, 1, 'uploads/undraw_profile_2.svg', 'admin', '0554317909', 'Tema');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paste`
--
ALTER TABLE `paste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recyclers`
--
ALTER TABLE `recyclers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waste`
--
ALTER TABLE `waste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paste`
--
ALTER TABLE `paste`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recyclers`
--
ALTER TABLE `recyclers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waste`
--
ALTER TABLE `waste`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
