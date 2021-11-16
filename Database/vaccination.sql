-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 02:28 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `LastLogin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Phone`, `LastLogin`) VALUES
(1, 'Hafiz', 'Raju', 'hafizraju.cse.bubt@gmail.com', 'raju', '01721882758', ''),
(2, 'Md. Imriaz', 'Uddin', 'imriaz.cse.bubt@gmail.com', 'imriaz', '01521227844', ''),
(3, 'Shajnin', 'Hossain', 'shajnin@gmail.com', 'shajnin', '01627302009', '');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `child_ID` int(10) NOT NULL,
  `child_FullName` varchar(20) NOT NULL,
  `Guardian_Name` varchar(20) NOT NULL,
  `child_birthday` varchar(20) NOT NULL,
  `Guardian_Email` varchar(50) NOT NULL,
  `child_Password` varchar(20) NOT NULL,
  `child_Address` varchar(200) NOT NULL,
  `Guardian_Phone` varchar(20) NOT NULL,
  `child_city` varchar(20) NOT NULL,
  `LastLogin` varchar(50) NOT NULL,
  `child_photo_path` varchar(250) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`child_ID`, `child_FullName`, `Guardian_Name`, `child_birthday`, `Guardian_Email`, `child_Password`, `child_Address`, `Guardian_Phone`, `child_city`, `LastLogin`, `child_photo_path`, `Gender`) VALUES
(0, 'Shaj', 'Shajnin Hossain', '2020-10-13', 'shajnin@gmail.com', 'shajnin', 'Gopalgonj', '+8801627302009', 'Gopalgonj', '', '', 'Female'),
(10001, 'Eman', 'Md. Imriaz', '04-10-2030', 'md.imriaz@gmail.com', 'imriaz', 'Mukim Sarang Bari, Gachbaria, Mirsarai, Chittagong', '+8801647446111', 'Chittagong', '', '', 'Male'),
(0, 'Hafizuudin', 'Raju', '2020-11-03', 'hafizraju@gmail.com', 'raju', 'Barishal', '+8801754844595', 'Barishal', '', '', 'Male'),
(0, 'Saikot', 'Saifullah Mansur', '2020-10-30', 'saikot@gmail.com', 'saikot', 'Kustia', '+8801874545580', 'Kustia', '', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Feedback` varchar(1000) DEFAULT NULL,
  `F_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `Feedback`, `F_ID`) VALUES
('hafizraju.cse.bubt@gmail.com', 'Hafiz', 'good ', 1),
('nishat@gmail.com', 'Nishat', 'This is very unique & helpful for everyone.', 2),
('jerin@gmail.com', 'Jerin', 'I like their design and important information provided by them.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_vaccine`
--

CREATE TABLE `user_vaccine` (
  `V_ID` int(10) NOT NULL,
  `V_name` varchar(50) NOT NULL,
  `Guardian_Phone` varchar(14) NOT NULL,
  `V_strt_time` varchar(50) NOT NULL,
  `V_Dose` varchar(10) NOT NULL,
  `V_price` int(100) NOT NULL,
  `V_place` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_vaccine`
--

INSERT INTO `user_vaccine` (`V_ID`, `V_name`, `Guardian_Phone`, `V_strt_time`, `V_Dose`, `V_price`, `V_place`) VALUES
(1, 'Hepa-B', '+8801647446111', '2020-11-09', '2', 500, 'mirpur10'),
(2, 'Polio Vaccination', '+8801754844595', '2020-09-03', '1', 0, 'Barishal'),
(3, 'Polio Vaccination', '+8801754844595', '2020-11-09', '2', 0, 'Dhaka'),
(4, 'Yellow Fever', '+8801874545580', '2020-11-08', '1', 500, 'Kustia');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinelist`
--

CREATE TABLE `vaccinelist` (
  `V_ID` int(10) NOT NULL,
  `V_name` varchar(50) NOT NULL,
  `V_i_time` varchar(50) NOT NULL,
  `V_e_time` varchar(50) NOT NULL,
  `V_price` int(50) NOT NULL,
  `V_place` varchar(1000) NOT NULL,
  `V_dose` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinelist`
--

INSERT INTO `vaccinelist` (`V_ID`, `V_name`, `V_i_time`, `V_e_time`, `V_price`, `V_place`, `V_dose`) VALUES
(0, 'Cholera', '2', '4', 500, 'Dhaka, Chittagong, Barishal', 2),
(0, 'Hepa-B', '30', '70', 1000, 'Dhaka, Barishal, Savar', 5),
(0, 'Influenza', '1', '2', 100, 'Dhaka, Barishal, Savar', 2),
(0, 'Polio Vaccination', '2 month', '6 Year', 0, 'Dhaka, Chittagong, Barishal, Gopalgonj', 4),
(0, 'Yellow Fever', '1', '2', 500, 'Dhaka, Barishal, Savar', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`Guardian_Phone`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `user_vaccine`
--
ALTER TABLE `user_vaccine`
  ADD PRIMARY KEY (`V_ID`),
  ADD KEY `Guardian_Phone` (`Guardian_Phone`);

--
-- Indexes for table `vaccinelist`
--
ALTER TABLE `vaccinelist`
  ADD PRIMARY KEY (`V_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_vaccine`
--
ALTER TABLE `user_vaccine`
  MODIFY `V_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_vaccine`
--
ALTER TABLE `user_vaccine`
  ADD CONSTRAINT `user_vaccine_ibfk_1` FOREIGN KEY (`Guardian_Phone`) REFERENCES `child` (`Guardian_Phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
