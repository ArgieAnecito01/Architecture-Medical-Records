-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  `Message` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `Name`, `Email`, `Phone`, `Date`, `Doctor`, `Message`) VALUES
(5, 'Argie Anecito', 'jhayanecito@gmail.com', '09617535617', '2022-07-29', 'Michael John Paco', 'Sumasakit tiyan ko'),
(8, 'Argie Anecito', 'jhayanecito@gmail.com', '09095619103', '2022-07-20', 'Joann Tuapin', 'headache'),
(9, 'Justine Garcia', 'justinepro@gmail.com', '09516345817', '2022-07-30', 'Joann Tuapin', 'head ache'),
(10, 'Justine Bayaban', 'justinebayaban@gmail.com', '09516345817', '2022-07-21', 'Joann Tuapin', 'headache');

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `PATIENTNO` int(35) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `LRN` varchar(35) NOT NULL,
  `DOB` varchar(35) NOT NULL,
  `BIRTHPLACE` varchar(35) NOT NULL,
  `PARENTGUARDIAN` varchar(35) NOT NULL,
  `ADDRESS` varchar(35) NOT NULL,
  `SCHOOLID` varchar(35) NOT NULL,
  `REGION` varchar(35) NOT NULL,
  `TELEPHONENO` varchar(35) NOT NULL,
  `DATEOFEXAMINATION` varchar(35) NOT NULL,
  `TEMPERATUREBP` varchar(35) NOT NULL,
  `HEARTRATEPULSERATERESPIRATORYRATE` varchar(35) NOT NULL,
  `HEIGHT` varchar(35) NOT NULL,
  `WEIGHT` varchar(35) NOT NULL,
  `BMI` varchar(35) NOT NULL,
  `NUTRITIONALSTATUS` varchar(35) NOT NULL,
  `VISIONSCREENINGUSINGAPPROPRIATECHART` varchar(35) NOT NULL,
  `AUDITORYSCREENING` varchar(35) NOT NULL,
  `SKINSCALP` varchar(35) NOT NULL,
  `EYESEARNOSE` varchar(35) NOT NULL,
  `MOUTHTHROATNECK` varchar(35) NOT NULL,
  `LUNGSHEART` varchar(35) NOT NULL,
  `ABDOMEN` varchar(35) NOT NULL,
  `DEFORMITIES` varchar(35) NOT NULL,
  `IRONSUPPLEMENTATION` varchar(35) NOT NULL,
  `DEWORMING` varchar(35) NOT NULL,
  `IMMUNIZATION` varchar(35) NOT NULL,
  `SBFPBENEFICIARY` varchar(35) NOT NULL,
  `FOURPSBENEFICIARY` varchar(35) NOT NULL,
  `MENARCHE` varchar(35) NOT NULL,
  `DATE` varchar(35) NOT NULL,
  `CHIEFCOMPLAINT` varchar(100) NOT NULL,
  `INTERVENTIONTREATMENTDONE` varchar(35) NOT NULL,
  `REMARKS` varchar(100) NOT NULL,
  `medicine_recommend` varchar(100) NOT NULL,
  `ATTENDEDBY` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`PATIENTNO`, `Name`, `LRN`, `DOB`, `BIRTHPLACE`, `PARENTGUARDIAN`, `ADDRESS`, `SCHOOLID`, `REGION`, `TELEPHONENO`, `DATEOFEXAMINATION`, `TEMPERATUREBP`, `HEARTRATEPULSERATERESPIRATORYRATE`, `HEIGHT`, `WEIGHT`, `BMI`, `NUTRITIONALSTATUS`, `VISIONSCREENINGUSINGAPPROPRIATECHART`, `AUDITORYSCREENING`, `SKINSCALP`, `EYESEARNOSE`, `MOUTHTHROATNECK`, `LUNGSHEART`, `ABDOMEN`, `DEFORMITIES`, `IRONSUPPLEMENTATION`, `DEWORMING`, `IMMUNIZATION`, `SBFPBENEFICIARY`, `FOURPSBENEFICIARY`, `MENARCHE`, `DATE`, `CHIEFCOMPLAINT`, `INTERVENTIONTREATMENTDONE`, `REMARKS`, `medicine_recommend`, `ATTENDEDBY`) VALUES
(12, 'FERN OCHIA', '20193450', '2000-07-20', 'STO TOMAS', 'MARILYN Anecito', 'STO TOMAS', '20193450', '1', '09617535617', '2022-07-20', '110', 'GOOD', '60', '100', '19', 'Normal Weight', 'Passed', 'Passed', 'Impetigo/boil', 'Mucus Discharge', 'INflamed pharynx', 'Tenderness', 'Tenderness', 'Acquired', 'checked', 'checked', 'none', 'checked', 'unchecked', 'unchecked', '2022-07-20', 'good', 'GOODS', 'GOODS', '', 'joan tupain');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `Stocks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine`, `Stocks`) VALUES
(4, 'loperamide', 12);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LRN` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `Name`, `LRN`, `Date`) VALUES
(1, 'Fern Anecito', '20193450', '2022-07-20'),
(3, 'Argie Anecito', '20193449', '2022-07-21'),
(4, 'Justine Bayaban', '20193333', '2022-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentid`);

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`PATIENTNO`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `med`
--
ALTER TABLE `med`
  MODIFY `PATIENTNO` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
