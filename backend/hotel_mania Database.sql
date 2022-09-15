-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2022 at 04:32 PM
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
  `attendanceDateTime` varchar(144) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `attendanceType` enum('Clock-in','Clock-out') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fullName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendancedb`
--

INSERT INTO `attendancedb` (`attendanceId`, `attendanceDateTime`, `attendanceType`, `fullName`) VALUES
(4, '2022-09-05 16:05:06', 'Clock-in', 'manager'),
(5, '2022-09-05 16:09:47', 'Clock-out', 'manager'),
(6, '2022-09-05 16:15:47', 'Clock-out', 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `bookingcartdb`
--

CREATE TABLE `bookingcartdb` (
  `bookingcartId` int(11) NOT NULL,
  `roomType` enum('Normal','Deluxe','Executive') NOT NULL,
  `checkInDate` varchar(144) NOT NULL,
  `checkoutDate` varchar(144) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dayDiff` varchar(144) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookingdb`
--

CREATE TABLE `bookingdb` (
  `bookingId` int(11) NOT NULL,
  `checkInDate` varchar(144) NOT NULL,
  `checkOutDate` varchar(144) NOT NULL,
  `roomType` enum('Normal','Deluxe','Executive') NOT NULL,
  `bookingTotalPrice` double NOT NULL,
  `customerId` int(11) NOT NULL,
  `paymentStatus` enum('paid','unpaid') NOT NULL,
  `bookingcartId` int(11) NOT NULL,
  `roomImage` text NOT NULL,
  `dayDiff` varchar(144) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookingdb`
--

INSERT INTO `bookingdb` (`bookingId`, `checkInDate`, `checkOutDate`, `roomType`, `bookingTotalPrice`, `customerId`, `paymentStatus`, `bookingcartId`, `roomImage`, `dayDiff`, `userId`) VALUES
(41, '2022-09-12', '2022-09-14', 'Executive', 600, 1, 'paid', 100, 'resources/executive-room.png', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customerdb`
--

CREATE TABLE `customerdb` (
  `customerId` int(11) NOT NULL,
  `icNumber` int(144) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customerdb`
--

INSERT INTO `customerdb` (`customerId`, `icNumber`, `userId`) VALUES
(1, 108081312, 2),
(3, 91122, 9);

-- --------------------------------------------------------

--
-- Table structure for table `ratingdb`
--

CREATE TABLE `ratingdb` (
  `ratingId` int(144) NOT NULL,
  `rate` int(144) NOT NULL,
  `review` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ratingdb`
--

INSERT INTO `ratingdb` (`ratingId`, `rate`, `review`, `email`) VALUES
(2, 3, 'asdaasdasdasd', 'chinwaisiong@hotmail.com'),
(3, 5, 'adasdawsdjklas asdh aslj dhasjodasho asod hasjod ashjod ash jdashdjlas hoas kopas hdasiodas as  a as a', 'chinwaisiong@hotmail.com');

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
  `roomNumber` int(11) NOT NULL,
  `roomImage` text NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roomdb`
--

INSERT INTO `roomdb` (`roomId`, `roomType`, `roomRate`, `roomDetails`, `roomFloor`, `roomAvailability`, `roomNumber`, `roomImage`, `customerId`) VALUES
(1, 'Normal', 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 1, 'available', 1, 'resources/normal-room.png', 0),
(2, 'Deluxe', 200, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 2, 'available', 1, 'resources/deluxe-room.png', 0),
(3, 'Executive', 300, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 3, 'available', 1, 'resources/executive-room.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userid` int(11) NOT NULL,
  `fullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telno` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `userType` enum('worker','customer','manager') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='user database';

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`userid`, `fullName`, `telno`, `address`, `email`, `login`, `pass`, `userType`) VALUES
(2, 'Chin Wai Siong', '0122978732', 'No 15, Jalan Desa Bukit Tiara 3, Desa Bukit Tiara, Cheras 56000 Kuala Lumpur', 'chinwaisiong@hotmail.com', 'kok123', '$2y$10$LfzL.gH2orFtXFX6zx/IRuAjmov/zOnro5fE6GEg7LVqfEUzZC4vm', 'customer'),
(9, 'Lol', '021893198', 'sadas', 'legend@gmail.com', 'lol123', '$2y$10$ix0CRgVMxezORM5g76lu6uYOMNCG8xt8adpLJFmwBsvqq7t.e8eh6', 'customer'),
(17, 'worker', '0129876543', 'smtg', 'smtg@gmail.com', 'worker', '$2y$10$fqF08N6J2BUCi8fqoQrqk.siDmkr68pG7U4qaKDIY2ggllufVgG5.', 'worker'),
(18, 'manager', '0123456890', 'smtg smtg', 'smtg1@gmail.com', 'manager', '$2y$10$9rv3Ik9pZKdJWC.x5xFnT.dF82jbSFhcGa229Lgsets0OhZ.5A3YS', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `workerdb`
--

CREATE TABLE `workerdb` (
  `workerId` int(11) NOT NULL,
  `fullName` varchar(144) NOT NULL,
  `jobStatus` enum('Full Time','Part Time','Intern') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userType` enum('worker','customer','manager') NOT NULL,
  `workPosition` enum('Cleaning Workers','Front Desk Workers') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `workerdb`
--

INSERT INTO `workerdb` (`workerId`, `fullName`, `jobStatus`, `userType`, `workPosition`, `userId`) VALUES
(2, 'worker', 'Intern', 'worker', 'Cleaning Workers', 17),
(3, 'manager', 'Full Time', 'manager', 'Front Desk Workers', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancedb`
--
ALTER TABLE `attendancedb`
  ADD PRIMARY KEY (`attendanceId`);

--
-- Indexes for table `bookingcartdb`
--
ALTER TABLE `bookingcartdb`
  ADD PRIMARY KEY (`bookingcartId`),
  ADD KEY `test6` (`customerId`);

--
-- Indexes for table `bookingdb`
--
ALTER TABLE `bookingdb`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `customerdb`
--
ALTER TABLE `customerdb`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `test1` (`userId`);

--
-- Indexes for table `ratingdb`
--
ALTER TABLE `ratingdb`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `roomdb`
--
ALTER TABLE `roomdb`
  ADD PRIMARY KEY (`roomId`),
  ADD KEY `test4` (`customerId`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `workerdb`
--
ALTER TABLE `workerdb`
  ADD PRIMARY KEY (`workerId`),
  ADD KEY `test` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancedb`
--
ALTER TABLE `attendancedb`
  MODIFY `attendanceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookingcartdb`
--
ALTER TABLE `bookingcartdb`
  MODIFY `bookingcartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `bookingdb`
--
ALTER TABLE `bookingdb`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customerdb`
--
ALTER TABLE `customerdb`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratingdb`
--
ALTER TABLE `ratingdb`
  MODIFY `ratingId` int(144) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomdb`
--
ALTER TABLE `roomdb`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `workerdb`
--
ALTER TABLE `workerdb`
  MODIFY `workerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingcartdb`
--
ALTER TABLE `bookingcartdb`
  ADD CONSTRAINT `test6` FOREIGN KEY (`customerId`) REFERENCES `customerdb` (`customerId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `customerdb`
--
ALTER TABLE `customerdb`
  ADD CONSTRAINT `test1` FOREIGN KEY (`userId`) REFERENCES `userdb` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `roomdb`
--
ALTER TABLE `roomdb`
  ADD CONSTRAINT `test4` FOREIGN KEY (`customerId`) REFERENCES `customerdb` (`customerId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `workerdb`
--
ALTER TABLE `workerdb`
  ADD CONSTRAINT `test` FOREIGN KEY (`userId`) REFERENCES `userdb` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
