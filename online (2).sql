-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2017 at 06:49 AM
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
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54'),
('Talentprenuership', '2017-02-23 09:48:54');

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
  `Message_id` int(25) NOT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `fname` varchar(11) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `reply` varchar(11) DEFAULT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_id`, `sender`, `fname`, `sname`, `username`, `name`, `msg`, `reply`, `posted`) VALUES
(196, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'karibu too', NULL, '2017-02-02 11:14:33'),
(197, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'asandeeee', '196', '2017-02-02 11:14:39'),
(198, '15', 'Eliud', 'Too', '@too', 'Talent', 'asantee', '196', '2017-02-02 11:14:49'),
(199, '15', 'Eliud', 'Too', '@too', 'Talent', 'kwenda hukooo', '196', '2017-02-02 11:15:17'),
(200, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'wapi', NULL, '2017-02-02 11:15:27'),
(201, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'aki ya nani', '196', '2017-02-02 11:15:31'),
(202, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'wapi', NULL, '2017-02-02 11:15:33'),
(203, '15', 'Eliud', 'Too', '@too', 'Talent', 'hapo', '202', '2017-02-02 11:15:47'),
(204, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'wapi', '196', '2017-02-02 11:15:48'),
(205, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'wapi wapi nini', NULL, '2017-02-02 11:15:52'),
(206, '15', 'Eliud', 'Too', '@too', 'Talent', 'kucha hapa', '202', '2017-02-02 11:16:00'),
(207, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'wewe kimanthi kazi ni kuandika wapi?', NULL, '2017-02-02 11:16:03'),
(208, '15', 'Eliud', 'Too', '@too', 'Talent', 'maembe bana', NULL, '2017-02-02 11:16:14'),
(209, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'nilikuwa narespondia too', '205', '2017-02-02 11:16:17'),
(210, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'hehehehehehe na nimesema watu wareply', NULL, '2017-02-02 11:16:17'),
(211, '15', 'Eliud', 'Too', '@too', 'Talent', 'hujalipaaa', '210', '2017-02-02 11:16:29'),
(212, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'sasas kujeni tuchese na csss', NULL, '2017-02-02 11:16:36'),
(213, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'eeh. hii sio video chat', '207', '2017-02-02 11:16:44'),
(214, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'heheh', NULL, '2017-02-02 11:16:50'),
(215, '15', 'Eliud', 'Too', '@too', 'Talent', 'sio mbaya', '212', '2017-02-02 11:16:59'),
(216, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sawa ndio hiyo reply', '210', '2017-02-02 11:17:14'),
(217, '15', 'Eliud', 'Too', '@too', 'Talent', 'sawa', '214', '2017-02-02 11:17:33'),
(218, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'poa', '212', '2017-02-02 11:17:37'),
(219, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'sasa tuweke sound notification', NULL, '2017-02-02 11:17:46'),
(220, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hehe nini', '214', '2017-02-02 11:17:52'),
(221, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hio ni kazi ya public sector', '219', '2017-02-02 11:18:26'),
(222, '15', 'Eliud', 'Too', '@too', 'Talent', 'itakuwa ni mpoa mpia', '219', '2017-02-02 11:18:36'),
(223, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hatufanyi huku private sector', '219', '2017-02-02 11:18:49'),
(224, '12', 'Daniel', 'Jaoko', '@daniel', 'Talent', 'hehehhe', '219', '2017-02-02 11:19:38'),
(225, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Career', 'what is career', NULL, '2017-02-02 11:28:36'),
(226, '15', 'Eliud', 'Too', '@too', 'Career', 'carees is what you aim at pursuing during your entire lifetime', '225', '2017-02-02 11:29:16'),
(227, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Career', 'wooww.nice definition', '225', '2017-02-02 11:29:44'),
(228, '15', 'Eliud', 'Too', '@too', 'Career', 'how many marks awarded', '225', '2017-02-02 11:30:09'),
(229, '15', 'Eliud', 'Too', '@too', 'Career', 'That is great', NULL, '2017-02-02 11:31:17'),
(230, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Career', 'yes.realy great', '229', '2017-02-02 11:33:34'),
(231, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'hi', NULL, '2017-02-03 09:32:23'),
(232, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'hi', NULL, '2017-02-03 13:03:23'),
(233, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'hi to u', '232', '2017-02-03 13:03:30'),
(234, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'poa', NULL, '2017-02-03 13:03:44'),
(235, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'karibu too', NULL, '2017-02-03 13:09:27'),
(236, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'sawa', '234', '2017-02-03 13:09:27'),
(237, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'aksantes', '235', '2017-02-03 13:09:43'),
(238, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'how is you', NULL, '2017-02-03 13:10:06'),
(239, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'Mimi nimefika', NULL, '2017-02-03 13:10:15'),
(240, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'karibu uku', '239', '2017-02-03 13:10:25'),
(241, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'Na sitaki machesoo', NULL, '2017-02-03 13:10:27'),
(242, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'unataka nini', '241', '2017-02-03 13:10:36'),
(243, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'na ni mimi nimesema', NULL, '2017-02-03 13:10:37'),
(244, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'Lunch', '241', '2017-02-03 13:10:46'),
(245, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'useme nini', '243', '2017-02-03 13:10:46'),
(246, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'Whats not write kimanyi?', '243', '2017-02-03 13:11:08'),
(247, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'you can have it', '241', '2017-02-03 13:11:09'),
(248, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'kimanyi what is wrong', '243', '2017-02-03 13:11:37'),
(249, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'najaribu kurespond @daniel sitaki mchesoo inakataa', NULL, '2017-02-03 13:11:43'),
(250, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'iyo ni yako pekee basi', '249', '2017-02-03 13:12:00'),
(251, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'hehehehee wewe uko na sakooooo', '249', '2017-02-03 13:12:07'),
(252, '16', 'Ebby', 'Nakitari', '@ebby', 'Talentprenuership', 'whara this!!!', NULL, '2017-02-03 13:15:44'),
(253, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'ettiiiii....', '252', '2017-02-03 13:16:55'),
(254, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'weeeee', '252', '2017-02-03 13:17:41'),
(255, '16', 'Ebby', 'Nakitari', '@ebby', 'Talentprenuership', 'nothing', '252', '2017-02-03 13:17:58'),
(256, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'Ebby wacha mchesoooo twende nyumbani', '252', '2017-02-03 13:18:10'),
(257, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'tunaeza elekea sasa', '252', '2017-02-03 13:18:39'),
(258, '16', 'Ebby', 'Nakitari', '@ebby', 'Talentprenuership', 'Good job!!!!', NULL, '2017-02-03 13:19:05'),
(259, '15', 'Eliud', 'Too', '@too', 'Talentprenuership', 'thaNKS', '258', '2017-02-03 13:19:18'),
(260, '12', 'Daniel', 'Jaoko', '@daniel', 'Talentprenuership', 'Mstwaaaaaa', '258', '2017-02-03 13:21:43'),
(261, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'thanks', '258', '2017-02-03 13:26:07'),
(262, '16', 'Ebby', 'Nakitari', '@ebby', 'Career', 'what is career', NULL, '2017-02-03 13:36:40'),
(263, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'yes in deed', '258', '2017-02-06 11:27:01'),
(264, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'thanks you ', '258', '2017-02-06 11:27:25'),
(265, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'poa sana', NULL, '2017-02-09 09:01:57'),
(266, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'sasa', NULL, '2017-02-09 09:30:08'),
(267, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'yes', NULL, '2017-02-09 09:41:30'),
(268, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'hello too .we are fine', NULL, '2017-02-09 09:52:11'),
(269, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'hi', NULL, '2017-02-09 09:52:41'),
(270, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'hello', NULL, '2017-02-09 10:03:25'),
(271, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'sasa', NULL, '2017-02-09 10:04:07'),
(272, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'now', NULL, '2017-02-09 10:11:23'),
(273, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'sasa', NULL, '2017-02-09 10:24:35'),
(274, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'poa', NULL, '2017-02-09 10:25:08'),
(275, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'hi', '274', '2017-02-09 10:25:36'),
(276, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'sasa tena', NULL, '2017-02-09 10:27:26'),
(277, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'checking bundles', NULL, '2017-02-09 10:30:18'),
(278, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'weeeeee', NULL, '2017-02-09 10:31:01'),
(279, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 10:32:54'),
(280, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'sa', NULL, '2017-02-09 10:33:00'),
(281, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'first load mob', NULL, '2017-02-09 10:50:32'),
(282, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'hi', NULL, '2017-02-09 11:08:30'),
(283, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'woooow', NULL, '2017-02-09 11:09:05'),
(284, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'bahati tena', NULL, '2017-02-09 11:10:33'),
(285, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Technology', 'sasa', NULL, '2017-02-09 11:23:43'),
(286, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 11:43:10'),
(287, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 11:44:09'),
(288, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 11:49:27'),
(289, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sas', NULL, '2017-02-09 11:57:02'),
(290, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sas', NULL, '2017-02-09 11:58:26'),
(291, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hu', NULL, '2017-02-09 11:58:53'),
(292, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:00:19'),
(293, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:00:42'),
(294, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:01:38'),
(295, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:02:06'),
(296, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'he', NULL, '2017-02-09 12:02:34'),
(297, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'she', NULL, '2017-02-09 12:03:50'),
(298, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:29:27'),
(299, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:30:27'),
(300, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:31:28'),
(301, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:34:24'),
(302, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:34:45'),
(303, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:35:13'),
(304, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa hivi', NULL, '2017-02-09 12:39:20'),
(305, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 12:47:15'),
(306, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'he', NULL, '2017-02-09 12:48:14'),
(307, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'hi', NULL, '2017-02-09 12:54:28'),
(308, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sas', NULL, '2017-02-09 12:55:19'),
(309, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 12:56:13'),
(310, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 12:56:27'),
(311, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 12:57:03'),
(312, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 13:02:26'),
(313, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa hivi wawili', NULL, '2017-02-09 13:03:09'),
(314, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'ssssssssssssssssss', NULL, '2017-02-09 13:04:56'),
(315, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 13:06:08'),
(316, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 13:09:23'),
(317, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'fgffg', NULL, '2017-02-09 13:13:42'),
(318, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 13:15:22'),
(319, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'sasa', NULL, '2017-02-09 13:16:36'),
(320, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'akiii', '319', '2017-02-09 16:17:33'),
(321, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'oky', '319', '2017-02-09 16:17:38'),
(322, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talent', 'poa', '319', '2017-02-09 16:27:24'),
(323, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'f', NULL, '2017-02-17 14:30:56'),
(324, '14', 'Julius', 'Kimanthi', '@kimanthi', 'Talentprenuership', 'SAME', NULL, '2017-02-17 15:08:01'),
(335, '19', 'July', 'Kim', '@july', 'Talentprenuership', 'hi', NULL, ''),
(0, '12', '', '', '', 'Talentprenuership', 'iiii', NULL, '2017-02-23 09:30:18'),
(0, '12', '', '', '', 'Talentprenuership', 'adadadada', NULL, '2017-02-23 09:30:26'),
(0, '12', '', '', '', 'Talentprenuership', 'hhhh', NULL, '2017-02-23 09:35:01'),
(0, '12', '', '', '', 'Talentprenuership', 'niaje', NULL, '2017-02-23 09:35:06'),
(0, '12', '', '', '', 'Talentprenuership', 'h', NULL, '2017-02-23 09:38:57');

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
