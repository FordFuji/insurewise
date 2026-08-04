-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:26 AM
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
-- Table structure for table `contact_transportation`
--

CREATE TABLE `contact_transportation` (
  `contact_transportation_id` int(11) NOT NULL,
  `insurance_transportation_id` int(11) NOT NULL,
  `contact_transportation_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_transportation_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_transportation_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_transportation_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_transportation_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_transportation`
--

INSERT INTO `contact_transportation` (`contact_transportation_id`, `insurance_transportation_id`, `contact_transportation_name_surname`, `contact_transportation_telephone`, `contact_transportation_email`, `contact_transportation_call`, `contact_transportation_datetime_create`) VALUES
(1, 1, 'Ford', '0990946010', 'sitiponr@aa.com', 'fdsf', '2023-03-03 13:34:44'),
(2, 1, 'Ford', '0990943010', 'sitiporn@aa.com', 'Test', '2023-03-03 13:35:43'),
(3, 6, 'AA', '0923216549', 'aa@aa.com', 'abc', '2023-03-03 14:18:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_transportation`
--
ALTER TABLE `contact_transportation`
  ADD PRIMARY KEY (`contact_transportation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_transportation`
--
ALTER TABLE `contact_transportation`
  MODIFY `contact_transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
