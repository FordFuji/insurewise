-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 03:45 AM
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
(1, 1, 1, 'อุบัติเหตุ XS', 1400, 'ค่ารักษาจากอุบัติเหตุ ', 'ค่ารักษาจากการเจ็บป่วย', 'ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง', 'ค่าฝากเลี้ยงกรณีไปต่างประเทศ', 'บาดเจ็บคนภายนอก', 'ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง', 'ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์', '3,000 บาท / ครั้ง', '-', '-', 'ไม่คุ้มครอง', '20,000 บาท', '20,000 บาท', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-03-01 17:35:07', '2023-03-01 17:35:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance_cancer`
--
ALTER TABLE `insurance_cancer`
  ADD PRIMARY KEY (`insurance_cancer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance_cancer`
--
ALTER TABLE `insurance_cancer`
  MODIFY `insurance_cancer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
