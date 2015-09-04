-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2015 at 05:08 AM
-- Server version: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `aia_admin`
--

CREATE TABLE IF NOT EXISTS `aia_admin` (
`id` int(7) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(75) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `aia_admin`
--

INSERT INTO `aia_admin` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `last_login`) VALUES
(23, 'acommerce', 'admin', 'acommerce@localhost', 'Acommerce', 'Integration', '2015-09-05 00:29:44'),
(29, 'jarul', 'c0b44j4', 'sanguinis13@gmail.com', 'Rully', 'Andhika', '2015-05-11 00:39:21'),
(34, 'asfaf', 'dada', 'asfasf', 'asfas', 'afasfas', '2015-05-15 14:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `aia_client`
--

CREATE TABLE IF NOT EXISTS `aia_client` (
`id` int(7) NOT NULL,
  `company` varchar(45) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `url_host` varchar(255) NOT NULL,
  `port` int(5) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aia_client`
--

INSERT INTO `aia_client` (`id`, `company`, `username`, `password`, `url_host`, `port`, `reg_date`) VALUES
(1, 'acommerce', 'userbaru1', 'c0b44j4', 'http://192.168.43.13/', 22, '2015-04-27 00:00:00'),
(2, 'FrisianFlag', 'idfrisianf_ftp', 'G?bv&#@P3y', '54.254.137.65', 22, '2015-04-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aia_client_header`
--

CREATE TABLE IF NOT EXISTS `aia_client_header` (
`id` int(7) NOT NULL,
  `company` varchar(45) NOT NULL,
  `username` varchar(35) NOT NULL,
  `ia` text NOT NULL,
  `ivr` text NOT NULL,
  `im` text NOT NULL,
  `itr` text NOT NULL,
  `items` text NOT NULL,
  `po` text NOT NULL,
  `so` text NOT NULL,
  `ss` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aia_client_header`
--

INSERT INTO `aia_client_header` (`id`, `company`, `username`, `ia`, `ivr`, `im`, `itr`, `items`, `po`, `so`, `ss`) VALUES
(1, 'Frisian Flag', 'idfrisianf_ftp', '', '', '', '', 'Product Title,Item ID,UPC,Brand,Storage Requirement,Main Category,Sub Category,Weight,Price,Width,Length,Height', 'PO#,Item ID,QTY', 'Order #,Order Date,QTY,SKU,Customer ID,Address ID,Shipping Addressee,Address,City,Province,Post Code,Country,Telephone,Gross Total,Shipping Type,Payment Type,Gift Name,Gift Message', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aia_admin`
--
ALTER TABLE `aia_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aia_client`
--
ALTER TABLE `aia_client`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aia_client_header`
--
ALTER TABLE `aia_client_header`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aia_admin`
--
ALTER TABLE `aia_admin`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `aia_client`
--
ALTER TABLE `aia_client`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `aia_client_header`
--
ALTER TABLE `aia_client_header`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
