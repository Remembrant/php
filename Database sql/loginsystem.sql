-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 08:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookId` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `timeslot` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookId`, `username`, `email`, `date`, `timeslot`) VALUES
(35, 'Tholinhlanhla', 'mkhonkosi28@gmail.com', '2020-01-16', '09:00AM-09:15AM'),
(36, 'Tholinhlanhla', 'silindokuhlelmapiyeye@gmail.co', '2020-01-16', '09:15AM-09:30AM');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`userid`, `username`, `email`, `password`) VALUES
(3, 'Hactor', 'mkhonkosi28@gmail.com', 'Hactor94');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`userid`, `username`, `address`, `phone`, `age`, `gender`, `email`, `uPass`) VALUES
(13, 'Tholinhlanhla', 'Phola Park 6397', 728108800, '26', 'M', 'mkhonkosi28@gmail.com', 'Nhlanhla.22');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `uPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`userid`, `username`, `uPass`) VALUES
(1, 'katleho', '12345678'),
(2, 'jgfvjgvgj', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `phone` int(12) DEFAULT NULL,
  `sex` char(1) NOT NULL,
  `email` tinytext NOT NULL,
  `pwd` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `uPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`userid`, `username`, `uPass`) VALUES
(1, '', ''),
(2, 'remember', ''),
(3, 'Lindo', ''),
(4, 'Remember Shongwe', ''),
(5, 'MR Shongwe', '12345678'),
(6, 'nhlanhla', 'Nhlanhla.94'),
(7, 'xxx', ''),
(8, 'katleho', '12345678'),
(9, 'hxbdfvfdk', '12345678fkdhbkvhdfbv'),
(10, 'Xolane', ''),
(11, 'Khhhhh', ''),
(12, 'bjgvbjgvgv', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
