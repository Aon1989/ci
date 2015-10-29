-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2015 at 09:14 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(2) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `album` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `record` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `album`, `type`, `record`) VALUES
(1, 'Body slam', 'คราม', 'Rock', 'GMM'),
(2, 'Bigbang', 'Live', 'K-pop', 'YG entertenment'),
(3, '2NE1', 'Crush', 'K-pop', 'YG entertenment'),
(4, 'เต้น นรารักษ์', 'ของหายอยากได้คืน', 'Pop', 'GMM'),
(5, 'เฟย์ ฟาง แก้ว', 'FFK', 'pop', 'RS'),
(6, 'Clash', 'One', 'Rock', 'GMM'),
(7, 'AB Normal', 'Pack 4', 'Pop-Rock', 'We Records'),
(8, ' Gear Knight', 'Battle', 'Rock', 'RS'),
(10, 'กระแต', 'Single', 'ลูกทุ่ง', 'อาร์สยาม'),
(11, 'EXO', ' love me right', 'K-pop', 'SM Entertenment');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) NOT NULL,
  `telnumber` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `network` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `money` varchar(10000) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Admin','User') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'User'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `telnumber`, `password`, `network`, `money`, `datetime`, `name`, `status`) VALUES
(1, '0954268319', 'aongd123', 'Turemove', '100', '2015-10-01 10:23:00', 'วาสนา แพงโสภา', 'Admin'),
(2, '0911826161', '1234', '12Call', '2000', '2015-10-11 06:16:00', 'วรรณิดา มาโต', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
