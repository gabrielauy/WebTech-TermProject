-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2018 at 06:50 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginsystem`
--

DROP TABLE IF EXISTS `loginsystem`;
CREATE TABLE IF NOT EXISTS `loginsystem` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginsystem`
--

INSERT INTO `loginsystem` (`user_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Albert', 'Lacap', '2155902', '$2y$10$LJXU1bUg7gzmZVtp1wsnz.U/I63wPocx2JsIQralLRDKUAJtRVBJu'),
(3, 'Daenerys', 'Targaryen', '2123456', '$2y$10$91i7.FZXYeMT8XQbNhjzceq9p/uJMrZsQkuMdWnspzpZ1I9vFarum'),
(4, 'Cersei', 'Lannister', '2142940', '$2y$10$bdIeUmbOwipHBphI0RqNV..dgdEaHF.KGzymRtvbHhtkvb8B6JCnu'),
(5, 'lodi', 'petmalu', '21559022', '$2y$10$lpiAmE8PbPkW7QXR/iUC/eY8oXXOd7zGRBzlG5zODg.F.9gCvOLFO'),
(6, 'Alberto', 'Lacap', '21559023', '$2y$10$H2QNoINoVPDFCxNIdQsqDe8jQMABd.qZToyHiGQxlgkyVrNnr6vFu');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `topic_id`) VALUES
(1, 'What does PHP stand for?', ' Personal Hypertext Processor', 'PHP: Hypertext Preprocessor', ' Private Home Page', 'Public Hypertext Processor', '0', 2),
(3, 'Php is the most famous server-side language found on the web', 'True', 'False', 'Not really', '10 years from now', '0', 2),
(4, 'A simple way to store data for individual users against a unique session ID.', 'Php Handler', 'Php Event', 'Php Session', 'Php start', '2', 2),
(5, 'Starts new or resumes existing session', 'Session_commit', 'Session_register', 'Session_status', 'Session_start', '3', 2),
(6, 'Used to gather form data after submitting an HTML form with the get method. Sends data to the URL.', 'PHP $_POST', 'PHP $_GET', 'PHP $_REQUEST', 'PHP $_COOKIE', '1', 2),
(7, 'Servlets runs in, and is managed by, a web-tier container called the ', 'Servlet Handler', 'Servlet Box', 'Servlet Container', 'Servlet Holder', '2', 1),
(8, 'simply an HTML web page that contains additional bits of code that execute application logic to generate dynamic content.', 'Java Web Server ', 'Java Server Pages ', 'Java Service Pages ', 'Java Web Pages', '1', 1),
(9, 'If a servlet is not yet loaded,', 'servlet container loads the servlet class and instantiates the servlet, and calls its init method.', 'servlet container waits for the servlet class to instantiate itself.', 'servlet container will do nothing.', 'servlet container loads the servlet class and instantiates the servlet.', '0', 1),
(10, 'Servlet processes the request using the ___ to create the response', 'response object', 'request object', 'handler object', 'register object', '0', 1),
(11, 'Java Server Pages generates', 'dynamic content', 'static content', 'no content', 'none of the above', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taskform`
--

DROP TABLE IF EXISTS `taskform`;
CREATE TABLE IF NOT EXISTS `taskform` (
  `task_id` int(10) NOT NULL AUTO_INCREMENT,
  `task` varchar(255) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskform`
--

INSERT INTO `taskform` (`task_id`, `task`) VALUES
(20, 'Exam tomorrow at sir bench in ISP lecture at 10 am'),
(19, 'Quiz in webtech lecture '),
(21, 'Do the Laundry later after all of this '),
(22, 'Sleep to cool off my brain');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` text NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`) VALUES
(1, 'Java Servlets'),
(2, 'Php'),
(3, 'Javascript'),
(4, 'Web Application Security');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
