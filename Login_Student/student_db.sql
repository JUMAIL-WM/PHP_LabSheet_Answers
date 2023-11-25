-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 04:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin@1234'),
(2, 'Bhagya', 'Bhagya1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_db1`
--

CREATE TABLE `student_db1` (
  `reg_no` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_db1`
--

INSERT INTO `student_db1` (`reg_no`, `name`, `email`, `contact_no`, `gender`, `course`, `subject`, `semester`) VALUES
('', '', '', '', '', 'Select a Course', 'maths', ''),
('0009', 'akthar', 'ak@gmail.com', '0760527243', 'Male', 'hndit', 'maths', '1'),
('0039', 'Mohammed Jumail', 'jumailwm@gmail.com', '0760527243', 'Male', 'hndit', 'physics', '1'),
('0056', 'sarjoon', 'sarjoon@gmail.com', '09876662', 'Male', 'hndit', 'chemistery', '2'),
('110', 'hamooth', 'jumailwm@gmail.com', '1223444', 'Female', 'hnda', 'physics', '2'),
('111', 'Jumail', 'jumailwm@gmail.com', '099899', 'Female', 'hndit', 'chemistery', '3'),
('123', 'jahith', 'jumailwm@gmail.com', '1234', 'Female', 'hndit', 'chemistery', '3'),
('13', 'ak', 'jumailwm@gmail.com', '1223444', 'Female', 'hnda', 'chemistery', '3'),
('999', 'abc', 'jumailwm@gmail.com', '099899', 'Female', 'hndit', 'physics', '2'),
('999999', 'aaaaa', 'jumailwm@gmail.com', '765434567', 'Female', 'hnda', 'biology', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_db1`
--
ALTER TABLE `student_db1`
  ADD PRIMARY KEY (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
