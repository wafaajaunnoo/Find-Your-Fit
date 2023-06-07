-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2021 at 07:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findyourfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, '', '$2y$10$ZyojnEwERF1abOqzn.32zOmItjGTzETJJcW.Ar4X9DzZJ8LYLcx66'),
(2, 'kimMae', '$2y$10$elAnEezZWQT/bYoRAwcuT.CwxN06DCXo7SQ.gCA4mo1fNLIuv9xBa'),
(3, 'clark', '$2y$10$7njfpbm54mVxMNdFq2EJYuWDjEcA74HyK1jOEGrULoz1Nuj3CHfqW'),
(4, 'melissa', '$2y$10$Q3wIACwRl7bFWSiwlzv.s.jFfWMmw9PR2NNL8.lXZ91t23AOvi5Pe'),
(5, 'janeFin', '$2y$10$ofhlxXv664npaUmLJHagzugM1NBh9YdOLfW0BTUnqP09UIgGUJ7aO'),
(6, 'kayla', '$2y$10$Na/p83mKz96PP6TFYDmSoOpwJwWeqxRtUAp/ldBQk1/uMz65.PWlO'),
(7, 'emilie', '$2y$10$jESQ2MgsP89UIEpfLh.CG.NGq3aYUA4rPfgpzYQIKoEkevFriV5bm'),
(8, 'christine', '$2y$10$sRNVTC/K2Yztaz03nchWLuqtKpJ8xfJI5Y/pE.3WwQoEYTxe5PczW'),
(9, 'anne', '$2y$10$.IJXBt2F71XiWgfMIyJy1.QMGl8XumAwAAT5lx1dW2EKQyy13jBNi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `emailid`, `message`) VALUES
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'just testing.'),
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'just testing.'),
('wafaa', 'jaunnoo', 'wafaajaunnoo@gmail.com', 'testing3'),
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'trial'),
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'testing agiinnn'),
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'testing agiinnn'),
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'testing agiinnn'),
('fghjk', 'vbnm,', 'fghjkl@gmail.com', 'asdfghjkl.'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjk', 'fghjm', 'fghjk@gmail.com', 'v bnm,'),
('fghjkl', 'sdfghjkl', 'sdfghjk@sdfgh.com', 'qawsedfrghjkl;'),
('Wafaa', 'Jaunnoo', 'wafaajaunnoo@gmail.com', 'final trial');

-- --------------------------------------------------------

--
-- Table structure for table `get_ready`
--

DROP TABLE IF EXISTS `get_ready`;
CREATE TABLE IF NOT EXISTS `get_ready` (
  `videos` binary(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `homepage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `contact_num` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `health_reports` varchar(255) NOT NULL,
  `profilePic` binary(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `username`, `emailid`, `contact_num`, `password`, `age`, `address`, `weight`, `height`, `health_reports`, `profilePic`) VALUES
(16, 'Jaunnoo', 'Jaunnoo', 'wafaajaunnoo', 'wafaajaunnoo@gmail.com', 58037784, '$2y$10$pVZ6s/CcG5gcabciOp2peOxziGWNbQEs2bDdlYo7vNR9Ymhe.qDrq', 20, 'Mauritius', 55, 156, 'very stressed.', 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(18, 'neelofurJ', 'Jaunnoo', 'neelofurJ', 'neelofur@gmail.com', 57771389, '$2y$10$j7tcYYEFEvPNRel5vrTCZOE.COqtZ06CjSEMFZyxwxQwtS9LilzlG', 24, 'Mauritius', 50, 153, 'none', 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member` text NOT NULL,
  `work_time` time(6) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `member`, `work_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '', '00:00:00.000000', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trainerchosen`
--

DROP TABLE IF EXISTS `trainerchosen`;
CREATE TABLE IF NOT EXISTS `trainerchosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member` text NOT NULL,
  `trainer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainerchosen`
--

INSERT INTO `trainerchosen` (`id`, `member`, `trainer`) VALUES
(1, 'wafaajaunnoo', ''),
(2, 'wafaajaunnoo', 'kimMae'),
(3, 'neelofurJ', 'kimMae');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
