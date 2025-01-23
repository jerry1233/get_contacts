-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-10-13 00:01:08
-- 服务器版本： 5.6.50-log
-- PHP 版本： 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `rou001`
--
CREATE DATABASE IF NOT EXISTS `rou001` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rou001`;

-- --------------------------------------------------------

--
-- 表的结构 `app_admin`

(2, 50, 1, '61.242.131.53', '', 1665576163),
(3, 54, 1, '61.242.131.53', '12', 1665581858),
(4, 54, 1, '61.242.131.53', '11', 1665581904),
(5, 54, 1, '61.242.131.53', '10', 1665581923),
(6, 54, 1, '61.242.131.53', '9', 1665581990),
(7, 54, 1, '61.242.131.53', '8', 1665582056),
(8, 54, 1, '61.242.131.53', '7', 1665582086),
(9, 50, 1, '14.157.48.155', '', 1665587474),
(10, 70, 1, '14.157.48.155', '18', 1665587901);

-- --------------------------------------------------------

--
-- 表的结构 `app_admin_menu`
--

CREATE TABLE `app_admin_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL COMMENT '模块',
  `controller` varchar(100) NOT NULL COMMENT '控制器',
  `function` varchar(100) NOT NULL COMMENT '方法',
  `parameter` varchar(50) DEFAULT NULL COMMENT '参数',
  `description`
('agency', 1, 0, 593678, 6),
('agency', 1, 0, 182565, 7),
('agency', 1, 0, 323700, 8),
('agency', 1, 0, 407099, 9),
('agency', 1, 0, 902225, 10),
('agency', 1, 0, 271847, 11),
('agency', 1, 0, 527069, 12),
('agency', 1, 0, 618032, 13),
('agency', 1, 0, 423662, 14),
('agency', 1, 0, 217619, 15),
('agency', 1, 0, 927085, 16),
('agency', 1, 0, 550978, 17),
('agency', 1, 0, 861177, 18),
('agency', 1, 0, 981380, 19),
('agency', 1, 0, 941058, 20),
('agency', 1, 0, 900417, 21),
('agency', 1, 0, 617206, 22),
('agency', 1, 0, 577689, 23),
('agency', 1, 0, 420779, 24),
('agency', 1, 0, 689298, 25),
('agency', 1, 0, 951099, 26),
('agency', 1, 0, 132148, 27),
('agency', 1, 0, 757066, 28),
('agency', 1, 0, 398364, 29),
('agency', 1, 0, 146054, 30),
('agency', 1, 0, 454504, 55),
('agency', 1, 0, 123197, 56),
('agency', 1, 0, 603565, 57),
('agency', 1, 0, 666071, 58),
('agency', 1, 0, 872981, 59),
('agency', 1, 0, 773665, 60),
('agency', 1, 0, 230928, 61),
('agency', 1, 0, 302128, 62),
('agency', 1, 0, 497222, 63),
('agency', 1, 0, 590746, 64),
('agency', 1, 0, 670515, 65),
('agency', 1, 0, 538277, 66),
('agency', 1, 0, 348913, 67),
('agency', 1, 0, 865027, 68),
('agency', 1, 0, 587307, 69),
('agency', 1, 0, 637318, 70),
('agency', 1, 0, 415999, 71),
('agency', 1, 0, 189237, 72),
('agency', 1, 0, 433467, 73),
('agency', 1, 0, 485453, 74),
('agency', 1, 0, 566049, 75),
('agency', 1, 0, 585434, 76),
('agency', 1, 0, 373172, 77),
('agency', 1, 0, 360775, 78),
('agency', 1, 0, 936892, 79),
('agency', 1, 0, 861174, 80),
('agency', 1, 0, 633603, 81),
('agency', 1, 0, 368429, 82),
('agency', 1, 0, 254035, 83),
('agency', 1, 0, 213345, 84),
('agency', 1, 0, 334638, 86),
('agency', 1, 0, 359513, 87),
('agency', 1, 0, 649477, 88),
('agency', 1, 0, 856253, 89),
('agency', 1, 0, 842152, 90),
('agency', 1, 0, 645025, 91),
('agency', 1, 0, 871546, 92),
('agency', 1, 0, 225997, 93),
('agency', 1, 0, 427396, 94),
('agency', 1, 0, 211797, 95),
('agency', 1, 0, 826859, 96),
('agency', 1, 0, 404565, 97),
('agency', 1, 0, 436031, 98),
('agency', 1, 0, 937156, 99),
('agency', 1, 0, 132048, 100),
('agency', 1, 0, 770606, 101),
('agency', 1, 0, 153521, 102),
('agency', 1, 0, 894605, 103),
('agency', 1, 0, 974456, 104),
('agency', 1, 0, 187252, 105),
('agency', 1, 0, 677195, 106),
('agency', 1, 0, 565564, 107),
('agency', 1, 0, 426814, 108),
('agency', 1, 0, 431334, 109),
('agency', 1, 0, 952851, 110),
('agency', 1, 0, 840097, 111),
('agency', 1, 0, 831186, 112),
('agency', 1, 0, 281081, 113),
('agency', 1, 0, 737285, 114),

('agency', 1, 0, 496233, 24),
('agency', 1, 0, 506173, 25),
('agency', 1, 0, 117919, 26),
('agency', 1, 0, 663565, 27);

-- --------------------------------------------------------

--
-- 表的结构 `app_article`
--

CREATE TABLE `app_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `article_cate_id` int(11) NOT NULL,

  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `admin_id` int(11) NOT NULL COMMENT '审核者id',
  `audit_time` int(11) NOT NULL COMMENT '审核时间',
  `use` varchar(200) DEFAULT NULL COMMENT '用处',
  `download` int(11) NOT NULL DEFAULT '0' COMMENT '下载量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='附件表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `app_attachment`
--

INSERT INTO `app_attachment` (`id`, `module`, `filename`, `filepath`, `filesize`, `fileext`, `user_id`, `uploadip`, `status`, `create_time`, `admin_id`, `audit_time`, `use`, `download`) VALUES
(1, 'admin', '79811855a6c06de53047471c4ff82a36.jpg', '\\uploads\\admin\\admin_thumb\\20180104\\79811855a6c06de53047471c4ff82a36.jpg', 13781, 'jpg', 1, '127.0.0.1', 1, 1515046060, 1, 1515046060, 'admin_thumb', 0),
(2, 'admin', '72d921bc8b7d335093137d6d54932732.png', '/uploads/admin/admin_thumb/20191012/72d921bc8b7d335093137d6d54932732.png', 57424, 'png', 1, '36.63.70.180', 1, 1570885138, 1, 1570885138, 'admin_thumb', 0),
(3, 'admin', '21c212ff632e7d58bede477c3f472c98.gif', '/uploads/admin/admin_thumb/20191103/21c212ff632e7d58bede477c3f472c98.gif', 14469, 'gif', 1, '36.63.71.22', 1, 1572770251, 1, 1572770251, 'admin_thumb', 0),


INSERT INTO `app_emailconfig` (`email`, `from_email`, `from_name`, `smtp`, `username`, `password`, `title`, `content`) VALUES
('email', '', '', '', '', '', '', '');

-- 转存表中的数据 `app_urlconfig`
--

--
-- 表的索引 `app_admin_menu`
--
ALTER TABLE `app_admin_menu`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `module` (`module`) USING BTREE,
  ADD KEY `controller` (`controller`) USING BTREE,
  ADD KEY `function` (`function`) USING BTREE,
  ADD KEY `is_display` (`is_display`) USING BTREE,
  ADD KEY `type` (`type`) USING BTREE;

--
-- 表的索引 `app_appconfig`
--
ALTER TABLE `app_appconfig`
  ADD KEY `app` (`app`) USING BTREE;

--
-- 表的索引 `app_article`
--
ALTER TABLE `app_article`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `is_top` (`is_top`) USING BTREE,
  ADD KEY `article_cate_id` (`article_cate_id`) USING BTREE,
  ADD KEY `admin_id` (`admin_id`) USING BTREE,
  ADD KEY `create_time` (`create_time`) USING BTREE;

--
-- 表的索引 `app_article_cate`
--
ALTER TABLE `app_article_cate`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE;

--
-- 表的索引 `app_attachment`
--
ALTER TABLE `app_attachment`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `filename` (`filename`) USING BTREE,
  ADD KEY `create_time` (`create_time`) USING BTREE;

--
-- 表的索引 `app_content`
--
ALTER TABLE `app_content`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `app_emailconfig`
--
ALTER TABLE `app_emailconfig`
  ADD KEY `email` (`email`) USING BTREE;

--
-- 表的索引 `app_messages`
--
ALTER TABLE `app_messages`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `is_look` (`is_look`) USING BTREE,
  ADD KEY `create_time` (`create_time`) USING BTREE;

--
-- 表的索引 `app_mobile`
--
ALTER TABLE `app_mobile`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `app_smsconfig`
--
ALTER TABLE `app_smsconfig`
  ADD KEY `sms` (`sms`) USING BTREE;

--
-- 表的索引 `app_urlconfig`
--
ALTER TABLE `app_urlconfig`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE;

--
-- 表的索引 `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `app_webconfig`
--
ALTER TABLE `app_webconfig`
  ADD KEY `web` (`web`) USING BTREE;

--
-- 表的索引 `app_xiangce`
--
ALTER TABLE `app_xiangce`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `app_admin`
--
ALTER TABLE `app_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用表AUTO_INCREMENT `app_admin_cate`
--
ALTER TABLE `app_admin_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用表AUTO_INCREMENT `app_admin_log`
--
ALTER TABLE `app_admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `app_admin_menu`
--
ALTER TABLE `app_admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- 使用表AUTO_INCREMENT `app_article`
--
ALTER TABLE `app_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `app_article_cate`
--
ALTER TABLE `app_article_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `app_attachment`
--
ALTER TABLE `app_attachment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `app_content`
--
ALTER TABLE `app_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用表AUTO_INCREMENT `app_messages`
--
ALTER TABLE `app_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `app_mobile`
--
ALTER TABLE `app_mobile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- 使用表AUTO_INCREMENT `app_urlconfig`
--
ALTER TABLE `app_urlconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `app_user`
--
ALTER TABLE `app_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用表AUTO_INCREMENT `app_xiangce`
--
ALTER TABLE `app_xiangce`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
