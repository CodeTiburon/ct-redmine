-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: 906d9bff02de62179ef640b8b91c67d757af2b3c.rackspaceclouddb.com
-- Generation Time: May 22, 2014 at 04:25 PM
-- Server version: 5.1.73-1
-- PHP Version: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pzqbqvne`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `graphic_id` varchar(36) NOT NULL,
  `lat` varchar(15) NOT NULL COMMENT 'Latitude',
  `lng` varchar(15) NOT NULL COMMENT 'Longitude',
  `addr_name` varchar(50) NOT NULL,
  `addr_1` varchar(50) NOT NULL,
  `addr_2` varchar(50) NOT NULL,
  `addr_city` varchar(50) NOT NULL,
  `addr_st` varchar(2) NOT NULL,
  `addr_zip` varchar(11) NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `url` varchar(75) NOT NULL,
  `p_url` varchar(75) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `review` tinyint(4) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `graphic_id` (`graphic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
