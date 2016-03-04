-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 04:58 AM
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
  `ps_id` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `username`, `password`, `Title`, `FirstName`, `MiddleName`, `LastName`, `Affiliation`, `Email`, `MailingAddress`, `City`, `ContactNumber`, `Fax`, `ps_id`) VALUES
(2, 'crenshaw', '9f079470c712a3dc83c065c30b4a9905', '', 'Cren Shaw', 'Shaw', 'Katarina', 'TCU', 'crenshaw@gmail.com', '', '', '', '', 5),
(7, 'jgab', '4e2524f20c7feeafba810cff09db51e3', 'Mr.', 'John Gabriel', 'Acosta', 'Bagacina', 'PUP', 'jgabagacina@gmail.com', 'Blk. 15 Lot 1 Herbs St. Ext. P.2-A, New Lower Bicutan', 'Taguig City', '123456', '123', 1),
(20, 'JournalManager', 'ff1de526939100c409efe7fc299e46ab', 'Prof.', 'Ching', 'Chong', 'Chang', '', 'Chingchongchang@gmail.com', '', '', '', '', 2),
(21, 'Reviewer', 'e1ff3e480ab94b0cee11fcf3743ebc70', '', 'Abdul', 'Jack', 'Cool', '', 'abduljackcool@gmail.com', '', '', '', '', 3),
(22, 'Author', '02bd92faa38aaa6cc0ea75e59937a1ef', '', 'Sasha', 'Sushi', 'Gray', '', 'sasha@gmail.com', '', '', '', '', 4),
(23, 'pkpuryon', 'e10adc3949ba59abbe56e057f20f883e', '', 'Kenneth', 'Bading', 'Rufino', '', 'pkpuryon@gmail.com', '', '', '', '', 3),
(24, 'Patrick', '6c84cbd30cf9350a990bad2bcc1bec5f', '', 'Patrick', 'Stoned', 'Star', '', 'Patrickstonedstar@gmail.com', '', '', '', '', 5),
(29, 'Welvs', 'e10adc3949ba59abbe56e057f20f883e', 'Professor', 'Welvin', 'Olamit', 'Medina', 'PUP', 'welvin@youjizz.com', '', '', '', '', 5),
(30, 'kennethchupa', '15106e80bdce85b7a08be2cdb40de737', 'Ms.', 'Kenneth', 'Bading', 'Rufino', 'TCU', 'Kennethchupa@gmail.com', '', '', '', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_privilege`
--
ALTER TABLE `tbl_privilege`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_privilege`
--
ALTER TABLE `tbl_privilege`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
