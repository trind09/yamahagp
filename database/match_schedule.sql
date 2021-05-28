-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 11:07 AM
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
-- Table structure for table `match_schedule`
--

CREATE TABLE `match_schedule` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `history` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `match_schedule`
--

INSERT INTO `match_schedule` (`id`, `title`, `description`, `address`, `time`, `create_date`, `history`) VALUES
(1, 'Vòng loại', '    - Vòng loại VR Autogymkhana Cup<br>\r\n							    - Vòng loại Motul Motor Gymkhana Cup<br>\r\n							    - Vòng loại Motul Motor Racing Cup UB150<br>\r\n							    - Vòng loại VR Go – Kart Cup<br>\r\n							    - Vòng chung kết VR Roller Sport Cup<br>\r\n							    - Vòng chung kết VR Drift Cup<br>', 'Trường Đua Đại Nam, Bình Dương, Xã Hiệp An, Thủ Dầu Một, Bình Dương.', '2021-05-01 08:00:00', '2021-05-23 16:36:18', 'Insert by admin - 2021-05-23 09:36:18<br/>Update by admin - 2021-05-23 09:36:34<br/>Update by admin - 2021-05-23 09:50:13<br/>Update by admin - 2021-05-23 10:12:33<br/>Update by admin - 2021-05-23 10:18:16<br/>Update by admin - 2021-05-23 10:19:04<br/>Update by admin - 2021-05-23 10:35:35<br/>Update by admin - 2021-05-23 10:36:00<br/>'),
(3, 'Vòng chung kết', '&nbsp;&nbsp;&nbsp;&nbsp;- Vòng chung kết Motul Motor Gymkhana Cup<br>\r\n							&nbsp;&nbsp;&nbsp;&nbsp;- Vòng chung kết Motul Motor Racing Cup UB150<br>\r\n							&nbsp;&nbsp;&nbsp;&nbsp;- Vòng chung kết VR AutoGymkhana Cup<br>\r\n							&nbsp;&nbsp;&nbsp;&nbsp;- Vòng chung kết VR Go – Kart Cup<br>', 'Trường Đua Đại Nam, Bình Dương, Xã Hiệp An, Thủ Dầu Một, Bình Dương.', '2021-05-02 08:00:00', '2021-05-23 15:36:46', 'Insert by admin - 2021-05-23 10:36:46<br/>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match_schedule`
--
ALTER TABLE `match_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match_schedule`
--
ALTER TABLE `match_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
