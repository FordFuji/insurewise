-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 04:19 AM
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
-- Table structure for table `insurance_business`
--

CREATE TABLE `insurance_business` (
  `insurance_business_id` int(11) NOT NULL,
  `insurance_business_price` int(11) NOT NULL,
  `insurance_business_price_per_year` int(11) NOT NULL,
  `insurance_business_fire` varchar(255) NOT NULL,
  `insurance_business_money_salary` varchar(255) NOT NULL,
  `insurance_business_money` varchar(255) NOT NULL,
  `insurance_business_die` varchar(255) NOT NULL,
  `insurance_business_datetime_create` datetime NOT NULL,
  `insurance_business_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance_business`
--
ALTER TABLE `insurance_business`
  ADD PRIMARY KEY (`insurance_business_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance_business`
--
ALTER TABLE `insurance_business`
  MODIFY `insurance_business_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
