-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2021 at 09:30 PM
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
-- Database: `daotaome_golfandcar`
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
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title_gallery`, `description`, `image_url`, `thumbnail_url`, `external_album_hyperlink`, `hystory`, `create_date`) VALUES
(2, 'GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CUP TASMANIA - ALBUM 1', '', '../assets/gallery/large/z2201957389029_bdaaacca5693b573a1b10ab6aa2fc280.jpg|../assets/gallery/large/z2201957401391_9ed54e51bfadc32c148ae7321bb2361d.jpg|../assets/gallery/large/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.jpg|../assets/gallery/large/z2201957414455_273a6f59fd6df6c09090a5c432271017.jpg|../assets/gallery/large/z2201957417518_8c847d233e348c48e09256f3b7ed892e.jpg|../assets/gallery/large/z2201957424484_a9af29b4e05612c05e63a408d36faa0f.jpg|../assets/gallery/large/z2201957435992_10025a99da5fcbb60164adff1b8f5a93.jpg|../assets/gallery/large/z2201957436595_92bea7185e5cff6d398b3a71e5de47f4.jpg', NULL, 'https://drive.google.com/drive/folders/1pznlvLfmi1NOdjKBXhVkFvbAyGrjYVMD', NULL, '2021-01-11 21:22:23'),
(1, 'GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CUP TASMANIA - ALBUM 2', '', '../assets/gallery/large/z2201957442519_6ad066eb4c45859743a8d8809b281acf.jpg|../assets/gallery/large/z2201957448731_757d89cb21a9b5b3a04f5840b76291e4.jpg|../assets/gallery/large/z2201957460101_ee46fd8de052c4d39ad226034fa41f0e.jpg|../assets/gallery/large/z2201957463002_b1c236ce2ae09484d9c9300b0e999492.jpg|../assets/gallery/large/z2201957467762_620f3e8fb8b8841b1071c7ff29652f07.jpg|../assets/gallery/large/z2201957476987_9b2f8c71f95d9c9f0cfafabbbebe2a1c.jpg|../assets/gallery/large/z2201957489212_3e683181b3aa89faf7753465354824e3.jpg', NULL, 'https://drive.google.com/drive/folders/1pznlvLfmi1NOdjKBXhVkFvbAyGrjYVMD', NULL, '2021-01-11 21:22:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
