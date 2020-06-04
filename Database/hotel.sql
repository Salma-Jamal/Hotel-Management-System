-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 02:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `roomNo` int(11) DEFAULT NULL,
  `guestName` varchar(40) DEFAULT NULL,
  `activityType` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`roomNo`, `guestName`, `activityType`) VALUES
(4, 'user', 'swimming'),
(4, 'user', 'tennis'),
(4, 'user', 'massage'),
(4, 'user2', 'tennis'),
(3, 'user3', 'massage'),
(3, 'user3', 'swimming'),
(3, 'user3', 'tennis'),
(3, 'user6', 'massage');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `firstOfDay` int(11) DEFAULT NULL,
  `typeOfRoom` varchar(40) DEFAULT NULL,
  `typeOfServices` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`firstOfDay`, `typeOfRoom`, `typeOfServices`) VALUES
(4, 'single', 'part'),
(8, 'single', 'part'),
(9, 'single', 'part'),
(1, 'single', 'part'),
(4, 'single', 'part'),
(6, 'double', 'full'),
(4, 'single', 'part'),
(5, 'double', 'full'),
(4, 'single', 'part');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `phone` int(11) NOT NULL,
  `country` varchar(220) NOT NULL,
  `arrvial` varchar(220) NOT NULL,
  `departure` varchar(220) NOT NULL,
  `typeroom` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `country`, `arrvial`, `departure`, `typeroom`) VALUES
(9, 'ahmed', 'ahmed@gmail.com', 1123848593, 'Egypt', '2020-05-02', '2020-05-06', 'single'),
(10, 'mohamed', 'mohamed@gmail.com', 1123848333, 'Cairo', '2020-05-15', '2020-05-25', 'double'),
(11, 'ibrahim', 'ibrahim@gmail.com', 2147483647, 'Egypt', '2020-05-25', '2020-05-29', 'double'),
(12, 'reem', 'reem@gmail.com', 1123848593, 'egypt', '2020-07-08', '2020-07-12', 'single'),
(13, 'nada', 'nada@gmail.com', 1123848544, 'egypt', '2020-07-13', '2020-07-14', 'single'),
(14, 'ziad', 'ziad@gmail.com', 1123848522, 'egypt', '2020-07-15', '2020-07-16', 'single'),
(15, 'sarah', 'sarah@gmail.com', 1123848511, 'egypt', '2020-07-17', '2020-07-18', 'double'),
(16, 'farah', 'farah@gmail.com', 1123848566, 'egypt', '2020-07-19', '2020-07-20', 'double'),
(17, 'jack', 'jack@gmail.com', 1123848522, 'egypt', '2020-07-21', '2020-07-22', 'double'),
(18, 'mazin', 'mazin@gmail.com', 112384899, 'egypt', '2020-07-23', '2020-07-24', 'double'),
(19, 'bahir', 'bahir@gmail.com', 11238456, 'egypt', '2020-07-25', '2020-07-26', 'double'),
(20, 'rana', 'rana@gmail.com', 11238400, 'egypt', '2020-07-27', '2020-07-28', 'double');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`ID`, `username`, `email`, `comment`) VALUES
(1, 'user', 'user@gmail.com', 'room service is late'),
(2, 'user2', 'user2@gmail.com', 'the food was cold'),
(3, 'user3', 'user3@gmail.com', 'the AC was broken in my room'),
(9, 'user5', 'user5@gmail.com', 'didnt like the food'),
(10, 'user6', 'user6@gmail.com', 'the ac was broken'),
(11, 'user7', 'user7@gmail.com', 'the ac was stopped suddenly'),
(12, 'user8', 'user8@gmail.com', 'the room service was late'),
(13, 'user9', 'user9@gmail.com', 'the room service didnt clean the bathroom');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`ID`, `username`, `password`, `email`, `phone`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '01123848333'),
(2, 'recep', 'a152e841783914146e4bcd4f39100686', 'recep@gmail.com', '01123848593'),
(3, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'user@gmail.com', '01123848300'),
(9, 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'user2@gmail.com', '01123848593'),
(10, 'user6', 'e10adc3949ba59abbe56e057f20f883e', 'user6@gmail.com', '01123848593'),
(11, 'user7', 'e10adc3949ba59abbe56e057f20f883e', 'user7@gmail.com', '3884'),
(12, 'user8', 'e10adc3949ba59abbe56e057f20f883e', 'user8@gmail.com', '01123848593'),
(13, 'user9', 'e10adc3949ba59abbe56e057f20f883e', 'user9@gmail.com', '4958849323'),
(14, 'user11', 'e10adc3949ba59abbe56e057f20f883e', 'user11@gmail.com', '4958849323');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `roomNo` varchar(30) NOT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `roomType` varchar(30) DEFAULT NULL,
  `rate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`roomNo`, `floor`, `roomType`, `rate`) VALUES
('3', '3', 'double', '3'),
('40', '3', 'double', '3'),
('7', '1', 'single', '4'),
('77', '1', 'double', '5'),
('9', '3', 'double', '1'),
('99', '1', 'single', '4');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `floorNo` varchar(30) DEFAULT NULL,
  `roomNo` varchar(30) DEFAULT NULL,
  `roomTyp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`floorNo`, `roomNo`, `roomTyp`) VALUES
('2', '11', 'single'),
('2', '4', 'double'),
('1', '4', 'single'),
('3', '6', 'double'),
('4', '11', 'single');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`roomNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complains`
--
ALTER TABLE `complains`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `persons` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
