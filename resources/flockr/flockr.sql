-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2011 at 04:49 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'flockr'
--

-- --------------------------------------------------------

--
-- Table structure for table 'comments'
--

CREATE TABLE comments (
  id int(11) NOT NULL,
  `text` text NOT NULL,
  userid int(11) NOT NULL,
  created datetime NOT NULL,
  photoid int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'friendships'
--

CREATE TABLE friendships (
  following int(11) NOT NULL,
  follower int(11) NOT NULL,
  PRIMARY KEY (following,follower)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'photos'
--

CREATE TABLE photos (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(32) NOT NULL,
  userid int(11) NOT NULL,
  created datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'users'
--

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  email varchar(32) NOT NULL,
  firstname varchar(32) NOT NULL,
  lastname varchar(32) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
