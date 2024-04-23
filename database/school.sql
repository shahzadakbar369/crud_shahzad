-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 03:18 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `sclass`
--

CREATE TABLE `sclass` (
  `Cid` int(10) NOT NULL,
  `Cclass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sclass`
--

INSERT INTO `sclass` (`Cid`, `Cclass`) VALUES
(1, 'CIT'),
(2, 'SEO & SEM'),
(3, 'FOSTER'),
(4, 'AKHUWAT');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `S_id` int(5) NOT NULL,
  `S_Name` varchar(255) NOT NULL,
  `S_FName` varchar(255) NOT NULL,
  `S_Class` varchar(255) NOT NULL,
  `S_rNO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`S_id`, `S_Name`, `S_FName`, `S_Class`, `S_rNO`) VALUES
(1, 'Shahzad', 'Akbar', '3', '00001'),
(5, 'Ehsaan', 'TestingUpdate', '3', '000055'),
(11, 'Testing Name', 'Testing Father Name', '2', '0000000002'),
(12, 'Testing New Record', 'Tester Father Name', '1', '00002'),
(13, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sclass`
--
ALTER TABLE `sclass`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`S_id`),
  ADD UNIQUE KEY `S_rNO` (`S_rNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sclass`
--
ALTER TABLE `sclass`
  MODIFY `Cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `S_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
