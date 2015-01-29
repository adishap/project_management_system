-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2015 at 05:02 AM
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
-- Table structure for table `allocation_team`
--

CREATE TABLE IF NOT EXISTS `allocation_team` (
  `peer_roll_no` varchar(20) NOT NULL,
  `aspirant_id1` varchar(20) NOT NULL,
  `aspirant_id2` varchar(20) NOT NULL,
  `aspirant_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `project_aspirants`
--

CREATE TABLE IF NOT EXISTS `project_aspirants` (
  `team_id` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `password` varchar(35) NOT NULL
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
