-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 10:19 PM
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
-- Database: `cv`
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
(0, 'Yuri', 'Metodiev', 'Metodiev', '2023-10-26', 'ВВМУd', '[value-2]'),
(0, 'Yuri', 'Metodiev', 'Metodiev', '2023-10-26', 'ВВМУd', '[value-2]'),
(0, 'Yuri', 'Metodiev', 'Metodiev', '2023-10-26', 'ВВМУd', '[value-2]'),
(0, 'das', 'Metodievd', 'd', '2023-10-26', 'dadadadasd', '[value-2]'),
(0, 'Yuri', 'Metodiev', 'Metodiev', '2023-07-12', 'Нов български университет', 'SQL');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`) VALUES
(1, 'Python'),
(2, 'C++'),
(3, 'JavaScript'),
(4, 'Java'),
(5, 'Ruby'),
(6, 'PHP'),
(7, 'HTML/CSS'),
(8, 'SQL'),
(9, 'Swift'),
(10, 'C#'),
(11, 'R'),
(12, 'Shell scripting'),
(13, 'Machine Learning'),
(14, 'Data Analysis'),
(15, 'DevOps'),
(16, 'Mobile App Development'),
(17, 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL,
  `university_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`university_id`, `university_name`) VALUES
(1, 'Висше военноморско училище „Н. Й. Вапцаров“'),
(2, 'Варненски свободен университет \"Черноризец Храбър\"'),
(3, 'Технически университет - София'),
(4, 'Софийски университет'),
(5, 'Пловдивски университет \"Паисий Хилендарски\"'),
(6, 'Варненски технически университет'),
(7, 'Нов български университет'),
(8, 'Американски университет в България');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`university_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
