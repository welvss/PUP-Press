-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 04:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `article_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `article_title` varchar(500) NOT NULL,
  `abstract` varchar(60000) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pending` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `users_id`, `article_title`, `abstract`, `file`, `journal_id`, `date`, `pending`) VALUES
(1, 1, 'Boboka', 'Tangamo', './articles/1298756df77aacbbc0.pdf', 4, '2016-03-09 09:08:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_journal`
--

CREATE TABLE `tbl_journal` (
  `journal_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `journal_title` varchar(200) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `path` varchar(50) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_journal`
--

INSERT INTO `tbl_journal` (`journal_id`, `users_id`, `journal_title`, `description`, `path`, `visibility`) VALUES
(1, 1, 'YouJizz', 'Fuck and jizzed', 'Youjizz', 0),
(3, 1, 'Trip To Outer Space', 'Smoke the weed. Everyday.  Don''t smoke the seed, no way.', '420', 1),
(4, 1, 'A Thousand MIles Away', 'Para kang bobo', 'PATH', 1),
(5, 1, 'Like A Barbarian State', 'This journal is al about kenneth the barbarian', 'Barbs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privilege`
--

CREATE TABLE `tbl_privilege` (
  `ps_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_privilege`
--

INSERT INTO `tbl_privilege` (`ps_id`, `description`) VALUES
(1, 'Administrator'),
(2, 'Journal Manager'),
(3, 'Reviewer'),
(4, 'Author'),
(5, 'Reader');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `review` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `pending` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `subject`, `review`, `users_id`, `article_id`, `journal_id`, `pending`) VALUES
(1, 'Bobo ', 'mo', 1, 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Affiliation` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MailingAddress` varchar(100) NOT NULL,
  `City` text NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `ps_id` int(11) NOT NULL DEFAULT '5',
  `img` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `username`, `password`, `Title`, `FirstName`, `MiddleName`, `LastName`, `Affiliation`, `Email`, `MailingAddress`, `City`, `ContactNumber`, `Fax`, `ps_id`, `img`, `color`) VALUES
(1, 'jgabagacina', '4e2524f20c7feeafba810cff09db51e3', 'Dr.', 'John Gabriel', 'Acosta', 'Bagacina', 'PUP', 'jgabagacina@gmail.com', 'Blk. 15 Lot 1 Herbs St. Ext. P.2-A, New Lower Bicutan', 'Taguig City', '09159698204', 'Faxyou', 1, './images/2070556dd8f7e8ad91.png', '#A98320'),
(2, 'pkfurion', '23006289dad2a6b81f584528372820c4', 'Prof.', 'Kenneth', 'Bonagua', 'Rufino', 'PUP', 'pkpuryon@gmail.com', '', '', '', '', 5, '', '#404040'),
(3, 'welvss', 'a22dac84941237ebf43fe39302fe3cf3', 'Rev.', 'Welvin', 'Olamit', 'Medina', 'PUP', 'welvin@gmail.com', '', '', '', '', 5, '', '#404040');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tbl_journal`
--
ALTER TABLE `tbl_journal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `tbl_privilege`
--
ALTER TABLE `tbl_privilege`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_journal`
--
ALTER TABLE `tbl_journal`
  MODIFY `journal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_privilege`
--
ALTER TABLE `tbl_privilege`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
