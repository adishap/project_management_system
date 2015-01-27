-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2015 at 03:57 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peer_reviewed_pms_db`
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
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`roll_no`),
  UNIQUE KEY `roll_no` (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_aspirants`
--

CREATE TABLE IF NOT EXISTS `project_aspirants` (
  `team_id` varchar(20) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`team_id`),
  UNIQUE KEY `team_id` (`team_id`)
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
