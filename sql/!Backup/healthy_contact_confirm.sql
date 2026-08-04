-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 04 ม.ค. 2023 เมื่อ 02:18 PM
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
-- โครงสร้างตาราง `healthy_contact_confirm`
--

CREATE TABLE `healthy_contact_confirm` (
  `healthy_contact_confirm_id` int(11) NOT NULL,
  `healthy_contact_confirm_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_call` datetime NOT NULL,
  `healthy_contact_confirm_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `healthy_contact_confirm`
--
ALTER TABLE `healthy_contact_confirm`
  ADD PRIMARY KEY (`healthy_contact_confirm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `healthy_contact_confirm`
--
ALTER TABLE `healthy_contact_confirm`
  MODIFY `healthy_contact_confirm_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
