-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023 年 04 月 14 日 15:18
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fjufreedge`
--

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `num` int(15) NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `area` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `item`
--

INSERT INTO `item` (`num`, `image`, `name`, `amount`, `area`) VALUES
(1, 'bread.jpg', '麵包/蛋糕', 10, 1),
(2, 'cup.jpg', '泡麵', 10, 1),
(3, 'foods.jpg', '便當', 10, 1),
(4, 'sweetpotato.jpg', '地瓜', 10, 1),
(5, 'vegetable.jpg', '蔬果', 10, 2),
(6, 'snack.jpg', '餅乾糖果', 10, 2),
(7, 'egg.jpg', '茶葉蛋', 10, 2),
(8, 'salad.jpg', '沙拉', 10, 2),
(9, 'icecream.jpg', '冰淇淋', 10, 2),
(10, 'milk.jpg', '乳製品', 10, 3),
(11, 'tea.jpg', '茶', 10, 3),
(12, 'juice.jpg', '果汁', 10, 3),
(13, 'pudding.jpg', '布丁果凍', 10, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `account` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`account`, `password`, `level`) VALUES
('admin', '123', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `volunteer`
--

CREATE TABLE `volunteer` (
  `name` int(10) NOT NULL,
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
