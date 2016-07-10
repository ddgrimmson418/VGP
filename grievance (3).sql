-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 07:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grievance`
--

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE IF NOT EXISTS `grievance` (
  `uid` varchar(20) DEFAULT NULL,
  `description` varchar(4096) DEFAULT NULL,
  `dos` timestamp NULL DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievance`
--

INSERT INTO `grievance` (`uid`, `description`, `dos`, `subject`, `department`) VALUES
('ddg', 'guys smoking near my room!!!!!!!!!', '2016-03-22 02:32:49', 'smoking near my room', 'hosteldiscipline'),
('ddg', '123456789 my wifi is not working for quite sometime.', '2016-03-22 02:36:20', 'wifi not working ', 'hosteldiscipline'),
('fd', 'mcjksdn', '2016-03-22 04:18:01', 'DD irritating me', 'hosteldiscipline'),
('fd', 'fgsfgfsdfsd', '2016-03-22 04:20:38', 'dsd', 'hosteldiscipline'),
('shravya7', 'ggbnyfhk.', '2016-03-22 04:30:28', 'jgkhjgnbkj', 'hostelfood'),
('ddg', 'Mobile testing', '2016-03-23 04:51:48', 'Mobile test ', 'hostelfood'),
('ddg', 'htetehdbfxc', '2016-03-28 22:23:55', 'ngdhtdhg', 'hosteldiscipline'),
('ddg', 'students are ragging me\r\n', '2016-03-29 21:58:01', 'ragging in hostel', 'hosteldiscipline'),
('bimari', 'ASDFASDFASD\r\n', '2016-03-30 00:18:24', 'dd is bugging me', 'hosteldiscipline'),
('ddg', 'Hgdtufuudhu', '2016-04-01 04:30:59', 'Ghgdhu', 'hostelfood'),
('ddg', 'Ygdrygr', '2016-04-01 04:52:29', 'Ghgdhu', 'hostelfood'),
('ddg', 'aaojfijairninvnajnv;ajnv', '2016-04-04 02:47:02', 'ra;euhauhn', 'hostelfood'),
('ddg', ',JVKBUBIUJNIUBIUB', '2016-04-15 04:11:38', '.LHVKH JHB ', 'hostelfood'),
('ddg', 'uhbuhbuhb', '2016-04-25 21:14:37', 'ybygyug', 'hosteldiscipline'),
('ddg', 'this a test complaint to check if the mail functionality is working properly', '2016-04-30 05:55:17', 'test complaint', 'hostelfood'),
('ddg', 'this is a retest', '2016-04-30 06:05:36', 'hi', 'hosteldiscipline'),
('ddg', 'hi!!! how are you!!!!', '2016-04-30 06:09:11', 'wifi not working ', 'hosteldiscipline'),
('ddg', 'hi this is a test complaint to check the mail functionality is working or not.', '2016-04-30 06:21:02', 'hi this is a test problem', 'hostelfood'),
('ddg', 'need 5 classes to appear FAT', '2016-04-30 04:39:11', 'attendance', 'hosteldiscipline'),
('ddg', 'ddgrimmson is awsome', '2016-04-30 04:41:14', 'hasfoihaoifh', 'hosteldiscipline'),
('ddg', 'my room neighbours play loud music at night.. room number 123 L-block.', '2016-05-02 05:29:40', 'loud music at night', 'hosteldiscipline');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Contactnumber` int(11) DEFAULT NULL,
  `Alternatecontactnumber` int(11) DEFAULT NULL,
  `Hostelblock` char(1) DEFAULT NULL,
  `Roomnumber` int(11) DEFAULT NULL,
  `psw` varchar(20) DEFAULT NULL,
  `repsw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Firstname`, `Lastname`, `Email`, `Username`, `Contactnumber`, `Alternatecontactnumber`, `Hostelblock`, `Roomnumber`, `psw`, `repsw`) VALUES
('deepanshu', 'Dixit', 'deepanshu.dixit2013@', 'ddg', 2147483647, 1234556667, 'l', 123, '123', '123'),
('poornima', 'Dixit', 'deepanshu.dixit2013@', 'poo', 2147483647, 123456789, 'g', 456, '456', '456'),
('poornima', 'Dixit', 'poornima@ddg.com', 'poornima', 2147483647, 123456789, 'g', 789, 'babban', 'babban'),
('h', 'fg', 'fgf@gmail.com', 'fd', 5555, 55121, '5', 55, '12', '12'),
('shravya', 'purohit', 'shravyapurohit@gmail', 'shravya7', 2147483647, 2147483647, 'L', 407, '7567985626', '7567985626'),
('bimari', 'tiwari', 'bimari@gmail.com', 'bimari', 2147483647, 652, 'd', 789, '123', '123'),
('a', 'b', 'abcd@gmail.com', '123', 987654321, 987654312, 'l', 918, '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `webcomp`
--

CREATE TABLE IF NOT EXISTS `webcomp` (
  `subject` varchar(50) DEFAULT NULL,
  `description` varchar(4096) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcomp`
--

INSERT INTO `webcomp` (`subject`, `description`, `email`) VALUES
('site doesnt load', 'i tried but the site wont load!!!!', 'deepanshuiit2013@gmail.com'),
('site doesnt load', 'i tried but the site wont load!!!!', 'deepanshuiit2013@gmail.com'),
('site doesnt load', 'i tried but the site wont load!!!!', 'deepanshuiit2013@gmail.com'),
('site doesnt load', 'i tried but the site wont load!!!!', 'deepanshuiit2013@gmail.com'),
('site doesnt load', 'i tried but the site wont load!!!!', 'deepanshuiit2013@gmail.com'),
('site doesnt load', 'i tried but the site wont load!!!!', 'deepanshuiit2013@gmail.com'),
('ndslkjfnjn', 'hbjfsfknjkfnkjnfsnfkjs', 'tanmayranawat114@gmail.com'),
('hdgvvjkhjfdg', 'gdhfgbjfm\r\n', 'shravyapurohit@gmail.com'),
('ajnf;oanf', ';ajhfliuaherfn\r\n', 'abcd@example.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
