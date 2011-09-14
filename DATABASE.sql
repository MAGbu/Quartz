-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2009 at 06:42 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `profwebsitedb0`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginSet`
--

CREATE TABLE `loginSet` (
  `email` varchar(40) NOT NULL,
  `isApproved` int(5) NOT NULL default '0',
  `hash` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginSet`
--

INSERT INTO `loginSet` (`email`, `isApproved`, `hash`) VALUES('pws_admin@bu.edu', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `nLogin`
--

CREATE TABLE `nLogin` (
  `email` varchar(40) collate ascii_bin NOT NULL,
  `password` varchar(100) collate ascii_bin NOT NULL,
  `name` varchar(40) collate ascii_bin NOT NULL,
  `buid` varchar(9) collate ascii_bin NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `nLogin`
--

INSERT INTO `nLogin` (`email`, `password`, `name`, `buid`, `isactive`) VALUES('pws_admin@bu.edu', '4c14200d22d7dd7ac26ffb185667f94d', 'admin', 'U00000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `webData`
--

CREATE TABLE `webData` (
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL default 'Title. Name M. Last',
  `bio` varchar(1500) NOT NULL default 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, ...anim id est laborum.',
  `phone` varchar(15) NOT NULL default '(XXX) XXX-XXXX',
  `fax` varchar(40) NOT NULL default '(XXX) XXX-XXXX',
  `office` varchar(100) NOT NULL default '#XXX Street Name, BID-RMN <br> Boston, MA 02215, USA',
  `jobtitle` varchar(40) NOT NULL default 'Job Title Here',
  `ofhours` varchar(100) NOT NULL default 'Day TT:TT - TT:TT <br> Day TT:TT - TT:TT',
  `isonline` tinyint(1) NOT NULL default '0',
  `researchsum` varchar(2000) NOT NULL default 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, ...anim id est laborum.',
  `teaching` varchar(1000) NOT NULL,
  `reslink` varchar(100) NOT NULL,
  `awards` varchar(5) NOT NULL,
  `projects` varchar(5) NOT NULL,
  `students` varchar(5) NOT NULL,
  `personal` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webData`
--

INSERT INTO `webData` (`email`, `name`, `bio`, `phone`, `fax`, `office`, `jobtitle`, `ofhours`, `isonline`, `researchsum`, `teaching`, `reslink`, `awards`, `projects`, `students`, `personal`) VALUES('pws_admin@bu.edu', 'Title. Name M. Last', 'Lorem ipsum dolor ... est laborum.', '(XXX) XXX-XXXX', '(XXX) XXX-XXXX', '#XXX Street Name, BID-RMN <br> Boston, MA 02215, USA', 'Job Title Here', 'Day TT:TT - TT:TT <br> Day TT:TT - TT:TT', 1, 'Lorem ipsum dolor sit ...anim id est laborum.', 'CS XXX : Course Title;; - Lorem ipsum dolor ... pariatur.;CS XXX : Course Title;; - Lorem ipsum dolor ... pariatur.;', '', '', '', '', '');
