-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:47 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `password`, `role`, `status`) VALUES
('behailu', 'bcd5040a6f9e8a93b9cafaffec5e38e7', 'index', 'offline'),
('hanna', 'kebede', 'receptionist', 'offline'),
('helawe', 'behailu', 'system_admin', 'offline'),
('kedir', 'kibret', 'receptionist', 'offline'),
('mayet', '180898c9dd7b3ae0fe8d0b081a99e674', 'index', 'offline'),
('miky', 'f135938960c84a5', 'index', 'offline'),
('shumi', 'kebede', 'manager', 'offline'),
('yodit', 'terefe', 'casher', 'offline');
