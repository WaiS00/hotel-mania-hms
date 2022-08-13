-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2022 at 05:10 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_mania`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendancedb`
--

CREATE TABLE `attendancedb` (
  `attendanceId` int(11) NOT NULL,
  `clockinDateTime` datetime NOT NULL,
  `clockoutDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookingdb`
--

CREATE TABLE `bookingdb` (
  `bookingId` int(11) NOT NULL,
  `checkInDateTime` datetime NOT NULL,
  `checkOutDateTime` datetime NOT NULL,
  `bookingTotalPrice` double NOT NULL,
  `numberOfGuest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomdb`
--

CREATE TABLE `roomdb` (
  `roomId` int(11) NOT NULL,
  `roomType` enum('Normal','Deluxe','Executive') NOT NULL,
  `roomRate` double NOT NULL,
  `roomDetails` varchar(255) NOT NULL,
  `roomFloor` int(11) NOT NULL,
  `roomAvailability` enum('available','unavailable') NOT NULL,
  `roomNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userid` int(11) NOT NULL,
  `fullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telno` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `country` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `icNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='user database';

-- --------------------------------------------------------

--
-- Table structure for table `workerdb`
--

CREATE TABLE `workerdb` (
  `workerId` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `jobStatus` enum('Full Time','Part Time','Intern') NOT NULL,
  `workPosition` enum('Cleaning Workers','Managers','Front Desk Workers') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancedb`
--
ALTER TABLE `attendancedb`
  ADD PRIMARY KEY (`attendanceId`);

--
-- Indexes for table `bookingdb`
--
ALTER TABLE `bookingdb`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `roomdb`
--
ALTER TABLE `roomdb`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `workerdb`
--
ALTER TABLE `workerdb`
  ADD PRIMARY KEY (`workerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancedb`
--
ALTER TABLE `attendancedb`
  MODIFY `attendanceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingdb`
--
ALTER TABLE `bookingdb`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomdb`
--
ALTER TABLE `roomdb`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workerdb`
--
ALTER TABLE `workerdb`
  MODIFY `workerId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
