-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 02:40 PM
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
-- Table structure for table `condo_faq`
--

CREATE TABLE `condo_faq` (
  `condo_faq_id` int(11) NOT NULL,
  `condo_faq_question` varchar(255) NOT NULL,
  `condo_faq_answer` text NOT NULL,
  `condo_faq_datetime_create` datetime NOT NULL,
  `condo_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `condo_faq`
--

INSERT INTO `condo_faq` (`condo_faq_id`, `condo_faq_question`, `condo_faq_answer`, `condo_faq_datetime_create`, `condo_faq_datetime_update`) VALUES
(1, '111222', '333444', '2022-12-08 14:35:06', '2022-12-08 14:35:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condo_faq`
--
ALTER TABLE `condo_faq`
  ADD PRIMARY KEY (`condo_faq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condo_faq`
--
ALTER TABLE `condo_faq`
  MODIFY `condo_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
