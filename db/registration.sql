-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 12:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `homeAdd` varchar(255) NOT NULL,
  `presentAdd` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dateOfbirth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `placeOfbirth` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `elementary` varchar(255) NOT NULL,
  `elemgraduated` int(11) NOT NULL,
  `highschool` varchar(255) NOT NULL,
  `highgraduated` int(11) NOT NULL,
  `shs` varchar(255) NOT NULL,
  `shsgraduated` int(11) NOT NULL,
  `track_strand` varchar(255) NOT NULL,
  `completename` varchar(255) NOT NULL,
  `datesigned` date NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `lname`, `fname`, `mname`, `homeAdd`, `presentAdd`, `contact`, `sex`, `dateOfbirth`, `email`, `placeOfbirth`, `civilstatus`, `elementary`, `elemgraduated`, `highschool`, `highgraduated`, `shs`, `shsgraduated`, `track_strand`, `completename`, `datesigned`, `course`) VALUES
(1, 'Marfa', 'Juniel', 'Maru', 'Tugas, Madridejos, Cebu', 'Tugas, Madridejos, Cebu', 2147483647, 'Male', '1999-07-14', 'marfajuniel5@gmail.com', 'Tugas, Madridejos, Cebu', 'Single', 'Tugas Elementary School', 2012, 'Madridejos National High School', 2016, 'Madridejos National High School', 2018, 'TVL', 'Juniel Maru Marfa', '2024-06-13', 'BSIT'),
(2, 'Ferrer', 'Antonette', 'Marfa', 'Tugas, Madridejos, Cebu', 'Tugas, Madridejos, Cebu', 2147483647, 'Female', '2008-01-02', 'marfajuniel5@gmail.com', 'Tugas, Madridejos, Cebu', 'Single', 'Tugas Elementary School', 2012, 'Madridejos National High School', 2016, 'Madridejos National High School', 2018, 'HUMSS', 'Antonette Marfa Ferrer', '2024-06-13', 'BSBA'),
(3, 'Aropo', 'Bini', 'Morda', 'Tugas, Madridejos, Cebu', 'Tugas, Madridejos, Cebu', 2147483647, 'Male', '2000-02-20', 'sabit234@gmail.com', 'Tugas, Madridejos, Cebu', 'Single', 'Tugas Elementary School', 2012, 'Madridejos National High School', 2016, 'Madridejos National High School', 2018, 'HUMSS', 'Bini Morda Aropo', '2024-06-13', 'BSHM'),
(4, 'Smith', 'Sam', 'Missa', 'Tugas, Madridejos, Cebu', 'Tugas, Madridejos, Cebu', 2147483647, 'Male', '2000-02-20', 'samsmith@gmail.com', 'Tugas, Madridejos, Cebu', 'Single', 'Tugas Elementary School', 2012, 'Madridejos National High School', 2016, 'Madridejos National High School', 2018, 'TVL', 'Sam Missa Smith', '2024-06-13', 'BSED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
