-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 04:22 AM
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
-- Table structure for table `healthy_contact`
--

CREATE TABLE `healthy_contact` (
  `healthy_contact_id` int(11) NOT NULL,
  `insurance_healthy_id` int(11) NOT NULL,
  `healthy_contact_name_surname` varchar(255) NOT NULL,
  `healthy_contact_telephone` varchar(255) NOT NULL,
  `healthy_contact_email` varchar(255) NOT NULL,
  `healthy_contact_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `healthy_contact`
--
ALTER TABLE `healthy_contact`
  ADD PRIMARY KEY (`healthy_contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `healthy_contact`
--
ALTER TABLE `healthy_contact`
  MODIFY `healthy_contact_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
