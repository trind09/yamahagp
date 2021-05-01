-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2021 at 11:30 AM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u888166303_golfandcar`
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
  `create_date` datetime DEFAULT current_timestamp()
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
(8, 'DANH SÁCH NHÀ TÀI TRỢ', '<p style=\"text-align: left;\">     <img src=\"https://golfandcar.vn/assets/images/sponsors.png\" style=\"width: 100%;\"></p>', 'Insert by admin - 2021-01-17 14:44:48<br/>Update by admin - 2021-01-17 14:45:56<br/>Update by admin - 2021-01-17 14:47:00<br/>Update by admin - 2021-01-18 03:09:59<br/>Update by admin - 2021-01-18 03:10:18<br/>Update by admin - 2021-01-18 09:35:14<br/>Update by admin - 2021-01-22 03:01:53<br/>', '2021-01-17 20:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `aution_product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `root_price` decimal(13,2) DEFAULT NULL,
  `pid_rate` decimal(13,2) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `price` decimal(13,2) DEFAULT NULL,
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
(12, 'THE ANATOMY OF A GOLFER LV, ATELIER', 'The Anatomy of a Golfer lV, Atelier là tác phẩm đầu tiên trong loạt các tay golf của Richard MacDonald được lấy cảm hứng từ việc tạo ra tác phẩm điêu khắc anh hùng của ông ...', 'The Anatomy of a Golfer lV, Atelier là tác phẩm đầu tiên trong loạt các tay golf của Richard MacDonald được lấy cảm hứng từ việc tạo ra tác phẩm điêu khắc anh hùng của ông, MOMENTUM, đánh dấu Kỷ niệm 100 năm Giải đấu Golf mở rộng Hoa Kỳ tại Pebble Beach Golf Links lịch sử vào năm 2000 Giải phẫu của một Golfer lV, Atelier mô tả tất cả năm chuyển động của cú swing - từ chuyển động quay ngược lại đến tiếp tục đánh. Mỗi tác phẩm điêu khắc trong loạt bài ca ngợi chủ nghĩa thể thao và sự tập trung cần thiết để chiến thắng trong một trong những môn thể thao thách thức nhất của thời đại chúng ta.', 'Tác phẩm điêu khắc', '200000000.00', 'VND', '2020-12-17 22:01:45', '2021-04-10 12:00:00', '../assets/aution_product/The_Anatomy_of_a_Golffe_IV[1].jpg', 'Người tặng: Ms. Lệ Hằng - Chủ Tịch Câu Lạc Bộ Từ Thiện OPEN ARMS', 'Người tặng: Ms. Lệ Hằng - Chủ Tịch Câu Lạc Bộ Từ Thiện OPEN ARMSUpdate by admin - 2020-12-14 15:41:01<br/>Update by admin - 2020-12-14 20:11:02<br/>Update by admin - 2020-12-15 09:24:11<br/>Update by admin - 2020-12-18 11:46:02<br/>Update by admin - 2020-12-18 15:02:42<br/>Update by admin - 2020-12-18 15:06:07<br/>Update by admin - 2020-12-19 02:13:30<br/>Update by admin - 2020-12-19 02:13:48<br/>Update by admin - 2020-12-19 13:58:20<br/>', '2020-12-14 20:14:17'),
(13, 'PEBBLE BEACH LEOPARDWOOD MODERN CLASSIC BY DAVID MUSTY PUTTERS', 'Với những thiết kế bởi các nhà chế tác từ David Musty, không chỉ tạo ra những chiếc gậy gạt bóng đẹp mắt, họ còn luôn theo đuổi mục tiêu tạo ra nhựng chiếc gậy gạt bóng có chức năng tốt nhất trên thị trường.', '<p><span style=\"color: rgb(34, 34, 34); font-family: \"Segoe UI\", SegoeuiPc, \"San Francisco\", \"Helvetica Neue\", Helvetica, \"Lucida Grande\", Roboto, Ubuntu, Tahoma, \"Microsoft Sans Serif\", Arial, sans-serif; font-size: 15px; white-space: pre-wrap;\">Đối với những thiết kế của nhà chế tác David Musty, ông không chỉ tạo ra những chiếc gậy gạt bóng đẹp mắt, mà còn luôn theo đuổi mục tiêu tạo ra những chiếc gậy gạt bóng có chức năng tốt nhất  trên thị trường. Các đặc tính tự nhiên của gỗ cho phép David Musty đặt một hệ thống trọng lượng thông minh dựa trên quán tính giúp tạo ra một cú đánh hoàn hảo. Với trọng tâm được nâng lên, chế tác của David Musty đã truyền năng lượng đến đường trọng tâm của quả bóng, tạo ra lực lăn nhất quán về phía trước, một yếu tố rất quan trọng trong mỗi cú đánh bóng.\r\n\r\nThanh đập bóng bằng gỗ rắn chắc tạo ra cảm giác chuẩn xác và điểm va chạm mở rộng một cách hoàn hảo. Xóa bỏ những lực nẩy thường xảy ra trên thanh đập bóng bằng kim loại thông thường.\r\n\r\nCác đặc điểm:\r\n- Có khắc logo Pebble Beach bằng tia laser\r\n- Được làm thủ công từ gỗ Leopardwood cho hiệu suất cao\r\n- Tay nắm bằng da quấn trên trục kim loại</span></p><p><br></p><p>Đường bóng trên gậy gạt thông thường<br><img src=\"http://golfandcar.vn/admin/assets/summernote_imgs/b3e3e393c77e35a4a3f3cbd1e429b5dc.jpg\" data-filename=\"\" style=\"width: 300px;\"><br>Trọng tâm thấp hơn tạo ra xoáy ngược và nhảy vọt trên đường bóng.</p><p><br></p><p><b>Đường bóng trên gậy gạt David Musty<br><img src=\"http://golfandcar.vn/admin/assets/summernote_imgs/bd686fd640be98efaae0091fa301e613.jpg\" data-filename=\"\" style=\"width: 300px;\"><br>Trọng tâm được nâng lên tạo ra lực lăn bóng hoàn hảo về phía trước.</b></p><p><br></p><p>Điểm va chạm trên gậy gạt bóng thông thường<br><img src=\"http://golfandcar.vn/admin/assets/summernote_imgs/42a0e188f5033bc65bf8d78622277c4e.jpg\" data-filename=\"\" style=\"width: 300px;\"><br>Hầu hết các gậy gạt bóng thông thường đều có điểm va chạm nhỏ không nhất quán.</p><p><br></p><p><b>Điểm va chạm trên gậy gạt bóng David Musty<br><img src=\"http://golfandcar.vn/admin/assets/summernote_imgs/0a09c8844ba8f0936c20bd791130d6b6.jpg\" data-filename=\"\" style=\"width: 300px;\"><br>Gậy gạt bóng David Musty có điểm va chạm với bóng mở rộng cho phép bóng lăn một cách ổn định.</b></p>', 'Tác phẩm điêu khắc', '1000.00', 'USD', '2021-01-12 17:14:48', '2021-04-10 18:00:00', '../assets/aution_product/7943_golf_mustyputter_l[1].jpg', 'Người tặng: Ms. Nguyễn Gia Bảo - Sáng lập học viên Đua Xe thể thao VRA', 'Insert by admin - 2021-01-12 17:17:05<br/>Update by admin - 2021-01-12 17:23:09<br/>Update by admin - 2021-01-12 17:23:43<br/>Update by admin - 2021-01-12 21:59:22<br/>Update by admin - 2021-01-12 22:00:08<br/>Update by admin - 2021-01-13 02:51:40<br/>Update by  - 2021-01-13 07:31:49<br/>Update by admin - 2021-01-13 08:11:03<br/>', '2021-01-13 00:17:05'),
(14, '2021 Masters Golf Travel Packages (Practice Round Packages)', 'Trải nghiệm giải đấu danh giá nhất của bộ môn Golf tại Giải vô địch Golf Masters 2021 tại Augusta, Georgia.  Một trong những gói trải nghiệm sang trọng nhất về Master Badges (vé), chỗ ở hạng nhất của Augusta, dịch vụ đưa đón 2 chiều cho các khóa học và dịch vụ độc quyền được phục vụ bởi những nhân viên giàu kinh nghiệm nhất.', '<p>Trải nghiệm giải đấu danh giá nhất của bộ môn Golf tại Giải vô địch Golf Masters 2021 tại Augusta, Georgia.  Một trong những gói trải nghiệm sang trọng nhất về Master Badges (vé), chỗ ở hạng nhất của Augusta, dịch vụ đưa đón 2 chiều cho các khóa học và dịch vụ độc quyền được phục vụ bởi những nhân viên giàu kinh nghiệm nhất.</p><p><br></p><p>Trải nghiệm giải đấu danh giá nhất của bộ môn Golf tại Giải vô địch Golf Masters 2021 tại Augusta, Georgia.  Một trong những gói trải nghiệm sang trọng nhất về Master Badges (vé), chỗ ở hạng nhất của Augusta, dịch vụ đưa đón 2 chiều cho các khóa học và dịch vụ độc quyền được phục vụ bởi những nhân viên giàu kinh nghiệm nhất.</p><p><br></p><p>Gói Masters 2021, bao gồm các dịch vụ:</p><p>- Master Badges cho các vòng đã chọn của bạn</p><p>- Lựa chọn chỗ ở đạt tiêu chuẩn Hạng Nhất</p><p>- Dịch vụ đưa đón theo nhóm 2 chiều hàng ngày đến Augusta</p><p>- Địa điểm Khách sạn độc quyền (tùy chọn)</p><p>- Bữa sáng Miễn phí Hàng ngày</p><p>- Tiệc chiêu đãi Buổi tối hàng ngày</p><p>- Tổ chức tour Road trips</p><p>- Các chuyên gia sẽ lập kế hoạch du lịch trước chuyến đi và dịch vụ trợ giúp đặc biệt cho các nhóm tham gia Roadtrips</p>', 'Du lịch', '2295.00', 'USD', '2021-01-13 07:48:41', '2021-04-10 18:00:00', '../assets/aution_product/masters-hero7[1].jpg', 'Người tặng: Ms. Nguyễn Gia Bảo - Sáng lập học viên Đua Xe thể thao VRA', 'Insert by admin - 2021-01-13 08:02:49<br/>Update by admin - 2021-01-13 08:09:01<br/>Update by admin - 2021-01-13 08:10:13<br/>Update by admin - 2021-01-13 08:10:23<br/>Update by admin - 2021-01-13 08:15:57<br/>', '2021-01-13 15:02:49'),
(15, '2021 Masters Golf Travel Packages (Tournament Round Packages)', 'Trải nghiệm giải đấu danh giá nhất của bộ môn Golf tại Giải vô địch Golf Masters 2021 tại Augusta, Georgia.  Một trong những gói trải nghiệm sang trọng nhất về Master Badges (vé), chỗ ở hạng nhất của Augusta, dịch vụ đưa đón 2 chiều cho các khóa học và dịch vụ độc quyền được phục vụ bởi những nhân viên giàu kinh nghiệm nhất.', '<p>Trải nghiệm giải đấu danh giá nhất của bộ môn Golf tại Giải vô địch Golf Masters 2021 tại Augusta, Georgia.  Một trong những gói trải nghiệm sang trọng nhất về Master Badges (vé), chỗ ở hạng nhất của Augusta, dịch vụ đưa đón 2 chiều cho các khóa học và dịch vụ độc quyền được phục vụ bởi những nhân viên giàu kinh nghiệm nhất.</p><p><br></p><p>Golf Masters 2021 sẽ là một trong những sự kiện độc nhất trong giới thể thao. Các gói trải nghiệm có thể tùy chỉnh và lựa chọn những khách sạn tốt nhất của Georgia như Ritz-Carlton Reynolds và một danh sách dài các dịch vụ bổ sung khác. Với nhiều năm kinh nghiệm tham gia các sự kiện lớn nhất thế giới, bao gồm nhiều giải đấu Masters, Gói trải nghiệm được chăm chút một cách hoàn hảo và đảm bảo các golfer có trải nghiệm chơi golf tuyệt vời nhất.</p><p><br></p><p>Gói Masters 2021, bao gồm các dịch vụ:</p><p>- Master Badges cho các vòng đã chọn của bạn</p><p>- Lựa chọn chỗ ở đạt tiêu chuẩn Hạng Nhất</p><p>- Dịch vụ đưa đón theo nhóm 2 chiều hàng ngày đến Augusta</p><p>- Địa điểm Khách sạn độc quyền (tùy chọn)</p><p>- Bữa sáng Miễn phí Hàng ngày</p><p>- Tiệc chiêu đãi Buổi tối hàng ngày</p><p>- Tổ chức tour Road trips</p><p>- Các chuyên gia sẽ lập kế hoạch du lịch trước chuyến đi và dịch vụ trợ giúp đặc biệt cho các nhóm tham gia Roadtrips</p>', 'Du lịch', '3755.00', 'USD', '2021-01-13 08:02:49', '2021-04-10 18:00:00', '../assets/aution_product/masters-hero7[1].1610525091.jpg', 'Người tặng: Ms. Nguyễn Gia Bảo - Sáng lập học viên Đua Xe thể thao VRA', 'Insert by admin - 2021-01-13 08:04:51<br/>Update by admin - 2021-01-13 08:06:01<br/>Update by admin - 2021-01-13 08:08:12<br/>Update by admin - 2021-01-13 08:10:46<br/>Update by admin - 2021-01-13 08:15:34<br/>', '2021-01-13 15:04:51');

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
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caulacbo`
--

INSERT INTO `caulacbo` (`id`, `image_name`, `title`, `description`, `hyperlink`, `history`, `create_date`) VALUES
(27, '', 'Hội Golf Tỉnh Đồng Nai', '', '', 'Updated by admin - 2021-01-16 14:40:05</br>Updated by admin - 2021-01-16 14:40:10</br>', '2020-12-13 09:25:51'),
(28, '../assets/clbs/z2224189151927_55aff970e80d61f2d03c7cb2737761d0.jpg|../assets/clbs/HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU.jpg|../assets/clbs/HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU1.jpg', 'HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU', '', '', NULL, '2020-12-13 09:26:43'),
(29, '../assets/clbs/CLB GOLF TỈNH BÌNH THUẬN.jpg|../assets/clbs/CLB GOLF TỈNH BÌNH THUẬN1.jpg', 'CLB GOLF TỈNH BÌNH THUẬN', '', '', NULL, '2020-12-13 09:27:15'),
(30, '../assets/clbs/z2224191254720_c31c7c51fae937c5526b5bd39a4ff832.jpg|../assets/clbs/HỘI GOLF NHA TRANG.jpg|../assets/clbs/HỘI GOLF NHA TRANG1.jpg', 'HỘI GOLF NHA TRANG', '', '', NULL, '2020-12-13 09:27:42'),
(31, '../assets/clbs/HỘI GOLF TỈNH LÂM ĐỒNG.jpg|../assets/clbs/HỘI GOLF TỈNH LÂM ĐỒNG1.jpg', 'HỘI GOLF TỈNH LÂM ĐỒNG', '', '', NULL, '2020-12-13 09:28:02'),
(32, '../assets/clbs/CLB GOLF TASMANIA.jpg|../assets/clbs/CLB GOLF TASMANIA1.jpg', 'CLB GOLF TASMANIA', '', '', NULL, '2020-12-13 09:28:27'),
(33, '../assets/clbs/CLB GOLF DOANH NHÂN TRẺ TPHCM.jpg|../assets/clbs/CLB GOLF DOANH NHÂN TRẺ TPHCM1.jpg', 'CLB GOLF DOANH NHÂN TRẺ TP. HCM', '', '', NULL, '2020-12-13 09:29:16'),
(34, '../assets/clbs/z2224189143178_ac564bde03b26f1e0093ca609cbfb26e.jpg|../assets/clbs/CLB GOLF DOANH NHÂN SÀI GÒN.jpg', 'CLB GOLF DOANH NHÂN SÀI GÒN', '', '', NULL, '2020-12-13 09:30:38'),
(35, '../assets/clbs/SAIGON OPEN GOLF CLUB.jpg', 'SÀI GÒN OPEN GOLF CLUB', '', '', NULL, '2020-12-13 09:31:04'),
(36, '../assets/clbs/CLB GOLF BẤT ĐỘNG SẢN TPHCM.jpg|../assets/clbs/CLB GOLF BẤT ĐỘNG SẢN TPHCM1.jpg', 'CLB GOLF BẤT ĐỘNG SẢN TP. HCM', '', '', NULL, '2020-12-13 09:31:56'),
(37, '../assets/clbs/z2224191217034_f014f1764c073a5dcce40e980b51b21d.jpg|../assets/clbs/z2224189160802_846a300ba00ad3f165b33b81300811cc.jpg|../assets/clbs/CLB GOLF SG - TB.jpg|../assets/clbs/CLB GOLF SG - TB1.jpg', 'CLB GOLF SG - TB', '', '', NULL, '2020-12-13 09:43:11'),
(38, '../assets/clbs/z2224191188874_e66b33b87425392a5684b81a80dc77d0.jpg|../assets/clbs/CLB GOLF LADIES AND BEAUTY CLUB.jpg|../assets/clbs/CLB GOLF LADIES AND BEAUTY CLUB1.jpg', 'CLB GOLF LADIES & BEAUTY CLUB', '', '', NULL, '2020-12-13 09:44:23'),
(39, '../assets/clbs/CLB GOLF MIỀN TRUNG & FRIENDS.jpg|../assets/clbs/CLB GOLF MIỀN TRUNG & FRIENDS1.jpg', 'CLB GOLF MIỀN TRUNG & FRIENDS', '', '', NULL, '2020-12-13 09:45:04'),
(40, '../assets/clbs/CLB GOLF VŨ VÕ.jpg|../assets/clbs/CLB GOLF VŨ VÕ1.jpg', 'CLB GOLF VŨ VÕ', '', '', NULL, '2020-12-13 09:45:30'),
(41, '../assets/clbs/z2224191197750_0644a07dc968a3a94ee72ae15900574d.jpg|../assets/clbs/CLB GOLF TÂN SƠN NHẤT.jpg|../assets/clbs/CLB GOLF TÂN SƠN NHẤT1.jpg', 'CLB GOLF TÂN SƠN NHẤT', '', '', NULL, '2020-12-13 09:46:15'),
(42, '../assets/clbs/CLB GOLF BÔNG LÚA VÀNG.jpg', 'CLB GOLF BÔNG LÚA VÀNG', '', '', NULL, '2020-12-13 09:46:43'),
(43, '../assets/clbs/CLB GOLF DOANH NHÂN VIỆT NAM.jpg|../assets/clbs/CLB GOLF DOANH NHÂN VIỆT NAM1.jpg', 'CLB GOLF DOANH NHÂN VIỆT NAM', '', '', NULL, '2020-12-13 09:47:29'),
(44, '../assets/clbs/CLB GOLF HỌ TRẦN VIỆT NAM.jpg|../assets/clbs/CLB GOLF HỌ TRẦN VIỆT NAM1.jpg', 'CLB GOLF HỌ TRẦN VIỆT NAM', '', '', NULL, '2020-12-13 09:48:01'),
(45, '../assets/clbs/z2224190482526_0266a3d654ca439b827813ffc651bc19.jpg|../assets/clbs/CLB GOLF AND FRIENDS.jpg|../assets/clbs/CLB GOLF AND FRIENDS1.jpg', 'CLB Golf & Friends', '', '', NULL, '2020-12-13 09:48:30'),
(46, '../assets/clbs/CLB GOLF HỌ LÊ.jpg|../assets/clbs/CLB GOLF HỌ LÊ1.jpg', 'CLB GOLF HỌ LÊ', '', '', NULL, '2020-12-13 09:49:19'),
(47, '../assets/clbs/z2224191245670_10a845a14d3d7aedcb745cde8c684001.jpg|../assets/clbs/XỨ THANH GOLF CLUB.jpg|../assets/clbs/XỨ THANH GOLF CLUB1.jpg', 'CLB Golf Xứ Thanh', '', '', NULL, '2020-12-13 09:50:02'),
(48, '../assets/clbs/z2224190521512_f32387aac5f71b33819103e6afe4a7d1.jpg|../assets/clbs/CLB GOLF CÁ CƠM - TRIPLE C.jpg|../assets/clbs/CLB GOLF CÁ CƠM - TRIPLE C1.jpg', 'CLB GOLF CÁ CƠM - TRIPLE C', '', '', NULL, '2020-12-13 09:50:33'),
(49, '../assets/clbs/z2224189180784_682f11e0bd0e41d99280dd69244e0ba0.jpg|../assets/clbs/CLB GOLF G78.jpg|../assets/clbs/CLB GOLF G781.jpg', 'CLB GOLF G78', '', '', NULL, '2020-12-13 09:51:19'),
(50, '../assets/clbs/CLB GOLF G76.jpg|../assets/clbs/CLB GOLF G761.jpg', 'CLB GOLF G76', '', '', NULL, '2020-12-13 09:51:44'),
(51, '../assets/clbs/Untitled_page-0005.jpg', 'CLB Bách Khoa HCM', '', '', NULL, '2020-12-13 09:52:13'),
(52, '../assets/clbs/z2224189171138_6dd8eeaa73dddc5ddb7154f558b5196c.jpg|../assets/clbs/z2224189189665_77d65d76ea94275b66daf1d0500667da.jpg|../assets/clbs/CLB GOLF HỘI DOANH NGHIỆP QUẬN THỦ ĐỨC.jpg', 'CLB golf hội doanh nghiệp quận Thủ Đức (TBA Golf Club)', '', '', NULL, '2020-12-13 09:53:10'),
(53, '../assets/clbs/z2224190474376_7420eb738580a922f624749a04d64d36.jpg|../assets/clbs/CLB GOLF VINHOMES CENTRAL PARK.jpg|../assets/clbs/CLB GOLF VINHOMES CENTRAL PARK1.jpg', 'CLB GOLF VINHOMES CENTRAL PARK GOLF CLUB ( VCPG)', '', '', NULL, '2020-12-13 09:54:56'),
(54, '../assets/clbs/CLB GOLF HERBALIFE.jpg|../assets/clbs/CLB GOLF HERBALIFE1.jpg', 'CLB GOLF HERBALIFE', '', '', NULL, '2020-12-13 09:56:14'),
(55, '../assets/clbs/z2224190501149_3c1b722e9bbbd7f31f63153dc2c2a0ea.jpg|../assets/clbs/CLB GOLF DOANH NHÂN NGHỆ TĨNH.jpg|../assets/clbs/CLB GOLF DOANH NHÂN NGHỆ TĨNH1.jpg', 'CLB GOLF DOANH NHÂN NGHỆ TĨNH', '', '', NULL, '2020-12-13 09:56:56'),
(56, '../assets/clbs/z2224190538596_37d0008f3c9f38af1941dbb0f1f63c0a.jpg|../assets/clbs/CLB GOLF HUẾ - SÀI GÒN.jpg|../assets/clbs/CLB GOLF HUẾ - SÀI GÒN1.jpg', 'CLB GOLF HUẾ - SÀI GÒN', '', '', NULL, '2020-12-13 09:57:28'),
(57, '../assets/clbs/z2224190464951_63d42194bccbfdadb3e665254b86ac09.jpg|../assets/clbs/CLB GOLF PHÚ MỸ HƯNG.jpg|../assets/clbs/CLB GOLF PHÚ MỸ HƯNG1.jpg', 'CLB GOLF PHÚ MỸ HƯNG', '', '', NULL, '2020-12-13 09:57:53'),
(58, '../assets/clbs/CLB GOLF BNG.jpg', 'CLB GOLF BNG', '', '', NULL, '2020-12-13 09:58:13'),
(59, '../assets/clbs/z2224191206971_9862c913d360b1438d7e25cdcea751e4.jpg|../assets/clbs/CLB GOLF LOBICO.jpg|../assets/clbs/CLB GOLF LOBICO1.jpg', 'CLB GOLF LOBICO', '', '', NULL, '2020-12-13 09:58:41'),
(60, '../assets/clbs/z2224193107485_923b8dc8958f757bae5e5f4f51f7e3fe.jpg|../assets/clbs/CLB GOLF CB.jpg|../assets/clbs/CLB GOLF CB1.jpg|../assets/clbs/CLB GOLF CB2.jpg', 'CLB GOLF CB', '', '', NULL, '2020-12-13 09:59:14'),
(61, '../assets/clbs/z2224191236307_c71da08dc34a908427658aab3bad6b3b.jpg|../assets/clbs/CLB GOLF TCGA.jpg|../assets/clbs/CLB GOLF TCGA1.jpg', 'CLB GOLF TCGA Vũng Tàu', '', '', NULL, '2020-12-13 09:59:46'),
(62, '../assets/clbs/z2224190491949_2598601adaff3619b2a2f3b98b481705.jpg|../assets/clbs/CLB GOLF STANDARD GOLFERS CLUB.jpg|../assets/clbs/CLB GOLF STANDARD GOLFERS CLUB1.jpg', 'CLB GOLF STANDARD GOLFERS CLUB - SGC', '', '', NULL, '2020-12-13 10:00:10'),
(63, '../assets/clbs/z2224189134274_d229c0a8490dced18448d4d82753a4fa.jpg|../assets/clbs/CLB GOLF IT.jpg|../assets/clbs/CLB GOLF IT1.jpg', 'CLB GOLF IT', '', '', NULL, '2020-12-13 10:00:35'),
(64, '../assets/clbs/CLB GOLF KN.jpg|../assets/clbs/CLB GOLF KN1.jpg', 'KN Golf Club', '', '', NULL, '2020-12-13 10:01:04'),
(65, '../assets/clbs/z2224190530439_29d5fbe72a6c75868c364cacefad099c.jpg|../assets/clbs/CLB GOLF HÀ NỘI - SÀI GÒN.jpg|../assets/clbs/CLB GOLF HÀ NỘI - SÀI GÒN1.jpg', 'CLB GOLF HÀ NỘI - SÀI GÒN', '', '', NULL, '2020-12-13 10:01:31'),
(66, '../assets/clbs/z2224190455444_cc9d05eb5a46ad1b21af4fb09fa83db9.jpg|../assets/clbs/CLB GOLF THÀNH PHỐ BIÊN HÒA.jpg|../assets/clbs/CLB GOLF THÀNH PHỐ BIÊN HÒA1.jpg', 'CLB GOLF THÀNH PHỐ BIÊN HÒA', '', '', NULL, '2020-12-13 10:01:57'),
(67, '', 'CLB Golf Họ Nguyễn', '', '', NULL, '2020-12-13 10:02:23'),
(68, '', 'CLB Golf G&G', '', '', NULL, '2020-12-13 10:02:33'),
(69, '../assets/clbs/z2224191227083_277397a1e02538f817aab2385efe327e.jpg|../assets/clbs/CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG.jpg|../assets/clbs/CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG1.jpg', 'CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG', '', '', NULL, '2020-12-13 10:03:03'),
(70, '', 'CLB Golf FGC', '', '', NULL, '2020-12-13 10:03:23'),
(71, '../assets/clbs/CLB GOLF DOANH NHÂN 2030.jpg|../assets/clbs/CLB GOLF DOANH NHÂN 20301.jpg', 'CLB GOLF DOANH NHÂN 2030', '', '', NULL, '2020-12-13 10:03:45'),
(72, '../assets/clbs/z2224189123532_0e2361c7c1a2ed631caebb34d604e9ed.jpg|../assets/clbs/CLB GOLF BÁCH KHOA ALUMNI.jpg|../assets/clbs/CLB GOLF BÁCH KHOA ALUMNI1.jpg', 'CLB GOLF BÁCH KHOA ALUMNI', '', '', NULL, '2020-12-13 10:04:19'),
(73, '../assets/clbs/z2224189113232_711347bd766f2667bc53cd0bdc138e75.jpg|../assets/clbs/CLB GOLF HỌ NGUYỄN PHÍA NAM.jpg|../assets/clbs/CLB GOLF HỌ NGUYỄN PHÍA NAM1.jpg', 'CLB GOLF HỌ NGUYỄN PHÍA NAM', '', '', NULL, '2020-12-13 10:04:43'),
(74, '../assets/clbs/CLB GOLF PMG.jpg|../assets/clbs/CLB GOLF PMG1.jpg', 'CLB GOLF PMG', '', '', NULL, '2020-12-13 10:05:12'),
(75, '../assets/clbs/z2224190510380_7d9ad00e402ca46c6cd34d0009821fb7.jpg|../assets/clbs/CLB GOLF DANH NHÂN SÀI GÒN.jpg', 'CLB GOLF DANH NHÂN SÀI GÒN', '', '', NULL, '2020-12-13 10:05:41'),
(76, '../assets/clbs/CLB GOLF PRIENDS GOLF CLUB.jpg', 'CLB GOLF PRIENDS GOLF CLUB', '', '', NULL, '2020-12-13 10:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `position_level` varchar(200) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `birthday`, `phone`, `email`, `address`, `position_level`, `password`, `create_date`) VALUES
(24, 'vo Huyền Thien Thu', '0000-00-00', '0987959209', 'vohuyenthienthai94@gmail.com', '', '', '$2y$10$3qdQuqfz2uHXpM9dDdT4teFjNERCcIuvJYh10BqSPK/LlEi3PXP8G', '2020-12-19 09:16:48'),
(25, 'Võ Huyền Thiên Thư', '0000-00-00', '0969293136', 'vohuyenthienthu@gmail.com', '', '', '$2y$10$c2TPyEGK1zevdbJO8D5Rsew0EvJU1Axyrcn1yMevpzTroPuOHqpa.', '2020-12-19 21:01:17'),
(28, 'Nguyen Dung Tri', '0000-00-00', '076464664664', 'trind09@yahoo.com', '', '', '$2y$10$ePoxAe8Drnmx87AKzLkDa.tV8PGDXB9vu..7gGTzeqIDlEYbKr9Vu', '2020-12-23 16:48:43'),
(29, 'Vo Huyền Thiên Thai', '0000-00-00', '0987959208', '', '', '', '$2y$10$y1uKg35AoRI6GPrrqKHBauIQMidz2FLlmj09q2HK9FiIjA6VohWPa', '2021-01-01 10:12:10'),
(30, 'bb', '0000-00-00', '09789687565', '', '', '', '$2y$10$KDkhmZDmU9oYUhyTM5CRQuxHBQH0rfIZ/0mDX15E3s6sFdbVusl1a', '2021-01-04 12:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime DEFAULT current_timestamp(),
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

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title_gallery` varchar(300) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image_url` varchar(2000) DEFAULT NULL,
  `thumbnail_url` varchar(2000) DEFAULT NULL,
  `external_album_hyperlink` varchar(1000) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title_gallery`, `description`, `image_url`, `thumbnail_url`, `external_album_hyperlink`, `history`, `create_date`) VALUES
(2, 'GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CUP TASMANIA - ALBUM 1', '', '../assets/gallery/large/z2201957389029_bdaaacca5693b573a1b10ab6aa2fc280.jpg|../assets/gallery/large/z2201957401391_9ed54e51bfadc32c148ae7321bb2361d.jpg|../assets/gallery/large/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.jpg|../assets/gallery/large/z2201957414455_273a6f59fd6df6c09090a5c432271017.jpg|../assets/gallery/large/z2201957417518_8c847d233e348c48e09256f3b7ed892e.jpg|../assets/gallery/large/z2201957424484_a9af29b4e05612c05e63a408d36faa0f.jpg|../assets/gallery/large/z2201957435992_10025a99da5fcbb60164adff1b8f5a93.jpg|../assets/gallery/large/z2201957436595_92bea7185e5cff6d398b3a71e5de47f4.jpg', NULL, 'https://drive.google.com/drive/folders/1pznlvLfmi1NOdjKBXhVkFvbAyGrjYVMD', NULL, '2021-01-11 21:22:23'),
(8, 'GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CUP TASMANIA - ALBUM 2', '', '../assets/gallery/large/z2201957442519_6ad066eb4c45859743a8d8809b281acf.1610375639.jpg|../assets/gallery/large/z2201957448731_757d89cb21a9b5b3a04f5840b76291e4.1610375639.jpg|../assets/gallery/large/z2201957460101_ee46fd8de052c4d39ad226034fa41f0e.1610375640.jpg|../assets/gallery/large/z2201957463002_b1c236ce2ae09484d9c9300b0e999492.1610375640.jpg|../assets/gallery/large/z2201957467762_620f3e8fb8b8841b1071c7ff29652f07.1610375640.jpg|../assets/gallery/large/z2201957476987_9b2f8c71f95d9c9f0cfafabbbebe2a1c.1610375640.jpg|../assets/gallery/large/z2201957489212_3e683181b3aa89faf7753465354824e3.1610375640.jpg', NULL, 'https://drive.google.com/drive/folders/1pznlvLfmi1NOdjKBXhVkFvbAyGrjYVMD', 'Update by admin - 2021-01-16 15:02:49<br/>', '2021-01-11 21:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `history` varchar(5000) DEFAULT NULL,
  `create_date` datetime DEFAULT current_timestamp(),
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

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image_name` varchar(300) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `hyperlink` varchar(300) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `history` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image_name`, `title`, `description`, `content`, `hyperlink`, `author`, `create_date`, `history`) VALUES
(29, '../assets/news/images/albumgolfnewsst-gs2c4881-1606447274851-16064472773001931337640.jpg', '50 CLB tham dự giải golf tranh cúp Tasmania', 'Vào tối ngày 29/11, ban tổ chức giải Vô địch các CLB Golf tranh cúp Tasmania lần thứ hai đã tổ chức buổi họp báo với sự tham dự của đại diện CLB cùng những đơn vị tài trợ đồng hành. Theo kế hoạch, giải đấu sẽ diễn ra trong hai ngày 8-9/12 trên sân golf Tân Sơn Nhất và nằm trong chuỗi sự kiện thể thao Race To Mien Trung.', NULL, 'https://ictvietnam.vn/50-clb-tham-du-giai-golf-tranh-cup-tasmania-20201127102541564.htm', '', '2020-12-16 22:48:49', NULL),
(30, '../assets/news/images/12.jpg', 'Chuỗi sự kiện thể thao hướng về miền Trung trong tháng 12', 'Tháng 12 này sẽ diễn ra hai sự kiện thể thao đình đám là giải Vô Địch Các CLB Golf tranh Cúp Tasmania và Lễ hội đua xe thể thao lớn nhất Việt Nam được tổ chức theo chuẩn VMA. ', NULL, 'https://kinhtethitruong.vn/chuoi-su-kien-the-thao-huong-ve-mien-trung-trong-thang-12-40889.html', '', '2020-12-16 22:49:38', NULL),
(31, '../assets/news/images/race-to-mien-trung3-1123.jpg', 'Cơ hội “săn” HIO 40 tỷ tại giải vô địch các CLB Golf tranh Cúp Tasmania', '(GolfViet) – Giải Vô địch các CLB golf tranh Cúp Tasmania lần thứ 2 sẽ diễn ra vào ngày 08,09/12/2020 tại sân golf Tân Sơn Nhất.', NULL, 'https://golfviet.vn/co-hoi-san-hio-40-ty-tai-giai-vo-dich-cac-clb-golf-tranh-cup-tasmania-d5021.html', '', '2020-12-16 22:51:23', NULL),
(32, '../assets/news/images/albumgolfnewsst-gs2c4881-1606447274851-16064472773001931337640.1608134026.jpg', 'Giải Vô Địch các CLB Golf hướng về miền Trung', 'Giải vô địch các CLB Golf lần thứ 2 diễn ra ngày 8-9/12 với sự tham dự của 650 golfer đến từ nhiều tỉnh thành trong cả nước.', NULL, 'https://vietnamnet.vn/vn/the-thao/cac-mon-khac/giai-vo-dich-cac-clb-golf-huong-ve-mien-trung-693111.html', '', '2020-12-16 22:53:46', NULL),
(33, '../assets/news/images/albumgolfnewsst-gs2c4881-1606447274851-16064472773001931337640.1608134115.jpg', 'Giải vô địch golf quy mô lớn', 'Trong 2 ngày 8, 9/12, sẽ diễn ra sự kiện giải Vô địch các CLB golf phía Nam, với sự tham dự của 50 đội đến từ nhiều địa phương khác nhau.', NULL, 'https://dantri.com.vn/the-thao/giai-vo-dich-golf-quy-mo-lon-20201127225621863.htm', '', '2020-12-16 22:55:15', NULL),
(34, '../assets/news/images/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.jpg', '﻿50 CLB Golf tranh tài tại giải Giải Vô địch các CLB Cup Tasmania 2020.', 'Vào tối ngày 26/11, ban tổ chức giải Vô địch các CLB Golf tranh cúp Tasmania lần thứ hai đã tổ chức buổi họp báo với sự tham dự của đại diện CLB cùng những đơn vị tài trợ đồng hành. ', NULL, 'https://www.golfnews.vn/50-clb-golf-tranh-tai-tai-giai-giai-vo-dich-cac-clb-cup-tasmania-2020.html', '', '2020-12-16 22:56:45', NULL),
(35, '../assets/news/images/lecongbogiaigolf27112020.jpg', '﻿Hai sự kiện thể thao hướng về miền Trung trong tháng 12', 'Ngày 26.11.2020, Ban tổ chức chương trình Race to mien Trung (RTMT) đã tổ chức lễ công bố hai sự kiện thể thao lớn trong tháng 12.2020.', NULL, 'https://1thegioi.vn/hai-su-kien-the-thao-huong-ve-mien-trung-trong-thang-12-157006.html', '', '2020-12-16 22:58:11', NULL),
(36, '../assets/news/images/le-cong-vinh-chuyen-nghe-danh-golf-giai-clb-race-to-mien-trung.1608134418.jpg', 'Lê Công Vinh \'chuyển nghề\' đánh golf giải CLB ‘Race to mien Trung’', 'Cựu danh thủ bóng đá Việt Nam Lê Công Vinh cùng 649 golfer góp mặt tranh tài ở giải vô địch các CLB golf-Cúp Tasmania trong chuỗi sự kiện “Race to mien Trung”.', NULL, 'https://thanhnien.vn/the-thao/toan-canh-the-thao/le-cong-vinh-chuyen-nghe-danh-golf-giai-clb-race-to-mien-trung-125268.html', '', '2020-12-16 23:00:18', NULL),
(37, '../assets/news/images/9c-9102-1606469875.jpg', 'Lễ hội golf phong trào lớn nhất phía Nam', 'Giải vô địch các CLB golf phía Nam, với hơn 600 golfer từ 50 hội nhóm, hứa hẹn trở thành lễ hội golf phong trào lớn nhất cả nước dịp cuối năm nay.', NULL, 'https://vnexpress.net/le-hoi-golf-phong-trao-lon-nhat-phia-nam-4198193.html', '', '2020-12-16 23:01:10', NULL),
(38, '../assets/news/images/1-14545995.jpg', 'Tháng 12 diễn ra sự kiện thể thao lớn nhất năm gây quỹ từ thiện cho các tỉnh miền Trung', 'Tháng 12 này sẽ diễn ra hai sự kiện thể thao đình đám là giải Vô địch các CLB Golf tranh Cúp Tasmania và Lễ hội đua xe thể thao lớn nhất Việt Nam được tổ chức theo chuẩn VMA.', NULL, 'https://giadinhvietnam.com/thang-12-dien-ra-su-kien-the-thao-lon-nhat-nam-gay-quy-tu-thien-cho-cac-tinh-mien-trung-d164077.html?', '', '2020-12-16 23:17:02', NULL),
(39, '../assets/news/images/things-you-need-to-know-about-the-series-of-sporting.1608135489.jpg', 'Thêm tấm lòng hướng về đồng bào miền Trung', '(Thethaovanhoa.vn)- Chiều 26/11 tại TP.HCM, BTC giải vô địch Các CLB Golf tranh Cúp Tasmania và Lễ hội đua xe thể thao lớn nhất Việt Nam đã tổ chức buổi họp báo giới thiệu chương trình và chuỗi sự kiện gây quỹ ủng hộ đồng bào miền Trung bị ảnh hưởng bởi lũ lụt.', NULL, 'https://thethaovanhoa.vn/the-thao/them-tam-long-huong-ve-dong-bao-mien-trung-n20201127144503371.htm', '', '2020-12-16 23:18:09', NULL),
(40, '../assets/news/images/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.1608135673.jpg', 'Things you need to know about the series of sporting events “RACE TO MIEN TRUNG”', 'It’s the reason that “RACE TO MIEN TRUNG” (Race to Central Vietnam) was chosen to become the key message of this series of sports events, as an encouragement from the organizing committee to ignite and spread the positive values to the fan clubs and the Vietnamese in general.', NULL, 'https://vietnaminsider.vn/things-you-need-to-know-about-the-series-of-sporting-events-race-to-mien-trung/', '', '2020-12-16 23:21:13', NULL),
(41, '../assets/news/images/z2197979732016_6130c4bb28dc31416ada46221416fff7.jpg', 'Treo 40 tỷ đồng cho HIO tại giải Vô địch các CLB tranh cúp Tasmania 2020', 'Chiều nay, lễ công bố giải golf “Vô địch CLB tranh cúp Tasmania lần thứ 2” đã diễn ra với đại diện của của 50 CLB khu vực phía Nam tham gia tranh đấu trong hai ngày 8-9.12 tại sân golf Tân Sơn Nhất tới đây. Giải đấu nằm trong chuỗi sự kiện thể thao “Race to Mien Trung” cùng hoạt động Lễ Hội Đua Xe Thể Thao lần đầu tiên được tổ chức tại Việt Nam diễn ra vào ngày 12.12 tại trường đua Đại Nam.', '', 'https://vietnamgolfmagazine.net/vi/treo-40-ty-dong-cho-hio-tai-giai-vo-dich-cac-clb-tranh-cup-tasmania-2020', '', '2020-12-16 23:22:38', 'Update by admin - 2021-01-16 14:55:39<br/>');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `hyperlink` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `history` varchar(5000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `title`, `description`, `hyperlink`, `create_date`, `history`) VALUES
(6, 'Video', NULL, 'https://drive.google.com/file/d/1XKvrvgsUFJYmygSekObgCWAth2KqxPsT', '2021-01-17 14:16:07', 'Insert by admin - 2021-01-17 08:16:07<br/>Update by admin - 2021-01-17 09:47:09<br/>'),
(7, 'Kế hoạch', NULL, 'https://drive.google.com/file/d/1I06apgfMPmpAPf1-2kOZZthad7cStTvY', '2021-01-17 14:16:25', 'Insert by admin - 2021-01-17 08:16:25<br/>Update by admin - 2021-01-17 09:35:44<br/>Update by admin - 2021-01-17 09:47:01<br/>'),
(8, 'Điều lệ', NULL, 'https://drive.google.com/file/d/1TvFbxltrLv0HpMauBwz0feLk8dpHAvPt', '2021-01-17 14:16:42', 'Insert by admin - 2021-01-17 08:16:42<br/>Update by admin - 2021-01-17 09:36:02<br/>Update by admin - 2021-01-17 09:46:53<br/>');

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
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `birthday`, `country`, `create_date`) VALUES
(1, 'admin', 'golf@321!', 'trind09@yahoo.com', NULL, NULL, NULL, '2020-11-15 21:31:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `auction_product`
--
ALTER TABLE `auction_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `caulacbo`
--
ALTER TABLE `caulacbo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD KEY `id` (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auction_product`
--
ALTER TABLE `auction_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `caulacbo`
--
ALTER TABLE `caulacbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
