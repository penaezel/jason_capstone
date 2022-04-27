-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 08:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `ay`
--

CREATE TABLE `ay` (
  `AY_ID` int(11) NOT NULL,
  `ACADYR` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_ID` int(11) NOT NULL,
  `CLASS_CODE` varchar(30) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` varchar(30) NOT NULL DEFAULT 'NONE',
  `SECTION` varchar(30) NOT NULL DEFAULT 'NONE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_CODE`, `SUBJ_ID`, `INST_ID`, `SYID`, `AY`, `DAY`, `C_TIME`, `IDNO`, `ROOM`, `SECTION`) VALUES
(13, 'wr', 484, 8, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(14, 'd', 485, 8, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(15, 'FIl110', 486, 9, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(16, 'English11', 487, 9, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(17, 'Mapeh-1', 490, 10, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(18, 'Hist10', 489, 10, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(19, 'English11', 492, 10, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(20, 'FIl110', 493, 10, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(21, 'Engl 111', 497, 10, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(22, 'Hist 110', 498, 10, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(23, 'Hums 120', 578, 9, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(24, 'STS 120', 579, 9, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(25, 'Soc Sci 120', 580, 9, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(33, 'Soc Sci 120', 631, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(34, 'ITE 111', 680, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(35, 'ITE 112', 681, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(36, 'SOCSCI 110', 682, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(37, 'HIST 110', 683, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(38, 'LIT 110', 687, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(39, 'MATH 110', 688, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(40, 'FIL 110', 689, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(41, 'PE 1', 690, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(42, 'NSTP 1', 691, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(43, 'ITE121', 692, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(44, 'ITE 122', 693, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(45, 'ITE 123', 694, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(46, 'ITM 120', 695, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(47, 'ENGL 120', 696, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(48, 'HUMS 120', 697, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(49, 'HUMS 120', 698, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(50, 'HUMS 120', 699, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(51, 'HUMS 120', 700, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(52, 'FIL 120', 701, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(53, 'PE 2', 702, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(54, 'NSTP 2', 703, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(55, 'ITE 211', 704, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(56, 'ITE 212', 705, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(57, 'ITE 213', 706, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(58, 'ITM 210', 707, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(59, 'ITM 211', 708, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(60, 'SOCSCI 210', 709, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(61, 'SSP 210', 710, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(62, 'MST 210', 711, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(63, 'PE 3', 712, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(64, 'ITE 220', 713, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(65, 'ITE 221', 714, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(66, 'ITE 222', 715, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(67, 'ITE 223', 716, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(68, 'ITE 224', 717, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(69, 'ITM 220', 718, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(70, 'RIZAL', 719, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(71, 'STS 120', 720, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(72, 'PE 4', 721, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(73, 'ITE 310', 722, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(74, 'ITE 311', 723, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(75, 'ITE 312', 724, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(76, 'AH 310', 725, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(77, 'ENGL 310', 726, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(78, 'MATH 310', 727, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(79, 'ITE 320', 728, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(80, 'ITE 321', 729, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(81, 'ITE 322', 730, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(82, 'ITM 320', 731, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(83, 'Electives in Tech.', 732, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(84, 'ENGL 320', 733, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(85, 'ITE 400', 734, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(86, 'ITE 411', 735, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(87, 'ITE 412', 736, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(88, 'ITM 410', 737, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(89, 'ITE 420', 738, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(90, 'ITE 421', 739, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(91, 'ITE 422', 740, 13, 0, '', 'NONE', 'NONE', 0, 'NONE', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_LEVEL` int(11) NOT NULL DEFAULT 1,
  `COURSE_MAJOR` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_LEVEL`, `COURSE_MAJOR`, `COURSE_DESC`, `DEPT_ID`) VALUES
(61, 'BSIT', 1, 'None', 'BSIT', 6),
(62, 'BSHM', 1, 'None', 'BSHM', 7),
(63, 'BSBA-FM', 1, 'None', 'Bachelor of Science in Business Administration Major in Financial Management', 8),
(64, 'BSED-Filipino', 1, 'None', 'Bachelor of Secondary Education Major in Filipino', 8),
(68, 'BSED-MAPEH', 1, 'None', 'Bachelor of  Science Elementary  Education Major In Mapeh ', 18),
(70, 'BEED', 1, 'None', 'Bachelor in Elementary Education', 16);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`) VALUES
(13, 'BSIT', 'Bachelor of Science in Information Technology'),
(14, 'BSBA', 'Bachelor of Science in Business Administration'),
(16, 'BEED', 'Bachelor of Elementary Education'),
(17, 'BSHM', 'Bachelor of Science in Hospitality Management'),
(18, 'BSED MAPEH', 'Bachelor of Elementary Education Major in Mapeh');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(30) NOT NULL,
  `FIRST` int(11) NOT NULL,
  `SECOND` int(11) NOT NULL,
  `THIRD` int(11) NOT NULL,
  `FOURTH` int(11) NOT NULL,
  `AVE` float NOT NULL,
  `DAY` varchar(30) NOT NULL,
  `G_TIME` time NOT NULL,
  `ROOM` varchar(30) NOT NULL,
  `REMARKS` varchar(30) NOT NULL DEFAULT 'None',
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`, `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`) VALUES
(57, 12, 484, 8, 12, 0, 0, 0, 0, 3.1, 'NONE', '00:00:00', '', 'Passed', ''),
(58, 12, 485, 0, 14, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(62, 9, 486, 0, 15, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(63, 9, 487, 0, 15, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(78, 5, 494, 0, 20, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(80, 5, 489, 0, 17, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(82, 5, 492, 0, 17, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(83, 5, 496, 0, 20, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(84, 123, 497, 10, 22, 0, 0, 0, 0, 1, 'NONE', '00:00:00', '', 'Passed', ''),
(85, 123, 498, 10, 22, 0, 0, 0, 0, 2, 'NONE', '00:00:00', '', 'Passed', ''),
(86, 121, 586, 0, 23, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(87, 121, 587, 0, 23, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(88, 121, 588, 11, 23, 0, 0, 0, 0, 4, 'NONE', '00:00:00', '', 'Failed', ''),
(89, 121, 589, 0, 23, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(90, 121, 590, 0, 23, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(91, 121, 591, 0, 23, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(92, 121, 592, 0, 23, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(93, 123, 510, 0, 25, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(94, 123, 511, 0, 25, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(95, 123, 512, 0, 25, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(96, 121, 497, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(97, 121, 498, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(98, 121, 499, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(99, 121, 500, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(100, 121, 501, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(101, 121, 502, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(102, 121, 503, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(103, 121, 504, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(104, 121, 505, 0, 26, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(105, 121, 516, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(106, 121, 506, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(107, 121, 507, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(108, 121, 508, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(109, 121, 509, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(110, 121, 510, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(111, 121, 511, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(112, 121, 512, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(113, 121, 513, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(114, 121, 514, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(115, 121, 515, 0, 27, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(116, 1235, 680, 13, 35, 0, 0, 0, 0, 1, 'NONE', '00:00:00', '', 'Passed', ''),
(117, 1235, 681, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(118, 1235, 682, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(119, 1235, 683, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(120, 1235, 687, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(121, 1235, 688, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(122, 1235, 689, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(123, 1235, 690, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(124, 1235, 691, 0, 35, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(125, 12301, 680, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(126, 12301, 681, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(127, 12301, 682, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(128, 12301, 683, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(129, 12301, 687, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(130, 12301, 688, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(131, 12301, 689, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(132, 12301, 690, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(133, 12301, 691, 0, 39, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(134, 12301, 631, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(135, 12301, 692, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(136, 12301, 693, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(137, 12301, 694, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(138, 12301, 695, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(139, 12301, 696, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(143, 12301, 700, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(144, 12301, 701, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(145, 12301, 702, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(146, 12301, 703, 0, 40, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(147, 300, 680, 13, 47, 0, 0, 0, 0, 3, 'NONE', '00:00:00', '', 'Passed', ''),
(148, 300, 681, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(149, 300, 682, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(150, 300, 683, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(151, 300, 687, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(152, 300, 688, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(153, 300, 689, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(154, 300, 690, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(155, 300, 691, 0, 47, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(156, 300, 735, 0, 48, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(157, 300, 736, 0, 48, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(158, 300, 737, 0, 48, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(159, 300, 631, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(160, 300, 692, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(161, 300, 693, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(162, 300, 694, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(163, 300, 695, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(164, 300, 696, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(168, 300, 700, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(169, 300, 701, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(170, 300, 702, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(171, 300, 703, 0, 49, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(174, 400, 680, 13, 53, 0, 0, 0, 0, 2, 'NONE', '00:00:00', '', 'Passed', ''),
(175, 400, 681, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(176, 400, 682, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(177, 400, 683, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(178, 400, 687, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(179, 400, 688, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(180, 400, 689, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(181, 400, 690, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', ''),
(182, 400, 691, 0, 53, 0, 0, 0, 0, 0, 'NONE', '00:00:00', '', 'NONE', '');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `INST_ID` int(30) NOT NULL,
  `INST_FULLNAME` varchar(255) NOT NULL,
  `INST_ADDRESS` varchar(255) NOT NULL,
  `INST_SEX` varchar(20) NOT NULL DEFAULT 'Male',
  `INST_STATUS` varchar(20) NOT NULL DEFAULT 'Single',
  `SPECIALIZATION` text NOT NULL,
  `INST_EMAIL` varchar(255) NOT NULL,
  `EMPLOYMENT_STATUS` varchar(40) NOT NULL DEFAULT 'Probationary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`INST_ID`, `INST_FULLNAME`, `INST_ADDRESS`, `INST_SEX`, `INST_STATUS`, `SPECIALIZATION`, `INST_EMAIL`, `EMPLOYMENT_STATUS`) VALUES
(13, 'Tarra Kristine', 'BSIT', 'F', 'Single', 'Encoder', 'misstarra@gmailcom', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `YR_ID` int(11) NOT NULL,
  `LEVEL` varchar(30) NOT NULL,
  `LEVEL_DESCRIPTION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `MAJOR_ID` int(11) NOT NULL,
  `MAJOR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `PHOTO_ID` int(11) NOT NULL,
  `FILENAME` text NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `SIZE` int(30) NOT NULL,
  `CAPTION` varchar(255) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `PRIMARY` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_ID` int(11) NOT NULL,
  `ROOM_NAME` varchar(30) NOT NULL,
  `ROOM_DESC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ROOM_ID`, `ROOM_NAME`, `ROOM_DESC`) VALUES
(5, 'zx', 's');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr`
--

CREATE TABLE `schoolyr` (
  `SYID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `IDNO` int(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL,
  `DATE_ENROLLED` datetime NOT NULL,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New',
  `YEAR_LEVEL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyr`
--

INSERT INTO `schoolyr` (`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`, `YEAR_LEVEL`) VALUES
(14, '2021-2022', 'Second', 61, 12, 'ENROLLED', '2021-12-10 08:58:45', '0000-00-00 00:00:00', 'New', 1),
(15, '2021-2022', 'First', 61, 9, 'ENROLLED', '2021-12-11 05:50:58', '0000-00-00 00:00:00', 'New', 4),
(16, '2021-2022', 'Second', 61, 9, 'ENROLLED', '2021-12-11 05:57:04', '0000-00-00 00:00:00', 'New', 4),
(17, '2021-2022', 'First', 61, 5, 'ENROLLED', '2021-12-11 06:46:45', '0000-00-00 00:00:00', 'New', 1),
(20, '2022-2023', 'Second', 61, 5, 'ENROLLED', '2022-02-12 21:05:45', '0000-00-00 00:00:00', 'New', 1),
(22, '2022-2023', 'First', 62, 123, 'ENROLLED', '2022-03-04 06:19:28', '0000-00-00 00:00:00', 'New', 1),
(25, '2022-2023', 'Second', 62, 123, 'ENROLLED', '2022-03-05 07:05:53', '0000-00-00 00:00:00', 'New', 3),
(26, '2022-2023', 'First', 62, 121, 'ENROLLED', '2022-03-26 21:56:57', '0000-00-00 00:00:00', 'New', 1),
(27, '2022-2023', 'Second', 62, 121, 'ENROLLED', '2022-03-26 21:57:21', '0000-00-00 00:00:00', 'New', 1),
(28, '2022-2023', 'First', 62, 121, 'ENROLLED', '2022-03-26 21:57:35', '0000-00-00 00:00:00', 'New', 2),
(29, '2022-2023', 'Second', 62, 121, 'ENROLLED', '2022-03-26 21:57:47', '0000-00-00 00:00:00', 'New', 2),
(30, '2022-2023', 'First', 62, 121, 'ENROLLED', '2022-03-26 21:57:56', '0000-00-00 00:00:00', 'New', 3),
(31, '2022-2023', 'Second', 62, 121, 'ENROLLED', '2022-03-26 21:58:06', '0000-00-00 00:00:00', 'New', 3),
(33, '2022-2023', 'First', 62, 121, 'ENROLLED', '2022-03-26 21:58:38', '0000-00-00 00:00:00', 'New', 4),
(34, '2022-2023', 'Second', 62, 121, 'ENROLLED', '2022-03-26 21:58:47', '0000-00-00 00:00:00', 'New', 4),
(35, '2022-2023', 'First', 61, 1235, 'ENROLLED', '2022-03-27 16:55:22', '0000-00-00 00:00:00', 'New', 1),
(36, '2022-2023', 'First', 61, 123, 'ENROLLED', '2022-03-28 12:12:47', '0000-00-00 00:00:00', 'New', 1),
(39, '2022-2023', 'First', 61, 12301, 'ENROLLED', '2022-03-31 13:13:52', '0000-00-00 00:00:00', 'New', 1),
(40, '2022-2023', 'Second', 61, 12301, 'ENROLLED', '2022-03-31 13:15:21', '0000-00-00 00:00:00', 'New', 1),
(41, '2022-2023', 'First', 61, 12301, 'ENROLLED', '2022-03-31 13:15:28', '0000-00-00 00:00:00', 'New', 2),
(42, '2022-2023', 'Second', 61, 12301, 'ENROLLED', '2022-03-31 13:15:36', '0000-00-00 00:00:00', 'New', 2),
(43, '2022-2023', 'First', 61, 12301, 'ENROLLED', '2022-03-31 13:15:43', '0000-00-00 00:00:00', 'New', 3),
(44, '2022-2023', 'Second', 61, 12301, 'ENROLLED', '2022-03-31 13:15:50', '0000-00-00 00:00:00', 'New', 3),
(45, '2022-2023', 'First', 61, 12301, 'ENROLLED', '2022-03-31 13:16:00', '0000-00-00 00:00:00', 'New', 4),
(46, '2022-2023', 'Second', 61, 12301, 'ENROLLED', '2022-03-31 13:18:17', '0000-00-00 00:00:00', 'New', 4),
(47, '2022-2023', 'First', 61, 300, 'ENROLLED', '2022-04-05 00:08:34', '0000-00-00 00:00:00', 'New', 1),
(49, '2022-2023', 'Second', 61, 300, 'ENROLLED', '2022-04-05 00:31:38', '0000-00-00 00:00:00', 'New', 1),
(50, '2022-2023', 'First', 61, 300, 'ENROLLED', '2022-04-05 00:31:46', '0000-00-00 00:00:00', 'New', 2),
(51, '2022-2023', 'Second', 61, 300, 'ENROLLED', '2022-04-05 00:31:54', '0000-00-00 00:00:00', 'New', 2),
(52, '2022-2023', 'First', 61, 208, 'ENROLLED', '2022-04-05 00:38:46', '0000-00-00 00:00:00', 'New', 1),
(53, '2022-2023', 'First', 61, 400, 'ENROLLED', '2022-04-05 01:08:44', '0000-00-00 00:00:00', 'New', 1),
(55, '2022-2023', 'First', 61, 208, 'ENROLLED', '2022-04-24 09:19:37', '0000-00-00 00:00:00', 'New', 2),
(56, '2022-2023', 'First', 61, 6090, 'ENROLLED', '2022-04-24 09:40:13', '0000-00-00 00:00:00', 'New', 1),
(57, '2022-2023', 'First', 61, 232, 'ENROLLED', '2022-04-28 07:55:43', '0000-00-00 00:00:00', 'New', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SEM_ID` int(11) NOT NULL,
  `SEM` varchar(15) NOT NULL DEFAULT 'First'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `YEAR_LEVEL` varchar(20) NOT NULL,
  `LEC_UNIT` int(2) NOT NULL,
  `LAB_UNIT` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`, `YEAR_LEVEL`, `LEC_UNIT`, `LAB_UNIT`) VALUES
(497, 'Engl 111', 'Purposive Communication', 3, '', 62, '', 'First', '1', 3, 0),
(498, 'Hist 110', 'Readings in Philippines History', 3, '', 62, '', 'First', '1', 3, 0),
(499, 'Math 110', 'Mathemathics in the Modern World', 3, '', 62, '', 'First', '1', 3, 0),
(500, 'THM 111', 'Macro Perspective of Tourism and Hospitality', 3, '', 62, '', 'First', '1', 3, 0),
(501, 'THM 112', 'Risk Management as Applied to Safety, Security and Sanitation', 3, '', 62, '', 'First', '1', 3, 0),
(502, 'HM 111', 'Kitchen Essential and Basic Food Preparation (lec)', 2, '', 62, '', 'First', '1', 2, 0),
(503, 'HM 111.1', 'Kitchen Essential and Basic Food Preparation (lab)', 1, '', 62, '', 'First', '1', 0, 1),
(504, 'PE 111', 'Movement Enhancement (ME)', 2, '', 62, '', 'First', '1', 2, 0),
(505, 'NSTP 111', 'National Services Training Program 1', 3, '', 62, '', 'First', '1', 3, 0),
(506, 'THM 121', 'Philippines Tourism, Geography and Culture', 3, 'THM 111; THM 112; Hist 110', 62, '', 'Second', '1', 3, 0),
(507, 'THM 122', 'Micro Perspective of Tourism and Hospitality', 3, 'THM 111; THM 112', 62, '', 'Second', '1', 3, 0),
(508, 'HM 121', 'Fundamentals in Lodging Operation (lec)', 2, 'THM 111; THM 112', 62, '', 'Second', '1', 2, 0),
(509, 'HM 121.1', 'Fundamentals in Lodging Operation (lab)', 1, 'THM 111; THM 112', 62, '', 'Second', '1', 0, 1),
(510, 'HM 122', 'Fundamentals in Foodservice Operation (lec)', 2, 'HM 111/111.1; THM 112', 62, '', 'Second', '1', 2, 0),
(511, 'HM 122.1', 'Fundamentals in Foodservice Operation (lab)', 1, 'HM 111/111.1; THM 112', 62, '', 'Second', '1', 0, 1),
(512, 'HME  123', 'Culinary Fundamentals (lec)', 2, 'HM 111/111.1; THM 112', 62, '', 'Second', '1', 2, 0),
(513, 'HME  123.1', 'Culinary Fundamentals (lab)', 1, 'HM 111/111.1; THM 112', 62, '', 'Second', '1', 0, 1),
(514, 'THM123', 'Professional Development and Applied Ethics', 3, 'THM 111; THM 112', 62, '', 'Second', '1', 3, 0),
(515, 'PE 122', 'Fitness Exercise (FE)', 2, 'PE 111', 62, '', 'Second', '1', 2, 0),
(516, 'NSTP 122', 'National Services Training Program 2', 3, 'NSTP 111', 62, '', 'Second', '1', 3, 0),
(517, 'SocSci 210', 'Understanding the Self', 3, '', 62, '', 'First', '2', 3, 0),
(518, 'AH 210', 'Philippine Popular Culture', 3, '', 62, '', 'First', '2', 3, 0),
(519, 'Fil 211', 'Filipino (Komunikasyon Sa Akademikong Filipino)', 3, '', 62, '', 'First', '2', 3, 0),
(520, 'HME 211', 'Hospitality Accounting', 3, 'THM 112; Math 110', 62, '', 'First', '2', 3, 0),
(521, 'HME 212', 'Philippines Regional Cuisine (lec)', 2, 'HME 123/123.1', 62, '', 'First', '2', 2, 0),
(522, 'HME 212.1', 'Philippines Regional Cuisine (lab)', 1, 'HME 123/123.1', 62, '', 'First', '2', 0, 1),
(523, 'HME 213', 'Catering and Banquet Operation (lec)', 2, 'HM 122/122.1; HME 123;123.1', 62, '', 'First', '2', 2, 0),
(524, 'HME 213.1 ', 'Catering and Banquet Operation (lab)', 1, 'HM 122/122.1; HME 123;123.1', 62, '', 'First', '2', 0, 1),
(525, 'HM 214', 'Supply Chain Management in Hospitality Industry', 3, 'THM 122', 62, '', 'First', '2', 3, 0),
(526, 'HME 215', 'Housekeeping Operations (lec) ', 2, 'HM 121/121.1', 62, '', 'First', '2', 2, 0),
(527, 'HME 215.1', 'Housekeeping Operations (lab) ', 1, 'HM121/121.1', 62, '', 'First', '2', 0, 1),
(528, 'PE 213', 'Physical Activities Towards Health and Fitness (PATH-Fit I)', 2, 'PE 122', 62, '', 'First', '2', 2, 0),
(529, 'FIL 220', 'Filipino (Masining na Pagpapahayag) ', 3, 'FIL 211', 62, '', 'Second', '2', 3, 0),
(530, 'SOSCI 220', 'Ethics', 3, 'SoSci 210', 62, '', 'Second', '2', 3, 0),
(531, 'SSP 220', 'Gender and Society ', 3, '', 62, '', 'Second', '2', 3, 0),
(532, 'HME 221', 'F and B Cost Control', 3, 'HME 211', 62, '', 'Second', '2', 3, 0),
(533, 'THM 221', 'Quality Service Management in Tourism and Hospitality', 3, 'THM 122; HM 123/123.1', 62, '', 'Second', '2', 3, 0),
(534, 'HME 222', 'Bread and Pastry (lec)', 2, 'HME 213/213.1', 62, '', 'Second', '2', 2, 0),
(535, 'HME 222.1', 'Bread and Pastry (lab)', 1, 'HME 213/213.1', 62, '', 'Second', '2', 0, 1),
(536, 'HME 223', 'Bar and Beverages (lec)', 2, 'HME 213/213.1', 62, '', 'Second', '2', 2, 0),
(537, 'HME 223.1', 'Bar and Beverages (lab)', 1, 'HME 213/213.1', 62, '', 'Second', '2', 0, 1),
(538, 'HM 224', 'PRACTICUM 300hours. (Restaurant Phase) ', 3, 'HME 221; HME 212/212.1; HME 21', 62, '', 'Second', '2', 3, 0),
(539, 'PE 224', 'Physical Activities Towards Health and Fitness (PATH-Fit II)', 2, 'PE 213', 62, '', 'Second', '2', 2, 0),
(540, 'SocSci 310', 'The  Contemporary World', 3, 'SCOSCI 220', 62, '', 'First', '3', 3, 0),
(541, 'HME 311', 'Asian Cuisine (lec)', 2, 'HM 212; HME 222; HM 224; HME 2', 62, '', 'First', '3', 2, 0),
(542, 'HME 311.1', 'Asian Cuisine (lab)', 1, 'HM 212; HME 222; HM 224; HME 2', 62, '', 'First', '3', 0, 1),
(543, 'BM 1', 'Operation Management in Tourism and Hospitality Industry', 3, 'THM 221', 62, '', 'First', '3', 3, 0),
(544, 'HME 313', 'Front Office Operation (lec)', 2, 'THM 221; HM 224', 62, '', 'First', '3', 2, 0),
(545, 'HME 313.1', 'Front Office Operation (lab)', 1, 'THM 221; HM 224', 62, '', 'First', '3', 0, 1),
(546, 'HM 314', 'Trends and Issues in the Hospitality', 3, 'THM 221; HM 224', 62, '', 'First', '3', 3, 0),
(547, 'HM 315', 'Foreign Language 1', 3, 'HM 224', 62, '', 'First', '3', 3, 0),
(548, 'STS 310', 'Science, Technology and Society', 3, '', 62, '', 'First', '3', 3, 0),
(549, 'Rizal 310', 'Life and Work of Rizal', 3, '', 62, '', 'First', '3', 3, 0),
(550, 'PEE 310', 'Peace Education', 3, '', 62, '', 'First', '3', 3, 0),
(551, 'HME 320', 'Food Styling and Design (lec)', 2, 'HME 311; HME 311.1', 62, '', 'Second', '3', 2, 0),
(552, 'HME 320.1', 'Food Styling and Design (lab)', 1, 'HME 311; HME 311.1', 62, '', 'Second', '3', 0, 1),
(553, 'HM 321', 'Ergonomics and Facilities Planning for Hospitality Industry', 3, 'BM 1; HM 314; HME 312', 62, '', 'Second', '3', 3, 0),
(554, 'HM 322', 'Introduction to MICE (lec)', 2, 'HME 312; HME 311/311.1', 62, '', 'Second', '3', 2, 0),
(555, 'HM 322.1', 'Introduction to MICE (lab)', 1, 'HME 312; HME 311/311.1', 62, '', 'Second', '3', 0, 1),
(556, 'THM 321', 'Multicultural Diversity in Workplace for the Tourism Professional', 3, 'BM 1', 62, '', 'Second', '3', 3, 0),
(557, 'THM 322', 'Entrepreneurship in Tourism and Hospitality', 3, 'HME 312; HME 314', 62, '', 'Second', '3', 3, 0),
(558, 'HM 323', 'Foreign Language 2', 3, 'HM 315', 62, '', 'Second', '3', 3, 0),
(559, 'THM 323', 'Tourism and Hospitality Marketing', 3, 'BM 1; HM 314; HME 312', 62, '', 'Second', '3', 3, 0),
(560, 'MST 320', 'People and Earth Ecosystem ', 3, '', 62, '', 'Second', '3', 3, 0),
(561, 'HUMS 410', 'Arts Appreciation', 3, '', 62, '', 'Second', '3', 3, 0),
(562, 'BM 2', 'Strategic Management in Hospitality and Tourism', 3, 'BM 1', 62, '', 'First', '4', 3, 0),
(563, 'HM 412', 'Applied Business Tools and Technologies (PMS) with (lec)', 2, 'HM 321; HM 322/322.1', 62, '', 'First', '4', 2, 0),
(564, 'HM 412.1', 'Applied Business Tools and Technologies (PMS) with (lab)', 1, 'HM 321; HM 322/322.1', 62, '', 'First', '4', 0, 1),
(565, 'THM 411', 'Legal Aspects in Tourism and Hospitality', 3, 'THM 323; THM 322; THM 321', 62, '', 'First', '4', 3, 0),
(566, 'HM 413', 'Research in Hospitality', 3, 'HM 321; HM 322', 62, '', 'First', '4', 3, 0),
(567, 'HM  420', 'Practicum 600 hrs. (Hotel Phase)', 6, 'All Major Subjects', 62, '', 'Second', '4', 6, 0),
(568, 'Soc Sci 111', 'Understanding the Self', 3, '', 63, '', 'First', '1', 3, 0),
(569, 'Hist 110', 'Readings in Philippines History', 3, '', 63, '', 'First', '1', 3, 0),
(570, 'Hist 110', 'Readings in Philippines History', 3, '', 63, '', 'First', '1', 3, 0),
(571, 'Hist 110', 'Readings in Philippines History', 3, '', 63, '', 'First', '1', 3, 0),
(572, 'Soc Sci 112', 'The  Contemporary World', 3, '', 63, '', 'First', '1', 3, 0),
(573, 'Math  111', 'Mathemathics in the Modern World', 3, '', 63, '', 'First', '1', 3, 0),
(574, 'Fil 111', 'Komunikasyon sa Akademikong Filipino', 3, '', 63, '', 'First', '1', 3, 0),
(575, 'P.E. 111', 'Movement Enhancement (ME)', 2, '', 63, '', 'First', '1', 2, 0),
(576, 'NSTP 111', 'National Services Training Program 1', 3, '', 63, '', 'First', '1', 3, 0),
(577, 'Eng 121', 'Purposive Communication', 3, '', 63, '', 'Second', '1', 3, 0),
(578, 'Hums 120', 'Arts Appreciation', 3, '', 63, '', 'Second', '1', 3, 0),
(579, 'STS 120', 'Science, Technology and Society', 3, '', 63, '', 'Second', '1', 3, 0),
(580, 'Soc Sci 120', 'Ethics', 3, '', 63, '', 'Second', '1', 3, 0),
(581, 'Fil 120', 'Masining na Pagpapahayag', 3, '', 63, '', 'Second', '1', 3, 0),
(582, 'Math 122', 'Mathematics of Investment', 3, 'Math 111', 63, '', 'Second', '1', 3, 0),
(583, 'P.E 122', 'Fitness Exercise (FE)', 2, 'P.E 111', 63, '', 'Second', '1', 2, 0),
(584, 'NSTP 122', 'National Services Training Program 2', 3, '', 63, '', 'Second', '1', 3, 0),
(585, 'IT 210', 'Electronic Spreadsheet', 3, '', 63, '', 'First', '2', 2, 1),
(586, 'MST 211', 'People and Earth\'s Ecosystem ', 3, '', 63, '', 'First', '2', 3, 0),
(587, 'SSP 211', 'Gender and Society ', 3, '', 63, '', 'First', '2', 3, 0),
(588, 'Eng 211', 'Business Correspondence', 3, 'Eng 121', 63, '', 'First', '2', 3, 0),
(589, 'FM 211', 'Financial Management', 3, 'Math 122', 63, '', 'First', '2', 3, 0),
(590, 'Math 213', 'Quantitative Analysis of Business', 3, '', 63, '', 'First', '2', 3, 0),
(591, 'Acctg. 211', 'Intermediate Accounting 1', 3, 'Math 122', 63, '', 'First', '2', 3, 0),
(592, 'P.E. 213', 'Physical Activities Towards Health and Fitness (PATH-Fit I)', 2, 'P.E. 122', 63, '', 'First', '2', 2, 0),
(593, 'Rizal', 'Rizal\'s Life and Works', 3, '', 63, '', 'Second', '2', 3, 0),
(594, 'AH 221', 'Philippine Popular Culture', 3, '', 63, '', 'Second', '2', 3, 0),
(595, 'Law 221', 'Obligation and Contracts', 3, '', 63, '', 'Second', '2', 3, 0),
(596, 'Tax 221', 'Income Taxation', 3, 'Econ111', 63, '', 'Second', '2', 3, 0),
(597, 'FM 222', 'Financial Analysis and Reporting', 3, 'FM 211', 63, '', 'Second', '2', 3, 0),
(598, 'FM 223', 'Banking and Financial Institution ', 3, 'FM 211', 63, '', 'Second', '2', 3, 0),
(599, 'Acctg. 222', 'Intermediate Accounting II', 3, 'Acctg.211, FM211', 63, '', 'Second', '2', 3, 0),
(600, 'P.E. 224', 'Physical Activities Towards Health and Fitness (PATH-Fit II)', 2, 'P.E 213', 63, '', 'Second', '2', 2, 0),
(601, 'Mgt 311', 'Strategic Management', 3, 'FM 211', 63, '', 'First', '3', 3, 0),
(602, 'BA 311', 'Good Governance and Social Responsibilities', 3, 'Soc Sci 120', 63, '', 'First', '3', 3, 0),
(603, 'BA 312', 'Human Resource Management', 3, 'LAW 221', 63, '', 'First', '3', 3, 0),
(604, 'BA 313', 'International Business and Trade', 3, 'Law221, FM223', 63, '', 'First', '3', 3, 0),
(605, 'BA 314', 'Business Research', 3, 'MATH213, FM222', 63, '', 'First', '3', 3, 0),
(606, 'FM 314', 'Monetary Policy and Central Banking', 3, 'FM223', 63, '', 'First', '3', 3, 0),
(607, 'Law 312', 'Law on Negotiable Instrument', 3, 'Law221', 63, '', 'First', '3', 3, 0),
(608, 'Lit 310', 'Asian Literature', 3, '', 63, '', 'First', '3', 3, 0),
(609, 'Mgt 322', 'Operation Management and TQM', 3, 'Mgt311, BA312', 63, '', 'Second', '3', 3, 0),
(610, 'FM 325', 'Investment and Portfolio Management', 3, 'FM223, 314', 63, '', 'Second', '3', 3, 0),
(611, 'FM 326', 'Credit and Collection ', 3, 'Law 312, FM 314', 63, '', 'Second', '3', 3, 0),
(612, 'FM 327', 'Capital Market', 3, 'FM 314', 63, '', 'Second', '3', 3, 0),
(613, 'FME 321', 'Treasury Management', 3, 'FM223, FM 314', 63, '', 'Second', '3', 3, 0),
(614, 'FME 322', 'Controllership Management', 3, 'FM223, FM 314', 63, '', 'Second', '3', 3, 0),
(615, 'BA 325', 'Thesis or Feasibility Study', 3, 'BA314, Math213', 63, '', 'Second', '3', 3, 0),
(616, 'FME 413', 'Franchising', 3, 'FME 321', 63, '', 'First', '4', 3, 0),
(617, 'FM 418', 'Special Topics in Financial Management', 3, 'FM211, FM327', 63, '', 'First', '4', 3, 0),
(618, 'PEE  320', 'Peace Education', 3, 'None', 63, '', 'First', '4', 3, 0),
(619, 'FME 424', 'Risk Management', 3, 'FME412, FM418', 63, '', 'Second', '4', 3, 0),
(620, 'FME 425', 'Global Finance with Electronic Banking ', 3, 'FME412, FM418', 63, '', 'Second', '4', 3, 0),
(621, 'FM 429', 'PRACTICUM/Work Integrated Learning', 6, 'All Major Subjects', 63, '', 'Second', '4', 6, 0),
(622, 'Soc Sci 111', 'Understanding the Self', 3, '', 70, '', 'First', '1', 3, 0),
(623, 'Hist 110', 'Readings in Philippines History', 3, '', 70, '', 'First', '1', 3, 0),
(624, 'Math 110', 'Mathemathics in the Modern World', 3, '', 70, '', 'First', '1', 3, 0),
(625, 'FIl110', 'Komunikasyon sa Akademikong Filipino', 3, '', 70, '', 'First', '1', 3, 0),
(626, 'MST 114', 'People and Earth\'s Ecosystem ', 3, '', 70, '', 'First', '1', 3, 0),
(627, 'Soc Sci 112', 'The  Contemporary World', 3, '', 70, '', 'First', '1', 3, 0),
(628, 'Educ 111', 'The Child and Adolescent Learners and Learning Principles', 3, '', 70, '', 'First', '1', 3, 0),
(629, 'PE 1', 'Movement Enhancement (ME)', 2, '', 70, '', 'First', '1', 2, 0),
(630, 'NSTP 1', 'National Services Training Program 1', 3, '', 70, '', 'First', '1', 3, 0),
(631, 'Soc Sci 120', 'Ethics', 3, '', 61, '', 'Second', '1', 3, 0),
(632, 'Engl 120', 'Purposive Communication', 3, '', 70, '', 'Second', '1', 3, 0),
(633, 'AH 123', 'Philippine Popular Culture', 3, '', 70, '', 'Second', '1', 3, 0),
(634, 'Fil. 121', 'Pagbasa at Pagsulat Tungo sa Pananaliksik', 3, 'Fil. 110', 70, '', 'Second', '1', 3, 0),
(635, 'STS 120', 'Science, Technology and Society', 3, '', 70, '', 'Second', '1', 3, 0),
(636, 'Educ 122', 'Content and Pedagogy for the Mother-Tongue', 3, '', 70, '', 'Second', '1', 3, 0),
(637, 'SSP 114', 'Gender and Society ', 3, '', 70, '', 'Second', '1', 3, 0),
(638, 'PE 2', 'Fitness Exercise (FE)', 2, 'PE 1', 70, '', 'Second', '1', 2, 0),
(639, 'NSTP 2', 'National Services Training Program 2', 3, 'NSTP 1', 70, '', 'Second', '1', 3, 0),
(640, 'Rizal 210', 'The Life and Works of Rizal', 3, '', 70, '', 'First', '2', 3, 0),
(641, 'Educ 211', 'Teaching Math in Primary Grades', 3, '', 70, '', 'First', '2', 3, 0),
(642, 'TTL 210', 'Technology for Teaching and Learning 1', 3, 'STS 120', 70, '', 'First', '2', 3, 0),
(643, 'Educ 212', 'Facilitating Learner-Centered Teaching', 3, 'Educ 111', 70, '', 'First', '2', 3, 0),
(644, 'Educ 213', 'Teaching Science in Elementary Grades (Biology and Chemistry)', 3, 'STS 120', 70, '', 'First', '2', 3, 0),
(645, 'Educ 214', ' Good Manners and Right Conduct (GMRC)', 3, '', 70, '', 'First', '2', 3, 0),
(646, 'Educ 216', 'Pagtuturo nf Filipino sa Elementarya (Struktura at Gamit ng Wikang Filipino)', 3, 'Educ 122', 70, '', 'First', '2', 3, 0),
(647, 'Educ 217', 'Teaching Social Studies in Elementary Grades (Culture and Geography)', 3, 'Educ 122', 70, '', 'First', '2', 3, 0),
(648, 'PE 3', 'Physical Activities Towards Health and Fitness (PATH-Fit I)', 2, 'PE 2', 70, '', 'First', '2', 2, 0),
(649, 'EPP  221', 'Edukasyong Panatahanan at Pangkabuhayan', 3, '', 70, '', 'Second', '2', 3, 0),
(650, 'Educ 222', 'Foundation of Special and Inclusive Education', 3, 'Educ 212', 70, '', 'Second', '2', 3, 0),
(651, 'Educ 223', 'The Teaching Profession', 3, 'Educ 212', 70, '', 'Second', '2', 3, 0),
(652, 'Educ 224', 'Pagtuturo ng Filipino sa Elementarya (Panitikan ng Pilipinas)', 3, 'Educ 216', 70, '', 'Second', '2', 3, 0),
(653, 'Educ 225', 'Teaching Science in Elementary Grades (Physics, Earth anf Space Science)', 3, 'Educ 213', 70, '', 'Second', '2', 3, 0),
(654, 'Educ 226', 'Teaching Math in Intermediate  Grades', 3, 'Educ 221', 70, '', 'Second', '2', 3, 0),
(655, 'Educ 227', 'Teaching Social Studies in Elementary Grades (Philippine History and Government)', 3, 'Educ 217', 70, '', 'Second', '2', 3, 0),
(656, 'Hums 220', 'Arts Appreciation', 3, '', 70, '', 'Second', '2', 3, 0),
(657, 'PE 4', 'Physical Activities Towards Health and Fitness (PATH-Fit II)', 2, 'PE 3', 70, '', 'Second', '2', 2, 0),
(658, 'Educ 310', 'Teaching English in the Elementary Grades (Language Arts)', 3, 'Educ 122', 70, '', 'First', '3', 3, 0),
(659, 'Educ 312', 'The Teacher and School Curriculum', 3, 'Educ 223', 70, '', 'First', '3', 3, 0),
(660, 'Educ 313', 'Assessment of Learning 1', 3, 'Educ 223', 70, '', 'First', '3', 3, 0),
(661, 'TTL 314', 'Technology for Teaching and Learning in the Elementary Grades', 3, 'TTL 210', 70, '', 'First', '3', 3, 0),
(662, 'Educ 315', 'Teaching Music in the Elementary Grades', 3, 'Educ 223', 70, '', 'First', '3', 3, 0),
(663, 'Educ 316', 'Teaching Arts in the Elementary Grades', 3, 'Educ 223', 70, '', 'First', '3', 3, 0),
(664, 'Res 318', 'Elements of Research', 3, '', 70, '', 'First', '3', 3, 0),
(665, 'Engl 317', 'English Enhancement', 3, '', 70, '', 'First', '3', 3, 0),
(666, 'Educ 320', 'Assessment of Learning 2', 3, 'Educ 313', 70, '', 'Second', '3', 3, 0),
(667, 'Educ 321', 'Teaching English in the Elementary Grades Through Literature', 3, 'Educ 310', 70, '', 'Second', '3', 3, 0),
(668, 'Educ 322', 'The Teacher and the Community, School Culture and Organizational Leadership', 3, 'Educ 312', 70, '', 'Second', '2', 3, 0),
(669, 'Educ 323', 'Teaching PE and Health in the Elementary Grades', 3, 'Educ 315', 70, '', 'Second', '3', 3, 0),
(670, 'Epp 324', 'Edukasyong Panatahanan at Pangkabuhayan with Entreprenuership', 3, 'EPP 221', 70, '', 'Second', '3', 3, 0),
(671, 'Educ 325', 'Building and Enhancing New Literacies Across the Curriculum', 3, 'Educ 312', 70, '', 'Second', '3', 3, 0),
(672, 'Res 325', 'Research in Education', 3, 'Res 318', 70, '', 'Second', '3', 3, 0),
(673, 'Educ 410', 'Teaching Multi-Grade Classes', 3, 'Educ 312', 70, '', 'Second', '3', 3, 0),
(674, 'Engl. 311', 'Speech Improvement', 3, 'Engl 120', 70, '', 'Second', '3', 3, 0),
(675, 'FS 1', 'Field Study 1', 3, 'Al Professional and Major Subj', 70, '', 'First', '4', 3, 0),
(676, 'FS 2', 'Field Study 2', 3, 'All Professional and Major Sub', 70, '', 'First', '4', 3, 0),
(677, 'Review 1', 'LET Review 1', 3, '', 70, '', 'First', '4', 3, 0),
(678, 'TI 410', 'Teaching Internship', 6, 'All subjects', 70, '', 'Second', '4', 6, 0),
(679, 'Review 2', 'LET Review 2', 3, '', 70, '', 'Second', '4', 3, 0),
(680, 'ITE 111', 'Introduction to Computer Programming', 3, '', 61, '', 'First', '1', 2, 1),
(681, 'ITE 112', 'Computer Programming 1', 3, '', 61, '', 'First', '1', 2, 1),
(682, 'SOCSCI 110', 'Understanding the Self', 3, '', 61, '', 'First', '1', 3, 0),
(683, 'HIST 110', 'Readings in Philippine History', 3, '', 61, '', 'First', '1', 3, 0),
(687, 'LIT 110', 'The  Contemporary World', 3, '', 61, '', 'First', '1', 3, 0),
(688, 'MATH 110', 'Mathemathics in the Modern World', 3, '', 61, '', 'First', '1', 3, 0),
(689, 'FIL 110', 'Komunikasyon sa Akademikong Filipino', 3, '', 61, '', 'First', '1', 3, 0),
(690, 'PE 1', 'Movement Enhancement ', 2, '', 61, '', 'First', '1', 2, 0),
(691, 'NSTP 1', 'National Services Training Program 1', 3, '', 61, '', 'First', '1', 3, 0),
(692, 'ITE121', 'Computer Programming 2', 3, 'ITE 112', 61, '', 'Second', '1', 2, 1),
(693, 'ITE 122', 'Human Computer Interaction', 3, 'ITE 112', 61, '', 'Second', '1', 2, 1),
(694, 'ITE 123', 'Discrete Mathematics', 3, 'MATH 110', 61, '', 'Second', '1', 3, 0),
(695, 'ITM 120', 'Web Development', 3, 'ITE 111, ITE  112', 61, '', 'Second', '1', 2, 1),
(696, 'ENGL 120', 'Purposive Communication', 3, '', 61, '', 'Second', '1', 3, 0),
(697, 'HUMS 120', 'Art Appreciation', 3, '', 61, '', 'Second', '1', 3, 0),
(698, 'HUMS 120', 'Art Appreciation', 3, '', 61, '', 'Second', '1', 3, 0),
(699, 'HUMS 120', 'Art Appreciation', 3, '', 61, '', 'Second', '1', 3, 0),
(700, 'HUMS 120', 'Art Appreciation', 3, '', 61, '', 'Second', '1', 3, 0),
(701, 'FIL 120', 'Masining na Pagpapahayag', 3, 'FIL 110', 61, '', 'Second', '1', 3, 0),
(702, 'PE 2', 'Fitness Exercises', 2, 'PE 1', 61, '', 'Second', '1', 2, 0),
(703, 'NSTP 2', 'National Services Training Program 2', 3, 'NSTPA 1', 61, '', 'Second', '1', 3, 0),
(704, 'ITE 211', 'Data Structures and Algorithms', 3, 'ITE 121', 61, '', 'First', '2', 2, 1),
(705, 'ITE 212', 'Multimedia Systems', 3, 'ITE  111, ITE 122', 61, '', 'First', '2', 2, 1),
(706, 'ITE 213', 'Quantitative Method (incl Modelling and Simulation)', 3, 'ITE 111, ITE  122', 61, '', 'First', '2', 3, 0),
(707, 'ITM 210', 'Digital Logic Design', 3, 'ITE 123', 61, '', 'First', '2', 2, 1),
(708, 'ITM 211', 'Fundamentals of Accounting', 3, '', 61, '', 'First', '2', 3, 0),
(709, 'SOCSCI 210', 'Ethics: Moral Valuation', 3, '', 61, '', 'First', '2', 3, 0),
(710, 'SSP 210', 'Gender and Society ', 3, '', 61, '', 'First', '2', 3, 0),
(711, 'MST 210', 'People and Earth\'s Ecosystem ', 3, '', 61, '', 'First', '2', 3, 0),
(712, 'PE 3', 'PATH-Fit I(Physical Activities Towards Health and Fitness)', 2, 'PE  2', 61, '', 'First', '2', 2, 0),
(713, 'ITE 220', 'ITE Pro Elect1-Object Oriented Programming', 3, 'ITE 211', 61, '', 'Second', '2', 2, 1),
(714, 'ITE 221', 'Networking 1', 3, 'ITE 211', 61, '', 'Second', '2', 2, 1),
(715, 'ITE 222', 'Database 1', 3, 'ITE 211, ITE 213', 61, '', 'Second', '2', 2, 1),
(716, 'ITE 223', 'Social Issues and Professional Practices', 3, '', 61, '', 'Second', '2', 3, 0),
(717, 'ITE 224', 'Computer Organization and Architecture', 3, 'ITM 210', 61, '', 'Second', '2', 3, 0),
(718, 'ITM 220', 'Office Productivity Enhancement', 3, '', 61, '', 'Second', '2', 2, 1),
(719, 'RIZAL', 'Life and Works of Rizal', 3, '', 61, '', 'Second', '2', 3, 0),
(720, 'STS 120', 'Science, Technology and Society', 3, '', 61, '', 'Second', '2', 3, 0),
(721, 'PE 4', 'PATH-Fit II(Physical Activities Towards Health and Fitness)', 2, 'PE 3', 61, '', 'Second', '2', 2, 0),
(722, 'ITE 310', 'ITE Pro Elect2-Platform Technologies', 3, 'ITE 211, ITE 222, ITE 221', 61, '', 'First', '3', 2, 1),
(723, 'ITE 311', 'Information Management', 3, 'ITE 220, ITE 222', 61, '', 'First', '3', 2, 1),
(724, 'ITE 312', 'System Integration and Architecture', 3, 'ITE 224', 61, '', 'First', '3', 2, 1),
(725, 'AH 310', 'Philippine Popular Culture', 3, '', 61, '', 'First', '3', 3, 0),
(726, 'ENGL 310', 'Speech Improvement', 3, 'ENGL 120', 61, '', 'First', '3', 3, 0),
(727, 'MATH 310', 'Linear Algebra', 3, 'MATH 110', 61, '', 'First', '3', 3, 0),
(728, 'ITE 320', 'ITE Prof Elect3-Web Systems & Technologies', 3, 'ITE 310, ITE 311, ITE 312', 61, '', 'Second', '3', 2, 1),
(729, 'ITE 321', 'Applications Development and Emerging Technologies', 3, 'ITE 311, ITE 312', 61, '', 'Second', '3', 2, 1),
(730, 'ITE 322', 'Information Assurance and Security 1', 3, 'ITE 311, ITE 310', 61, '', 'Second', '3', 2, 1),
(731, 'ITM 320', 'Mobile Applications Development', 3, 'ITE 311, ITE 310, ITE 213', 61, '', 'Second', '3', 2, 1),
(732, 'Electives in Tech.', 'Methods of Research in Computing ', 3, 'ITE 213', 61, '', 'Second', '3', 3, 0),
(733, 'ENGL 320', 'Technical Writing', 3, 'ENGL 310', 61, '', 'Second', '3', 3, 0),
(734, 'ITE 400', 'Practicum', 6, 'Adviser\'s Consent', 61, '', 'Summer', '3', 6, 0),
(735, 'ITE 411', 'Information Assurance and Security 2', 3, 'ITE 322', 61, '', 'First', '4', 2, 1),
(736, 'ITE 412', 'Capstone Project 1', 3, 'Adviser\'s Consent', 61, '', 'First', '4', 3, 0),
(737, 'ITM 410', 'Innovative Participation and Social Engagement', 3, '4th Year Standing', 61, '', 'First', '4', 3, 0),
(738, 'ITE 420', 'ITE Prof Elec4-Human Computer Interaction 2', 3, 'ITE 122', 61, '', 'Second', '4', 2, 1),
(739, 'ITE 421', 'Capstone Project 2', 3, 'ITE 412', 61, '', 'Second', '4', 3, 0),
(740, 'ITE 422', 'System Administration and Maintenance', 3, 'ITE 411', 61, '', 'Second', '4', 3, 0),
(741, 'Fil 101', 'Introduksyon sa Pag-aaral ng Wika', 3, '', 64, '', 'First', '1', 3, 0),
(742, 'Fil 102', 'Panimulang Linggwistika', 3, '', 64, '', 'First', '1', 3, 0),
(743, 'Fil110', 'Komunikasyon sa Akademikong Filipino', 3, '', 64, '', 'First', '1', 3, 0),
(744, 'SocSci111', 'Understanding the Self', 3, '', 64, '', 'First', '1', 3, 0),
(745, 'Hist 110', 'Readings in the Philippines History', 3, '', 64, '', 'First', '1', 3, 0),
(746, 'SocSci112', 'The Contemporary World', 3, '', 64, '', 'First', '1', 3, 0),
(747, 'Math110', 'Mathemathics in the Modern World', 3, '', 64, '', 'First', '1', 3, 0),
(748, 'PE 1', 'Movement Enhancement (ME)', 2, '', 64, '', 'First', '1', 2, 0),
(749, 'NSTP 1', 'National Services Training Program 1', 3, '', 64, '', 'First', '1', 3, 0),
(750, 'Lit 101', 'Panitikan ng Rehiyon', 3, '', 64, '', 'Second', '1', 3, 0),
(751, 'Fil 103', 'Ang Filipino sa Kurikulum ng Batang Edukasyon', 3, 'Fil 101', 64, '', 'Second', '1', 3, 0),
(752, 'Eng 120', 'Purposive Communication', 3, '', 64, '', 'Second', '1', 3, 0),
(753, 'Humss 120', 'Art Appreciation', 3, '', 64, '', 'Second', '1', 3, 0),
(754, 'STS 120', 'Science, Technology and Society', 3, '', 64, '', 'Second', '1', 3, 0),
(755, 'Soc Sci 120', 'Ethics', 3, '', 64, '', 'Second', '1', 3, 0),
(756, 'Fil 121', 'Pagbasa at Pagsulat Tungo sa Pananaliksik', 3, 'Fil 110', 64, '', 'Second', '1', 3, 0),
(757, 'PE 2', 'Fitness Exercise (FE)', 2, 'PE 1', 64, '', 'Second', '1', 2, 0),
(758, 'NSTP 2', 'National Services Training Program 2', 3, 'NSTP 1', 64, '', 'Second', '1', 3, 0),
(759, 'Fil 201', 'Estruktura ng Wikang Filipino', 3, 'Fil 103', 64, '', 'First', '2', 3, 0),
(760, 'Fil 202', 'Pagtuturo at Pagtataya ng Makrong Kasanayang Pangwika', 3, 'Fil 101', 64, '', 'First', '2', 3, 0),
(761, 'Fil 203', 'Ugnayan ng Wika, Kultura at Lipunan', 3, 'Fil 103', 64, '', 'First', '2', 3, 0),
(762, 'Fil 204', 'Paghahanda at Ebalwasyon ng Kagamitang Panturo', 3, 'Fil 103', 64, '', 'First', '2', 3, 0),
(763, 'Fil 205', 'Introduksyon sa Pagsasalin', 3, 'Fil 102', 64, '', 'First', '2', 3, 0),
(764, 'Rizal 210', 'The Life and Works of Rizal', 3, '', 64, '', 'First', '2', 3, 0),
(765, 'Educ 210', 'The Child and Adolescent Learners and Learning Principles', 3, '', 64, '', 'First', '2', 3, 0),
(766, 'Educ 211', 'The Teaching Profession', 3, '', 64, '', 'First', '2', 3, 0),
(767, 'PE 3', 'Physical Activities Towards Health and Fitness (PATH-Fit I)', 2, 'PE 2', 64, '', 'First', '2', 2, 0),
(768, 'Lit 201', 'Kulturang Popular', 3, 'Fil 204', 64, '', 'Second', '2', 3, 0),
(769, 'Lit 202', 'Sanaysay at Talumpati', 3, 'Fil 201', 64, '', 'Second', '2', 3, 0),
(770, 'Lit 203', 'Panunuring Pampanitikan', 3, 'Fil 203', 64, '', 'Second', '2', 3, 0),
(771, 'Lit 204', 'Maikling Kwento at Nobelang Filipino', 3, 'Fil 204', 64, '', 'Second', '2', 3, 0),
(772, 'Engl.', 'Speech Improvement', 3, 'Eng 120', 64, '', 'Second', '2', 3, 0),
(773, 'MST 213', 'People and the Earth\'s Ecosystem', 3, 'None', 64, '', 'Second', '2', 3, 0),
(774, 'Educ 212', 'Facilitating Learner-Centered Teaching', 3, 'Educ 210', 64, '', 'Second', '2', 3, 0),
(775, 'Fil 202 ', 'Barayti at Baryasyon ng Wika', 3, 'Fil 203', 64, '', 'Second', '2', 3, 0),
(776, 'PE 4', 'Physical Activities Towards Health and Fitness (PATH-Fit II)', 2, 'PE 3', 64, '', 'Second', '2', 2, 0),
(777, 'Fil 301', 'Introduction sa Pamamahayag', 3, 'Lit 202', 64, '', 'First', '3', 3, 0),
(778, 'Fil 303', 'Mga Natatanging Diskurso sa Wika at Panitikan', 3, 'Fili 202', 64, '', 'First', '3', 3, 0),
(779, 'Fil 303', 'Mga Natatanging Diskurso sa Wika at Panitikan', 3, 'Fili 202', 64, '', 'First', '3', 3, 0),
(780, 'Fil 303', 'Mga Natatanging Diskurso sa Wika at Panitikan', 3, 'Fili 202', 64, '', 'First', '3', 3, 0),
(781, 'Fil 303', 'Mga Natatanging Diskurso sa Wika at Panitikan', 3, 'Fili 202', 64, '', 'First', '3', 3, 0),
(782, 'TTL 1', 'Technology for Teaching and Learning 1', 3, 'MST 213', 64, '', 'First', '3', 3, 0),
(783, 'Educ 301 ', 'Foundation of Speacial and Inclusive Education', 3, 'Educ 210', 64, '', 'First', '3', 3, 0),
(784, 'Educ 302', 'The Teaching and the Community, School, Culrure and Organizational Leadership', 3, 'Educ 211', 64, '', 'First', '3', 3, 0),
(785, 'Educ 303 ', 'Assessment in Learning 1', 3, 'Educ 211', 64, '', 'First', '3', 3, 0),
(786, 'SSP 311', 'Gender and Society', 3, 'None', 64, '', 'First', '3', 3, 0),
(787, 'AH 304', 'Philippine Popular Culture', 3, 'None ', 64, '', 'First', '3', 3, 0),
(788, 'Fil 206', 'Introduksyon sa Pananaliksik-Wika at Panitikan', 3, 'Fil 202', 64, '', 'First', '3', 3, 0),
(789, 'Lit 301', 'Panulaang Filipino', 3, 'Fil 303', 64, '', 'Second', '3', 3, 0),
(790, 'Lit 302', 'Dulaang Filipino ', 3, 'Lit 204', 64, '', 'Second', '3', 3, 0),
(791, 'Educ 304', 'Assessment in Learning 2', 3, 'Educ 303', 64, '', 'Second', '3', 3, 0),
(792, 'Educ 305', 'The Teacher and the School Curriculum', 3, 'Educ 212', 64, '', 'Second', '3', 3, 0),
(793, 'Educ 306', 'Building and Enhancing New Literacies Across the Curriculum', 3, 'Educ 302', 64, '', 'Second', '3', 3, 0),
(794, 'TTL 2 ', 'Technology for Teaching and Learning 2', 3, 'TTL 1', 64, '', 'Second', '3', 3, 0),
(795, 'Elec ', 'Research Statistic', 3, 'None', 64, '', 'Second', '3', 3, 0),
(796, 'Fil 311', 'Pagsasalin sa Ibat-ibang Disiplina ', 3, 'Fil 301, Fil 303', 64, '', 'Second', '3', 3, 0),
(797, 'Fil 312', 'Malikhaing Pagsulat', 3, 'Fil 301, Fil 303', 64, '', 'Second', '3', 3, 0),
(798, 'FS 1', 'Field Study 1', 3, 'All Professional and Major Sub', 64, '', 'First', '4', 3, 0),
(799, 'FS 2', 'Field Study 2', 3, 'All Professional and Major Sub', 64, '', 'First', '4', 3, 0),
(800, 'Review 1', 'LET Review 1', 3, '', 64, '', 'First', '4', 3, 0),
(801, 'TI 410', 'Teaching Internship', 6, 'All Subjects', 64, '', 'Second', '4', 6, 0),
(802, 'Review 2', 'LET Review 2 (Major Subjects)', 3, '', 64, '', 'Second', '4', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblrequirements`
--

CREATE TABLE `tblrequirements` (
  `REQ_ID` int(30) NOT NULL,
  `NSO` varchar(5) NOT NULL DEFAULT 'no',
  `BAPTISMAL` varchar(5) NOT NULL DEFAULT 'no',
  `ENTRANCE_TEST_RESULT` varchar(5) NOT NULL DEFAULT 'no',
  `MARRIAGE_CONTRACT` varchar(5) NOT NULL DEFAULT 'no',
  `CERTIFICATE_OF_TRANSFER` varchar(5) NOT NULL DEFAULT 'no',
  `IDNO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrequirements`
--

INSERT INTO `tblrequirements` (`REQ_ID`, `NSO`, `BAPTISMAL`, `ENTRANCE_TEST_RESULT`, `MARRIAGE_CONTRACT`, `CERTIFICATE_OF_TRANSFER`, `IDNO`) VALUES
(70, 'Yes', 'No', 'Yes', 'No', 'No', 123),
(78, 'No', 'No', 'No', 'No', 'No', 6090),
(81, 'No', 'No', 'No', 'No', 'No', 232);

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL,
  `FATHER` varchar(255) NOT NULL,
  `FATHER_OCCU` varchar(255) NOT NULL,
  `MOTHER` varchar(255) NOT NULL,
  `MOTHER_OCCU` varchar(255) NOT NULL,
  `BOARDING` varchar(5) NOT NULL DEFAULT 'no',
  `WITH_FAMILY` varchar(5) NOT NULL DEFAULT 'yes',
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL,
  `OTHER_PERSON_SUPPORT` varchar(255) NOT NULL,
  `ADDRESS` text NOT NULL,
  `IDNO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `FATHER`, `FATHER_OCCU`, `MOTHER`, `MOTHER_OCCU`, `BOARDING`, `WITH_FAMILY`, `GUARDIAN`, `GUARDIAN_ADDRESS`, `OTHER_PERSON_SUPPORT`, `ADDRESS`, `IDNO`) VALUES
(70, 'Eric Martensen', 'Fisherman', 'Joyce  Dogoy', 'Housewife', 'No', 'Yes', 'Joyce  Dogoy', 'Mancilang, Madridejos, Cebu', 'Sosanna Dogoy', 'Mancilang, Madridejos, Cebu', 123),
(78, '', '', '', '', 'No', 'No', 'BELINDA', '', 'MALBAGO ELEMENTARY', 'MNHS', 6090),
(81, '', '', '', '', 'No', 'No', '', '', '', '', 232);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` int(20) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`) VALUES
(75, 6090, 'JHON', 'ALOLOR', 'O', 'M', '2003-04-23', 'MALBAGO', 'Single', 19, 'FILIPINO', 'ROMAN CATHOLIC', '', 'g', 'JHON@gmail.com'),
(78, 232, 'fgfd', 'df', 'hf', 'M', '2000-06-29', '', 'Single', 21, '', '', '', '', 'dfd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(19, 'Jason Gila', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ay`
--
ALTER TABLE `ay`
  ADD PRIMARY KEY (`AY_ID`),
  ADD UNIQUE KEY `acadyr` (`ACADYR`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`GRADE_ID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`INST_ID`),
  ADD UNIQUE KEY `INST_EMAIL` (`INST_EMAIL`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`YR_ID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`MAJOR_ID`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`PHOTO_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_ID`);

--
-- Indexes for table `schoolyr`
--
ALTER TABLE `schoolyr`
  ADD PRIMARY KEY (`SYID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SEM_ID`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`STUDSUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`);

--
-- Indexes for table `tblrequirements`
--
ALTER TABLE `tblrequirements`
  ADD PRIMARY KEY (`REQ_ID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`DETAIL_ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ay`
--
ALTER TABLE `ay`
  MODIFY `AY_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `INST_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `YR_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `MAJOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ROOM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schoolyr`
--
ALTER TABLE `schoolyr`
  MODIFY `SYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `SEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=803;

--
-- AUTO_INCREMENT for table `tblrequirements`
--
ALTER TABLE `tblrequirements`
  MODIFY `REQ_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
