-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 06:15 PM
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
-- Database: `sam_0039_jumail`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sam_0039_jumail`
--

CREATE TABLE `tbl_sam_0039_jumail` (
  `employee_id` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  `ot` decimal(10,2) NOT NULL,
  `allowance` decimal(10,2) NOT NULL,
  `total_salary` decimal(10,2) NOT NULL,
  `department` varchar(100) NOT NULL,
  `statas` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sam_0039_jumail`
--

INSERT INTO `tbl_sam_0039_jumail` (`employee_id`, `name`, `email`, `contact_number`, `basic_salary`, `ot`, `allowance`, `total_salary`, `department`, `statas`, `qualification`) VALUES
('0001', 'Jumail', 'jumailwm@gmail.com', '0760527243', '20000.00', '2000.00', '1000.00', '23000.00', 'hr', 'permanent', 'post_graduate'),
('0002', 'Hamooth', 'hamooth@gmail.com', '0772334322', '40000.00', '2000.00', '1000.00', '43000.00', 'marketing', 'permanent', 'graduate'),
('0003', 'Jahith', 'jahith@gmail.com', '0752342231', '50000.00', '1000.00', '3000.00', '54000.00', 'marketing', 'temporary', 'diploma'),
('0004', 'Akthar', 'akthar@gmail.com', '0750982272', '34000.00', '2000.00', '3000.00', '39000.00', 'sales', 'temporary', 'certificate'),
('0005', 'Aslam', 'aslam@gmail.com', '0712384730', '2300.00', '1200.00', '200.00', '3700.00', 'hr', 'permanent', 'graduate'),
('0006', 'Hanees', 'hanees@gmail.com', '0769234222', '4300.00', '1200.00', '500.00', '6000.00', 'marketing', 'temporary', 'post_graduate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sam_0039_jumail`
--
ALTER TABLE `tbl_sam_0039_jumail`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
