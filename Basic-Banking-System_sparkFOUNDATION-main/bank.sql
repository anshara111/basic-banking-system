-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2021 at 08:50 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Phone_Number` int NOT NULL,
  `Balance` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `Email`, `Phone_Number`, `Balance`) VALUES
(1, 'Dummy-1', 'dummy1@email.com', 1234567890, 3500),
(2, 'Dummy-2', 'dummy2@email.com', 1234567890, 5000.98),
(3, 'Dummy-3', 'dummy3@email.com', 567890125, 1010.66),
(4, 'Dummy-4', 'dummy4@email.com', 456780790, 19000.6),
(5, 'Dummy-5', 'dummy5@email.com', 909678070, 2000.6),
(6, 'Dummy-6', 'dummy6@email.com', 126567890, 10990.7),
(7, 'Dummy-7', 'dummy7@email.com', 34567890, 1000),
(8, 'Dummy-8', 'dummy8@email.com', 1237890, 0.69),
(9, 'Dummy-9', 'dummy9@email.com', 1987890, 10801.4),
(10, 'Dummy-10', 'dummy10@email.com', 98237890, 7800.98);

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

DROP TABLE IF EXISTS `transactionhistory`;
CREATE TABLE IF NOT EXISTS `transactionhistory` (
  `customerName` varchar(45) NOT NULL,
  `transactionAmount` int NOT NULL,
  `timestamp` varchar(45) NOT NULL,
  `sendReceive` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`customerName`, `transactionAmount`, `timestamp`, `sendReceive`) VALUES
('Dummy-1', 200, 'Mon, 19 Apr 2021 02:32:41', 'send'),
('Dummy-4', 20201, 'Mon, 19 Apr 2021 02:32:41', 'received'),
('Dummy-4', 200, 'Mon, 19 Apr 2021 02:33:48', 'send'),
('Dummy-1', 5000, 'Mon, 19 Apr 2021 02:33:48', 'received'),
('Dummy-10', 901, 'Mon, 19 Apr 2021 02:40:46', 'send'),
('Dummy-9', 10801, 'Mon, 19 Apr 2021 02:40:46', 'received'),
('Dummy-4', 100, 'Mon, 19 Apr 2021 21:07:16', 'send'),
('Dummy-6', 1101, 'Mon, 19 Apr 2021 21:07:16', 'received'),
('Dummy-1', 1000, 'Mon, 19 Apr 2021 22:53:54', 'send'),
('Dummy-10', 1000, 'Mon, 19 Apr 2021 22:53:54', 'received'),
('Dummy-7', 1, 'Mon, 19 Apr 2021 22:56:10', 'send'),
('Dummy-10', 1001, 'Mon, 19 Apr 2021 22:56:10', 'received'),
('Dummy-1', 400, 'Mon, 19 Apr 2021 23:35:03', 'send'),
('Dummy-2', 6401, 'Mon, 19 Apr 2021 23:35:03', 'received'),
('Dummy-6', 100, 'Mon, 19 Apr 2021 23:36:15', 'send'),
('Dummy-7', 1000, 'Mon, 19 Apr 2021 23:36:15', 'received'),
('Dummy-2', 400, 'Mon, 19 Apr 2021 23:36:43', 'send'),
('Dummy-3', 1001, 'Mon, 19 Apr 2021 23:36:43', 'received'),
('Dummy-4', 100, 'Mon, 19 Apr 2021 23:37:54', 'send'),
('Dummy-3', 1101, 'Mon, 19 Apr 2021 23:37:54', 'received'),
('Dummy-4', 100, 'Mon, 19 Apr 2021 23:38:13', 'send'),
('Dummy-5', 10101, 'Mon, 19 Apr 2021 23:38:13', 'received'),
('Dummy-5', 100, 'Mon, 19 Apr 2021 23:38:31', 'send'),
('Dummy-4', 19801, 'Mon, 19 Apr 2021 23:38:31', 'received'),
('Dummy-5', 100, 'Mon, 19 Apr 2021 23:38:42', 'send'),
('Dummy-6', 10, 'Mon, 19 Apr 2021 23:39:07', 'send'),
('Dummy-3', 1111, 'Mon, 19 Apr 2021 23:39:07', 'received'),
('Dummy-8', 100, 'Mon, 19 Apr 2021 23:39:21', 'send'),
('Dummy-4', 19901, 'Mon, 19 Apr 2021 23:39:21', 'received'),
('Dummy-4', 100, 'Mon, 19 Apr 2021 23:40:19', 'send'),
('Dummy-5', 10001, 'Mon, 19 Apr 2021 23:40:19', 'received'),
('Dummy-3', 100, 'Tue, 20 Apr 2021 06:16:49', 'send'),
('Dummy-4', 19901, 'Tue, 20 Apr 2021 06:16:49', 'received'),
('Dummy-1', 100, 'Tue, 20 Apr 2021 06:33:18', 'send'),
('Dummy-4', 20001, 'Tue, 20 Apr 2021 06:33:18', 'received'),
('Dummy-4', 1000, 'Tue, 20 Apr 2021 06:33:36', 'send'),
('Dummy-5', 11001, 'Tue, 20 Apr 2021 06:33:36', 'received'),
('Dummy-2', 1000, 'Tue, 20 Apr 2021 06:34:36', 'send'),
('Dummy-5', 12001, 'Tue, 20 Apr 2021 06:34:36', 'received'),
('Dummy-8', 6800, 'Tue, 20 Apr 2021 06:35:42', 'send'),
('Dummy-10', 7801, 'Tue, 20 Apr 2021 06:35:42', 'received'),
('Dummy-5', 10000, 'Tue, 20 Apr 2021 06:37:31', 'send'),
('Dummy-6', 10991, 'Tue, 20 Apr 2021 06:37:31', 'received');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
