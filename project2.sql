-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2014 at 10:13 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `address`, `city`, `mobile`, `description`) VALUES
(1, 'happy', 'mumbai', '94012', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_level`, `type`) VALUES
(1, 'tejas', '6041d0363da08612bcb0f536e00dba50', 1, 'a'),
(2, 'bhavin', 'de6b0c87d96dffad0b8b4deb59060d07', 1, 'a'),
(3, 'ronak', 'b51dedb33ef8d983d741d5e035760a08', 1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE IF NOT EXISTS `employee_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `emp_name`, `designation`, `salary`, `profile_photo`, `joining_date`, `dob`, `address`, `contact_no`) VALUES
(1, 'Tejas', 'Devloper', 30000, '10553987_927106480649070_1338578815_n.jpg', '2002-02-12', '2014-02-11', 'Ahmedabad', 951002380),
(2, 'Ronak', 'Designer', 40000, 'Ronak.jpg', '2011-09-09', '2014-10-10', 'Mehmdabad', 9510020381),
(3, 'Ronak Sankhala', 'QA', 50000, 'Ronak_s.jpg', '2010-08-15', '2014-09-29', 'Dehgam', 9510020382),
(4, 'Bhavin', 'BA', 50000, 'Bhavin.jpg', '2010-12-12', '2014-11-11', 'Vadodara', 9510020383),
(5, 'Vatsal', 'BA', 10000, 'vatsal.jpg', '2014-11-05', '2014-11-25', 'Ahmedabad', 9510020384),
(18, 'Niketa', 'QA', 100, 'p.jpg', '2013-02-02', '2014-02-02', 'ahmedabad', 9510020380);

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE IF NOT EXISTS `project_table` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `path2` varchar(255) NOT NULL,
  `path3` varchar(255) NOT NULL,
  `path4` varchar(255) NOT NULL,
  `path5` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `project_review` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`id`, `project_name`, `description`, `path`, `path2`, `path3`, `path4`, `path5`, `start_date`, `end_date`, `project_review`) VALUES
(1, 'River', 'Hello My name is Tejas Shah.. ', 'p.jpg', '1471939_1431675257048588_2131124601_n.jpg', '1800268_1469678513248262_395819134_n.jpg', '10415673_1505621426320637_2580815737448966024_n.jpg', 'p.jpg', '2014-11-05', '2014-11-18', 'HEllo My Name '),
(2, 'Lal Fort', 'Available', 'p.jpg', 'p.jpg', '', '', '', '2013-04-02', '2013-04-17', 'Average'),
(3, 'Tower', 'Working On 10th Floor', 'p.jpg', 'p.jpg', '', '', '', '2012-02-02', '2015-03-03', 'Very_good'),
(4, 'University', 'Plan pass', 'p.jpg', 'p.jpg', '', '', '', '2005-12-05', '2014-11-05', 'Very_good'),
(5, 'Brts', '           Working           ', 'p.jpg', '', '', '', '', '2014-04-05', '2015-05-06', '           gud           '),
(22, 'Image5', '   asas   ', 'p.jpg', 'p.jpg', '10522791_627278110712591_166736621_n.jpg', '10553987_927106480649070_1338578815_n.jpg', 'p.jpg', '2015-02-01', '2016-01-01', '   asa   '),
(23, 'Demo Home', 'this is demo text required for the field ', '994116_1519156228300490_350987706876888578_n.jpg', '1471939_1431675257048588_2131124601_n.jpg', '1800268_1469678513248262_395819134_n.jpg', '10415673_1505621426320637_2580815737448966024_n.jpg', 'Screenshot_2014-08-07-07-59-00_1.jpg', '2014-11-01', '2014-11-04', 'this is demo text required for the field ');

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE IF NOT EXISTS `project_type` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `type`) VALUES
(1, 'Goverment'),
(2, 'Commercial'),
(3, 'Industrial');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
