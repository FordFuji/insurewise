-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 01:20 PM
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
-- Table structure for table `transportation_faq`
--

CREATE TABLE `transportation_faq` (
  `transportation_faq_id` int(11) NOT NULL,
  `transportation_faq_question` varchar(255) NOT NULL,
  `transportation_faq_answer` text NOT NULL,
  `transportation_faq_datetime_create` datetime NOT NULL,
  `transportation_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transportation_faq`
--

INSERT INTO `transportation_faq` (`transportation_faq_id`, `transportation_faq_question`, `transportation_faq_answer`, `transportation_faq_datetime_create`, `transportation_faq_datetime_update`) VALUES
(1, '123', '456', '2022-12-08 13:08:57', '2022-12-08 13:08:57'),
(2, '456', '789', '2022-12-08 13:39:37', '2022-12-08 13:39:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transportation_faq`
--
ALTER TABLE `transportation_faq`
  ADD PRIMARY KEY (`transportation_faq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transportation_faq`
--
ALTER TABLE `transportation_faq`
  MODIFY `transportation_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
