-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:42 PM
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
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `description`, `history`, `create_date`, `picture`) VALUES
(14, 'VŨ THÀNH HUẾ', '<p><span style=\"color: rgb(128, 128, 128); font-family: Verdana, sans-serif; font-size: 15px; text-align: center;\">Chủ tịch tập đoàn Tasmania &amp; Partner - Chủ tịch giải đấu</span></p>', 'Insert by admin - 2021-01-21 05:56:52<br/>', '2021-01-21 11:56:52', '../assets/member/person1[1].jpg'),
(15, 'VI QUỐC TUẤN', '<p><span style=\"color: rgb(128, 128, 128); font-family: Verdana, sans-serif; font-size: 15px; text-align: center;\">Phó chủ tịch tập đoàn Tasmania, Phó chủ tịch Hiệp Hội Golf Việt Nam, Chủ tịch Hội Golf Hải Phòng, Phó chủ tịch giải đấu</span></p>', 'Insert by admin - 2021-01-21 05:58:33<br/>', '2021-01-21 11:58:33', '../assets/member/person3[1].jpg'),
(16, 'TRẦN NGỌC HẢI', 'Phó chủ tịch HĐQT, Tổng giám đốc công ty Cp Đầu tư Long Biên - Phó chủ tịch giải đấu', 'Insert by admin - 2021-01-21 06:29:36<br/>Update by admin - 2021-01-21 06:30:43<br/>Update by admin - 2021-01-21 06:30:51<br/>Update by admin - 2021-01-21 12:11:52<br/>Update by admin - 2021-01-21 12:12:34<br/>', '2021-01-21 12:29:36', '../assets/member/person6[3].jpg'),
(21, 'HOÀNG TRỌNG KHÁNH', 'Tổng Giám Đốc KMTC Việt Nam - Phó chủ tịch giải đấu', 'Insert by admin - 2021-01-21 06:36:04<br/>Update by admin - 2021-01-21 06:36:24<br/>Update by admin - 2021-01-21 06:36:26<br/>', '2021-01-21 12:36:04', '../assets/member/person4[1].1611207384.jpg'),
(22, 'TRỊNH VĂN THÀNH', 'Chủ tịch Cty Golf Pro - Trưởng BTC Giải', 'Insert by admin - 2021-01-21 06:37:17<br/>', '2021-01-21 12:37:17', '../assets/member/person2[1].jpg'),
(23, 'DƯƠNG QUANG HUY', 'Giám đốc Golf sân golf TSN - Tổng trọng tài giải đấu', 'Insert by admin - 2021-01-21 06:38:11<br/>Update by admin - 2021-01-21 12:13:45<br/>Update by admin - 2021-01-21 12:14:41<br/>Update by admin - 2021-01-21 12:14:49<br/>Update by admin - 2021-01-21 12:22:42<br/>Update by admin - 2021-01-21 12:22:55<br/>', '2021-01-21 12:38:11', '../assets/member/person5[1][1].jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
