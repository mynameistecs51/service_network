-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2014 at 04:03 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `service_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
`detail_id` int(11) NOT NULL,
  `detail_text` text NOT NULL,
  `pic_name` text NOT NULL,
  `pic_type` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detail_id`, `detail_text`, `pic_name`, `pic_type`, `group_id`) VALUES
(60, 'network admin  ', '2014_10_041155.gif', 'image/gif', 1),
(62, 'cctv', '2014_10_042506.gif', 'image/gif', 3),
(83, 'test', '2014_10_09226910468643_909074712451694_3640265449689362938_n.jpg', 'image/jpeg', 2),
(84, 'test', '2014_10_0972001370826027-image-o.jpg', 'image/jpeg', 4),
(85, '555', '10277562_330018597150296_7775052259207815272_n.jpg,10468643_909074712451694_3640265449689362938_n.jpg', 'image/jpeg,image/jpeg,', 4),
(86, '1.xxxxxx xxxxxxx <br/>2. yyyyy yyyyyyy <br/>3.zzzzz zzz<br/>4.<br/>5.<br/>6. <br/>', '2014_11_069488WP_25571025_11_46_32_Pro_1.jpg', 'image/jpeg', 1),
(87, 'test', '2014_11_064973WP_20141025_015.jpg', 'image/jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_group`
--

CREATE TABLE IF NOT EXISTS `service_group` (
`group_id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service_group`
--

INSERT INTO `service_group` (`group_id`, `group_name`) VALUES
(1, 'Network_admin'),
(2, 'Network'),
(3, 'CCTV'),
(4, 'Profile_ago');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_passwd` varchar(100) NOT NULL,
  `user_status` enum('admin','user') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_passwd`, `user_status`) VALUES
(1, 'chaiwat', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
 ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `service_group`
--
ALTER TABLE `service_group`
 ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `service_group`
--
ALTER TABLE `service_group`
MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
