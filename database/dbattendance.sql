-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 05:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbattendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `CourseID` int(11) NOT NULL,
  `CourseCode` varchar(30) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DepartmentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `DepartmentID` int(11) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Description` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(30) NOT NULL,
  `LOGMODE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(11) NOT NULL,
  `StudentID` text NOT NULL,
  `faceID` text NOT NULL,
  `Firstname` varchar(99) NOT NULL,
  `Lastname` varchar(99) NOT NULL,
  `Middlename` varchar(99) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `BirthDate` date NOT NULL,
  `Age` int(11) NOT NULL,
  `ContactNo` varchar(30) NOT NULL,
  `YearLevel` varchar(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `StudPhoto` varchar(255) NOT NULL,
  `guardianEmail` text NOT NULL,
  `Cand_Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltimetable`
--

CREATE TABLE `tbltimetable` (
  `TimeTableID` int(11) NOT NULL,
  `StudentID` varchar(90) NOT NULL,
  `TimeInAM` varchar(30) NOT NULL,
  `TimeOutAM` varchar(30) NOT NULL,
  `TimeInPM` varchar(30) NOT NULL,
  `TimeOutPM` varchar(30) NOT NULL,
  `AttendDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblverifytimeintimeout`
--

CREATE TABLE `tblverifytimeintimeout` (
  `VerifyID` int(11) NOT NULL,
  `StudentID` varchar(90) NOT NULL,
  `TimeIn` varchar(30) NOT NULL,
  `TimeOut` varchar(30) NOT NULL,
  `Verification` varchar(90) NOT NULL,
  `DateValidation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` int(11) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `USERIMAGE`) VALUES
(1, 'Mina Sharon Myoi', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 1234, 'photos/316821616_532396178899939_8378998540141484523_n.jpg'),
(12, '22', '2', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'Administrator', 0, 'photos/220904-TWICE-Chaeyoung-documents-2(1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`AutoID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `DepartmentID` (`DepartmentID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltimetable`
--
ALTER TABLE `tbltimetable`
  ADD PRIMARY KEY (`TimeTableID`);

--
-- Indexes for table `tblverifytimeintimeout`
--
ALTER TABLE `tblverifytimeintimeout`
  ADD PRIMARY KEY (`VerifyID`),
  ADD UNIQUE KEY `StudentID` (`StudentID`);

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
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `AutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `DepartmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tbltimetable`
--
ALTER TABLE `tbltimetable`
  MODIFY `TimeTableID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tblverifytimeintimeout`
--
ALTER TABLE `tblverifytimeintimeout`
  MODIFY `VerifyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
