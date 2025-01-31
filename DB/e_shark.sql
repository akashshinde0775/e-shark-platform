-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2023 at 02:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_shark`
--
CREATE DATABASE IF NOT EXISTS `e_shark` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `e_shark`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `trading_exp` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `primary_contact_no` text NOT NULL,
  `other_contact_no` text NOT NULL,
  `logo` text NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `trading_exp`, `email`, `address`, `primary_contact_no`, `other_contact_no`, `logo`, `password`, `date`, `time`) VALUES
(7, 'SHREE', '11', 'Shree@gmail.com', 'Solapur', '1234567890', '', 'ouKdm1xxGE.png', '12345', '2020-10-18', '14-55-31 PM'),
(8, 'YYY', '', 'SSS@GMAIL.COM', 'SOLAPUR', '1122334455', '', 'AUDRaaEuSY.png', '5454', '2022-12-23', '14-01-19 PM'),
(9, 'FGHFDH', '', '4454@FDD', '4554', '5454445588', '', '', '54', '2023-03-21', '11-08-28 AM'),
(10, 'FGHFDH', '', '4454@FDD', '4554', '5454445588', '', '', '54', '2023-03-21', '11-09-13 AM'),
(11, 'FGHFDH', '', '4454@FDD', '4554', '5454445588', '', '', '54', '2023-03-21', '11-09-20 AM'),
(12, 'FGHFDH', '', '4454@FDD', '4554', '5454445588', '', '', '54', '2023-03-21', '11-09-31 AM'),
(13, 'dfgfdg', '54', '5465@ddd.com', '415', '4445474859', '5545', 'Nc7pBpLoDD.png', '4654', '2023-03-21', '17-49-48 PM'),
(14, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', '', 'dffdfdf', '2023-03-22', '17-31-00 PM'),
(15, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', '', 'dffdfdf', '2023-03-22', '17-32-26 PM'),
(16, 'dgdg', 'dfgdfg', 'dfgdfg@sdsd', 'jkkljlj', '7744774488', '', '', 'fd', '2023-03-22', '17-32-54 PM'),
(17, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'WvMClk6jRH.png', 'dff', '2023-03-22', '17-33-31 PM'),
(18, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'aQuD3SzLsS.png', 'dff', '2023-03-22', '17-33-51 PM'),
(19, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'BS6e12bKPS.png', 'dff', '2023-03-22', '17-34-02 PM'),
(20, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'rNtt5cVpQk.png', 'dff', '2023-03-22', '17-34-18 PM'),
(21, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'ENVZDd2ykL.png', 'dff', '2023-03-22', '17-34-58 PM'),
(22, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'qRI2Ngf8nA.png', 'dff', '2023-03-22', '17-35-08 PM'),
(23, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'UDRaaEuSYL.png', 'dff', '2023-03-22', '17-37-13 PM'),
(24, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'Y2O4xvF9UC.png', 'dff', '2023-03-22', '17-38-06 PM'),
(25, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', 'Y8heIznFmA.png', 'dff', '2023-03-22', '17-38-39 PM'),
(26, 'dfgdfgd', 'dfgdfg', 'dsfsdf@sdfff.com', 'dffdsfsd', '7878958574', '', '0iDoxYiWyo.png', 'dff', '2023-03-22', '17-40-26 PM'),
(27, 'dfsdf', 'sdfsdf', 'dfdfd@ddd.com', 'sdf', '5487986551', '', '8Uf4fsrGdC.png', 'eertrt', '2023-04-29', '23-06-50 PM');

-- --------------------------------------------------------

--
-- Table structure for table `post_replys`
--

CREATE TABLE IF NOT EXISTS `post_replys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` text COLLATE utf8_unicode_ci NOT NULL,
  `reply_from` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `post_replys`
--

INSERT INTO `post_replys` (`id`, `post_id`, `reply_from`, `description`, `date`, `time`, `status`) VALUES
(14, '2', '1234567890', 'I want to invest in it.. whats process to invest', '2023-04-30', '06:11:48 pm', ''),
(13, '4', '1234567890', 'Hello This is amspe', '2023-04-30', '02:08:41 pm', ''),
(12, '1', '1234567890', 'sdsdsd', '2023-04-30', '01:34:07 pm', ''),
(11, '1', '1234567890', 'sdsdsd', '2023-04-30', '01:33:06 pm', ''),
(15, '1', '1234567890', 'dddddddddddd', '2023-04-30', '06:59:05 pm', 'pending'),
(16, '5', '1234567890', '8787d8s7dfds df ', '2023-04-30', '07:22:21 pm', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `prod_regiter`
--

CREATE TABLE IF NOT EXISTS `prod_regiter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `vedio` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `ask` text COLLATE utf8_unicode_ci NOT NULL,
  `equity` text COLLATE utf8_unicode_ci NOT NULL,
  `loan` text COLLATE utf8_unicode_ci NOT NULL,
  `loan_text` text COLLATE utf8_unicode_ci NOT NULL,
  `cov_loan` text COLLATE utf8_unicode_ci NOT NULL,
  `partnership` text COLLATE utf8_unicode_ci NOT NULL,
  `part_text` text COLLATE utf8_unicode_ci NOT NULL,
  `sales` text COLLATE utf8_unicode_ci NOT NULL,
  `valuation` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `posted_by` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prod_regiter`
--

INSERT INTO `prod_regiter` (`id`, `title`, `short_desc`, `long_desc`, `vedio`, `img`, `ask`, `equity`, `loan`, `loan_text`, `cov_loan`, `partnership`, `part_text`, `sales`, `valuation`, `img2`, `img3`, `img4`, `date`, `time`, `posted_by`) VALUES
(1, 'dfgfdg', 'dffgdfg', 'dfgdg', '', '', '878787dfg', 'dfgdfg', 'y', 'dfgdfg', 'dfgdfg', 'y', 'dfgdfg', '54', '656565', '', '', '', '2023-04-29', '11:42:53 pm', ''),
(2, 'fghfghfgh', 'fgh', 'fghfgh', 'iUWdJBt66z.mp4', 'NLv659pAAS.png', 'sdfsdf', 'sdf', 'No', 'sdfsdfsdf', 'sdfsdfdf', 'Yes', 'sdfsdfsdf', '454', '54545454', 'I8yLnkGbUi.png', 'cYeCPtQnMw.png', 'HaMsg638wK.png', '2023-04-29', '11:55:40 pm', ''),
(3, 'fghfghfgh', 'fgh', 'fghfgh', '2iUVCrnXpd.mp4', 'BuBEhYYb0E.png', 'sdfsdf', 'sdf', 'No', 'sdfsdfsdf', 'sdfsdfdf', 'Yes', 'sdfsdfsdf', '454', '54545454', 'p2I7EwTtTv.png', 'viSj2GNOqe.png', 'oka2THdHZh.png', '2023-04-29', '11:57:49 pm', ''),
(4, 'aaaaaaaaaaaa', 'bbbbbbbbbbbb', 'ccccccccccccc', 'ylYDCXVh4V.png', 'Bfnck60wJo.png', 'nnnnnnnnnnnnn', 'gggggggggggggg', 'Yes', 'rrrrrrrrrrrrrr', 'ppppppppppppp', 'No', 'ghjgjghj', '55555555', '4545', 'gKzsBY271O.png', 'SLXkhcn8ZM.png', 'Mkcm7uEgRJ.png', '2023-04-30', '12:43:45 am', '1234567890'),
(5, 'aaaaaaaaaaaaa', 'bbbbbbbbbbbbbbb', 'vcccccccccccccccccc', 'teajw8u8I9.mp4', 'Woeq83IpMT.png', '1111111111', '22', 'Yes', 'AAAAAAAAAAAAAAA', '20022', 'Yes', 'ddddddddddddddddddd', '1540000', '222100', 'A3BfisOYNc.png', '7pBpLoDDsg.png', 'p0pTQ5kArZ.png', '2023-04-30', '07:22:01 pm', '1234567890');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
