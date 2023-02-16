-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-04-28 06:59:51
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdf`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '姓名' COMMENT '跑腿人姓名',
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `born-time` varchar(255) DEFAULT NULL,
  `idcarda` varchar(255) DEFAULT NULL COMMENT '身份证正面',
  `idcardb` varchar(255) DEFAULT NULL COMMENT '身份证背面',
  `idnumber` varchar(255) DEFAULT NULL,
  `submit-time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '提交时间',
  `reputation` int(1) DEFAULT NULL,
  `charge` varchar(255) DEFAULT NULL,
  `type-introduce` varchar(100) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT '0',
  `online` int(20) DEFAULT '0',
  `sex` varchar(4) DEFAULT NULL,
  `module1` double NOT NULL DEFAULT '0' COMMENT '向量参数',
  `module2` double NOT NULL DEFAULT '0' COMMENT '向量参数'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `phone`, `born-time`, `idcarda`, `idcardb`, `idnumber`, `submit-time`, `reputation`, `charge`, `type-introduce`, `address`, `status`, `online`, `sex`, `module1`, `module2`) VALUES
(1, '姓名', '哈哈', '123456789', 15757255970, '', NULL, NULL, '', '2018-04-05 16:22:30', 0, 'AV', '没有间接的', '火星', '1', 0, '男', 0, 0),
(2, '姓名', '大傻子', '123456', 13757075766, '', NULL, NULL, '', '2018-04-05 16:22:30', 0, 'GV', '很黄很暴力', '水星', '0', 0, '', 0, 0),
(3, '姓名', '小笨蛋', '123456', 123456, '', NULL, NULL, '', '2018-04-05 16:22:30', 0, '不知道啥V', '依然没有简介', '木星', '0', 0, '', 0, 0),
(5, '姓名', 'yy', '123456', NULL, NULL, NULL, NULL, NULL, '2018-04-05 16:22:30', NULL, NULL, NULL, NULL, '0', 0, NULL, 0, 0),
(7, '姓名', '110', '110', NULL, NULL, NULL, NULL, NULL, '2018-04-05 16:22:30', NULL, NULL, NULL, NULL, '0', 0, NULL, 0, 0),
(9, '姓名', 'yh', '123456', NULL, NULL, NULL, NULL, NULL, '2018-04-05 16:22:30', NULL, NULL, NULL, NULL, '0', 0, NULL, 0, 0),
(64, '姓名', '', '', NULL, NULL, NULL, NULL, NULL, '2018-04-05 16:22:30', NULL, NULL, NULL, NULL, '0', 0, NULL, 0, 0),
(81, '姓名', 'light', '123', 18167277956, '1996.11.16', NULL, NULL, '330501199611162027', '2018-04-05 16:22:30', 5, '0', '未知', 'mars', '0', 0, '女', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
