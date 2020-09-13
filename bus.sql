-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 01:25 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bustiming`
--

CREATE TABLE `bustiming` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `fare` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bustiming`
--

INSERT INTO `bustiming` (`id`, `name`, `source`, `destination`, `time`, `fare`) VALUES
(2, 'DEL2AJM', 'Delhi', 'Ajmer', '2020-01-24 00:00:00', '1800'),
(3, 'DEL2DDN', 'Delhi', 'Dehradun', '2020-03-03 07:00:00', '700'),
(4, 'DEL2DHRM', 'Delhi', 'Dharamshala', '2020-01-24 00:00:00', '2000'),
(5, 'DEL2JAL', 'Delhi', 'Jalandhar', '2020-01-09 09:00:00', '900'),
(6, 'DEL2MTH', 'Delhi', 'Mathura', '2020-01-23 22:30:00', '800'),
(7, 'DEL2VRD', 'delhi', 'vrindavan', '2020-00-00 00:00:00', '1000'),
(9, 'DEL2MUM', 'Delhi', 'Mumbai', '2001-01-01 01:01:00', '2500'),
(10, 'DEL2MUM', 'Delhi', 'Mumbai', '2002-02-02 02:02:00', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `lastname`, `email`, `password`) VALUES
(2, 'kajdfka', 'kahdfhk', 'khadbvfkh@ksbdkhfb.om', 'akhfkhavfd'),
(3, 'Shaurya', 'Verma', 'shaurya@gmail.com', 'abc'),
(4, 'hello', 'hello', 'hello@hello.com', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bustiming`
--
ALTER TABLE `bustiming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bustiming`
--
ALTER TABLE `bustiming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
