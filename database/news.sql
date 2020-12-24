-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 12:54 PM
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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image_name` varchar(300) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `hyperlink` varchar(300) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image_name`, `title`, `description`, `hyperlink`, `author`, `create_date`) VALUES
(29, '../assets/news/images/albumgolfnewsst-gs2c4881-1606447274851-16064472773001931337640.jpg', '50 CLB tham dự giải golf tranh cúp Tasmania', 'Vào tối ngày 29/11, ban tổ chức giải Vô địch các CLB Golf tranh cúp Tasmania lần thứ hai đã tổ chức buổi họp báo với sự tham dự của đại diện CLB cùng những đơn vị tài trợ đồng hành. Theo kế hoạch, giải đấu sẽ diễn ra trong hai ngày 8-9/12 trên sân golf Tân Sơn Nhất và nằm trong chuỗi sự kiện thể thao Race To Mien Trung.', 'https://ictvietnam.vn/50-clb-tham-du-giai-golf-tranh-cup-tasmania-20201127102541564.htm', '', '2020-12-16 22:48:49'),
(30, '../assets/news/images/12.jpg', 'Chuỗi sự kiện thể thao hướng về miền Trung trong tháng 12', 'Tháng 12 này sẽ diễn ra hai sự kiện thể thao đình đám là giải Vô Địch Các CLB Golf tranh Cúp Tasmania và Lễ hội đua xe thể thao lớn nhất Việt Nam được tổ chức theo chuẩn VMA. ', 'https://kinhtethitruong.vn/chuoi-su-kien-the-thao-huong-ve-mien-trung-trong-thang-12-40889.html', '', '2020-12-16 22:49:38'),
(31, '../assets/news/images/race-to-mien-trung3-1123.jpg', 'Cơ hội “săn” HIO 40 tỷ tại giải vô địch các CLB Golf tranh Cúp Tasmania', '(GolfViet) – Giải Vô địch các CLB golf tranh Cúp Tasmania lần thứ 2 sẽ diễn ra vào ngày 08,09/12/2020 tại sân golf Tân Sơn Nhất.', 'https://golfviet.vn/co-hoi-san-hio-40-ty-tai-giai-vo-dich-cac-clb-golf-tranh-cup-tasmania-d5021.html', '', '2020-12-16 22:51:23'),
(32, '../assets/news/images/albumgolfnewsst-gs2c4881-1606447274851-16064472773001931337640.1608134026.jpg', 'Giải Vô Địch các CLB Golf hướng về miền Trung', 'Giải vô địch các CLB Golf lần thứ 2 diễn ra ngày 8-9/12 với sự tham dự của 650 golfer đến từ nhiều tỉnh thành trong cả nước.', 'https://vietnamnet.vn/vn/the-thao/cac-mon-khac/giai-vo-dich-cac-clb-golf-huong-ve-mien-trung-693111.html', '', '2020-12-16 22:53:46'),
(33, '../assets/news/images/albumgolfnewsst-gs2c4881-1606447274851-16064472773001931337640.1608134115.jpg', 'Giải vô địch golf quy mô lớn', 'Trong 2 ngày 8, 9/12, sẽ diễn ra sự kiện giải Vô địch các CLB golf phía Nam, với sự tham dự của 50 đội đến từ nhiều địa phương khác nhau.', 'https://dantri.com.vn/the-thao/giai-vo-dich-golf-quy-mo-lon-20201127225621863.htm', '', '2020-12-16 22:55:15'),
(34, '../assets/news/images/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.jpg', '﻿50 CLB Golf tranh tài tại giải Giải Vô địch các CLB Cup Tasmania 2020.', 'Vào tối ngày 26/11, ban tổ chức giải Vô địch các CLB Golf tranh cúp Tasmania lần thứ hai đã tổ chức buổi họp báo với sự tham dự của đại diện CLB cùng những đơn vị tài trợ đồng hành. ', 'https://www.golfnews.vn/50-clb-golf-tranh-tai-tai-giai-giai-vo-dich-cac-clb-cup-tasmania-2020.html', '', '2020-12-16 22:56:45'),
(35, '../assets/news/images/lecongbogiaigolf27112020.jpg', '﻿Hai sự kiện thể thao hướng về miền Trung trong tháng 12', 'Ngày 26.11.2020, Ban tổ chức chương trình Race to mien Trung (RTMT) đã tổ chức lễ công bố hai sự kiện thể thao lớn trong tháng 12.2020.', 'https://1thegioi.vn/hai-su-kien-the-thao-huong-ve-mien-trung-trong-thang-12-157006.html', '', '2020-12-16 22:58:11'),
(36, '../assets/news/images/le-cong-vinh-chuyen-nghe-danh-golf-giai-clb-race-to-mien-trung.1608134418.jpg', 'Lê Công Vinh \'chuyển nghề\' đánh golf giải CLB ‘Race to mien Trung’', 'Cựu danh thủ bóng đá Việt Nam Lê Công Vinh cùng 649 golfer góp mặt tranh tài ở giải vô địch các CLB golf-Cúp Tasmania trong chuỗi sự kiện “Race to mien Trung”.', 'https://thanhnien.vn/the-thao/toan-canh-the-thao/le-cong-vinh-chuyen-nghe-danh-golf-giai-clb-race-to-mien-trung-125268.html', '', '2020-12-16 23:00:18'),
(37, '../assets/news/images/9c-9102-1606469875.jpg', 'Lễ hội golf phong trào lớn nhất phía Nam', 'Giải vô địch các CLB golf phía Nam, với hơn 600 golfer từ 50 hội nhóm, hứa hẹn trở thành lễ hội golf phong trào lớn nhất cả nước dịp cuối năm nay.', 'https://vnexpress.net/le-hoi-golf-phong-trao-lon-nhat-phia-nam-4198193.html', '', '2020-12-16 23:01:10'),
(38, '../assets/news/images/1-14545995.jpg', 'Tháng 12 diễn ra sự kiện thể thao lớn nhất năm gây quỹ từ thiện cho các tỉnh miền Trung', 'Tháng 12 này sẽ diễn ra hai sự kiện thể thao đình đám là giải Vô địch các CLB Golf tranh Cúp Tasmania và Lễ hội đua xe thể thao lớn nhất Việt Nam được tổ chức theo chuẩn VMA.', 'https://giadinhvietnam.com/thang-12-dien-ra-su-kien-the-thao-lon-nhat-nam-gay-quy-tu-thien-cho-cac-tinh-mien-trung-d164077.html?', '', '2020-12-16 23:17:02'),
(39, '../assets/news/images/things-you-need-to-know-about-the-series-of-sporting.1608135489.jpg', 'Thêm tấm lòng hướng về đồng bào miền Trung', '(Thethaovanhoa.vn)- Chiều 26/11 tại TP.HCM, BTC giải vô địch Các CLB Golf tranh Cúp Tasmania và Lễ hội đua xe thể thao lớn nhất Việt Nam đã tổ chức buổi họp báo giới thiệu chương trình và chuỗi sự kiện gây quỹ ủng hộ đồng bào miền Trung bị ảnh hưởng bởi lũ lụt.', 'https://thethaovanhoa.vn/the-thao/them-tam-long-huong-ve-dong-bao-mien-trung-n20201127144503371.htm', '', '2020-12-16 23:18:09'),
(40, '../assets/news/images/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.1608135673.jpg', 'Things you need to know about the series of sporting events “RACE TO MIEN TRUNG”', 'It’s the reason that “RACE TO MIEN TRUNG” (Race to Central Vietnam) was chosen to become the key message of this series of sports events, as an encouragement from the organizing committee to ignite and spread the positive values to the fan clubs and the Vietnamese in general.', 'https://vietnaminsider.vn/things-you-need-to-know-about-the-series-of-sporting-events-race-to-mien-trung/', '', '2020-12-16 23:21:13'),
(41, '../assets/news/images/z2197979732016_6130c4bb28dc31416ada46221416fff7.jpg', 'Treo 40 tỷ đồng cho HIO tại giải Vô địch các CLB tranh cúp Tasmania 2020 ', 'Chiều nay, lễ công bố giải golf “Vô địch CLB tranh cúp Tasmania lần thứ 2” đã diễn ra với đại diện của của 50 CLB khu vực phía Nam tham gia tranh đấu trong hai ngày 8-9.12 tại sân golf Tân Sơn Nhất tới đây. Giải đấu nằm trong chuỗi sự kiện thể thao “Race to Mien Trung” cùng hoạt động Lễ Hội Đua Xe Thể Thao lần đầu tiên được tổ chức tại Việt Nam diễn ra vào ngày 12.12 tại trường đua Đại Nam.', 'https://vietnamgolfmagazine.net/vi/treo-40-ty-dong-cho-hio-tai-giai-vo-dich-cac-clb-tranh-cup-tasmania-2020', '', '2020-12-16 23:22:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
