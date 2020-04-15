-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 01:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `ambulanceID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `driverName` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `comission` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`ambulanceID`, `name`, `driverName`, `owner`, `price`, `phone`, `email`, `area`, `discount`, `comission`, `status`) VALUES
(1, 'Red rose Ambulance', 'Rashed Hassan', 'Rafiq Ullah', 3000, '019435345234', 'arashed23@gmail.com', 'Mirpur10', '10%', '2%', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentconfirm`
--

CREATE TABLE `appointmentconfirm` (
  `serial` int(11) NOT NULL,
  `Patient` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentconfirm`
--

INSERT INTO `appointmentconfirm` (`serial`, `Patient`, `doctor`, `hospital`, `manager`, `phone`, `age`) VALUES
(1, 'aad', 'Rafiq Jalal', 'Enam Medical College', 'Hannan Sharif', '23456554', '12'),
(2, 'Foysal Ahamed', 'Rafiq Jalal', 'Enam Medical College', 'Hannan Sharif', '017867223743', '21');

-- --------------------------------------------------------

--
-- Table structure for table `bookingaccepted`
--

CREATE TABLE `bookingaccepted` (
  `id` int(11) NOT NULL,
  `hospitalName` varchar(100) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `booking` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingaccepted`
--

INSERT INTO `bookingaccepted` (`id`, `hospitalName`, `patientName`, `booking`, `phoneNumber`, `address`) VALUES
(1, 'Enam Medical College', 'borhan', 'ward', '676573', 'Motijhil,Dhaka'),
(2, 'Ibn Sina Medical College', 'abc', 'cabin', '456234534', 'Motijhil,Dhaka'),
(3, 'Ibn Sina Medical College', 'abc', 'cabin', '456234534', 'Motijhil,Dhaka'),
(4, 'Enam Medical College', 'borhan', 'ward', '676573', 'Motijhil,Dhaka'),
(5, 'Red Rose Hospital', 'rakib hassan', 'cabin', '0183434343', 'Mirpur10,Dhaka'),
(6, 'Ibn sina medical', 'ridoy kabir', 'cabin', '017821232123', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `cabinbook`
--

CREATE TABLE `cabinbook` (
  `HospitalID` int(11) NOT NULL,
  `HospitalName` varchar(255) NOT NULL,
  `managerName` varchar(50) NOT NULL,
  `comission` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `ward` varchar(11) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `CabinNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinbook`
--

INSERT INTO `cabinbook` (`HospitalID`, `HospitalName`, `managerName`, `comission`, `discount`, `ward`, `phone`, `CabinNo`) VALUES
(3, 'Enam Medical College', 'Hassan Ali', '4%', '3%', '30', '018736287734', 0),
(4, 'fg', 'fsg', '45', '54', '45', '5454', 54),
(5, 'df', 'f vb', '54', '54', '78', '5454', 54),
(7, 'rrr', 'jhjn', '33', '55', '22', '01999999', 2),
(9, 'ibn sina', 'rafiq', '23', '20', '8', '01723333333', 4);

-- --------------------------------------------------------

--
-- Table structure for table `doctorappointment`
--

CREATE TABLE `doctorappointment` (
  `doctorID` int(11) NOT NULL,
  `doctorName` varchar(100) NOT NULL,
  `Hospital` varchar(100) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorappointment`
--

INSERT INTO `doctorappointment` (`doctorID`, `doctorName`, `Hospital`, `schedule`, `manager`, `title`) VALUES
(1, 'Jashim Uddin', 'Ibn Sina', '10am - 5pm', 'Ramjan Uddin', 'Medicine'),
(2, 'Rafiq Jalal', 'Enam Medical College', '5pm - 11pm', 'Hannan Sharif', 'Gastrology');

-- --------------------------------------------------------

--
-- Table structure for table `doctorconfirm`
--

CREATE TABLE `doctorconfirm` (
  `serial` int(11) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorconfirm`
--

INSERT INTO `doctorconfirm` (`serial`, `hospital`, `patient`, `phone`, `doctor`) VALUES
(0, 'Enam Medical College', 'sd', '12343', 'Rafiq Jalal');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicineID` int(11) NOT NULL,
  `managerName` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price_buy` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicineID`, `managerName`, `name`, `price_buy`, `price`) VALUES
(1, 'rahim', 'Napa', 10, 12),
(2, 'rahim', 'Entacid', 20, 24),
(3, 'borhan', 'Napa Extra', 20, 25),
(4, 'borhan', 'paracitamol', 8, 10),
(5, 'borhan', 'd', 43, 43),
(6, 'borhan', 'Omidon', 25, 30),
(7, 'borhan', 'Motigard', 40, 50),
(8, 'borhan', 'ceptron', 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `medicineconfirm`
--

CREATE TABLE `medicineconfirm` (
  `id` int(11) NOT NULL,
  `Client` varchar(100) NOT NULL,
  `medicine` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicinelist`
--

CREATE TABLE `medicinelist` (
  `id` int(11) NOT NULL,
  `client` varchar(100) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicinelist`
--

INSERT INTO `medicinelist` (`id`, `client`, `medicine`, `price`, `phone`) VALUES
(1, 'rahim', 'Napa', 12, ''),
(2, 'rifat', 'Napa', 12, '018237239023334'),
(3, 'rifat', 'paracitamol', 10, '0192782364'),
(4, 'rifat', 'Napa', 12, '018267892373');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `serial` int(11) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`serial`, `sender`, `message`, `receiver`) VALUES
(1, 'borhan', 'hey', 'admin'),
(2, 'borhan', 'hlw', 'admin'),
(3, 'admin', 'hlw', 'borhan'),
(4, 'rifat', 'hi', 'admin'),
(5, 'rifat', 'hlw', 'admin'),
(6, 'admin', 'hlw', 'rifat'),
(7, 'borhan', 'how are you?', 'admin'),
(8, 'rifat', 'hlw', 'admin'),
(9, 'admin', 'fine .what about u?', 'borhan'),
(10, 'borhan', 'hlw', 'admin'),
(11, 'borhan', 'hlw', 'admin'),
(12, 'admin', 'hi', 'borhan');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `noticeID` int(11) NOT NULL,
  `noticeName` varchar(100) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`noticeID`, `noticeName`, `notice`, `time`) VALUES
(1, 'tyrt', 'tytre', '2019-08-21 04:19:23'),
(2, 'yt', 'yf', '0000-00-00 00:00:00'),
(3, 'dfadf', 'rtytrytrrrrrrrrrwyrt', '2019-08-18 20:11:40'),
(4, 'e', 'ew', '2020-12-18 00:00:00'),
(5, 'e', 'erytr', '0000-00-00 00:00:00'),
(6, 'sa', 'sa', '0000-00-00 00:00:00'),
(7, 'jkhererjretre', 'tyuetyu', '2019-08-18 20:21:01'),
(9, '20% discount on cabin booking ', 'Ibn sina Hospital is giving 20% discount', '2019-08-21 10:58:23'),
(10, 'Pharma Closing time', '11:30 p.m', '2019-08-22 09:21:05'),
(11, 'Pharma INdor', 'We are closing 8pm today', '2019-08-22 09:27:11'),
(12, '10% discount offer', '10% discount on any blood test', '2019-08-22 09:30:10'),
(13, '15% discount', '15% discount on every blood test', '2019-08-22 10:48:09'),
(14, 'Pharma Closing time', '10:00 a.m', '2019-08-22 10:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `patientadmit`
--

CREATE TABLE `patientadmit` (
  `serial` int(11) NOT NULL,
  `hospitalName` varchar(100) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `booking` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientadmit`
--

INSERT INTO `patientadmit` (`serial`, `hospitalName`, `patientName`, `age`, `phone`, `address`, `booking`) VALUES
(3, 'Enam Dedical College', 'Rahat Hassan', '21', '0182725261', 'Rampura', 'ward'),
(4, 'Enam Medical College', '', '21', '17238292372', 'Mirpur,Dhaka', 'ward');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userId` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userId`, `username`, `name`, `password`, `type`, `phone`, `email`, `Address`) VALUES
(6, 'sifat', 'Foysal Ahamed Sifat', '1234', 'admin', '01768323810', 'afoysal131@gmail.com', 'Mirpur,Dhaka'),
(8, 'tushar', 'Tushar Roy', 'tusu', 'user', '01798232283', 'tushar12@gmail.com', 'Nikunja,Dhaka'),
(9, 'rifat', 'Farraj Ahmed', 'rifat', 'user', '01798234253', 'farraj12@gmail.com', 'Badda,Dhaka'),
(11, 'shihab', 'yasir Ahmed Shihab', 'yasir', 'user', '08439875324', 'tuerjgher796@gmail.com', 'Dhaka'),
(13, 'dsfgds', 'dsfd', 'sdfgdsf', 'user', 'dsfgdsf', 'afoysal131@gmail.com', 'fsgdf'),
(14, 'fhjhgf', 'fhjh', 'fjfg', 'user', 'fj', 'afoysal131@gmail.com', 'dgh'),
(15, 'karim', 'Karim Uddin', 'Karim', 'hospital', '01982734748', 'karima123@gmail.com', 'khilkhet,Dhaka'),
(16, 'rahim', 'Rahim Khan', 'khan', 'store', '0193278473', 'arahim42@gmail.com', 'Gabtoli,Dhaka\r\n'),
(17, 'tanvir', 'Yousuf Tanvir', '123', 'hospital', '01782637282', 'tanvir1212@gmail.com', 'Khilgaon,Dhaka'),
(18, 'borhan', 'Borhan Uddin', '1111', 'store', '01628352783', 'borhan@gmail.com', 'Khilkhet,DHaka'),
(19, 'tushar', 'Tushar Roy', '2222', 'admin', '01753654213', 'adsfkl@gmail.com', 'Badda,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `storeID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `managerName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `areaCover` varchar(100) NOT NULL,
  `comission` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`storeID`, `name`, `managerName`, `address`, `phone`, `email`, `areaCover`, `comission`, `discount`) VALUES
(1, 'Ananda Pharma', 'Rahim Khan', 'Badda', 1928374291, 'arahim12@gmail.com', 'Malibag,badda,Khilgaw,rampura', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`ambulanceID`);

--
-- Indexes for table `appointmentconfirm`
--
ALTER TABLE `appointmentconfirm`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `bookingaccepted`
--
ALTER TABLE `bookingaccepted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabinbook`
--
ALTER TABLE `cabinbook`
  ADD PRIMARY KEY (`HospitalID`);

--
-- Indexes for table `doctorappointment`
--
ALTER TABLE `doctorappointment`
  ADD PRIMARY KEY (`doctorID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicineID`);

--
-- Indexes for table `medicineconfirm`
--
ALTER TABLE `medicineconfirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicinelist`
--
ALTER TABLE `medicinelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`noticeID`);

--
-- Indexes for table `patientadmit`
--
ALTER TABLE `patientadmit`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`storeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `ambulanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointmentconfirm`
--
ALTER TABLE `appointmentconfirm`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookingaccepted`
--
ALTER TABLE `bookingaccepted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cabinbook`
--
ALTER TABLE `cabinbook`
  MODIFY `HospitalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctorappointment`
--
ALTER TABLE `doctorappointment`
  MODIFY `doctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicineconfirm`
--
ALTER TABLE `medicineconfirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicinelist`
--
ALTER TABLE `medicinelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `noticeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patientadmit`
--
ALTER TABLE `patientadmit`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `storeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
