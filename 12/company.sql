-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2021 at 08:07 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dname` varchar(20) NOT NULL,
  `dnumber` int NOT NULL,
  `mgrssn` int DEFAULT NULL,
  `mgrstartdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dname`, `dnumber`, `mgrssn`, `mgrstartdate`) VALUES
('dep1', 1, 102672, NULL),
('dep2', 2, 2, NULL),
('dep20', 20, 102672, NULL),
('DEPT IT', 100, 7, '2006-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `dependant`
--

CREATE TABLE `dependant` (
  `ESSN` int NOT NULL,
  `Dependent_name` varchar(50) NOT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `bdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `dependant`
--

INSERT INTO `dependant` (`ESSN`, `Dependent_name`, `sex`, `bdate`) VALUES
(1, 'hossam', 'm', '2021-05-03'),
(1, 'saad', 'm', '2021-07-08'),
(2, 'farida', 'f', '2021-03-03'),
(5, 'aya', 'f', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `ssn` int NOT NULL,
  `bdate` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `superssn` int DEFAULT NULL,
  `dno` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`fname`, `lname`, `ssn`, `bdate`, `address`, `sex`, `salary`, `superssn`, `dno`) VALUES
('Kamel', 'Mohamed', 1, '2021-08-08', 'agewgwe', 'm', 1500, NULL, 2),
('Hessien', 'mohamed', 2, '2021-08-09', 'qfqfef', 'm', 100, 1, 1),
('hossam', 'ibrahim', 3, '2021-08-09', 'afefwe', 'm', 1500, 2, 1),
('zakaria', 'samy', 4, '2021-08-09', 'afewwe', 'm', 2000, 1, 2),
('sara', 'ahmed', 5, '2021-08-09', 'fwevgw', 'f', 2110, 2, 1),
('aya', 'ahmed', 6, '2021-08-09', 'affe', 'f', 2000, 1, NULL),
('Noha', 'Mohamed', 7, '2021-08-09', 'afew', 'f', 1500, 6, NULL),
('goda', 'ahmed', 102660, '2020-07-11', '4 street', 'm', NULL, 102672, 1),
('hoda', 'ahmed', 102672, '2020-07-12', '3 street 56', 'f', 2200, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pname` varchar(20) DEFAULT NULL,
  `pnumber` int NOT NULL,
  `plocation` varchar(150) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `dnum` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pname`, `pnumber`, `plocation`, `city`, `dnum`) VALUES
('project 1', 1, '12 street ', 'cairo', 1),
('project 2', 2, '14 street afew', 'giza', 2),
('project3', 3, '20 street frwef', 'aswan', 1),
('project4', 4, '4 street elk', 'alex', NULL),
('a project', 5, '14 street wte', 'cairo', 2),
('AL Rabwah', 6, '2 street', 'cairo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `works_for`
--

CREATE TABLE `works_for` (
  `essn` int NOT NULL,
  `pno` int NOT NULL,
  `hours` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `works_for`
--

INSERT INTO `works_for` (`essn`, `pno`, `hours`) VALUES
(1, 6, 20),
(2, 6, 10),
(3, 2, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dnumber`),
  ADD KEY `mgrssn` (`mgrssn`);

--
-- Indexes for table `dependant`
--
ALTER TABLE `dependant`
  ADD PRIMARY KEY (`ESSN`,`Dependent_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ssn`),
  ADD KEY `superssn` (`superssn`),
  ADD KEY `dno` (`dno`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pnumber`),
  ADD KEY `dnum` (`dnum`);

--
-- Indexes for table `works_for`
--
ALTER TABLE `works_for`
  ADD PRIMARY KEY (`essn`,`pno`),
  ADD KEY `pno` (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dnumber` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `dependant`
--
ALTER TABLE `dependant`
  MODIFY `ESSN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ssn` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102673;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pnumber` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`mgrssn`) REFERENCES `employee` (`ssn`);

--
-- Constraints for table `dependant`
--
ALTER TABLE `dependant`
  ADD CONSTRAINT `dependant_ibfk_1` FOREIGN KEY (`ESSN`) REFERENCES `employee` (`ssn`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`superssn`) REFERENCES `employee` (`ssn`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`dno`) REFERENCES `department` (`dnumber`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`dnum`) REFERENCES `department` (`dnumber`);

--
-- Constraints for table `works_for`
--
ALTER TABLE `works_for`
  ADD CONSTRAINT `works_for_ibfk_1` FOREIGN KEY (`pno`) REFERENCES `project` (`pnumber`),
  ADD CONSTRAINT `works_for_ibfk_2` FOREIGN KEY (`essn`) REFERENCES `employee` (`ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
