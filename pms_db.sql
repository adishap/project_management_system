-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2015 at 05:54 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `peers`
--

CREATE TABLE IF NOT EXISTS `peers` (
  `name` varchar(25) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `website_link` varchar(150) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  UNIQUE KEY `roll_no` (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peers`
--

INSERT INTO `peers` (`name`, `roll_no`, `website_link`, `user_email`, `password`) VALUES
('adisha', 'it-2k11-2', 'adh', 'adisha@p.m', '098f6bcd4621d373cade4e832627b4f6'),
('poorab', 'it-2k11-22', 'ghgj', 'poorab@s.m', '098f6bcd4621d373cade4e832627b4f6'),
('nitin', 'it-2k11-23', 'dsdfdg', 'nitin@s.m', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `project_aspirants`
--

CREATE TABLE IF NOT EXISTS `project_aspirants` (
  `team_id` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `allocated_project_buddy` varchar(11) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_aspirants`
--

INSERT INTO `project_aspirants` (`team_id`, `user_email`, `project_title`, `abstract`, `allocated_project_buddy`, `password`) VALUES
('2015vi02', 'test@test.i', 'drrtgr', 'errttrt', '', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE IF NOT EXISTS `project_status` (
  `team_id` varchar(20) NOT NULL,
  `SRS` varchar(100) NOT NULL,
  `SPMP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requested_peers`
--

CREATE TABLE IF NOT EXISTS `requested_peers` (
  `team_id` varchar(20) NOT NULL,
  `peer_roll_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
