-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 08:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurewise`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_contact_confirm`
--

CREATE TABLE `car_contact_confirm` (
  `car_contact_confirm_id` int(11) NOT NULL,
  `car_contact_confirm_name_surname` varchar(255) NOT NULL,
  `car_contact_confirm_telephone` varchar(255) NOT NULL,
  `car_contact_confirm_email` varchar(255) NOT NULL,
  `car_contact_confirm_call` varchar(255) NOT NULL,
  `car_contact_confirm_datetime_create` datetime NOT NULL,
  `car_contact_confirm_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_contact_confirm`
--
ALTER TABLE `car_contact_confirm`
  ADD PRIMARY KEY (`car_contact_confirm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_contact_confirm`
--
ALTER TABLE `car_contact_confirm`
  MODIFY `car_contact_confirm_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
