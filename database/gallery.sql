-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 02:54 PM
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title_gallery` varchar(300) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image_url` varchar(2000) DEFAULT NULL,
  `thumbnail_url` varchar(2000) DEFAULT NULL,
  `external_album_hyperlink` varchar(1000) DEFAULT NULL,
  `hystory` varchar(5000) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title_gallery`, `description`, `image_url`, `thumbnail_url`, `external_album_hyperlink`, `hystory`, `create_date`) VALUES
(4, '1.	HỌP BÁO KỸ THUẬT NGÀY HỘI ĐUA XE VIETNAM RACING FESTIVAL 2020', '', '../assets/gallery/large/PHU_1797.jpg|../assets/gallery/large/PHU_2168.jpg|../assets/gallery/large/PHU_2394.jpg|../assets/gallery/large/PHU_2445.jpg|../assets/gallery/large/PHU_2669.jpg|../assets/gallery/large/PHU_2688.jpg|../assets/gallery/large/PHU_2729.jpg|../assets/gallery/large/PHU_2843.jpg', NULL, '', NULL, '2020-12-30 22:15:50'),
(5, '2.	PHÁT ĐỘNG PHONG TRÀO ĐUA XE THỂ THAO VIỆT NAM', '', '../assets/gallery/large/viber_image_2020-11-10_12-32-25.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-26.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-28.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-29.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-30.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-31.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-32.jpg|../assets/gallery/large/viber_image_2020-11-10_12-32-33.jpg', NULL, '', NULL, '2021-01-03 20:44:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
