-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 10, 2018 at 06:52 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(7) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` varchar(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `password`) VALUES
(2152940, 'Angelica', 'Grabanzor', 'jelly');

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
