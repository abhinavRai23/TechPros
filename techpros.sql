-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2015 at 12:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techpros`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksorder`
--

CREATE TABLE IF NOT EXISTS `booksorder` (
  `Id` int(11) NOT NULL,
  `bookName` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `customerName` varchar(25) NOT NULL,
  `customerAddress` varchar(50) NOT NULL,
  `BookId` varchar(11) NOT NULL,
  `paymentMode` varchar(25) NOT NULL,
  PRIMARY KEY (`BookId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booksorder`
--

INSERT INTO `booksorder` (`Id`, `bookName`, `price`, `customerName`, `customerAddress`, `BookId`, `paymentMode`) VALUES
(2, 'Lords of the Rings', 500, 'Ekansh', 'Kanpur', '2352352', 'DebitCard'),
(1, 'Harry Potter', 300, 'Akash', 'Lucknow', '2435235', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `customercare`
--

CREATE TABLE IF NOT EXISTS `customercare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(25) NOT NULL,
  `customerMob` bigint(14) NOT NULL,
  `CustomerEmail` varchar(25) NOT NULL,
  `massege` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customercare`
--

INSERT INTO `customercare` (`id`, `customerName`, `customerMob`, `CustomerEmail`, `massege`) VALUES
(1, 'Abhinav', 1234567890, 'abc@xyz.com', 'Something something'),
(2, 'akash', 2147483646, 'xyz@abc.com', 'Nothing Nothing'),
(3, 'Rai', 979400724, 'abc@adsf.com', 'adsfk vadsv dvidvav asidsdvna'),
(4, 'Ramu', 8743960158, 'nothing@php.com', 'I repeat myself, the traffic is correctly identified by Protocol Control, anyone can test. I still think that all that is needed is a proper block. Any other rules in Protocol Control works perfectly, except torrent. So there must be something there.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'Abhinav', 'Rai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
