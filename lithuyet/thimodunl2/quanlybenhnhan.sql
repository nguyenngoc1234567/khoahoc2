-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 05:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybenhnhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int NOT NULL,
  `patient` varchar(255) DEFAULT NULL,
  `day_hoppital` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `information_patient` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `class` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `patient`, `day_hoppital`, `status`, `information_patient`, `gender`, `class`) VALUES
(4, 'a', '2022-11-17', 'asaaaaaa', 'sdfg', 'qwf', 1),
(6, 'sdfg', '2022-11-18', 'sdf', 'sdf', 'sdfg', 1),
(7, 'trần trường', '2022-11-11', 'ốm', 'gio phong gio linh ', 'nam', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prevention`
--

CREATE TABLE `prevention` (
  `ID` int NOT NULL,
  `Name_prevention` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prevention`
--

INSERT INTO `prevention` (`ID`, `Name_prevention`) VALUES
(1, 'asa'),
(3, 'asamm'),
(4, 'asd'),
(5, 'phong 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `prevention`
--
ALTER TABLE `prevention`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prevention`
--
ALTER TABLE `prevention`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`class`) REFERENCES `prevention` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
