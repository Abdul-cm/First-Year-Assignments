-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2021 at 07:48 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job180068_mybookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_card_no` varchar(200) NOT NULL,
  `pay_month` int(11) NOT NULL,
  `pay_year` int(11) NOT NULL,
  `pay_cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_card_no`, `pay_month`, `pay_year`, `pay_cvv`) VALUES
(1, '4101111526', 2, 2018, 123),
(2, '4111111111', 1, 2018, 123),
(3, '4111111111', 1, 2018, 123),
(4, '4111111111', 1, 2018, 123),
(5, '4111111111111111', 1, 2018, 123),
(6, '4555236532326623', 10, 2028, 123),
(7, '', 1, 2018, 0),
(8, '9876543219876543', 1, 2018, 123),
(9, '4111165626666966', 1, 2018, 123),
(10, '9887852556215454', 1, 2018, 123),
(11, '9887852556215454', 1, 2018, 123),
(12, '9876532585655595', 10, 2018, 125),
(13, '9852552521211111', 1, 2018, 215),
(14, '4556566356653232', 12, 2018, 556);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
