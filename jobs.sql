-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2014 at 10:00 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `app_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `job_id` smallint(6) NOT NULL,
  `date` varchar(30) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `emp_id` smallint(6) NOT NULL,
  PRIMARY KEY (`app_id`),
  KEY `job_id` (`job_id`),
  KEY `user_id` (`user_id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`app_id`, `job_id`, `date`, `user_id`, `emp_id`) VALUES
(1, 1, '01/05/2014', 37, 36);

-- --------------------------------------------------------

--
-- Table structure for table `deactivate`
--

CREATE TABLE IF NOT EXISTS `deactivate` (
  `id` smallint(6) NOT NULL,
  `date` varchar(30) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE IF NOT EXISTS `employer_details` (
  `id` smallint(6) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `industry` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `postal_address` mediumint(9) NOT NULL,
  `postal_code` smallint(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`id`, `business_name`, `industry`, `category`, `postal_address`, `postal_code`, `city`, `speciality`, `telephone`) VALUES
(36, 'james enterprises', 'information technology', 'parastatal', 23489, 32767, 'nairobi', 'computer consumable sales', 98654);

-- --------------------------------------------------------

--
-- Table structure for table `employer_job_post`
--

CREATE TABLE IF NOT EXISTS `employer_job_post` (
  `job_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `employer_id` smallint(6) NOT NULL,
  `post_vacant` varchar(50) NOT NULL,
  `positions` smallint(6) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  `terms_of_service` varchar(50) NOT NULL,
  `job_description` mediumtext NOT NULL,
  `qualifications` mediumtext NOT NULL,
  `preferences` mediumtext NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  PRIMARY KEY (`job_id`),
  KEY `employer_id` (`employer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employer_job_post`
--

INSERT INTO `employer_job_post` (`job_id`, `employer_id`, `post_vacant`, `positions`, `deadline`, `terms_of_service`, `job_description`, `qualifications`, `preferences`, `date_posted`) VALUES
(1, 36, 'accountant', 2, '29-May-2014', 'permanent', '      sdjkfyhiowe', '     dsjfhuiodsf ', '     zbckjbzx ', '01/05/2014');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_edu_background`
--

CREATE TABLE IF NOT EXISTS `job_seeker_edu_background` (
  `edu_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id` smallint(6) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `attended_from` varchar(20) NOT NULL,
  `attended_to` varchar(20) NOT NULL,
  `degree_diploma` varchar(50) NOT NULL,
  `main_course` varchar(50) NOT NULL,
  `course_work` mediumtext NOT NULL,
  `academic_accomplishments` mediumtext NOT NULL,
  PRIMARY KEY (`edu_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `job_seeker_edu_background`
--

INSERT INTO `job_seeker_edu_background` (`edu_id`, `id`, `university_name`, `attended_from`, `attended_to`, `degree_diploma`, `main_course`, `course_work`, `academic_accomplishments`) VALUES
(18, 37, 'University of Eldoret', '3-Aug-2010', '30-May-2014', 'computer science', 'degree', '    data communication', 'accomplishments');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_emp_history`
--

CREATE TABLE IF NOT EXISTS `job_seeker_emp_history` (
  `job_history_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `user_id` smallint(6) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `employer_name` varchar(50) NOT NULL,
  `type_of_industry` varchar(30) NOT NULL,
  `date_from` varchar(30) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `responsibilities_held` mediumtext NOT NULL,
  `reasons_for_departure` mediumtext NOT NULL,
  PRIMARY KEY (`job_history_id`),
  KEY `id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `job_seeker_emp_history`
--

INSERT INTO `job_seeker_emp_history` (`job_history_id`, `user_id`, `job_title`, `employer_name`, `type_of_industry`, `date_from`, `date_to`, `responsibilities_held`, `reasons_for_departure`) VALUES
(11, 37, 'user support', 'baraka ltd', 'computer sales', '15-Feb-2012', '22-Feb-2013', '    selling computer consumables', '    bad working conditions');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_general_info`
--

CREATE TABLE IF NOT EXISTS `job_seeker_general_info` (
  `general_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `member_id` smallint(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `national_id` int(11) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `postal_address` mediumint(9) NOT NULL,
  `residential_address` varchar(50) NOT NULL,
  `postal_code` mediumint(9) NOT NULL,
  `telephone` int(11) NOT NULL,
  PRIMARY KEY (`general_id`),
  UNIQUE KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `job_seeker_general_info`
--

INSERT INTO `job_seeker_general_info` (`general_id`, `member_id`, `first_name`, `last_name`, `middle_name`, `national_id`, `DOB`, `gender`, `marital_status`, `postal_address`, `residential_address`, `postal_code`, `telephone`) VALUES
(7, 37, 'john', 'muthee', 'Nderitu', 987654, '11-Feb-1988', 'male', 'single', 5632, 'Nyandarua', 7899, 727654231);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_languages`
--

CREATE TABLE IF NOT EXISTS `job_seeker_languages` (
  `language_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `user_id` smallint(6) NOT NULL,
  `language` varchar(50) NOT NULL,
  `js_read` varchar(50) NOT NULL,
  `js_write` varchar(50) NOT NULL,
  `js_speak` varchar(50) NOT NULL,
  PRIMARY KEY (`language_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `job_seeker_languages`
--

INSERT INTO `job_seeker_languages` (`language_id`, `user_id`, `language`, `js_read`, `js_write`, `js_speak`) VALUES
(12, 37, 'english', 'easily', 'easily', 'easily');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_reference`
--

CREATE TABLE IF NOT EXISTS `job_seeker_reference` (
  `ref_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `sir_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `telephone` int(30) NOT NULL,
  `postal_address` mediumint(9) NOT NULL,
  `post_code` mediumint(9) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `user` smallint(6) NOT NULL,
  PRIMARY KEY (`ref_id`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `job_seeker_reference`
--

INSERT INTO `job_seeker_reference` (`ref_id`, `sir_name`, `first_name`, `last_name`, `occupation`, `organisation`, `telephone`, `postal_address`, `post_code`, `city`, `email_address`, `user`) VALUES
(10, '', 'mathew', 'Gakuo', 'IT manager', 'Baraka LTD', 987654, 4532, 987654, 'nairobi', 'gakuo@yahoo.com', 37);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `email`, `category`, `password`, `date`) VALUES
(36, 'james', 'james@yahoo.com', 'employer', 'b4cc344d25a2efe540adbf2678e2304c', '2013-02-22'),
(37, 'john', 'john@yahoo.com', 'job_seeker', '527bd5b5d689e2c32ae974c6229ff785', '2013-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `user_id` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`user_id`, `name`) VALUES
(37, 'Drawing1.pdf');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `employer_job_post` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deactivate`
--
ALTER TABLE `deactivate`
  ADD CONSTRAINT `deactivate_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD CONSTRAINT `employer_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer_job_post`
--
ALTER TABLE `employer_job_post`
  ADD CONSTRAINT `employer_job_post_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employer_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_seeker_edu_background`
--
ALTER TABLE `job_seeker_edu_background`
  ADD CONSTRAINT `job_seeker_edu_background_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_seeker_emp_history`
--
ALTER TABLE `job_seeker_emp_history`
  ADD CONSTRAINT `job_seeker_emp_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`);

--
-- Constraints for table `job_seeker_general_info`
--
ALTER TABLE `job_seeker_general_info`
  ADD CONSTRAINT `job_seeker_general_info_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_seeker_languages`
--
ALTER TABLE `job_seeker_languages`
  ADD CONSTRAINT `job_seeker_languages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`);

--
-- Constraints for table `job_seeker_reference`
--
ALTER TABLE `job_seeker_reference`
  ADD CONSTRAINT `job_seeker_reference_ibfk_1` FOREIGN KEY (`user`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
