-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:38 PM
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
(2, 'VỀ CHÚNG TÔI', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Năm 2019 khởi đầu cho sự kiện quy tụ các Golfer hàng đầu thuộc nhiều CLB golf tại TP Hồ Chí Minh và các tỉnh phía Nam tạo nên sự kiện Vô Địch Các CLB Golf Phía Nam tranh cúp Tasmania, năm 2020 tiếp nối sự thành công đó là sự đầu tư chỉn chu hơn từ phía ban tổ chức cũng như 50 CLB Golf tham dự sẽ tạo nên một ngày hội golf phương Nam sẽ diễn ra ngày 8 và ngày 9’tháng 12 năm 2020 với gần 700 Golfer tham dự.</span></p>', 'Insert by admin - 2021-01-17 14:15:26<br/>Update by admin - 2021-01-17 14:24:12<br/>Update by admin - 2021-01-17 14:24:27<br/>Update by admin - 2021-01-17 14:24:50<br/>Update by admin - 2021-01-18 09:53:52<br/>Update by admin - 2021-01-18 09:56:03<br/>Update by admin - 2021-01-18 09:56:39<br/>Update by admin - 2021-01-18 09:57:16<br/>Update by admin - 2021-01-18 09:57:44<br/>Update by admin - 2021-01-18 10:01:54<br/>', '2021-01-17 20:15:26'),
(4, 'CÂU CHUYỆN', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\" times=\"\" new=\"\" roman\";\"=\"\">Sự kiện Vô Địch Các CLB Golf ra đời nhằm thay đổi thói quen golf của các Golfer xưa nay đó là chỉ chơi với chính mình và ít mở rộng giao thương kết nối, thì đây sẽ là cầu nối để các CLB Golf khắp nơi xây dựng văn hoá , phong cách và màu cờ sắc áo của đội mình và hơn hết là tinh thần đồng đội được đề cao hơn hết cho một chiến thắng tập thể thay vì thành tích cá nhân.</span></p>', 'Insert by admin - 2021-01-17 14:25:26<br/>Update by admin - 2021-01-17 14:25:43<br/>', '2021-01-17 20:25:26'),
(5, 'ĐỊNH HƯỚNG', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Đây sẽ là sự kiện được tổ chức định kỳ hàng năm , mỗi năm sẽ có đầu tư mạnh mẽ hơn về chất lượng chuyên môn cũng như tài chính mạnh hơn nhằm đem đến một ngày hội golf thực sự của các Golfer phía Nam.</span></p>', 'Insert by admin - 2021-01-17 14:26:52<br/>Update by admin - 2021-01-18 09:59:35<br/>', '2021-01-17 20:26:52'),
(6, 'GIÁ TRỊ CỐT LÕI', '<ul><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Chuyên nghiệp</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Đam mê</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Điêu luyện</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;;\">Tinh thần thể thao</span></li></ul>', 'Insert by admin - 2021-01-17 14:28:16<br/>Update by admin - 2021-01-18 10:00:13<br/>', '2021-01-17 20:28:16'),
(7, 'TẦM NHÌN TƯƠNG LAI', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Chúng tôi thực hiện sứ mệnh truyền tải cảm hứng golf đến cộng đồng Golfer toàn quốc , tạo ra hiệu ứng tốt để phát triển phong trào golf , đưa golf trở nên phổ thông hơn với người Việt chúng ta, là cầu nối để kết nối giao thương giữa các Golfer trong nước và quốc tế.</span></p>', 'Insert by admin - 2021-01-17 14:29:16<br/>Update by admin - 2021-01-18 09:42:20<br/>Update by admin - 2021-01-18 09:42:54<br/>Update by admin - 2021-01-18 09:51:22<br/>Update by admin - 2021-01-18 09:52:31<br/>Update by admin - 2021-01-18 10:00:52<br/>', '2021-01-17 20:29:16'),
(8, 'DANH SÁCH NHÀ TÀI TRỢ', '<p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;<img src=\"https://golfandcar.vn/assets/images/sponsors.png\" style=\"width: 100%;\"></p>', 'Insert by admin - 2021-01-17 14:44:48<br/>Update by admin - 2021-01-17 14:45:56<br/>Update by admin - 2021-01-17 14:47:00<br/>Update by admin - 2021-01-18 03:09:59<br/>Update by admin - 2021-01-18 03:10:18<br/>Update by admin - 2021-01-18 09:35:14<br/>', '2021-01-17 20:44:48');

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
