-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 02:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Sno` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Sno`, `Title`, `Description`, `tstamp`) VALUES
(0, '54', 'dgvddd', '2021-05-11 17:39:13'),
(0, 'dufgjg', 'hii nimesh', '2021-05-12 19:12:39'),
(0, 'hffhjf', 'ijdfiifhuf', '2021-05-15 19:11:18'),
(0, 'hffhjf', 'ijdfiifhuf', '2021-05-15 19:13:46'),
(0, 'nimmua', 'ka re kalua', '2021-05-15 20:12:08'),
(0, 'dd', 'dfdc', '2021-05-26 15:33:13'),
(0, 'dd', 'dfdc', '2021-05-26 15:33:48'),
(0, 'dd', 'dfdc', '2021-05-26 15:34:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
