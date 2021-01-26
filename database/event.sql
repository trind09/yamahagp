-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 02:21 PM
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(2000) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `history`, `create_date`, `picture`, `category`) VALUES
(9, 'Đường Đua', 'Đường Đua Chuẩn An Toàn VMA', 'Insert by admin - 2021-01-23 11:01:16<br/>Update by admin - 2021-01-23 11:07:07<br/>Update by admin - 2021-01-23 11:07:24<br/>Update by admin - 2021-01-24 12:24:12<br/>Update by admin - 2021-01-26 14:04:00<br/>', '2021-01-23 17:01:16', '../assets/event/Truong_dua_tieu_chuan.jpg', 'EVENT HIGHTLIGHTS'),
(10, 'Trọng Tài', 'Trọng Tài Được Huấn Luyện & Cấp Bằng VMA', 'Insert by admin - 2021-01-23 11:03:00<br/>Update by admin - 2021-01-24 12:24:06<br/>Update by admin - 2021-01-26 14:04:07<br/>', '2021-01-23 17:03:00', '../assets/event/1907178_vietnam.1611396180.jpg', 'EVENT HIGHTLIGHTS'),
(11, 'Trưng Bày', 'Trưng Bày Siêu Xe & Test Drive', 'Insert by admin - 2021-01-23 11:03:39<br/>Update by admin - 2021-01-23 11:05:56<br/>Update by admin - 2021-01-23 11:06:06<br/>Update by admin - 2021-01-24 12:23:57<br/>Update by admin - 2021-01-26 14:04:26<br/>', '2021-01-23 17:03:39', '../assets/event/Sieu_xe.jpg', 'EVENT HIGHTLIGHTS'),
(12, 'VIP Lounge', '', 'Insert by admin - 2021-01-23 11:05:43<br/>Update by admin - 2021-01-24 12:23:47<br/>Update by admin - 2021-01-26 14:03:48<br/>', '2021-01-23 17:05:43', '../assets/event/VIP_Lounge_01.1611396343.jpg', 'EVENT HIGHTLIGHTS'),
(13, 'Rapper Karik', '', 'Insert by admin - 2021-01-23 11:06:59<br/>Update by admin - 2021-01-23 11:07:33<br/>', '2021-01-23 17:06:59', '../assets/event/Karik.jpg', 'CA SĨ'),
(14, 'Rapper Dế Choắt', '', 'Insert by admin - 2021-01-23 11:08:07<br/>', '2021-01-23 17:08:07', '../assets/event/DECHOAT.jpg', 'CA SĨ'),
(15, 'Rapper Yuno BigBoi', '', 'Insert by admin - 2021-01-24 12:26:39<br/>', '2021-01-24 18:26:39', '../assets/event/YunoBigboi.jpg', 'CA SĨ'),
(16, 'Rapper Lowkey', '', 'Insert by admin - 2021-01-24 12:27:33<br/>', '2021-01-24 18:27:33', '../assets/event/LowKey.jpg', 'CA SĨ'),
(17, 'Rapper Mess', '', 'Insert by admin - 2021-01-24 12:28:02<br/>', '2021-01-24 18:28:02', '../assets/event/Mes.jpg', 'CA SĨ'),
(18, 'Rapper KOO', '', 'Insert by admin - 2021-01-24 12:28:33<br/>', '2021-01-24 18:28:33', '../assets/event/KOO.jpg', 'CA SĨ'),
(19, 'Rapper Kenji', '', 'Insert by admin - 2021-01-24 12:29:05<br/>', '2021-01-24 18:29:05', '../assets/event/Kenji.jpg', 'CA SĨ'),
(20, 'DJ Vinjaz', '', 'Insert by admin - 2021-01-24 12:29:45<br/>', '2021-01-24 18:29:45', '../assets/event/DJ_VINJAZ_01.jpg', 'DJ'),
(21, 'DJ Mie', '', 'Insert by admin - 2021-01-24 12:30:28<br/>', '2021-01-24 18:30:28', '../assets/event/Mie.jpg', 'DJ'),
(22, 'DJ Lại Thanh Hương', '', 'Insert by admin - 2021-01-24 12:31:00<br/>', '2021-01-24 18:31:00', '../assets/event/DJThanhHuong.jpg', 'DJ'),
(23, 'MC Goku', '', 'Insert by admin - 2021-01-24 12:31:27<br/>', '2021-01-24 18:31:27', '../assets/event/MCGOKU.jpg', 'MC'),
(24, 'MC LIL \'Vinx', '', 'Insert by admin - 2021-01-24 12:31:47<br/>', '2021-01-24 18:31:47', '../assets/event/MC_LIL_Vinx.jpg', 'MC'),
(25, 'DJ Nicky', '', 'Insert by admin - 2021-01-24 12:44:45<br/>Update by admin - 2021-01-24 12:46:02<br/>', '2021-01-24 18:44:45', '../assets/event/DJ_Nicky.jpg', 'DJ'),
(26, 'DJ Tio', '', 'Insert by admin - 2021-01-24 12:45:08<br/>Update by admin - 2021-01-24 12:46:22<br/>', '2021-01-24 18:45:08', '../assets/event/DJ_Tio.jpg', 'DJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
