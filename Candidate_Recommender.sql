-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2020 at 07:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Candidate_Recommender`
--

-- --------------------------------------------------------

--
-- Table structure for table `Candidate`
--

CREATE TABLE `Candidate` (
  `Name` varchar(100) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Age` int(2) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Objective` varchar(300) DEFAULT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Candidate`
--

INSERT INTO `Candidate` (`Name`, `PhoneNumber`, `Email`, `Age`, `Address`, `Objective`, `Id`) VALUES
('Suraksha S', 'st@outlook.com', '683847747747', 21, 'Bangalore', 'b fbfbfbfbbf ffbfbbf. fhfhfhfhf', 1),
('Sujay', '75648645', 'sujaytasgaonkar135426@gmail.com', 19, 'Bangalore', 'To study various new subjects', 2),
('Swathi V', '74748487444', 'swathi@gmail.com', 21, 'Bangalore', 'To learn new things in the domain of CS', 3),
('Percy Jackson', '8834774774', 'pjackson@outloo.com', 23, 'NY', 'huff fjfjj hfhfh', 4),
('Katie Gardener', '33398474664', 'katie@gmail.com', 22, 'New York', 'hah  gdgfgfggfgfggfggfgggf bd', 5),
('Travis Stoll', '8874646474', 'stoll1@outlook.com', 23, 'Texas', 'jjdj fhffhfhfhhf   hfhfhhf hffhfh', 6),
('Lee Fletcher', '377375664', 'fletch@hotmail.com', 23, 'NYU', 'dhhd. gdgffgghfhgdg gfdgdfgggfgfg', 7),
('Mike Kahale', '948848848', 'mkahale@cs.odu.edu', 34, 'San Fransisco', 'jehrhffh jffjjfjfjfjjfjjfjfjj Jef jjfj', 8),
('Malcom Pace', '878477570944', 'pace@vtech.cs.edu', 25, 'Philadelphia', 'bah. hfhf hah f gffdfhgfggggggggdhhffhh', 9),
('Nico Diangelo', '47489477474', 'angelo@gmail.com', 20, 'New Orleans', 'ndfhdhf fh hfhfhfhfhfhfhhfjfj', 10),
('Sally Jackson', '8999466444', 'sjackson@cs.odu.edu', 45, 'NY', 'gfgdg gfdhfggfgfg dfhgfhgd', 11),
('Thalia Grace', '99983646643', 'gracethalia@gmail.com', 20, 'San Jose', 'nf. fdhfgd bfbbbbbf hs fj jfhdjhfhhh', 12),
('Magnus Chase', '64578567566', 'mchase@outlook.com', 20, 'Boston', 'dehire hfs high jjfhh', 13),
('Jamie Hill', '488875775', 'hillj@hotmail.com', 30, 'Newark', 'ndhfhfh h hhfgf ghfh. fjkfhg', 14),
('Eragon D', '64677874666', 'eragon@gmail.com', 23, 'London', 'djfjfjjf fjjfjjfjjjfjf ', 15),
('George D', '34783922031', 'gmd@gmail.com', 21, 'BY', 'dhdhdhh', 16);

-- --------------------------------------------------------

--
-- Table structure for table `Certifications`
--

CREATE TABLE `Certifications` (
  `Id` int(11) NOT NULL,
  `CandidateId` int(11) DEFAULT NULL,
  `Name` varchar(550) DEFAULT NULL,
  `Skill` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Certifications`
--

INSERT INTO `Certifications` (`Id`, `CandidateId`, `Name`, `Skill`) VALUES
(4, 4, 'fret vn', 'RedHat'),
(5, 1, 'hrenfhh gfgef', 'Angular'),
(6, 1, 'bzhhh', 'Cybersecurity'),
(7, 1, 'fff', 'BootStrap'),
(8, 1, 'ddbf', 'Java'),
(9, 3, 'Accenture ', 'Python'),
(10, 2, 'ghj', 'Python'),
(11, 5, 'Oracle', 'HTML'),
(12, 6, 'Pluralsight', 'HTML'),
(13, 6, 'Cognixia', 'MachineLearning'),
(14, 7, 'hdhe', 'MachineLearning'),
(15, 7, 'Cognixia', 'DataAnalytics'),
(16, 8, 'Cognixia', 'RedHat'),
(17, 9, 'Cognixia', 'Kubernetes'),
(18, 9, 'Docker', 'Cybersecurity'),
(19, 10, 'Cognixia', 'AI'),
(20, 11, 'Python by Oracle', 'Python'),
(21, 12, 'GREP', 'Oracle database'),
(22, 13, 'Python Cert by Cognixia', 'Python'),
(23, 14, 'Oracle', 'Java'),
(24, 15, 'GeeksforGeeks', 'HTML'),
(25, 15, 'MLI', 'MachineLearning'),
(26, 16, 'Microsoft', 'ASP.net'),
(27, 16, 'Docker', 'Django');

-- --------------------------------------------------------

--
-- Table structure for table `Education`
--

CREATE TABLE `Education` (
  `Id` int(11) NOT NULL,
  `CandidateId` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Qualification` varchar(40) DEFAULT NULL,
  `University` varchar(120) DEFAULT NULL,
  `Grade` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Education`
--

INSERT INTO `Education` (`Id`, `CandidateId`, `Year`, `Qualification`, `University`, `Grade`) VALUES
(6, 4, 2020, 'Bachelors', 'NYU', 3),
(7, 1, 2020, 'Bachelors', 'VTU(BNMIT)', 8.22),
(8, 1, 2016, '12th grade', 'JGI', 9),
(9, 3, 2020, 'Bachelors', 'VTU', 8.4),
(10, 2, 2022, 'Bachelors', 'VTU', 8),
(11, 5, 2019, 'Masters', 'Columbia', 3.4),
(12, 6, 2018, 'Bachelors', 'University of Austin', 4),
(13, 7, 2018, 'Bachelors', 'NYU', 3.4),
(14, 8, 2008, 'Masters', 'ODU', 4),
(15, 9, 2010, 'Masters', 'Virginia Tech', 4),
(16, 10, 2016, 'Bachelors', 'St.Louis University', 3),
(17, 11, 2001, 'Masters', 'North Dakota State University', 4),
(18, 12, 2009, 'Bachelors', 'Layfette State', 3.67),
(19, 13, 2009, 'Masters', 'North Eastern University', 4),
(20, 14, 2017, 'Bachelors', 'NYU', 3),
(21, 15, 2009, 'Bachelors', 'RIT', 3),
(22, 16, 2002, 'Masters', 'ODU', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(70) DEFAULT NULL,
  `Pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Id`, `Name`, `Pass`) VALUES
(1, 'Sam', 'Sam123'),
(2, 'Annabeth', 'Athena'),
(3, 'Jason', 'Coin'),
(4, 'Leo', 'Festus'),
(5, 'Frank', 'Animagi');

-- --------------------------------------------------------

--
-- Table structure for table `Experience`
--

CREATE TABLE `Experience` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Years` int(11) DEFAULT NULL,
  `NameOfOrganisation` varchar(255) DEFAULT NULL,
  `CandidateId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Experience`
--

INSERT INTO `Experience` (`Id`, `Name`, `Years`, `NameOfOrganisation`, `CandidateId`) VALUES
(56, 'ProjectManager', 6, 'CHB', 4),
(57, 'Tester', 2, 'gdg', 4),
(59, 'SoftwareDeveloper', 1, 'Accenture', 1),
(60, 'SystemAdministrator', 2, 'eee', 2),
(61, 'Tester', 2, 'Ahh x', 3),
(62, 'SysteAdministrator', 4, 'Cisco', 5),
(63, 'ProjectManager', 6, 'Facebook', 6),
(64, 'Tester', 5, 'PRA', 7),
(65, 'DatabaseManager', 10, 'Google', 8),
(66, 'ProjectManager', 10, 'Facebook', 9),
(67, 'DatabaseManager', 3, 'Oak Labs', 10),
(68, 'DatabaseManager', 20, 'Infrrd', 11),
(69, 'ProjectManager', 3, 'VG Corps', 12),
(70, 'SoftwareArchitect', 5, 'NN Corps', 12),
(71, 'SysteAdministrator', 10, 'Google', 13),
(72, 'SoftwareDeveloper', 1, 'EDC', 14),
(73, 'Tester', 2, 'DFL', 15),
(74, 'SoftwareArchitect', 2, 'WED', 16);

-- --------------------------------------------------------

--
-- Table structure for table `Identity`
--

CREATE TABLE `Identity` (
  `Id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `PhoneNumber` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Identity`
--

INSERT INTO `Identity` (`Id`, `Name`, `PhoneNumber`, `Email`, `Password`) VALUES
(1, 'Suraksha S', 'st@outlook.com', '683847747747', '1234'),
(2, 'Sujay', '75648645', 'sujaytasgaonkar135426@gmail.com', '12345'),
(3, 'Swathi V', '74748487444', 'swathi@gmail.com', '2345'),
(4, 'Percy Jackson', '8834774774', 'pjackson@outloo.com', 'Riptide'),
(5, 'Katie Gardener', '33398474664', 'katie@gmail.com', 'Demi'),
(6, 'Travis Stoll', '8874646474', 'stoll1@outlook.com', 'StoleurHeart'),
(7, 'Lee Fletcher', '377375664', 'fletch@hotmail.com', 'Lee'),
(8, 'Mike Kahale', '948848848', 'mkahale@cs.odu.edu', 'Mike'),
(9, 'Malcom Pace', '878477570944', 'pace@vtech.cs.edu', 'Malcom'),
(10, 'Nico Diangelo', '47489477474', 'angelo@gmail.com', 'Nico'),
(11, 'Sally Jackson', '8999466444', 'sjackson@cs.odu.edu', 'Sally'),
(12, 'Thalia Grace', '99983646643', 'gracethalia@gmail.com', 'Thalia'),
(13, 'Magnus Chase', '64578567566', 'mchase@outlook.com', 'mchase'),
(14, 'Jamie Hill', '488875775', 'hillj@hotmail.com', 'Jamie'),
(15, 'Eragon D', '64677874666', 'eragon@gmail.com', 'Eragon'),
(16, 'George D', '34783922031', 'gmd@gmail.com', 'george');

-- --------------------------------------------------------

--
-- Table structure for table `Interview`
--

CREATE TABLE `Interview` (
  `Id` int(11) NOT NULL,
  `EmployeeId` int(11) DEFAULT NULL,
  `CandidateId` int(11) DEFAULT NULL,
  `JobDesc` varchar(700) DEFAULT NULL,
  `DateInt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Interview`
--

INSERT INTO `Interview` (`Id`, `EmployeeId`, `CandidateId`, `JobDesc`, `DateInt`) VALUES
(1, 2, 1, 'Developer', ' 12/06/20 '),
(2, 3, 3, 'Developer', ' 13/07/20 '),
(3, 4, 3, 'Developer', ' 21/06/2020 '),
(4, 2, 5, 'Developer', ' 12/06/20 '),
(5, 4, 5, 'Developer', ' 17/06/20 '),
(6, 2, 4, 'Developer', ' 23/06/20 ');

-- --------------------------------------------------------

--
-- Table structure for table `Job`
--

CREATE TABLE `Job` (
  `Id` int(11) NOT NULL,
  `Name` varchar(90) DEFAULT NULL,
  `Description` varchar(3000) DEFAULT NULL,
  `Dept` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Job`
--

INSERT INTO `Job` (`Id`, `Name`, `Description`, `Dept`) VALUES
(1, 'Developer', 'The position is for a developer who is experienced in languages like Java or Python or machinelearning', 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `Id` int(11) NOT NULL,
  `CandId` int(11) DEFAULT NULL,
  `Message` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Message`
--

INSERT INTO `Message` (`Id`, `CandId`, `Message`) VALUES
(3, 1, 'Your interview is scheduled at 12.00 pm on 30th of May'),
(4, 3, 'You have been called for interview on 21/06/2020 for position of developer'),
(5, 5, 'You have been called for interview'),
(6, 1, 'You have been selected for the role of developer');

-- --------------------------------------------------------

--
-- Table structure for table `Notes`
--

CREATE TABLE `Notes` (
  `Id` int(11) NOT NULL,
  `Note` varchar(600) DEFAULT NULL,
  `CandId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Notes`
--

INSERT INTO `Notes` (`Id`, `Note`, `CandId`) VALUES
(1, 'Good. But needs a bit of improvement in coding area', 1),
(2, 'Improving. Participates actively in all activities ', 1),
(5, 'Good. For next round', 3),
(6, 'Good at ML. But average in Java. Please look into it', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Positions`
--

CREATE TABLE `Positions` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Positions`
--

INSERT INTO `Positions` (`Id`, `Name`) VALUES
(1, 'SoftwareDeveloper'),
(2, 'Tester'),
(3, 'SysteAdministrator'),
(4, 'SoftwareArchitect'),
(5, 'ProjectManager'),
(6, 'DatabaseManager');

-- --------------------------------------------------------

--
-- Table structure for table `PrimarySkills`
--

CREATE TABLE `PrimarySkills` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PrimarySkills`
--

INSERT INTO `PrimarySkills` (`Id`, `Name`) VALUES
(1, 'Programming'),
(2, 'Problem Solving'),
(3, 'Speaking');

-- --------------------------------------------------------

--
-- Table structure for table `Project`
--

CREATE TABLE `Project` (
  `Id` int(11) NOT NULL,
  `Name` varchar(400) DEFAULT NULL,
  `CandId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Project`
--

INSERT INTO `Project` (`Id`, `Name`, `CandId`) VALUES
(5, 'jjc jet', 4),
(6, 'CRC', 1),
(7, 'Bookstagram', 3),
(8, 'Employee DB', 3),
(9, 'Home security using IOT concepts', 2),
(10, 'Crebv', 5),
(11, 'CDeef', 6),
(12, 'Selenium test automation', 7),
(13, 'Adhoc', 8),
(14, 'Stock Market Predictions', 9),
(15, 'Resume Parsing', 10),
(16, 'Tic Tac Toe Game', 10),
(17, 'Drag and drop using html', 11),
(18, 'OCR using ML', 12),
(19, 'Weather prediction', 13),
(20, 'Local Election Result Prediction', 13),
(21, 'Movie Recommender', 14),
(22, 'Microservices min Js', 15),
(23, 'Docker Migration', 16),
(24, 'dggfgg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `Id` int(11) NOT NULL,
  `Rating` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`Id`, `Rating`) VALUES
(1, 'Bad'),
(2, 'Average'),
(3, 'Good'),
(4, 'Very Good'),
(5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `Id` int(11) NOT NULL,
  `CandId` int(11) DEFAULT NULL,
  `Rating` varchar(25) DEFAULT NULL,
  `Skill` varchar(37) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`Id`, `CandId`, `Rating`, `Skill`) VALUES
(3, 1, 'Very Good', 'Problem Solving'),
(5, 1, 'Bad', 'Programming'),
(6, 1, 'Bad', 'Programming'),
(7, 1, 'Excellent', 'Speaking'),
(8, 1, 'Very Good', 'Programming'),
(9, 1, 'Average', 'Speaking'),
(10, 1, 'Excellent', 'Problem Solving'),
(11, 1, 'Excellent', 'Problem Solving'),
(12, 1, 'Excellent', 'Problem Solving'),
(13, 1, 'Excellent', 'Problem Solving'),
(14, 1, 'Excellent', 'Problem Solving'),
(15, 3, 'Very Good', 'Speaking'),
(16, 5, 'Very Good', 'Speaking'),
(17, 5, 'Bad', 'Speaking'),
(18, 3, 'Average', 'Speaking'),
(19, 4, 'Very Good', 'Problem Solving'),
(20, 4, 'Average', 'Problem Solving'),
(21, 4, 'Excellent', 'Programming'),
(22, 4, 'Good', 'Speaking'),
(23, 4, 'Bad', 'Speaking'),
(24, 4, 'Very Good', 'Problem Solving');

-- --------------------------------------------------------

--
-- Table structure for table `SelectedCandidates`
--

CREATE TABLE `SelectedCandidates` (
  `Id` int(11) NOT NULL,
  `CandId` int(11) DEFAULT NULL,
  `Job` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SelectedCandidates`
--

INSERT INTO `SelectedCandidates` (`Id`, `CandId`, `Job`) VALUES
(1, 1, 'Developer'),
(6, 5, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `Skills`
--

CREATE TABLE `Skills` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `CandidateId` int(11) DEFAULT NULL,
  `Experience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Skills`
--

INSERT INTO `Skills` (`Id`, `Name`, `CandidateId`, `Experience`) VALUES
(9, 'HTML', 4, 5),
(10, 'Flask', 4, 3),
(11, 'Angular', 1, 3),
(12, 'C', 2, 1),
(13, 'Tensorflow', 1, 5),
(14, 'HTML', 1, 5),
(15, 'Java', 1, 5),
(16, 'Python', 1, 3),
(17, 'Ansible', 1, 1),
(18, 'Java', 3, 1),
(19, 'Python', 3, 3),
(20, 'Java', 2, 1),
(21, 'HTML', 2, 1),
(22, 'Python', 2, 3),
(23, 'MAchineLearning', 2, 1),
(24, 'Java', 5, 5),
(25, 'Python', 5, 3),
(26, 'HTML', 5, 1),
(27, 'MAchineLearning', 5, 3),
(28, 'Java', 6, 3),
(29, 'Python', 6, 3),
(30, 'RedHat', 6, 5),
(31, 'PHP', 6, 1),
(32, 'Mongodb', 7, 5),
(33, 'Microservice', 7, 3),
(34, 'Java', 7, 5),
(35, 'HTML', 7, 5),
(36, 'Tensorflow', 7, 1),
(37, 'Java', 8, 5),
(38, 'CSS', 8, 5),
(39, 'MAchineLearning', 8, 5),
(40, 'HTML', 8, 5),
(41, 'Python', 9, 5),
(42, 'Django', 9, 5),
(43, 'MAchineLearning', 9, 5),
(44, 'DataAnalytics', 9, 3),
(45, 'Java', 9, 5),
(46, 'Java', 10, 3),
(47, 'Python', 10, 3),
(48, 'MAchineLearning', 10, 5),
(49, 'HTML', 10, 5),
(50, 'Ansible', 10, 1),
(51, 'ASP.net', 10, 5),
(52, 'AI', 10, 1),
(53, 'BootStrap', 11, 3),
(54, 'HTML', 11, 5),
(55, 'AngularJS', 11, 5),
(56, 'Java', 11, 1),
(57, 'DataAnalytics', 11, 5),
(58, 'HTML', 12, 5),
(59, 'Java', 12, 5),
(60, 'MAchineLearning', 12, 3),
(61, 'DataAnalytics', 12, 5),
(62, 'Perl', 12, 1),
(63, 'Keras', 13, 5),
(64, 'MAchineLearning', 13, 3),
(65, 'Tensorflow', 13, 5),
(66, 'DataAnalytics', 13, 1),
(67, 'C++', 14, 3),
(68, 'Java', 14, 5),
(69, 'Python', 14, 5),
(70, 'HTML', 14, 5),
(71, 'MAchineLearning', 14, 5),
(72, 'BootStrap', 14, 5),
(73, 'Mongodb', 15, 5),
(74, 'Microservice', 15, 5),
(75, 'Java', 15, 5),
(76, 'RedHat', 15, 3),
(77, 'Keras', 16, 1),
(78, 'BootStrap', 16, 5),
(79, 'ASP.net', 16, 5),
(80, 'Mongodb', 16, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Candidate`
--
ALTER TABLE `Candidate`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Certifications`
--
ALTER TABLE `Certifications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Education`
--
ALTER TABLE `Education`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Experience`
--
ALTER TABLE `Experience`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Identity`
--
ALTER TABLE `Identity`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Interview`
--
ALTER TABLE `Interview`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Job`
--
ALTER TABLE `Job`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Notes`
--
ALTER TABLE `Notes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Positions`
--
ALTER TABLE `Positions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `PrimarySkills`
--
ALTER TABLE `PrimarySkills`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Project`
--
ALTER TABLE `Project`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `SelectedCandidates`
--
ALTER TABLE `SelectedCandidates`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Skills`
--
ALTER TABLE `Skills`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Certifications`
--
ALTER TABLE `Certifications`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `Education`
--
ALTER TABLE `Education`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Experience`
--
ALTER TABLE `Experience`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `Identity`
--
ALTER TABLE `Identity`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Interview`
--
ALTER TABLE `Interview`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Job`
--
ALTER TABLE `Job`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Notes`
--
ALTER TABLE `Notes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Project`
--
ALTER TABLE `Project`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Review`
--
ALTER TABLE `Review`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `SelectedCandidates`
--
ALTER TABLE `SelectedCandidates`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Skills`
--
ALTER TABLE `Skills`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
