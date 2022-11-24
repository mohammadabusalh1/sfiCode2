-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22 أكتوبر 2022 الساعة 16:23
-- إصدار الخادم: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfi`
--

-- --------------------------------------------------------

--
-- بنية الجدول `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `Governorate` varchar(25) NOT NULL,
  `area` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `details` varchar(100) DEFAULT NULL,
  `challenges` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `numberBeneficiaries` int(11) NOT NULL,
  `numberBeneficiariesMale` int(11) NOT NULL,
  `numberBeneficiariesFmale` int(11) NOT NULL,
  `numberBeneficiaries-18` int(11) NOT NULL,
  `numberBeneficiaries+18-30` int(11) NOT NULL,
  `numberBeneficiaries+30` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `activitynames`
--

DROP TABLE IF EXISTS `activitynames`;
CREATE TABLE IF NOT EXISTS `activitynames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `activitynames`
--

INSERT INTO `activitynames` (`id`, `name`, `activityId`) VALUES
(4, 'asdasdasd', NULL),
(3, 'adasd', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `attachments`
--

DROP TABLE IF EXISTS `attachments`;
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `beneficiaries`
--

DROP TABLE IF EXISTS `beneficiaries`;
CREATE TABLE IF NOT EXISTS `beneficiaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `goals`
--

DROP TABLE IF EXISTS `goals`;
CREATE TABLE IF NOT EXISTS `goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goal` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  `ProjectsId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `nickname` varchar(25) DEFAULT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `participants`
--

INSERT INTO `participants` (`id`, `name`, `nickname`, `activityId`) VALUES
(4, 'asdasd', NULL, NULL),
(5, 'احمد', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `programs`
--

INSERT INTO `programs` (`id`, `name`, `activityId`) VALUES
(4, 'oooo', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(25) NOT NULL,
  `financierName` varchar(20) NOT NULL,
  `value` double NOT NULL,
  `area` varchar(25) NOT NULL,
  `TargetGroup` varchar(25) NOT NULL,
  `idea` varchar(100) NOT NULL,
  `activityId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projectname` (`ProjectName`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `project`
--

INSERT INTO `project` (`id`, `ProjectName`, `financierName`, `value`, `area`, `TargetGroup`, `idea`, `activityId`) VALUES
(18, 'aa', 'aa', 22, 'aa', 'aa', 'aa', NULL),
(19, 'a', 't', 55, 'h', 'r', 'y', NULL),
(20, 'e', 'r', 7, 'o', 'z', 'q', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`) VALUES
(37, 'mohammad', '1234', 'admin'),
(36, 'a', 'a', 'admin'),
(35, 'qaz', ' qaz1', 'as'),
(38, 'd', 'd', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
