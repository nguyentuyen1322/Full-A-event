-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 03:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_su_kien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nha_tai_tro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loai` int(10) NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dien_ra` date DEFAULT NULL,
  `thoi_gian` time DEFAULT NULL,
  `vi_tri_ve_thuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_ve` double(8,2) DEFAULT NULL,
  `qua_tang_thuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_tri_ve_vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_ve_vip` double DEFAULT NULL,
  `qua_tang_vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_ban` datetime DEFAULT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong_ve` int(11) DEFAULT NULL,
  `hien_thi_slider` tinyint(1) DEFAULT NULL,
  `hien_thi_noi_bat` tinyint(1) DEFAULT NULL,
  `duyet` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ten_su_kien`, `nha_tai_tro`, `logo`, `id_loai`, `banner`, `ngay_dien_ra`, `thoi_gian`, `vi_tri_ve_thuong`, `gia_ve`, `qua_tang_thuong`, `vi_tri_ve_vip`, `gia_ve_vip`, `qua_tang_vip`, `dia_chi`, `ngay_ban`, `tom_tat`, `mo_ta`, `so_luong_ve`, `hien_thi_slider`, `hien_thi_noi_bat`, `duyet`) VALUES
(1, 'Sự kiện test', NULL, NULL, 1, '1.jpg', '2019-10-02', NULL, NULL, 1.00, NULL, NULL, NULL, NULL, 'Hà Nội', '0000-00-00 00:00:00', NULL, NULL, 0, 1, 1, 1),
(2, 'Sự kiện giải trí', NULL, NULL, 1, '2.jpg', '2019-10-03', NULL, NULL, 1.00, NULL, NULL, NULL, NULL, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 1, 1, 1),
(3, 'Sự kiện 1', NULL, NULL, 1, '3.jpg', '2019-10-17', NULL, NULL, 100000.00, NULL, NULL, NULL, NULL, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 1, 1, 1),
(10, 'Test nha dsasd', NULL, '42HFLmc5FU_LeeSin.png', 2, 'aeesIXC15T_LeeSin.png', '2020-02-02', '02:01:00', NULL, 1000.00, NULL, NULL, NULL, NULL, 'Ho Chi Minh City', NULL, NULL, '<p>sd</p>', 10000, 0, 0, 1),
(12, 'sadasdsad', NULL, 'LS73yPQyX2_521EC9.jpg', 1, '9MFzUQZyt1_521EC9.jpg', '2020-02-02', '01:01:00', NULL, 10000.00, NULL, NULL, NULL, NULL, 'asdasdas', '2019-02-02 14:01:00', '<p>sadasdas</p>', '<p>sadasd</p>', 10000, 0, 0, 1),
(13, 'Test nha', 'sadsad', 'hEg9dob1cS_521EC9.jpg', 1, '2Rkyz1JCbM_521EC9.jpg', '2019-02-04', '01:00:00', NULL, 10000.00, NULL, NULL, NULL, NULL, 'dsadas', '2019-01-01 00:00:00', '<p>sadsadsadsa</p>', '<p>sadasd</p>', 10000, 0, 0, 1),
(15, 'Test nha sadasdas dasdsad', 'sadsadasd', '0Fm3PR34e0_521EC9.jpg', 1, 'yNJeZ68eZ1_521EC9.jpg', '2019-02-04', '01:00:00', 'sadsadsadsad', 10000.00, 'asdsadsadsadasdas', 'dsadsadasdsa', NULL, 'dsadsadsadsadas', '350 Lê đức thọ, phường 6 , quận gò vấp', '2019-01-01 00:00:00', '<p>sadsadsadsa</p>', '<p>sadasd</p>', 10000, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `type_events` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
