-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:23 AM
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
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `fullname` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `position_level` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `pid_rate` int(11) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `fullname`, `birthday`, `phone`, `email`, `address`, `position_level`, `pid_rate`, `create_date`) VALUES
(1, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:20:38'),
(2, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:21:02'),
(3, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:25:06'),
(4, 'thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:25:33'),
(5, 'thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:26:14'),
(6, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:26:49'),
(7, 'thai', '1994-10-10', 'Hoa Kỳ tại Pebble Beach Golf Links lịch ', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:31:28'),
(8, 'thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:52:51'),
(9, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 09:56:11'),
(10, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 11:07:39'),
(11, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 11:13:21'),
(12, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 11111, '2020-12-11 13:16:55'),
(13, 'thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai@gmail.com', 'ssss', 'ssd', 11111, '2020-12-11 13:22:48'),
(14, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 333333, '2020-12-11 13:28:54'),
(15, 'ssss1111', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 11111, '2020-12-11 13:35:43'),
(16, 'ssss1111', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 11111, '2020-12-11 13:37:52'),
(17, 'thai1', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1111, '2020-12-11 13:38:27'),
(18, 'aaaa1', '1994-10-10', '+84.987959209', 'vohuyenthienthai@gmail.com', 'ssss', 'ssd', 1111, '2020-12-11 13:39:09'),
(19, 'aaaa2', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 11111, '2020-12-11 13:42:29'),
(20, 'aaaaqqq', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 13:51:53'),
(21, 'aaaaqqq', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 13:59:00'),
(22, 'dung', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 13:59:26'),
(23, 'dung', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 13:59:49'),
(24, 'dung', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 14:00:25'),
(25, 'dung', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 14:04:11'),
(26, 'dung', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 14:06:35'),
(27, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1111, '2020-12-11 14:07:17'),
(28, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1233, '2020-12-11 14:08:06'),
(29, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1233, '2020-12-11 14:08:13'),
(30, 'aaaa', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1233, '2020-12-11 14:10:13'),
(31, 'thien thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 14:15:01'),
(32, 'thien thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai16@gmail.com', 'ssss', 'ssd', 1200, '2020-12-11 14:16:03'),
(33, 'thien thai', '1994-10-10', '+84.987959209', 'vohuyenthienthai94@gmail.com', 'ssss', 'ssd', 1111, '2020-12-11 14:17:01'),
(34, 'Nguyễn Dũng Trí', '1980-11-02', '076989566556', 'trind09@yahoo.com', 'asdasdsad', 'asfasasdasd', 136464647, '2020-12-11 14:40:13'),
(35, 'Nguyễn Dũng Trí', '1980-11-02', '07964941161', 'trind09@yahoo.com', 'Ngyen Van Kiet', '', 124125, '2020-12-11 15:12:55'),
(36, 'Nguyễn Dũng Trí', '1980-11-02', '07964941161', 'trind09@yahoo.com', 'Ngyen Van Kiet', '', 124125, '2020-12-11 15:23:00'),
(37, 'Nguyen Dung Tri', '0000-00-00', '04761264164', 'trind09@yahoo.com', '', '', 120003, '2020-12-11 21:16:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `title_plan` varchar(300) DEFAULT NULL,
  `plan_description` varchar(1000) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `title_plan`, `plan_description`, `create_date`) VALUES
(4, 'video', 'sukien', '2020-12-10 10:23:16'),
(5, 'video1', 'sukien1', '2020-12-10 10:23:16');

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
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
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
(88, '15', 'Nguyễn Tuấn Anh', '1995-05-15', '0936748948', 'nguyentuananh821@gmail.com', NULL, 'Tphcm', 'NG Tuấn Anh', '', '0936748948', 'register_files/uploads/photo_nguyentuananh821@gmail.com_B_27-11-2020_12-24-40.jpg|register_files/uploads/photo_nguyentuananh821@gmail.com_VMA_27-11-2020_12-24-40.jpg', NULL, 'Chưa từng', '', NULL, '2020-11-27 19:24:40', 'oto-track-attack', 'HỆ OTO Track Attack - GIẢI VINFAST TRACK ATTACK CUP', NULL, NULL, NULL),
(89, '', 'asd', '1980-11-02', '15124124', 'abc@yahoo.com', NULL, 'asdsad', '', '', '', 'register_files/uploads/photo_abc@yahoo.com_B_27-11-2020_14-02-11.jpg|register_files/uploads/photo_abc@yahoo.com_VMA_27-11-2020_14-02-11.jpg', NULL, 'asdasdasd', '', NULL, '2020-11-27 20:02:11', 'oto-track-attack', 'HỆ OTO Track Attack - GIẢI VINFAST TRACK ATTACK CUP', NULL, NULL, NULL);

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
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
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
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `caulacbo`
--
ALTER TABLE `caulacbo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `caulacbo`
--
ALTER TABLE `caulacbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
