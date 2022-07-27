-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(255) NOT NULL,
  `AName` varchar(30) NOT NULL,
  `AEmail` varchar(255) NOT NULL,
  `APassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `AName`, `AEmail`, `APassword`) VALUES
(1, 'admin', '1201201535@student.mmu.edu.my', 'Asdf@1234');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `DID` int(11) NOT NULL,
  `DImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`DID`, `DImage`) VALUES
(1, '360_F_53453175_hVgYVz0WmvOXPd9CNzaUcwcibiGao3CL.jpg'),
(2, '360_F_92535664_IvFsQeHjBzfE6sD4VHdO8u5OHUSc6yHF.jpg'),
(3, '360_F_386323925_zrx6Y3SM4QdkM2ICGpbs9RbEVJFRxIGm.jpg'),
(4, '39120040-example-grunge-retro-red-isolated-ribbon-stamp.webp');

-- --------------------------------------------------------

--
-- Table structure for table `passcode`
--

CREATE TABLE `passcode` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `AEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` int(255) NOT NULL,
  `PImage` varchar(255) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PDesc` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `PImage`, `PName`, `PDesc`, `Category`) VALUES
(1, '278930681_941451826519632_8838387223552527299_n.jpg', 'Test 1', 'Hi.....', 'col-lg-4 col-md-4 all cny'),
(2, '280260077_510707914113806_2720264296722589217_n.jpg', 'Test 2', 'Hello ....... ', 'col-lg-4 col-md-4 all cny'),
(3, '275460321_312343027548201_3237041231131602689_n.jpg', 'Test 3', 'Welcome.....', 'col-lg-4 col-md-4 all mkf'),
(4, '275700778_5461663953852727_5425294467274926032_n.jpg', 'Test 4', 'Amazing....', 'col-lg-4 col-md-4 all mkf'),
(5, '275460321_312343027548201_3237041231131602689_n.jpg', 'Test 5', 'Alright .......', 'col-lg-4 col-md-4 all mkf'),
(6, '278966470_1162836857793114_6916277092433792418_n.jpg', 'Test 6', 'Erm.......', 'col-lg-4 col-md-4 all cny'),
(7, 'WeChat Image_20220713144542.jpg', 'Test 7', 'Wow.........', 'col-lg-4 col-md-4 all hra');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `SlideID` int(11) NOT NULL,
  `SImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`SlideID`, `SImage`) VALUES
(1, '8552.gif'),
(2, 'Randomness-random-5997130-1280-800.jpg'),
(3, '237-536x354.jpg'),
(4, '5c799c56eb3ce834ad57b632.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `passcode`
--
ALTER TABLE `passcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `CID` (`Category`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`SlideID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passcode`
--
ALTER TABLE `passcode`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `SlideID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
