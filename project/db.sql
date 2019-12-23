-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 03:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` varchar(30) NOT NULL,
  `videoid` varchar(30) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `posterid` varchar(30) NOT NULL,
  `postedby` varchar(30) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `videoid`, `comment`, `posterid`, `postedby`, `status`) VALUES
('C-1', 'V-1', 'nice', 'U-3', 'Yu', 1),
('C-2', 'V-1', 'niceeeee', 'U-5', 'Asif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `type`) VALUES
('2', '123', 'Admin'),
('U-2', '8989', 'Admin'),
('U-3', '123', 'Admin'),
('U-4', '111', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `myblob`
--

CREATE TABLE `myblob` (
  `id` varchar(11) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_ID` varchar(30) NOT NULL,
  `notes_path` varchar(30) NOT NULL,
  `poster_id` varchar(30) NOT NULL,
  `poster_name` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_ID`, `notes_path`, `poster_id`, `poster_name`, `Subject`, `status`) VALUES
('N-1', '/project/notes/DHCP.docx', 'U-7', 'Ariana', 'ACN, DHCP ', 1),
('N-2', '/project/notes/DSP.pdf', 'U-3', 'Anis', 'Dec, DIgital Signal', 1),
('N-4', '/project/notes/555.pdf', 'U-9', 'Hridoy', 'Dec,timer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` varchar(30) NOT NULL,
  `poster_type` varchar(30) NOT NULL,
  `poster_name` varchar(30) NOT NULL,
  `notice_text` varchar(30) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `poster_type`, `poster_name`, `notice_text`, `status`) VALUES
('13', 'Teacher', 'yoyo', 'hioo', 1),
('77', 'teacher', 'lol', 'ooh', 1),
('9999', 'a', 'aaa', 'aaa', 1),
('Notice2', 'Admin', 'abi', 'fuuu', 0),
('Notice4', 'Admin', 'Anis', ' Hello', 1),
('Notice6', 'Student', '', ' urgent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `onlinevideo`
--

CREATE TABLE `onlinevideo` (
  `videoid` varchar(30) NOT NULL,
  `posterid` varchar(30) NOT NULL,
  `postedby` varchar(30) NOT NULL,
  `videolink` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinevideo`
--

INSERT INTO `onlinevideo` (`videoid`, `posterid`, `postedby`, `videolink`, `description`) VALUES
('V-1', 'U-3', 'Anis', 'project/onlinevideo/Physics.mp4', 'Physics =, HSC'),
('V-2', 'U-4', 'Fahad', 'project/onlinevideo/AnimalKingdom.mp4', 'class 8, Animal kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(55) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `assistance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `designation`, `email`, `courses`, `assistance`) VALUES
('bob', 'Assistant lecturer,university X', 'bob@gmail.com', 'java, c++', '10am-1pm'),
('bob', 'Assistant lecturer,university X', 'bob@gmail.com', 'java, c++', '10am-1pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`) VALUES
('2', '', 'abc@yahoo.com', 'Female'),
('U-2', 'sadia', 'sadia@yahoo.com', 'Female'),
('U-3', 'Anis', 'hridoyrahman57@gmail.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `onlinevideo`
--
ALTER TABLE `onlinevideo`
  ADD PRIMARY KEY (`videoid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
