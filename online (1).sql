-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2017 at 08:00 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

CREATE TABLE IF NOT EXISTS `chatters` (
  `name` varchar(20) NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`name`, `seen`) VALUES
('Talent', '2017-02-02 11:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE IF NOT EXISTS `interest` (
  `interest_id` int(11) NOT NULL AUTO_INCREMENT,
  `interest` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`interest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `Message_id` int(25) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `reply` varchar(11) DEFAULT NULL,
  `posted` varchar(20) NOT NULL,
  PRIMARY KEY (`Message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_id`, `sender`, `name`, `msg`, `reply`, `posted`) VALUES
(169, '12', 'Talent', 'hhh', NULL, '2017-02-02 10:29:38'),
(170, '12', 'Talent', 'niaje kimanthi?', NULL, '2017-02-02 10:29:53'),
(171, '12', 'Talent', 'kaii', '170', '2017-02-02 10:37:11'),
(172, '12', 'Talent', 'hjh', NULL, '2017-02-02 10:37:51'),
(173, '12', 'Talent', 'hehehe', NULL, '2017-02-02 10:40:07'),
(174, '12', 'Talent', 'niaje?', '172', '2017-02-02 10:40:38'),
(175, '12', 'Talent', 'vipii', NULL, '2017-02-02 10:40:44'),
(176, '12', 'Talent', 'poa sana', '175', '2017-02-02 10:41:12'),
(177, '12', 'Talent', 'KimANTHI', NULL, '2017-02-02 10:41:26'),
(178, '12', 'Talent', 'TENA SANA', '175', '2017-02-02 10:41:56'),
(179, '12', 'Talent', 'dklsfkjdsl', NULL, '2017-02-02 10:54:21'),
(180, '12', 'Talent', 'hehehe', NULL, '2017-02-02 10:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `second_name` varchar(30) NOT NULL,
  `email_address` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profile_photo` varchar(100) DEFAULT NULL,
  `user_type` varchar(2) DEFAULT NULL,
  `pref_tag` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `about_me` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `second_name`, `email_address`, `password`, `date_registered`, `profile_photo`, `user_type`, `pref_tag`, `phone`, `about_me`) VALUES
(12, 'Daniel', 'Otieno', 'danieljaoko@gmail.com', '715@daniel', '2017-01-27 08:57:18', NULL, '0', NULL, '+254723582451', '   I am an enthusiastic, hands-on IT professional with experience in ICT support and web application development. I have passion in computer programming and have the ability to learn. I enjoy closely following the latest changes in technology and apply this to my duties wherever relevant.   I am an enthusiastic, hands-on IT professional with experience in ICT support and web application development. I have passion in computer programming and have the ability to learn. I enjoy closely following the latest changes in technology and apply this to my duties wherever relevant.  I am an enthusiastic, hands-on IT professional with experience in ICT support and web application development. I have passion in computer programming and have the ability to learn. I enjoy closely following the latest changes in technology and apply this to my duties wherever relevant.  I am an enthusiastic, hands-on IT professional with experience in ICT support and web application development. I have passion in computer programming and have the ability to learn. I enjoy closely following the latest changes in technology and apply this to my duties wherever relevant.'),
(13, 'Amos', 'Kiptui', 'kiptuiamosk@gmail.com', '123', '2017-01-25 20:27:01', NULL, '1', NULL, NULL, NULL),
(14, 'kimanthi', 'julius', 'kimanthijuliu93@gmail.com', '1991', '2017-01-27 07:34:07', NULL, '0', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
