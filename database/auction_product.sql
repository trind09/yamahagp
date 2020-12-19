-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 09:25 AM
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
-- Table structure for table `auction_product`
--

CREATE TABLE `auction_product` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(300) DEFAULT NULL,
  `pro_short_description` varchar(500) DEFAULT NULL,
  `pro_description` varchar(5000) DEFAULT NULL,
  `pro_type` varchar(500) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `picture` varchar(300) DEFAULT NULL,
  `extra_option` varchar(300) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auction_product`
--

INSERT INTO `auction_product` (`id`, `pro_name`, `pro_short_description`, `pro_description`, `pro_type`, `price`, `currency`, `start_date`, `end_date`, `picture`, `extra_option`, `history`, `create_date`) VALUES
(10, 'What is Lorem Ipsum?', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Tác phẩm điêu khắc', '40001', 'USD', '2020-12-23 00:00:00', '2021-01-03 00:00:00', '../assets/aution_product/20200612_165352.jpg|../assets/aution_product/20200615_175917.jpg|../assets/aution_product/20200615_180017.jpg', 'Where does it come from?', 'Update by admin - 2020-12-14 15:38:44<br/>', '2020-12-14 13:22:38'),
(12, 'THE ANATOMY OF A GOLFER LV, ATELIER', 'The Anatomy of a Golfer lV, Atelier là tác phẩm đầu tiên trong loạt các tay golf của Richard MacDonald được lấy cảm hứng từ việc tạo ra tác phẩm điêu khắc anh hùng của ông ...', 'The Anatomy of a Golfer lV, Atelier là tác phẩm đầu tiên trong loạt các tay golf của Richard MacDonald được lấy cảm hứng từ việc tạo ra tác phẩm điêu khắc anh hùng của ông, MOMENTUM, đánh dấu Kỷ niệm 100 năm Giải đấu Golf mở rộng Hoa Kỳ tại Pebble Beach Golf Links lịch sử vào năm 2000 Giải phẫu của một Golfer lV, Atelier mô tả tất cả năm chuyển động của cú swing - từ chuyển động quay ngược lại đến tiếp tục đánh. Mỗi tác phẩm điêu khắc trong loạt bài ca ngợi chủ nghĩa thể thao và sự tập trung cần thiết để chiến thắng trong một trong những môn thể thao thách thức nhất của thời đại chúng ta.', 'Tác phẩm điêu khắc', '200000000', 'VND', '2020-12-01 14:11:45', '2021-01-31 14:11:45', '../assets/aution_product/The_Anatomy_of_a_Golffe_IV[1].jpg', 'Người tặng: Ms. Lệ Hằng - Chủ Tịch Câu Lạc Bộ Từ Thiện OPEN ARMS', 'Người tặng: Ms. Lệ Hằng - Chủ Tịch Câu Lạc Bộ Từ Thiện OPEN ARMSUpdate by admin - 2020-12-14 15:41:01<br/>Update by admin - 2020-12-14 20:11:02<br/>Update by admin - 2020-12-15 09:24:11<br/>', '2020-12-14 20:14:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_product`
--
ALTER TABLE `auction_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_product`
--
ALTER TABLE `auction_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
