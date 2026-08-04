-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 03 ก.พ. 2023 เมื่อ 11:06 AM
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
-- โครงสร้างตาราง `contact_extended`
--

CREATE TABLE `contact_extended` (
  `contact_extended_id` int(11) NOT NULL,
  `insurance_extended_id` int(11) NOT NULL,
  `contact_extended_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_call` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `contact_extended`
--

INSERT INTO `contact_extended` (`contact_extended_id`, `insurance_extended_id`, `contact_extended_name_surname`, `contact_extended_tel`, `contact_extended_email`, `contact_extended_call`, `contact_extended_datetime_create`) VALUES
(1, 1, '1111', '22222', '333@3343.com', '4444', '2023-02-02 15:13:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_extended`
--
ALTER TABLE `contact_extended`
  ADD PRIMARY KEY (`contact_extended_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_extended`
--
ALTER TABLE `contact_extended`
  MODIFY `contact_extended_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
