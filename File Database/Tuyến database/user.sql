-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 02:04 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_gg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dien_thoai` int(11) DEFAULT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` text COLLATE utf8mb4_unicode_ci,
  `vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_fb`, `id_gg`, `email`, `name`, `password`, `dien_thoai`, `dia_chi`, `ngay_sinh`, `gioi_tinh`, `hinh`, `vip`, `type`) VALUES
(1, NULL, NULL, 'admin1322@gmail.com', 'Admin', '$2y$10$dgqAiqknJ.RRkB.dZedD6uBjx5kNtrjX20URhoZFCEc5lsmZmtcsW', 356518444, 'Dak Nong', '2019-12-12', 'Nam', '54adc5a28fc2fc8dc939bf53c2b2ed1e_img2.jpg', 'V.I.P', '2'),
(2, '1385068081652444', NULL, NULL, 'Nguyễn Văn Tuyến', NULL, NULL, NULL, NULL, NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1385068081652444&height=50&width=50&ext=1578416111&hash=AeSruBPpDLslp6dk', NULL, '1'),
(3, NULL, '100224081791743476043', 'nguyentuyen1322@gmail.com', 'tuyen nguyen', NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AAuE7mCD0vVOoHqaaQvjBOhb9G_NFEgaLqZpZjRBQkkv', NULL, '1'),
(4, NULL, NULL, 'nhinhi1999@gmail.com', 'Nhi Nhi', '$2y$10$nw5ws29nO746mfXBY1wJGOe37E9yvgEWxYpkDa9gKzEZOSQPt3gAC', 356518444, 'TP.Hồ Chí Ming', '2019-12-26', 'Nữ', '48a80cac0bef961feb6acc5ec672693a_img.jpg', 'V.I.P', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
