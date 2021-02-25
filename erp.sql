-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 12:01 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `2it4`
--

CREATE TABLE `2it4` (
  `day__lectures` varchar(15) DEFAULT NULL,
  `lec1` varchar(15) DEFAULT NULL,
  `lec2` varchar(15) DEFAULT NULL,
  `lec3` varchar(15) DEFAULT NULL,
  `lec4` varchar(15) DEFAULT NULL,
  `lec5` varchar(15) DEFAULT NULL,
  `lec6` varchar(15) DEFAULT NULL,
  `lec7` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2it4`
--

INSERT INTO `2it4` (`day__lectures`, `lec1`, `lec2`, `lec3`, `lec4`, `lec5`, `lec6`, `lec7`) VALUES
('Monday', 'OS', 'DBMS', 'CS', 'CA', 'EEES', 'PT', 'PT'),
('Tuesday', 'OS', 'DBMS', 'CS', 'CA', 'EEES', 'OS', 'OS'),
('Wednesday', 'OS', 'DBMS', 'CS', 'CA', 'EEES', '.NET', '.NET'),
('Thursday', 'OS', 'DBMS', 'CS', 'CA', 'EEES', 'CS', 'CS'),
('Friday', 'OS', 'DBMS', 'CS', 'CA', 'EEES', 'DBMS', 'DBMS'),
('Saturday', 'OS', 'DBMS', 'CS', 'CA', 'EEES', 'FREE', 'FREE');

-- --------------------------------------------------------

--
-- Table structure for table `bookdata`
--

CREATE TABLE `bookdata` (
  `book_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `price` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdata`
--

INSERT INTO `bookdata` (`book_id`, `name`, `author`, `price`) VALUES
(1001, 'Let us C', 'Luke Wright', 600),
(1002, 'Let us C++', 'David Guptill', 700),
(1003, 'Java', 'James Gosling', 500),
(1004, 'PHP', 'Rod Tucker', 300),
(1005, 'HTML5 CSS3', 'Mark Ntini', 900),
(1006, 'JavaScript', 'Brendan Eich', 600),
(1007, 'Python', 'James Anderson', 700);

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`user_id`, `password`, `status`, `name`) VALUES
('Pavan', 'Action12@on', 'Admin', 'Pavan Jain');

-- --------------------------------------------------------

--
-- Table structure for table `facultydata`
--

CREATE TABLE `facultydata` (
  `id` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `year` int(2) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `subject1` varchar(20) DEFAULT NULL,
  `subject2` varchar(20) DEFAULT NULL,
  `subject3` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultydata`
--

INSERT INTO `facultydata` (`id`, `name`, `course`, `year`, `branch`, `mobile`, `email`, `password`, `subject1`, `subject2`, `subject3`) VALUES
('IT1001', 'Sarthhak Asati', 'BE', 3, 'IT', '1234569875', 'sarthak@gmail.com', '123', 'CA', 'OS', 'CGMM'),
('IT1002', 'Sanjay Gupta', 'BE', 2, 'IT', '123567895', 'sanjay@gmail.com', '123', 'OS', 'DBMS', 'CS'),
('IT1003', 'Poornima Jain', 'BE', 2, 'IT', '1234568695', 'pjain@gmail.com', '123', 'EEES', 'CS', 'OOPM'),
('IT1004', 'Garima Chouhan', 'BE', 3, 'IT', '1234569878', 'garima@gmail.com', '123', 'OS', 'DBMS', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `librariandata`
--

CREATE TABLE `librariandata` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librariandata`
--

INSERT INTO `librariandata` (`id`, `name`, `mobile`, `email`, `password`) VALUES
('Oriental001', 'Seema Choudhary', '526354521', 'seema@gmail.com', '123'),
('Oriental002', 'Khushbu Singh', '9856895642', 'fragnance@gmail.com', '123'),
('Oriental003', 'Sumit Vyas', '23456651246', 'sumit@gmail.com', '123'),
('Oriental004', 'Raghav Agrawal', '5263654123', 'raghav@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `enrollment` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `year` int(2) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`enrollment`, `name`, `course`, `year`, `branch`, `mobile`, `email`, `password`, `semester`) VALUES
('0105IT161001', 'Aakash Nougaria', 'BE', 2, 'IT', '1234569875', 'nougaria@gmail.com', '123', 4),
('0105IT161002', 'Aanchal Singh', 'BE', 2, 'IT', '9865895689', 'singh@gmail.com', '123', 4),
('0105IT161003', 'Abhay Gupta', 'BE', 2, 'IT', '1234569875', 'gupta@gmail.com', '123', 4),
('0105IT161004', 'Aditi Gupta', 'BE', 2, 'IT', '9865895687', 'aditi@gmail.com', '123', 4),
('0105IT161005', 'Aditya Choudhary', 'BE', 2, 'IT', '2536521456', 'choudhary@gmail.com', '123', 4),
('0105IT161006', 'Aditya Manjhi', 'BE', 2, 'IT', '9865895689', 'manjhi@gmail.com', '123', 4),
('0105IT161007', 'Aditya Tripathi', 'BE', 2, 'IT', '2356451246', 'tripathi@gmail.com', '123', 4),
('0105IT161008', 'Aman Hayaran', 'BE', 2, 'IT', '9865895689', 'hayaran@gmail.com', '123', 4),
('0105IT161009', 'Aman Sharma', 'BE', 2, 'IT', '9865895689', 'sharma@gmail.com', '123', 4),
('0105IT161010', 'Amrish Patidar', 'BE', 2, 'IT', '2356451246', 'patidar@gmail.com', '123', 4),
('0105IT161064', 'Pavan Jain', 'BE', 2, 'IT', '8349312393', '013pavanjain@gmail.com', '123', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdata`
--
ALTER TABLE `bookdata`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `facultydata`
--
ALTER TABLE `facultydata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librariandata`
--
ALTER TABLE `librariandata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`enrollment`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
