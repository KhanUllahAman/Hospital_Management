-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 10:59 AM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'arisha', 'sjdgfhdhf');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details_form`
--

CREATE TABLE `booking_details_form` (
  `id` int(250) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `vaccination_name` varchar(200) NOT NULL,
  `class` int(200) NOT NULL,
  `phonenumber` int(200) NOT NULL,
  `comment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details_form`
--

INSERT INTO `booking_details_form` (`id`, `firstname`, `lastname`, `fathername`, `email`, `age`, `blood_group`, `vaccination_name`, `class`, `phonenumber`, `comment_status`) VALUES
(6, 'shayan', 'sheikh', 'moin', 'aman.khan34@yahoo.com', 19, 'A-', 'Sinovac', 12, 2147483647, 1),
(7, 'subhan', 'sheikh', 'kamran', '1122jahangirkhan@gmail.com', 11, 'A+', 'Pfizer', 12, 31222, 0),
(8, 'aliyan', 'sheikh', 'kamran', '1122jahangirkhan@gmail.com', 11, 'A-', 'AstraZeneca', 12, 2147483647, 0),
(9, 'aman', 'khan', 'jahangir', 'khan@gmail.com', 12, 'A+', 'Pfizer', 12, 3150054, 0),
(17, 'ahmed', 'hujghj', 'yujtyujty', 'ahmed@gmail.com', 12, 'A-', 'Pfizer', 15, 35229748, 0);

-- --------------------------------------------------------

--
-- Table structure for table `child detail`
--

CREATE TABLE `child detail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(260) NOT NULL,
  `housenumber` int(250) NOT NULL,
  `housename` varchar(200) NOT NULL,
  `street` text NOT NULL,
  `village` text NOT NULL,
  `posttown` text NOT NULL,
  `postcode` int(200) NOT NULL,
  `mr` varchar(250) NOT NULL,
  `initail` text NOT NULL,
  `surname` varchar(250) NOT NULL,
  `hometelephone` int(200) NOT NULL,
  `mobiletelephone` int(200) NOT NULL,
  `relationtochild` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child detail`
--

INSERT INTO `child detail` (`id`, `firstname`, `status`, `middlename`, `lastname`, `class`, `birthday`, `gender`, `housenumber`, `housename`, `street`, `village`, `posttown`, `postcode`, `mr`, `initail`, `surname`, `hometelephone`, `mobiletelephone`, `relationtochild`, `email`, `parent_id`) VALUES
(50, 'aman', 0, 'ullah', 'khan', '1', '2022-11-20', 'male', 1234, 'khannn', 'khannnn', 'fnvfv', '444', 444, '444', '444', '44', 44, 444, '44', '1122jahangirkhan@gmail.com', 3),
(51, 'SHAYAN', 0, 'AHMED', 'KHAN', '1', '2002-09-09', 'male', 123, 'JASNDF', 'ASDJFNSJFKSFN', 'SADFDN', 'SFN', 324, 'KJSANDSF', 'SADSF', 'SDSFN', 21, 1234, 'ASLDF', 'SHAHYAN@GMAIL.COM', 3),
(52, 'lkdnfs', 0, 'dskjgn', 'kfg', '2', '1999-03-22', 'male', 123, 'JASNDF', 'ASDJFNSJFKSFN', 'SADFDN', 'SFN', 234, '4', 'SDKFL', 'LDNGK', 45234, 234, 'w4525', 'nitish@gmail.com', 3),
(53, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-21', 'male', 1234, 'aaaaaaa', 'aaaaaaaaaaaaaaaa', '333', '1111', 4444, '444', '444', '444', 444, 444, '444', 'aman.khan34@yahoo.com', 2),
(54, 'subhan', 0, 'khan', 'sheikh', '12', '2022-11-21', 'male', 1234, 'aaaaaaa', 'aaaaaaaaaaaaaaaaaa', '1111', '333', 444, 'mr', '1111', '333', 411010, 4444, '444', 'aman.khan34@yahoo.com', 4),
(55, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-22', 'male', 2, 'khan house', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', '111', 4022, 885885, 'mother', 'aman.khan34@yahoo.com', 3),
(57, 'subhan', 0, 'khan', 'aaaa', '12', '2022-11-22', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 3),
(58, 'aman', 0, 'khan', 'khan', '12', '2022-11-22', 'male', 2, 'amna', 'khandnsns', 'nmsdk', 'fdesdfedf', 212423, 'Mrs', 'ffgd', 'fgff', 5156, 5555, 'mother', 'khan@gmail.com', 7),
(61, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-22', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '111', 'aaaaaaaaaaaa', 2, 'Mrs', '111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman.khan34@yahoo.com', 12),
(62, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-22', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', '111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 12),
(63, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-22', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', '111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 12),
(64, 'aliyan', 0, 'khan', 'sheikh', '12', '2022-11-22', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 12),
(66, 'mobile', 0, 'mobile', 'sheikh', '11', '2022-11-23', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '444', 'aaaaaaaaaaaa', 2, 'Mrs', '111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman.khan35@gmail.com', 13),
(67, 'aman', 0, 'aaaa', 'aaaa', '12', '2022-11-23', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', '1111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 14),
(68, 'aman', 0, 'aaaa', 'aaaa', '12', '2022-11-23', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', '1111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 14),
(69, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-23', 'female', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 14),
(70, 'subhan', 0, 'aaaa', 'sheikh', '12', '2022-11-23', 'female', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 14),
(71, 'aliyan', 0, 'Ullah', 'khan', '12', '2022-11-23', 'female', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '111', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman.khan34@yahoo.com', 14),
(72, 'aliyan', 0, 'Ullah', 'khan', '12', '2022-11-23', 'female', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '111', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman.khan34@yahoo.com', 14),
(73, 'aliyan', 0, 'Ullah', 'khan', '12', '2022-11-23', 'female', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '111', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman.khan34@yahoo.com', 14),
(74, 'aliyan', 0, 'Ullah', 'khan', '12', '2022-11-23', 'female', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '111', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman.khan34@yahoo.com', 14),
(83, 'aman', 0, 'aaaa', 'sheikh', '12', '2022-11-24', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'mother', 'aman@gmail.com', 5),
(84, 'ahmed', 0, 'gfgghn', 'tggh', '15', '2022-11-24', 'male', 3636, 'efghg', 'gyrth', 'rghygh', 'ghthrty', 38, 'Mrs', 'hghg', 'ghhgj', 444444, 4444, 'vhfghg', 'ahmed@gmail.com', 15),
(98, 'aliyan', 0, 'aaaa', 'sheikh', '12', '2022-11-28', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', 'aaaaaaaaa', 'aaaaaaaaaaaa', 2, 'Mrs', '1111', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 45),
(99, 'dfdfdd', 0, 'aaaa', 'sheikh', '12', '2022-11-28', 'male', 2, 'aaaaaaa', 'House no CA-7 Alflah society shah faisal colony block #3', '111', 'aaaaaaaaaaaa', 2, 'Mrs', '11', 'aaaaaaaaaaaaaaa', 3044041, 253568, 'father', 'aman.khan34@yahoo.com', 45);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `hospital` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `since` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `username`, `email`, `password`, `hospital`, `area`, `since`) VALUES
(1, 'shayan', 'shayam@gmail.com', 'shayan123', '', '', 0),
(3, '', '', '', 'child hospital', 'shah faisal colony', 2001);

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldetail`
--

CREATE TABLE `hospitaldetail` (
  `id` int(11) NOT NULL,
  `childrenname` varchar(250) NOT NULL,
  `vaccinationname` varchar(200) NOT NULL,
  `vaccinationtime` varchar(200) NOT NULL,
  `vaccinationday` varchar(200) NOT NULL,
  `v_detail` varchar(250) NOT NULL,
  `v_available_unavailable` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitaldetail`
--

INSERT INTO `hospitaldetail` (`id`, `childrenname`, `vaccinationname`, `vaccinationtime`, `vaccinationday`, `v_detail`, `v_available_unavailable`) VALUES
(63, ' oop', 'Pfizer', '08:00 Am', 'Monday', 'hey', 'Availabe'),
(65, 'indus', 'Sputnik V', '09:00 Am', 'Wednesday', 'this vaccination is unavailable', 'Unavailable'),
(66, 'patel', 'AstraZeneca', '03:00 pm', 'Friday', 'this is my', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_list`
--

CREATE TABLE `hospital_list` (
  `id` int(250) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `details` varchar(250) NOT NULL,
  `area` text NOT NULL,
  `since` int(250) NOT NULL,
  `comment_status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_list`
--

INSERT INTO `hospital_list` (`id`, `hospital`, `details`, `area`, `since`, `comment_status`) VALUES
(21, 'indus', 'khfdtygttty', 'shah faisal colony', 1211, 0),
(22, 'indus', 'hhhh', 'shah faisal colony', 1211, 0),
(23, 'aHMED', 'CFSDFFI', 'MACHAR COLONY', 2023, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_register`
--

CREATE TABLE `hospital_register` (
  `id` int(250) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_register`
--

INSERT INTO `hospital_register` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(9, 'INDUS', 'indus@gmail.com', 'user', '123'),
(10, 'hospital', 'hospital@gmail.com', 'user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `pid` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`pid`, `username`, `email`, `password`) VALUES
(1, 'aman', 'aman@gmaill.com', 'aman123');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(11) NOT NULL,
  `hid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `hid`, `pid`, `aid`) VALUES
(1, 1, 1, 1),
(3, 1, NULL, NULL),
(4, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`, `image`) VALUES
(2, 'aman', 'aman@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', ''),
(3, 'saif', 'saif@gmail.com', 'admin', 'saif123', ''),
(4, 'aman', '1122jahangirkhan@gmail.com', 'user', 'aman123', ''),
(5, 'bisma', 'bisma@gmail.comq', 'user', 'bisma123', ''),
(6, 'bisma', 'bisma@gmail.com', 'user', 'bisma123', ''),
(7, 'khan', 'khan@gmail.com', 'user', 'khan123', ''),
(10, 'khan', 'khan@gmail.com', 'user', 'khan123', ''),
(12, 'shameer', 'shameer@gmail.com', 'user', '123', ''),
(13, 'mobile', 'mobile@gmail.com', 'user', '123', ''),
(14, 'book', 'book@gmail.com', 'user', '123', ''),
(15, 'ahmed', 'ahmed@gmail.com', 'user', '1234', ''),
(16, 'admin', 'admin@gmail.com', 'admin', 'admin123', ''),
(45, 'name', 'name@gmail.com', 'user', '123', 'blank-profile-picture-973460__480.webp\r\n'),
(52, 'house', 'house@gmail.com', 'user', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination detail`
--

CREATE TABLE `vaccination detail` (
  `id` int(11) NOT NULL,
  `VaccinationName` varchar(250) NOT NULL,
  `Origin` varchar(260) NOT NULL,
  `CompanyName` varchar(200) NOT NULL,
  `VaccinationDays` varchar(100) NOT NULL,
  `VaccinationTime` varchar(200) NOT NULL,
  `DetailAboutVaccination` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccination detail`
--

INSERT INTO `vaccination detail` (`id`, `VaccinationName`, `Origin`, `CompanyName`, `VaccinationDays`, `VaccinationTime`, `DetailAboutVaccination`) VALUES
(5, 'shayan', 'KHAN', 'ATLSA', 'Thrusday', '11:00 Am', 'PONKA'),
(6, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(7, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(8, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(9, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(10, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(11, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(12, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(13, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(14, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(15, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(16, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(17, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(18, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg'),
(19, 'edgheduif rjds', 'fsdgsdfg', 'gffgegerg', 'Friday', '10:00 Am', 'sdfgsdfgg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking_details_form`
--
ALTER TABLE `booking_details_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child detail`
--
ALTER TABLE `child detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hospitaldetail`
--
ALTER TABLE `hospitaldetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_list`
--
ALTER TABLE `hospital_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_register`
--
ALTER TABLE `hospital_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `hid` (`hid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination detail`
--
ALTER TABLE `vaccination detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details_form`
--
ALTER TABLE `booking_details_form`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `child detail`
--
ALTER TABLE `child detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitaldetail`
--
ALTER TABLE `hospitaldetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `hospital_list`
--
ALTER TABLE `hospital_list`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hospital_register`
--
ALTER TABLE `hospital_register`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `vaccination detail`
--
ALTER TABLE `vaccination detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child detail`
--
ALTER TABLE `child detail`
  ADD CONSTRAINT `child detail_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospital` (`hid`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `parents` (`pid`),
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
