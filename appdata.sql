-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2018 at 03:30 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appdata`
--

DROP TABLE IF EXISTS `appdata`;
CREATE TABLE IF NOT EXISTS `appdata` (
  `barcode` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `color` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appdata`
--

INSERT INTO `appdata` (`barcode`, `name`, `price`, `address`, `color`, `weight`, `size`) VALUES
('11123', 'ffffffffffffffffffffff', 234, 'hhdfjdfkj', 'red', '33eee', '34444'),
('5060214370028', 'ras-bhari', 3500, '', 'green', '', ''),
('1111167889', 'mic', 150, '', 'red', '', ''),
('123', 'vopy', 0, '', '', '', ''),
('123', 'vopy', 40, '', '', '', ''),
('1111167889', 'mic', 150, '', 'red', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
