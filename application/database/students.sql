-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 10:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(3) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cdesc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `cdesc`) VALUES
('000', 'QQQ', 'Quando Quando Quando'),
('012', 'BFA', 'Bachelor of Fine Arts'),
('022', 'ABM', 'Auqnah Business Management'),
('037', 'BSIT', 'Bachelor of Science in Information Technology'),
('039', 'BSCS', 'Bachelor of Science in Computer Science'),
('088', 'BSC', 'Bachelor of Science in Chef');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `idno` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `idno`, `fname`, `lname`, `mname`, `course`, `sex`) VALUES
(1, '15-038-1', 'Geisher', 'Bernabezz', 'Gonzalo', 'BSCS', 'F'),
(2, '15-038-2', 'Audrey Noelle', 'Waje', 'Pabillaran', 'BSCS', 'F'),
(3, '15-038-3', 'Carlo', 'Abendanio', 'Consultado', 'BSIT', 'M'),
(5, '15-000-4', 'Sheira', 'Man-awit', 'Custodio', 'BFA', 'F'),
(6, '15-037-5', 'Samantha', 'Millos', 'Musa', 'BSIT', 'F'),
(18, '15-037-061', 'Gem', 'Gonzalo', 'Ganay', 'QQQ', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
