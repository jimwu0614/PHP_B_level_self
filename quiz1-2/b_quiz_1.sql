-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-08-15 17:56:21
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `b_quiz_1`
--

-- --------------------------------------------------------

--
-- 資料表結構 `b_quiz_1_ad`
--

CREATE TABLE `b_quiz_1_ad` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `b_quiz_1_ad`
--

INSERT INTO `b_quiz_1_ad` (`id`, `text`, `sh`) VALUES
(1, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(2, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(3, '轉知2012年全國青年水墨創作大賽活動', 1),
(4, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1),
(10, 'gfsegdsfgsdf', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `b_quiz_1_image`
--

CREATE TABLE `b_quiz_1_image` (
  `id` int(11) NOT NULL,
  `img` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `b_quiz_1_image`
--

INSERT INTO `b_quiz_1_image` (`id`, `img`, `sh`) VALUES
(1, '01D02.jpg', 1),
(2, '01D01.jpg', 1),
(4, '01D07.jpg', 1),
(6, '01D04.jpg', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `b_quiz_1_mvim`
--

CREATE TABLE `b_quiz_1_mvim` (
  `id` int(11) NOT NULL,
  `img` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `b_quiz_1_mvim`
--

INSERT INTO `b_quiz_1_mvim` (`id`, `img`, `sh`) VALUES
(1, '01C01.gif', 1),
(2, '01C02.gif', 1),
(3, '01C03.gif', 1),
(6, '01C04.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `b_quiz_1_title`
--

CREATE TABLE `b_quiz_1_title` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `b_quiz_1_title`
--

INSERT INTO `b_quiz_1_title` (`id`, `img`, `text`, `sh`) VALUES
(6, '01B01.jpg', '科技大學校園資訊系統', 0),
(7, '01B03.jpg', '科技大學校園資訊系統', 0),
(8, '01B02.jpg', '科技大學校園資訊系統', 1),
(9, '01B04.jpg', '科技大學校園資訊系統', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `b_quiz_1_ad`
--
ALTER TABLE `b_quiz_1_ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `b_quiz_1_image`
--
ALTER TABLE `b_quiz_1_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `b_quiz_1_mvim`
--
ALTER TABLE `b_quiz_1_mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `b_quiz_1_title`
--
ALTER TABLE `b_quiz_1_title`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `b_quiz_1_ad`
--
ALTER TABLE `b_quiz_1_ad`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `b_quiz_1_image`
--
ALTER TABLE `b_quiz_1_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `b_quiz_1_mvim`
--
ALTER TABLE `b_quiz_1_mvim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `b_quiz_1_title`
--
ALTER TABLE `b_quiz_1_title`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
