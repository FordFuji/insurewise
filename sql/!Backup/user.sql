-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 07:22 AM
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
-- Database: `office_care`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
