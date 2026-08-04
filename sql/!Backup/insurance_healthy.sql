-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 09:11 AM
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
-- Table structure for table `insurance_healthy`
--

CREATE TABLE `insurance_healthy` (
  `insurance_healthy_id` int(11) NOT NULL,
  `insurance_healthy_image` varchar(255) NOT NULL,
  `type_insurance_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `insurance_healthy_text1` varchar(255) NOT NULL,
  `insurance_healthy_text2` varchar(255) NOT NULL,
  `insurance_healthy_text3` varchar(255) NOT NULL,
  `insurance_healthy_text4` varchar(255) NOT NULL,
  `insurance_healthy_text1_1` varchar(255) NOT NULL,
  `insurance_healthy_text1_2` varchar(255) NOT NULL,
  `insurance_healthy_text1_3` varchar(255) NOT NULL,
  `insurance_healthy_text1_4` varchar(255) NOT NULL,
  `insurance_healthy_text2_1` varchar(255) NOT NULL,
  `insurance_healthy_text2_2` varchar(255) NOT NULL,
  `insurance_healthy_text3_1` varchar(255) NOT NULL,
  `insurance_healthy_text3_2` varchar(255) NOT NULL,
  `insurance_healthy_text3_3` varchar(255) NOT NULL,
  `insurance_healthy_text4_1` varchar(255) NOT NULL,
  `insurance_healthy_text4_2` varchar(255) NOT NULL,
  `insurance_healthy_text4_3` varchar(255) NOT NULL,
  `insurance_healthy_text4_4` varchar(255) NOT NULL,
  `insurance_healthy_age_begin` int(11) NOT NULL,
  `insurance_healthy_age_end` int(11) NOT NULL,
  `insurance_healthy_gender` enum('ชาย','หญิง') NOT NULL,
  `insurance_healthy_name` varchar(255) NOT NULL,
  `insurance_healthy_premium_price` float(10,2) NOT NULL,
  `insurance_healthy_premium_start_price` float(10,2) NOT NULL,
  `insurance_healthy_special_cover` text NOT NULL,
  `insurance_healthy_medical` varchar(255) NOT NULL,
  `insurance_healthy_medical_after_return_to_thai` varchar(255) NOT NULL,
  `insurance_healthy_emergency` varchar(255) NOT NULL,
  `insurance_healthy_daily_compensation` varchar(255) NOT NULL,
  `insurance_healthy_case_death` varchar(255) NOT NULL,
  `insurance_healthy_cost_of_repatriating` varchar(255) NOT NULL,
  `insurance_healthy_flight_delay` varchar(255) NOT NULL,
  `insurance_healthy_trip_cancel` varchar(255) NOT NULL,
  `insurance_healthy_mising_a_flight` varchar(255) NOT NULL,
  `insurance_healthy_lost_items` varchar(255) NOT NULL,
  `insurance_healthy_stolen_cash` varchar(255) NOT NULL,
  `insurance_healthy_travel_document` varchar(255) NOT NULL,
  `insurance_healthy_pc_notebook` varchar(255) NOT NULL,
  `insurance_healthy_datetime_create` datetime NOT NULL,
  `insurance_healthy_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_healthy`
--

INSERT INTO `insurance_healthy` (`insurance_healthy_id`, `insurance_healthy_image`, `type_insurance_id`, `insurance_company_id`, `insurance_healthy_text1`, `insurance_healthy_text2`, `insurance_healthy_text3`, `insurance_healthy_text4`, `insurance_healthy_text1_1`, `insurance_healthy_text1_2`, `insurance_healthy_text1_3`, `insurance_healthy_text1_4`, `insurance_healthy_text2_1`, `insurance_healthy_text2_2`, `insurance_healthy_text3_1`, `insurance_healthy_text3_2`, `insurance_healthy_text3_3`, `insurance_healthy_text4_1`, `insurance_healthy_text4_2`, `insurance_healthy_text4_3`, `insurance_healthy_text4_4`, `insurance_healthy_age_begin`, `insurance_healthy_age_end`, `insurance_healthy_gender`, `insurance_healthy_name`, `insurance_healthy_premium_price`, `insurance_healthy_premium_start_price`, `insurance_healthy_special_cover`, `insurance_healthy_medical`, `insurance_healthy_medical_after_return_to_thai`, `insurance_healthy_emergency`, `insurance_healthy_daily_compensation`, `insurance_healthy_case_death`, `insurance_healthy_cost_of_repatriating`, `insurance_healthy_flight_delay`, `insurance_healthy_trip_cancel`, `insurance_healthy_mising_a_flight`, `insurance_healthy_lost_items`, `insurance_healthy_stolen_cash`, `insurance_healthy_travel_document`, `insurance_healthy_pc_notebook`, `insurance_healthy_datetime_create`, `insurance_healthy_datetime_update`) VALUES
(1, '20230106090108.png', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 20, 'ชาย', 'เมืองไทยประกันชีวิต', 500000.00, 10000.00, 'test', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2022-12-09 17:10:48', '2023-01-06 09:01:08'),
(2, '20230106090359.png', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 20, 'ชาย', 'ประกันสุขภาพชั้น 1', 50000.00, 1000.00, 'No', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '20000', '2023-01-06 09:03:59', '2023-01-06 09:03:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance_healthy`
--
ALTER TABLE `insurance_healthy`
  ADD PRIMARY KEY (`insurance_healthy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance_healthy`
--
ALTER TABLE `insurance_healthy`
  MODIFY `insurance_healthy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
