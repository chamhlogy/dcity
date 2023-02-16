-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-04-28 06:59:26
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
-- 表的结构 `bussiness`
--

CREATE TABLE `bussiness` (
  `id` int(15) NOT NULL,
  `name` varchar(255) DEFAULT '姓名' COMMENT '跑腿人姓名',
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `paypwd` varchar(255) DEFAULT NULL COMMENT '支付密码',
  `submittime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `type` int(20) DEFAULT NULL COMMENT '商家个人类别',
  `sex` varchar(20) DEFAULT NULL COMMENT '性别',
  `idcarda` varchar(255) DEFAULT NULL COMMENT '身份证正面',
  `idcardb` varchar(255) DEFAULT NULL COMMENT '身份证背面',
  `idcard` varchar(255) DEFAULT NULL COMMENT '营业执照',
  `idnumber` varchar(255) DEFAULT NULL COMMENT '身份证号',
  `type-introduce` varchar(100) DEFAULT NULL,
  `submit-time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '提交时间',
  `phone` bigint(11) DEFAULT NULL,
  `status` int(255) DEFAULT '0' COMMENT '商家审核状态',
  `online` int(20) NOT NULL DEFAULT '0' COMMENT '登陆状态',
  `address` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bussiness`
--

INSERT INTO `bussiness` (`id`, `name`, `username`, `password`, `paypwd`, `submittime`, `type`, `sex`, `idcarda`, `idcardb`, `idcard`, `idnumber`, `type-introduce`, `submit-time`, `phone`, `status`, `online`, `address`) VALUES
(1, '赵1', 'toto', '123', '123456', '2018-04-06 21:30:34', 2, '男', NULL, NULL, NULL, NULL, '卖咸鱼', '2018-04-05 16:21:20', 18563478952, 0, 0, '杭州市中国计量大学'),
(3, '钱2', 'ham', '123', '123456', '2018-04-06 21:30:34', 1, '女', NULL, NULL, NULL, NULL, '叫啊叫我就', '2018-04-05 16:21:20', 15757290489, 0, 0, '北京'),
(2, '孙3', 'chenhuan', '123', '123456', '2018-04-06 21:30:34', 1, '男', NULL, NULL, NULL, NULL, '挺好', '2018-04-05 16:21:20', 18167277956, 1, 0, '中央'),
(5, '承认', 'tom', '123', '123456', '2018-04-06 21:30:34', 2, '男', NULL, NULL, NULL, '48194949', '123', '2018-04-05 16:21:20', 18536475246, 1, 0, '123'),
(6, '周5', 'yuhe', '123', '123456', '2018-04-06 21:30:34', 1, '男', NULL, NULL, NULL, NULL, NULL, '2018-04-05 16:21:20', 18768170445, 1, 1, NULL),
(7, '吴6', 'coco', '123', '123456', '2018-04-06 21:30:34', 2, '女', NULL, NULL, NULL, NULL, NULL, '2018-04-06 20:57:10', 15236478569, 0, 0, NULL),
(1823913284, '姓名', 'php', '123', '123456', '2018-04-13 14:16:40', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-13 14:16:40', 18167277956, 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bussiness`
--
ALTER TABLE `bussiness`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bussiness`
--
ALTER TABLE `bussiness`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1823913285;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
