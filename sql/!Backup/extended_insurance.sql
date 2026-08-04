-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 03:03 PM
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
-- Table structure for table `extended_insurance`
--

CREATE TABLE `extended_insurance` (
  `extended_insurance_id` int(11) NOT NULL,
  `extended_insurance_plan` int(255) NOT NULL,
  `extended_insurance_premium_price` int(11) NOT NULL,
  `extended_insurance_fire` int(11) NOT NULL,
  `extended_insurance_money_salary` int(11) NOT NULL,
  `extended_insurance_maximum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_money` int(11) NOT NULL,
  `extended_insurance_die` int(11) NOT NULL,
  `extended_insurance_datetime_create` datetime NOT NULL,
  `extended_insurance_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extended_insurance`
--
ALTER TABLE `extended_insurance`
  ADD PRIMARY KEY (`extended_insurance_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extended_insurance`
--
ALTER TABLE `extended_insurance`
  MODIFY `extended_insurance_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
