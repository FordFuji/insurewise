-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2023 at 03:41 PM
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
-- Table structure for table `insurance_golf`
--

CREATE TABLE `insurance_golf` (
  `insurance_golf_id` int(11) NOT NULL,
  `insurance_golf_price` int(11) NOT NULL,
  `insurance_golf_reponsible_price` varchar(255) NOT NULL,
  `insurance_golf_bodily_injuly_price` varchar(255) NOT NULL,
  `insurance_golf_equipment_price` varchar(255) NOT NULL,
  `insurance_golf_hol_in_one_price` varchar(255) NOT NULL,
  `insurance_golf_text1` varchar(255) NOT NULL,
  `insurance_golf_text1_1` varchar(255) NOT NULL,
  `insurance_golf_text1_2` varchar(255) NOT NULL,
  `insurance_golf_text1_3` varchar(255) NOT NULL,
  `insurance_golf_text1_4` varchar(255) NOT NULL,
  `insurance_golf_text1_1_1` varchar(255) NOT NULL,
  `insurance_golf_text1_2_1` varchar(255) NOT NULL,
  `insurance_golf_text1_2_2` varchar(255) NOT NULL,
  `insurance_golf_text1_2_3` varchar(255) NOT NULL,
  `insurance_golf_text1_2_4` varchar(255) NOT NULL,
  `insurance_golf_text1_3_1` varchar(255) NOT NULL,
  `insurance_golf_text1_4_1` varchar(255) NOT NULL,
  `insurance_golf_text1_4_2` varchar(255) NOT NULL,
  `insurance_golf_damage_live_body_price` varchar(255) NOT NULL,
  `insurance_golf_die_eye_lost_price` varchar(255) NOT NULL,
  `insurance_golf_disablility_less_52_week_price` varchar(255) NOT NULL,
  `insurance_golf_any_disablility_less_52_week_price` varchar(255) NOT NULL,
  `insurance_golf_accident_price` varchar(255) NOT NULL,
  `insurance_golf_equipment_lost_price` varchar(255) NOT NULL,
  `insurance_golf_hol_in_one_normal_price` varchar(255) NOT NULL,
  `insurance_golf_hol_in_one_other_price` varchar(255) NOT NULL,
  `insurance_golf_datetime_create` datetime NOT NULL,
  `insurance_golf_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_golf`
--

INSERT INTO `insurance_golf` (`insurance_golf_id`, `insurance_golf_price`, `insurance_golf_reponsible_price`, `insurance_golf_bodily_injuly_price`, `insurance_golf_equipment_price`, `insurance_golf_hol_in_one_price`, `insurance_golf_text1`, `insurance_golf_text1_1`, `insurance_golf_text1_2`, `insurance_golf_text1_3`, `insurance_golf_text1_4`, `insurance_golf_text1_1_1`, `insurance_golf_text1_2_1`, `insurance_golf_text1_2_2`, `insurance_golf_text1_2_3`, `insurance_golf_text1_2_4`, `insurance_golf_text1_3_1`, `insurance_golf_text1_4_1`, `insurance_golf_text1_4_2`, `insurance_golf_damage_live_body_price`, `insurance_golf_die_eye_lost_price`, `insurance_golf_disablility_less_52_week_price`, `insurance_golf_any_disablility_less_52_week_price`, `insurance_golf_accident_price`, `insurance_golf_equipment_lost_price`, `insurance_golf_hol_in_one_normal_price`, `insurance_golf_hol_in_one_other_price`, `insurance_golf_datetime_create`, `insurance_golf_datetime_update`) VALUES
(1, 1, '2.00', '3.00', '4.00', '5.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '6.00', '7.00', '8.00', '9.00', '10.00', '11.00', '12.00', '13.00', '0000-00-00 00:00:00', '2023-01-03 11:49:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance_golf`
--
ALTER TABLE `insurance_golf`
  ADD PRIMARY KEY (`insurance_golf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance_golf`
--
ALTER TABLE `insurance_golf`
  MODIFY `insurance_golf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
