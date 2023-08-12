-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 06:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isActive` INT(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `isActive`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', NULL, NULL, NULL),
(2, 'admin2', 'admin2@admin2.com', 'admin2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'admin3', 'admin3@admin3.com', 'admin3', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(2) NOT NULL,
  `coursename` varchar(200) DEFAULT NULL,
  `isActive` INT(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `board` (
  `ID` int(2) NOT NULL,
  `board_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Dumping data for table `courses`
--
INSERT INTO `board` (`ID`, `board_name`) VALUES
(0,'DHAKA'),
(1,'CUMILLA'),
(2,'CHITTAGONG'),
(3,'BARISHAL'),
(4,'DINAJPUR'),
(5,'JESSORE'),
(6,'MYMENSING'),
(7,'RAJSHAHI'),
(8,'SYLHET');

INSERT INTO `courses` (`ID`, `coursename`, `isActive`) VALUES
(27, 'A', NULL),
(29, 'B', NULL),
(30, 'C', NULL),
(31, 'D', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_information`
--

CREATE TABLE `education_information` (
  `E_ID` int(3) NOT NULL,
  `ID` int(9) NOT NULL,
  `ssc_board` varchar(700) NOT NULL,
  `ssc_per` varchar(300) NOT NULL,
  `ssc_year` varchar(500) NOT NULL,
  `hsc_board` INT NOT NULL,
  `hsc_per` varchar(300) NOT NULL,
  `hsc_year` varchar(500) NOT NULL,
  `isActive` INT(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_information`
--

-- INSERT INTO `education_information` (`E_ID`, `ID`, `ssc_board`, `ssc_school`, `ssc_per`, `ssc_year`, `ssc_attempt`, `hsc_board`, `hsc_school`, `hsc_per`, `hsc_year`, `hsc_attempt`, `grad_deg`, `grad_board`, `grad_school`, `grad_per`, `grad_year`, `grad_attempt`, `pgrad_deg`, `pgrad_board`, `pgrad_school`, `pgrad_per`, `pgrad_year`, `pgrad_attempt`, `isActive`) VALUES
-- ();

-- --------------------------------------------------------

--
-- Table structure for table `education_information_be`
--

CREATE TABLE `education_information_be` (
  `BE_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `ssc_school` varchar(100) NOT NULL,
  `ssc_year` varchar(100) NOT NULL,
  `ssc_percentage` varchar(100) NOT NULL,
  `ssc_class` varchar(100) NOT NULL,
  `hsc_school` varchar(100) NOT NULL,
  `hsc_year` varchar(100) NOT NULL,
  `hsc_pcm` varchar(100) NOT NULL,
  `hsc_percentage` varchar(100) NOT NULL,
  `hsc_class` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jee_main_rank` varchar(100) NOT NULL,
  `contact_01` varchar(100) NOT NULL,
  `contact_02` varchar(100) DEFAULT NULL,
  `acpc_no` varchar(100) DEFAULT NULL,
  `acpc_merit` varchar(100) DEFAULT NULL,
  `p1` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p3` varchar(100) NOT NULL,
  `p4` varchar(100) NOT NULL,
  `isAvailable` INT(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_information_be`
--

INSERT INTO `education_information_be` (`BE_ID`, `ID`, `ssc_school`, `ssc_year`, `ssc_percentage`, `ssc_class`, `hsc_school`, `hsc_year`, `hsc_pcm`, `hsc_percentage`, `hsc_class`, `roll_no`, `physics`, `chemistry`, `maths`, `total`, `jee_main_rank`, `contact_01`, `contact_02`, `acpc_no`, `acpc_merit`, `p1`, `p2`, `p3`, `p4`, `isAvailable`) VALUES
(1, 1, 'acpcmeribe', '2016', '55', 'A', 'acpcmeribe', '201', '55', '55', 'A', 'ACPC1', 50, 50, 50, 150, 'JEE2', '9033655920', '', '', '', 'ME', 'EE', 'CSE', 'CE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `selected_courses`
--

CREATE TABLE `selected_courses` (
  `S_ID` int(2) NOT NULL,
  `ID` int(30) NOT NULL,
  `coursename` int,
  `isAvailable` INT(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `course` (
  `ID` int(3) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `selected_courses`
--

INSERT INTO `selected_courses` (`S_ID`, `ID`, `coursename`, `isAvailable`) VALUES
(1, 2, 2, 1),
(2, 0, 3, 1),
(3, 0, 2, 1),
(4, 2, 2, 1),
(5, 2, 4, 1),
(6, 2, 4, 1),
(7, 4, 0, 1),
(8, 1, 0, 1);


-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `ID` int(3) NOT NULL,
  `FULLNAME` varchar(70) DEFAULT NULL,
  `GENDER` varchar(8) DEFAULT NULL,
  `PNUMBER` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `register_date` datetime ,
  `profile_image` varchar(100) DEFAULT NULL,
  `isActive` INT(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_data`
--

-- INSERT INTO `student_data` (`ID`, `FULLNAME`, `GENDER`,  `PNUMBER`, `EMAIL`, `PASSWORD`, `register_date`,  `profile_image`, `isActive`) VALUES
-- (1, 'YASH KARANKE', 'MALE', 'B+VE', 'VADODARA							', 'VADODARA', 'GUJARAT', '390001', '9714574465', 'dex.papa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '', NULL),
-- (2, 'YASH KARANKE', 'MALE', 'B+VE', 'VADODARA							', 'VADAODARA', 'GJ', '390001', '9714574465', 'dex@dex.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-08', NULL, '', NULL),
-- (3, 'Abdul Al Mamun', 'Male', 'Moslem', 'Chatkhil ,  Noakhali', 'Noakhali', 'Chittagong', '3873', '01642751000', 'mr.abdulalmamun.bd@gmail.com', '6450d14f732488d6f6426a0970f2404e', '2021-09-25', '16-09-1998', 'profile_images/2.PNG', 1),
-- (4, 'Abdul Al Mamun', 'Male', 'A-VE', 'Chatkhil ,  Noakhali', 'Noakhali', 'Chittagong', '3873', '01642751000', 'munna10359@gmail.com', '22a4e59c405b2e198396090c31220cc9', '2021-09-25', '16-09-1997', 'profile_images/5.Keypad.PNG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `coursename` (`coursename`);
  

ALTER TABLE `board`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `education_information`
--
ALTER TABLE `education_information`
  ADD PRIMARY KEY (`E_ID`),
  ADD FOREIGN KEY(`hsc_board`) REFERENCES `board`(`ID`) ;

--
-- Indexes for table `education_information_be`
--
ALTER TABLE `education_information_be`
  ADD PRIMARY KEY (`BE_ID`);

ALTER TABLE `selected_courses`
  ADD PRIMARY KEY (`S_ID`);
--
-- Indexes for table `selected_courses`
--
ALTER TABLE `selected_courses`
  ADD FOREIGN KEY(`coursename`) REFERENCES `course`(`ID`) ;

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `stud_name_index` (`FULLNAME`),
  ADD KEY `gender_stud` (`GENDER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `education_information`
--
ALTER TABLE `education_information`
  MODIFY `E_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education_information_be`
--
ALTER TABLE `education_information_be`
  MODIFY `BE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `selected_courses`
--
ALTER TABLE `selected_courses`
  MODIFY `S_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
