-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2024 at 12:53 PM
-- Server version: 8.0.31
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `color1` varchar(7) DEFAULT NULL,
  `color2` varchar(7) DEFAULT NULL,
  `color3` varchar(7) DEFAULT NULL,
  `color4` varchar(7) DEFAULT NULL,
  `nail_biting` tinyint(1) DEFAULT NULL,
  `massage` tinyint(1) DEFAULT NULL,
  `nail_repair` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `phone_number`, `email`, `appointment_date`, `color1`, `color2`, `color3`, `color4`, `nail_biting`, `massage`, `nail_repair`) VALUES
(29, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(27, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(28, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, 0),
(25, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(26, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(23, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(24, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(22, '432432', '123213125@gfdsgsd.com', '2002-02-15', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, 0, 0),
(21, '432432', '123213125@gfdsgsd.com', '2002-02-15', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, 0, 0),
(30, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(31, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(32, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(33, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(34, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(35, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(36, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(37, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(38, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(39, '', '', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', NULL, NULL, NULL),
(40, '2 2 2', ' 2 2 22', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', 0, 0, 0),
(41, '2 2 2', ' 2 2 22', '0000-00-00', '#014012', '#0bb839', '#d4d4d4', '#303631', 0, 0, 0),
(42, '423432', '335385@student.mboutrecht.nl', '2000-03-21', '#014012', '#2134', '#432', '#303631', 0, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
