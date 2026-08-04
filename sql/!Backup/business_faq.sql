-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 10:13 AM
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
-- Table structure for table `business_faq`
--

CREATE TABLE `business_faq` (
  `business_faq_id` int(11) NOT NULL,
  `business_faq_question` varchar(255) NOT NULL,
  `business_faq_answer` text NOT NULL,
  `business_faq_datetime_create` datetime NOT NULL,
  `business_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business_faq`
--

INSERT INTO `business_faq` (`business_faq_id`, `business_faq_question`, `business_faq_answer`, `business_faq_datetime_create`, `business_faq_datetime_update`) VALUES
(1, '123', '456', '2022-12-08 13:08:57', '2022-12-08 13:08:57'),
(2, '456', '789', '2022-12-08 13:39:37', '2022-12-08 13:39:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_faq`
--
ALTER TABLE `business_faq`
  ADD PRIMARY KEY (`business_faq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_faq`
--
ALTER TABLE `business_faq`
  MODIFY `business_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
