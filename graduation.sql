-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 02:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduation`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `body` tinytext DEFAULT NULL,
  `point` int(11) NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(10) UNSIGNED NOT NULL,
  `name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `name` tinytext DEFAULT NULL,
  `url` tinytext DEFAULT NULL,
  `platform` tinytext DEFAULT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `path`
--

CREATE TABLE `path` (
  `path_id` int(10) UNSIGNED NOT NULL,
  `title` tinytext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `introduction` longtext DEFAULT NULL,
  `img_path` tinytext DEFAULT NULL,
  `track_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `path`
--

INSERT INTO `path` (`path_id`, `title`, `description`, `introduction`, `img_path`, `track_id`) VALUES
(1, 'Front-End Developer', 'Front-End Web Development, Also Known As Client-Side Development Is The Practice Of Producing HTML, CSS And JavaScript For A Website Or Web Application So That A User Can See And Interact With Them Directly.', NULL, 'web.jpg', 1),
(2, 'Back-End Developer', 'Back-end development means working on server-side software, which focuses on everything you can\'t see on a website. Back-end developers ensure the website performs correctly, focusing on databases, back-end logic, application programming interface (APIs), architecture, and servers.', NULL, 'web.jpg', 1),
(3, 'Android Developer', 'Android software development is the process by which applications are created for devices running the Android operating system. Google states that[3] \"Android apps can be written using Kotlin, Java, and C++ languages\" using the Android software development kit (SDK), while using other languages is also possible. All non-Java virtual machine (JVM) languages, such as Go, JavaScript, C, C++ or assembly, need the help of JVM language code, that may be supplied by tools, likely with restricted API support.', NULL, 'android.jpg', 1),
(4, 'Cyber Security', 'Front-End Web Development, Also Known As Client-Side Development Is The Practice Of Producing HTML, CSS And JavaScript For A Website Or Web Application So That A User Can See And Interact With Them Directly.', NULL, 'security.jpg', 1),
(5, 'Artificial Intelligence', 'Front-End Web Development, Also Known As Client-Side Development Is The Practice Of Producing HTML, CSS And JavaScript For A Website Or Web Application So That A User Can See And Interact With Them Directly.', NULL, 'Artificial Intelligence.jpg', 1),
(6, 'Data Science', 'Front-End Web Development, Also Known As Client-Side Development Is The Practice Of Producing HTML, CSS And JavaScript For A Website Or Web Application So That A User Can See And Interact With Them Directly.', NULL, 'data science.jpg', 1),
(7, 'Embedded System', 'An embedded system is a combination of computer hardware and software designed for a specific function. Embedded systems may also function within a larger system. The systems can be programmable or have a fixed functionality. Industrial machines, consumer electronics, agricultural and processing industry devices, automobiles, medical equipment, cameras, digital watches, household appliances, airplanes, vending machines and toys, as well as mobile devices, are possible locations for an embedded system.', NULL, 'Embedded.jpg', 5),
(8, 'Electronics', 'Front-End Web Development, Also Known As Client-Side Development Is The Practice Of Producing HTML, CSS And JavaScript For A Website Or Web Application So That A User Can See And Interact With Them Directly.', NULL, 'Electronics.jpg', 5),
(9, 'Network\r\n', 'Network Technology involves the use of data systems to manage and deliver digital resources over a computer network.  A variety of industries use computer hardware and system software that maintains a network, creating a need for specialists to manage them.\r\n\r\n', NULL, 'network.jpg', 6),
(10, 'Digital and analog design', 'In electronic design, an analogue circuit is one that uses voltage or current levels that vary continuously with time to represent signal amplitude. This is in contrast to digital circuits, which use a discrete set of signal levels, usually two voltages or currents, that represent signal amplitude.', NULL, 'network.jpg', 5),
(11, 'Control Systems', 'A control system manages, commands, directs, or regulates the behavior of other devices or systems using control loops. It can range from a single home heating controller using a thermostat controlling a domestic boiler to large industrial control systems which are used for controlling processes or machines. The control systems are designed via control engineering process.', NULL, 'network.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `body` longtext DEFAULT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(10) UNSIGNED NOT NULL,
  `title` tinytext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `content` longtext NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `title` tinytext DEFAULT NULL,
  `track_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(10) UNSIGNED NOT NULL,
  `name` tinytext DEFAULT NULL,
  `brief` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `name`, `brief`) VALUES
(1, 'software', 'Computer Software Engineers Develop Programs And Operating Systems For Computers. They Work With System Programmers, Analysts, And Other Engineers To Design Systems, Project Capabilities, And Determine Performance Interfaces. Computer Software Engineers A'),
(5, 'HARDWARE', 'Hardware Is Best Described As Any Physical Component Of A Computer System Containing A Circuit Board, ICs, Or Other Electronics. A Perfect Example Of Hardware Is The Screen On Which You Are Viewing This Page. Whether It Be A Monitor, Tablet, Or Smartphone'),
(6, 'NETWORK', 'A Network Engineer Is A Technical Professional Who Works On Designing, Installing, Operating, And Maintaining Computer Networks, Ensuring Their Safety And Optimal Performance. Engineers Work In The Field Of Information And Communication Technology, Using '),
(7, 'CONTROL', 'A Control Engineer Is A Specialized Engineer Who Designs And Develops Industrial Control And Automation Systems, Which Are Used To Monitor And Control Industrial Processes, Machinery, And Robots.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `path`
--
ALTER TABLE `path`
  ADD PRIMARY KEY (`path_id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `path`
--
ALTER TABLE `path`
  MODIFY `path_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`);

--
-- Constraints for table `path`
--
ALTER TABLE `path`
  ADD CONSTRAINT `path_ibfk_1` FOREIGN KEY (`track_id`) REFERENCES `track` (`track_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
