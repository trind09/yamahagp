-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `caulacbo`
--

CREATE TABLE `caulacbo` (
  `id` int(11) NOT NULL,
  `image_name` varchar(2000) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `hyperlink` varchar(300) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caulacbo`
--

INSERT INTO `caulacbo` (`id`, `image_name`, `title`, `description`, `hyperlink`, `create_date`) VALUES
(27, '../assets/clbs/Untitled_page-0041.jpg', 'Hội Golf Tỉnh Đồng Nai', '', '', '2020-12-13 09:25:51'),
(28, '../assets/clbs/HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU.jpg|../assets/clbs/HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU1.jpg', 'HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU', '', '', '2020-12-13 09:26:43'),
(29, '../assets/clbs/CLB GOLF TỈNH BÌNH THUẬN.jpg|../assets/clbs/CLB GOLF TỈNH BÌNH THUẬN1.jpg', 'CLB GOLF TỈNH BÌNH THUẬN', '', '', '2020-12-13 09:27:15'),
(30, '../assets/clbs/HỘI GOLF NHA TRANG.jpg|../assets/clbs/HỘI GOLF NHA TRANG1.jpg', 'HỘI GOLF NHA TRANG', '', '', '2020-12-13 09:27:42'),
(31, '../assets/clbs/HỘI GOLF TỈNH LÂM ĐỒNG.jpg|../assets/clbs/HỘI GOLF TỈNH LÂM ĐỒNG1.jpg', 'HỘI GOLF TỈNH LÂM ĐỒNG', '', '', '2020-12-13 09:28:02'),
(32, '../assets/clbs/CLB GOLF TASMANIA.jpg|../assets/clbs/CLB GOLF TASMANIA1.jpg', 'CLB GOLF TASMANIA', '', '', '2020-12-13 09:28:27'),
(33, '../assets/clbs/CLB GOLF DOANH NHÂN TRẺ TPHCM.jpg|../assets/clbs/CLB GOLF DOANH NHÂN TRẺ TPHCM1.jpg', 'CLB GOLF DOANH NHÂN TRẺ TP. HCM', '', '', '2020-12-13 09:29:16'),
(34, '../assets/clbs/CLB GOLF DOANH NHÂN SÀI GÒN.jpg', 'CLB GOLF DOANH NHÂN SÀI GÒN', '', '', '2020-12-13 09:30:38'),
(35, '../assets/clbs/SAIGON OPEN GOLF CLUB.jpg', 'SÀI GÒN OPEN GOLF CLUB', '', '', '2020-12-13 09:31:04'),
(36, '../assets/clbs/CLB GOLF BẤT ĐỘNG SẢN TPHCM.jpg|../assets/clbs/CLB GOLF BẤT ĐỘNG SẢN TPHCM1.jpg', 'CLB GOLF BẤT ĐỘNG SẢN TP. HCM', '', '', '2020-12-13 09:31:56'),
(37, '../assets/clbs/CLB GOLF SG - TB.jpg|../assets/clbs/CLB GOLF SG - TB1.jpg', 'CLB GOLF SG - TB', '', '', '2020-12-13 09:43:11'),
(38, '../assets/clbs/CLB GOLF LADIES AND BEAUTY CLUB.jpg|../assets/clbs/CLB GOLF LADIES AND BEAUTY CLUB1.jpg', 'CLB GOLF LADIES & BEAUTY CLUB', '', '', '2020-12-13 09:44:23'),
(39, '../assets/clbs/CLB GOLF MIỀN TRUNG & FRIENDS.jpg|../assets/clbs/CLB GOLF MIỀN TRUNG & FRIENDS1.jpg', 'CLB GOLF MIỀN TRUNG & FRIENDS', '', '', '2020-12-13 09:45:04'),
(40, '../assets/clbs/CLB GOLF VŨ VÕ.jpg|../assets/clbs/CLB GOLF VŨ VÕ1.jpg', 'CLB GOLF VŨ VÕ', '', '', '2020-12-13 09:45:30'),
(41, '../assets/clbs/CLB GOLF TÂN SƠN NHẤT.jpg|../assets/clbs/CLB GOLF TÂN SƠN NHẤT1.jpg', 'CLB GOLF TÂN SƠN NHẤT', '', '', '2020-12-13 09:46:15'),
(42, '../assets/clbs/CLB GOLF BÔNG LÚA VÀNG.jpg', 'CLB GOLF BÔNG LÚA VÀNG', '', '', '2020-12-13 09:46:43'),
(43, '../assets/clbs/CLB GOLF DOANH NHÂN VIỆT NAM.jpg|../assets/clbs/CLB GOLF DOANH NHÂN VIỆT NAM1.jpg', 'CLB GOLF DOANH NHÂN VIỆT NAM', '', '', '2020-12-13 09:47:29'),
(44, '../assets/clbs/CLB GOLF HỌ TRẦN VIỆT NAM.jpg|../assets/clbs/CLB GOLF HỌ TRẦN VIỆT NAM1.jpg', 'CLB GOLF HỌ TRẦN VIỆT NAM', '', '', '2020-12-13 09:48:01'),
(45, '../assets/clbs/CLB GOLF AND FRIENDS.jpg|../assets/clbs/CLB GOLF AND FRIENDS1.jpg', 'CLB Golf & Friends', '', '', '2020-12-13 09:48:30'),
(46, '../assets/clbs/CLB GOLF HỌ LÊ.jpg|../assets/clbs/CLB GOLF HỌ LÊ1.jpg', 'CLB GOLF HỌ LÊ', '', '', '2020-12-13 09:49:19'),
(47, '../assets/clbs/XỨ THANH GOLF CLUB.jpg|../assets/clbs/XỨ THANH GOLF CLUB1.jpg', 'CLB Golf Xứ Thanh', '', '', '2020-12-13 09:50:02'),
(48, '../assets/clbs/CLB GOLF CÁ CƠM - TRIPLE C.jpg|../assets/clbs/CLB GOLF CÁ CƠM - TRIPLE C1.jpg', 'CLB GOLF CÁ CƠM - TRIPLE C', '', '', '2020-12-13 09:50:33'),
(49, '../assets/clbs/CLB GOLF G78.jpg|../assets/clbs/CLB GOLF G781.jpg', 'CLB GOLF G78', '', '', '2020-12-13 09:51:19'),
(50, '../assets/clbs/CLB GOLF G76.jpg|../assets/clbs/CLB GOLF G761.jpg', 'CLB GOLF G76', '', '', '2020-12-13 09:51:44'),
(51, '../assets/clbs/Untitled_page-0005.jpg', 'CLB Bách Khoa HCM', '', '', '2020-12-13 09:52:13'),
(52, '../assets/clbs/CLB GOLF HỘI DOANH NGHIỆP QUẬN THỦ ĐỨC.jpg', 'CLB golf hội doanh nghiệp quận Thủ Đức (TBA Golf Club)', '', '', '2020-12-13 09:53:10'),
(53, '../assets/clbs/CLB GOLF VINHOMES CENTRAL PARK.jpg|../assets/clbs/CLB GOLF VINHOMES CENTRAL PARK1.jpg', 'CLB GOLF VINHOMES CENTRAL PARK GOLF CLUB ( VCPG)', '', '', '2020-12-13 09:54:56'),
(54, '../assets/clbs/CLB GOLF HERBALIFE.jpg|../assets/clbs/CLB GOLF HERBALIFE1.jpg', 'CLB GOLF HERBALIFE', '', '', '2020-12-13 09:56:14'),
(55, '../assets/clbs/CLB GOLF DOANH NHÂN NGHỆ TĨNH.jpg|../assets/clbs/CLB GOLF DOANH NHÂN NGHỆ TĨNH1.jpg', 'CLB GOLF DOANH NHÂN NGHỆ TĨNH', '', '', '2020-12-13 09:56:56'),
(56, '../assets/clbs/CLB GOLF HUẾ - SÀI GÒN.jpg|../assets/clbs/CLB GOLF HUẾ - SÀI GÒN1.jpg', 'CLB GOLF HUẾ - SÀI GÒN', '', '', '2020-12-13 09:57:28'),
(57, '../assets/clbs/CLB GOLF PHÚ MỸ HƯNG.jpg|../assets/clbs/CLB GOLF PHÚ MỸ HƯNG1.jpg', 'CLB GOLF PHÚ MỸ HƯNG', '', '', '2020-12-13 09:57:53'),
(58, '../assets/clbs/CLB GOLF BNG.jpg', 'CLB GOLF BNG', '', '', '2020-12-13 09:58:13'),
(59, '../assets/clbs/CLB GOLF LOBICO.jpg|../assets/clbs/CLB GOLF LOBICO1.jpg', 'CLB GOLF LOBICO', '', '', '2020-12-13 09:58:41'),
(60, '../assets/clbs/CLB GOLF CB.jpg|../assets/clbs/CLB GOLF CB1.jpg|../assets/clbs/CLB GOLF CB2.jpg', 'CLB GOLF CB', '', '', '2020-12-13 09:59:14'),
(61, '../assets/clbs/CLB GOLF TCGA.jpg|../assets/clbs/CLB GOLF TCGA1.jpg', 'CLB GOLF TCGA Vũng Tàu', '', '', '2020-12-13 09:59:46'),
(62, '../assets/clbs/CLB GOLF STANDARD GOLFERS CLUB.jpg|../assets/clbs/CLB GOLF STANDARD GOLFERS CLUB1.jpg', 'CLB GOLF STANDARD GOLFERS CLUB - SGC', '', '', '2020-12-13 10:00:10'),
(63, '../assets/clbs/CLB GOLF IT.jpg|../assets/clbs/CLB GOLF IT1.jpg', 'CLB GOLF IT', '', '', '2020-12-13 10:00:35'),
(64, '../assets/clbs/CLB GOLF KN.jpg|../assets/clbs/CLB GOLF KN1.jpg', 'KN Golf Club', '', '', '2020-12-13 10:01:04'),
(65, '../assets/clbs/CLB GOLF HÀ NỘI - SÀI GÒN.jpg|../assets/clbs/CLB GOLF HÀ NỘI - SÀI GÒN1.jpg', 'CLB GOLF HÀ NỘI - SÀI GÒN', '', '', '2020-12-13 10:01:31'),
(66, '../assets/clbs/CLB GOLF THÀNH PHỐ BIÊN HÒA.jpg|../assets/clbs/CLB GOLF THÀNH PHỐ BIÊN HÒA1.jpg', 'CLB GOLF THÀNH PHỐ BIÊN HÒA', '', '', '2020-12-13 10:01:57'),
(67, '', 'CLB Golf Họ Nguyễn', '', '', '2020-12-13 10:02:23'),
(68, '', 'CLB Golf G&G', '', '', '2020-12-13 10:02:33'),
(69, '../assets/clbs/CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG.jpg|../assets/clbs/CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG1.jpg', 'CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG', '', '', '2020-12-13 10:03:03'),
(70, '', 'CLB Golf FGC', '', '', '2020-12-13 10:03:23'),
(71, '../assets/clbs/CLB GOLF DOANH NHÂN 2030.jpg|../assets/clbs/CLB GOLF DOANH NHÂN 20301.jpg', 'CLB GOLF DOANH NHÂN 2030', '', '', '2020-12-13 10:03:45'),
(72, '../assets/clbs/CLB GOLF BÁCH KHOA ALUMNI.jpg|../assets/clbs/CLB GOLF BÁCH KHOA ALUMNI1.jpg', 'CLB GOLF BÁCH KHOA ALUMNI', '', '', '2020-12-13 10:04:19'),
(73, '../assets/clbs/CLB GOLF HỌ NGUYỄN PHÍA NAM.jpg|../assets/clbs/CLB GOLF HỌ NGUYỄN PHÍA NAM1.jpg', 'CLB GOLF HỌ NGUYỄN PHÍA NAM', '', '', '2020-12-13 10:04:43'),
(74, '../assets/clbs/CLB GOLF PMG.jpg|../assets/clbs/CLB GOLF PMG1.jpg', 'CLB GOLF PMG', '', '', '2020-12-13 10:05:12'),
(75, '../assets/clbs/CLB GOLF DANH NHÂN SÀI GÒN.jpg', 'CLB GOLF DANH NHÂN SÀI GÒN', '', '', '2020-12-13 10:05:41'),
(76, '../assets/clbs/CLB GOLF PRIENDS GOLF CLUB.jpg', 'CLB GOLF PRIENDS GOLF CLUB', '', '', '2020-12-13 10:05:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caulacbo`
--
ALTER TABLE `caulacbo`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caulacbo`
--
ALTER TABLE `caulacbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
