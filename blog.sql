-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 08:37 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `userName`, `password`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, 'sdfds', 'sdsf'),
(10, 'dsfdg', 'fdgfd'),
(11, 'dgfdg', 'dfgdfg'),
(12, '', ''),
(13, '', ''),
(14, 'dfgdfg', 'dfgdfgf'),
(15, 'niru', '8965'),
(16, 'niru', '8965'),
(17, '', ''),
(18, 'niru', '8965'),
(19, 'maruf', '1254'),
(20, 'maruf', '1254'),
(21, 'maruf', '1254'),
(22, 'niru', '8965'),
(23, 'niru', '8965'),
(24, 'maruf', '5643'),
(27, 'sdfsdf', 'sdfsdfsdf'),
(28, 'niru', '8965'),
(29, 'kljklgf', 'jljdkfg'),
(30, 'jkdgkldf', '49869'),
(31, 'djgkldfklg', '497849454'),
(32, 'djgkldfklg', '497849454'),
(33, 'tomy', '569823'),
(34, 'sfsdf', 'sdfsdfsd'),
(35, 'ereoruo', 'sdfjsdfe'),
(36, 'niru', '8965'),
(37, 'kldkldfg', '30590485htg'),
(38, 'jhkdfghkf', 'kdgjkf'),
(39, 'jhldgjdf', 'dfjkljgldfkg'),
(40, 'sfsdf', 'sdfsdfsd'),
(41, 'sfsdf', 'sdfsdfsd'),
(42, 'tomy', ''),
(43, 'sfsdf', 'sdfsdfsd'),
(44, 'sfsdf', 'sdfsdfsd'),
(45, 'sfsdf', 'sdfsdfsd'),
(46, 'sfsdf', 'sdfsdfsd'),
(47, 'sfsdf', 'sdfsdfsd'),
(48, '', ''),
(49, 'sfsdf', 'sdfsdfsd'),
(50, 'sfsdf', 'sdfsdfsd'),
(51, 'niru', '8965');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `p_id` int(10) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `categoryId` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2400) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `userId`, `categoryId`, `title`, `content`, `createDate`) VALUES
(3, '', '', 'kjkff', 'nffjkjkfkjfkfv nfkjfkf', '2015-09-18 17:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `country` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfBirth` varchar(15) NOT NULL,
  `regiTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `fullname`, `userName`, `email`, `password`, `country`, `gender`, `dateOfBirth`, `regiTime`) VALUES
(1, 'Nirupam', 'niru', 'niru.nstu@gmail.com', '8965', 'Bangladesh', 'Male', '', '2015-09-17 02:05:29'),
(2, 'Shamim', 'sam', 'sam23@gmail.com', '372794', 'India', 'Female', '', '2015-09-17 03:19:02'),
(3, 'Mahfuj', 'mahfuj', 'mahfu23@gmail.com', '4355', 'India', 'Male', '', '2015-09-17 03:20:06'),
(4, 'Mahfuj', 'mahfuj', 'mahfu23@gmail.com', '4355', 'India', 'Male', '', '2015-09-17 03:21:13'),
(5, 'Mahfuj', 'mahfuj', 'mahfu23@gmail.com', '4355', 'India', 'Male', '89-11-1990', '2015-09-17 03:21:50'),
(6, 'asdd', 'fsrf', 'juyi', 'yujh', 'hgjhj', 'ghjhgj', 'hjh', '2015-09-17 04:15:13'),
(8, 'jjkhsjkdf', 'dgdgdfg', 'dfgdfgd', 'dfgdfg', 'dfgdf', 'dfgdfg', 'dfgdfgd', '2015-09-17 13:01:48'),
(9, 'My Full Name', 'malcom87', 'malcom87@gmail.com', '123456', 'Bangladesh', 'male', '12.06.15', '2015-09-17 17:40:00'),
(10, '', 'KMH Russell', 'kmhrussell17@gmail.com', '', 'Bangladesh', '', '', '2015-09-17 17:41:26'),
(11, 'My Full Name', 'KMH Russell', 'kmhrasel17@yahoo.com', '123456', 'Bangladesh', 'male', '12.06.15', '2015-09-17 18:38:56'),
(14, 'My Full Name', '01911922446', 'kmsohel039@gmail.com', '123456', 'BD', 'male', '12.06.15', '2015-09-18 04:32:33'),
(15, '', '', '', '', '', 'male', '', '2015-09-18 04:32:44'),
(16, 'My Full Name', 'Gobindo', 'kmhrussell17@gmail.com', '123456', 'BY', 'female', '12.06.15', '2015-09-18 04:41:46'),
(17, '', '', '', '', '', 'male', '', '2015-09-18 09:05:29'),
(18, 'kljglkf', 'mapping', 'dfgdfbfgbfb', 'dfgdfgdf', 'BD', 'male', '23 12 2014', '2015-09-18 13:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `reg_table`
--

CREATE TABLE IF NOT EXISTS `reg_table` (
  `id` int(11) NOT NULL,
  `fullName` char(30) NOT NULL,
  `userName` char(20) NOT NULL,
  `email` char(30) NOT NULL,
  `password` char(30) NOT NULL,
  `country` char(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `reg_table`
--
ALTER TABLE `reg_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `reg_table`
--
ALTER TABLE `reg_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
