-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 12:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sad3`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_subject_tbl`
--

CREATE TABLE `project_subject_tbl` (
  `project_subject_ID` int(11) NOT NULL,
  `project_ID` int(11) NOT NULL,
  `subject_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_subject_tbl`
--

INSERT INTO `project_subject_tbl` (`project_subject_ID`, `project_ID`, `subject_ID`) VALUES
(1, 1, 101),
(2, 2, 101),
(3, 3, 101),
(4, 4, 101);

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `Project_ID` int(11) NOT NULL,
  `Project_Name` varchar(50) NOT NULL,
  `Project_Desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`Project_ID`, `Project_Name`, `Project_Desc`) VALUES
(1, 'Project1', 'Coding1'),
(2, 'Project2', 'Coding2'),
(3, 'Project3', 'Coding3'),
(4, 'Project4', 'Coding4'),
(5, 'Test1', 'Test11'),
(6, 'Test2', 'Test22'),
(7, 'Test3', 'Test33'),
(8, 'Test4', 'Test4'),
(9, 'Project5', 'Project5'),
(10, 'Test7', 'Test7'),
(11, 'PP', 'PP'),
(12, 'niko proj', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `subject_ID` int(11) NOT NULL,
  `subject_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`subject_ID`, `subject_Name`) VALUES
(101, 'Programming1'),
(102, 'Programming2'),
(103, 'Programming3'),
(104, 'Programming4');

-- --------------------------------------------------------

--
-- Table structure for table `subject_user_tbl`
--

CREATE TABLE `subject_user_tbl` (
  `subject_user_Tbl` int(11) NOT NULL,
  `tbl_user_ID` int(11) NOT NULL,
  `subject_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_user_tbl`
--

INSERT INTO `subject_user_tbl` (`subject_user_Tbl`, `tbl_user_ID`, `subject_ID`) VALUES
(1, 1, 101),
(2, 1, 102),
(3, 1, 103),
(4, 1, 104);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `tbl_user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`tbl_user_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', 'ian', 'admin', 'admin', 'not_allowed'),
(2, 'ian', 'ian', 'admin', 'admin', 'allowed'),
(3, 'niko lubao', 'niko', 'student', 'user', 'allowed'),
(4, 'dotdot', 'dotdot23', 'dotdot', 'user', 'not_allowed'),
(5, 'yuan paray', 'adminyuan', 'admin123', 'admin', 'allowed'),
(6, 'cris manero', 'cManero', 'student', 'user', 'not_allowed'),
(7, 'Test1', 'stud1', 'stud1', 'user', 'allowed'),
(8, 'nikokado', 'niko12', '222', 'user', ''),
(9, 'kuya', 'kuyabigbrother', '333', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_subject_tbl`
--
ALTER TABLE `project_subject_tbl`
  ADD PRIMARY KEY (`project_subject_ID`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`Project_ID`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `subject_user_tbl`
--
ALTER TABLE `subject_user_tbl`
  ADD PRIMARY KEY (`subject_user_Tbl`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`tbl_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_subject_tbl`
--
ALTER TABLE `project_subject_tbl`
  MODIFY `project_subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `Project_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `subject_user_tbl`
--
ALTER TABLE `subject_user_tbl`
  MODIFY `subject_user_Tbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `tbl_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
