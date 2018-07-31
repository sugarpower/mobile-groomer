-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8888
-- Generation Time: May 05, 2018 at 04:23 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_groomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(40) NOT NULL,
  `userId` int(40) NOT NULL,
  `dogId` int(40) NOT NULL,
  `timeSlot` text NOT NULL,
  `groomingType` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userId`, `dogId`, `timeSlot`, `groomingType`, `status`, `timestamp`) VALUES
(1, 1, 1, '6:00 PM - 7:30 PM', 'delux', 1, '2018-05-05 04:13:30'),
(2, 2, 2, '3:00 PM - 4:30 PM', 'wash', 1, '2018-05-05 04:15:30'),
(3, 2, 2, '9:00 AM - 10:30 AM', 'wash', 1, '2018-05-05 04:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `dog_details`
--

CREATE TABLE `dog_details` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dog_name` text NOT NULL,
  `dog_breed` text NOT NULL,
  `dog_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dog_details`
--

INSERT INTO `dog_details` (`id`, `userId`, `dog_name`, `dog_breed`, `dog_dob`) VALUES
(1, 1, 'MinMin', 'Husky', '1993-12-09'),
(2, 2, 'Minmin', 'Samoye', '1993-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobile_number` varchar(9) NOT NULL,
  `home_number` varchar(9) NOT NULL,
  `work_number` varchar(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `mobile_number`, `home_number`, `work_number`, `timestamp`) VALUES
(1, 'Max', '305/93 Flemington Rd', 'zhenyuan.ye@hotmail.com', '202cb962ac59075b964b07152d234b70', '47-269-24', '', '', '2018-05-05 04:13:11'),
(2, 'Savan', '305/93 Flemington Rd', 'savan@gmail.com', '202cb962ac59075b964b07152d234b70', '47-269-24', '', '', '2018-05-05 04:15:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog_details`
--
ALTER TABLE `dog_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dog_details`
--
ALTER TABLE `dog_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
