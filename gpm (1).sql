-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 09:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `dsy`
--

CREATE TABLE `dsy` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `enrollment` varchar(255) NOT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `line1` varchar(255) DEFAULT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `taluka` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `parentname` varchar(255) DEFAULT NULL,
  `parentmobile` varchar(255) DEFAULT NULL,
  `yearselect` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `marks_obtained3` varchar(255) DEFAULT NULL,
  `marks_obtained4` varchar(255) DEFAULT NULL,
  `marks_out_of3` varchar(255) DEFAULT NULL,
  `marks_out_of4` varchar(255) DEFAULT NULL,
  `percentage3` varchar(255) DEFAULT NULL,
  `percentage4` varchar(255) DEFAULT NULL,
  `doc1` varchar(255) DEFAULT NULL,
  `doc2` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL,
  `sem3` varchar(255) DEFAULT NULL,
  `sem4` varchar(255) DEFAULT NULL,
  `redid` varchar(255) DEFAULT NULL,
  `payssname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `accname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gpl`
--

CREATE TABLE `gpl` (
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpl`
--

INSERT INTO `gpl` (`email`, `pass`) VALUES
('gpm23@gmail.com', 'gpm@23');

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `enroll` int(10) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`enroll`, `pass`) VALUES
(2001310204, '123abc'),
(2001310143, '123');

-- --------------------------------------------------------

--
-- Table structure for table `secondyear`
--

CREATE TABLE `secondyear` (
  `id` int(11) NOT NULL,
  `roll` int(11) DEFAULT NULL,
  `enrollment` varchar(255) NOT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `line1` varchar(255) DEFAULT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `taluka` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `parentname` varchar(255) DEFAULT NULL,
  `parentmobile` varchar(255) DEFAULT NULL,
  `yearselect` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `marks_obtained1` int(11) DEFAULT NULL,
  `marks_obtained2` int(11) DEFAULT NULL,
  `marks_out_of1` int(11) DEFAULT NULL,
  `marks_out_of2` int(11) DEFAULT NULL,
  `percentage1` decimal(5,2) DEFAULT NULL,
  `percentage2` decimal(5,2) DEFAULT NULL,
  `doc1` varchar(255) DEFAULT NULL,
  `doc2` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL,
  `sem1` varchar(255) DEFAULT NULL,
  `sem2` varchar(255) DEFAULT NULL,
  `refid` varchar(255) DEFAULT NULL,
  `payssname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `accname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondyear`
--

INSERT INTO `secondyear` (`id`, `roll`, `enrollment`, `branch`, `class`, `sname`, `fname`, `mname`, `gender`, `mobile`, `line1`, `line2`, `taluka`, `district`, `pincode`, `state`, `parentname`, `parentmobile`, `yearselect`, `photo`, `marks_obtained1`, `marks_obtained2`, `marks_out_of1`, `marks_out_of2`, `percentage1`, `percentage2`, `doc1`, `doc2`, `doc3`, `doc4`, `sem1`, `sem2`, `refid`, `payssname`, `category`, `accname`) VALUES
(72, 20302, '2001310111', 'computer engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', '', '', '', '', 'Practical23.pdf', 'Practical22.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', 'Altamsh Bairagdar'),
(71, 20302, '2001310112', 'computer engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', '', '', '', '', 'Practical23.pdf', 'Practical22.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', 'Altamsh Bairagdar'),
(73, 20302, '2001310113', 'mechanical engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', 'person.png', 'databaseandroid.pdf', 'databaseandroid.pdf', '124816121871240', 'person.png', 'scst', 'Altamsh Bairagdar'),
(67, 20302, '2001310140', 'computer engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', '', '', '', '', 'Practical23.pdf', 'Practical22.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', 'Altamsh Bairagdar'),
(65, 20302, '2001310141', 'medical Electronics', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'ayesha', '8459695900', 'Regular', 'android-994910_960_720.jpg', 99, 99, 100, 100, '99.00', '99.00', '', '', '', '', 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', ''),
(75, 20302, '2001310142', 'mechanical engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', '', 'databaseandroid.pdf', 'databaseandroid.pdf', '124816121871240', 'person.png', 'open', 'Altamsh Bairagdar'),
(58, 20302, '2001310143', 'computer engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', 'abc', 'maharashtra', 'ayesha', '84596959003', 'Regular', 'android-994910_960_720.jpg', 99, 99, 100, 100, '99.00', '99.00', '', '', '', NULL, 'Practical related questions 17 to 30.pdf', 'Practical related questions 17 to 30.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', ''),
(63, 20302, '2001310149', 'medical Electronics', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'ayesha', '8459695900', 'Regular', 'android-994910_960_720.jpg', 99, 99, 100, 100, '99.00', '99.00', 'EDE_Microproject_Om.pdf', 'Practical22.pdf', 'databaseandroid.pdf', 'Black and White Minimalist Simple Design Freelancer Resume.pdf', 'databaseandroid.pdf', 'Practical22.pdf', '124816121871240', 'android-994910_960_720.jpg', 'scst', ''),
(69, 20302, '2001310187', 'computer engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', '', '', '', '', 'Practical23.pdf', 'Practical22.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', 'Altamsh Bairagdar'),
(76, 20302, '2001366677', 'computer engineering', 'Second year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'ayesha', '8459695900', 'Regular', 'person.png', 99, 99, 100, 100, '99.00', '99.00', 'EDE_Microproject_Om.pdf', 'Practical related questions 17 to 30.pdf', 'Practical22.pdf', 'person.png', 'Practical22.pdf', 'Practical23.pdf', '124816121871240', 'person.png', 'scst', 'Altamsh Bairagdar');

-- --------------------------------------------------------

--
-- Table structure for table `thirdyear`
--

CREATE TABLE `thirdyear` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `enrollment` varchar(255) NOT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `line1` varchar(255) DEFAULT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `taluka` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `parentname` varchar(255) DEFAULT NULL,
  `parentmobile` varchar(255) DEFAULT NULL,
  `yearselect` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `marks_obtained1` varchar(255) DEFAULT NULL,
  `marks_obtained2` varchar(255) DEFAULT NULL,
  `marks_obtained3` varchar(255) DEFAULT NULL,
  `marks_obtained4` varchar(255) DEFAULT NULL,
  `marks_out_of1` varchar(255) DEFAULT NULL,
  `marks_out_of2` varchar(255) DEFAULT NULL,
  `marks_out_of3` varchar(255) DEFAULT NULL,
  `marks_out_of4` varchar(255) DEFAULT NULL,
  `percentage1` varchar(255) DEFAULT NULL,
  `percentage2` varchar(255) DEFAULT NULL,
  `percentage3` varchar(255) DEFAULT NULL,
  `percentage4` varchar(255) DEFAULT NULL,
  `doc1` varchar(255) DEFAULT NULL,
  `doc2` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL,
  `sem1` varchar(255) DEFAULT NULL,
  `sem2` varchar(255) DEFAULT NULL,
  `sem3` varchar(255) DEFAULT NULL,
  `sem4` varchar(255) DEFAULT NULL,
  `redid` varchar(255) DEFAULT NULL,
  `payssname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `accname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thirdyear`
--

INSERT INTO `thirdyear` (`id`, `roll`, `enrollment`, `branch`, `class`, `sname`, `fname`, `mname`, `gender`, `mobile`, `line1`, `line2`, `taluka`, `district`, `pincode`, `state`, `parentname`, `parentmobile`, `yearselect`, `photo`, `marks_obtained1`, `marks_obtained2`, `marks_obtained3`, `marks_obtained4`, `marks_out_of1`, `marks_out_of2`, `marks_out_of3`, `marks_out_of4`, `percentage1`, `percentage2`, `percentage3`, `percentage4`, `doc1`, `doc2`, `doc3`, `doc4`, `sem1`, `sem2`, `sem3`, `sem4`, `redid`, `payssname`, `category`, `accname`) VALUES
(68, '20302', '2001310143', 'mechanical engineering', 'Third year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'ayesha', '8459695900', 'Regular', 'android-994910_960_720.jpg', '99', '99', '99', '99', '100', '100', '100', '100', '97', '99', '99', '99', '', '', '', NULL, 'Practical23.pdf', 'Practical22.pdf', 'Practical22.pdf', 'databaseandroid.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', ''),
(73, '20302', '2001310148', 'computer engineering', 'Third year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'abc', '8459695900', 'Regular', 'android-994910_960_720.jpg', '99', '99', '99', '99', '100', '100', '100', '100', '99', '99', '99', '99', '', '', '', NULL, 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', 'EDE_Microproject_Om.pdf', 'Practical related questions 17 to 30.pdf', '124816121871240', 'android-994910_960_720.jpg', 'open', ''),
(74, '20302', '2001311923', 'civil engineering', 'Third year', 'bairagdar', 'altamsh', 'altaf', 'male', '8010208605', 'maishal ves panchshil ', 'maishal ves panchshil ', 'miraj', 'sangli', '416410', 'maharashtra', 'ayesha', '8459695900', 'Regular', 'person.png', '99', '99', '99', '99', '100', '100', '100', '100', '99.00', '99.00', '99.00', '99.00', '', '', '', '', 'Practical23.pdf', 'Practical22.pdf', 'Practical22.pdf', 'Practical23.pdf', '124816121871240', 'person.png', 'open', 'Altamsh Bairagdar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsy`
--
ALTER TABLE `dsy`
  ADD PRIMARY KEY (`enrollment`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gpl`
--
ALTER TABLE `gpl`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `secondyear`
--
ALTER TABLE `secondyear`
  ADD PRIMARY KEY (`enrollment`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `thirdyear`
--
ALTER TABLE `thirdyear`
  ADD PRIMARY KEY (`enrollment`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dsy`
--
ALTER TABLE `dsy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `secondyear`
--
ALTER TABLE `secondyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `thirdyear`
--
ALTER TABLE `thirdyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
