

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `sww`
--


--
-- Table structure for table `class`
--

CREATE TABLE `Room` (
  `RoomNO` int(11) NOT NULL,
  `RoomTyp` varchar(20) NOT NULL,
  `FloorNo` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `Room` (`RoomNO`, `RoomTyp`, `FloorNo`) VALUES
(1, 'a1', 1),
(2, 'a2', 1),
(3, 'a3', 1),
(11, 'b1', 2),
(12, 'b2', 3),
(13, 'b3', 1),
(14, 'c1', 6),
(15, 'c2', 3),
(16, 'c3', 3);


--
-- Indexes for table `class`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`RoomNO`),
  ADD UNIQUE KEY `name` (`RoomTyp`);
  
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `Room`
  MODIFY `RoomNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

