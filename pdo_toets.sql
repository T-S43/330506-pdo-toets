-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2022 at 08:44 AM
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
-- Database: `pdo_toets`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bodemformaat` varchar(30) NOT NULL,
  `saus` varchar(30) NOT NULL,
  `pizzatopping` varchar(15) NOT NULL,
  `peterselie` int(1) DEFAULT NULL,
  `oregano` int(1) DEFAULT NULL,
  `chiliflakes` int(1) DEFAULT NULL,
  `zwartepeper` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `bodemformaat`, `saus`, `pizzatopping`, `peterselie`, `oregano`, `chiliflakes`, `zwartepeper`) VALUES
(1, '35-centimeter', 'bbq-saus', 'vegan', 1, 0, 1, 0),
(6, '40-centimeter', 'spicy-tomatensaus', 'vegatarish', 1, 1, 1, 1),
(3, '30-centimeter', 'creme-fraiche', 'vegan', 1, 1, 1, 1),
(5, '40-centimeter', 'extra-tomatensaus', 'vegatarish', 1, 1, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
