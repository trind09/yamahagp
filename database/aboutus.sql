-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 10:10 AM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `description`, `history`, `create_date`) VALUES
(2, 'VỀ CHÚNG TÔI', '<p class=\"MsoNormal\">Năm 2020, Học viện Đua xe Việt Nam - Vietnam Racing Academy\r\n(VR) được thành lập bởi một nhóm doanh nhân với niềm đam mê mãnh liệt với đua\r\nxe thể thao. Được hỗ trợ bởi VMA - ASN duy nhất của Liên Đoàn Ô tô Quốc tế FIA\r\ntại Việt Nam.<o:p></o:p></p>', 'Insert by admin - 2021-01-17 14:15:26<br/>Update by admin - 2021-01-17 14:24:12<br/>Update by admin - 2021-01-17 14:24:27<br/>Update by admin - 2021-01-17 14:24:50<br/>Update by admin - 2021-01-18 09:53:52<br/>Update by admin - 2021-01-18 09:56:03<br/>Update by admin - 2021-01-18 09:56:39<br/>Update by admin - 2021-01-18 09:57:16<br/>Update by admin - 2021-01-18 09:57:44<br/>Update by admin - 2021-01-18 10:01:54<br/>Update by admin - 2021-01-22 09:48:26<br/>', '2021-01-17 20:15:26'),
(4, 'CÂU CHUYỆN', '<p><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Học viện Đua xe Việt Nam (VR) ra đời bởi những con người tâm huyết, trăn trở với nền thể thao đua xe nước nhà. Luôn mong muốn Việt Nam có những tay đua đủ chuyên môn để thi đấu trong khu vực cũng như quốc tế.</span></p>', 'Insert by admin - 2021-01-17 14:25:26<br/>Update by admin - 2021-01-17 14:25:43<br/>Update by admin - 2021-01-22 09:49:33<br/>', '2021-01-17 20:25:26'),
(5, 'ĐỊNH HƯỚNG', '<p><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Học viện Vietnam Racing Academy được thành lập để định hướng và đào tạo các tay đua chuyên nghiệp, đồng thời tổ chức các cuộc thi để thúc đẩy môn đua xe thể thao nước nhà trên một nền tảng vững chắc, bài bản nhằm thúc đẩy môn đua xe thể thao tại Việt Nam.</span></p>', 'Insert by admin - 2021-01-17 14:26:52<br/>Update by admin - 2021-01-18 09:59:35<br/>Update by admin - 2021-01-22 09:50:02<br/>', '2021-01-17 20:26:52'),
(6, 'GIÁ TRỊ CỐT LÕI', '<ul><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Chuyên nghiệp</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Đam mê</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Điêu luyện</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Tinh thần thể thao</span></li></ul>', 'Insert by admin - 2021-01-17 14:28:16<br/>Update by admin - 2021-01-18 10:00:13<br/>', '2021-01-17 20:28:16'),
(7, 'TẦM NHÌN TƯƠNG LAI', '<p><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Quảng bá và cấu trúc hóa văn hóa đua xe thể thao tại Việt Nam, cũng như mang đến nhiều cơ hội cho các danh nghiệp trong nước và ngoài nước quảng bá thương hiệu trong môi trường an toàn và công bằng.</span></p>', 'Insert by admin - 2021-01-17 14:29:16<br/>Update by admin - 2021-01-18 09:42:20<br/>Update by admin - 2021-01-18 09:42:54<br/>Update by admin - 2021-01-18 09:51:22<br/>Update by admin - 2021-01-18 09:52:31<br/>Update by admin - 2021-01-18 10:00:52<br/>Update by admin - 2021-01-22 09:50:51<br/>', '2021-01-17 20:29:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
