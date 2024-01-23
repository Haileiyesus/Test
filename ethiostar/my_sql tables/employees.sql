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
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `salary` float NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `username`, `fname`, `lname`, `salary`, `start_date`, `dob`, `age`, `sex`, `city`, `state`, `nationality`, `telephone`, `email`, `job_title`, `picture`) VALUES
('Gurd/13/15', 'mayet', 'mayet', 'gizachew', 4563, '19/06/2013', '5/12/1990', 23, 'Male', 'bahir dar', 'amhara', 'Ethiopian', 2147483647, 'mayet@yahoo.com', 'index', ''),
('Rcpt/13/02', 'kedir', 'kedir', 'kibret', 5000, '19/06/2013', '12/02/1990', 23, 'Male', 'addis ababa', 'addis ababa', 'Ethiopian', 582268965, 'kedir@gmail.com', 'receptionist', '../html/images/employees/24.jpg'),
('wait/13/02', 'behailu', 'behailu', 'kibret', 4563, '20/06/2013', '5/12/1991', 22, 'Female', 'addis ababa', 'addis ababa', 'Ethiopian', 2147483647, 'hbehailu@yahoo.com', 'index', '../html/images/employees/24 001.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
