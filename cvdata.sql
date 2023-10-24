-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 03:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `skills` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `first_name`, `second_name`, `last_name`, `date_of_birth`, `university`, `skills`) VALUES
(16, 'dasd', 'Metodiev', 'adsas', '2023-10-15', 'VVFG', 'C'),
(17, 'dasd', 'Metodiev', 'adsas', '2023-10-15', 'VVFG', 'C'),
(18, 'dasd', 'Metodiev', 'adsas', '2023-10-15', 'VVFG', 'C'),
(19, 'Yuri', 'Metodiev', 'Metodiev', '2023-10-12', 'Malll', 'C++'),
(20, 'Юрий', 'Методиев', 'Методиев ', '2002-11-16', 'ВВВМУУУВВВ', 'HTML'),
(21, 'Юрий', 'Методиев', 'Методиев ', '2002-11-16', 'ВВВМУУУВВВ', 'HTML'),
(22, 'САД', 'ДА', 'фф', '2023-09-29', 'ТФГ', 'PHP'),
(23, 'Pepo', 'M', 'F', '2023-10-19', 'TURNO V', 'PYTHON=SCC'),
(24, 'фсад', 'дасдас', 'адсасд', '2015-10-08', 'VFU', 'C++'),
(25, 'садасд', 'асдасд', 'асдасд', '2002-12-31', 'VVMU', 'Python'),
(26, 'df', 'fdf', 'df', '2023-09-28', '', ''),
(27, 'df', 'fdf', 'df', '2023-09-28', '', ''),
(28, 'df', 'fdf', 'df', '2023-09-28', '', ''),
(29, 'tt', 't', 't', '2023-10-26', 'ВВДФ', 'Python'),
(30, 'Yuri', 'Metodiev', 'Metodiev', '2023-10-05', 'VVMU', 'C++');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
