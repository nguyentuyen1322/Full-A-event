-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 02:10 PM
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
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_event` int(10) DEFAULT NULL,
  `ten_nguoi_mua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_ve_thuong` int(10) DEFAULT NULL,
  `tong_tien_ve_thuong` float DEFAULT NULL,
  `sl_ve_vip` int(11) DEFAULT NULL,
  `tong_tien_ve_vip` float DEFAULT NULL,
  `tong_tien` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_event`, `ten_nguoi_mua`, `phone`, `email`, `sl_ve_thuong`, `tong_tien_ve_thuong`, `sl_ve_vip`, `tong_tien_ve_vip`, `tong_tien`, `created_at`, `updated_at`) VALUES
(2, NULL, 'asdasdsad', NULL, 'dasdasdsadad', 2, 0, 2, 0, 0, NULL, '2019-11-30 18:05:22'),
(10, 13, 'tuyen', 15455155, 'tuyennvps08127@fpt.edu.vn', 3, 30000, 3, 0, 30000, NULL, '2019-11-30 18:31:05'),
(11, 13, 'fdfsdf', 123456788, 'tuyennvps08127@fpt.edu.vn', 3, 30000, 4, 0, 30000, NULL, '2019-12-01 12:42:50'),
(20, 10, 'Nguyễn Tuyến', 356518433, 'tuyennvps08127@fpt.edu.vn', 3, 3000, 4, 0, 3000, NULL, '2019-12-01 16:23:55'),
(21, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-02 14:33:33'),
(22, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-02 14:34:38'),
(24, 15, 'Nguyễn Thành Huy', 388831078, 'huyntps07484@fpt.edu.vn', 2, 20000, 2, 20000, 40000, NULL, '2019-12-02 15:04:29'),
(25, 15, 'Nguyễn Thành Huy', 388831078, 'gekkohayate520@gmail.com', 4, 40000, 3, 30000, 70000, NULL, '2019-12-02 15:13:12'),
(26, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-02 15:14:30'),
(27, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-02 15:14:31'),
(28, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-02 15:17:24'),
(29, 12, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 20000, 2, 0, 20000, NULL, '2019-12-03 12:56:34'),
(30, 13, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 20000, 2, 0, 20000, NULL, '2019-12-03 13:29:24'),
(31, 13, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 20000, 2, 0, 20000, NULL, '2019-12-03 13:30:13'),
(32, 13, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 20000, 2, 0, 20000, NULL, '2019-12-03 13:31:45'),
(33, 13, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 20000, 2, 0, 20000, NULL, '2019-12-03 13:32:49'),
(36, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-03 14:33:11'),
(37, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-03 14:34:39'),
(38, 16, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 2, 2000, 2, 2000, 4000, NULL, '2019-12-03 14:36:45'),
(39, 17, 'Nguyễn Thành Huy', 388831078, 'nguyenhuyy99@Gmail.com', 3, 300000, 3, 3000000, 3300000, NULL, '2019-12-04 16:23:48'),
(40, 3, 'nguyen tuyen', 356518433, 'tuyennvps08127@fpt.edu.vn', 3, 300000, 3, 0, 300000, NULL, '2019-12-05 15:11:21'),
(41, 3, 'Hùng', 356518435, 'hoangviet.hung.009@gmail.com', 4, 400000, 3, 0, 400000, NULL, '2019-12-05 15:13:16'),
(42, 17, 'Nguyễn Tuyến', 156518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-06 16:20:11'),
(43, 17, 'Nguyễn Tuyến', 156518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-06 16:20:11'),
(44, 17, 'Nguyễn Tuyến', 156518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-06 16:22:15'),
(45, 17, 'Nguyễn Văn Tuyến', 356518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-08 17:04:03'),
(46, 17, 'Nguyễn Văn Tuyến', 356518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-08 17:07:31'),
(47, 2, 'Nguyễn Tuyến', 356518433, 'tuyennvps08127@fpt.edu.vn', 2, 2, 2, 0, 2, NULL, '2019-12-10 14:49:35'),
(48, 17, 'Tuyến Nguyễn', 356518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-10 14:50:27'),
(49, 1, 'Nguyễn Tuyến', 35651433, 'nguyentuyen1322@gmail.com', 2, 20000, 2, 40000, 60000, NULL, '2019-12-13 09:34:31'),
(50, 17, 'nguyễn tuyến', 356518433, 'tuyennvps08127@fpt.edu.vn', 2, 20000, 2, 40000, 60000, NULL, '2019-12-13 09:36:10'),
(51, 17, 'Hùng', 45651234, 'hoangviet.hung.009@gmail.com', 2, 20000, 2, 40000, 60000, NULL, '2019-12-14 13:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
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
  `tom_tat` text COLLATE utf8mb4_unicode_ci,
  `mo_ta` text COLLATE utf8mb4_unicode_ci,
  `so_luong_ve_thuong` int(11) DEFAULT NULL,
  `so_luong_ve_vip` int(11) NOT NULL,
  `hien_thi_slider` tinyint(1) DEFAULT NULL,
  `hien_thi_noi_bat` tinyint(1) DEFAULT NULL,
  `duyet` tinyint(1) DEFAULT NULL,
  `email_chu` text COLLATE utf8mb4_unicode_ci,
  `id_user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ten_su_kien`, `nha_tai_tro`, `logo`, `id_loai`, `banner`, `ngay_dien_ra`, `thoi_gian`, `vi_tri_ve_thuong`, `gia_ve`, `qua_tang_thuong`, `vi_tri_ve_vip`, `gia_ve_vip`, `qua_tang_vip`, `dia_chi`, `ngay_ban`, `tom_tat`, `mo_ta`, `so_luong_ve_thuong`, `so_luong_ve_vip`, `hien_thi_slider`, `hien_thi_noi_bat`, `duyet`, `email_chu`, `id_user`) VALUES
(1, 'Sự kiện test 3', 'biss', 'NLY7kOpijB_dt.jpg', 1, 'up5yDFwXQr_dt.jpg', '2019-10-10', '03:00:00', 'khán đài a', 10000.00, 'nón', 'áo quần', 20000, NULL, 'Hà Nội', NULL, NULL, '<p><strong><em>Triển l&atilde;m Thời trang Nguyễn C&ocirc;ng Tr&iacute; v&agrave; Nghệ thuật Đương</em></strong><strong><em>&nbsp;đại</em></strong><strong><em>&nbsp;CỤC IM LẶNG (Triển l&atilde;m CỤC IM LẶNG)</em></strong>&nbsp;trưng b&agrave;y mười bộ sưu tập của nh&agrave; thiết kế Nguyễn C&ocirc;ng Tr&iacute;, được sắp đặt v&agrave; tr&igrave;nh diễn th&ocirc;ng qua mười s&aacute;ng tạo nghệ thuật của mười nghệ sĩ trong nước v&agrave; quốc tế, đặt trong mười kh&ocirc;ng gian đậm t&iacute;nh nguy&ecirc;n bản. Triển l&atilde;m được tổ chức trong ba ng&agrave;y từ 27 đến 29 th&aacute;ng 12 tại&nbsp;<em>Trung t&acirc;m Triển l&atilde;m v&agrave; Hội nghị S&agrave;i G&ograve;n (SECC).</em></p>\r\n\r\n<p><strong><em>Triển l&atilde;m&nbsp;</em></strong><strong><em>CỤC IM LẶNG</em></strong>&nbsp;mang đến mười điểm chạm kh&aacute;c lạ trong c&aacute;c t&aacute;c phẩm của Nguyễn C&ocirc;ng Tr&iacute;. H&agrave;nh tr&igrave;nh hai thập kỉ đắm m&igrave;nh trong thế giới lụa l&agrave; của anh được thể hiện qua mười g&oacute;c nh&igrave;n đương đại. &Yacute; niệm về mối li&ecirc;n kết giữa thời trang v&agrave; nghệ thuật khi n&agrave;y được đẩy đến tận c&ugrave;ng, đem đến giới mộ điệu một trải nghiệm mang đậm tinh thần duy mĩ.</p>\r\n\r\n<p><strong><em>Triển l&atilde;m CỤC IM LẶNG</em></strong>&nbsp;mở cửa cho kh&aacute;ch mua v&eacute; tham quan theo c&aacute;c ng&agrave;y cố định, bắt đầu từ 27/12.&nbsp;Trong khu&ocirc;n khổ&nbsp;<strong><em>Triển l&atilde;m</em></strong>, v&agrave;o ng&agrave;y 29/12, ban tổ chức thực hiện Talkshow giữa C&ocirc;ng Tr&iacute; c&ugrave;ng c&aacute;c nh&acirc;n vật c&oacute; tầm ảnh hưởng trong giới nghệ thuật. Họ sẽ c&ugrave;ng nhau tr&ograve; chuyện về c&aacute;c l&aacute;t cắt trong ng&agrave;nh v&agrave; những chi&ecirc;m nghiệm đ&uacute;c kết từ cuộc h&agrave;nh tr&igrave;nh duy mĩ c&ugrave;ng gấm nhung.</p>', 98, 98, 1, 1, 1, NULL, ''),
(2, 'Sự kiện giải trí', NULL, NULL, 1, '2.jpg', '2019-10-03', NULL, NULL, 1.00, NULL, NULL, NULL, NULL, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 98, -2, 1, 1, 1, NULL, ''),
(3, 'Sự kiện 1', NULL, NULL, 1, '3.jpg', '2019-10-17', NULL, NULL, 100000.00, NULL, NULL, NULL, NULL, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 0, 1, 1, 1, NULL, ''),
(15, 'Test nha sadasdas dasdsad', 'sadsadasd', '0Fm3PR34e0_521EC9.jpg', 1, 'yNJeZ68eZ1_521EC9.jpg', '2019-02-04', '01:00:00', 'sadsadsadsad', 10000.00, 'asdsadsadsadasdas', 'dsadsadasdsa', 10000, 'dsadsadsadsadas', '350 Lê đức thọ, phường 6 , quận gò vấp', '2019-01-01 00:00:00', '<p>sadsadsadsa</p>', '<p>sadasd</p>', 10000, 0, 0, 0, 1, 'nguyenhuyy99@gmail.com', ''),
(17, 'sự kiện vũ trụ', 'nguyễn tuyến', 'yqJCEj2MBi_1.jpg', 2, 'g6hUKpXrZV_2.jpg', '2019-12-11', '02:01:00', 'khán đài b', 10000.00, 'nón phù thủy nè', 'khán đài a', 20000, 'nón phù thủy nè', 'quận gò vấp tp hcm', '2019-12-05 00:00:00', '<p>sự kiện h&ograve;a đồng vui vẻ</p>', '<p>sự kiện h&ograve;a đồng vui vẻ</p>', 984, 984, 0, 0, 1, 'nguyentuyen1322@gmail.com', ''),
(18, 'Vở Múa: ĐA THỨC | METHOD: Dance Theater', 'H2Q ART CO', '7DAIZKNxjc_Capture.PNG', 2, 'M4OnLEdw2o_0ECB34.jpg', '2019-12-20', '07:00:00', 'Sảnh A', 100000.00, 'Nón', 'Sảnh VIP', 200000, 'Nón + Áo', '140 Cộng Hòa, Phường 4, Quận Tân Bình, Thành Phố Hồ Chí Minh', '2019-12-17 00:00:00', '<p>Mỗi vũ c&ocirc;ng c&oacute; một phương thức chuyển động v&agrave; nhịp điệu ri&ecirc;ng. Hội tụ ở Đa Thức, họ c&ugrave;ng t&igrave;m ra một phương thức chuyển động chung.</p>', '<p>(𝑬𝒏𝒈𝒍𝒊𝒔𝒉 𝒃𝒆𝒍𝒐𝒘)<br />\r\n<br />\r\nMỗi vũ c&ocirc;ng c&oacute; một phương thức chuyển động v&agrave; nhịp điệu ri&ecirc;ng. Hội tụ ở Đa Thức, họ c&ugrave;ng t&igrave;m ra một phương thức chuyển động chung.<br />\r\n<br />\r\nĐ&acirc;y l&agrave; một chương tr&igrave;nh biểu diễn m&uacute;a đương đại sản xuất lần đầu ti&ecirc;n bởi H2Q ART, dưới b&agrave;n tay của bi&ecirc;n đạo m&uacute;a nổi tiếng ROSS MCCORMACK (Muscle Mouth, New Zealand) c&ugrave;ng sự g&oacute;p mặt của 6 vũ c&ocirc;ng Việt Nam t&agrave;i năng đến từ những nền tảng chuyển động ho&agrave;n to&agrave;n kh&aacute;c nhau như Ballet, Đương Đại, Hip-Hop, Popping,..: VŨ NGỌC KHẢI, NGUYỄN DUY TH&Agrave;NH, L&Acirc;M DUY PHƯƠNG (KIM), NGUYỄN QUANG TƯ, NGUYỄN THẠCH SANG, L&Acirc;M TỐ NHƯ!<br />\r\n<br />\r\nHạt nh&acirc;n của ĐA THỨC l&agrave; cơ thể - yếu tố được bi&ecirc;n đạo m&uacute;a khai th&aacute;c triệt để, xếp đặt v&agrave;o v&ocirc; số kh&ocirc;ng gian v&agrave; c&acirc;u chuyện c&ugrave;ng l&uacute;c chồng ch&eacute;o l&ecirc;n nhau.<br />\r\n<br />\r\nSử dụng những [c&acirc;y trượng gỗ 5m] như một c&ocirc;ng cụ tế tụng, chia cắt kh&ocirc;ng gian, c&aacute;c vũ c&ocirc;ng phải li&ecirc;n tục điều khiển, k&eacute;o, đẩy lẫn nhau để t&igrave;m những kết nối vật l&yacute;, giải m&atilde; b&agrave;i to&aacute;n gi&agrave;nh quyền chế ngự ngay tr&ecirc;n s&acirc;n khấu. Những c&acirc;y trượng l&agrave; t&ocirc;-tem (vật tổ), l&agrave; ham muốn, l&agrave; phương thức giao tiếp của họ! Nghệ sĩ hiện diện trong vở m&uacute;a như những vị thần hộ ph&aacute;p hay người dịch chuyển kh&ocirc;ng gian.<br />\r\n<br />\r\nC&ugrave;ng sự xuất hiện của những [tảng đ&aacute; tự nhi&ecirc;n] v&agrave; những chiếc [ghế nhựa đỏ] v&agrave; &acirc;m hưởng nhạc d&acirc;n tộc Việt Nam được nhạc sĩ Jason Wright thu &acirc;m trực tiếp tại Đak Lak, vở m&uacute;a thể hiện quan s&aacute;t v&agrave; cảm nhận độc đ&aacute;o về kh&ocirc;ng gian, con người v&agrave; nhịp điệu nơi đ&acirc;y của bi&ecirc;n đạo người New Zealand.<br />\r\n<br />\r\nHơn cả một vở m&uacute;a đương đại, Đa Thức l&agrave; một t&aacute;c phẩm s&acirc;n khấu chuyển động đầy bất ngờ với phong c&aacute;ch bi&ecirc;n đạo c&oacute; một kh&ocirc;ng hai, v&agrave; rất bản năng.<br />\r\n<br />\r\nC&aacute;m ơn sự hỗ trợ h&agrave;o ph&oacute;ng của ADORA DANCE GROUP v&agrave; YVU (Phục trang)<br />\r\n<br />\r\nĐối t&aacute;c truyền th&ocirc;ng:&nbsp;Hanoi Grapevine,&nbsp;Cổ Động,&nbsp;Saigoneer,&nbsp;Y&ecirc;u M&uacute;a,&nbsp;Đ&agrave;i Ph&aacute;t Thanh..<br />\r\n<br />\r\n►►TH&Ocirc;NG TIN VỞ DIỄN:<br />\r\nThời gian: 20:00 - 22:00 ng&agrave;y 20 v&agrave; 21 th&aacute;ng 12 năm 2019.<br />\r\nĐịa điểm: Nh&agrave; h&aacute;t Qu&acirc;n Đội khu vực ph&iacute;a Nam - 140 Cộng H&ograve;a, Phường 15, T&acirc;n B&igrave;nh, Hồ Ch&iacute; Minh.<br />\r\n🔥 Xem video về vở diễn tại đ&acirc;y:&nbsp;http://bit.ly/35YelDz<br />\r\n<br />\r\n_____________________________________________<br />\r\nEach dancer has their own methodology of movement. Together, they create one kind of method!<br />\r\n<br />\r\nBodies are the core of METHOD - the elements that the choreographer exploits radically and puts in various layers of space and stories.<br />\r\n<br />\r\nIt&#39;s a contemporary dance performance produced by H2Q ART under the hand of magical choreographer ROSS MCCORMACK (Muscle Mouth, New Zealand) featuring 6 talented Vietnamese dancers coming from different movement background such as Ballet, Đương đại, Hip-Hop, Popping,...They are: VŨ NGỌC KHẢI, NGUYỄN DUY TH&Agrave;NH, L&Acirc;M DUY PHƯƠNG (KIM), L&Acirc;M TỐ NHƯ, NGUYỄN QUANG TƯ, NGUYỄN THẠCH SANG.<br />\r\n<br />\r\nPlaying with [5m huge spears] as a tool to worship and divide the space, the dancers constantly manipulate, push, and drag one another in a physical search for connection. These huge poles create a mathematical language that the dancers fight for authority over. They are their totems, their extensions of desire and their methods to one another. The dancers will appear to us as protectors or, shifters!<br />\r\n<br />\r\nBeside that, the appearance of [natural rocks] and the [red chairs] - a significant item of Vietnam street life as well as sounds of instruments recorded in the highland area of Vietnam will show New Zealand choreographer&rsquo;s observation on Vietnamese space, human and rhythm.<br />\r\n<br />\r\nMore than just a contemporary dance show, METHOD will be an unpredictable movement theater, due to a very weird, unique and visceral choreography style.<br />\r\n<br />\r\nThanks to our generous supporters: ADORA DANCE GROUP and YVU (Costume).<br />\r\n<br />\r\nMedia Partners:&nbsp;Hanoi Grapevine,&nbsp;Cổ Động,&nbsp;Saigoneer,&nbsp;Y&ecirc;u M&uacute;a,&nbsp;Đ&agrave;i Ph&aacute;t Thanh..<br />\r\n<br />\r\n►►𝐄𝐕𝐄𝐍𝐓 𝐃𝐄𝐓𝐀𝐈𝐋𝐒:<br />\r\nTime: 20:00 - 22:00 December 20 &amp; 21, 2019.<br />\r\nLocation: The Army Theater- 140 Cong Hoa, Ward 15, Tan Binh, Ho Chi Minh City, Vietnam.<br />\r\n🔥Watch videos about the show here:&nbsp;http://bit.ly/35YelDz</p>', 98, 48, 1, 1, 1, 'nguyenhuyy99@Gmail.com', ''),
(19, 'Test nha', 'TESTTSDASsadasdasdsa', 'CZJmsgjii7_Capture.PNG', 3, 'koXcQPMTm7_894941.jpg', '2019-12-10', '03:00:00', 'Sảnh A', 10000.00, 'Nón', 'Sảnh VIP', 20000, NULL, 'Ho Chi Minh City', NULL, NULL, '<p>sadsadsa</p>', 100, 100, 0, 1, 1, NULL, ''),
(20, 'Test gửi mail', 'sadsadasd', 'd0RUKKngJz_Capture.PNG', 3, 'QGljnq3QJr_521EC9.jpg', '2019-12-04', '02:00:00', 'Sảnh A', 100000.00, 'Nón', 'TESTTSDASsadasdasdsa', 200000, 'sdsda', 'Ha Noi', '2019-12-10 00:00:00', '<p>sadasd</p>', '<p>sadsadas</p>', 1000, 1000, 1, 1, 1, 'nguyenhuyy99@Gmail.com', ''),
(21, 'huy test mail', 'sadsad', 'Y8nxl3GhFG_521EC9.jpg', 3, 'p2d0Wbjz8q_Capture.PNG', '2019-12-19', '02:00:00', 'TESTTSDASsadasdasdsa', 100000.00, 'asdsadsadsadasdas', 'dsadsadasdsa', 1000000, NULL, 'Ho Chi Minh City', NULL, NULL, '<p>sadsadasdsad</p>', 100, 100, 0, 0, 1, 'nguyenhuyy99@Gmail.com', ''),
(22, 'test duyet 2', 'sadasdsadsadasd', 'Dz1Y3plGV9_521EC9.jpg', 1, 'Y8a69HdroE_0ECB34.jpg', '2019-12-11', '03:00:00', 'sadsadsadsad', 100000.00, 'dasdassadsadsa', 'asdsadsasdasdsadsads', 100000, 'sadasdsaasdasdsadsa', 'HCM', '2019-12-04 00:00:00', '<p>asdasdsa</p>', '<p>sadsad</p>', 100, 100, 1, 1, 1, 'huyntps07484@fpt.edu.vn', ''),
(25, 'Sự kiện lol', 'kingkong', 'TpL81gPlYp_po.jpg', 2, 'YMSMCvaRMH_dt.jpg', '2019-12-14', '14:00:00', 'khán đài a', 10000.00, 'nón', 'nón quần', 20000, NULL, 'Sảnh Triển Lãm A1 - Trung tâm Triển lãm và Hội nghị Sài Gòn (SECC) 799 Nguyễn Văn Linh, Quận 7, Thành Phố Hồ Chí Minh', NULL, '<p><strong><em>Triển l&atilde;m Thời trang Nguyễn C&ocirc;ng Tr&iacute; v&agrave; Nghệ thuật Đương</em></strong><strong><em>&nbsp;đại</em></strong><strong><em>&nbsp;CỤC IM LẶNG (Triển l&atilde;m CỤC IM LẶNG)</em></strong>&nbsp;trưng b&agrave;y mười bộ sưu tập của nh&agrave; thiết kế Nguyễn C&ocirc;ng Tr&iacute;, được sắp đặt v&agrave; tr&igrave;nh diễn th&ocirc;ng qua mười s&aacute;ng tạo nghệ thuật của mười nghệ sĩ trong nước v&agrave; quốc tế, đặt trong mười kh&ocirc;ng gian đậm t&iacute;nh nguy&ecirc;n bản. Triển l&atilde;m được tổ chức trong ba ng&agrave;y từ 27 đến 29 th&aacute;ng 12 tại&nbsp;<em>Trung t&acirc;m Triển l&atilde;m v&agrave; Hội nghị S&agrave;i G&ograve;n (SECC).</em></p>\r\n\r\n<p><strong><em>Triển l&atilde;m&nbsp;</em></strong><strong><em>CỤC IM LẶNG</em></strong>&nbsp;mang đến mười điểm chạm kh&aacute;c lạ trong c&aacute;c t&aacute;c phẩm của Nguyễn C&ocirc;ng Tr&iacute;. H&agrave;nh tr&igrave;nh hai thập kỉ đắm m&igrave;nh trong thế giới lụa l&agrave; của anh được thể hiện qua mười g&oacute;c nh&igrave;n đương đại. &Yacute; niệm về mối li&ecirc;n kết giữa thời trang v&agrave; nghệ thuật khi n&agrave;y được đẩy đến tận c&ugrave;ng, đem đến giới mộ điệu một trải nghiệm mang đậm tinh thần duy mĩ.</p>\r\n\r\n<p><strong><em>Triển l&atilde;m CỤC IM LẶNG</em></strong>&nbsp;mở cửa cho kh&aacute;ch mua v&eacute; tham quan theo c&aacute;c ng&agrave;y cố định, bắt đầu từ 27/12.&nbsp;Trong khu&ocirc;n khổ&nbsp;<strong><em>Triển l&atilde;m</em></strong>, v&agrave;o ng&agrave;y 29/12, ban tổ chức thực hiện Talkshow giữa C&ocirc;ng Tr&iacute; c&ugrave;ng c&aacute;c nh&acirc;n vật c&oacute; tầm ảnh hưởng trong giới nghệ thuật. Họ sẽ c&ugrave;ng nhau tr&ograve; chuyện về c&aacute;c l&aacute;t cắt trong ng&agrave;nh v&agrave; những chi&ecirc;m nghiệm đ&uacute;c kết từ cuộc h&agrave;nh tr&igrave;nh duy mĩ c&ugrave;ng gấm nhung.</p>', '<p><strong><em>Triển l&atilde;m Thời trang Nguyễn C&ocirc;ng Tr&iacute; v&agrave; Nghệ thuật Đương</em></strong><strong><em>&nbsp;đại</em></strong><strong><em>&nbsp;CỤC IM LẶNG (Triển l&atilde;m CỤC IM LẶNG)</em></strong>&nbsp;trưng b&agrave;y mười bộ sưu tập của nh&agrave; thiết kế Nguyễn C&ocirc;ng Tr&iacute;, được sắp đặt v&agrave; tr&igrave;nh diễn th&ocirc;ng qua mười s&aacute;ng tạo nghệ thuật của mười nghệ sĩ trong nước v&agrave; quốc tế, đặt trong mười kh&ocirc;ng gian đậm t&iacute;nh nguy&ecirc;n bản. Triển l&atilde;m được tổ chức trong ba ng&agrave;y từ 27 đến 29 th&aacute;ng 12 tại&nbsp;<em>Trung t&acirc;m Triển l&atilde;m v&agrave; Hội nghị S&agrave;i G&ograve;n (SECC).</em></p>\r\n\r\n<p><strong><em>Triển l&atilde;m&nbsp;</em></strong><strong><em>CỤC IM LẶNG</em></strong>&nbsp;mang đến mười điểm chạm kh&aacute;c lạ trong c&aacute;c t&aacute;c phẩm của Nguyễn C&ocirc;ng Tr&iacute;. H&agrave;nh tr&igrave;nh hai thập kỉ đắm m&igrave;nh trong thế giới lụa l&agrave; của anh được thể hiện qua mười g&oacute;c nh&igrave;n đương đại. &Yacute; niệm về mối li&ecirc;n kết giữa thời trang v&agrave; nghệ thuật khi n&agrave;y được đẩy đến tận c&ugrave;ng, đem đến giới mộ điệu một trải nghiệm mang đậm tinh thần duy mĩ.</p>\r\n\r\n<p><strong><em>Triển l&atilde;m CỤC IM LẶNG</em></strong>&nbsp;mở cửa cho kh&aacute;ch mua v&eacute; tham quan theo c&aacute;c ng&agrave;y cố định, bắt đầu từ 27/12.&nbsp;Trong khu&ocirc;n khổ&nbsp;<strong><em>Triển l&atilde;m</em></strong>, v&agrave;o ng&agrave;y 29/12, ban tổ chức thực hiện Talkshow giữa C&ocirc;ng Tr&iacute; c&ugrave;ng c&aacute;c nh&acirc;n vật c&oacute; tầm ảnh hưởng trong giới nghệ thuật. Họ sẽ c&ugrave;ng nhau tr&ograve; chuyện về c&aacute;c l&aacute;t cắt trong ng&agrave;nh v&agrave; những chi&ecirc;m nghiệm đ&uacute;c kết từ cuộc h&agrave;nh tr&igrave;nh duy mĩ c&ugrave;ng gấm nhung.</p>', 100, 100, 0, 0, 1, 'admin1322@gmail.com', ''),
(26, 'Sự Kiện Thành Phố 1', 'Nguyễn Tuyến', 'QUhVZ3MuT7_po.jpg', 1, 'TaqiQrEV5U_po.jpg', '2019-12-13', '14:00:00', 'khán đài a', 10000.00, 'nón', 'áo + quần', 20000, NULL, '29 Nguyen Ba Lan, Quận 2, Thành Phố Hồ Chí Minh', NULL, NULL, '<p>Salon Saigon is a refined and hidden-away space dedicated to contemporary creation and Vietnamese culture.<br />\r\nIt is located in a two-floor historical house (belonging to US Ambassador Henry Cabot Lodge Jr and his family, during their stay in Saigon from 1963 to 1967) in downtown Ho Chi Minh City.<br />\r\nSalon Saigon&rsquo;s name and concept refers to the Salons (gatherings) that flourished in France throughout the 17th and 18th centuries.<br />\r\nIts main function is the presentation of contemporary creation and Vietnamese culture through art exhibitions, performances, conferences, screenings, educational programs, and a unique collection of tri-lingual resources available at the library.<br />\r\nThe Permanent Collection:<br />\r\nSalon Saigon permanent collection is displayed on the 2 floors and comprises art pieces by acclaimed contemporary Vietnamese artists such as Dinh Q. Le, The Propeller Group, Tiffany Chung, Oanh Phi Phi,Bui Cong Khanh, Nguyen Manh Hung, Truong Tan, Hoang Duong Cam while aiming to promote Vietnamese emerging artists as well.<br />\r\nThe collection focuses on how artists put in perspective Vietnamese tradition and heritage with current issues.</p>', 100, 100, 0, 0, 1, 'kingkong1322@gmail.com', '5');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images_event`
--

CREATE TABLE `images_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `duong_dan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaievent`
--

CREATE TABLE `loaievent` (
  `id` int(10) NOT NULL,
  `ten_loai_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaievent`
--

INSERT INTO `loaievent` (`id`, `ten_loai_event`, `danh_muc`, `created_at`, `updated_at`) VALUES
(1, 'Văn hóa nghệ thuật', 1, '2019-12-08 14:48:37', '2019-12-08 14:56:54'),
(2, 'Sân khấu', 1, '2019-12-08 14:50:55', '2019-12-08 14:50:55'),
(3, 'Nightlife', 1, '2019-12-08 14:51:06', '2019-12-08 14:51:06'),
(4, 'Ngoài trời', 1, '2019-12-08 14:51:11', '2019-12-08 14:51:11'),
(5, 'Hội thảo', 2, '2019-12-08 14:51:19', '2019-12-08 14:51:19'),
(6, 'Khóa học', 2, '2019-12-08 14:51:26', '2019-12-08 14:51:26'),
(7, 'Hội chợ', 3, '2019-12-08 14:51:33', '2019-12-08 14:51:33'),
(8, 'Hội họp', 3, '2019-12-08 14:51:45', '2019-12-08 14:51:45'),
(9, 'Thể thao', 3, '2019-12-08 14:51:54', '2019-12-08 14:51:54'),
(10, 'Cộng đồng', 3, '2019-12-08 14:52:01', '2019-12-08 14:52:01'),
(11, 'Vui chơi giải trí', 3, '2019-12-08 14:52:09', '2019-12-08 14:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(10) NOT NULL,
  `ten_loai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `ten_loai`, `created_at`, `updated_at`) VALUES
(1, 'GIẢI TRÍ', '2019-12-04 16:12:57', '2019-12-04 16:12:57'),
(2, 'HỌC HỎI', '2019-12-04 16:13:34', '2019-12-04 16:13:34'),
(3, 'CÁC LĨNH VỰC KHÁC', '2019-12-04 16:13:38', '2019-12-04 16:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_10_19_135957_slider', 2),
(8, '2019_10_20_235835_user', 3),
(9, '2019_10_21_213909_events', 3),
(10, '2019_10_21_214921_type_events', 4),
(13, '2019_10_23_232741_shortlink', 7),
(14, '2019_10_24_234232_admin', 8),
(21, '2019_10_21_215139_images_event', 9),
(22, '2019_10_21_215741_news', 9),
(23, '2019_11_02_215354_create_social_accounts_table', 10),
(24, '2019_11_17_145525_create_seenmail', 11),
(25, '2019_11_26_205701_bills', 11),
(26, '2019_12_04_224547_loaitin', 12),
(27, '2019_12_04_224657_tintuc', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `short_links`
--

CREATE TABLE `short_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `loai_tin` int(11) NOT NULL,
  `tieu_de` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_bat` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `loai_tin`, `tieu_de`, `banner`, `noi_dung`, `noi_bat`, `created_at`, `updated_at`) VALUES
(2, 1, 'Test tin', 'Ejc9UdJGnK_Capture.PNG', '<p>asdsadas</p>', 1, '2019-12-05 03:35:34', '2019-12-05 14:24:21'),
(3, 2, 'Test', 'IYbTxBIKru_521EC9.jpg', '<p>sadsadasdsadasd</p>', 1, '2019-12-05 14:31:59', '2019-12-05 14:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `type_events`
--

CREATE TABLE `type_events` (
  `id` int(10) NOT NULL,
  `ten_loai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_events`
--

INSERT INTO `type_events` (`id`, `ten_loai`, `created_at`, `updated_at`) VALUES
(1, 'Giải trí', NULL, NULL),
(2, 'Kiến thức', NULL, NULL),
(3, 'Sự kiện khác', '2019-10-28 15:19:00', '2019-10-28 15:19:00');

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
(4, '598589057555027', NULL, NULL, 'Nguyễn Văn Tuyến', NULL, NULL, NULL, NULL, NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=598589057555027&height=50&width=50&ext=1578838723&hash=AeSrFqXpUB4WL7cE', NULL, '1'),
(5, NULL, NULL, 'kingkong1322@gmail.com', 'King Khong', '$2y$10$9jpFHPG7F6QEltPJfYAiIOiyNMEDExzLFVFFY/4a/N8S2mui.Xr5S', 356518433, 'TP.Hồ Chí Minh', '2019-12-11', 'Nam', 'e8e56950c0e04e24395991d778bd4d8f_2.jpg', 'Normal', '1'),
(6, '1417148578444394', NULL, NULL, 'Nguyễn Văn Tuyến', NULL, NULL, NULL, NULL, NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1417148578444394&height=50&width=50&ext=1578841600&hash=AeRDvvwG6Qg6YZz5', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_event`
--
ALTER TABLE `images_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaievent`
--
ALTER TABLE `loaievent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_event` (`danh_muc`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `short_links`
--
ALTER TABLE `short_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tintuc` (`loai_tin`);

--
-- Indexes for table `type_events`
--
ALTER TABLE `type_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images_event`
--
ALTER TABLE `images_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaievent`
--
ALTER TABLE `loaievent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `short_links`
--
ALTER TABLE `short_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_events`
--
ALTER TABLE `type_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `type_events` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `loaievent`
--
ALTER TABLE `loaievent`
  ADD CONSTRAINT `loai_event` FOREIGN KEY (`danh_muc`) REFERENCES `type_events` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc` FOREIGN KEY (`loai_tin`) REFERENCES `loaitin` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
