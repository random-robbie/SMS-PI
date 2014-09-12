-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2014 at 04:46 PM
-- Server version: 5.5.37
-- PHP Version: 5.4.4-14+deb7u10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trains`
--

-- --------------------------------------------------------

--
-- Table structure for table `Trains`
--

CREATE TABLE IF NOT EXISTS `Trains` (
  `Due` varchar(8) CHARACTER SET latin1 DEFAULT NULL,
  `Destination` varchar(27) CHARACTER SET latin1 DEFAULT NULL,
  `Status` varchar(7) CHARACTER SET latin1 DEFAULT NULL,
  `Platform` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Details` varchar(21) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Trains`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
