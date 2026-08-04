-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 03:23 PM
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
-- Table structure for table `extended_faq`
--

CREATE TABLE `extended_faq` (
  `extended_faq_id` int(11) NOT NULL,
  `extended_faq_question` varchar(255) NOT NULL,
  `extended_faq_answer` text NOT NULL,
  `extended_faq_datetime_create` datetime NOT NULL,
  `extended_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extended_faq`
--

INSERT INTO `extended_faq` (`extended_faq_id`, `extended_faq_question`, `extended_faq_answer`, `extended_faq_datetime_create`, `extended_faq_datetime_update`) VALUES
(1, '123', '456', '2022-12-08 13:08:57', '2022-12-08 13:08:57'),
(2, '456', '789', '2022-12-08 13:39:37', '2022-12-08 13:39:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extended_faq`
--
ALTER TABLE `extended_faq`
  ADD PRIMARY KEY (`extended_faq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extended_faq`
--
ALTER TABLE `extended_faq`
  MODIFY `extended_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
