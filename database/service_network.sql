-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.5.36
-- PHP Version: 5.4.27

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
-- โครงสร้างตาราง `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_text` text NOT NULL,
  `pic_name` varchar(100) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- dump ตาราง `detail`
--

INSERT INTO `detail` (`detail_id`, `detail_text`, `pic_name`, `group_id`) VALUES
(2, 'รับติดตั้งระบบ network_admin', '2014_09_229981', 1),
(3, 'รับติดตั้งระบบ Network', '2014_09_225445', 1),
(4, 'รับติดตั้งระบบ Network', '2014_09_229145', 2),
(5, 'รับติดตั้งระบบกล้องวงจรปิด', '2014_09_223455', 3);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `service_group`
--

CREATE TABLE IF NOT EXISTS `service_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- dump ตาราง `service_group`
--

INSERT INTO `service_group` (`group_id`, `group_name`) VALUES
(1, 'Network_admin'),
(2, 'Network'),
(3, 'CCTV'),
(4, 'Profile_ago');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
