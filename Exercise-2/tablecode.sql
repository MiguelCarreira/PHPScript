-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 11:23 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `couponcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablecode`
--

CREATE TABLE IF NOT EXISTS `tablecode` (
`idCode` int(11) unsigned NOT NULL,
  `Code` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tablecode`
--

INSERT INTO `tablecode` (`idCode`, `Code`) VALUES
(7, ')Tub;^'),
(6, '*bK7uM'),
(5, 'aj:gyC'),
(4, 'Z@~9[o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablecode`
--
ALTER TABLE `tablecode`
 ADD PRIMARY KEY (`idCode`), ADD UNIQUE KEY `Code` (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablecode`
--
ALTER TABLE `tablecode`
MODIFY `idCode` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
