-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 09:55 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilear871_vietnam_racing_festival`
--

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `title_plan` varchar(500) DEFAULT NULL,
  `hyperlink` varchar(500) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `history` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `title_plan`, `hyperlink`, `create_date`, `history`) VALUES
(6, 'Video', 'https://drive.google.com/file/d/1XKvrvgsUFJYmygSekObgCWAth2KqxPsT', '2021-01-17 14:16:07', 'Insert by admin - 2021-01-17 08:16:07<br/>Update by admin - 2021-01-17 09:47:09<br/>'),
(7, 'Kế hoạch', 'https://drive.google.com/file/d/1I06apgfMPmpAPf1-2kOZZthad7cStTvY', '2021-01-17 14:16:25', 'Insert by admin - 2021-01-17 08:16:25<br/>Update by admin - 2021-01-17 09:35:44<br/>Update by admin - 2021-01-17 09:47:01<br/>'),
(8, 'Điều lệ', 'https://drive.google.com/file/d/1TvFbxltrLv0HpMauBwz0feLk8dpHAvPt', '2021-01-17 14:16:42', 'Insert by admin - 2021-01-17 08:16:42<br/>Update by admin - 2021-01-17 09:36:02<br/>Update by admin - 2021-01-17 09:46:53<br/>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
