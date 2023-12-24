-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 08:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookshop`
--

CREATE TABLE `bookshop` (
  `Productname` varchar(200) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `Price` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookshop`
--

INSERT INTO `bookshop` (`Productname`, `Category`, `productID`, `Price`, `description`, `pic`) VALUES
('Faber castel 2B pencil', 'STATIONARIES', '64ed8637', '20000000000', 'Onek nice jinish!\r\n', '71iUhJzSD5L._AC_SL1279_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookshoporders`
--

CREATE TABLE `bookshoporders` (
  `Name` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `OrderedProduct` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `TimeGap` time DEFAULT NULL,
  `Notes` text NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `ProdID` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookshoporders`
--

INSERT INTO `bookshoporders` (`Name`, `ID`, `OrderedProduct`, `Quantity`, `TimeGap`, `Notes`, `Mobile`, `ProdID`, `Price`) VALUES
('Md. Darain Khan', '011203010', 'Faber castel 2B pencil', '5', '00:00:00', 'Deliver asap', '01712950127', '64ed8637]', ''),
('Md. Darain Khan', '011203010', 'Faber castel 2B pencil', '5', '00:00:00', 'Deliver asap', '01712950127', '64ed8637]', ''),
('Md. Darain Khan', '011203010', 'Faber castel 2B pencil', '2', '00:00:00', 'ssss', '01712950127', '64ed8637', '20000000000');

-- --------------------------------------------------------

--
-- Table structure for table `coursecontent`
--

CREATE TABLE `coursecontent` (
  `Course Name` varchar(100) NOT NULL,
  `CourseCode` varchar(100) NOT NULL,
  `Section` varchar(3) NOT NULL,
  `Files` varchar(100) NOT NULL,
  `File Details` varchar(300) NOT NULL,
  `FacultyName` varchar(100) NOT NULL,
  `FacultyID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursecontent`
--

INSERT INTO `coursecontent` (`Course Name`, `CourseCode`, `Section`, `Files`, `File Details`, `FacultyName`, `FacultyID`) VALUES
('Web Programming', 'CSE 4165/CSE 465', 'B', '', '', 'Nahid Hossain', 'NHn'),
('Web Programming', 'CSE 4165/CSE 465', 'C', '', '', 'Nahid Hossain', 'NHn'),
('Web Programming', 'CSE 4165/CSE 465', 'D', '', '', 'Nahid Hossain', 'NHn'),
('Web Programming', 'CSE 4165/CSE 465', 'E', '', '', 'Nahid Hossain', 'NHn'),
('Artificial Intelligence', 'CSE 3811/CSI 341', 'D', '', '', 'Ms. Rubaiya Rahtin Khan', 'RRK'),
('Data Structure and Algorithms II', 'CSE 2218/CSI 228', 'A', '', '', 'Ishtiaque Zahid', 'IZ');

-- --------------------------------------------------------

--
-- Table structure for table `courseemergencynotices`
--

CREATE TABLE `courseemergencynotices` (
  `Message` text NOT NULL,
  `Stdname` varchar(100) NOT NULL,
  `stdID` varchar(100) NOT NULL,
  `teachermail` varchar(100) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `coursecode` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `section` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseemergencynotices`
--

INSERT INTO `courseemergencynotices` (`Message`, `Stdname`, `stdID`, `teachermail`, `coursename`, `coursecode`, `category`, `section`) VALUES
('Dear Sir,\r\nThe road is blocked due to jam! ', 'Md. Darain Khan', '011203010', 'nahid@cse.uiu.ac.bd', 'Web Programming', 'CSE 4165/CSE 465', 'Teacher', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `coursetab`
--

CREATE TABLE `coursetab` (
  `CourseName` varchar(200) NOT NULL,
  `CourseCode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursetab`
--

INSERT INTO `coursetab` (`CourseName`, `CourseCode`) VALUES
('Data Structures & Algorithms Laboratory', 'CSE 2218/CSI 228'),
('Artificial Intelligence', 'CSE 3811/CSI 341'),
('Web Programming', 'CSE 4165/CSE 465'),
('Probability and Statistics', 'MATH 2205/STAT 205');

-- --------------------------------------------------------

--
-- Table structure for table `facultycourseaccess`
--

CREATE TABLE `facultycourseaccess` (
  `CourseCode` varchar(200) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `FacultyID` varchar(100) NOT NULL,
  `materialHeading` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `FileUp` varchar(255) NOT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultycourseaccess`
--

INSERT INTO `facultycourseaccess` (`CourseCode`, `Section`, `FacultyID`, `materialHeading`, `Description`, `FileUp`, `Date`) VALUES
('CSE 4165/CSE 465', 'B', 'NHn', 'important Books', '', 'C_R_Robertson_Fundamental_Electrical_and_ElectroBookZZ.org_.pdf', '2023-08-28 23:36:13'),
('CSE 4165/CSE 465', 'B', 'NHn', 'CT-02 on Wednesday', 'There will be a class test on chapter 1 and 2 on wednesday! Be prepared', '', '2023-08-28 23:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `facultycoursetab`
--

CREATE TABLE `facultycoursetab` (
  `FacultyID` varchar(100) NOT NULL,
  `CourseCode` varchar(100) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `Trimester` varchar(100) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `CourseContent` text DEFAULT NULL,
  `CourseMatLink` varchar(255) DEFAULT NULL,
  `MaterialHeading` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultycoursetab`
--

INSERT INTO `facultycoursetab` (`FacultyID`, `CourseCode`, `CourseName`, `Section`, `Trimester`, `Department`, `CourseContent`, `CourseMatLink`, `MaterialHeading`) VALUES
('NHn', 'CSE 4165/CSE 465', 'Web Programming', 'B', 'Summer 2023', 'Computer Science and Engineering', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `facultytab`
--

CREATE TABLE `facultytab` (
  `Name` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile` varchar(16) NOT NULL,
  `profilePicture` varchar(255) NOT NULL,
  `Department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultytab`
--

INSERT INTO `facultytab` (`Name`, `ID`, `Email`, `Password`, `Mobile`, `profilePicture`, `Department`) VALUES
('Ishtiaque Zahid', 'IZ', 'ishtiaque@cse.uiu.ac.bd', '1234', '756757', '', 'Computer Science and Engineering'),
('Nahid Hossain', 'NHn', 'nahid@cse.uiu.ac.bd', '1234', '575757', 'folder2/avatar.png', 'Computer Science and Engineering'),
('Ms. Rubaiya Rahtin Khan', 'RRK', 'rubaiya@cse.uiu.ac.bd', '1234', '464646', '', 'Computer Science and Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `librarybookbooking`
--

CREATE TABLE `librarybookbooking` (
  `StudentName` varchar(100) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Token` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `BorrowedBook` varchar(255) NOT NULL,
  `BookID` varchar(100) NOT NULL,
  `StartDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarybookbooking`
--

INSERT INTO `librarybookbooking` (`StudentName`, `StudentID`, `Email`, `Token`, `Mobile`, `BorrowedBook`, `BookID`, `StartDate`, `EndDate`, `Status`) VALUES
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '0caccf3a', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '0e15cd91', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '1970-01-01 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '276502a0', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '32a089e5', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-03 00:00:00', '2023-08-03 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '3d96757a', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '1970-01-01 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '41e9c6ac', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-25 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '44488b1c', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '1970-01-01 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '4f17622c', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-03 00:00:00', '2023-08-03 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '56023749', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '64cdb63d', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '6e2628aa', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '0000-00-00 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '7101d9a8', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '95ec1b30', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-09-02 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '9715e6db', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-10-07 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '972b5d0e', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', '9edf98db', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '1970-01-01 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'ac13f4f3', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-09-02 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'b67978d6', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '0000-00-00 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'c7c955e4', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'cc3f74c1', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-09-02 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'cde5228a', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-27 00:00:00', 'Pending'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'd31faba9', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '2023-08-23 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'dad899d6', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '1970-01-01 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'e1b5a56c', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-23 00:00:00', '1970-01-01 00:00:00', 'Gave Back'),
('Md. Darain Khan', '011203010', 'mkhan203010@bscse.uiu.ac.bd', 'f166e4d8', '01712950127', 'Fundamentals of Electronics', '64c875cd                         ', '2023-08-04 00:00:00', '2023-08-04 00:00:00', 'Gave Back');

-- --------------------------------------------------------

--
-- Table structure for table `librarybooks`
--

CREATE TABLE `librarybooks` (
  `Name` varchar(100) NOT NULL,
  `Edition` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Date` datetime DEFAULT NULL,
  `PDF` varchar(255) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `bookID` varchar(100) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarybooks`
--

INSERT INTO `librarybooks` (`Name`, `Edition`, `Department`, `Category`, `Date`, `PDF`, `Thumbnail`, `bookID`, `Status`) VALUES
('Fundamentals of Electronics', '3rd', 'CSE', 'CSE', '2023-08-01 09:02:37', 'C_R_Robertson_Fundamental_Electrical_and_ElectroBookZZ.org_.pdf', 'ec.jpg', '64c875cd', '');

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `StudentName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `StudentID` varchar(12) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Department` varchar(100) NOT NULL,
  `Mobile Number` varchar(15) NOT NULL,
  `profilePictureSection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`StudentName`, `Email`, `StudentID`, `Password`, `DOB`, `Department`, `Mobile Number`, `profilePictureSection`) VALUES
('Md. Darain Khan', 'mkhan203010@bscse.uiu.ac.bd', '011203010', '5678', '2000-03-30', 'Computer Science & Engineering', '01712950127', 'folder2/318750936_2072974192890390_7905804442852573448_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studentcoursetab`
--

CREATE TABLE `studentcoursetab` (
  `ID` varchar(15) NOT NULL,
  `CourseCode` varchar(100) NOT NULL,
  `CourseName` varchar(150) NOT NULL,
  `Section` varchar(3) NOT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Trimester` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentcoursetab`
--

INSERT INTO `studentcoursetab` (`ID`, `CourseCode`, `CourseName`, `Section`, `Department`, `Trimester`) VALUES
('011203010', 'CSE 4165/CSE 465', 'Web Programming', 'B', 'Computer Science & Engineering', 'Summer 2023'),
('011203010', 'CSE 3811/CSI 341', 'Artificial Intelligence', 'D', 'Computer Science and Engineering', 'Summer 2023');

-- --------------------------------------------------------

--
-- Table structure for table `studentprivatefiles`
--

CREATE TABLE `studentprivatefiles` (
  `StudentID` varchar(100) NOT NULL,
  `AllFiles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursecontent`
--
ALTER TABLE `coursecontent`
  ADD KEY `FK_Coursecontent` (`CourseCode`),
  ADD KEY `fk_crscnt_01` (`FacultyID`);

--
-- Indexes for table `courseemergencynotices`
--
ALTER TABLE `courseemergencynotices`
  ADD KEY `FK_courseestdid` (`stdID`),
  ADD KEY `FK_coursecode` (`coursecode`);

--
-- Indexes for table `coursetab`
--
ALTER TABLE `coursetab`
  ADD PRIMARY KEY (`CourseCode`);

--
-- Indexes for table `facultycoursetab`
--
ALTER TABLE `facultycoursetab`
  ADD KEY `fk_faculty` (`CourseCode`),
  ADD KEY `fk_faculty01` (`FacultyID`);

--
-- Indexes for table `facultytab`
--
ALTER TABLE `facultytab`
  ADD PRIMARY KEY (`ID`,`Email`);

--
-- Indexes for table `librarybookbooking`
--
ALTER TABLE `librarybookbooking`
  ADD PRIMARY KEY (`Token`);

--
-- Indexes for table `librarybooks`
--
ALTER TABLE `librarybooks`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `studentcoursetab`
--
ALTER TABLE `studentcoursetab`
  ADD KEY `FK_stdcrstab` (`CourseCode`),
  ADD KEY `FK_studentcoursetab04` (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursecontent`
--
ALTER TABLE `coursecontent`
  ADD CONSTRAINT `FK_Coursecontent` FOREIGN KEY (`CourseCode`) REFERENCES `coursetab` (`CourseCode`),
  ADD CONSTRAINT `fk_crscnt_01` FOREIGN KEY (`FacultyID`) REFERENCES `facultytab` (`ID`);

--
-- Constraints for table `courseemergencynotices`
--
ALTER TABLE `courseemergencynotices`
  ADD CONSTRAINT `FK_coursecode` FOREIGN KEY (`coursecode`) REFERENCES `coursetab` (`CourseCode`),
  ADD CONSTRAINT `FK_courseestdid` FOREIGN KEY (`stdID`) REFERENCES `logininfo` (`StudentID`);

--
-- Constraints for table `facultycoursetab`
--
ALTER TABLE `facultycoursetab`
  ADD CONSTRAINT `fk_faculty` FOREIGN KEY (`CourseCode`) REFERENCES `coursetab` (`CourseCode`),
  ADD CONSTRAINT `fk_faculty01` FOREIGN KEY (`FacultyID`) REFERENCES `facultytab` (`ID`);

--
-- Constraints for table `studentcoursetab`
--
ALTER TABLE `studentcoursetab`
  ADD CONSTRAINT `FK_stdcrstab` FOREIGN KEY (`CourseCode`) REFERENCES `coursetab` (`CourseCode`),
  ADD CONSTRAINT `FK_studentcoursetab04` FOREIGN KEY (`ID`) REFERENCES `logininfo` (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
