-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 07:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`) VALUES
('admin', 'Abhijit Das', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `faculty_id`, `comment`) VALUES
(1, '5fffefc28686f', 'Amazing Faculty'),
(7, '646e979de252a', 'Very Good'),
(8, '646e97cf8cc10', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_id`, `name`, `s1`, `s2`) VALUES
(23, '646f5005d3d06', 'Abhijit Das', 'java', 'OOPS'),
(10, '646e66690a83a', 'Abhijit Das', 'java', 'python'),
(21, '646e97cf8cc10', 'Soma Chaterjee', 'Image Processing', 'OS'),
(20, '646e979de252a', 'Soumen Santra', 'JAVA', 'OOPS'),
(22, '646e97ebc7351', 'Amlan Ghose', 'UML', 'MATH');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(255) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `percent` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `faculty_id`, `name`, `subject`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `total`, `percent`, `roll`) VALUES
(12, '5fffefc28686f', 'Ashish Vegan', 'PHP', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '50', '100', '5'),
(13, '5fffefc28686f', 'Ashish Vegan', 'PHP', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '50', '100', '6'),
(14, '5fffefc28686f', 'Ashish Vegan', 'JAVA', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '50', '100', '10'),
(15, '5fffefc28686f', 'Ashish Vegan', 'JAVA', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '40', '80', '5'),
(16, '646e66690a83a', 'Abhijit Das', 'java', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '40', '80', '10'),
(17, '646e93d59b756', 'fsdgfsd', 'fdgdfg', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '20', '40', '10'),
(18, '646e979de252a', 'Soumen Santra', 'JAVA', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '50', '100', '5'),
(19, '646e97cf8cc10', 'Soma Chaterjee', 'Image Processing', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '50', '100', '9');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, 'Description of course objectives &amp; assignments', 'Communication of ideas &amp; information', 'Expression of expectations for performance', 'Availability to assist students in or out of class', 'Respect or concern for students', 'Stimulation of interest in course', 'Facilitation of learning', 'Enthusiasm for the subject', 'Encourage students to think independently, creatively &amp; critically', 'Overall rating');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_id_3` (`faculty_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
