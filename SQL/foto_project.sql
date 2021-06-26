-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2021 at 02:55 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `photographer` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `alt` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `path`, `location`, `photographer`, `description`, `type`, `alt`) VALUES
(1, '1.jpg', 'London', 'Gemma', '', 1, ''),
(2, '2.jpg', 'London', 'Naomi Thomas', '', 2, ''),
(3, '3.jpg', 'Azadkooh, Iran', 'Siavash Fanaee', '', 1, ''),
(4, '4.jpg', 'Dublin, Ireland', 'Graham Luby', '', 2, ''),
(5, '5.jpg', 'Valasht Lake, Iran', 'Siavash Fanaee', '', 1, ''),
(6, '6.jpg', 'Dublin, Ireland', 'Graham Luby', '', 2, ''),
(7, '7.jpg', 'Sevan Lake, Armenia', 'Siavash Fanaee', '', 1, ''),
(8, '8.jpg', 'Dublin, Ireland', 'Graham Luby', '', 2, ''),
(9, '9.jpg', 'Arfa\'deh ,Iran', 'Siavash Fanaee', '', 1, ''),
(10, '10.jpg', 'Dublin, Ireland', 'Graham Luby', '', 2, ''),
(11, '11.jpg', 'Drayasar, Iran', 'Siavash Fanaee', '', 1, ''),
(12, '12.jpg', 'Dublin, Ireland', 'Graham Luby', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone_number`, `message`) VALUES
(17, 'Siavash', 'Siavashf84@gmail.com', '0899656179', 'Test'),
(18, 'Siavash ', 'Siavashf84@gmail.com', '0899656179', 'Test'),
(19, 'Siavash Fanae', 'Siavashf84@gmail.com', '01555555', 'Test 3'),
(20, 'Siavash Fanaee', 'Siavashf84@gmail.com', '0899656179', 'Hi Gemma');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `type`, `price`, `name`) VALUES
(1, 1, 6, 'Scenery'),
(2, 2, 8, 'Urban'),
(3, 3, 10, 'All Photos');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial` text NOT NULL,
  `created_at` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testimonial`, `created_at`, `approved`, `user_id`) VALUES
(21, 'This website looks amazing!\r\n', '2021-05-18 23:13:24', 1, 4),
(20, 'This website looks amazing!\r\n', '2021-05-18 23:12:41', 1, 4),
(19, 'This website looks amazing!', '2021-05-18 23:12:32', 1, 4),
(18, 'This website looks amazing!\r\n', '2021-05-18 23:12:22', 0, 4),
(17, 'This website looks amazing!', '2021-05-18 23:11:33', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `type`, `is_admin`) VALUES
(5, 'asd', 'asd', 'asd', 'asd', 3, 1),
(4, 'Ali', 'Vakilzadeh', 'Ali', '12345', 2, 0),
(6, 'asdd', 'asdd', 'asdd', 'asdd', 3, 0),
(7, 'asdf', 'asdf', 'asdf', 'asdf', 2, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
