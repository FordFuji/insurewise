-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2023 at 11:25 AM
-- Server version: 10.4.26-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_insurewise`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_home`
--

CREATE TABLE `contact_home` (
  `contact_home_id` int(11) NOT NULL,
  `insurance_home_id` int(11) NOT NULL,
  `contact_home_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_home`
--
ALTER TABLE `contact_home`
  ADD PRIMARY KEY (`contact_home_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_home`
--
ALTER TABLE `contact_home`
  MODIFY `contact_home_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
