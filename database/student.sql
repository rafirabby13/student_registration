-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2022 at 03:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `hall` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `department`, `roll`, `reg`, `session`, `hall`, `email`, `phone`) VALUES
(1, 'likhon', 'iit', '2029', '20193650289', '2018-19', 'mh', 'admin@admin.com', '01301155451'),
(5, 'rafi', 'iit', '2000', '20193650260', '2018-19', 'mh', 'admin@admin.com', '01750296501'),
(6, 'trishna', 'iit', '00001', '20193650260', '2018-19', 'mh', 'admin@admin.com', '01722079342'),
(7, 'trishna', 'iit', '00001', '20193650260', '2018-19', 'mh', 'admin@admin.com', '01722079342'),
(8, 'trishna', 'iit', '00001', '20193650260', '2018-19', 'mh', 'admin@admin.com', '01722079342'),
(9, 'sajid', 'iit', '00002', '20193650264', '2018-19', 'mh', 'admin@admin.com', '01301155451');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
