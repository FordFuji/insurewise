-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 09:37 AM
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
-- Table structure for table `brand_car`
--

CREATE TABLE `brand_car` (
  `brand_car_id` int(11) NOT NULL,
  `brand_car_name` varchar(255) NOT NULL,
  `brand_car_datetime_create` datetime NOT NULL,
  `brand_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_co`
--

CREATE TABLE `company_co` (
  `company_co_id` int(11) NOT NULL,
  `company_co_image` varchar(255) NOT NULL,
  `company_co_name` varchar(255) NOT NULL,
  `company_co_datetime_create` datetime NOT NULL,
  `company_co_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `model_car`
--

CREATE TABLE `model_car` (
  `model_car_id` int(11) NOT NULL,
  `model_car_name` varchar(255) NOT NULL,
  `model_car_datetime_create` datetime NOT NULL,
  `model_car_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_and_article`
--

CREATE TABLE `news_and_article` (
  `news_and_article_id` int(11) NOT NULL,
  `news_and_article_image` varchar(255) NOT NULL,
  `news_and_article_topic` varchar(255) NOT NULL,
  `news_and_article_description` text NOT NULL,
  `news_and_article_date` date NOT NULL,
  `news_and_article_datetime_create` datetime NOT NULL,
  `news_and_article_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(30, 1, 'sitiporn@orange-thailand.com', 'Sitiporn Trongwichien', 'admin', 'qwaszx', 1, '2020-09-03 08:57:01', '::1', '2020-09-03 08:57:01', '::1'),
(31, 1, 'ford@fuji.com', 'Ford Fuji', 'Ford Fuji', 'Ford Fuji', 1, '2020-09-03 08:57:26', '::1', '2022-03-02 07:26:26', '1.47.7.157'),
(32, 1, 'allgoodinnovation@gmail.com', 'Allgood Lamocha', 'allgoodinnovation@gmail.com', 'qwaszx', 1, '2020-10-08 10:27:45', '::1', '2020-10-12 02:34:47', '::1');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_car`
--
ALTER TABLE `brand_car`
  ADD PRIMARY KEY (`brand_car_id`);

--
-- Indexes for table `company_co`
--
ALTER TABLE `company_co`
  ADD PRIMARY KEY (`company_co_id`);

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`contact_us_form_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

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
-- AUTO_INCREMENT for table `brand_car`
--
ALTER TABLE `brand_car`
  MODIFY `brand_car_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_co`
--
ALTER TABLE `company_co`
  MODIFY `company_co_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `contact_us_form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_car`
--
ALTER TABLE `model_car`
  MODIFY `model_car_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_and_article`
--
ALTER TABLE `news_and_article`
  MODIFY `news_and_article_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `year_car`
--
ALTER TABLE `year_car`
  MODIFY `year_car_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
