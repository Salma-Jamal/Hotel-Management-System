-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 10:55 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `hotel`
--

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
(1, 'abdallah', 'abdallahgamal055@gmail.com', 1127980448, 'egypt', '2020-03-02', '2020-03-31', 'single'),
(2, 'seif', 'MOHMAEDGAMAL11198@YAHOO.COM', 1127980448, 'eygpt', '22-3-2020', '22-7-2020', 'single'),
(3, 'seif', 'MOHMAEDGAMAL11198@YAHOO.COM', 1127980448, 'eygpt', '22-3-2020', '22-7-2020', 'single'),
(4, 'seif', 'MOHMAEDGAMAL11198@YAHOO.COM', 1127980448, 'eygpt', '22-3-2020', '22-7-2020', 'single'),
(5, 'seif', 'cwqewqe@gmail.com', 1127980448, 'eygpt', '22-3-2020', '22-7-2020', 'single'),
(6, 'seif', 'MOHMAEDGAMAL11198@YAHOO.COM', 1127980448, 'eygpt', '22-3-2020', '22-4-2020', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `id` int(11) NOT NULL,
  `username` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `comment` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`id`, `username`, `email`, `comment`) VALUES
(1, 'ahmed', 'asasasas@YAHOO.COM', 'aaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'ahmed', 'ahmedm@gmail.com', 'abfslpop'),
(3, 'ahmed', 'ahmedm@gmail.com', 'abfslpop'),
(4, 'ahmed', 'ahmedm@gmail.com', 'abfslpop'),
(5, 'ahmed', 'ahmedm@gmail.com', 'hhhkkjkghdf');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(220) NOT NULL,
  `email` text NOT NULL,
  `password` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `id`) VALUES
('ahmed', 'MOHMAEDGAMAL11198@YAHOO.COM', 0, 1),
('ahmed', 'MOHMAEDGAMAL11198@YAHOO.COM', 123456789, 2),
('abdallah', 'abdallahgamaddl055@gmail.com', 1478523698, 3),
('abdallah', 'abdallahgamaddl055@gmail.com', 123456, 4),
('', '', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `srname` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `com`
--
ALTER TABLE `com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
