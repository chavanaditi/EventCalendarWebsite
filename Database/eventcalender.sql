-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 11:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventcalender`
--

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `cr_username` varchar(30) NOT NULL,
  `cr_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`cr_username`, `cr_password`) VALUES
('aditi', 'aditi'),
('rutuja', 'rutuja');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `know_more` varchar(30) NOT NULL,
  `register` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_name`, `date`, `group_name`, `know_more`, `register`) VALUES
(13, 'Script orientation', '2020-02-04', 'Script', 'www.tsg.com', 'www.tsg.com'),
(14, 'Script recruitment', '2020-02-11', 'Script', 'www.tsg.com', 'www.tsg.com'),
(15, 'SWE orientation', '2020-02-05', 'SWE', 'www.swe.org', 'www.swe.org'),
(16, 'SWE recruitment', '2020-02-12', 'SWE', 'www.swe.org', 'www.swe.org'),
(18, 'P&G orientation', '2020-01-17', 'P&G', 'www.png.com', 'www.png.com'),
(19, 'P&G orientation', '2020-01-25', 'PG', 'www.png.com', 'www.png.com'),
(20, 'Bussiness Model Canvas', '2020-01-08', 'E-cell', 'www.ecellmitwpu.com', 'www.ecellmitwpu.com'),
(21, 'Pronite', '2020-01-25', 'Mit Cultural', 'www.aarohan.com', 'www.aarohan.com'),
(22, 'mit cultural', '2020-01-31', 'Mit Cultural', 'www.mc.com', 'www.mc.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`cr_username`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
