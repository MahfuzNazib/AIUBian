-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 12:22 PM
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
-- Database: `aiubian`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `Name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `profilepicture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`Name`, `email`, `phone`, `address`, `profilepicture`) VALUES
('Abc', 'abc20@gmail.com', '012555', '', NULL),
('admin2', 'ad50@gmail.com', '01259966', '', NULL),
('Anik', 'anik55@gmail.com', '012589', '12365lkjkj', 'intern.png'),
('Mahfuz', 'm60@gmail.com', '012555', '', NULL),
('Mahfuz Nazib', 'mahfuz25@gmail.com', '01258888', '', NULL),
('Mahfuz Nazib', 'mahfuznazib20@gmail.com', '01777127616', '', NULL),
('mmm', 'mm50@gmail.com', '5641121', '', NULL),
('Nazib Mahfuz', 'nazibmahfuz605@gmail.com', '01777127618', 'Road 19,House 36,Nikunja 2,Khilkhet', 'admin-settings-male.png'),
('Nazib Mahfuz', 'nazibmahfuz60@gmail.com', '656565', NULL, NULL),
('ppppp', 'pp20@gmail.com', '15646545', '', NULL),
('test2', 'test20@gmail.com', '2315412', '', NULL),
('jkdncdbdbvd', 'zakiasultana60@gmail.com', '645351531', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alumniprofile`
--

CREATE TABLE `alumniprofile` (
  `Email` varchar(150) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `AIUB_ID` varchar(10) NOT NULL,
  `Phone` int(13) NOT NULL,
  `Dept` varchar(50) DEFAULT NULL,
  `Semester` varchar(20) DEFAULT NULL,
  `Year` varchar(10) DEFAULT NULL,
  `LinkedIn` varchar(250) DEFAULT NULL,
  `Facebook` varchar(250) DEFAULT NULL,
  `Portfolio` varchar(250) DEFAULT NULL,
  `WorkingDomain` varchar(250) DEFAULT NULL,
  `Website` varchar(250) DEFAULT NULL,
  `WorkingPlace` varchar(250) DEFAULT NULL,
  `JoiningDate` varchar(100) DEFAULT NULL,
  `ProfilePicture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumniprofile`
--

INSERT INTO `alumniprofile` (`Email`, `Name`, `AIUB_ID`, `Phone`, `Dept`, `Semester`, `Year`, `LinkedIn`, `Facebook`, `Portfolio`, `WorkingDomain`, `Website`, `WorkingPlace`, `JoiningDate`, `ProfilePicture`) VALUES
('abid@gmail.com', 'Abid', '17-4589-1', 5855, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('jalal@gmail.com', 'Md Jalal Uddin', '15-2589-1', 546541, '', '', '', '', '', '', '.NET Core MVC', 'https:www.devskill.com', 'Dev Skill', '2019-12-06', 'Screenshot_1.png'),
('zaheed@gmail.com', 'Zaheed Sabure', '14-5892-1', 5465454, '', '', '', '', '', '', '', '', 'Google', '', 'Screenshot_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `receiver`, `text`, `time`) VALUES
(1, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'Hi. How are you ?', ''),
(2, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', '54345345345', '30/11/2019 09:35:01am'),
(3, 'nazibmahfuz60@gmail.com', 'jahid@gmail.com', 'hi.How are You????', '30/11/2019 09:36:06am'),
(4, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'vfdvfd', '30/11/2019 09:43:23am'),
(5, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'tyguhijk', '30/11/2019 09:47:44am'),
(6, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'I am Nazib Mahfuz', '30/11/2019 10:02:01am'),
(7, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'Its another testing message', '30/11/2019 10:02:48am'),
(8, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'American International University-Bangladesh (AIUB)', '30/11/2019 10:04:25am'),
(9, 'nazibmahfuz60@gmail.com', 'jahid20@gmail.com', 'kbvfdbv', '30/11/2019 10:05:13am'),
(10, 'nazibmahfuz60@gmail.com', 'jahid20@gmail.com', 'djvfnfdjkvn', '30/11/2019 10:06:38am'),
(11, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'Dept of CSE', '30/11/2019 10:07:14am'),
(12, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', '653654654', '30/11/2019 10:19:02am'),
(13, 'nazibmahfuz60@gmail.com', 'guti@gmail.com', 'vfugvfudygvuydgvfdv', '30/11/2019 10:46:10am'),
(14, 'hasib3030@gmail.com', 'nazibmahfuz60@gmail.com', 'I am Hasib', '30/11/2019 11:16:55am'),
(15, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'I know you are Hasib.Thank You', '30/11/2019 11:18:16am'),
(16, 'hasib3030@gmail.com', 'nazibmahfuz60@gmail.com', 'Its an AJAX example', '30/11/2019 11:31:34am'),
(17, 'hasib3030@gmail.com', 'nazibmahfuz60@gmail.com', 'Another Testing', '30/11/2019 11:34:36am'),
(18, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'Hi Nazib...How are You?', '30/11/2019 05:17:54pm'),
(19, 'hasib3030@gmail.com', 'nazibmahfuz60@gmail.com', 'Hello Nazib', '30/11/2019 05:18:38pm'),
(20, 'hasib3030@gmail.com', 'nazibmahfuz60@gmail.com', 'nazib, I need your help..can you help me?', '14/12/2019 01:39:12pm'),
(21, 'nazibmahfuz60@gmail.com', 'hasib3030@gmail.com', 'Yes..How can I help you?', '14/12/2019 01:40:33pm'),
(22, 'nazibmahfuz60@gmail.com', 'alamin@gmail.com', 'Sir?', '18/12/2019 02:06:12pm');

-- --------------------------------------------------------

--
-- Table structure for table `facultyprofile`
--

CREATE TABLE `facultyprofile` (
  `email` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Phone` int(13) NOT NULL,
  `AIUB_ID` varchar(11) NOT NULL,
  `Dept` varchar(50) DEFAULT NULL,
  `Semester` int(3) DEFAULT NULL,
  `ThesisDomain` varchar(250) DEFAULT NULL,
  `PublishedPaper` int(3) DEFAULT NULL,
  `Portfolio` varchar(250) DEFAULT NULL,
  `LinkedIn` varchar(250) DEFAULT NULL,
  `FaceBook` varchar(250) DEFAULT NULL,
  `WorkingPlace` varchar(250) DEFAULT NULL,
  `Website` varchar(250) DEFAULT NULL,
  `JoiningDate` varchar(50) DEFAULT NULL,
  `ProfilePicture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyprofile`
--

INSERT INTO `facultyprofile` (`email`, `Name`, `Phone`, `AIUB_ID`, `Dept`, `Semester`, `ThesisDomain`, `PublishedPaper`, `Portfolio`, `LinkedIn`, `FaceBook`, `WorkingPlace`, `Website`, `JoiningDate`, `ProfilePicture`) VALUES
('alamin@aiub.edu', 'Al Amin', 258999, '1702-2581-1', 'Faculty of Science & Technology', 10, 'Block Chain, 3rd Gen. of Web, Micro Services', 5, '', '', '', 'AIUB', 'https:www.aiub.edu', '2017-03-15', 'alaminsir.png'),
('noor@gmail.com', 'Moheimin Bin Noor', 658464, '1725-5892-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'noorsir.png');

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(8) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`email`, `username`, `password`, `status`) VALUES
('abid@gmail.com', 'abid', 'abid', 'Alumni'),
('admin@gmail.com', 'admin', 'admin', 'Admin'),
('alamin@aiub.edu', 'alamin', 'alamin', 'Faculty'),
('anik55@gmail.com', 'anikdas', 'anikdas', 'Admin'),
('bristy@gmail.com', 'bristy', 'bristy', 'Student'),
('h512@gmail.com', 'hasibh', '123456', 'Admin'),
('hasib3030@gmail.com', 'hasib', 'hasib', 'Student'),
('jalal@gmail.com', 'jalal', 'jalal', 'Alumni'),
('mahbub@gmail.com', 'mahbub', 'mahbub', 'Student'),
('mahfuz25@gmail.com', 'mahfuznazib', 'nazib303', 'Admin'),
('mahfuznazib20@gmail.com', 'mahfuz', 'mahfuz', 'Admin'),
('nazibmahfuz605@gmail.com', 'NazibMahfuz', 'nazibmah', 'Admin'),
('nazibmahfuz60@gmail.com', 'Nazib', 'Nazib', 'Student'),
('noor@gmail.com', 'noor', 'noor', 'Faculty'),
('pp20@gmail.com', 'pppppp', 'ppppp', 'Admin'),
('rasel@gmail.com', 'rasel45', '123456', 'Student'),
('rayhan@gmail.com', 'rayhan', 'rayhan', 'Student'),
('tst@gmail.com', 'TST', 'tst', 'Admin'),
('zaheed@gmail.com', 'zaheed', 'zaheed', 'Alumni'),
('zakiasultana60@gmail.com', 'jnvvnnfvnfkn', 'vndfvndf', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(11) NOT NULL,
  `Text` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `Likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `Text`, `Image`, `Date`, `Status`, `email`, `username`, `Likes`) VALUES
(18, 'I am Nazib Mahfuz. Its my first Post \r\n                        ', 'Bzs7gW9.jpg', '14/12/2019 08:13:48am', 'Student', 'nazibmahfuz60@gmail.com', 'nazib', 0),
(21, '\r\n                        ', 'admin-settings-male.png', '14/12/2019 09:48:20am', 'Admin', 'nazibmahfuz605@gmail.com', 'NazibMahfuz', 0),
(22, 'Warning Notice\r\n                        ', 'danger+warn+warning+icon-1320196066636054085.png', '14/12/2019 09:50:47am', 'Admin', 'nazibmahfuz605@gmail.com', 'NazibMahfuz', 0),
(27, '\r\n                        ', 'gp.png', '15/12/2019 04:15:59pm', 'Alumni', 'zaheed@gmail.com', 'zaheed', 0),
(29, 'Join AIUB as a Faculty\r\n                        ', 'Screenshot_2.png', '15/12/2019 04:24:36pm', 'Faculty', 'alamin@aiub.edu', 'alamin', 0),
(30, 'First Post        ', 'Gaming-Drops-wallpaper.jpg', '15/12/2019 04:36:42pm', 'Student', 'rayhan@gmail.com', 'rayhan', 0),
(31, 'Its a ADMIN Post\r\n                        ', '18890887-Cute-cartoon-illustration-of-a-soldier-Stock-Illustration-army.jpg', '15/12/2019 04:38:52pm', 'Admin', 'nazibmahfuz605@gmail.com', 'NazibMahfuz', 0),
(32, 'I am MD. AL Amin. Faculty of Computer Science department at AIUB. \r\n                        ', '', '18/12/2019 02:11:56pm', 'Faculty', 'alamin@aiub.edu', 'alamin', 0),
(33, 'This is my first post\r\n                        ', 'hasib.png', '18/12/2019 02:22:53pm', 'Student', 'hasib3030@gmail.com', 'hasib', 0),
(34, 'Its a red warning\r\n                        ', 'd906440e3b8f66f4ba707e3dccb38f59.gif', '18/12/2019 02:47:45pm', 'Admin', 'anik55@gmail.com', 'anikdas', 0),
(35, 'Its Jony\r\n                        ', 'candy.jpg', '21/12/2019 08:12:24am', 'Student', 'naim@gmail.com', 'naim50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentprofile`
--

CREATE TABLE `studentprofile` (
  `email` varchar(150) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int(13) NOT NULL,
  `AIUB_ID` varchar(10) NOT NULL,
  `Dept` varchar(50) DEFAULT NULL,
  `Program` varchar(20) DEFAULT NULL,
  `SemesterNo` int(2) DEFAULT NULL,
  `LinkedIn` varchar(250) DEFAULT NULL,
  `StackOverFlow` varchar(250) DEFAULT NULL,
  `Github` varchar(250) DEFAULT NULL,
  `HackerRank` varchar(250) DEFAULT NULL,
  `UVA` varchar(250) DEFAULT NULL,
  `IEEE` varchar(250) DEFAULT NULL,
  `Youtube` varchar(250) DEFAULT NULL,
  `Website` varchar(250) DEFAULT NULL,
  `Skills` varchar(250) DEFAULT NULL,
  `ProfilePicture` varchar(250) DEFAULT NULL,
  `ProfileMarks` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprofile`
--

INSERT INTO `studentprofile` (`email`, `Name`, `Phone`, `AIUB_ID`, `Dept`, `Program`, `SemesterNo`, `LinkedIn`, `StackOverFlow`, `Github`, `HackerRank`, `UVA`, `IEEE`, `Youtube`, `Website`, `Skills`, `ProfilePicture`, `ProfileMarks`) VALUES
('bristy@gmail.com', 'Bristy Talukder', 258966, '17-5589-1', 'Faculty of Engineering', 'EEE', 8, '', '', '', '', '', '', '', '', 'MATLAB,MultiSim,Psim, Simulation', 'bristy.png', 0),
('hasib3030@gmail.com', 'Hasib Ahmed', 17895555, '17-34349-1', 'Faculty of Science & Technology', 'CSE', 9, 'https://www.linkedin.com/feed/', '', 'https://github.com/MahfuzNazib', 'https://www.hackerrank.com/dashboard', 'https://codeforces.com/profile/mahfuz_nazib', '', '', 'https://mahfuznazib.github.io/', 'Java,Python', 'hasib.png', 0),
('mahbub@gmail.com', 'Mahbub Alam', 12588, '15-5529-2', 'Faculty of Business Administration', 'BBA', 10, '', '', '', '', '', '', '', '', 'Java,C#,Php,JavaScript,DB,Design,Algorithm', 'mahbub.png', 0),
('nazibmahfuz60@gmail.com', 'Nazib Mahfuz', 1777127618, '17-34418-1', 'Faculty of Science & Technology', 'CSE', 9, 'https://www.linkedin.com/feed/', '', 'https://github.com/MahfuzNazib', 'https://www.hackerrank.com/dashboard', 'https://codeforces.com/profile/mahfuz_nazib', '', '', 'https://mahfuznazib.github.io/', 'Java,C#,Php,JavaScript,DB,Design,Algorithm,Design Pettarn', 'me.jpg.png', 0),
('rasel@gmail.com', 'Enamul Rasel', 2569852, '15-9632-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rasel.png', 0),
('rayhan@gmail.com', 'Rayhan Hossain', 214564, '14-3548-1', 'Faculty of Art Social Sciences', 'Arch.', 9, '', '', '', '', '', '', '', '', '', 'rayhan.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `alumniprofile`
--
ALTER TABLE `alumniprofile`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultyprofile`
--
ALTER TABLE `facultyprofile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`);

--
-- Indexes for table `studentprofile`
--
ALTER TABLE `studentprofile`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
