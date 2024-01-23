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
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `name` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(30) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `feedback` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`name`, `sex`, `age`, `job`, `picture`, `feedback`, `status`, `ip`) VALUES
('sasi ali', 'Female', 72, 'student', '../html/images/comments/picture.jpg', 'i love your hotel', 'Choosen', 213),
('Behailu', 'Male', 21, 'student', '../html/images/comments/behalu.jpg', 'nice hotel', 'Choosen', 12),
('Haile', 'Male', 51, 'Teacher', '../html/images/comments/DSC01527.jpg', 'not good that much', '', 213),
('Belen', 'Female', 29, 'doctor', '../html/images/comments/view comment.jpg', 'not good that much', 'Choosen', 127),
('Helawe Behailu', 'Male', 22, 'Student', '../html/images/comments/hb.gif', 'Im a university student in Bahir Dar, when everytime my families come to the city their  first choise is Ethio-Star. They always say We feel like home...!', 'Choosen', 127),
('Maru', 'Male', 21, 'Student', '../html/images/comments/gg.jpg', 'you are an asshole', '', 127),
('Kedir Kibret', 'Male', 22, 'Student', '../html/images/comments/24.jpg', 'u have a good service but its not that much nice', '', 127);
