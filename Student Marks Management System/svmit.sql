-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 08:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `Id` int(30) NOT NULL,
  `Enrollment_No` varchar(30) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Ten` varchar(30) NOT NULL,
  `Twenty` varchar(30) NOT NULL,
  `Total` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`Id`, `Enrollment_No`, `StudentName`, `Branch`, `Subject`, `Ten`, `Twenty`, `Total`, `Status`) VALUES
(1, '150450107001', 'Abhishek Sudarshan', 'sem-6 computer(2018)', 'Advance java(AJ)', '0', '20  ', '20', 'PASS'),
(2, '150450107002', 'Ahir Radhikaben Kanubhai', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(3, '150450107004', 'Baria Nived Jyotishbhai', 'sem-6 computer(2018)', 'Advance java(AJ)', '4', '11', '15', 'PASS'),
(4, '150450107005', 'Bhavsar Mrudang A.', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(5, '150450107006', 'Bhuva Sagarkumar J.', 'sem-5 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(6, '150450107007', 'Bony Antony', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(7, '150450107008', 'Christian Seemran W.', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(8, '150450107009', 'Contractor Dhrumil S.', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(9, '150450107010', 'Dharaben Prajapati', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE `fac` (
  `Id` int(20) NOT NULL,
  `FacName` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Branch` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`Id`, `FacName`, `Branch`, `Password`) VALUES
(9, 'Manvendra', 'Computer Engineering', 'manu1234'),
(10, 'AKshay', 'Computer Engineering', 'akshpatel'),
(11, 'Rajesh', 'Computer Engineering', 'rajesh123');

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `Id` int(30) NOT NULL,
  `Enrollment_No` varchar(30) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Ten` varchar(30) NOT NULL,
  `Twenty` varchar(30) NOT NULL,
  `Total` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`Id`, `Enrollment_No`, `StudentName`, `Branch`, `Subject`, `Ten`, `Twenty`, `Total`, `Status`) VALUES
(1, '150450107001', 'Abhishek Sudarshan', 'sem-6 computer(2018)', 'Advance java(AJ)', '1', '20  ', '21', 'PASS'),
(2, '150450107002', 'Ahir Radhikaben Kanubhai', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(3, '150450107004', 'Baria Nived Jyotishbhai', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(4, '150450107005', 'Bhavsar Mrudang A.', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(5, '150450107006', 'Bhuva Sagarkumar J.', 'sem-5 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(6, '150450107007', 'Bony Antony', 'sem-6 computer(2018)', 'Advance java(AJ)', '5', '15', '20', 'PASS'),
(7, '150450107008', 'Christian Seemran W.', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(8, '150450107009', 'Contractor Dhrumil S.', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', ''),
(9, '150450107010', 'Dharaben Prajapati', 'sem-6 computer(2018)', 'Advance java(AJ)', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fac`
--
ALTER TABLE `fac`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fac`
--
ALTER TABLE `fac`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `it`
--
ALTER TABLE `it`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
