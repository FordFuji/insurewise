-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 10:17 AM
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
-- Table structure for table `condo_pdf`
--

CREATE TABLE `condo_pdf` (
  `prb_pdf_id` int(11) NOT NULL,
  `prb_pdf_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prb_pdf_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `condo_pdf`
--

INSERT INTO `condo_pdf` (`prb_pdf_id`, `prb_pdf_file`, `prb_pdf_datetime_update`) VALUES
(1, '', '2023-06-14 14:35:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condo_pdf`
--
ALTER TABLE `condo_pdf`
  ADD PRIMARY KEY (`prb_pdf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condo_pdf`
--
ALTER TABLE `condo_pdf`
  MODIFY `prb_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
