-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 12:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrough`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `Emp_ID` int(11) NOT NULL,
  `Emp_Name` varchar(50) NOT NULL,
  `Emp_Salary` decimal(10,0) NOT NULL,
  `Phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`Emp_ID`, `Emp_Name`, `Emp_Salary`, `Phone`) VALUES
(3, 'Nihal', '45000', 923331325478),
(4, 'Bilal', '45000', 923136545987);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `Std_ID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `Fee` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`Std_ID`, `FullName`, `CourseName`, `Fee`) VALUES
(0, '', '', '0'),
(1001, 'Muzammill', 'ADSE', '6000'),
(1002, 'Mukhtiar Ali', 'ADSE', '6500'),
(1003, 'Yusra', 'ADSE', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `Users_ID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`Users_ID`, `FullName`, `Username`, `Password`) VALUES
(1, 'Hamza Khan', 'hamza@93', 'hamza@23'),
(2, 'Tariq', 'tariq#21', 'tariq123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`Std_ID`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`Users_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `Users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
