-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2023 at 11:10 AM
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
-- Table structure for table `accident_faq`
--

CREATE TABLE `accident_faq` (
  `accident_faq_id` int(11) NOT NULL,
  `accident_faq_question` varchar(255) NOT NULL,
  `accident_faq_answer` text NOT NULL,
  `accident_faq_datetime_create` datetime NOT NULL,
  `accident_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accident_faq`
--

INSERT INTO `accident_faq` (`accident_faq_id`, `accident_faq_question`, `accident_faq_answer`, `accident_faq_datetime_create`, `accident_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:17:42', '2023-05-29 16:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `backup_insurance_home`
--

CREATE TABLE `backup_insurance_home` (
  `insurance_home_id` int(11) NOT NULL,
  `insurance_home_row_id` int(11) NOT NULL,
  `insurance_home_image` varchar(255) NOT NULL,
  `insurance_home_plan` varchar(255) NOT NULL,
  `insurance_home_premium_price` int(11) NOT NULL,
  `insurance_home_text_1` varchar(255) NOT NULL,
  `insurance_home_text_2` varchar(255) NOT NULL,
  `insurance_home_text_3` varchar(255) NOT NULL,
  `insurance_home_text_4` varchar(255) NOT NULL,
  `insurance_home_text_5` varchar(255) NOT NULL,
  `insurance_home_text_6` varchar(255) NOT NULL,
  `insurance_home_text_7` varchar(255) NOT NULL,
  `insurance_home_name` varchar(255) NOT NULL,
  `insurance_home_fire_lightning_price` float(10,2) NOT NULL,
  `insurance_home_flood_price` float(10,2) NOT NULL,
  `insurance_home_natural_disaster_price` float(10,2) NOT NULL,
  `insurance_home_electrical_appliances_price` float(10,2) NOT NULL,
  `insurance_home_robbery_price` float(10,2) NOT NULL,
  `insurance_home_riot_price` float(10,2) NOT NULL,
  `insurance_home_died_price` float(10,2) NOT NULL,
  `insurance_home_starting_premium_price` float(10,2) NOT NULL,
  `insurance_home_datetime_create` datetime NOT NULL,
  `insurance_home_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `backup_insurance_home`
--

INSERT INTO `backup_insurance_home` (`insurance_home_id`, `insurance_home_row_id`, `insurance_home_image`, `insurance_home_plan`, `insurance_home_premium_price`, `insurance_home_text_1`, `insurance_home_text_2`, `insurance_home_text_3`, `insurance_home_text_4`, `insurance_home_text_5`, `insurance_home_text_6`, `insurance_home_text_7`, `insurance_home_name`, `insurance_home_fire_lightning_price`, `insurance_home_flood_price`, `insurance_home_natural_disaster_price`, `insurance_home_electrical_appliances_price`, `insurance_home_robbery_price`, `insurance_home_riot_price`, `insurance_home_died_price`, `insurance_home_starting_premium_price`, `insurance_home_datetime_create`, `insurance_home_datetime_update`) VALUES
(1, 0, '20221209153117.png', '', 0, '', '', '', '', '', '', '', 'test', 2.00, 3.00, 4.00, 5.00, 6.00, 7.00, 8.00, 1.00, '2022-12-09 15:31:17', '2022-12-09 17:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `banner_slide`
--

CREATE TABLE `banner_slide` (
  `banner_slide_id` int(11) NOT NULL,
  `banner_slide_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_slide_image_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_slide_datetime_create` datetime NOT NULL,
  `banner_slide_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner_slide`
--

INSERT INTO `banner_slide` (`banner_slide_id`, `banner_slide_image`, `banner_slide_image_mobile`, `banner_slide_datetime_create`, `banner_slide_datetime_update`) VALUES
(1, '20230103105843.png', '20230103105848.png', '2023-01-03 10:58:48', '2023-01-03 10:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `brand_car`
--

CREATE TABLE `brand_car` (
  `brand_car_id` int(11) NOT NULL,
  `brand_car_name` varchar(255) NOT NULL,
  `brand_car_datetime_create` datetime NOT NULL,
  `brand_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand_car`
--

INSERT INTO `brand_car` (`brand_car_id`, `brand_car_name`, `brand_car_datetime_create`, `brand_car_datetime_update`) VALUES
(1, 'Nissan', '2023-02-06 09:54:45', '2023-02-06 09:54:45'),
(2, 'BMW', '2023-02-06 09:54:52', '2023-02-06 09:54:52'),
(3, 'Toyota', '2023-02-28 14:04:18', '2023-02-28 14:04:18');

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
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:32:16', '2023-05-29 16:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `cancer_faq`
--

CREATE TABLE `cancer_faq` (
  `cancer_faq_id` int(11) NOT NULL,
  `cancer_faq_question` varchar(255) NOT NULL,
  `cancer_faq_answer` text NOT NULL,
  `cancer_faq_datetime_create` datetime NOT NULL,
  `cancer_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cancer_faq`
--

INSERT INTO `cancer_faq` (`cancer_faq_id`, `cancer_faq_question`, `cancer_faq_answer`, `cancer_faq_datetime_create`, `cancer_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:10:23', '2023-05-29 16:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `car_company`
--

CREATE TABLE `car_company` (
  `car_company_id` int(11) NOT NULL,
  `car_company_image` varchar(255) NOT NULL,
  `car_company_link` varchar(255) NOT NULL,
  `car_company_datetime_create` datetime NOT NULL,
  `car_company_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car_contact_confirm`
--

CREATE TABLE `car_contact_confirm` (
  `car_contact_confirm_id` int(11) NOT NULL,
  `insurance_car_id` int(11) NOT NULL,
  `car_contact_confirm_name_surname` varchar(255) NOT NULL,
  `car_contact_confirm_telephone` varchar(255) NOT NULL,
  `car_contact_confirm_email` varchar(255) NOT NULL,
  `car_contact_confirm_call` varchar(255) NOT NULL,
  `car_contact_confirm_datetime_create` datetime NOT NULL,
  `car_contact_confirm_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_contact_confirm`
--

INSERT INTO `car_contact_confirm` (`car_contact_confirm_id`, `insurance_car_id`, `car_contact_confirm_name_surname`, `car_contact_confirm_telephone`, `car_contact_confirm_email`, `car_contact_confirm_call`, `car_contact_confirm_datetime_create`, `car_contact_confirm_datetime_update`) VALUES
(1, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:07:59', '2023-05-03 14:07:59'),
(2, 2, 'aaa', '0990943010', 'aa@aa.com', 'Tomorrow', '2023-05-25 15:40:54', '2023-05-25 15:40:54'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorro', '2023-05-29 10:34:53', '2023-05-29 10:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `car_faq`
--

CREATE TABLE `car_faq` (
  `car_faq_id` int(11) NOT NULL,
  `car_faq_question` varchar(255) NOT NULL,
  `car_faq_answer` text NOT NULL,
  `car_faq_datetime_create` datetime NOT NULL,
  `car_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_faq`
--

INSERT INTO `car_faq` (`car_faq_id`, `car_faq_question`, `car_faq_answer`, `car_faq_datetime_create`, `car_faq_datetime_update`) VALUES
(1, 'คำถามที่พบบ่อย 1', 'คำตอบที่พบบ่อย 1', '2023-02-14 14:18:57', '2023-02-14 14:18:57'),
(2, 'คำถามที่พบบ่อย 2', 'คำตอบที่พบบ่อย 2', '2023-02-14 14:19:16', '2023-02-14 14:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `car_table_insurance`
--

CREATE TABLE `car_table_insurance` (
  `car_table_insurance_id` int(11) NOT NULL,
  `car_table_insurance_property_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_2p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_property_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_2p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_person_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_2p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_fire_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_2p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_car_crash_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_2p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_fire_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_1` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_2p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_2` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_3p` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_special_crash_3` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `car_table_insurance_datetime_create` datetime NOT NULL,
  `car_table_insurance_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_table_insurance`
--

INSERT INTO `car_table_insurance` (`car_table_insurance_id`, `car_table_insurance_property_1`, `car_table_insurance_property_2p`, `car_table_insurance_property_2`, `car_table_insurance_property_3p`, `car_table_insurance_property_3`, `car_table_insurance_person_1`, `car_table_insurance_person_2p`, `car_table_insurance_person_2`, `car_table_insurance_person_3p`, `car_table_insurance_person_3`, `car_table_insurance_car_fire_1`, `car_table_insurance_car_fire_2p`, `car_table_insurance_car_fire_2`, `car_table_insurance_car_fire_3p`, `car_table_insurance_car_fire_3`, `car_table_insurance_car_crash_1`, `car_table_insurance_car_crash_2p`, `car_table_insurance_car_crash_2`, `car_table_insurance_car_crash_3p`, `car_table_insurance_car_crash_3`, `car_table_insurance_special_fire_1`, `car_table_insurance_special_fire_2p`, `car_table_insurance_special_fire_2`, `car_table_insurance_special_fire_3p`, `car_table_insurance_special_fire_3`, `car_table_insurance_special_crash_1`, `car_table_insurance_special_crash_2p`, `car_table_insurance_special_crash_2`, `car_table_insurance_special_crash_3p`, `car_table_insurance_special_crash_3`, `car_table_insurance_datetime_create`, `car_table_insurance_datetime_update`) VALUES
(1, 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0000-00-00 00:00:00', '2023-06-09 15:02:36');

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
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:06:46', '2023-05-29 16:06:46'),
(2, 'ฟ', 'ฟฟฟ', '2023-06-09 16:14:05', '2023-06-09 16:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `condo_pdf`
--

CREATE TABLE `condo_pdf` (
  `condo_pdf_id` int(11) NOT NULL,
  `condo_pdf_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `condo_pdf_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `condo_pdf`
--

INSERT INTO `condo_pdf` (`condo_pdf_id`, `condo_pdf_file`, `condo_pdf_datetime_update`) VALUES
(1, '', '2023-06-14 14:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_accident`
--

CREATE TABLE `confirm_accident` (
  `confirm_accident_id` int(11) NOT NULL,
  `insurance_accident_id` int(11) NOT NULL,
  `confirm_accident_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `confirm_accident`
--

INSERT INTO `confirm_accident` (`confirm_accident_id`, `insurance_accident_id`, `confirm_accident_name_surname`, `confirm_accident_telephone`, `confirm_accident_email`, `confirm_accident_datetime_create`) VALUES
(1, 1, 'Ford Fji', '0990943010', 'aa@aa.com', '2023-04-05 16:24:36'),
(2, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:10:21'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:23:22'),
(4, 1, 'test', '0801234567', 'qq@gmail.com', '2023-06-08 14:46:42'),
(5, 1, 'test', '0801234567', 'qq@gmail.com', '2023-06-08 14:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_accident2`
--

CREATE TABLE `confirm_accident2` (
  `confirm_accident2_id` int(11) NOT NULL,
  `insurance_accident_id` int(11) NOT NULL,
  `confirm_accident2_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident2_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident2_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident2_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_accident2_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `confirm_accident2`
--

INSERT INTO `confirm_accident2` (`confirm_accident2_id`, `insurance_accident_id`, `confirm_accident2_name_surname`, `confirm_accident2_telephone`, `confirm_accident2_email`, `confirm_accident2_call`, `confirm_accident2_datetime_create`) VALUES
(1, 1, 'ff', '0990943010', 'sitiporn@aa.com', 'Tomorrow', '2023-04-05 16:25:14'),
(2, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:14:58'),
(3, 1, 'test', '0801234567', 'qq@gmail.com', '11.00', '2023-06-08 14:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_cancer`
--

CREATE TABLE `confirm_cancer` (
  `confirm_cancer_id` int(11) NOT NULL,
  `insurance_cancer_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_name_surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_cancer_call` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirm_cancer_datetime_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `confirm_cancer`
--

INSERT INTO `confirm_cancer` (`confirm_cancer_id`, `insurance_cancer_id`, `confirm_cancer_name_surname`, `confirm_cancer_telephone`, `confirm_cancer_email`, `confirm_cancer_call`, `confirm_cancer_datetime_create`) VALUES
(1, '1', 'Test', '0990943010', 'ford@gmail.com', 'Tomorow', '2023-05-03 14:17:35'),
(2, '1', 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:00:59'),
(3, '1', 'test', '0801234567', 'ww@gmail.com', '13.00', '2023-06-08 14:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_transportation`
--

CREATE TABLE `confirm_transportation` (
  `confirm_transportation_id` int(11) NOT NULL,
  `insurance_transportation_id` int(11) NOT NULL,
  `confirm_transportation_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_transportation_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_transportation_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_transportation_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_transportation_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `confirm_transportation`
--

INSERT INTO `confirm_transportation` (`confirm_transportation_id`, `insurance_transportation_id`, `confirm_transportation_name_surname`, `confirm_transportation_telephone`, `confirm_transportation_email`, `confirm_transportation_call`, `confirm_transportation_datetime_create`) VALUES
(1, 1, 'Ford Fuji', '0990943010', 'aa@aa.com', 'Tomorrow', '2023-04-10 16:57:43'),
(2, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:26:04'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:42:22'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorow', '2023-05-29 11:49:20'),
(5, 1, 'test', '0801234567', 'qq@gmail.com', '11', '2023-06-08 15:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_accident`
--

CREATE TABLE `contact_accident` (
  `contact_accident_id` int(11) NOT NULL,
  `insurance_accident_id` int(11) NOT NULL,
  `contact_accident_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_accident_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_accident_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_accident_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_accident_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_accident`
--

INSERT INTO `contact_accident` (`contact_accident_id`, `insurance_accident_id`, `contact_accident_name_surname`, `contact_accident_telephone`, `contact_accident_email`, `contact_accident_call`, `contact_accident_datetime_create`) VALUES
(1, 1, 'Ford', '0990946010', 'sitiponr@aa.com', 'fdsf', '2023-03-03 13:34:44'),
(2, 1, 'Ford', '0990943010', 'sitiporn@aa.com', 'Test', '2023-03-03 13:35:43'),
(3, 2, 'Ford Fuji', '0212345678', 'aa@aa.com', 'aabbcc', '2023-03-03 13:58:36'),
(4, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorow', '2023-05-03 14:18:12'),
(5, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:07:03'),
(6, 1, 'test', '0801234567', 'ww@gmail.com', '11.00', '2023-06-08 14:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_business`
--

CREATE TABLE `contact_business` (
  `contact_business_id` int(11) NOT NULL,
  `insurance_business_id` int(11) NOT NULL,
  `contact_business_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_business_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_business_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_business_call` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_business_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_business`
--

INSERT INTO `contact_business` (`contact_business_id`, `insurance_business_id`, `contact_business_name_surname`, `contact_business_tel`, `contact_business_email`, `contact_business_call`, `contact_business_datetime_create`) VALUES
(1, 1, 'Ford Fuji', 'Ford Fuji', 'nirvanaford94@gmail.com', 'สสส', '2023-02-24 16:54:31'),
(2, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorow', '2023-05-03 14:30:20'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorow', '2023-05-29 13:02:11'),
(4, 1, 'test', '0801234566', 'qq@gmail.com', '11', '2023-06-08 15:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_cancer`
--

CREATE TABLE `contact_cancer` (
  `contact_cancer_id` int(11) NOT NULL,
  `insurance_cancer_id` int(11) NOT NULL,
  `contact_cancer_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_cancer_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_cancer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_cancer_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_cancer_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_cancer`
--

INSERT INTO `contact_cancer` (`contact_cancer_id`, `insurance_cancer_id`, `contact_cancer_name_surname`, `contact_cancer_telephone`, `contact_cancer_email`, `contact_cancer_call`, `contact_cancer_datetime_create`) VALUES
(1, 1, 'Ford', '0990946010', 'sitiponr@aa.com', 'fdsf', '2023-03-03 13:34:44'),
(2, 1, 'Ford', '0990943010', 'sitiporn@aa.com', 'Test', '2023-03-03 13:35:43'),
(3, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tommorow', '2023-05-03 14:16:11'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 10:54:58'),
(5, 1, '111', '0990943010', '11a@aa.com', '11', '2023-05-29 16:16:00'),
(6, 1, 'test', '0801234567', 'ww@gmail.com', '13.00', '2023-06-08 14:36:12'),
(7, 1, 'test', '0801234567', 'qq@gmail.com', 'qq', '2023-06-08 14:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_car`
--

CREATE TABLE `contact_car` (
  `contact_car_id` int(11) NOT NULL,
  `contact_car_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_car_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_car_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_car_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_car`
--

INSERT INTO `contact_car` (`contact_car_id`, `contact_car_name_surname`, `contact_car_telephone`, `contact_car_email`, `contact_car_datetime_create`) VALUES
(1, 'ฟอร์ด ฟูจิ', '0991234567', 'abc@aa.com', '2023-02-13 17:21:17'),
(2, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-02-14 13:49:20'),
(3, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-02-14 14:09:39'),
(4, 'fdsaf', 'dsffsd', 'nirvanaford94@gmail.com', '2023-02-15 14:23:21'),
(5, '11', '22', 'nirvanaford94@gmail.com', '2023-02-15 14:43:00'),
(6, 'aa', '0999999999', 'nirvanaford94@gmail.com', '2023-02-24 16:37:40'),
(7, 'ดกหด', '0999999999', 'nirvanaford94@gmail.com', '2023-02-24 16:38:41'),
(8, 'Test', '0990943010', 'ford@gmail.com', '2023-05-03 14:07:09'),
(9, 'fdas fdsfds', '0990943010', 'a@a.com', '2023-05-25 15:40:23'),
(10, 'fdas fdsfds', '0990943010', 'a@a.com', '2023-05-25 15:42:34'),
(11, 'fdas fdsfds', '0990943010', 'a@a.com', '2023-05-25 15:47:54'),
(12, 'สิทธิพร ตรองวิเชียร', '0990943010', 'aa@aa.com', '2023-05-29 10:29:47'),
(13, 'fdas fdsfds', '0990943010', 'a@a.com', '2023-05-29 14:52:25'),
(14, 'test', '0815910000', 'test', '2023-06-06 17:56:46'),
(15, 'test', '0815910000', 'worrakarn@ots.co.th', '2023-06-06 17:57:07'),
(16, 'test test', '0815910000', 'worrakarn@ots.co.th', '2023-06-06 17:57:16'),
(17, 'test test', '0815910000', 'worrakarn@ots.co.th', '2023-06-06 17:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_condo`
--

CREATE TABLE `contact_condo` (
  `contact_condo_id` int(11) NOT NULL,
  `insurance_condo_id` int(11) NOT NULL,
  `contact_condo_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_condo`
--

INSERT INTO `contact_condo` (`contact_condo_id`, `insurance_condo_id`, `contact_condo_name_surname`, `contact_condo_telephone`, `contact_condo_email`, `contact_condo_call`, `contact_condo_datetime_create`) VALUES
(1, 1, '4444', '0999999999', 'nirvanaford94@gmail.com', '4444', '2023-02-24 16:45:50'),
(2, 1, 'ดกหดกห', '0999999999', 'nirvanaford94@gmail.com', 'กดหกด', '2023-02-24 16:47:01'),
(3, 1, 'fdsfds', '2021211221', 'sdafdsa@ffd.com', 'test', '2023-02-28 14:31:49'),
(4, 1, 'Test', '0990943010', 'tesr@gmail.com', 'Tomorrow', '2023-05-03 14:20:26'),
(5, 1, 'Test', '0990943010', 'aa@aa.com', 'Tomorow', '2023-05-03 14:23:20'),
(6, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:29:24'),
(7, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:29:27'),
(8, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:29:29'),
(9, 1, 'test', '0801234567', 'qq@gmail.com', '11', '2023-06-08 14:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_condo_detail`
--

CREATE TABLE `contact_condo_detail` (
  `contact_condo_detail_id` int(11) NOT NULL,
  `insurance_condo_id` int(11) NOT NULL,
  `contact_condo_detail_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_detail_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_detail_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_condo_detail_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_condo_detail`
--

INSERT INTO `contact_condo_detail` (`contact_condo_detail_id`, `insurance_condo_id`, `contact_condo_detail_name_surname`, `contact_condo_detail_telephone`, `contact_condo_detail_email`, `contact_condo_detail_datetime_create`) VALUES
(1, 1, '4444', '0212345678', 'nirvanaford94@gmail.com', '2023-02-24 16:46:08'),
(2, 1, 'กหดกห', '0212345678', 'nirvanaford94@gmail.com', '2023-02-24 16:50:25'),
(3, 1, 'ดหดหก', '0999999999', 'nirvanaford94@gmail.com', '2023-02-24 16:52:36'),
(4, 1, 'Ford Fuji', '0212345678', 'sitiporn@orange-thailand.com', '2023-02-28 14:32:21'),
(5, 1, 'Test', '0990943010', 'ford@gmail.com', '2023-05-03 14:21:04'),
(6, 1, 'Test', '0990943010', 'ford@gmail.com', '2023-05-03 14:22:48'),
(7, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:31:47'),
(8, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:31:52'),
(9, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:31:56'),
(10, 1, 'test', '0801234567', 'qq@gmail.com', '2023-06-08 14:59:28'),
(11, 1, 'test', '0801234567', 'qq@gmail.com', '2023-06-08 15:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail_home`
--

CREATE TABLE `contact_detail_home` (
  `contact_detail_home_id` int(11) NOT NULL,
  `insurance_home_id` int(11) NOT NULL,
  `contact_detail_home_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_detail_home_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_detail_home_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_detail_home_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_detail_home`
--

INSERT INTO `contact_detail_home` (`contact_detail_home_id`, `insurance_home_id`, `contact_detail_home_name_surname`, `contact_detail_home_tel`, `contact_detail_home_email`, `contact_detail_home_datetime_create`) VALUES
(1, 1, 'Test', '0990943010', 'aa@aa.com', '2023-05-03 14:19:43'),
(2, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:22:12'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:26:13'),
(4, 1, 'test', '0801234567', 'pp@gmail.com', '2023-06-08 14:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_extended`
--

CREATE TABLE `contact_extended` (
  `contact_extended_id` int(11) NOT NULL,
  `insurance_extended_id` int(11) NOT NULL,
  `contact_extended_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_call` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_extended_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_extended`
--

INSERT INTO `contact_extended` (`contact_extended_id`, `insurance_extended_id`, `contact_extended_name_surname`, `contact_extended_tel`, `contact_extended_email`, `contact_extended_call`, `contact_extended_datetime_create`) VALUES
(1, 1, '1111', '22222', '333@3343.com', '4444', '2023-02-02 15:13:37'),
(2, 2, 'Ford Fuji', 'Ford Fuji', 'nirvanaford94@gmail.com', 'Tomorrow', '2023-02-03 11:27:11'),
(3, 1, 'Ford Fuji', 'Ford Fuji', 'nirvanaford94@gmail.com', 'Ford Fuji', '2023-02-24 16:53:20'),
(4, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tommorow', '2023-05-03 14:26:44'),
(5, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorow', '2023-05-29 11:54:03'),
(6, 1, 'test', '0801234567', 'qq@gmail.com', '11', '2023-06-08 15:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_home`
--

CREATE TABLE `contact_home` (
  `contact_home_id` int(11) NOT NULL,
  `insurance_home_id` int(11) NOT NULL,
  `contact_home_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_home`
--

INSERT INTO `contact_home` (`contact_home_id`, `insurance_home_id`, `contact_home_name_surname`, `contact_home_tel`, `contact_home_email`, `contact_home_call`, `contact_home_datetime_create`) VALUES
(1, 1, 'Ford Fuji', '0990943010', 'sitiporn@gmail.com', 'Tomorrow', '2023-02-28 13:24:41'),
(2, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:19:06'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:20:07'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:25:45'),
(5, 1, 'test', '0801234567', 'ww@gamil.com', '11', '2023-06-08 14:49:39'),
(6, 1, '11', '0801234567', 'qq@gmail.com', '11', '2023-06-08 14:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pet`
--

CREATE TABLE `contact_pet` (
  `contact_pet_id` int(11) NOT NULL,
  `insurance_pet_id` int(11) NOT NULL,
  `contact_pet_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_call` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_pet`
--

INSERT INTO `contact_pet` (`contact_pet_id`, `insurance_pet_id`, `contact_pet_name_surname`, `contact_pet_tel`, `contact_pet_email`, `contact_pet_call`, `contact_pet_datetime_create`) VALUES
(1, 1, 'Ford Fuji', '0999999999', 'nirvanaford94@gmail.com', '9999', '2023-02-24 16:55:01'),
(2, 1, 'Ford Fuji', '0212345678', 'nirvanaford94@gmail.com', 'Ford Fuji', '2023-02-24 16:56:42'),
(3, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorow', '2023-05-03 14:31:01'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorow', '2023-05-29 13:07:13'),
(5, 1, 'test', '0801234567', 'qq@gmail.com', '11', '2023-06-08 15:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pet_detail`
--

CREATE TABLE `contact_pet_detail` (
  `contact_pet_detail_id` int(11) NOT NULL,
  `insurance_pet_id` int(11) NOT NULL,
  `contact_pet_detail_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_detail_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_detail_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_pet_detail_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_pet_detail`
--

INSERT INTO `contact_pet_detail` (`contact_pet_detail_id`, `insurance_pet_id`, `contact_pet_detail_name_surname`, `contact_pet_detail_tel`, `contact_pet_detail_email`, `contact_pet_detail_datetime_create`) VALUES
(1, 1, 'gggg', '02123456789', 'nirvanaford94@gmail.com', '2023-02-24 16:55:22'),
(2, 1, 'โนพก', '0212345678', 'nirvanaford94@gmail.com', '2023-02-24 16:56:15'),
(3, 3, 'ดกหดกห', '0212345678', 'aa@aa.com', '2023-02-28 14:33:22'),
(4, 1, 'Test', '0990943010', 'ford@gmail.com', '2023-05-03 14:31:27'),
(5, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 13:10:24'),
(6, 1, 'tesr', '0801234567', 'qq@gmail.com', '2023-06-08 15:54:08');

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
(3, 6, 'AA', '0923216549', 'aa@aa.com', 'abc', '2023-03-03 14:18:55'),
(4, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorow', '2023-05-03 14:21:40'),
(5, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorow', '2023-05-03 14:24:33'),
(6, 1, '11', '0990943010', 'aa@aa.com', '123', '2023-05-17 09:20:24'),
(7, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 11:36:56'),
(8, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorow', '2023-05-29 11:43:58'),
(9, 1, 'test', '0801234567', 'qq@gmail.com', '11', '2023-06-08 15:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_travel`
--

CREATE TABLE `contact_travel` (
  `contact_travel_id` int(11) NOT NULL,
  `insurance_travel_id` int(11) NOT NULL,
  `contact_travel_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_call` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_travel`
--

INSERT INTO `contact_travel` (`contact_travel_id`, `insurance_travel_id`, `contact_travel_name_surname`, `contact_travel_tel`, `contact_travel_email`, `contact_travel_call`, `contact_travel_datetime_create`) VALUES
(1, 1, 'Ford Fuji', 'Ford Fuji', 'nirvanaford94@gmail.com', 'Ford Fuji', '2023-02-24 16:53:36'),
(2, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:27:24'),
(3, 1, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:28:31'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorow', '2023-05-29 11:58:32'),
(5, 1, 'test', '0801234567', '11@gmail.com', '11', '2023-06-08 15:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact_travel_detail`
--

CREATE TABLE `contact_travel_detail` (
  `contact_travel_detail_id` int(11) NOT NULL,
  `insurance_travel_id` int(11) NOT NULL,
  `contact_travel_detail_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_detail_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_detail_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_travel_detail_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_travel_detail`
--

INSERT INTO `contact_travel_detail` (`contact_travel_detail_id`, `insurance_travel_id`, `contact_travel_detail_name_surname`, `contact_travel_detail_telephone`, `contact_travel_detail_email`, `contact_travel_detail_datetime_create`) VALUES
(1, 1, 'ดกหดก', '0212345678', 'nirvanaford94@gmail.com', '2023-02-24 16:53:55'),
(2, 1, 'Test', '0990943010', 'ford@gmail.com', '2023-05-03 14:27:54'),
(3, 1, 'Test', '0990943010', 'ford@gmail.com', '2023-05-03 14:28:58'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 12:01:38'),
(5, 1, 'test', '0801234567', 'ss@gmaiil.com', '2023-06-08 15:23:42'),
(6, 1, 'test', '0801234567', 'qq@gmail.com', '2023-06-08 15:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `contact_us_form_id` int(11) NOT NULL,
  `contact_us_form_name_surname` varchar(255) NOT NULL,
  `contact_us_form_tel` varchar(255) NOT NULL,
  `contact_us_form_email` varchar(255) NOT NULL,
  `contact_us_form_datetime_contact` datetime NOT NULL,
  `contact_us_form_detail` text NOT NULL,
  `contact_us_form_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us_form`
--

INSERT INTO `contact_us_form` (`contact_us_form_id`, `contact_us_form_name_surname`, `contact_us_form_tel`, `contact_us_form_email`, `contact_us_form_datetime_contact`, `contact_us_form_detail`, `contact_us_form_datetime_create`) VALUES
(1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'nirvanaford94@gmail.com', '2023-05-30 09:00:00', 'test', '2023-05-30 09:17:16'),
(2, 'test', '0801234567', 'ww@gmail.com', '2023-06-08 16:05:00', '111', '2023-06-08 16:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `damages_first`
--

CREATE TABLE `damages_first` (
  `damages_first_id` int(11) NOT NULL,
  `damages_first_name` varchar(255) NOT NULL,
  `damages_first_datetime_create` datetime NOT NULL,
  `damages_first_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `damages_first`
--

INSERT INTO `damages_first` (`damages_first_id`, `damages_first_name`, `damages_first_datetime_create`, `damages_first_datetime_update`) VALUES
(1, 'มีค่าเสียหายส่วนแรก', '2023-02-06 10:36:03', '2023-02-06 10:36:03'),
(2, 'ไม่มีค่าเสียหายส่วนแรก', '2023-02-06 10:36:16', '2023-02-06 10:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(1000) NOT NULL,
  `department_menu` longtext DEFAULT NULL,
  `department_sub_menu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_menu`, `department_sub_menu`) VALUES
(1, 'Administrator', '50, 56, 57, 58, 51, 53, 54, 59, 62, 61, 66, 65, 63', '5, 6, 7, 23, 24, 25, 26, 27, 28, 29, 30, 34, 31, 49, 33, 36, 37, 39, 40, 41, 42, 43, 44, 45, 46, 47'),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_cancer`
--

CREATE TABLE `detail_cancer` (
  `detail_cancer_id` int(11) NOT NULL,
  `insurance_cancer_id` int(11) NOT NULL,
  `detail_cancer_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_cancer_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_cancer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_cancer_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transportation`
--

CREATE TABLE `detail_transportation` (
  `detail_transportation_id` int(11) NOT NULL,
  `insurance_transportation_id` int(11) NOT NULL,
  `detail_transportation_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_transportation_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_transportation_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_transportation_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_transportation`
--

INSERT INTO `detail_transportation` (`detail_transportation_id`, `insurance_transportation_id`, `detail_transportation_name_surname`, `detail_transportation_telephone`, `detail_transportation_email`, `detail_transportation_datetime_create`) VALUES
(1, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-04-10 16:56:56'),
(2, 1, '111', '0990943010', 'sitiporn@aa.com', '2023-05-17 09:20:38'),
(3, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:39:20'),
(4, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', '2023-05-29 11:45:39'),
(5, 1, 'test', '0801234566', 'qq@gmail.com', '2023-06-08 15:05:53'),
(6, 1, 'test', '0801234566', 'qq@gmail.com', '2023-06-08 15:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `extended_faq`
--

CREATE TABLE `extended_faq` (
  `extended_faq_id` int(11) NOT NULL,
  `extended_faq_question` varchar(255) NOT NULL,
  `extended_faq_answer` text NOT NULL,
  `extended_faq_datetime_create` datetime NOT NULL,
  `extended_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extended_faq`
--

INSERT INTO `extended_faq` (`extended_faq_id`, `extended_faq_question`, `extended_faq_answer`, `extended_faq_datetime_create`, `extended_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:30:26', '2023-05-29 16:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `extended_insurance`
--

CREATE TABLE `extended_insurance` (
  `extended_insurance_id` int(11) NOT NULL,
  `extended_insurance_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_premium_price` int(11) NOT NULL,
  `extended_insurance_text_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_text_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_text_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_text_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_text_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_fire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_money_salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_money` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_die` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extended_insurance_datetime_create` datetime NOT NULL,
  `extended_insurance_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extended_insurance`
--

INSERT INTO `extended_insurance` (`extended_insurance_id`, `extended_insurance_plan`, `extended_insurance_premium_price`, `extended_insurance_text_1`, `extended_insurance_text_2`, `extended_insurance_text_3`, `extended_insurance_text_4`, `extended_insurance_text_5`, `extended_insurance_fire`, `extended_insurance_money_salary`, `extended_insurance_money`, `extended_insurance_die`, `extended_insurance_datetime_create`, `extended_insurance_datetime_update`) VALUES
(1, 'แผน Standard', 3500, 'อัคคีภัย', 'เงินทดแทนรายได้', '(สูงสุด 20 วัน ทำการ)', 'ประกันเงินสด', 'เงินชดเชยเสียชีวิต', 'ตามความเสียหาย*', '5,000 บาท*', '100,000 บาท', '250,000 ต่อคน*', '2023-02-03 11:00:12', '2023-02-03 11:00:12'),
(2, 'แผน Standard', 3500, 'อัคคีภัย', 'เงินทดแทนรายได้', '(สูงสุด 20 วัน ทำการ)', 'ประกันเงินสด', 'เงินชดเชยเสียชีวิต', 'ตามความเสียหาย*', '5,000 บาท*', '100,000 บาท', '250,000 ต่อคน*', '2023-02-03 11:00:21', '2023-02-03 11:00:21'),
(3, 'แผน Standard', 3500, 'อัคคีภัย', 'เงินทดแทนรายได้', '(สูงสุด 20 วัน ทำการ)', 'ประกันเงินสด', 'เงินชดเชยเสียชีวิต', 'ตามความเสียหาย*', '5,000 บาท*', '100,000 บาท', '250,000 ต่อคน*', '2023-02-06 10:45:01', '2023-02-06 10:45:01'),
(4, 'แผน Standard', 3500, 'อัคคีภัย', 'เงินทดแทนรายได้', '(สูงสุด 20 วัน ทำการ)', 'ประกันเงินสด', 'เงินชดเชยเสียชีวิต', 'ตามความเสียหาย*', '5,000 บาท*', '100,000 บาท', '250,000 ต่อคน*', '2023-02-13 14:51:53', '2023-02-13 14:51:53'),
(6, 'ทะเบียนจังหวัด', 0, 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '7', '2023-06-09 17:04:26', '2023-06-09 17:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `golf_contact`
--

CREATE TABLE `golf_contact` (
  `golf_contact_id` int(11) NOT NULL,
  `golf_contact_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golf_contact_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golf_contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golf_contact_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golf_contact_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golf_contact`
--

INSERT INTO `golf_contact` (`golf_contact_id`, `golf_contact_name_surname`, `golf_contact_telephone`, `golf_contact_email`, `golf_contact_call`, `golf_contact_datetime_create`) VALUES
(1, 'Ford Fuji', '0999999999', 'nirvanaford94@gmail.com', '2023-01-05 10:00:00', '2023-02-24 16:54:13'),
(2, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:29:40'),
(3, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 12:57:50'),
(4, 'tesr', '0801234567', 'ww@gmail.com', '11', '2023-06-08 15:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `golf_faq`
--

CREATE TABLE `golf_faq` (
  `golf_faq_id` int(11) NOT NULL,
  `golf_faq_question` varchar(255) NOT NULL,
  `golf_faq_answer` text NOT NULL,
  `golf_faq_datetime_create` datetime NOT NULL,
  `golf_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `golf_faq`
--

INSERT INTO `golf_faq` (`golf_faq_id`, `golf_faq_question`, `golf_faq_answer`, `golf_faq_datetime_create`, `golf_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 15:38:56', '2023-05-29 15:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `healthy_contact`
--

CREATE TABLE `healthy_contact` (
  `healthy_contact_id` int(11) NOT NULL,
  `insurance_healthy_id` int(11) NOT NULL,
  `healthy_contact_name_surname` varchar(255) NOT NULL,
  `healthy_contact_telephone` varchar(255) NOT NULL,
  `healthy_contact_email` varchar(255) NOT NULL,
  `healthy_contact_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `healthy_contact`
--

INSERT INTO `healthy_contact` (`healthy_contact_id`, `insurance_healthy_id`, `healthy_contact_name_surname`, `healthy_contact_telephone`, `healthy_contact_email`, `healthy_contact_datetime_create`) VALUES
(1, 2, '1', '0990943010', 'a@a.com', '2023-05-29 15:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `healthy_contact_confirm`
--

CREATE TABLE `healthy_contact_confirm` (
  `healthy_contact_confirm_id` int(11) NOT NULL,
  `insurance_healthy_id` int(11) NOT NULL,
  `healthy_contact_confirm_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthy_contact_confirm_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `healthy_contact_confirm`
--

INSERT INTO `healthy_contact_confirm` (`healthy_contact_confirm_id`, `insurance_healthy_id`, `healthy_contact_confirm_name_surname`, `healthy_contact_confirm_telephone`, `healthy_contact_confirm_email`, `healthy_contact_confirm_call`, `healthy_contact_confirm_datetime_create`) VALUES
(1, 3, 'fdsf', '0999999999', 'nirvanaford94@gmail.com', 'dsfffds', '2023-02-24 16:42:23'),
(2, 5, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:12:27'),
(3, 5, 'Test', '0990943010', 'ford@gmail.com', 'Tomorrow', '2023-05-03 14:15:22'),
(4, 5, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'Tomorrow', '2023-05-29 10:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `healthy_faq`
--

CREATE TABLE `healthy_faq` (
  `healthy_faq_id` int(11) NOT NULL,
  `healthy_faq_question` varchar(255) NOT NULL,
  `healthy_faq_answer` text NOT NULL,
  `healthy_faq_datetime_create` datetime NOT NULL,
  `healthy_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `healthy_faq`
--

INSERT INTO `healthy_faq` (`healthy_faq_id`, `healthy_faq_question`, `healthy_faq_answer`, `healthy_faq_datetime_create`, `healthy_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 15:31:55', '2023-05-29 15:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `home_faq`
--

CREATE TABLE `home_faq` (
  `home_faq_id` int(11) NOT NULL,
  `home_faq_question` varchar(255) NOT NULL,
  `home_faq_answer` text NOT NULL,
  `home_faq_datetime_create` datetime NOT NULL,
  `home_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_faq`
--

INSERT INTO `home_faq` (`home_faq_id`, `home_faq_question`, `home_faq_answer`, `home_faq_datetime_create`, `home_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:05:15', '2023-05-29 16:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `import_excel`
--

CREATE TABLE `import_excel` (
  `import_excel_id` int(11) NOT NULL,
  `import_excel_product` varchar(255) NOT NULL,
  `import_excel_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `import_excel`
--

INSERT INTO `import_excel` (`import_excel_id`, `import_excel_product`, `import_excel_datetime_create`) VALUES
(1, '20230203110012.xlsx', '2023-02-03 11:00:12'),
(2, '20230203110021.xlsx', '2023-02-03 11:00:21'),
(3, '20230206104112.xlsx', '2023-02-06 10:41:12'),
(4, '20230206104207.xlsx', '2023-02-06 10:42:07'),
(5, '20230206104309.xlsx', '2023-02-06 10:43:09'),
(6, '20230206104330.xlsx', '2023-02-06 10:43:30'),
(7, '20230206104356.xlsx', '2023-02-06 10:43:56'),
(8, '20230206104420.xlsx', '2023-02-06 10:44:20'),
(9, '20230206104440.xlsx', '2023-02-06 10:44:40'),
(10, '20230206104501.xlsx', '2023-02-06 10:45:01'),
(11, '20230206104518.xlsx', '2023-02-06 10:45:18'),
(12, '20230206113358.xlsx', '2023-02-06 11:33:58'),
(13, '20230213142807.xlsx', '2023-02-13 14:28:07'),
(14, '20230213143931.xlsx', '2023-02-13 14:39:31'),
(15, '20230213144206.xlsx', '2023-02-13 14:42:06'),
(16, '20230213144505.xlsx', '2023-02-13 14:45:05'),
(17, '20230213144916.xlsx', '2023-02-13 14:49:16'),
(18, '20230213144943.xlsx', '2023-02-13 14:49:43'),
(19, '20230213145007.xlsx', '2023-02-13 14:50:07'),
(20, '20230213145041.xlsx', '2023-02-13 14:50:41'),
(21, '20230213145106.xlsx', '2023-02-13 14:51:06'),
(22, '20230213145127.xlsx', '2023-02-13 14:51:27'),
(23, '20230213145153.xlsx', '2023-02-13 14:51:53'),
(24, '20230213145238.xlsx', '2023-02-13 14:52:38'),
(25, '20230214134416.xlsx', '2023-02-14 13:44:16'),
(26, '20230214134510.xlsx', '2023-02-14 13:45:10'),
(27, '20230214142705.xlsx', '2023-02-14 14:27:05'),
(28, '20230301173113.xlsx', '2023-03-01 17:31:13'),
(29, '20230301173204.xlsx', '2023-03-01 17:32:04'),
(30, '20230301173507.xlsx', '2023-03-01 17:35:07'),
(31, '20230301173538.xlsx', '2023-03-01 17:35:38'),
(32, '20230529164702.xlsx', '2023-05-29 16:47:02'),
(33, '20230609170055.xlsx', '2023-06-09 17:00:55'),
(34, '20230609170308.xlsx', '2023-06-09 17:03:08'),
(35, '20230609170324.xlsx', '2023-06-09 17:03:24'),
(36, '20230609170336.xlsx', '2023-06-09 17:03:36'),
(37, '20230609170348.xlsx', '2023-06-09 17:03:48'),
(38, '20230609170407.xlsx', '2023-06-09 17:04:07'),
(39, '20230609170416.xlsx', '2023-06-09 17:04:16'),
(40, '20230609170426.xlsx', '2023-06-09 17:04:26'),
(41, '20230609170435.xlsx', '2023-06-09 17:04:35'),
(42, '20230609170613.xlsx', '2023-06-09 17:06:13'),
(43, '20230609170623.xlsx', '2023-06-09 17:06:23'),
(44, '20230609170633.xlsx', '2023-06-09 17:06:33'),
(45, '20230621101703.xlsx', '2023-06-21 10:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_accident`
--

CREATE TABLE `insurance_accident` (
  `insurance_accident_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `insurance_accident_row` int(11) NOT NULL,
  `insurance_accident_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_price` int(11) NOT NULL,
  `insurance_accident_text1` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_text2` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_text3` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_text4` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_text5` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_text6` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_text7` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_1` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_2` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_3` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_4` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_5` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_6` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_7` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_accident_datetime_create` datetime NOT NULL,
  `insurance_accident_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurance_accident`
--

INSERT INTO `insurance_accident` (`insurance_accident_id`, `insurance_company_id`, `insurance_accident_row`, `insurance_accident_plan`, `insurance_accident_price`, `insurance_accident_text1`, `insurance_accident_text2`, `insurance_accident_text3`, `insurance_accident_text4`, `insurance_accident_text5`, `insurance_accident_text6`, `insurance_accident_text7`, `insurance_accident_1`, `insurance_accident_2`, `insurance_accident_3`, `insurance_accident_4`, `insurance_accident_5`, `insurance_accident_6`, `insurance_accident_7`, `insurance_accident_datetime_create`, `insurance_accident_datetime_update`) VALUES
(1, 1, 1, 'อุบัติเหตุ XS', 1400, 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', '3,000 บาท / ครั้ง', '-', '-', 'ไม่คุ้มครอง', '20,000 บาท', '20,000 บาท', '-', '2023-03-01 17:31:15', '2023-03-01 17:31:15'),
(2, 1, 1, 'อุบัติเหตุ XS', 1400, 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', '3,000 บาท / ครั้ง', '-', '-', 'ไม่คุ้มครอง', '20,000 บาท', '20,000 บาท', '-', '2023-03-01 17:32:04', '2023-03-01 17:32:04'),
(4, 0, 0, 'ทะเบียนจังหวัด', 0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '2023-06-09 17:06:13', '2023-06-09 17:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_business`
--

CREATE TABLE `insurance_business` (
  `insurance_business_id` int(11) NOT NULL,
  `insurance_business_price` varchar(255) NOT NULL,
  `insurance_business_price_per_year` varchar(255) NOT NULL,
  `insurance_business_text_1` varchar(255) NOT NULL,
  `insurance_business_text_2` varchar(255) NOT NULL,
  `insurance_business_text_3` varchar(255) NOT NULL,
  `insurance_business_text_4` varchar(255) NOT NULL,
  `insurance_business_fire` varchar(255) NOT NULL,
  `insurance_business_money_salary` varchar(255) NOT NULL,
  `insurance_business_money` varchar(255) NOT NULL,
  `insurance_business_die` varchar(255) NOT NULL,
  `insurance_business_datetime_create` datetime NOT NULL,
  `insurance_business_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_business`
--

INSERT INTO `insurance_business` (`insurance_business_id`, `insurance_business_price`, `insurance_business_price_per_year`, `insurance_business_text_1`, `insurance_business_text_2`, `insurance_business_text_3`, `insurance_business_text_4`, `insurance_business_fire`, `insurance_business_money_salary`, `insurance_business_money`, `insurance_business_die`, `insurance_business_datetime_create`, `insurance_business_datetime_update`) VALUES
(1, '2,000,000 บาท', '3500', 'อัคคีภัย', 'เงินทดแทนรายได้', '(สูงสุด 20 วันทำการ)', 'ประกันเงินสด', 'ตามความเสียหาย*', '5,000 บาท', '100,000 บาท', '250,000 ต่อคน*', '2023-02-06 10:45:19', '2023-02-06 10:45:19'),
(2, '2,000,000 บาท', '3500', 'อัคคีภัย', 'เงินทดแทนรายได้', '(สูงสุด 20 วันทำการ)', 'ประกันเงินสด', 'ตามความเสียหาย*', '5,000 บาท', '100,000 บาท', '250,000 ต่อคน*', '2023-02-13 14:52:38', '2023-02-13 14:52:38'),
(4, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '2023-06-09 17:04:35', '2023-06-09 17:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_cancer`
--

CREATE TABLE `insurance_cancer` (
  `insurance_cancer_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `insurance_cancer_row` int(11) NOT NULL,
  `insurance_cancer_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_price` int(11) NOT NULL,
  `insurance_cancer_text1` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text2` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text3` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text4` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text5` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text6` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text7` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_1` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_2` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_3` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_4` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_5` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_6` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_7` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text9` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text14` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text15` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text16` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text17` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text18` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text19` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text20` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text21` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text22` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text23` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text24` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_text25` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_cancer_datetime_create` datetime NOT NULL,
  `insurance_cancer_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurance_cancer`
--

INSERT INTO `insurance_cancer` (`insurance_cancer_id`, `insurance_company_id`, `insurance_cancer_row`, `insurance_cancer_plan`, `insurance_cancer_price`, `insurance_cancer_text1`, `insurance_cancer_text2`, `insurance_cancer_text3`, `insurance_cancer_text4`, `insurance_cancer_text5`, `insurance_cancer_text6`, `insurance_cancer_text7`, `insurance_cancer_1`, `insurance_cancer_2`, `insurance_cancer_3`, `insurance_cancer_4`, `insurance_cancer_5`, `insurance_cancer_6`, `insurance_cancer_7`, `insurance_cancer_text8`, `insurance_cancer_text9`, `insurance_cancer_text10`, `insurance_cancer_text11`, `insurance_cancer_text12`, `insurance_cancer_text13`, `insurance_cancer_text14`, `insurance_cancer_text15`, `insurance_cancer_text16`, `insurance_cancer_text17`, `insurance_cancer_text18`, `insurance_cancer_text19`, `insurance_cancer_text20`, `insurance_cancer_text21`, `insurance_cancer_text22`, `insurance_cancer_text23`, `insurance_cancer_text24`, `insurance_cancer_text25`, `insurance_cancer_datetime_create`, `insurance_cancer_datetime_update`) VALUES
(1, 1, 1, 'อุบัติเหตุ XS', 1400, 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', '3,000 บาท / ครั้ง', '-', '-', 'ไม่คุ้มครอง', '20,000 บาท', '20,000 บาท', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-03-01 17:35:07', '2023-03-01 17:35:07'),
(2, 1, 1, 'ฟ', 1, 'q', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-09 16:34:05', '2023-06-09 16:34:05'),
(4, 0, 0, 'ทะเบียนจังหวัด', 0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-09 17:06:23', '2023-06-09 17:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_car`
--

CREATE TABLE `insurance_car` (
  `insurance_car_id` int(11) NOT NULL,
  `insurance_car_text1` varchar(255) NOT NULL,
  `insurance_car_text2` varchar(255) NOT NULL,
  `insurance_car_text3` varchar(255) NOT NULL,
  `insurance_car_text4` varchar(255) NOT NULL,
  `insurance_car_text5` varchar(255) NOT NULL,
  `insurance_car_text6` varchar(255) NOT NULL,
  `brand_car_id` int(11) NOT NULL,
  `model_car_id` int(11) NOT NULL,
  `year_car_id` int(11) NOT NULL,
  `level_car_id` int(11) NOT NULL,
  `damages_first_id` int(11) NOT NULL,
  `type_repair_id` int(11) NOT NULL,
  `sub_model_car_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `insurance_car_register_province` varchar(255) NOT NULL,
  `insurance_car_image` varchar(255) NOT NULL,
  `insurance_car_name` varchar(255) NOT NULL,
  `insurance_car_prb` varchar(255) NOT NULL,
  `insurance_car_premium_price` varchar(255) NOT NULL,
  `insurance_car_lost_fire_price` varchar(255) NOT NULL,
  `insurance_car_equiment_damage_price` varchar(255) NOT NULL,
  `insurance_car_first_damage_price` varchar(255) NOT NULL,
  `insurance_car_price` int(11) NOT NULL,
  `insureance_car_text1_1` varchar(255) NOT NULL,
  `insureance_car_text1_2` varchar(255) NOT NULL,
  `insureance_car_text1_3` varchar(255) NOT NULL,
  `insureance_car_text1_4` varchar(255) NOT NULL,
  `insureance_car_text2_1` varchar(255) NOT NULL,
  `insureance_car_text2_2` varchar(255) NOT NULL,
  `insureance_car_text3_1` varchar(255) NOT NULL,
  `insureance_car_text3_2` varchar(255) NOT NULL,
  `insureance_car_text3_3` varchar(255) NOT NULL,
  `insureance_car_text4_1` varchar(255) NOT NULL,
  `insureance_car_text4_2` varchar(255) NOT NULL,
  `insureance_car_text4_3` varchar(255) NOT NULL,
  `insureance_car_text4_4` varchar(255) NOT NULL,
  `insureance_car_value1_1` varchar(255) NOT NULL,
  `insureance_car_value1_2` varchar(255) NOT NULL,
  `insureance_car_value1_3` varchar(255) NOT NULL,
  `insureance_car_value1_4` varchar(255) NOT NULL,
  `insureance_car_value2_1` varchar(255) NOT NULL,
  `insureance_car_value2_2` varchar(255) NOT NULL,
  `insureance_car_value3_1` varchar(255) NOT NULL,
  `insureance_car_value3_2` varchar(255) NOT NULL,
  `insureance_car_value3_3` varchar(255) NOT NULL,
  `insureance_car_value4_1` varchar(255) NOT NULL,
  `insureance_car_value4_2` varchar(255) NOT NULL,
  `insureance_car_value4_3` varchar(255) NOT NULL,
  `insureance_car_value4_4` varchar(255) NOT NULL,
  `insurance_car_datetime_create` datetime NOT NULL,
  `insurance_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_car`
--

INSERT INTO `insurance_car` (`insurance_car_id`, `insurance_car_text1`, `insurance_car_text2`, `insurance_car_text3`, `insurance_car_text4`, `insurance_car_text5`, `insurance_car_text6`, `brand_car_id`, `model_car_id`, `year_car_id`, `level_car_id`, `damages_first_id`, `type_repair_id`, `sub_model_car_id`, `insurance_company_id`, `insurance_car_register_province`, `insurance_car_image`, `insurance_car_name`, `insurance_car_prb`, `insurance_car_premium_price`, `insurance_car_lost_fire_price`, `insurance_car_equiment_damage_price`, `insurance_car_first_damage_price`, `insurance_car_price`, `insureance_car_text1_1`, `insureance_car_text1_2`, `insureance_car_text1_3`, `insureance_car_text1_4`, `insureance_car_text2_1`, `insureance_car_text2_2`, `insureance_car_text3_1`, `insureance_car_text3_2`, `insureance_car_text3_3`, `insureance_car_text4_1`, `insureance_car_text4_2`, `insureance_car_text4_3`, `insureance_car_text4_4`, `insureance_car_value1_1`, `insureance_car_value1_2`, `insureance_car_value1_3`, `insureance_car_value1_4`, `insureance_car_value2_1`, `insureance_car_value2_2`, `insureance_car_value3_1`, `insureance_car_value3_2`, `insureance_car_value3_3`, `insureance_car_value4_1`, `insureance_car_value4_2`, `insureance_car_value4_3`, `insureance_car_value4_4`, `insurance_car_datetime_create`, `insurance_car_datetime_update`) VALUES
(1, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', 1, 1, 2, 1, 2, 1, 1, 1, 'ก2345', '20230213150220.png', 'ประกันภัย Insurewise', 'ไม่รวม', '5000 บาท', '4000 บาท', '3000 บาท', '2000 บาท', 461, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-02-06 10:41:19', '2023-02-13 15:02:20'),
(2, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', 1, 1, 2, 1, 2, 1, 1, 1, 'ก2345', '20230213150229.png', 'ประกันภัย Insurewise', 'ไม่รวม', '5000 บาท', '4000 บาท', '3000 บาท', '2000 บาท', 461, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-02-13 14:28:09', '2023-02-13 15:02:29'),
(3, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', 1, 1, 2, 1, 2, 1, 1, 1, 'ก2345', '20230213150238.png', 'ประกันภัย Insurewise', 'ไม่รวม', '5000 บาท', '4000 บาท', '3000 บาท', '2000 บาท', 461, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-02-13 14:39:31', '2023-02-13 15:02:38'),
(4, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', 1, 1, 2, 1, 2, 1, 1, 1, '', '', 'ประกันภัย Insurewise', 'ไม่รวม', '5000 บาท', '4000 บาท', '3000 บาท', '2000 บาท', 461, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '2023-05-29 16:47:03', '2023-06-09 15:16:14'),
(5, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', 1, 1, 2, 1, 2, 1, 1, 1, 'ก2345', '', 'ประกันภัย Insurewise', 'ไม่รวม', '5000 บาท', '4000 บาท', '3000 บาท', '2000 บาท', 461, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '2023-06-09 17:00:55', '2023-06-09 17:00:55'),
(6, 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', 1, 1, 2, 1, 2, 1, 1, 1, 'ก2345', '', 'ประกันภัย Insurewise', 'ไม่รวม', '5000 บาท', '4000 บาท', '3000 บาท', '2000 บาท', 461, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '2023-06-21 10:17:03', '2023-06-21 10:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

CREATE TABLE `insurance_company` (
  `insurance_company_id` int(11) NOT NULL,
  `insurance_company_image` varchar(255) NOT NULL,
  `insurance_company_logo` varchar(255) NOT NULL,
  `insurance_company_logo2` varchar(255) NOT NULL,
  `insurance_company_name` varchar(255) NOT NULL,
  `insurance_company_link` varchar(255) NOT NULL,
  `insurance_company_datetime_create` datetime NOT NULL,
  `insurance_company_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_company`
--

INSERT INTO `insurance_company` (`insurance_company_id`, `insurance_company_image`, `insurance_company_logo`, `insurance_company_logo2`, `insurance_company_name`, `insurance_company_link`, `insurance_company_datetime_create`, `insurance_company_datetime_update`) VALUES
(1, '202306151027092.png', '202302061038160.png', '202302061038161.png', 'วิริยะประกันภัย', 'https://www.sanook.com', '2023-02-06 10:38:17', '2023-06-15 10:27:09'),
(2, '202306151027252.png', '202302061038470.png', '202302061038481.png', 'กรุงเทพประกันภัย', 'https://www.sanook.com', '2023-02-06 10:38:48', '2023-06-15 10:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_condo`
--

CREATE TABLE `insurance_condo` (
  `insurance_condo_id` int(11) NOT NULL,
  `insurance_condo_row_id` int(11) NOT NULL,
  `insurance_condo_image` varchar(255) NOT NULL,
  `insurance_condo_text1` varchar(255) NOT NULL,
  `insurance_condo_text2` varchar(255) NOT NULL,
  `insurance_condo_text3` varchar(255) NOT NULL,
  `insurance_condo_text4` varchar(255) NOT NULL,
  `insurance_condo_text5` varchar(255) NOT NULL,
  `insurance_condo_text6` varchar(255) NOT NULL,
  `insurance_condo_text7` varchar(255) NOT NULL,
  `insurance_condo_name` varchar(255) NOT NULL,
  `insurance_condo_plan` varchar(255) NOT NULL,
  `insurance_condo_accident` varchar(255) NOT NULL,
  `insurance_condo_sick` varchar(255) NOT NULL,
  `insurance_condo_vaccine` varchar(255) NOT NULL,
  `insurance_condo_deposit` varchar(255) NOT NULL,
  `insurance_condo_injured` varchar(255) NOT NULL,
  `insurance_condo_funeral` varchar(255) NOT NULL,
  `insurance_condo_property` varchar(255) NOT NULL,
  `insurance_condo_premium_price` float(10,2) NOT NULL,
  `insurance_condo_datetime_create` datetime NOT NULL,
  `insurance_condo_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_condo`
--

INSERT INTO `insurance_condo` (`insurance_condo_id`, `insurance_condo_row_id`, `insurance_condo_image`, `insurance_condo_text1`, `insurance_condo_text2`, `insurance_condo_text3`, `insurance_condo_text4`, `insurance_condo_text5`, `insurance_condo_text6`, `insurance_condo_text7`, `insurance_condo_name`, `insurance_condo_plan`, `insurance_condo_accident`, `insurance_condo_sick`, `insurance_condo_vaccine`, `insurance_condo_deposit`, `insurance_condo_injured`, `insurance_condo_funeral`, `insurance_condo_property`, `insurance_condo_premium_price`, `insurance_condo_datetime_create`, `insurance_condo_datetime_update`) VALUES
(1, 1, '', 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', 1400.00, '2023-02-06 10:44:40', '2023-02-06 10:44:40'),
(2, 1, '', 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', 1400.00, '2023-02-13 14:51:06', '2023-02-13 14:51:06'),
(3, 1, '', 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', 1400.00, '2023-02-13 14:51:27', '2023-02-13 14:51:27'),
(5, 0, '', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '8', '9', '10', '11', '12', '13', '14', 7.00, '2023-06-09 17:04:16', '2023-06-09 17:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_condo_row`
--

CREATE TABLE `insurance_condo_row` (
  `insurance_condo_row_id` int(11) NOT NULL,
  `insurance_condo_row_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_condo_row_datetime_create` datetime NOT NULL,
  `insurance_condo_row_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurance_condo_row`
--

INSERT INTO `insurance_condo_row` (`insurance_condo_row_id`, `insurance_condo_row_name`, `insurance_condo_row_datetime_create`, `insurance_condo_row_datetime_update`) VALUES
(1, 'แถวที่ 1', '2023-02-06 05:43:21', '2023-02-06 05:43:21'),
(2, 'แถวที่ 2', '2023-02-06 05:43:21', '2023-02-06 05:43:21'),
(3, 'แถวที่ 3', '2023-02-06 05:44:12', '2023-02-06 05:44:12'),
(4, 'แถวที่ 4', '2023-02-06 05:44:12', '2023-02-06 05:44:12');

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
(1, 914, '500,000 บาท', '200,000 บาท', '20,000 บาท', '15,000 บาท', 'ตารางความคุ้มครอง', 'ความรับผิดต่อบุคคลภายนอก', 'ความบาดเจ็บทางร่างกายของผู้เอาประกันภัย', 'อุปกรณ์การเล่นกอล์ฟ', 'รางวัลพิเศษ \"โฮล-อิน-วัน\"', 'ความเสียหายต่อชีวิต ร่างกาย และทรัพย์สิน', 'การเสียชีวิต การสูญเสียอวัยวะ สายตา หรือทุพพลภาพถาวรสิ้นเชิง', 'ทุพพลภาพชั่วคราวสิ้นเชิง (ไม่เกิน 52 สัปดาห์)', 'ทุพพลภาพชั่วคราวบางส่วน (ไม่เกิน 52 สัปดาห์)', 'การรักษาพยาบาลต่ออุบัติเหตุแต่ละครั้ง', 'อุปกรณ์สูญหายหรือเสียหาย', 'การแข่งขันเป็นทางการ', 'การเล่นนอกเหนือจากการแข่งขัน', '500,000', '200,000', '1,000', '1,000', '20,000', '20,000', '15,000', '10,000', '2023-02-06 05:16:12', '2023-06-09 15:36:40');

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
  `insurance_healthy_premium_price` int(11) NOT NULL,
  `insurance_healthy_name` varchar(255) NOT NULL,
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

INSERT INTO `insurance_healthy` (`insurance_healthy_id`, `insurance_healthy_image`, `type_insurance_id`, `insurance_company_id`, `insurance_healthy_text1`, `insurance_healthy_text2`, `insurance_healthy_text3`, `insurance_healthy_text4`, `insurance_healthy_text1_1`, `insurance_healthy_text1_2`, `insurance_healthy_text1_3`, `insurance_healthy_text1_4`, `insurance_healthy_text2_1`, `insurance_healthy_text2_2`, `insurance_healthy_text3_1`, `insurance_healthy_text3_2`, `insurance_healthy_text3_3`, `insurance_healthy_text4_1`, `insurance_healthy_text4_2`, `insurance_healthy_text4_3`, `insurance_healthy_text4_4`, `insurance_healthy_age_begin`, `insurance_healthy_age_end`, `insurance_healthy_gender`, `insurance_healthy_premium_price`, `insurance_healthy_name`, `insurance_healthy_premium_start_price`, `insurance_healthy_special_cover`, `insurance_healthy_medical`, `insurance_healthy_medical_after_return_to_thai`, `insurance_healthy_emergency`, `insurance_healthy_daily_compensation`, `insurance_healthy_case_death`, `insurance_healthy_cost_of_repatriating`, `insurance_healthy_flight_delay`, `insurance_healthy_trip_cancel`, `insurance_healthy_mising_a_flight`, `insurance_healthy_lost_items`, `insurance_healthy_stolen_cash`, `insurance_healthy_travel_document`, `insurance_healthy_pc_notebook`, `insurance_healthy_datetime_create`, `insurance_healthy_datetime_update`) VALUES
(1, '20230213150340.png', 2, 2, 'สัมภาระสูญหาย/เสียหาย', 'ความคุ้มครองกรณีเสียชีวิต', 'ความคุ้มครองในการเดินทาง', 'ความคุ้มครองสัมภาระ และทรัพย์สิน', 'ค่ารักษาพยาบาล', 'ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย', 'เคลื่อนย้ายฉุกเฉิน', 'ค่าชดเชยรายวัน', 'ชดเชยกรณีเสียชีวิต', 'ค่าใช้จ่ายในการส่งศพกลับประเทศ', 'ความล่าช้าของเที่ยวบิน', 'การบอกเลิกการเดินทาง', 'การพลาดต่อเที่ยวบิน', 'สัมภาระสูญหาย/เสียหาย', 'เงินสดถูกขโมย', 'เอกสารเดินทาง', 'คอมพิวเตอร์โน๊ตบุ๊ค', 1, 20, 'หญิง', 500000, 'D Health Plus', 12274.00, '1,000,000 บาท', '-', '1,000,000 บาท', '-', '1,000,000 บาท', '-', '10,000 บาท', '-', '-', '-', '5,000 บาท', '-', '3,000 บาท', '-', '2023-02-06 10:42:07', '2023-06-09 15:29:54'),
(2, '20230213150350.png', 2, 2, 'สัมภาระสูญหาย/เสียหาย', 'ความคุ้มครองกรณีเสียชีวิต', 'ความคุ้มครองในการเดินทาง', 'ความคุ้มครองสัมภาระ และทรัพย์สิน', 'ค่ารักษาพยาบาล', 'ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย', 'เคลื่อนย้ายฉุกเฉิน', 'ค่าชดเชยรายวัน', 'ชดเชยกรณีเสียชีวิต', 'ค่าใช้จ่ายในการส่งศพกลับประเทศ', 'ความล่าช้าของเที่ยวบิน', 'การบอกเลิกการเดินทาง', 'การพลาดต่อเที่ยวบิน', 'สัมภาระสูญหาย/เสียหาย', 'เงินสดถูกขโมย', 'เอกสารเดินทาง', 'คอมพิวเตอร์โน๊ตบุ๊ค', 1, 20, 'หญิง', 500000, 'D Health Plus', 12274.00, '1,000,000 บาท', '-', '1,000,000 บาท', '-', '1,000,000 บาท', '-', '10,000 บาท', '-', '-', '-', '5,000 บาท', '-', '3,000 บาท', '-', '2023-02-06 11:34:26', '2023-02-13 15:03:50'),
(3, '20230213150359.png', 2, 2, 'สัมภาระสูญหาย/เสียหาย', 'ความคุ้มครองกรณีเสียชีวิต', 'ความคุ้มครองในการเดินทาง', 'ความคุ้มครองสัมภาระ และทรัพย์สิน', 'ค่ารักษาพยาบาล', 'ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย', 'เคลื่อนย้ายฉุกเฉิน', 'ค่าชดเชยรายวัน', 'ชดเชยกรณีเสียชีวิต', 'ค่าใช้จ่ายในการส่งศพกลับประเทศ', 'ความล่าช้าของเที่ยวบิน', 'การบอกเลิกการเดินทาง', 'การพลาดต่อเที่ยวบิน', 'สัมภาระสูญหาย/เสียหาย', 'เงินสดถูกขโมย', 'เอกสารเดินทาง', 'คอมพิวเตอร์โน๊ตบุ๊ค', 1, 20, 'หญิง', 500000, 'D Health Plus', 12274.00, '1,000,000 บาท', '-', '1,000,000 บาท', '-', '1,000,000 บาท', '-', '10,000 บาท', '-', '-', '-', '5,000 บาท', '-', '3,000 บาท', '-', '2023-02-13 14:42:06', '2023-02-13 15:03:59'),
(4, '20230213150408.png', 2, 2, 'สัมภาระสูญหาย/เสียหาย', 'ความคุ้มครองกรณีเสียชีวิต', 'ความคุ้มครองในการเดินทาง', 'ความคุ้มครองสัมภาระ และทรัพย์สิน', 'ค่ารักษาพยาบาล', 'ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย', 'เคลื่อนย้ายฉุกเฉิน', 'ค่าชดเชยรายวัน', 'ชดเชยกรณีเสียชีวิต', 'ค่าใช้จ่ายในการส่งศพกลับประเทศ', 'ความล่าช้าของเที่ยวบิน', 'การบอกเลิกการเดินทาง', 'การพลาดต่อเที่ยวบิน', 'สัมภาระสูญหาย/เสียหาย', 'เงินสดถูกขโมย', 'เอกสารเดินทาง', 'คอมพิวเตอร์โน๊ตบุ๊ค', 1, 20, 'หญิง', 500000, 'D Health Plus', 12274.00, '1,000,000 บาท', '-', '1,000,000 บาท', '-', '1,000,000 บาท', '-', '10,000 บาท', '-', '-', '-', '5,000 บาท', '-', '3,000 บาท', '-', '2023-02-13 14:45:05', '2023-02-13 15:04:08'),
(5, '20230214142224.png', 1, 1, 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 5, 55, 'ชาย', 50000, 'Test', 1000.00, 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', '2023-02-14 14:22:25', '2023-02-14 14:22:24'),
(7, '', 0, 0, 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', 16, 17, '', 21, '19', 20.00, '22', '23', '24', '25', '26', 'ค่าเสียหายส่วนแรก', 'เบี้ยประกัน', '1', '1', '2', '1', '2', '1', '1', '2023-06-09 17:03:08', '2023-06-09 17:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_home`
--

CREATE TABLE `insurance_home` (
  `insurance_home_id` int(11) NOT NULL,
  `insurance_home_row_id` int(11) NOT NULL,
  `insurance_home_image` varchar(255) NOT NULL,
  `insurance_home_text_1` varchar(255) NOT NULL,
  `insurance_home_text_2` varchar(255) NOT NULL,
  `insurance_home_text_3` varchar(255) NOT NULL,
  `insurance_home_text_4` varchar(255) NOT NULL,
  `insurance_home_text_5` varchar(255) NOT NULL,
  `insurance_home_text_6` varchar(255) NOT NULL,
  `insurance_home_text_7` varchar(255) NOT NULL,
  `insurance_home_name` varchar(255) NOT NULL,
  `insurance_home_plan` varchar(255) NOT NULL,
  `insurance_home_premium_price` varchar(255) NOT NULL,
  `insurance_home_accident` varchar(255) NOT NULL,
  `insurance_home_sick` varchar(255) NOT NULL,
  `insurance_home_vaccine` varchar(255) NOT NULL,
  `insurance_home_deposit` varchar(255) NOT NULL,
  `insurance_home_external` varchar(255) NOT NULL,
  `insurance_home_injury` varchar(255) NOT NULL,
  `insurance_home_property` varchar(255) NOT NULL,
  `insurance_home_datetime_create` datetime NOT NULL,
  `insurance_home_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_home`
--

INSERT INTO `insurance_home` (`insurance_home_id`, `insurance_home_row_id`, `insurance_home_image`, `insurance_home_text_1`, `insurance_home_text_2`, `insurance_home_text_3`, `insurance_home_text_4`, `insurance_home_text_5`, `insurance_home_text_6`, `insurance_home_text_7`, `insurance_home_name`, `insurance_home_plan`, `insurance_home_premium_price`, `insurance_home_accident`, `insurance_home_sick`, `insurance_home_vaccine`, `insurance_home_deposit`, `insurance_home_external`, `insurance_home_injury`, `insurance_home_property`, `insurance_home_datetime_create`, `insurance_home_datetime_update`) VALUES
(1, 1, '', 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '1400', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', '2023-02-06 10:44:20', '2023-02-06 10:44:20'),
(2, 1, '', 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '1400', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', '2023-02-13 14:50:41', '2023-02-13 14:50:41'),
(3, 0, '', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '2023-06-09 17:04:07', '2023-06-09 17:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_home_row`
--

CREATE TABLE `insurance_home_row` (
  `insurance_home_row_id` int(11) NOT NULL,
  `insurance_home_row_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_home_row_datetime_create` datetime NOT NULL,
  `insurance_home_row_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_pet`
--

CREATE TABLE `insurance_pet` (
  `insurance_pet_id` int(11) NOT NULL,
  `insurance_pet_row_id` int(11) NOT NULL,
  `insurance_pet_image` varchar(255) NOT NULL,
  `insurance_pet_text1` varchar(255) NOT NULL,
  `insurance_pet_text2` varchar(255) NOT NULL,
  `insurance_pet_text3` varchar(255) NOT NULL,
  `insurance_pet_text4` varchar(255) NOT NULL,
  `insurance_pet_text5` varchar(255) NOT NULL,
  `insurance_pet_text6` varchar(255) NOT NULL,
  `insurance_pet_text7` varchar(255) NOT NULL,
  `insurance_pet_name` varchar(255) NOT NULL,
  `insurance_pet_plan` varchar(255) NOT NULL,
  `insurance_pet_accident` varchar(255) NOT NULL,
  `insurance_pet_sick` varchar(255) NOT NULL,
  `insurance_pet_vaccine` varchar(255) NOT NULL,
  `insurance_pet_deposit` varchar(255) NOT NULL,
  `insurance_pet_injured` varchar(255) NOT NULL,
  `insurance_pet_funeral` varchar(255) NOT NULL,
  `insurance_pet_property` varchar(255) NOT NULL,
  `insurance_pet_premium_price` float(10,2) NOT NULL,
  `insurance_pet_datetime_create` datetime NOT NULL,
  `insurance_pet_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_pet`
--

INSERT INTO `insurance_pet` (`insurance_pet_id`, `insurance_pet_row_id`, `insurance_pet_image`, `insurance_pet_text1`, `insurance_pet_text2`, `insurance_pet_text3`, `insurance_pet_text4`, `insurance_pet_text5`, `insurance_pet_text6`, `insurance_pet_text7`, `insurance_pet_name`, `insurance_pet_plan`, `insurance_pet_accident`, `insurance_pet_sick`, `insurance_pet_vaccine`, `insurance_pet_deposit`, `insurance_pet_injured`, `insurance_pet_funeral`, `insurance_pet_property`, `insurance_pet_premium_price`, `insurance_pet_datetime_create`, `insurance_pet_datetime_update`) VALUES
(1, 1, '20230214143034.png', 'ค่ารักษาจากอุบัติเหตุ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', 1400.00, '2023-02-06 10:43:57', '2023-02-14 14:30:34'),
(2, 1, '20230529155541.png', 'ค่ารักษาจากอุบัติเหตุ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', 1400.00, '2023-02-13 14:49:43', '2023-05-29 15:55:41'),
(3, 3, '20230529155551.png', 'ค่ารักษาจากอุบัติเหตุ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', 1400.00, '2023-02-13 14:50:07', '2023-05-29 15:55:51'),
(5, 0, '', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '8', '9', '10', '11', '12', '13', '14', 7.00, '2023-06-09 17:03:48', '2023-06-09 17:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_pet_row`
--

CREATE TABLE `insurance_pet_row` (
  `insurance_pet_row_id` int(11) NOT NULL,
  `insurance_pet_row_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_pet_row_datetime_create` datetime NOT NULL,
  `insurance_pet_row_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurance_pet_row`
--

INSERT INTO `insurance_pet_row` (`insurance_pet_row_id`, `insurance_pet_row_name`, `insurance_pet_row_datetime_create`, `insurance_pet_row_datetime_update`) VALUES
(1, 'แถวที่ 1', '2023-02-06 05:51:22', '2023-02-06 05:51:22'),
(2, 'แถวที่ 2', '2023-02-06 05:51:22', '2023-02-06 05:51:22'),
(3, 'แถวที่ 3', '2023-02-06 05:52:14', '2023-02-06 05:52:14'),
(4, 'แถวที่ 4', '2023-02-06 05:52:14', '2023-02-06 05:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_transportation`
--

CREATE TABLE `insurance_transportation` (
  `insurance_transportation_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `insurance_transportation_row` int(11) NOT NULL,
  `insurance_transportation_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_price` int(11) NOT NULL,
  `insurance_transportation_text1` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text2` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text3` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text4` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text5` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text6` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text7` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text9` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_text14` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_1` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_2` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_3` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_4` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_5` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_6` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_7` text COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_9` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_14` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_transportation_datetime_create` datetime NOT NULL,
  `insurance_transportation_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurance_transportation`
--

INSERT INTO `insurance_transportation` (`insurance_transportation_id`, `insurance_company_id`, `insurance_transportation_row`, `insurance_transportation_plan`, `insurance_transportation_price`, `insurance_transportation_text1`, `insurance_transportation_text2`, `insurance_transportation_text3`, `insurance_transportation_text4`, `insurance_transportation_text5`, `insurance_transportation_text6`, `insurance_transportation_text7`, `insurance_transportation_text8`, `insurance_transportation_text9`, `insurance_transportation_text10`, `insurance_transportation_text11`, `insurance_transportation_text12`, `insurance_transportation_text13`, `insurance_transportation_text14`, `insurance_transportation_1`, `insurance_transportation_2`, `insurance_transportation_3`, `insurance_transportation_4`, `insurance_transportation_5`, `insurance_transportation_6`, `insurance_transportation_7`, `insurance_transportation_8`, `insurance_transportation_9`, `insurance_transportation_10`, `insurance_transportation_11`, `insurance_transportation_12`, `insurance_transportation_13`, `insurance_transportation_14`, `insurance_transportation_datetime_create`, `insurance_transportation_datetime_update`) VALUES
(1, 1, 1, 'อุบัติเหตุ XS', 1400, 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', '', '', '', '', '', '', '', '3,000 บาท / ครั้ง', '-', '-', 'ไม่คุ้มครอง', '20,000 บาท', '20,000 บาท', '-', '', '', '', '', '', '', '', '2023-03-01 17:35:38', '2023-03-01 17:35:38'),
(3, 0, 0, 'ทะเบียนจังหวัด', 0, '1', '2', '3', '4', '5', '6', '7', '', '', '', '', '', '', '', '8', '9', '10', '11', '12', '13', '14', '', '', '', '', '', '', '', '2023-06-09 17:06:33', '2023-06-09 17:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_travel`
--

CREATE TABLE `insurance_travel` (
  `insurance_travel_id` int(11) NOT NULL,
  `insurance_travel_row_id` int(11) NOT NULL,
  `insurance_travel_image` varchar(255) NOT NULL,
  `insurance_travel_text1` varchar(255) NOT NULL,
  `insurance_travel_text_2` varchar(255) NOT NULL,
  `insurance_travel_text_3` varchar(255) NOT NULL,
  `insurance_travel_text_4` varchar(255) NOT NULL,
  `insurance_travel_text_5` varchar(255) NOT NULL,
  `insurance_travel_text_6` varchar(255) NOT NULL,
  `insurance_travel_text_7` varchar(255) NOT NULL,
  `insurance_travel_name` varchar(255) NOT NULL,
  `insurance_travel_plan` varchar(255) NOT NULL,
  `insurance_travel_premium_price` varchar(255) NOT NULL,
  `insurance_travel_accident` varchar(255) NOT NULL,
  `insurance_travel_sick` varchar(255) NOT NULL,
  `insurance_travel_vaccine` varchar(255) NOT NULL,
  `insurance_travel_deposit` varchar(255) NOT NULL,
  `insurance_travel_external` varchar(255) NOT NULL,
  `insurance_travel_injury` varchar(255) NOT NULL,
  `insurance_travel_property` varchar(255) NOT NULL,
  `insurance_travel_datetime_create` datetime NOT NULL,
  `insurance_travel_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_travel`
--

INSERT INTO `insurance_travel` (`insurance_travel_id`, `insurance_travel_row_id`, `insurance_travel_image`, `insurance_travel_text1`, `insurance_travel_text_2`, `insurance_travel_text_3`, `insurance_travel_text_4`, `insurance_travel_text_5`, `insurance_travel_text_6`, `insurance_travel_text_7`, `insurance_travel_name`, `insurance_travel_plan`, `insurance_travel_premium_price`, `insurance_travel_accident`, `insurance_travel_sick`, `insurance_travel_vaccine`, `insurance_travel_deposit`, `insurance_travel_external`, `insurance_travel_injury`, `insurance_travel_property`, `insurance_travel_datetime_create`, `insurance_travel_datetime_update`) VALUES
(1, 1, '20230529154924.png', 'ค่ารักษาจากอุบัติเหตุ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '1400', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', '2023-02-06 10:43:31', '2023-05-29 15:49:24'),
(2, 2, '20230529154932.png', 'ค่ารักษาจากอุบัติเหตุ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', 'ธนชาต', 'อุบัติเหตุ XS', '1400', '3,000 บาท/ครั้ง', '-', '-', 'ไม่คุ้มครอง', '-', '20,000 บาท', '20,000 บาท', '2023-02-14 14:27:06', '2023-05-29 15:49:32'),
(4, 0, '', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '2023-06-09 17:03:36', '2023-06-09 17:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_travel_package`
--

CREATE TABLE `insurance_travel_package` (
  `insurance_travel_package_id` int(11) NOT NULL,
  `insurance_pet_row_id` int(11) NOT NULL,
  `insurance_travel_package_image` varchar(255) NOT NULL,
  `insurance_travel_package_name` varchar(255) NOT NULL,
  `insurance_travel_package_plan` varchar(255) NOT NULL,
  `insurance_travel_package_cost_price` float(10,2) NOT NULL,
  `insurance_travel_package_case_of_death_price` float(10,2) NOT NULL,
  `insurance_travel_package_medical_expenses_price` float(10,2) NOT NULL,
  `insurance_travel_package_emergency_price` float(10,2) NOT NULL,
  `insurance_travel_package_equipment_lost_price` float(10,2) NOT NULL,
  `insurance_travel_package_datetime_create` datetime NOT NULL,
  `insurance_travel_package_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_travel_row`
--

CREATE TABLE `insurance_travel_row` (
  `insurance_travel_row_id` int(11) NOT NULL,
  `insurance_travel_row_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance_travel_row_datetime_create` datetime NOT NULL,
  `insurance_travel_row_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurance_travel_row`
--

INSERT INTO `insurance_travel_row` (`insurance_travel_row_id`, `insurance_travel_row_name`, `insurance_travel_row_datetime_create`, `insurance_travel_row_datetime_update`) VALUES
(1, 'แถวที่ 1', '2023-02-06 05:46:02', '2023-02-06 05:46:02'),
(2, 'แถวที่ 2', '2023-02-06 05:46:02', '2023-02-06 05:46:02'),
(3, 'แถวที่ 3', '2023-02-06 05:46:52', '2023-02-06 05:46:52'),
(4, 'แถวที่ 4', '2023-02-06 05:46:52', '2023-02-06 05:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_upload_pdf`
--

CREATE TABLE `insurance_upload_pdf` (
  `insurance_download_pdf_id` int(11) NOT NULL,
  `transportation_pdf` varchar(255) NOT NULL,
  `travel_pdf` varchar(255) NOT NULL,
  `golf_pdf` varchar(255) NOT NULL,
  `business_pdf` varchar(255) NOT NULL,
  `home_pdf` varchar(255) NOT NULL,
  `insurance_download_pdf_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_upload_pdf`
--

INSERT INTO `insurance_upload_pdf` (`insurance_download_pdf_id`, `transportation_pdf`, `travel_pdf`, `golf_pdf`, `business_pdf`, `home_pdf`, `insurance_download_pdf_datetime_update`) VALUES
(1, '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `level_car`
--

CREATE TABLE `level_car` (
  `level_car_id` int(11) NOT NULL,
  `level_car_name` varchar(255) NOT NULL,
  `level_car_datetime_create` datetime NOT NULL,
  `level_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level_car`
--

INSERT INTO `level_car` (`level_car_id`, `level_car_name`, `level_car_datetime_create`, `level_car_datetime_update`) VALUES
(1, 'ชั้น 1', '2023-02-06 10:35:37', '2023-02-06 10:35:37'),
(2, 'ชั้น 2', '2023-02-06 10:35:45', '2023-02-06 10:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `log_import_excel`
--

CREATE TABLE `log_import_excel` (
  `log_import_excel_id` int(11) NOT NULL,
  `log_import_excel_file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_import_excel_datetime_create` datetime NOT NULL,
  `log_import_excel_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_import_excel_insurance` enum('car','health','prb','travel','pet','home','condo','extended','business','accident','cancer','transportation') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log_import_excel`
--

INSERT INTO `log_import_excel` (`log_import_excel_id`, `log_import_excel_file_name`, `log_import_excel_datetime_create`, `log_import_excel_user`, `log_import_excel_insurance`) VALUES
(1, 'import_excel_insurance_car.xlsx', '2023-06-09 17:00:55', 'admin', 'car'),
(2, 'import_excel_insurance_car.xlsx', '2023-06-09 17:03:08', 'admin', 'health'),
(3, 'import_excel_insurance_car.xlsx', '2023-06-09 17:03:24', 'admin', 'prb'),
(4, 'import_excel_insurance_car.xlsx', '2023-06-09 17:03:36', 'admin', 'travel'),
(5, 'import_excel_insurance_car.xlsx', '2023-06-09 17:03:48', 'admin', 'pet'),
(6, 'import_excel_insurance_car.xlsx', '2023-06-09 17:04:07', 'admin', 'home'),
(7, 'import_excel_insurance_car.xlsx', '2023-06-09 17:04:16', 'admin', 'condo'),
(8, 'import_excel_insurance_car.xlsx', '2023-06-09 17:04:26', 'admin', 'extended'),
(9, 'import_excel_insurance_car.xlsx', '2023-06-09 17:04:35', 'admin', 'business'),
(10, 'import_excel_insurance_car.xlsx', '2023-06-09 17:06:13', 'admin', 'accident'),
(11, 'import_excel_insurance_car.xlsx', '2023-06-09 17:06:23', 'admin', 'cancer'),
(12, 'import_excel_insurance_car.xlsx', '2023-06-09 17:06:33', 'admin', 'transportation'),
(13, 'import_excel_insurance_car.xlsx', '2023-06-21 10:17:03', 'admin', 'car');

-- --------------------------------------------------------

--
-- Table structure for table `map_insurance_company`
--

CREATE TABLE `map_insurance_company` (
  `map_company_co_id` int(11) NOT NULL,
  `insurance_car_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `map_company_co_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_code` varchar(255) NOT NULL,
  `member_name_surname` varchar(255) NOT NULL,
  `member_tel` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_address` text NOT NULL,
  `member_datetime_create` datetime NOT NULL,
  `member_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_code`, `member_name_surname`, `member_tel`, `member_email`, `member_password`, `member_address`, `member_datetime_create`, `member_datetime_update`) VALUES
(1, '202305290001', 'Sitiporn Trongwichien', '0990943010', 'nirvanaford94@gmail.com', 'qwaszx', '366/66 ซ.สะพานขวา ถ.ประชาราษฏร์ 2 บางซื่อ กทม', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '202306080001', 'test', '0801234567', 'ww@gmail.com', 'aaaa1111', 'aaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `model_car`
--

CREATE TABLE `model_car` (
  `model_car_id` int(11) NOT NULL,
  `brand_car_id` int(11) NOT NULL,
  `model_car_name` varchar(255) NOT NULL,
  `model_car_datetime_create` datetime NOT NULL,
  `model_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_car`
--

INSERT INTO `model_car` (`model_car_id`, `brand_car_id`, `model_car_name`, `model_car_datetime_create`, `model_car_datetime_update`) VALUES
(1, 1, 'Alpha', '2023-02-06 09:55:05', '2023-02-14 14:12:59'),
(2, 3, 'Alpha 2.0', '2023-02-28 14:04:35', '2023-02-28 14:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_article`
--

CREATE TABLE `news_and_article` (
  `news_and_article_id` int(11) NOT NULL,
  `news_and_article_news_or_article` enum('News','Article') NOT NULL,
  `news_and_article_suggest` enum('No','Yes') NOT NULL,
  `news_and_article_home` enum('No','Yes') NOT NULL,
  `news_and_article_image` varchar(255) NOT NULL,
  `news_and_article_topic` varchar(255) NOT NULL,
  `news_and_article_description` text NOT NULL,
  `news_and_article_date` date NOT NULL,
  `news_and_article_detail` text NOT NULL,
  `news_and_article_datetime_create` datetime NOT NULL,
  `news_and_article_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_and_article`
--

INSERT INTO `news_and_article` (`news_and_article_id`, `news_and_article_news_or_article`, `news_and_article_suggest`, `news_and_article_home`, `news_and_article_image`, `news_and_article_topic`, `news_and_article_description`, `news_and_article_date`, `news_and_article_detail`, `news_and_article_datetime_create`, `news_and_article_datetime_update`) VALUES
(1, 'News', 'No', 'No', '20230530091221.png', 'Topic', 'Description', '2023-05-30', '<p>\r\n	test detail</p>', '2023-05-30 09:12:21', '2023-05-30 09:13:22'),
(3, 'News', 'Yes', 'No', '20230616121539.png', 'test', 'test', '2023-06-16', '<p>\r\n	test</p>', '2023-06-16 12:15:27', '2023-06-16 12:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `pet_faq`
--

CREATE TABLE `pet_faq` (
  `pet_faq_id` int(11) NOT NULL,
  `pet_faq_question` varchar(255) NOT NULL,
  `pet_faq_answer` text NOT NULL,
  `pet_faq_datetime_create` datetime NOT NULL,
  `pet_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet_faq`
--

INSERT INTO `pet_faq` (`pet_faq_id`, `pet_faq_question`, `pet_faq_answer`, `pet_faq_datetime_create`, `pet_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 15:57:02', '2023-05-29 15:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `prb`
--

CREATE TABLE `prb` (
  `prb_id` int(11) NOT NULL,
  `prb_image` varchar(255) NOT NULL,
  `prb_text1` varchar(255) NOT NULL,
  `prb_text2` varchar(255) NOT NULL,
  `prb_text1_1` varchar(255) NOT NULL,
  `prb_text1_2` varchar(255) NOT NULL,
  `prb_text2_1` varchar(255) NOT NULL,
  `prb_text2_2` varchar(255) NOT NULL,
  `prb_text2_3` varchar(255) NOT NULL,
  `prb_text2_4` varchar(255) NOT NULL,
  `prb_name` varchar(255) NOT NULL,
  `prb_name2` varchar(255) NOT NULL,
  `prb_name3` varchar(255) NOT NULL,
  `prb_price` float(10,2) NOT NULL,
  `prb_medical_expenses_price1` varchar(255) NOT NULL,
  `prb_died_price1` varchar(255) NOT NULL,
  `prb_medical_expenses_price2` varchar(255) NOT NULL,
  `prb_died_price2` varchar(255) NOT NULL,
  `prb_dismemberment_price` varchar(255) NOT NULL,
  `prb_daily_compensation_price` varchar(255) NOT NULL,
  `prb_datetime_create` datetime NOT NULL,
  `prb_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prb`
--

INSERT INTO `prb` (`prb_id`, `prb_image`, `prb_text1`, `prb_text2`, `prb_text1_1`, `prb_text1_2`, `prb_text2_1`, `prb_text2_2`, `prb_text2_3`, `prb_text2_4`, `prb_name`, `prb_name2`, `prb_name3`, `prb_price`, `prb_medical_expenses_price1`, `prb_died_price1`, `prb_medical_expenses_price2`, `prb_died_price2`, `prb_dismemberment_price`, `prb_daily_compensation_price`, `prb_datetime_create`, `prb_datetime_update`) VALUES
(1, '20230529154103.png', 'คุ้มครองค่าเสียหายเบื้องต้น ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต สูญเสียอวัยวะ หรือ ทุพพลภาพถาวรสิ้นเชิง', 'คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง', 'การสูญเสียอวัยวะ', 'ค่าชดเชยรายวัน (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)', 'รถเก๋ง', 'กระบะ 4 ประตู', 'ใช้สำหรับรถยนต์ส่วนบุคคลเท่านั้น', 645.00, '30,000 บาท', '35,000 บาท', '80,000 บาท', '500,000 บาท', '200,000 - 500,000 บาท', '200 บาท/วัน (สูงสุดไม่เกิน 20 วัน)', '2023-02-06 10:43:09', '2023-05-29 15:41:03'),
(2, '20230529154114.png', 'คุ้มครองค่าเสียหายเบื้องต้น ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต สูญเสียอวัยวะ หรือ ทุพพลภาพถาวรสิ้นเชิง', 'คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง', 'การสูญเสียอวัยวะ', 'ค่าชดเชยรายวัน (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)', 'รถเก๋ง', 'กระบะ 4 ประตู', 'ใช้สำหรับรถยนต์ส่วนบุคคลเท่านั้น', 645.00, '30,000 บาท', '35,000 บาท', '80,000 บาท', '500,000 บาท', '200,000 - 500,000 บาท', '200 บาท/วัน (สูงสุดไม่เกิน 20 วัน)', '2023-02-13 14:49:16', '2023-05-29 15:41:14'),
(3, '20230529154125.png', 'คุ้มครองค่าเสียหายเบื้องต้น ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต สูญเสียอวัยวะ หรือ ทุพพลภาพถาวรสิ้นเชิง', 'คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง', 'การสูญเสียอวัยวะ', 'ค่าชดเชยรายวัน (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)', 'รถเก๋ง', 'กระบะ 4 ประตู', 'ใช้สำหรับรถยนต์ส่วนบุคคลเท่านั้น', 645.00, '30,000 บาท', '35,000 บาท', '80,000 บาท', '500,000 บาท', '200,000 - 500,000 บาท', '200 บาท/วัน (สูงสุดไม่เกิน 20 วัน)', '2023-02-14 13:44:20', '2023-05-29 15:41:25'),
(4, '20230529154134.png', 'คุ้มครองค่าเสียหายเบื้องต้น ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต สูญเสียอวัยวะ หรือ ทุพพลภาพถาวรสิ้นเชิง', 'คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย', 'ค่ารักษาพยาบาล (ตามจริง)', 'การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง', 'การสูญเสียอวัยวะ', 'ค่าชดเชยรายวัน (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)', 'รถเก๋ง กระบะ', 'กระบะ 4 ประตู', 'ใช้สำหรับรถยนต์ส่วนบุคคลเท่านั้น', 645.00, '30,000 บาท', '35,000 บาท', '80,000 บาท', '500,000 บาท', '200,000 - 500,000 บาท', '200 บาท/วัน (สูงสุดไม่เกิน 20 วัน)', '2023-02-14 13:45:10', '2023-05-29 15:41:34'),
(6, '', 'ทะเบียนจังหวัด', 'ทุนประกัน', 'สูญหาย/ไฟไหม้', 'ความเสียหายต่อ ทรัพย์สิน', '1', '2', '3', '4', '5', '6', '7', 8.00, '9', '10', '11', '12', '13', '14', '2023-06-09 17:03:24', '2023-06-09 17:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `prb_faq`
--

CREATE TABLE `prb_faq` (
  `prb_faq_id` int(11) NOT NULL,
  `prb_faq_question` varchar(255) NOT NULL,
  `prb_faq_answer` text NOT NULL,
  `prb_faq_datetime_create` datetime NOT NULL,
  `prb_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prb_faq`
--

INSERT INTO `prb_faq` (`prb_faq_id`, `prb_faq_question`, `prb_faq_answer`, `prb_faq_datetime_create`, `prb_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 15:42:48', '2023-05-29 15:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `prb_pdf`
--

CREATE TABLE `prb_pdf` (
  `prb_pdf_id` int(11) NOT NULL,
  `prb_pdf_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prb_pdf_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prb_pdf`
--

INSERT INTO `prb_pdf` (`prb_pdf_id`, `prb_pdf_file`, `prb_pdf_datetime_update`) VALUES
(1, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `promotion_image` varchar(255) NOT NULL,
  `promotion_topic` varchar(255) NOT NULL,
  `promotion_text1` text NOT NULL,
  `promotion_text2` text NOT NULL,
  `promotion_detail_image` varchar(255) NOT NULL,
  `promotion_condition` text NOT NULL,
  `promotion_datetime_create` datetime NOT NULL,
  `promotion_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `promotion_image`, `promotion_topic`, `promotion_text1`, `promotion_text2`, `promotion_detail_image`, `promotion_condition`, `promotion_datetime_create`, `promotion_datetime_update`) VALUES
(1, '20230530091421.png', 'Test', 'Test1', 'Test2', '20230530091421.png', 'test', '2023-05-30 09:14:21', '2023-05-30 09:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name_in_thai` varchar(150) NOT NULL,
  `name_in_english` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `code`, `name_in_thai`, `name_in_english`) VALUES
(1, 10, 'กรุงเทพมหานคร', 'Bangkok'),
(2, 11, 'สมุทรปราการ', 'Samut Prakarn'),
(3, 12, 'นนทบุรี', 'Nonthaburi'),
(4, 13, 'ปทุมธานี', 'Pathum Thani'),
(5, 14, 'พระนครศรีอยุธยา', 'Phra Nakhon Si Ayutthaya'),
(6, 15, 'อ่างทอง', 'Ang Thong'),
(7, 16, 'ลพบุรี', 'Lop Buri'),
(8, 17, 'สิงห์บุรี', 'Sing Buri'),
(9, 18, 'ชัยนาท', 'Chai Nat'),
(10, 19, 'สระบุรี', 'Saraburi'),
(11, 20, 'ชลบุรี', 'Chon Buri'),
(12, 21, 'ระยอง', 'Rayong'),
(13, 22, 'จันทบุรี', 'Chanthaburi'),
(14, 23, 'ตราด', 'Trat'),
(15, 24, 'ฉะเชิงเทรา', 'Chachoengsao'),
(16, 25, 'ปราจีนบุรี', 'Prachin Buri'),
(17, 26, 'นครนายก', 'Nakhon Nayok'),
(18, 27, 'สระแก้ว', 'Sa kaeo'),
(19, 30, 'นครราชสีมา', 'Nakhon Ratchasima'),
(20, 31, 'บุรีรัมย์', 'Buri Ram'),
(21, 32, 'สุรินทร์', 'Surin'),
(22, 33, 'ศรีสะเกษ', 'Si Sa Ket'),
(23, 34, 'อุบลราชธานี', 'Ubon Ratchathani'),
(24, 35, 'ยโสธร', 'Yasothon'),
(25, 36, 'ชัยภูมิ', 'Chaiyaphum'),
(26, 37, 'อำนาจเจริญ', 'Amnat Charoen'),
(27, 38, 'บึงกาฬ', 'Bueng Kan'),
(28, 39, 'หนองบัวลำภู', 'Nong Bua Lam Phu'),
(29, 40, 'ขอนแก่น', 'Khon Kaen'),
(30, 41, 'อุดรธานี', 'Udon Thani'),
(31, 42, 'เลย', 'Loei'),
(32, 43, 'หนองคาย', 'Nong Khai'),
(33, 44, 'มหาสารคาม', 'Maha Sarakham'),
(34, 45, 'ร้อยเอ็ด', 'Roi Et'),
(35, 46, 'กาฬสินธุ์', 'Kalasin'),
(36, 47, 'สกลนคร', 'Sakon Nakhon'),
(37, 48, 'นครพนม', 'Nakhon Phanom'),
(38, 49, 'มุกดาหาร', 'Mukdahan'),
(39, 50, 'เชียงใหม่', 'Chiang Mai'),
(40, 51, 'ลำพูน', 'Lamphun'),
(41, 52, 'ลำปาง', 'Lampang'),
(42, 53, 'อุตรดิตถ์', 'Uttaradit'),
(43, 54, 'แพร่', 'Phrae'),
(44, 55, 'น่าน', 'Nan'),
(45, 56, 'พะเยา', 'Phayao'),
(46, 57, 'เชียงราย', 'Chiang Rai'),
(47, 58, 'แม่ฮ่องสอน', 'Mae Hong Son'),
(48, 60, 'นครสวรรค์', 'Nakhon Sawan'),
(49, 61, 'อุทัยธานี', 'Uthai Thani'),
(50, 62, 'กำแพงเพชร', 'Kamphaeng Phet'),
(51, 63, 'ตาก', 'Tak'),
(52, 64, 'สุโขทัย', 'Sukhothai'),
(53, 65, 'พิษณุโลก', 'Phitsanulok'),
(54, 66, 'พิจิตร', 'Phichit'),
(55, 67, 'เพชรบูรณ์', 'Phetchabun'),
(56, 70, 'ราชบุรี', 'Ratchaburi'),
(57, 71, 'กาญจนบุรี', 'Kanchanaburi'),
(58, 72, 'สุพรรณบุรี', 'Suphan Buri'),
(59, 73, 'นครปฐม', 'Nakhon Pathom'),
(60, 74, 'สมุทรสาคร', 'Samut Sakhon'),
(61, 75, 'สมุทรสงคราม', 'Samut Songkhram'),
(62, 76, 'เพชรบุรี', 'Phetchaburi'),
(63, 77, 'ประจวบคีรีขันธ์', 'Prachuap Khiri Khan'),
(64, 80, 'นครศรีธรรมราช', 'Nakhon Si Thammarat'),
(65, 81, 'กระบี่', 'Krabi'),
(66, 82, 'พังงา', 'Phang-nga'),
(67, 83, 'ภูเก็ต', 'Phuket'),
(68, 84, 'สุราษฎร์ธานี', 'Surat Thani'),
(69, 85, 'ระนอง', 'Ranong'),
(70, 86, 'ชุมพร', 'Chumphon'),
(71, 90, 'สงขลา', 'Songkhla'),
(72, 91, 'สตูล', 'Satun'),
(73, 92, 'ตรัง', 'Trang'),
(74, 93, 'พัทลุง', 'Phatthalung'),
(75, 94, 'ปัตตานี', 'Pattani'),
(76, 95, 'ยะลา', 'Yala'),
(77, 96, 'นราธิวาส', 'Narathiwat');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_car`
--

CREATE TABLE `quotation_car` (
  `quotation_car_id` int(11) NOT NULL,
  `insurance_car_id` int(11) NOT NULL,
  `quotation_car_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_car_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_car_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_car_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_car_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotation_car`
--

INSERT INTO `quotation_car` (`quotation_car_id`, `insurance_car_id`, `quotation_car_name_surname`, `quotation_car_telephone`, `quotation_car_email`, `quotation_car_call`, `quotation_car_datetime_create`) VALUES
(1, 1, 'Ford Fuji', '021234567', 'aa@aa.com', 'พรุ่งนี้', '2023-02-13 17:20:37'),
(2, 1, 'สิทธิพร ตรองวิเชียร', '0990943010', 'sitiporn@orange-thailand.com', 'พรุ่งนี้', '2023-02-14 13:50:08'),
(3, 2, 'fsd', '0999999999', 'nirvanaford94@gmail.com', 'fff', '2023-02-24 16:41:46'),
(4, 1, '111', '0990943010', '111', '111', '2023-06-21 09:44:20'),
(5, 1, '111', '0990943010', 'aa@aa.com', '111', '2023-06-21 09:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_health`
--

CREATE TABLE `quotation_health` (
  `quotation_health_id` int(11) NOT NULL,
  `insurance_healthy_id` int(11) NOT NULL,
  `quotation_health_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_health_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_health_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_health_call` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quotation_health_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotation_health`
--

INSERT INTO `quotation_health` (`quotation_health_id`, `insurance_healthy_id`, `quotation_health_name_surname`, `quotation_health_telephone`, `quotation_health_email`, `quotation_health_call`, `quotation_health_datetime_create`) VALUES
(1, 1, 'Test Test', '021234567', 'aa@aa.com', 'พรุ่งนี้', '2023-02-13 17:29:23'),
(2, 1, '11', '11', 'aa@aa.com', '456', '2023-02-15 14:26:34'),
(3, 2, '2222', '0212345678', 'nirvanaford94@gmail.com', '444', '2023-02-24 16:45:29'),
(4, 1, 'ff', '0990943010', 'aa@aa.com', 'Tomorrow', '2023-05-17 09:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `sub_model_car`
--

CREATE TABLE `sub_model_car` (
  `sub_model_car_id` int(11) NOT NULL,
  `model_car_id` int(11) NOT NULL,
  `sub_model_car_name` varchar(255) NOT NULL,
  `sub_model_car_datetime_create` datetime NOT NULL,
  `sub_model_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_model_car`
--

INSERT INTO `sub_model_car` (`sub_model_car_id`, `model_car_id`, `sub_model_car_name`, `sub_model_car_datetime_create`, `sub_model_car_datetime_update`) VALUES
(1, 1, '500 CC', '2023-02-06 09:55:15', '2023-02-28 13:26:22'),
(2, 2, '600 CC', '2023-02-28 14:04:51', '2023-02-28 14:04:51');

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
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 16:33:28', '2023-05-29 16:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `travel_faq`
--

CREATE TABLE `travel_faq` (
  `travel_faq_id` int(11) NOT NULL,
  `travel_faq_question` varchar(255) NOT NULL,
  `travel_faq_answer` text NOT NULL,
  `travel_faq_datetime_create` datetime NOT NULL,
  `travel_faq_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travel_faq`
--

INSERT INTO `travel_faq` (`travel_faq_id`, `travel_faq_question`, `travel_faq_answer`, `travel_faq_datetime_create`, `travel_faq_datetime_update`) VALUES
(1, 'คำถาม 1', 'คำตอบ 1', '2023-05-29 15:50:36', '2023-05-29 15:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `type_insurance`
--

CREATE TABLE `type_insurance` (
  `type_insurance_id` int(11) NOT NULL,
  `type_insurance_name` varchar(255) NOT NULL,
  `type_insurance_datetime_create` datetime NOT NULL,
  `type_insurance_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_insurance`
--

INSERT INTO `type_insurance` (`type_insurance_id`, `type_insurance_name`, `type_insurance_datetime_create`, `type_insurance_datetime_update`) VALUES
(1, 'LTR Plan', '2023-02-06 09:48:38', '2023-05-29 15:27:52'),
(2, 'O-X Plan', '2023-02-06 09:48:56', '2023-02-06 09:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `type_repair`
--

CREATE TABLE `type_repair` (
  `type_repair_id` int(11) NOT NULL,
  `type_repair_name` varchar(255) NOT NULL,
  `type_repair_datetime_create` datetime NOT NULL,
  `type_repair_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_repair`
--

INSERT INTO `type_repair` (`type_repair_id`, `type_repair_name`, `type_repair_datetime_create`, `type_repair_datetime_update`) VALUES
(1, 'ห้าง (ศูนย์)', '2023-02-06 10:36:34', '2023-02-06 10:36:34'),
(2, 'อู่', '2023-02-06 10:36:47', '2023-02-06 10:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_activated` int(1) NOT NULL,
  `user_datetime_create` datetime NOT NULL,
  `user_ip_create` varchar(255) NOT NULL,
  `user_datetime_update` datetime NOT NULL,
  `user_ip_update` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `department_id`, `user_email`, `user_name`, `user_username`, `user_password`, `user_activated`, `user_datetime_create`, `user_ip_create`, `user_datetime_update`, `user_ip_update`) VALUES
(30, 1, 'sitiporn@orange-thailand.com', 'Sitiporn Trongwichien', 'admin', 'qwaszx', 1, '2020-09-03 08:57:01', '::1', '2023-06-13 12:10:41', '101.108.5.157'),
(31, 1, 'ford@fuji.com', 'Ford Fuji', 'Ford Fuji', 'Ford Fuji', 1, '2020-09-03 08:57:26', '::1', '2023-05-29 14:23:26', '101.108.151.125');

-- --------------------------------------------------------

--
-- Table structure for table `year_car`
--

CREATE TABLE `year_car` (
  `year_car_id` int(11) NOT NULL,
  `year_car_name` varchar(255) NOT NULL,
  `year_car_datetime_create` datetime NOT NULL,
  `year_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year_car`
--

INSERT INTO `year_car` (`year_car_id`, `year_car_name`, `year_car_datetime_create`, `year_car_datetime_update`) VALUES
(1, '2565', '2023-02-06 09:55:29', '2023-02-06 09:55:29'),
(2, '2566', '2023-02-06 09:55:36', '2023-02-06 09:55:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_faq`
--
ALTER TABLE `accident_faq`
  ADD PRIMARY KEY (`accident_faq_id`);

--
-- Indexes for table `backup_insurance_home`
--
ALTER TABLE `backup_insurance_home`
  ADD PRIMARY KEY (`insurance_home_id`);

--
-- Indexes for table `banner_slide`
--
ALTER TABLE `banner_slide`
  ADD PRIMARY KEY (`banner_slide_id`);

--
-- Indexes for table `brand_car`
--
ALTER TABLE `brand_car`
  ADD PRIMARY KEY (`brand_car_id`);

--
-- Indexes for table `business_faq`
--
ALTER TABLE `business_faq`
  ADD PRIMARY KEY (`business_faq_id`);

--
-- Indexes for table `cancer_faq`
--
ALTER TABLE `cancer_faq`
  ADD PRIMARY KEY (`cancer_faq_id`);

--
-- Indexes for table `car_company`
--
ALTER TABLE `car_company`
  ADD PRIMARY KEY (`car_company_id`);

--
-- Indexes for table `car_contact_confirm`
--
ALTER TABLE `car_contact_confirm`
  ADD PRIMARY KEY (`car_contact_confirm_id`);

--
-- Indexes for table `car_faq`
--
ALTER TABLE `car_faq`
  ADD PRIMARY KEY (`car_faq_id`);

--
-- Indexes for table `car_table_insurance`
--
ALTER TABLE `car_table_insurance`
  ADD PRIMARY KEY (`car_table_insurance_id`);

--
-- Indexes for table `condo_faq`
--
ALTER TABLE `condo_faq`
  ADD PRIMARY KEY (`condo_faq_id`);

--
-- Indexes for table `condo_pdf`
--
ALTER TABLE `condo_pdf`
  ADD PRIMARY KEY (`condo_pdf_id`);

--
-- Indexes for table `confirm_accident`
--
ALTER TABLE `confirm_accident`
  ADD PRIMARY KEY (`confirm_accident_id`);

--
-- Indexes for table `confirm_accident2`
--
ALTER TABLE `confirm_accident2`
  ADD PRIMARY KEY (`confirm_accident2_id`);

--
-- Indexes for table `confirm_cancer`
--
ALTER TABLE `confirm_cancer`
  ADD PRIMARY KEY (`confirm_cancer_id`);

--
-- Indexes for table `confirm_transportation`
--
ALTER TABLE `confirm_transportation`
  ADD PRIMARY KEY (`confirm_transportation_id`);

--
-- Indexes for table `contact_accident`
--
ALTER TABLE `contact_accident`
  ADD PRIMARY KEY (`contact_accident_id`);

--
-- Indexes for table `contact_business`
--
ALTER TABLE `contact_business`
  ADD PRIMARY KEY (`contact_business_id`);

--
-- Indexes for table `contact_cancer`
--
ALTER TABLE `contact_cancer`
  ADD PRIMARY KEY (`contact_cancer_id`);

--
-- Indexes for table `contact_car`
--
ALTER TABLE `contact_car`
  ADD PRIMARY KEY (`contact_car_id`);

--
-- Indexes for table `contact_condo`
--
ALTER TABLE `contact_condo`
  ADD PRIMARY KEY (`contact_condo_id`);

--
-- Indexes for table `contact_condo_detail`
--
ALTER TABLE `contact_condo_detail`
  ADD PRIMARY KEY (`contact_condo_detail_id`);

--
-- Indexes for table `contact_detail_home`
--
ALTER TABLE `contact_detail_home`
  ADD PRIMARY KEY (`contact_detail_home_id`);

--
-- Indexes for table `contact_extended`
--
ALTER TABLE `contact_extended`
  ADD PRIMARY KEY (`contact_extended_id`);

--
-- Indexes for table `contact_home`
--
ALTER TABLE `contact_home`
  ADD PRIMARY KEY (`contact_home_id`);

--
-- Indexes for table `contact_pet`
--
ALTER TABLE `contact_pet`
  ADD PRIMARY KEY (`contact_pet_id`);

--
-- Indexes for table `contact_pet_detail`
--
ALTER TABLE `contact_pet_detail`
  ADD PRIMARY KEY (`contact_pet_detail_id`);

--
-- Indexes for table `contact_transportation`
--
ALTER TABLE `contact_transportation`
  ADD PRIMARY KEY (`contact_transportation_id`);

--
-- Indexes for table `contact_travel`
--
ALTER TABLE `contact_travel`
  ADD PRIMARY KEY (`contact_travel_id`);

--
-- Indexes for table `contact_travel_detail`
--
ALTER TABLE `contact_travel_detail`
  ADD PRIMARY KEY (`contact_travel_detail_id`);

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`contact_us_form_id`);

--
-- Indexes for table `damages_first`
--
ALTER TABLE `damages_first`
  ADD PRIMARY KEY (`damages_first_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `detail_cancer`
--
ALTER TABLE `detail_cancer`
  ADD PRIMARY KEY (`detail_cancer_id`);

--
-- Indexes for table `detail_transportation`
--
ALTER TABLE `detail_transportation`
  ADD PRIMARY KEY (`detail_transportation_id`);

--
-- Indexes for table `extended_faq`
--
ALTER TABLE `extended_faq`
  ADD PRIMARY KEY (`extended_faq_id`);

--
-- Indexes for table `extended_insurance`
--
ALTER TABLE `extended_insurance`
  ADD PRIMARY KEY (`extended_insurance_id`);

--
-- Indexes for table `golf_contact`
--
ALTER TABLE `golf_contact`
  ADD PRIMARY KEY (`golf_contact_id`);

--
-- Indexes for table `golf_faq`
--
ALTER TABLE `golf_faq`
  ADD PRIMARY KEY (`golf_faq_id`);

--
-- Indexes for table `healthy_contact`
--
ALTER TABLE `healthy_contact`
  ADD PRIMARY KEY (`healthy_contact_id`);

--
-- Indexes for table `healthy_contact_confirm`
--
ALTER TABLE `healthy_contact_confirm`
  ADD PRIMARY KEY (`healthy_contact_confirm_id`);

--
-- Indexes for table `healthy_faq`
--
ALTER TABLE `healthy_faq`
  ADD PRIMARY KEY (`healthy_faq_id`);

--
-- Indexes for table `home_faq`
--
ALTER TABLE `home_faq`
  ADD PRIMARY KEY (`home_faq_id`);

--
-- Indexes for table `import_excel`
--
ALTER TABLE `import_excel`
  ADD PRIMARY KEY (`import_excel_id`);

--
-- Indexes for table `insurance_accident`
--
ALTER TABLE `insurance_accident`
  ADD PRIMARY KEY (`insurance_accident_id`);

--
-- Indexes for table `insurance_business`
--
ALTER TABLE `insurance_business`
  ADD PRIMARY KEY (`insurance_business_id`);

--
-- Indexes for table `insurance_cancer`
--
ALTER TABLE `insurance_cancer`
  ADD PRIMARY KEY (`insurance_cancer_id`);

--
-- Indexes for table `insurance_car`
--
ALTER TABLE `insurance_car`
  ADD PRIMARY KEY (`insurance_car_id`);

--
-- Indexes for table `insurance_company`
--
ALTER TABLE `insurance_company`
  ADD PRIMARY KEY (`insurance_company_id`);

--
-- Indexes for table `insurance_condo`
--
ALTER TABLE `insurance_condo`
  ADD PRIMARY KEY (`insurance_condo_id`);

--
-- Indexes for table `insurance_condo_row`
--
ALTER TABLE `insurance_condo_row`
  ADD PRIMARY KEY (`insurance_condo_row_id`);

--
-- Indexes for table `insurance_golf`
--
ALTER TABLE `insurance_golf`
  ADD PRIMARY KEY (`insurance_golf_id`);

--
-- Indexes for table `insurance_healthy`
--
ALTER TABLE `insurance_healthy`
  ADD PRIMARY KEY (`insurance_healthy_id`);

--
-- Indexes for table `insurance_home`
--
ALTER TABLE `insurance_home`
  ADD PRIMARY KEY (`insurance_home_id`);

--
-- Indexes for table `insurance_home_row`
--
ALTER TABLE `insurance_home_row`
  ADD PRIMARY KEY (`insurance_home_row_id`);

--
-- Indexes for table `insurance_pet`
--
ALTER TABLE `insurance_pet`
  ADD PRIMARY KEY (`insurance_pet_id`);

--
-- Indexes for table `insurance_pet_row`
--
ALTER TABLE `insurance_pet_row`
  ADD PRIMARY KEY (`insurance_pet_row_id`);

--
-- Indexes for table `insurance_transportation`
--
ALTER TABLE `insurance_transportation`
  ADD PRIMARY KEY (`insurance_transportation_id`);

--
-- Indexes for table `insurance_travel`
--
ALTER TABLE `insurance_travel`
  ADD PRIMARY KEY (`insurance_travel_id`);

--
-- Indexes for table `insurance_travel_package`
--
ALTER TABLE `insurance_travel_package`
  ADD PRIMARY KEY (`insurance_travel_package_id`);

--
-- Indexes for table `insurance_travel_row`
--
ALTER TABLE `insurance_travel_row`
  ADD PRIMARY KEY (`insurance_travel_row_id`);

--
-- Indexes for table `insurance_upload_pdf`
--
ALTER TABLE `insurance_upload_pdf`
  ADD PRIMARY KEY (`insurance_download_pdf_id`);

--
-- Indexes for table `level_car`
--
ALTER TABLE `level_car`
  ADD PRIMARY KEY (`level_car_id`);

--
-- Indexes for table `log_import_excel`
--
ALTER TABLE `log_import_excel`
  ADD PRIMARY KEY (`log_import_excel_id`);

--
-- Indexes for table `map_insurance_company`
--
ALTER TABLE `map_insurance_company`
  ADD PRIMARY KEY (`map_company_co_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `model_car`
--
ALTER TABLE `model_car`
  ADD PRIMARY KEY (`model_car_id`);

--
-- Indexes for table `news_and_article`
--
ALTER TABLE `news_and_article`
  ADD PRIMARY KEY (`news_and_article_id`);

--
-- Indexes for table `pet_faq`
--
ALTER TABLE `pet_faq`
  ADD PRIMARY KEY (`pet_faq_id`);

--
-- Indexes for table `prb`
--
ALTER TABLE `prb`
  ADD PRIMARY KEY (`prb_id`);

--
-- Indexes for table `prb_faq`
--
ALTER TABLE `prb_faq`
  ADD PRIMARY KEY (`prb_faq_id`);

--
-- Indexes for table `prb_pdf`
--
ALTER TABLE `prb_pdf`
  ADD PRIMARY KEY (`prb_pdf_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ux_provinces_code` (`code`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Indexes for table `quotation_car`
--
ALTER TABLE `quotation_car`
  ADD PRIMARY KEY (`quotation_car_id`);

--
-- Indexes for table `quotation_health`
--
ALTER TABLE `quotation_health`
  ADD PRIMARY KEY (`quotation_health_id`);

--
-- Indexes for table `sub_model_car`
--
ALTER TABLE `sub_model_car`
  ADD PRIMARY KEY (`sub_model_car_id`);

--
-- Indexes for table `transportation_faq`
--
ALTER TABLE `transportation_faq`
  ADD PRIMARY KEY (`transportation_faq_id`);

--
-- Indexes for table `travel_faq`
--
ALTER TABLE `travel_faq`
  ADD PRIMARY KEY (`travel_faq_id`);

--
-- Indexes for table `type_insurance`
--
ALTER TABLE `type_insurance`
  ADD PRIMARY KEY (`type_insurance_id`);

--
-- Indexes for table `type_repair`
--
ALTER TABLE `type_repair`
  ADD PRIMARY KEY (`type_repair_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `year_car`
--
ALTER TABLE `year_car`
  ADD PRIMARY KEY (`year_car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_faq`
--
ALTER TABLE `accident_faq`
  MODIFY `accident_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backup_insurance_home`
--
ALTER TABLE `backup_insurance_home`
  MODIFY `insurance_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_slide`
--
ALTER TABLE `banner_slide`
  MODIFY `banner_slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand_car`
--
ALTER TABLE `brand_car`
  MODIFY `brand_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_faq`
--
ALTER TABLE `business_faq`
  MODIFY `business_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cancer_faq`
--
ALTER TABLE `cancer_faq`
  MODIFY `cancer_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_company`
--
ALTER TABLE `car_company`
  MODIFY `car_company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_contact_confirm`
--
ALTER TABLE `car_contact_confirm`
  MODIFY `car_contact_confirm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_faq`
--
ALTER TABLE `car_faq`
  MODIFY `car_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_table_insurance`
--
ALTER TABLE `car_table_insurance`
  MODIFY `car_table_insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `condo_faq`
--
ALTER TABLE `condo_faq`
  MODIFY `condo_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `condo_pdf`
--
ALTER TABLE `condo_pdf`
  MODIFY `condo_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confirm_accident`
--
ALTER TABLE `confirm_accident`
  MODIFY `confirm_accident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `confirm_accident2`
--
ALTER TABLE `confirm_accident2`
  MODIFY `confirm_accident2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirm_cancer`
--
ALTER TABLE `confirm_cancer`
  MODIFY `confirm_cancer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirm_transportation`
--
ALTER TABLE `confirm_transportation`
  MODIFY `confirm_transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_accident`
--
ALTER TABLE `contact_accident`
  MODIFY `contact_accident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_business`
--
ALTER TABLE `contact_business`
  MODIFY `contact_business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_cancer`
--
ALTER TABLE `contact_cancer`
  MODIFY `contact_cancer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_car`
--
ALTER TABLE `contact_car`
  MODIFY `contact_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_condo`
--
ALTER TABLE `contact_condo`
  MODIFY `contact_condo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_condo_detail`
--
ALTER TABLE `contact_condo_detail`
  MODIFY `contact_condo_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_detail_home`
--
ALTER TABLE `contact_detail_home`
  MODIFY `contact_detail_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_extended`
--
ALTER TABLE `contact_extended`
  MODIFY `contact_extended_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_home`
--
ALTER TABLE `contact_home`
  MODIFY `contact_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_pet`
--
ALTER TABLE `contact_pet`
  MODIFY `contact_pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_pet_detail`
--
ALTER TABLE `contact_pet_detail`
  MODIFY `contact_pet_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_transportation`
--
ALTER TABLE `contact_transportation`
  MODIFY `contact_transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_travel`
--
ALTER TABLE `contact_travel`
  MODIFY `contact_travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_travel_detail`
--
ALTER TABLE `contact_travel_detail`
  MODIFY `contact_travel_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `contact_us_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `damages_first`
--
ALTER TABLE `damages_first`
  MODIFY `damages_first_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_cancer`
--
ALTER TABLE `detail_cancer`
  MODIFY `detail_cancer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transportation`
--
ALTER TABLE `detail_transportation`
  MODIFY `detail_transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `extended_faq`
--
ALTER TABLE `extended_faq`
  MODIFY `extended_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `extended_insurance`
--
ALTER TABLE `extended_insurance`
  MODIFY `extended_insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `golf_contact`
--
ALTER TABLE `golf_contact`
  MODIFY `golf_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `golf_faq`
--
ALTER TABLE `golf_faq`
  MODIFY `golf_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `healthy_contact`
--
ALTER TABLE `healthy_contact`
  MODIFY `healthy_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `healthy_contact_confirm`
--
ALTER TABLE `healthy_contact_confirm`
  MODIFY `healthy_contact_confirm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `healthy_faq`
--
ALTER TABLE `healthy_faq`
  MODIFY `healthy_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_faq`
--
ALTER TABLE `home_faq`
  MODIFY `home_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `import_excel`
--
ALTER TABLE `import_excel`
  MODIFY `import_excel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `insurance_accident`
--
ALTER TABLE `insurance_accident`
  MODIFY `insurance_accident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_business`
--
ALTER TABLE `insurance_business`
  MODIFY `insurance_business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_cancer`
--
ALTER TABLE `insurance_cancer`
  MODIFY `insurance_cancer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_car`
--
ALTER TABLE `insurance_car`
  MODIFY `insurance_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `insurance_company`
--
ALTER TABLE `insurance_company`
  MODIFY `insurance_company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance_condo`
--
ALTER TABLE `insurance_condo`
  MODIFY `insurance_condo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insurance_condo_row`
--
ALTER TABLE `insurance_condo_row`
  MODIFY `insurance_condo_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_golf`
--
ALTER TABLE `insurance_golf`
  MODIFY `insurance_golf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance_healthy`
--
ALTER TABLE `insurance_healthy`
  MODIFY `insurance_healthy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `insurance_home`
--
ALTER TABLE `insurance_home`
  MODIFY `insurance_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance_home_row`
--
ALTER TABLE `insurance_home_row`
  MODIFY `insurance_home_row_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_pet`
--
ALTER TABLE `insurance_pet`
  MODIFY `insurance_pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insurance_pet_row`
--
ALTER TABLE `insurance_pet_row`
  MODIFY `insurance_pet_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_transportation`
--
ALTER TABLE `insurance_transportation`
  MODIFY `insurance_transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance_travel`
--
ALTER TABLE `insurance_travel`
  MODIFY `insurance_travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_travel_package`
--
ALTER TABLE `insurance_travel_package`
  MODIFY `insurance_travel_package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_travel_row`
--
ALTER TABLE `insurance_travel_row`
  MODIFY `insurance_travel_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_upload_pdf`
--
ALTER TABLE `insurance_upload_pdf`
  MODIFY `insurance_download_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level_car`
--
ALTER TABLE `level_car`
  MODIFY `level_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_import_excel`
--
ALTER TABLE `log_import_excel`
  MODIFY `log_import_excel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `map_insurance_company`
--
ALTER TABLE `map_insurance_company`
  MODIFY `map_company_co_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `model_car`
--
ALTER TABLE `model_car`
  MODIFY `model_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_and_article`
--
ALTER TABLE `news_and_article`
  MODIFY `news_and_article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pet_faq`
--
ALTER TABLE `pet_faq`
  MODIFY `pet_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prb`
--
ALTER TABLE `prb`
  MODIFY `prb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prb_faq`
--
ALTER TABLE `prb_faq`
  MODIFY `prb_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prb_pdf`
--
ALTER TABLE `prb_pdf`
  MODIFY `prb_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `quotation_car`
--
ALTER TABLE `quotation_car`
  MODIFY `quotation_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quotation_health`
--
ALTER TABLE `quotation_health`
  MODIFY `quotation_health_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_model_car`
--
ALTER TABLE `sub_model_car`
  MODIFY `sub_model_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transportation_faq`
--
ALTER TABLE `transportation_faq`
  MODIFY `transportation_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_faq`
--
ALTER TABLE `travel_faq`
  MODIFY `travel_faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_insurance`
--
ALTER TABLE `type_insurance`
  MODIFY `type_insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_repair`
--
ALTER TABLE `type_repair`
  MODIFY `type_repair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `year_car`
--
ALTER TABLE `year_car`
  MODIFY `year_car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
