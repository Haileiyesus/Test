-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:48 PM
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
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_no` int(3) NOT NULL,
  `room_type` varchar(12) NOT NULL,
  `price` float NOT NULL,
  `floor_no` int(11) NOT NULL,
  `max_guest` double NOT NULL,
  `status` varchar(8) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `discount` float NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `room_type`, `price`, `floor_no`, `max_guest`, `status`, `detail`, `discount`) VALUES
(1, 'family', 800, 0, 0, 'free', 'This room is infront of the lake tana, and has a beautiful lake view terrace.', 715),
(101, 'single', 350, 1, 0, 'free', 'The room has a 24 hr. wifi service and bathroom inside', 300),
(201, 'twin', 550, 2, 0, 'free', 'The room has a 24 hr. wifi service and bathroom inside and also has a terrace.', 490),
(202, 'twin', 550, 2, 0, 'free', 'This room is infront of the lake tana, and has a beautiful lake view terrace, also a Dstv service wi', 490);
