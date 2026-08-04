-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 02:54 AM
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
-- Table structure for table `compulsory_faq`
--

CREATE TABLE `compulsory_faq` (
  `compulsory_faq_id` int(11) NOT NULL,
  `compulsory_faq_question` varchar(255) NOT NULL,
  `compulsory_faq_answer` text NOT NULL,
  `compulsory_faq_datetime_create` datetime NOT NULL,
  `compulsory_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compulsory_faq`
--

INSERT INTO `compulsory_faq` (`compulsory_faq_id`, `compulsory_faq_question`, `compulsory_faq_answer`, `compulsory_faq_datetime_create`, `compulsory_faq_datetime_update`) VALUES
(1, '123', '456', '2022-12-08 13:08:57', '2022-12-08 13:08:57'),
(2, '456', '789', '2022-12-08 13:39:37', '2022-12-08 13:39:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compulsory_faq`
--
ALTER TABLE `compulsory_faq`
  ADD PRIMARY KEY (`compulsory_faq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compulsory_faq`
--
ALTER TABLE `compulsory_faq`
  MODIFY `compulsory_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
