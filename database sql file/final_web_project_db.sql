-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2021 at 10:48 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_web_project _db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `dp` text NOT NULL,
  `storage` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cardImg` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `title`, `dp`, `storage`, `color`, `price`, `cardImg`) VALUES
(48, 'iphone 6', 'apple iphone 6', '64 GB', 'Rose', '80', 'pngfind.com-iphone-6-gold-png-5125095.png'),
(46, 'Iphone X', 'apple iphone x  a11 bionic chip ', '250 GB', 'Gray', '350', 'iphone-x-pictures-45216.png'),
(47, 'iphone 6S ', 'apple iphone 6S  a6 bionic chip ', '128 GB', 'Black', '180', 'pngfind.com-apple-phone-png-1109331.png'),
(50, 'iphone 7', 'apple iphone 7 a10 bionic chip ', '64 GB', 'Black', '180', 'pngfind.com-iphone-8-plus-png-2153191.png'),
(49, 'iphone 7 Plus', 'apple iphone 7 Plus  a10 bionic chip ', '128 GB', 'Black', '220', 'pngfind.com-iphone-8-plus-png-1290136.png'),
(51, 'Nokia luma ', 'nokia luma from microsoft ', '16GB', 'Red', '30', 'pngfind.com-windows-phone-png-3370946.png'),
(52, 'Samsung a12', 'samsung a12 2012 phone ', '250 GB', 'Blue', '60', '4.png'),
(53, 'huawei P59', 'huawei phones', '129 GB', 'Black', '59', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `time`) VALUES
(36, 'wedwedweed', 'aso@aso.aso', 'فۆنتی کوردی فۆنتی کو ردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیفۆنتی کوردیvv', '2021-09-04 19:44:02'),
(32, 'ahmad', 'sirwan@gmail.xom', 'dfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsessdfsess', '2021-09-01 12:26:43'),
(59, 'mahdi', 'sirwan@gmail.xom', 'wertykjhgfdsasdfghghjkjbhjhgfryyjchgfszdfazsdasdasdasdasdasdd', '2021-09-07 13:37:14'),
(91, 'shaho', 'asdhjuasdh@jahs.asds', 'test ', '2021-09-12 22:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(49, '', '', 'admin'),
(46, 'qwerty', '', 'admin'),
(47, 'a', 'a', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userslidercard`
--

DROP TABLE IF EXISTS `userslidercard`;
CREATE TABLE IF NOT EXISTS `userslidercard` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `userslidercard`
--

INSERT INTO `userslidercard` (`id`, `image`, `price`) VALUES
(9, '3.png', '87'),
(8, '2.png', '99'),
(7, '1.png', '80'),
(10, '6.png', '54'),
(11, 'pngfind.com-apple-phone-png-1109331.png', '123'),
(12, 'pngfind.com-iphone-8-plus-png-1290136.png', '88'),
(13, 'pngfind.com-iphone-8-plus-png-2153191.png', '98'),
(14, 'pngfind.com-windows-phone-png-3370946.png', '9');

-- --------------------------------------------------------

--
-- Table structure for table `weblogin`
--

DROP TABLE IF EXISTS `weblogin`;
CREATE TABLE IF NOT EXISTS `weblogin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `weblogin`
--

INSERT INTO `weblogin` (`id`, `email`, `password`) VALUES
(1, 'a@a.a', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
