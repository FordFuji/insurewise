-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08 ก.พ. 2023 เมื่อ 02:52 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.26-MariaDB-log
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
-- โครงสร้างตาราง `car_table_insurance`
--

CREATE TABLE `car_table_insurance` (
  `car_table_insurance_id` int(11) NOT NULL,
  `car_table_insurance_property_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_1p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_1p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_1p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_1p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_1p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_1p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_datetime_create` datetime NOT NULL,
  `car_table_insurance_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_table_insurance`
--
ALTER TABLE `car_table_insurance`
  ADD PRIMARY KEY (`car_table_insurance_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_table_insurance`
--
ALTER TABLE `car_table_insurance`
  MODIFY `car_table_insurance_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
