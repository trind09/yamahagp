-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2020 at 09:01 PM
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
  `extra_column1` varchar(300) DEFAULT NULL,
  `extra_column2` varchar(300) DEFAULT NULL,
  `extra_column3` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `number`, `fullname`, `birthday`, `phone`, `email`, `club_name`, `address`, `social_link`, `sponsor_fullname`, `sponsor_phone`, `license_files`, `banktransfer_files`, `comment1`, `comment2`, `comment3`, `create_date`, `extra_column1`, `extra_column2`, `extra_column3`) VALUES
(32, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(28, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-14', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(29, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(30, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(31, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(33, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Tự do hay cá Nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(34, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-12', '0764439566', 'trind09@yahoo.com', 'Tự do - Cá nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(35, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, 'asdasdsadasdasd', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(36, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-12', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', 'abasdqwrwqesdfwerfasdfasdf', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(37, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(38, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(39, '12323646464696', 'Nguyễn Dũng Trí', '2020-11-13', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-13 00:00:00', NULL, NULL, NULL),
(40, '1535235325', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Tự do - Cá nhân', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '12323646464696', NULL, NULL, '', '', NULL, '2020-11-14 00:00:00', NULL, NULL, NULL),
(41, '0836261771', 'Nguyễn Dung Tri', '2005-08-14', '083762782736', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Hoảng hai người ', 'HTTP://www.com.com', 'Nguyễn Dung Tri ', '0973626171', NULL, NULL, '', '', NULL, '2020-11-14 00:00:00', NULL, NULL, NULL),
(42, '0926271818626', 'Nguyễn Dung Tri ', '2020-11-14', '094736267848', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Hoảng hốt chạy ', 'http://www.com.com', 'Nguyễn thị phương ', '09276262626', NULL, NULL, 'Hôm qua chị đi chơi vui không có tiền không có ', '', NULL, '2020-11-14 00:00:00', NULL, NULL, NULL),
(43, 'Uuwhah', 'Nguyễn Dung Tri ', '2020-11-14', '09288288181', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Nguyễn thị kim anh ', 'Hsjamama', 'Nânnan', 'Bâhhahahn', NULL, NULL, '', 'Sbabahaha', NULL, '2020-11-14 00:00:00', NULL, NULL, NULL),
(44, 'Hận tình yêu ', 'Nguyễn thị kim dung ', '2020-11-14', '0938373737', 'Trindpo@hdhsj.com', 'Nguyễn Dung khiêm ', 'Nguyễn thị phương ', 'Em có biết ', 'Hạ giá lấy ', '08382828', NULL, NULL, '', '', NULL, '2020-11-14 00:00:00', NULL, NULL, NULL),
(45, 'Ýhaanh', 'Nguyễn Dung Tri ', '2020-11-14', '09725252256', 'trind09@yahoo.com', 'Tự do - Cá nhân', 'Nguyễn Dung Tri ', 'Gâhhah', 'Zhshzh', 'Hahzhzh', NULL, NULL, '', '', NULL, '2020-11-14 00:00:00', NULL, NULL, NULL),
(46, '4546', 'Võ Huyền Thiên Thai', '1994-10-10', '0987959209', 'vohuyenthienthai16@gmail.com', 'Tự do - Cá nhân', 'HCM', 'https://www.facebook.com/', 'Vo Huyen Thien Thu', '987959208', NULL, NULL, '', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(47, '01', 'Võ Huyền Thiên Thai UB150', '1994-10-10', '0987959209', 'vohuyenthienthai@gmail.com', 'Tự do - Cá nhân', 'hcm', 'https://www.facebook.com/', 'Nguyễn Dũng Trí', '09876456456', NULL, NULL, '', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(48, '11', 'UB150 Pro Võ Huyền Thiên Thai ', '1994-10-10', '0987959209', 'vohuyenthienthai16@gmail.com', 'Tự do - Cá nhân', 'hcm', 'https://www.facebook.com/', 'Thiên Thư', '09545435435', NULL, NULL, '', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(49, '02', '300-400cc Võ Huyền Thiên Thai', '1994-10-10', '0987959209', 'vohuyenthienthai16@gmail.com', 'Tự do - Cá nhân', 'hcm', 'https://www.facebook.com/', 'tt', '0453254354', NULL, NULL, '', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(50, '03', 'UB150 SemiPro Võ Huyền Thiên Thai', '1994-10-10', '0987959209', 'vohuyenthienthai16@gmail.com', 'hoc mon clb', 'hcm', 'https://www.facebook.com/', 'tt', '02135-4365', NULL, NULL, '', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(51, '04', 'VINFAST AUTOGYMKHANA CUP Võ Huyền Thiên Thai', '1994-10-10', '0987959209', 'vohuyenthienthai16@gmail.com', 'hm', 'hcm', 'https://www.facebook.com/', 'tt', '09454656', NULL, NULL, '', 'fghdfdsf', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(52, '022', 'VINFAST TRACK ATTACK CUP Võ Huyền Thiên Thai', '1994-10-10', '0987959209', 'vohuyenthienthai16@gmail.com', 'Tự do - Cá nhân', 'hcm', 'https://www.facebook.com/', 'dfdf', '565655', NULL, NULL, 'rdtdrtdrx', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(53, 'Tháng 8 năm 2016, Hương Giang cho ra mắt video ca nhạc mang tên Em không hối tiếc. Hương Giang cũng ', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Năm 2012, Hương Giang đăng ký tham dự cuộc thi tìm kiếm tài năng âm nhạc Vietnam Idol mùa thứ tư, trở thành thí sinh chuyển giới đầu tiên của chương trình này.[5] Theo thể lệ, chương trình yêu cầu ứng cử viên phải có chứng minh nhân dân hoặc giấy khai sinh chứng thực mà diện mạo của cô lúc đó đã là nữ nhưng trên giấy tờ thông tin lại không trùng khớp vẫn ghi là Nguyễn Ngọc Hiếu, giới tính nam nên cô đã sử dụng chứng minh thư của chị mình là Nguyễn Hương Giang để đi thi. Từ đó, tên gọi Hương Gian', 'Tháng 10 năm 2013, Hương Giang ra mắt khán giả album đầu tay Thủy ngân. Về tựa đề album, cô cho biết: “Thủy ngân là một nguyên tố hóa học trong bảng tuần hoàn có ký hiệu là Hg. Nó trùng với hai chữ cái đầu tiên trong tên của Hương Giang, nhìn mỏng manh, nhưng ẩn sâu trong đó lại là sức tấn công mạnh mẽ và đầy bí ẩn”.[7]  Tháng 3 năm 2014, cô ra mắt tự truyện Tôi vẽ chân dung tôi, cuốn sách chia sẻ những quan điểm của Hương Giang về giới tính, cuộc sống cũng như hành trình chuyển giới của bản thâ', 'Năm 2015, Hương Giang tham gia chương trình Bước nhảy hoàn vũ (mùa 6) và lọt vào top 5 chung cuộc.[8] Cô cũng tham gia và đoạt cúp trong tập 9 mùa thứ hai của chương trình hài kịch Ơn giời cậu đây rồi!.[9]  Cũng trong năm 2015, Hương Giang còn tham gia mùa đầu tiên của chương trình \"Hoán đổi\" với tư', 'Tháng 1 năm 2018, Hương Giang tham gia Hoa hậu Chuyển giới Quốc tế. Đây là cuộc thi sắc đẹp quốc tế dành cho những người chuyển giới nữ, được tổ chức thường niên tại thành phố Pattaya, Thái Lan.[5] Kết quả, Hương Giang đã vượt qua 27 thí sinh khác để đoạt danh hiệu Hoa hậu cuộc thi Hoa hậu Chuyển gi', 'Ngày 10 tháng 11 năm 2018, Hương Giang c', NULL, NULL, '', '', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(54, '12323646464696', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', 'Năm 2012, Hương Giang đăng ký tham dự cuộc thi tìm kiếm tài năng âm nhạc Vietnam Idol mùa thứ tư, trở thành thí sinh chuyển giới đầu tiên của chương trình này.[5] Theo thể lệ, chương trình yêu cầu ứng cử viên phải có chứng minh nhân dân hoặc giấy khai sinh chứng thực mà diện mạo của cô lúc đó đã là nữ nhưng trên giấy tờ thông tin lại không trùng khớp vẫn ghi là Nguyễn Ngọc Hiếu, giới tính nam nên cô đã sử dụng chứng minh thư của chị mình là Nguyễn Hương Giang để đi thi. Từ đó, tên gọi Hương Giang được sử dụng luôn làm nghệ danh, và sau cuộc thi thì cô sử dụng nghệ danh Hương Giang Idol.[4] Kết quả chung cuộc, cô lọt vào nhóm 4 thí sinh cuối cùng, cô là thí sinh nhận được nhiều bình chọn của khán giả nhất trên trang web chính thức của cuộc thi.[6]', NULL, '2020-11-15 00:00:00', NULL, NULL, NULL),
(55, '12323646464696', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, '', '', NULL, '2020-11-15 19:45:50', NULL, NULL, NULL),
(56, '12323646464696', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, 'Ngày 31 tháng 10 năm 2019, Hương Giang ra mắt phần tiếp theo thuộc ADODDA series, một ca khúc ballad nhẹ nhàng của nhạc sĩ RIN9 mang tên Anh ta bỏ em rồi. Ở phần này chính thức có thêm sự xuất hiện của một nhân vật khách mời ngoại quốc nữa là Philip Thinroj, quán quân của The Face Men Thailand. Ca khúc đã đạt kỉ lục 100.000 lượt xem cùng lúc tại thời điểm công chiếu.\r\n\r\nNgày 4 tháng 12 năm 2019, Hương Giang chính thức công bố dự án phim điện ảnh đầu tay của mình với cái tên Sắc đẹp dối trá, bộ phim đự kiến ra mắt vào đầu năm 2020.\r\n\r\nNgày 6 tháng 2 năm 2020, Hương Giang tung phần cuối series ADODDA mang tên Tặng Anh Cho Cô Ấy với những tình tiết kịch tính không thua kém gì những sản phẩm trước đó. Tặng Anh Cho Cô Ấy là một ca khúc được Hương Giang đồng sáng tác với nhạc sĩ Hứa Kim Tuyền. Đặc biệt, còn có sự xuất hiện của Apinya Sakuljaroensuk. Chỉ sau 4 giờ đăng tải, Tặng Anh Cho Cô Ấy đã đạt top 1 trending trên YouTube với gần 2.000.000 lượt xem.', '', NULL, '2020-11-15 20:09:53', NULL, NULL, NULL),
(57, '12323646464696', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, 'Ngày 31 tháng 10 năm 2019, Hương Giang ra mắt phần tiếp theo thuộc ADODDA series, một ca khúc ballad nhẹ nhàng của nhạc sĩ RIN9 mang tên Anh ta bỏ em rồi. Ở phần này chính thức có thêm sự xuất hiện của một nhân vật khách mời ngoại quốc nữa là Philip Thinroj, quán quân của The Face Men Thailand. Ca khúc đã đạt kỉ lục 100.000 lượt xem cùng lúc tại thời điểm công chiếu.\r\n\r\nNgày 4 tháng 12 năm 2019, Hương Giang chính thức công bố dự án phim điện ảnh đầu tay của mình với cái tên Sắc đẹp dối trá, bộ phim đự kiến ra mắt vào đầu năm 2020.\r\n\r\nNgày 6 tháng 2 năm 2020, Hương Giang tung phần cuối series ADODDA mang tên Tặng Anh Cho Cô Ấy với những tình tiết kịch tính không thua kém gì những sản phẩm trước đó. Tặng Anh Cho Cô Ấy là một ca khúc được Hương Giang đồng sáng tác với nhạc sĩ Hứa Kim Tuyền. Đặc biệt, còn có sự xuất hiện của Apinya Sakuljaroensuk. Chỉ sau 4 giờ đăng tải, Tặng Anh Cho Cô Ấy đã đạt top 1 trending trên YouTube với gần 2.000.000 lượt xem.', '', NULL, '2020-11-15 20:11:53', NULL, NULL, NULL),
(58, '12323646464696', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', NULL, NULL, 'Ngày 31 tháng 10 năm 2019, Hương Giang ra mắt phần tiếp theo thuộc ADODDA series, một ca khúc ballad nhẹ nhàng của nhạc sĩ RIN9 mang tên Anh ta bỏ em rồi. Ở phần này chính thức có thêm sự xuất hiện của một nhân vật khách mời ngoại quốc nữa là Philip Thinroj, quán quân của The Face Men Thailand. Ca khúc đã đạt kỉ lục 100.000 lượt xem cùng lúc tại thời điểm công chiếu.\r\n\r\nNgày 4 tháng 12 năm 2019, Hương Giang chính thức công bố dự án phim điện ảnh đầu tay của mình với cái tên Sắc đẹp dối trá, bộ phim đự kiến ra mắt vào đầu năm 2020.\r\n\r\nNgày 6 tháng 2 năm 2020, Hương Giang tung phần cuối series ADODDA mang tên Tặng Anh Cho Cô Ấy với những tình tiết kịch tính không thua kém gì những sản phẩm trước đó. Tặng Anh Cho Cô Ấy là một ca khúc được Hương Giang đồng sáng tác với nhạc sĩ Hứa Kim Tuyền. Đặc biệt, còn có sự xuất hiện của Apinya Sakuljaroensuk. Chỉ sau 4 giờ đăng tải, Tặng Anh Cho Cô Ấy đã đạt top 1 trending trên YouTube với gần 2.000.000 lượt xem.', '', NULL, '2020-11-15 20:11:57', NULL, NULL, NULL),
(59, '12323646464696', 'Nguyễn Dũng Trí', '1980-11-02', '0764439566', 'trind09@yahoo.com', 'Câu lạc bộ abc', '40 TK20, KDC Hoàng Hải', 'http://www.google.com', 'Nguyễn Văn Bánh', '3032265656556', 'register_files/uploads/photo_trind09@yahoo.com_B_15-11-2020_13-12-33.jpg|register_files/uploads/photo_trind09@yahoo.com_VMA_15-11-2020_13-12-33.jpg', NULL, 'Ngày 31 tháng 10 năm 2019, Hương Giang ra mắt phần tiếp theo thuộc ADODDA series, một ca khúc ballad nhẹ nhàng của nhạc sĩ RIN9 mang tên Anh ta bỏ em rồi. Ở phần này chính thức có thêm sự xuất hiện của một nhân vật khách mời ngoại quốc nữa là Philip Thinroj, quán quân của The Face Men Thailand. Ca khúc đã đạt kỉ lục 100.000 lượt xem cùng lúc tại thời điểm công chiếu.\r\n\r\nNgày 4 tháng 12 năm 2019, Hương Giang chính thức công bố dự án phim điện ảnh đầu tay của mình với cái tên Sắc đẹp dối trá, bộ phim đự kiến ra mắt vào đầu năm 2020.\r\n\r\nNgày 6 tháng 2 năm 2020, Hương Giang tung phần cuối series ADODDA mang tên Tặng Anh Cho Cô Ấy với những tình tiết kịch tính không thua kém gì những sản phẩm trước đó. Tặng Anh Cho Cô Ấy là một ca khúc được Hương Giang đồng sáng tác với nhạc sĩ Hứa Kim Tuyền. Đặc biệt, còn có sự xuất hiện của Apinya Sakuljaroensuk. Chỉ sau 4 giờ đăng tải, Tặng Anh Cho Cô Ấy đã đạt top 1 trending trên YouTube với gần 2.000.000 lượt xem.', '', NULL, '2020-11-15 20:12:33', NULL, NULL, NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
