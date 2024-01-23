-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2013 at 04:33 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `telephone` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `share_with` varchar(30) NOT NULL,
  `arr_date` varchar(12) NOT NULL,
  `dep_date` varchar(12) NOT NULL,
  `preference` varchar(8) NOT NULL,
  `res_id` varchar(10) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`first_name`, `last_name`, `age`, `sex`, `city`, `state`, `country`, `telephone`, `email`, `share_with`, `arr_date`, `dep_date`, `preference`, `res_id`) VALUES
('akl kl', 'abc', 22, 'Female', 'bahir dar', 'amhara', 'ethiopia', 251915749458, 'abc@yahoo.com', 'abc', '07.06.2013', '15.06.2013', '1', 'igzxtsaf'),
('helawe', 'abc', 22, 'Male', 'abc', 'abc', 'abc', 1, 'hbehailu@yahoo.com', 'a', '21.06.2013', '21.06.2013', 'Family', 'kqefex1f');
