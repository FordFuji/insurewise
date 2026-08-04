-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2023 at 04:15 PM
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
-- Table structure for table `confirm_cancer`
--

CREATE TABLE `confirm_cancer` (
  `confirm_cancer_id` int(11) NOT NULL,
  `insurance_cancer_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_name_surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_call` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_datetime_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirm_cancer`
--
ALTER TABLE `confirm_cancer`
  ADD PRIMARY KEY (`confirm_cancer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirm_cancer`
--
ALTER TABLE `confirm_cancer`
  MODIFY `confirm_cancer_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
