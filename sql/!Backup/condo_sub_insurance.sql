-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 11 ม.ค. 2023 เมื่อ 01:38 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.26-MariaDB-log
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
-- โครงสร้างตาราง `condo_sub_insurance`
--

CREATE TABLE `condo_sub_insurance` (
  `condo_sub_insurance_id` int(11) NOT NULL,
  `condo_sub_insurance_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `condo_sub_insurance_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `condo_sub_insurance_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `condo_sub_insurance_premium_price` int(11) NOT NULL,
  `condo_sub_insurance_accident` int(11) NOT NULL,
  `condo_sub_insurance_sick` int(11) NOT NULL,
  `condo_sub_insurance_sick_pet` int(11) NOT NULL,
  `condo_sub_insurance_foreign_country` int(11) NOT NULL,
  `condo_sub_insurance_sick_external` int(11) NOT NULL,
  `condo_sub_insurance_die_pet` int(11) NOT NULL,
  `condo_sub_insurance_money_external_from_pet` int(11) NOT NULL,
  `condo_sub_insurance_datetime_create` datetime NOT NULL,
  `condo_sub_insurance_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condo_sub_insurance`
--
ALTER TABLE `condo_sub_insurance`
  ADD PRIMARY KEY (`condo_sub_insurance_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condo_sub_insurance`
--
ALTER TABLE `condo_sub_insurance`
  MODIFY `condo_sub_insurance_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
