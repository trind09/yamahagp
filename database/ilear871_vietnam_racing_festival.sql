-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2020 at 08:00 PM
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
  `license_files` varchar(400) DEFAULT NULL,
  `banktransfer_files` varchar(400) DEFAULT NULL,
  `comment1` varchar(1000) DEFAULT NULL,
  `comment2` varchar(1000) DEFAULT NULL,
  `comment3` varchar(1000) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `form_id` varchar(100) DEFAULT NULL,
  `form_name` varchar(400) DEFAULT NULL,
  `extra_column1` varchar(300) DEFAULT NULL,
  `extra_column2` varchar(300) DEFAULT NULL,
  `extra_column3` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `number`, `fullname`, `birthday`, `phone`, `email`, `club_name`, `address`, `social_link`, `sponsor_fullname`, `sponsor_phone`, `license_files`, `banktransfer_files`, `comment1`, `comment2`, `comment3`, `create_date`, `form_id`, `form_name`, `extra_column1`, `extra_column2`, `extra_column3`) VALUES
(82, '66', 'Võ huyền thiên thư', '1990-10-13', '0969293136', 'vohuyenthienthu@gmail.com', NULL, 'đồng tháp', '', '', '', 'register_files/uploads/photo_vohuyenthienthu@gmail.com_A1_19-11-2020_14-45-18.png', 'register_files/uploads/photo_vohuyenthienthu@gmail.com_bank1_19-11-2020_14-45-18.png', '', '', NULL, '2020-11-19 21:45:18', 'moto-ub150-semipro', 'HỆ Moto UB150 SemiPro - GIẢI MOTUL MOTOR RACING CUP', NULL, NULL, NULL),
(83, '121240140918498', 'Nguyễn Dũng Trí', '1980-11-02', '0764473953', 'trind09@yahoo.com', NULL, '40 TK20 KDC Hoàng Hải', 'https://www.facebook.com/', 'Nguyễn Văn Nam', '0958322842', 'register_files/uploads/photo_trind09@yahoo.com_A2_21-11-2020_02-57-13.png', 'register_files/uploads/photo_trind09@yahoo.com_bank1_21-11-2020_02-57-13.jpg', '', '', NULL, '2020-11-21 09:57:13', 'semipro-300-400cc', 'Hệ 300-400cc SemiPro - GIẢI MOTUL MOTOR RACING CUP', NULL, NULL, NULL),
(84, '121240140918498', 'Nguyễn Dũng Trí', '1980-11-02', '0764473953', 'trind09@yahoo.com', NULL, '40 TK20 KDC Hoàng Hải', 'https://www.facebook.com/', 'Nguyễn Văn Nam', '0958322842', 'register_files/uploads/photo_trind09@yahoo.com_A1_21-11-2020_02-57-55.jpg', 'register_files/uploads/photo_trind09@yahoo.com_bank1_21-11-2020_02-57-55.jpg', '', '', NULL, '2020-11-21 09:57:55', 'moto-ub150-pro', 'HỆ Moto UB150 Pro - GIẢI MOTUL MOTOR RACING CUP', NULL, NULL, NULL),
(85, '121240140918498', 'Nguyễn Dũng Trí', '1980-11-02', '0764473953', 'trind09@yahoo.com', NULL, ' 40 TK20 KDC Hoàng Hải', 'https://www.facebook.com/', 'Nguyễn Văn Nam', '0958322842', 'register_files/uploads/photo_trind09@yahoo.com_A1_21-11-2020_02-59-35.jpg', 'register_files/uploads/photo_trind09@yahoo.com_bank1_21-11-2020_02-59-35.jpg', '', '', NULL, '2020-11-21 09:59:35', 'moto-ub150-semipro', 'HỆ Moto UB150 SemiPro - GIẢI MOTUL MOTOR RACING CUP', NULL, NULL, NULL),
(86, '121240140918498', 'Nguyễn Dũng Trí', '1980-11-02', '0764473953', 'trind09@yahoo.com', NULL, '40 TK20 KDC Hoàng Hải', 'https://www.facebook.com/', 'Nguyễn Văn Nam', '0958322842', 'register_files/uploads/photo_trind09@yahoo.com_B_21-11-2020_03-00-23.jpg', NULL, '', 'I am iron man', NULL, '2020-11-21 10:00:23', 'oto-gymkhana', 'Hệ OTO GYMKHANA - GIẢI VINFAST AUTOGYMKHANA CUP', NULL, NULL, NULL),
(87, '121240140918498', 'Nguyễn Dũng Trí', '1980-11-02', '0764473953', 'trind09@yahoo.com', NULL, '40 TK20 KDC Hoàng Hải', 'https://www.facebook.com/', 'Nguyễn Văn Nam', '0958322842', 'register_files/uploads/photo_trind09@yahoo.com_B_21-11-2020_03-01-14.png|register_files/uploads/photo_trind09@yahoo.com_VMA_21-11-2020_03-01-14.jpg', NULL, 'Hello! I am iron man.', '', NULL, '2020-11-21 10:01:14', 'oto-track-attack', 'HỆ OTO Track Attack - GIẢI VINFAST TRACK ATTACK CUP', NULL, NULL, NULL),
(88, '15', 'Nguyễn Tuấn Anh', '1995-05-15', '0936748948', 'nguyentuananh821@gmail.com', NULL, 'Tphcm', 'NG Tuấn Anh', '', '0936748948', 'register_files/uploads/photo_nguyentuananh821@gmail.com_B_27-11-2020_12-24-40.jpg|register_files/uploads/photo_nguyentuananh821@gmail.com_VMA_27-11-2020_12-24-40.jpg', NULL, 'Chưa từng', '', NULL, '2020-11-27 19:24:40', 'oto-track-attack', 'HỆ OTO Track Attack - GIẢI VINFAST TRACK ATTACK CUP', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `birthday`, `country`, `create_date`) VALUES
(1, 'admin', 'admin', 'trind09@yahoo.com', NULL, NULL, NULL, '2020-11-15 21:31:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
