-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 09:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pgidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_active`
--

CREATE TABLE IF NOT EXISTS `tbl_active` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_well` int(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `change_date` date NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `production` decimal(65,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_well` (`id_well`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_atribut_lease`
--

CREATE TABLE IF NOT EXISTS `tbl_atribut_lease` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `id_lease` bigint(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lease` (`id_lease`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_atribut_well`
--

CREATE TABLE IF NOT EXISTS `tbl_atribut_well` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `id_well` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_well` (`id_well`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lease`
--

CREATE TABLE IF NOT EXISTS `tbl_lease` (
  `name` varchar(255) DEFAULT NULL,
  `id_lease` bigint(255) NOT NULL,
  `last_update` date NOT NULL,
  PRIMARY KEY (`id_lease`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(3, 'guest', 'Guest', '0000-00-00'),
(4, 'jooo', 'jooo', '2014-05-14'),
(5, 'coba', 'coba', '2014-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 2, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '2e150ece3d6d6d3da8fe0f9ba3ecc0d1', 'webmaster@example.com', '3530c29b9f63ed1747e94b7c978d4f0b', 1261146094, 1399724492, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1399708564, 0, 1),
(3, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'guest@guest.guest', '3d463a0e8185578ebf78754987328a52', 1399463029, 1399722541, 0, 1),
(4, 'jooo', 'd1737fc340086b50c9061f79dffd7a53', 'jo@example.com', '4d904ec4169588be3b3b31852c9164e2', 1399722143, 1399913531, 1, 1),
(5, 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'coba@ex.com', 'cd834a90c5d02bc1fa8d95e598ca473d', 1399724818, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_well`
--

CREATE TABLE IF NOT EXISTS `tbl_well` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `api` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `production` decimal(65,0) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `id_lease` bigint(255) NOT NULL,
  `last_update` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lease` (`id_lease`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_active`
--
ALTER TABLE `tbl_active`
  ADD CONSTRAINT `tbl_active_ibfk_1` FOREIGN KEY (`id_well`) REFERENCES `tbl_well` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_atribut_lease`
--
ALTER TABLE `tbl_atribut_lease`
  ADD CONSTRAINT `tbl_atribut_lease_ibfk_1` FOREIGN KEY (`id_lease`) REFERENCES `tbl_lease` (`id_lease`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_atribut_well`
--
ALTER TABLE `tbl_atribut_well`
  ADD CONSTRAINT `tbl_atribut_well_ibfk_1` FOREIGN KEY (`id_well`) REFERENCES `tbl_well` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_well`
--
ALTER TABLE `tbl_well`
  ADD CONSTRAINT `tbl_well_ibfk_1` FOREIGN KEY (`id_lease`) REFERENCES `tbl_lease` (`id_lease`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
