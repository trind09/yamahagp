-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2020 at 06:12 PM
-- Server version: 5.7.32-log
-- PHP Version: 7.3.6

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
-- Table structure for table `bank_transfer_certificates`
--

CREATE TABLE `bank_transfer_certificates` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `receiver_name` varchar(500) DEFAULT NULL,
  `bank_account_number` varchar(100) DEFAULT NULL,
  `transfer_date` date DEFAULT NULL,
  `file_urls` varchar(300) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `register_id` int(11) DEFAULT NULL,
  `extra_column1` varchar(300) DEFAULT NULL,
  `extra_column2` varchar(300) DEFAULT NULL,
  `extra_column3` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_transfer_certificates`
--

INSERT INTO `bank_transfer_certificates` (`id`, `bank_name`, `receiver_name`, `bank_account_number`, `transfer_date`, `file_urls`, `create_date`, `register_id`, `extra_column1`, `extra_column2`, `extra_column3`) VALUES
(3, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_06-10-24.jpg', '2020-11-13', 28, NULL, NULL, NULL),
(4, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_06-14-33.jpg', '2020-11-13', 29, NULL, NULL, NULL),
(5, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_06-27-49.jpg', '2020-11-13', 30, NULL, NULL, NULL),
(6, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_06-28-42.jpg', '2020-11-13', 31, NULL, NULL, NULL),
(7, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_06-30-40.jpg', '2020-11-13', 32, NULL, NULL, NULL),
(8, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_06-31-54.jpg', '2020-11-13', 33, NULL, NULL, NULL),
(9, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_07-08-41.jpg', '2020-11-13', 34, NULL, NULL, NULL),
(10, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_07-53-07.jpg', '2020-11-13', 37, NULL, NULL, NULL),
(11, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_08-11-01.jpg', '2020-11-13', 38, NULL, NULL, NULL),
(12, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-13', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_08-44-39.jpg', '2020-11-13', 39, NULL, NULL, NULL),
(13, 'Nguyễn Dũng Trí', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-14', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_20-43-59.jpg', '2020-11-14', 40, NULL, NULL, NULL),
(14, 'Nguyễn Dung Tri', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-14', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_21-00-27.jpeg', '2020-11-14', 41, NULL, NULL, NULL),
(15, 'Nguyễn thị kim dung ', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'Trindpo@hdhsj.com', '2020-11-14', 'register_files/uploads/photo_Trindpo@hdhsj.com_bank1_13-11-2020_21-34-58.jpeg', '2020-11-14', 44, NULL, NULL, NULL),
(16, 'Nguyễn Dung Tri ', 'STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM', 'trind09@yahoo.com', '2020-11-14', 'register_files/uploads/photo_trind09@yahoo.com_bank1_13-11-2020_21-36-44.jpeg', '2020-11-14', 45, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `file_urls` varchar(300) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `register_id` int(11) DEFAULT NULL,
  `extra_column1` varchar(300) DEFAULT NULL,
  `extra_column2` varchar(300) DEFAULT NULL,
  `extra_column3` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `name`, `description`, `file_urls`, `create_date`, `register_id`, `extra_column1`, `extra_column2`, `extra_column3`) VALUES
(3, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_06-10-24.jpg', '2020-11-13', 28, NULL, NULL, NULL),
(4, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_06-14-33.jpg', '2020-11-13', 29, NULL, NULL, NULL),
(5, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_06-27-49.jpg', '2020-11-13', 30, NULL, NULL, NULL),
(6, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_06-28-42.jpg', '2020-11-13', 31, NULL, NULL, NULL),
(7, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_06-30-40.jpg', '2020-11-13', 32, NULL, NULL, NULL),
(8, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_06-31-54.jpg', '2020-11-13', 33, NULL, NULL, NULL),
(9, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_07-08-41.jpg', '2020-11-13', 34, NULL, NULL, NULL),
(10, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_B_13-11-2020_07-10-15.jpg', '2020-11-13', 35, NULL, NULL, NULL),
(11, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_VMA_13-11-2020_07-10-15.jpg', '2020-11-13', 35, NULL, NULL, NULL),
(12, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_B_13-11-2020_07-22-59.jpg', '2020-11-13', 36, NULL, NULL, NULL),
(13, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_07-53-07.jpg', '2020-11-13', 37, NULL, NULL, NULL),
(14, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_08-11-01.jpg', '2020-11-13', 38, NULL, NULL, NULL),
(15, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A1_13-11-2020_08-44-39.jpg', '2020-11-13', 39, NULL, NULL, NULL),
(16, 'Nguyễn Dũng Trí', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_20-43-59.jpg', '2020-11-14', 40, NULL, NULL, NULL),
(17, 'Nguyễn Dung Tri', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A2_13-11-2020_21-00-27.jpeg', '2020-11-14', 41, NULL, NULL, NULL),
(18, 'Nguyễn Dung Tri ', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_B_13-11-2020_21-09-58.jpeg', '2020-11-14', 42, NULL, NULL, NULL),
(19, 'Nguyễn Dung Tri ', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_VMA_13-11-2020_21-09-58.jpeg', '2020-11-14', 42, NULL, NULL, NULL),
(20, 'Nguyễn Dung Tri ', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_B_13-11-2020_21-26-54.jpeg', '2020-11-14', 43, NULL, NULL, NULL),
(21, 'Nguyễn thị kim dung ', 'Trindpo@hdhsj.com', 'register_files/uploads/photo_Trindpo@hdhsj.com_A1_13-11-2020_21-34-58.jpeg', '2020-11-14', 44, NULL, NULL, NULL),
(22, 'Nguyễn Dung Tri ', 'trind09@yahoo.com', 'register_files/uploads/photo_trind09@yahoo.com_A1_13-11-2020_21-36-44.jpeg', '2020-11-14', 45, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `number` varchar(100) DEFAULT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `club_name` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `social_link` varchar(300) DEFAULT NULL,
  `sponsor_fullname` varchar(300) DEFAULT NULL,
  `sponsor_phone` varchar(40) DEFAULT NULL,
  `comment1` varchar(1000) DEFAULT NULL,
  `comment2` varchar(1000) DEFAULT NULL,
  `comment3` varchar(1000) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `extra_column1` varchar(300) DEFAULT NULL,
  `extra_column2` varchar(300) DEFAULT NULL,
  `extra_column3` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `number`, `fullname`, `birthday`, `phone`, `email`, `club_name`, `address`, `social_link`, `sponsor_fullname`, `sponsor_phone`, `comment1`, `comment2`, `comment3`, `create_date`, `extra_column1`, `extra_column2`, `extra_column3`) VALUES
(32, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(28, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-14', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(29, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(30, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(31, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(33, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(34, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-12', '0764439566', 'trind09@yahoo.com', 'Tự do - Cá nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(35, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', 'asdasdsadasdasd', '', NULL, '2020-11-13', NULL, NULL, NULL),
(36, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-12', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', 'abasdqwrwqesdfwerfasdfasdf', NULL, '2020-11-13', NULL, NULL, NULL),
(37, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(38, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(39, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', '', '', NULL, '2020-11-13', NULL, NULL, NULL),
(40, '1535235325', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Tự do - Cá nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '12323646464696', '', '', NULL, '2020-11-14', NULL, NULL, NULL),
(41, '0836261771', 'Nguyễn Dung Tri', '2005-08-14', '083762782736', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Hoảng hai người ', 'HTTP://www.com.com', 'Nguyễn Dung Tri ', '0973626171', '', '', NULL, '2020-11-14', NULL, NULL, NULL),
(42, '0926271818626', 'Nguyễn Dung Tri ', '2020-11-14', '094736267848', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Hoảng hốt chạy ', 'http://www.com.com', 'Nguyễn thị phương ', '09276262626', 'Hôm qua chị đi chơi vui không có tiền không có ', '', NULL, '2020-11-14', NULL, NULL, NULL),
(43, 'Uuwhah', 'Nguyễn Dung Tri ', '2020-11-14', '09288288181', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Nguyễn thị kim anh ', 'Hsjamama', 'Nânnan', 'Bâhhahahn', '', 'Sbabahaha', NULL, '2020-11-14', NULL, NULL, NULL),
(44, 'Hận tình yêu ', 'Nguyễn thị kim dung ', '2020-11-14', '0938373737', 'Trindpo@hdhsj.com', 'Nguyễn Dung khiêm ', 'Nguyễn thị phương ', 'Em có biết ', 'Hạ giá lấy ', '08382828', '', '', NULL, '2020-11-14', NULL, NULL, NULL),
(45, 'Ýhaanh', 'Nguyễn Dung Tri ', '2020-11-14', '09725252256', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Nguyễn Dung Tri ', 'Gâhhah', 'Zhshzh', 'Hahzhzh', '', '', NULL, '2020-11-14', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_transfer_certificates`
--
ALTER TABLE `bank_transfer_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_transfer_certificates`
--
ALTER TABLE `bank_transfer_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
