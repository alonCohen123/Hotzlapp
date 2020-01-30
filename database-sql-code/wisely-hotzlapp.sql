-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: דצמבר 12, 2019 בזמן 12:03 PM
-- גרסת שרת: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisely-hotzlapp`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `rating`
--

CREATE TABLE `rating` (
  `id` int(13) NOT NULL,
  `comment_id` int(13) NOT NULL,
  `rating` int(4) NOT NULL,
  `rater` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- הוצאת מידע עבור טבלה `rating`
--

INSERT INTO `rating` (`id`, `comment_id`, `rating`, `rater`) VALUES
(1, 61, 2, ''),
(2, 64, 4, ''),
(3, 57, 1, ''),
(4, 58, 5, ''),
(5, 62, 2, ''),
(6, 63, 5, ''),
(7, 61, 1, ''),
(8, 61, 1, ''),
(9, 61, 1, ''),
(10, 64, 2, 'alon'),
(11, 64, 2, 'admin'),
(12, 58, 2, 'admin'),
(13, 48, 4, 'admin'),
(14, 48, 2, 'admin'),
(15, 57, 4, 'admin'),
(16, 66, 2, 'admin'),
(17, 66, 5, 'admin'),
(18, 61, 5, 'admin'),
(19, 61, 5, 'admin'),
(20, 65, 1, 'admin'),
(21, 65, 5, 'admin'),
(22, 64, 5, 'admin'),
(23, 56, 1, 'ben'),
(24, 56, 5, 'ben'),
(25, 56, 4, 'ben'),
(26, 56, 5, 'ben'),
(27, 66, 5, 'alon'),
(28, 66, 5, 'alon'),
(29, 66, 2, 'alon'),
(30, 66, 5, 'alon'),
(31, 66, 2, 'alon'),
(32, 66, 1, 'alon'),
(33, 65, 5, 'alon'),
(34, 65, 2, 'alon'),
(35, 65, 5, 'alon'),
(36, 65, 2, 'alon'),
(37, 66, 5, 'alon'),
(38, 66, 1, 'alon'),
(39, 66, 5, 'alon'),
(40, 66, 2, 'alon'),
(41, 66, 5, 'alon'),
(42, 66, 5, 'alon'),
(43, 54, 1, 'alon'),
(44, 54, 5, 'alon'),
(45, 48, 5, 'alon'),
(46, 59, 4, 'alon'),
(47, 66, 5, 'alon'),
(48, 66, 5, 'alon'),
(49, 66, 2, 'alon'),
(50, 66, 1, 'alon'),
(51, 66, 1, 'alon'),
(52, 65, 5, 'alon'),
(53, 64, 5, 'alon'),
(54, 55, 4, 'alon'),
(55, 67, 1, 'alon'),
(56, 67, 4, 'alon'),
(57, 69, 3, 'alon'),
(58, 69, 3, 'alon'),
(59, 60, 3, 'alon'),
(60, 60, 3, 'alon'),
(61, 60, 1, 'alon'),
(62, 60, 1, 'alon'),
(63, 70, 1, 'alon'),
(64, 70, 1, 'alon'),
(65, 73, 4, 'alon'),
(66, 73, 4, 'alon'),
(67, 74, 5, 'alon'),
(68, 74, 5, 'alon'),
(69, 79, 5, 'alon'),
(70, 79, 5, 'alon'),
(71, 69, 2, 'alon'),
(72, 69, 2, 'alon'),
(73, 49, 3, 'alon'),
(74, 50, 5, 'alon'),
(75, 68, 5, 'alon'),
(76, 51, 4, 'alon'),
(77, 69, 4, 'alon'),
(78, 69, 4, 'alon'),
(79, 69, 1, 'alon'),
(80, 69, 1, 'alon'),
(81, 69, 5, 'alon'),
(82, 69, 5, 'alon'),
(83, 69, 5, 'alon'),
(84, 69, 5, 'alon'),
(85, 80, 5, 'alon'),
(86, 81, 3, 'alon'),
(87, 57, 4, 'alon'),
(88, 58, 2, 'alon'),
(89, 82, 1, 'alon'),
(90, 83, 1, 'alon'),
(91, 91, 1, 'admin'),
(92, 91, 5, 'ben'),
(93, 81, 5, 'ben'),
(94, 82, 5, 'ben'),
(95, 55, 5, 'ben'),
(96, 48, 5, 'ben'),
(97, 49, 4, 'ben'),
(98, 50, 5, 'ben'),
(99, 51, 5, 'ben'),
(100, 68, 5, 'ben'),
(101, 59, 5, 'ben'),
(102, 60, 5, 'ben'),
(103, 70, 5, 'ben');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `page` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- הוצאת מידע עבור טבלה `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `page`) VALUES
(22, 0, '1', 'alon1', '2019-11-02 18:43:51', 'ind'),
(23, 0, '3', 'alon3', '2019-11-03 16:31:00', 'ind'),
(24, 23, '3.1', 'alon3.1', '2019-11-03 16:31:15', 'ind'),
(25, 24, '3.1.1', 'alon3.1.1', '2019-11-03 16:31:30', 'ind'),
(26, 0, '2', 'alon2', '2019-11-03 16:32:21', 'ind'),
(27, 0, '1', 'r1', '2019-11-03 16:32:35', 'ind2'),
(38, 37, 'ggggg', 'alon', '2019-11-03 17:33:55', 'ind'),
(40, 39, 'gfdg', 'alon', '2019-11-03 20:33:22', 'ind'),
(45, 0, 'גשדגשד', 'ששדדשגש', '2019-11-05 11:36:59', 'ind'),
(48, 0, '1', 'alon', '2019-11-05 11:46:42', 'general'),
(49, 48, '1.1', 'alon', '2019-11-05 11:46:54', 'general'),
(50, 49, '1.1', 'alon', '2019-11-05 11:47:23', 'general'),
(51, 49, '1.1.1', 'alon', '2019-11-05 11:47:52', 'general'),
(55, 0, ' לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא  לשים לב, כי רשם ההוצאה לפועל מתפקד רעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא ', 'alon', '2019-11-05 12:22:05', 'general'),
(58, 57, 'adi 2', 'alon', '2019-11-05 13:56:43', 'general'),
(59, 0, '2nd page', 'alon', '2019-11-05 14:42:15', '2nd'),
(60, 0, '3rd page', 'alon', '2019-11-05 14:53:37', '3rd'),
(62, 58, 'adi4', 'alon', '2019-11-12 14:08:59', 'general'),
(63, 58, 'fdsfs', 'alon', '2019-11-12 14:09:08', 'general'),
(64, 61, 'g61', 'alon', '2019-11-14 08:16:34', 'general'),
(67, 55, 'fffffsss', 'admin', '2019-11-14 11:05:19', 'general'),
(68, 49, 'fdssdf', 'alon', '2019-11-14 12:50:07', 'general'),
(70, 0, '3b', 'alon', '2019-11-15 10:48:46', '3b'),
(71, 0, '4aa', 'alon', '2019-11-15 10:49:03', '4aa'),
(72, 0, '4ab', 'alon', '2019-11-15 10:49:12', '4ab'),
(73, 0, '4ba', 'alon', '2019-11-15 10:49:30', '4ba'),
(74, 0, '4bb', 'alon', '2019-11-15 10:49:39', '4bb'),
(75, 0, '4bc', 'alon', '2019-11-15 10:49:48', '4bc'),
(76, 0, '4bd', 'alon', '2019-11-15 10:49:59', '4bd'),
(77, 0, '5', 'alon', '2019-11-15 10:50:24', '5th'),
(78, 0, '6', 'alon', '2019-11-15 10:50:28', '6th'),
(79, 0, '7', 'alon', '2019-11-15 10:50:33', '7th'),
(81, 0, 'deleteeeeee', 'admin', '2019-11-21 09:29:52', 'general'),
(82, 81, 'fffff', 'admin', '2019-11-21 09:29:58', 'general'),
(84, 83, '444', 'alon', '2019-11-22 14:57:18', 'general'),
(85, 84, '44444', 'alon', '2019-11-22 14:57:21', 'general'),
(86, 85, '434324', 'alon', '2019-11-22 14:57:26', 'general'),
(87, 86, '42343242', 'alon', '2019-11-22 14:57:36', 'general'),
(91, 0, 'adddd', 'alon', '2019-11-28 08:43:41', 'general'),
(92, 0, 'hello regular user', 'ben', '2019-12-03 09:15:11', 'general');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

CREATE TABLE `users` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- הוצאת מידע עבור טבלה `users`
--

INSERT INTO `users` (`username`, `password`, `fName`, `lName`, `email`, `link`, `permission`, `pic`, `linkName`) VALUES
('Admin', '$2y$10$N8OZ52CYKFx5y3ghavbk2eZObZoJUoptHcH7o9MyR9Aywqo60.jt6', 'admin', 'admin', 'alon8877@gmail.com', '', 'admin', NULL, ''),
('alon', '$2y$10$Gbj0gLzjTtZ.uHhjAxJqfOg.Hug6ZOsZ8nwy5aaPD8JdENqVwThPa', 'fdsfsd', 'dsadas', 'alon@gmail.com', 'https://www.google.co.il/search?sxsrf=ACYBGNSy6nLcoZh9rbth3a', 'regualr', NULL, 'google me'),
('alon2', '$2y$10$eKMFjGP4cddRqI6/8JXqs.aw2rlUv5U6gX.24h8Jla5S5aoo.GqEu', 'alon', 'cohen', 'alon87@gmail.com', 'https://www.google.co.il/', 'regular', NULL, 'חפשו אותי בגוגל'),
('alon3213', '$2y$10$VT9lHeDxTcp3dVKNCsV5l.js5xtlFJ9NTCRJu0/c1ukv3Yj2CrQZG', 'fdsfsd', 'dsadas', 'alon882fdsfs77@gmail.com', '', 'specialist', NULL, ''),
('ben', '$2y$10$aL4KHSBa4d6Y9p0T4lBMJOL7Pzs.snrBPDGCNNItR6oHtRF2pC8aC', 'ben', 'ffff', 'alon8877333333@gmail.com', '', 'moderator', NULL, '');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- אינדקסים לטבלה `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
