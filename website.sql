-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 06:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocate`
--

CREATE TABLE `advocate` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocate`
--

INSERT INTO `advocate` (`id`, `username`, `password`) VALUES
(1, 'vanshika', 'demo1'),
(3, 'dhruvanshi', 'demo2'),
(5, 'priyal', 'demo3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `adharno` int(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `adharno`, `status`) VALUES
(1, 'Vanshika', '12345', 1234567891, 0),
(2, 'Suyash', '123456789', 2147483647, 1),
(3, 'abc', '123456789', 1234567892, 2),
(4, 'Ruchik', '123456789', 1234567890, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `advocate` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `area`, `category`, `advocate`, `date`, `status`) VALUES
(1, 'Vanshika', 'Maninagar', 'Criminal', 0, '2021-06-17', 1),
(2, 'Vanshika', 'Maninagar', 'Criminal', 0, '2021-06-17', 1),
(3, 'Vanshika', 'Maninagar', 'Criminal', 0, '2021-06-17', 0),
(7, 'Vanshika', 'Gurukul', 'Accident', 0, '2021-06-25', 0),
(8, 'Vanshika', 'Ghatlodia', 'Accident', 0, '2021-06-12', 0),
(51, 'Ruchik', 'Ghatlodia', 'Accident', 0, '2021-08-01', 1),
(52, 'Ruchik', 'Ghatlodia', 'Accident', 0, '2021-08-01', 2),
(53, 'Ruchik', 'Ghatlodia', 'Accident', 0, '2021-08-01', 1),
(54, 'Ruchik', 'Maninagar', 'Criminal', 0, '2021-08-21', 2),
(55, 'Vanshika', 'Maninagar', 'Accident', 0, '2021-06-26', 0),
(56, 'abc', 'Ghatlodia', 'Divorce', 0, '2021-06-25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocate`
--
ALTER TABLE `advocate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocate`
--
ALTER TABLE `advocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
