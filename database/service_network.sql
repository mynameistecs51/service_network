-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2014 at 04:55 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_text` text NOT NULL,
  `pic_name` varchar(100) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detail_id`, `detail_text`, `pic_name`, `group_id`) VALUES
(33, 'รับติดตั้ง ระบบเครื่องข่ายแอ๊ดมิน', '2014_09_222760', 1),
(34, 'รับติดตั้งระบบเครื่อข่าย สายแลน และไร้สาย', '2014_09_223013', 2),
(35, 'รับติดตั่งระบบกล้องวงจรปิด ระบบโทรศัพท์ภายใจ ลำโพงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงง', '2014_09_228795', 3),
(37, 'network_admin', '2014_09_225998', 1),
(38, 'ขายจักรยาน', '2014_09_231830', 4);

-- --------------------------------------------------------

--
-- Table structure for table `service_group`
--

CREATE TABLE IF NOT EXISTS `service_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service_group`
--

INSERT INTO `service_group` (`group_id`, `group_name`) VALUES
(1, 'Network_admin'),
(2, 'Network'),
(3, 'CCTV'),
(4, 'Profile_ago');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
