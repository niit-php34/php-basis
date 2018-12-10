-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 02:48 PM
-- Server version: 5.7.12
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_room`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`id`, `username`, `message`, `date_created`) VALUES
(1, 'Luan', 'kjouiuo', '2018-12-10 19:49:21'),
(2, 'Luan', 'uiou', '2018-12-10 19:49:23'),
(3, 'Luan', 'uiou', '2018-12-10 19:49:25'),
(4, 'Luan', 'lkdjgkldfjgkljl', '2018-12-10 19:49:34'),
(5, 'Luan', 'kljslkdfjslk', '2018-12-10 19:49:37'),
(6, 'Luan', 'hkj', '2018-12-10 19:49:40'),
(7, 'luan', 'hi', '2018-12-10 19:55:00'),
(8, 'luan', 'jkdfhkjk', '2018-12-10 19:55:03'),
(9, 'luan', 'jkdfhgdjkghk', '2018-12-10 19:55:07'),
(10, 'luan', 'kjdhfgjkdf hdjkgh k', '2018-12-10 19:55:10'),
(11, 'luan', 'hkjshf skjfh ', '2018-12-10 19:55:13'),
(12, 'luan', 'sdfjkshfkj', '2018-12-10 19:55:16'),
(13, 'luan', 'jhsdjkf hk', '2018-12-10 19:55:20'),
(14, 'luan', 'sdfskdfhkj', '2018-12-10 19:55:22'),
(15, 'Nguyen', 'jkh', '2018-12-10 19:56:11'),
(16, 'Nguyen', 'hjkh', '2018-12-10 19:56:12'),
(17, 'Nguyen', 'hjkh', '2018-12-10 19:56:13'),
(18, 'Nguyen', '', '2018-12-10 19:56:13'),
(19, 'Nguyen', 'hjkhk', '2018-12-10 19:56:15'),
(20, 'Ha ha ', 'jlk', '2018-12-10 20:42:18'),
(21, 'Ha ha ', 'jkljl', '2018-12-10 20:42:22'),
(22, 'Ha ha ', 'hi nice to meet you', '2018-12-10 20:42:32'),
(23, 'L', 'hello, i wanna to party', '2018-12-10 20:42:49'),
(24, 'Ha ha ', 'ok', '2018-12-10 20:42:53'),
(25, 'Ha ha ', 'taboo come on', '2018-12-10 20:42:57'),
(26, 'Fallen', 'Hello', '2018-12-10 20:45:47'),
(27, 'hao', 'aÄ‘Ã¡', '2018-12-10 20:46:10'),
(28, 'abc', 'halo', '2018-12-10 20:46:10'),
(29, 'hao', 'hao', '2018-12-10 20:46:17'),
(30, 'huhuh', 'hdaudaas', '2018-12-10 20:46:18'),
(31, 'magic', 'fuck', '2018-12-10 20:46:22'),
(32, 'HaLo', 'Helllo everyone', '2018-12-10 20:46:32'),
(33, 'cao cuong', 'aa', '2018-12-10 20:46:34'),
(34, 'huhuh', ':))))', '2018-12-10 20:46:35'),
(35, 'chÃ¡n Ä‘á»i', 'hi', '2018-12-10 20:46:40'),
(36, 'huhuh', '=)))))))', '2018-12-10 20:46:41'),
(37, 'HaLo', 'ahhu', '2018-12-10 20:46:43'),
(38, 'Boy ', '******************', '2018-12-10 20:46:47'),
(39, 'Boy ', '69696969696966996', '2018-12-10 20:46:53'),
(40, 'boychungtinh', 'minh la boy chung tinh', '2018-12-10 20:47:00'),
(41, 'HaLo', 'xin chao boy chung tinh :D', '2018-12-10 20:47:05'),
(42, 'boychungtinh', 'di choi di ', '2018-12-10 20:47:25'),
(43, 'nguyen thabnh', 'lam quen dejtujutjthhhhsCSCXVXVDG', '2018-12-10 20:47:25'),
(44, 'HaLo', 'di choi dau anh oi :P', '2018-12-10 20:47:35'),
(45, 'boychungtinh', 'hÃ´m nÃ o Ä‘i Äƒn láº©u Ä‘Ãª', '2018-12-10 20:47:44'),
(46, 'chÃ¡n Ä‘á»i', 'm Ä‘g ráº¥t chÃ¡n Ä‘á»i', '2018-12-10 20:47:47'),
(47, 'boychungtinh', 'chÃ¡n lÃ m gÃ¬ em', '2018-12-10 20:47:55'),
(48, 'Fallen', 'ctrl + shilf + n', '2018-12-10 20:47:58'),
(49, 'boychungtinh', 'Ä‘á»ƒ Ä‘á»i nÃ³ chÃ¡n mÃ¬nh', '2018-12-10 20:47:59'),
(50, 'Boy ', 'Xong lam nhay', '2018-12-10 20:48:00'),
(51, 'HaLo', 'chÃ¡n thÃ¬ Ä‘i báº¯t giÃ¡n Ä‘i báº¡n Æ¡i :D', '2018-12-10 20:48:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
