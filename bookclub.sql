-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2020 at 03:52 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_details`
--

CREATE TABLE `books_details` (
  `bid` int(11) NOT NULL,
  `bname` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `bcid` int(11) NOT NULL,
  `bauthor` varchar(500) NOT NULL,
  `bowner` varchar(500) NOT NULL,
  `boid` int(11) NOT NULL,
  `brating` int(11) DEFAULT '0',
  `bcondition` varchar(100) NOT NULL,
  `isAvailable` varchar(5) NOT NULL,
  `OrderCount` int(11) NOT NULL DEFAULT '0',
  `bratesum` int(11) NOT NULL DEFAULT '0',
  `bratecount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books_details`
--

INSERT INTO `books_details` (`bid`, `bname`, `category`, `bcid`, `bauthor`, `bowner`, `boid`, `brating`, `bcondition`, `isAvailable`, `OrderCount`, `bratesum`, `bratecount`) VALUES
(3, 'I too had a love story', 'Romance', 3, 'Ravinder Singh', 'Saiyam', 1, 3, 'Low', 'Yes', 3, 10, 3),
(4, 'A Walk to Remember', 'Romance', 3, 'Nicholas Sparks', 'Sagar', 5, 4, 'High', 'Yes', 6, 4, 1),
(5, 'Gone Girl', 'Thriller', 4, 'Gillian Flynn', 'Shashank', 6, 0, 'Medium', 'No', 0, 0, 0),
(6, 'The Da Vinci Code', 'Thriller', 4, 'Dan Brown', 'Shashank', 6, 0, 'High', 'Yes', 4, 0, 0),
(8, '3 Idiots', 'Science Fiction & Fantasy', 3, 'Chetan Bhagat', 'Saiyam', 3, 5, 'Medium', 'Yes', 2, 5, 1),
(9, 'One Good Deed', 'Thriller', 3, 'David Baldacci', 'Saiyam', 3, 0, 'Large', 'Yes', 1, 0, 0),
(10, 'The Perfect Murder', 'Thriller', 3, 'Ruskin Bond', 'Saiyam', 3, 0, 'Medium', 'Yes', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bname` varchar(500) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(500) NOT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `bid`, `bname`, `uid`, `status`, `rate`) VALUES
(1, 1, '3 Idiots', 2, 'complete', 5),
(2, 1, '3 Idiots', 2, 'complete', 3),
(3, 4, 'A Walk to Remember', 2, 'complete', 4),
(4, 4, 'A Walk to Remember', 2, 'complete', NULL),
(5, 6, 'The Da Vinci Code', 2, 'complete', NULL),
(6, 3, 'I too had a love story', 2, 'complete', NULL),
(7, 4, 'A Walk to Remember', 2, 'complete', NULL),
(8, 6, 'The Da Vinci Code', 2, 'complete', NULL),
(9, 3, 'I too had a love story', 2, 'complete', NULL),
(10, 4, 'A Walk to Remember', 2, 'complete', NULL),
(11, 3, 'I too had a love story', 2, 'complete', 3),
(12, 9, 'Ansi C', 2, 'complete', NULL),
(13, 10, 'VR', 2, 'complete', NULL),
(14, 8, '3 Idiots', 2, 'complete', NULL),
(15, 6, 'The Da Vinci Code', 2, 'complete', NULL),
(16, 8, '3 Idiots', 2, 'complete', NULL),
(17, 6, 'The Da Vinci Code', 2, 'complete', NULL),
(18, 4, 'A Walk to Remember', 2, 'complete', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ca_id`, `ca_name`) VALUES
(1, 'Thriller'),
(2, 'Mystery/Crime'),
(3, 'Science Fiction & Fantasy'),
(4, 'Horror'),
(5, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ucid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `msg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ucid`, `uid`, `uname`, `type`, `msg`) VALUES
(1, 2, 'Mudit', 'borrower', 'Hello there'),
(2, 6, 'Saiyam', 'lender', 'Hello, welcome to book club, how can we help you?'),
(3, 2, 'Mudit', 'borrower', 'Whats Up?'),
(4, 6, 'Saiyam', 'lender', 'Hello'),
(5, 1, 'Saiyam', 'lender', 'Hi there'),
(6, 1, 'Saiyam', 'lender', 'Hello, welcome to book club, how can we help you? Hello, welcome to book club, how can we help you? Hello, welcome to book club, how can we help you?'),
(7, 1, 'Saiyam', 'lender', 'Hello, welcome to book club, how can we help you?Hello, welcome to book club, how can we help you?Hello, welcome to book club, how can we help you?Hello, welcome to book club, how can we help you?Hello, welcome to book club, how can we help you?'),
(8, 1, 'Saiyam', 'lender', 'Hey there\r\n'),
(9, 1, 'Saiyam', 'lender', 'Lorem Ipsum'),
(10, 1, 'Saiyam', 'lender', 'Hey\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `club_details`
--

CREATE TABLE `club_details` (
  `cid` int(11) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `createdby` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `club_details`
--

INSERT INTO `club_details` (`cid`, `cname`, `createdby`, `category`) VALUES
(1, 'Book Fiction', 's@gmail.com', 'Science Fiction & Fantasy'),
(3, 'Book World', 'saiyam@gmail.com', 'Romance'),
(4, 'Thril Read', 'shashank@gmail.com', 'Thriller'),
(5, 'Book Share', 'swapnil@gmail.com', 'Mystery/crime');

-- --------------------------------------------------------

--
-- Table structure for table `lender_details`
--

CREATE TABLE `lender_details` (
  `lid` int(11) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `luid` int(11) NOT NULL,
  `lcid` varchar(500) NOT NULL,
  `l_location` varchar(500) NOT NULL,
  `l_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lender_details`
--

INSERT INTO `lender_details` (`lid`, `lname`, `luid`, `lcid`, `l_location`, `l_email`) VALUES
(1, 'Saiyam', 6, '1', 'Surat', 's@gmail.com'),
(3, 'Saiyam', 1, '3', 'bhatar', 'saiyam@gmail.com'),
(4, 'Sam', 7, '1', 'Surat', 'ss@gmail.com'),
(5, 'Sagar', 8, '3', 'City Light', 'sagar@gmail.com'),
(6, 'Shashank', 9, '4', 'Surat', 'shashank@gmail.com'),
(7, 'Sahil', 10, '3', 'Surat', 'sahil23@gmail.com'),
(8, 'pp', 11, '0', 'Surat', 'pp@gmail.com'),
(9, 'Mudit', 12, '0', 'Mumbai', 'mudit@gmail.com'),
(10, 'Swapnil', 13, '5', 'Mumbai', 'swapnil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `uid` int(11) NOT NULL,
  `uname` varchar(500) NOT NULL,
  `uage` int(11) NOT NULL,
  `unumber` int(11) NOT NULL,
  `uemail` varchar(500) NOT NULL,
  `upass` varchar(500) NOT NULL,
  `ulocation` varchar(500) NOT NULL,
  `urating` int(11) DEFAULT NULL,
  `utype` varchar(100) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`uid`, `uname`, `uage`, `unumber`, `uemail`, `upass`, `ulocation`, `urating`, `utype`, `category`) VALUES
(1, 'Saiyam', 20, 99999, 'saiyam@gmail.com', 'Hello', 'bhatar', NULL, 'lender', ''),
(2, 'Mudit', 29, 9888889, 'saiyamjain@gmail.com', 'Hello', '.ndf.sfd', NULL, 'borrower', ''),
(3, 'Saiyam', 29, 9888889, 'saiyams@gmail.com', 'Hello', '.ndf.sfd', NULL, 'borrower', ''),
(6, 'Saiyam', 30, 99988, 's@gmail.com', 'Hello', 'Surat', NULL, 'lender', ''),
(7, 'Sam', 19, 88776, 'ss@gmail.com', 'Hello', 'Surat', NULL, 'lender', ''),
(8, 'Sagar', 39, 9990008, 'sagar@gmail.com', 'Hello', 'City Light', NULL, 'lender', ''),
(9, 'Shashank', 23, 846000, 'shashank@gmail.com', 'Hello', 'Surat', NULL, 'lender', ''),
(10, 'Sahil', 20, 988989, 'sahil23@gmail.com', 'Hello', 'Surat', NULL, 'lender', ''),
(11, 'pp', 30, 9999, 'pp@gmail.com', 'Hello', 'Surat', NULL, 'lender', ''),
(12, 'Mudit', 69, 2147483647, 'mudit@gmail.com', 'Hello', 'City Light', NULL, 'lender', ''),
(13, 'Swapnil', 29, 2147483647, 'swapnil@gmail.com', 'Hello', 'Bhatar Road', NULL, 'lender', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_details`
--
ALTER TABLE `books_details`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ucid`);

--
-- Indexes for table `club_details`
--
ALTER TABLE `club_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `lender_details`
--
ALTER TABLE `lender_details`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_details`
--
ALTER TABLE `books_details`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ucid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `club_details`
--
ALTER TABLE `club_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lender_details`
--
ALTER TABLE `lender_details`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
