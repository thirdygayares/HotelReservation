-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 01:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `NAME`, `EMAIL`, `Phone`, `Message`) VALUES
(1, 'John Doe', 'johndoe@example.com', '1234567890', 'Updated message'),
(4, 'Thirdy Gayares', 'gayaresthird@gmail.com', '09627477717', 'Are you hiring'),
(7, 'thirdy gayares', 'graphicsthirdy@gmail.com', '+639617477717', 'sample'),
(8, 'Jose Brosula Gayares III', 'jgayares.a12034879@umak.edu.ph', '+639617477717', 'Example 3');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ID` int(11) NOT NULL,
  `ROOMTYPE` varchar(255) DEFAULT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `CONTACTNUMBER` varchar(255) DEFAULT NULL,
  `DATE` varchar(255) DEFAULT NULL,
  `TIME` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ID`, `ROOMTYPE`, `NAME`, `EMAIL`, `CONTACTNUMBER`, `DATE`, `TIME`) VALUES
(1, 'Deluxe Twin Room', 'John Carl Loreto', 'johncarl@gmail.com', '09627477717', '05/17/2023', '04:20 PM'),
(16, 'Deluxe Twin Room', 'Jose Brosula Gayares III', 'jgayares.a12034879@umak.edu.ph', '+639617477717', '2023-05-22', '16:12'),
(17, 'Manila Bay Suite', 'Nora Aunor', 'nora@gmail.com', '09300232323', '2023-05-24', '18:54');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `imageSrc` varchar(255) DEFAULT NULL,
  `typeBed` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`ID`, `title`, `imageSrc`, `typeBed`, `price`) VALUES
(1, 'Deluxe Twin Room', 'room1.png', '2 Full beds', 2500),
(2, 'Junior Suite', 'room2.png', '1 queen bed', 1500),
(3, 'Deluxe King Room', 'room3.png', '1 king bed', 1600),
(4, 'Premium King Suite', 'room4.png', '1 King bed', 1750),
(5, 'Premium Double Suite', 'room5.png', '2 Full beds', 2700),
(6, 'Executive King Suite', 'room6.png', '1 King Bed', 1900),
(7, 'Executive Double Suite', 'room7.png', '2 Full beds', 2900),
(8, 'Grand Deluxe King Room', 'room8.png', '1 king bed', 2800),
(9, 'Manila Bay Suite', 'room9.png', '2 Full beds', 3500),
(10, 'Accessible King', 'room10.png', '1 queen bed', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
