-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2014 at 12:20 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--
CREATE DATABASE IF NOT EXISTS `lms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lms`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `board_number` varchar(11) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `address`, `city`, `state`, `board_number`, `url`, `description`) VALUES
(1, 'Excel', NULL, NULL, NULL, NULL, 'www.excel.com', 'None'),
(2, 'Raaga', NULL, NULL, NULL, NULL, 'www.raagadesign.com', ''),
(3, 'Tamron', NULL, NULL, NULL, NULL, '', ''),
(4, 'Cisco', '#6757', 'Gurgaon', 'Haryana', '89678686786', 'www.cisco.com', 'sfsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(10) NOT NULL,
  `created` date DEFAULT NULL COMMENT 'date on which invoice is created',
  `delivery_note` varchar(1000) DEFAULT NULL,
  `mop` varchar(1000) DEFAULT NULL COMMENT 'Mode/Terms of Payment',
  `dog` mediumtext COMMENT 'Description of Goods',
  `quantity` int(11) DEFAULT NULL COMMENT 'quantiy of goods',
  `unit_rate` int(11) DEFAULT NULL COMMENT 'unit rate of goods',
  `amount` decimal(10,0) DEFAULT NULL COMMENT 'amount without tax',
  `final_amount` decimal(10,0) DEFAULT NULL COMMENT 'amount after taxes',
  `sr` varchar(1000) DEFAULT NULL COMMENT 'Suppliers'' refrence',
  `other_ref` varchar(1000) DEFAULT NULL COMMENT 'Others'' Refrence',
  `account_id` int(11) NOT NULL COMMENT 'Buyers'' Name from table account',
  `address` varchar(10000) DEFAULT NULL COMMENT 'address of company',
  `city` varchar(1000) DEFAULT NULL COMMENT 'City of company',
  `state` varchar(1000) DEFAULT NULL,
  `pin` varchar(1000) DEFAULT NULL,
  `country` varchar(1000) DEFAULT NULL,
  `bpo` varchar(1000) DEFAULT NULL COMMENT 'Buyers'' PO number',
  `dated` date DEFAULT NULL COMMENT 'Buyers'' PO date',
  `ddn` varchar(1000) DEFAULT NULL COMMENT 'Despatch Document No',
  `dated2` date DEFAULT NULL COMMENT 'ddn date',
  `despatched_through` varchar(1000) DEFAULT NULL,
  `destination` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `board_number` varchar(11) DEFAULT NULL COMMENT 'board number',
  `mobile_number` varchar(11) DEFAULT NULL COMMENT 'mobile number',
  `requirements` varchar(1000) DEFAULT NULL,
  `total_price_quoted` int(11) DEFAULT NULL COMMENT 'total price quoted',
  `our_price` int(11) DEFAULT NULL COMMENT 'our price',
  `margin` int(11) DEFAULT NULL,
  `closing_month` varchar(100) DEFAULT NULL COMMENT 'closing month',
  `probablity` varchar(100) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `account_id`, `name`, `email`, `board_number`, `mobile_number`, `requirements`, `total_price_quoted`, `our_price`, `margin`, `closing_month`, `probablity`, `status_id`, `user_id`, `date_added`) VALUES
(7, 3, 'Nitin Goyal', 'nitin@tamron.in', '91124456787', '99987882378', 'One dell edsktop required urgently', 56000, 52000, 4000, '23 January 2014', 'high', 2, 3, '2014-01-20 10:13:00'),
(8, 1, 'Rakesh', 'abc@gmail.com', '01244455662', '9999999999', 'hikk', 67777, 4000, 63777, '09 January 2014', 'High', 1, 3, '2014-01-21 09:05:00'),
(9, 1, 'Vikas', 'abc@gmail.com', '0124557788', '9988734427', 'None', 45678, 2345, 43333, '16 January 2014', 'high', 1, 3, '2014-01-21 11:36:00'),
(11, 1, 'asdf', 'sdfsjdf@gail.com', '213', '19283128937', 'shwjfkjshdvhcxvb', 121212, 1239, 119973, '26 January 2014', 'high', 1, 1, '2014-01-24 06:26:00'),
(13, 1, 'Hikant', 'ki@gmail.com', '12345565468', '32424542354', '$this->request->data[''Model''][''user_id''] = $this->Session->read( ''Auth.User.id'' );', 7876565, 1237, 7875328, '17 January 2014', 'High', 1, 0, '2014-01-27 11:44:00'),
(23, 3, 'Mr. Goel', 'abc@gmail.com', '12345565468', '32424542354', 'hi', 7876565, 1237, 7875328, '10 January 2014', 'High', 1, 1, '2014-01-31 12:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `description`) VALUES
(1, 'Active', ''),
(2, 'Won', ''),
(3, 'Closed', ''),
(4, 'Lost', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `phone`, `role`, `created`) VALUES
(1, 'Siddharth', 'Sharma', 'sid', '7a21abd42653eaed182e452dfb3ea8aa1359e14e', 'sid@gmail.com', '9999999999', 'admin', '2014-01-13 06:59:00'),
(2, 'Vikas', 'Choudhary', 'vikas', '6f5523533f8e5267fef5346776eeef23ef13bfa7', 'vikas.choudhary@meridiansolutions.co.in', '9971531189', 'admin', '2014-01-20 07:02:29'),
(3, 'Sachin', 'Sharma', 'sachin', '04f5fa9c5c27035e0f02b413a730336efff27165', 'sachin@gmail.com', '99999999999', 'user', '2014-01-28 11:17:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
