-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2022 at 12:53 PM
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
(6, '2022-09-05 16:15:47', 'Clock-out', 'worker'),
(9, '2022-10-06 09:22:05', 'Clock-in', 'manager'),
(10, '2022-11-12 06:52:11', 'Clock-in', 'manager');

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
(54, '2022-11-22', '2022-11-30', 'Deluxe', 1600, 1, 'paid', 115, 'resources/deluxe-room.png', '8', 2),
(55, '2022-11-14', '2022-11-15', 'Executive', 300, 1, 'paid', 116, 'resources/executive-room.png', '1', 2),
(59, '2022-11-01', '2022-11-02', 'Normal', 100, 22, 'paid', 120, 'resources/normal-room.png', '1', 49),
(61, '2022-11-01', '2022-11-25', 'Normal', 2400, 41, 'paid', 122, 'resources/normal-room.png', '24', 72);

-- --------------------------------------------------------

--
-- Table structure for table `customerdb`
--

CREATE TABLE `customerdb` (
  `customerId` int(11) NOT NULL,
  `icNumber` bigint(144) NOT NULL,
  `roomNumber` int(20) DEFAULT NULL,
  `checkinDate` date DEFAULT NULL,
  `checkoutDate` date DEFAULT NULL,
  `numberofGuest` int(11) DEFAULT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customerdb`
--

INSERT INTO `customerdb` (`customerId`, `icNumber`, `roomNumber`, `checkinDate`, `checkoutDate`, `numberofGuest`, `userId`) VALUES
(1, 108081312, 18, '2022-10-12', '2022-10-14', 3, 2),
(6, 123456789, NULL, NULL, NULL, NULL, 31),
(41, 10808140123, NULL, NULL, NULL, NULL, 72);

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
(3, 5, 'adasdawsdjklas asdh aslj dhasjodasho asod hasjod ashjod ash jdashdjlas hoas kopas hdasiodas as  a as a', 'chinwaisiong@hotmail.com'),
(4, 4, 'dasfa d asdasd', 'sophia123@gmail.com'),
(7, 4, 'This system is amazing!', 'waisiong144@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `roomdb`
--

CREATE TABLE `roomdb` (
  `roomId` int(11) NOT NULL,
  `roomNumber` int(11) NOT NULL,
  `roomFloor` int(11) NOT NULL,
  `roomAvailability` enum('available','unavailable') NOT NULL,
  `customerId` int(11) DEFAULT NULL,
  `roomType` enum('Normal','Executive','Deluxe') NOT NULL,
  `checkInDate` date DEFAULT NULL,
  `checkOutDate` date DEFAULT NULL,
  `numofGuest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roomdb`
--

INSERT INTO `roomdb` (`roomId`, `roomNumber`, `roomFloor`, `roomAvailability`, `customerId`, `roomType`, `checkInDate`, `checkOutDate`, `numofGuest`) VALUES
(1, 1, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(2, 2, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(3, 3, 1, 'unavailable', 22, 'Normal', '2022-11-01', '2022-11-02', 4),
(4, 4, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(5, 5, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(6, 6, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(7, 7, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(8, 8, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(9, 9, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(10, 10, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(11, 11, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(12, 12, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(13, 13, 1, 'available', NULL, 'Normal', NULL, NULL, NULL),
(14, 14, 1, 'unavailable', 1, 'Executive', '2022-10-17', '2022-10-26', 5),
(15, 15, 1, 'available', NULL, 'Executive', NULL, NULL, NULL),
(16, 16, 1, 'available', NULL, 'Executive', NULL, NULL, NULL),
(17, 17, 1, 'available', NULL, 'Executive', NULL, NULL, NULL),
(18, 18, 1, 'unavailable', 1, 'Executive', '2022-10-12', '2022-10-14', 3),
(19, 19, 1, 'available', NULL, 'Deluxe', NULL, NULL, NULL),
(20, 20, 1, 'available', NULL, 'Deluxe', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypedb`
--

CREATE TABLE `roomtypedb` (
  `roomTypeId` int(11) NOT NULL,
  `roomType` enum('Normal','Executive','Deluxe') NOT NULL,
  `roomRate` double NOT NULL,
  `roomDetails` varchar(255) NOT NULL,
  `roomImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roomtypedb`
--

INSERT INTO `roomtypedb` (`roomTypeId`, `roomType`, `roomRate`, `roomDetails`, `roomImage`) VALUES
(1, 'Normal', 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'resources/normal-room.png'),
(2, 'Deluxe', 200, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'resources/deluxe-room.png'),
(3, 'Executive', 300, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'resources/executive-room.png');

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
(17, 'worker', '0129876543', 'smtg', 'smtg@gmail.com', 'worker', '$2y$10$fqF08N6J2BUCi8fqoQrqk.siDmkr68pG7U4qaKDIY2ggllufVgG5.', 'worker'),
(18, 'manager', '0123456890', 'smtg smtg', 'smtg1@gmail.com', 'manager', '$2y$10$9rv3Ik9pZKdJWC.x5xFnT.dF82jbSFhcGa229Lgsets0OhZ.5A3YS', 'manager'),
(31, 'Sophia ', '94310416', 'smtyg smtg ', 'sophia123@gmail.com', 'sophia', '$2y$10$qaIcrC62mipWB9elBJDKnuMvPTZ45iZ4dXVbOpEufPSi4p.8aI3AO', 'customer'),
(47, 'Harper Lee', '0122978734', 'No 14, Jalan Tidur', 'worker2@gmail.com', 'worker2', '$2y$10$EZ4O/r1sz21udHPmSkE5cuFolZcOYycmNxj9s/Did.9L9qy3X64HW', 'worker'),
(72, 'Chin Wai Siong', '0122978732', 'No1, Jalan something', 'waisiong@gmail.com', 'chinwaisiong', '$2y$10$GgD3f9cRiSjFfTPGcheOOOsRoCgpffZ9sycZC.FO4rHoHtQHAKxO.', 'customer'),
(73, 'worker 3', '0101010', 'sajkdlas', 'worker3@gmail.com', 'worker3', '$2y$10$2CxuvoKf/PgyHJCN9svDwur7nnMLyo6iyvksfkd3kZzj6Jfl6qrGK', 'worker');

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
(3, 'manager', 'Full Time', 'manager', 'Front Desk Workers', 18),
(8, 'Harper Lee', 'Intern', 'worker', 'Cleaning Workers', 47),
(9, 'worker 3', 'Full Time', 'worker', 'Cleaning Workers', 73);

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
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `ratingdb`
--
ALTER TABLE `ratingdb`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `roomdb`
--
ALTER TABLE `roomdb`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `roomtypedb`
--
ALTER TABLE `roomtypedb`
  ADD PRIMARY KEY (`roomTypeId`);

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
  MODIFY `attendanceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookingcartdb`
--
ALTER TABLE `bookingcartdb`
  MODIFY `bookingcartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `bookingdb`
--
ALTER TABLE `bookingdb`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `customerdb`
--
ALTER TABLE `customerdb`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ratingdb`
--
ALTER TABLE `ratingdb`
  MODIFY `ratingId` int(144) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roomdb`
--
ALTER TABLE `roomdb`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roomtypedb`
--
ALTER TABLE `roomtypedb`
  MODIFY `roomTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `workerdb`
--
ALTER TABLE `workerdb`
  MODIFY `workerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingcartdb`
--
ALTER TABLE `bookingcartdb`
  ADD CONSTRAINT `test6` FOREIGN KEY (`customerId`) REFERENCES `customerdb` (`customerId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `workerdb`
--
ALTER TABLE `workerdb`
  ADD CONSTRAINT `test` FOREIGN KEY (`userId`) REFERENCES `userdb` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
