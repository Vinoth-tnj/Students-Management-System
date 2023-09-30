-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 07:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE `cgpa` (
  `id` int(11) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `cgpa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cgpa`
--

INSERT INTO `cgpa` (`id`, `st_id`, `stu_name`, `cgpa`) VALUES
(1, '10806121', 'John Doe', '8.95'),
(2, '1080623', 'Anuj kumar Singh', '8.03'),
(5, '10A12345', 'Kishore Sharma', ''),
(6, 'ui-99', 'jghj', '9.25'),
(7, 'uii-990', 'Anshul', '9.25'),
(8, '820401', 'Ram', '8.73'),
(9, '820404', 'guru', '7.83');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `st_id` varchar(50) NOT NULL,
  `marks` int(5) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `st_id`, `marks`, `sub`, `semester`) VALUES
(6, '1080623', 100, 'Mini Project', '6th'),
(7, '10806121', 98, 'English Communication-1', '1st'),
(8, '10806121', 92, 'Matrices & Calculus', '1st'),
(9, '10806121', 89, 'Financial Accounting', '1st'),
(10, '10806121', 92, 'Basics of Computing', '1st'),
(11, '10806121', 95, 'Programming in C', '1st'),
(12, '10806121', 100, 'Programming in C Lab', '1st'),
(13, '10806121', 100, 'Office Automation Lab', '1st'),
(14, '10806121', 95, 'Ethics-1', '1st'),
(15, '10806121', 92, 'Personality Development -1', '1st'),
(16, '10806121', 54, 'English Communication-II', '2nd'),
(17, '10806121', 92, 'Inferential Discrete Mathematics', '2nd'),
(18, '10806121', 54, 'Management Accounting', '2nd'),
(19, '10806121', 100, 'Mini Project', '6th'),
(20, '1080623', 70, 'English Communication-1', '1st'),
(21, '1080623', 78, 'Matrices & Calculus', '1st'),
(22, '1080623', 69, 'Financial Accounting', '1st'),
(23, '1080623', 64, 'Basics of Computing', '1st'),
(24, '1080623', 78, 'Programming in C', '1st'),
(25, '1080623', 82, 'Programming in C Lab', '1st'),
(26, '1080623', 84, 'Office Automation Lab', '1st'),
(27, '1080623', 69, 'English Communication-II', '2nd'),
(28, '0', 96, 'English Communication-1', '1st'),
(29, '1080623', 96, 'Inferential Discrete Mathematics', '2nd'),
(30, '0', 87, 'Matrices & Calculus', '1st'),
(31, '0', 87, 'Basics of Computing', '1st'),
(32, '820401', 78, 'English Communication-1', '1st'),
(33, '820401', 87, 'Financial Accounting', '1st'),
(34, '820401', 78, 'Basics of Computing', '1st'),
(35, '820401', 96, 'Programming in C', '1st'),
(36, '820404', 45, 'English Communication-1', '1st'),
(37, '820404', 78, 'Matrices & Calculus', '1st'),
(38, '820404', 65, 'Financial Accounting', '1st'),
(39, '820404', 96, 'Programming in C', '1st'),
(40, '820404', 98, 'Programming in C Lab', '1st'),
(41, '820401', 87, 'Mini Project', '6th'),
(42, '820401', 78, 'C# & .Net Technologies Lab', '6th'),
(43, '820401', 78, 'Computer Graphics & Multimedia Lab', '6th'),
(44, '820401', 67, 'Elective -II', '6th'),
(45, '820401', 87, 'C# & .Net Technologies', '6th'),
(46, '820401', 96, 'Computer Graphics & Multimedia', '6th'),
(47, '820401', 87, 'Ecommerce', '6th'),
(48, '820401', 96, 'English Communication-V', '5th'),
(49, '820401', 78, 'Environmental Studies', '5th'),
(50, '820401', 67, 'Java Programming Lab', '5th'),
(51, '820401', 87, 'Elective -I', '5th'),
(52, '820401', 96, 'Web Technology', '5th'),
(53, '820401', 87, 'Basics of Software Engineering', '5th'),
(54, '820401', 95, 'Java Programming', '5th'),
(55, '820401', 87, 'Web Technology Lab', '5th'),
(56, '820401', 96, 'English Communication-II', '2nd'),
(57, '820401', 87, 'Inferential Discrete Mathematics', '2nd'),
(58, '820401', 96, 'Management Accounting', '2nd'),
(59, '820401', 67, 'Digital Logic Circuit & Microprocessors', '2nd'),
(60, '820401', 78, 'Programming in C++', '2nd'),
(61, '820401', 96, 'Programming in C++ Lab', '2nd'),
(62, '820401', 96, 'Digital Logic Circuit & Microprocessors Lab', '2nd'),
(63, '820401', 87, 'Ethics-II', '2nd'),
(64, '820401', 96, 'Personality Development -II', '2nd'),
(65, '820401', 87, 'English Communication-III', '3rd'),
(66, '820401', 87, 'Numerical Methods for Computer Applications', '3rd'),
(67, '820401', 78, 'Computer Organization & Architecture', '3rd'),
(68, '820401', 87, 'Fundamentals of Data Structure & Algorithms', '3rd'),
(69, '820401', 87, 'OS Concepts', '3rd'),
(70, '820401', 96, 'OS Concepts Lab', '3rd'),
(71, '820401', 96, 'Fundamentals of Data Structure & Algorithms Lab', '3rd'),
(72, '820401', 87, 'Personality Development -III', '3rd'),
(73, '820401', 96, 'English Communication-IV', '4th'),
(74, '820401', 87, 'OOAD', '4th'),
(75, '820401', 87, 'Computer Networks', '4th'),
(76, '820401', 96, 'Fundamentals of Relational DBMS', '4th'),
(77, '820401', 67, 'Visual Programming', '4th'),
(78, '820401', 96, 'Fundamentals of Relational DBMS Lab', '4th'),
(79, '820401', 96, 'Visual Programming Lab', '4th'),
(80, '820401', 96, 'Personality Development -IV', '4th');

-- --------------------------------------------------------

--
-- Table structure for table `semsgpa`
--

CREATE TABLE `semsgpa` (
  `id` int(11) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `sem1_sgpa` varchar(10) NOT NULL,
  `sem2_sgpa` varchar(10) NOT NULL,
  `sem3_sgpa` varchar(10) NOT NULL,
  `sem4_sgpa` varchar(10) NOT NULL,
  `sem5_sgpa` varchar(10) NOT NULL,
  `sem6_sgpa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semsgpa`
--

INSERT INTO `semsgpa` (`id`, `st_id`, `stu_name`, `sem1_sgpa`, `sem2_sgpa`, `sem3_sgpa`, `sem4_sgpa`, `sem5_sgpa`, `sem6_sgpa`) VALUES
(1, '1080623', 'Anuj kumar Singh', '7.3', '8.88', '', '', '', ''),
(2, 'ui-99', 'jghj', '9.25', '', '6.7', '', '', '7.8'),
(3, '820401', 'Ram', '8.81', '', '', '7.4', '', '8.68'),
(4, '820404', 'guru', '7.83', '', '', '', '8.6', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555558, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-10-11 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(5) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `ClassName`, `Section`, `CreationDate`) VALUES
(1, '10', 'A', '2022-01-13 10:42:14'),
(2, '10', 'B', '2022-01-13 10:42:35'),
(3, '10', 'C', '2022-01-13 10:42:41'),
(4, '11', 'A', '2022-01-13 10:42:47'),
(5, '11', 'B', '2022-01-13 10:42:52'),
(6, '11', 'C', '2022-01-13 10:42:57'),
(7, '11', 'D', '2022-01-13 10:43:04'),
(8, '12', 'A', '2022-01-13 10:43:10'),
(9, '12', 'C', '2022-01-13 10:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` mediumtext DEFAULT NULL,
  `ClassId` int(10) DEFAULT NULL,
  `NoticeMsg` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `NoticeTitle`, `ClassId`, `NoticeMsg`, `CreationDate`) VALUES
(2, 'Marks of Unit Test.', 3, 'Meet your class teacher for seeing copies of unit test', '2022-01-19 06:35:58'),
(3, 'Marks of Unit Test.', 2, 'Meet your class teacher for seeing copies of unit test', '2022-01-19 06:35:58'),
(4, 'Test', 3, 'This is for testing.', '2022-02-02 18:17:03'),
(5, 'Test Notice', 8, 'This is for Testing.', '2022-02-02 19:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<div style=\"text-align: start;\"><font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, ????, ??, SimSun, STXihei, ????, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br></div>', NULL, NULL, NULL),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'infodata@gmail.com', 7896541236, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` varchar(200) DEFAULT NULL,
  `NoticeMessage` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `NoticeMessage`, `CreationDate`) VALUES
(2, 'Test Public Notice', 'This is for Testing\r\n', '2022-02-02 19:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `class_handle` varchar(5) NOT NULL,
  `username` varchar(75) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(75) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `staff_name`, `class_handle`, `username`, `staff_id`, `email`, `password`, `gender`, `dob`) VALUES
(1, 'Kalai', '4', 'kalai', 1, 'kalai@gmail.com', 'caddfb312ba614d293bd1a7c73d4a49d', 'Female', '2023-05-18'),
(2, 'Vinoth', '8', 'vinoth', 3, 'vinoth@gmail.com', '7ed8e02e77441dd97e2496386ba3db39', 'Male', '2002-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`, `DateofAdmission`) VALUES
(1, 'jghj', 'jhghjg@gmail.com', '4', 'Male', '2022-01-13', 'ui-99', 'bbmnb', 'mnbmb', 5465454645, 4646546565, 'J-908, Hariram Nagra New Delhi', 'kjhkjh', '202cb962ac59075b964b07152d234b70', 'ebcd036a0db50db993ae98ce380f64191642082944.png', '2022-01-13 08:39:04'),
(2, 'Kishore Sharma', 'kishore@gmail.com', '3', 'Male', '2019-01-05', '10A12345', 'Janak Sharma', 'Indra Devi', 7879879879, 7987979879, 'kjhkhjkhdkshfiludzshfiu\r\nfjedh\r\nk;jk', 'kishore2019', '202cb962ac59075b964b07152d234b70', '5bede9f47102611b4df6241c718af7fc1642314213.jpg', '2022-01-16 00:53:33'),
(3, 'Anshul', 'anshul@gmali.com', '2', 'Female', '1986-01-05', 'uii-990', 'Kailesg', 'jakinnm', 4646546546, 6546598798, 'jlkjkljoiujiouoil', 'anshul1986', '202cb962ac59075b964b07152d234b70', '4f0691cfe48c8f74fe413c7b92391ff41642605892.jpg', '2022-01-19 09:54:52'),
(4, 'John Doe', 'john@gmail.com', '1', 'Female', '2002-02-10', '10806121', 'Anuj Kumar', 'Garima Singh', 1234698741, 1234567890, 'New Delhi', 'john12', 'f925916e2754e5e03f75dd58a5733251', 'ebcd036a0db50db993ae98ce380f64191643825985.png', '2022-02-02 12:49:45'),
(5, 'Anuj kumar Singh', 'akkr@gmail.com', '8', 'Male', '2001-05-30', '1080623', 'Bijendra Singh', 'Kamlesh Devi', 1472589630, 1236987450, 'New Delhi', 'anujk3', 'f925916e2754e5e03f75dd58a5733251', '2f413c4becfa2db4bc4fc2ccead84f651643828242.png', '2022-02-02 13:27:22'),
(6, 'Ram', 'ram@gmail.ocm', '4', 'Male', '2023-05-05', '820401', '--', '--', 1234567890, 1234546787, '--', 'ram', '6a557ed1005dddd940595b8fc6ed47b2', '601e0db564726fa3e4b2e73ea02c8feb1683303264.png', '2023-05-05 16:14:24'),
(12, 'guru', 'guru@gmail.ocm', '4', 'Male', '2023-05-05', '820404', 'ramana', 'rani', 1234567890, 1234546787, 'tnj', 'guru', '77e69c137812518e359196bb2f5e9bb9', '601e0db564726fa3e4b2e73ea02c8feb1683303441.png', '2023-05-05 16:17:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semsgpa`
--
ALTER TABLE `semsgpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cgpa`
--
ALTER TABLE `cgpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `semsgpa`
--
ALTER TABLE `semsgpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
