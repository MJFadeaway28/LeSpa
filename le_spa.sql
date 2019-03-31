-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 05:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `le_spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `uidAdmin` varchar(30) DEFAULT NULL,
  `emailAdmin` varchar(250) DEFAULT NULL,
  `pwdAdmin` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `uidAdmin`, `emailAdmin`, `pwdAdmin`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$GpG5DxTndhGRH95IxEyDpuC2YWmX.Au9Q7OIvlalpg.8FHP/ExVOe');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_lastname` varchar(25) DEFAULT NULL,
  `c_firstname` varchar(50) DEFAULT NULL,
  `c_mi` char(1) DEFAULT NULL,
  `c_ext` char(2) DEFAULT NULL,
  `c_address` varchar(50) DEFAULT NULL,
  `c_phone` varchar(13) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_lastname`, `c_firstname`, `c_mi`, `c_ext`, `c_address`, `c_phone`, `idAdmin`) VALUES
(1327565, 'Ponce', 'virgil', '', '', '', '', 1),
(1327566, 'astro', 'boygirl', '', '', '', '', 1),
(1327567, 'flor', 'cheri', '', '', '', '', 1),
(1327569, 'flor', 'orlando', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `c_record`
--

CREATE TABLE `c_record` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `t_date` date DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_record`
--

INSERT INTO `c_record` (`t_id`, `c_id`, `t_date`, `idAdmin`) VALUES
(60545, 1327567, '2019-03-22', 1),
(60546, 1327566, '2019-03-05', 1),
(60547, 1327566, '2019-03-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `e_id` int(11) NOT NULL,
  `e_lastname` varchar(25) DEFAULT NULL,
  `e_firstname` varchar(50) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`e_id`, `e_lastname`, `e_firstname`, `idAdmin`) VALUES
(3, 'Flor', 'Matthew', 1),
(4, 'Flor', 'Virgil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_code` varchar(6) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `duration` int(2) DEFAULT NULL,
  `commission` decimal(5,2) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_code`, `description`, `price`, `duration`, `commission`, `idAdmin`) VALUES
(2, 'M01', 'Relaxation Swedish Massage', '390.00', 60, '190.00', 1),
(3, 'M02', 'Therapeutic Deep Tissue Massage ', '380.00', 60, '190.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_record`
--

CREATE TABLE `s_record` (
  `t_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `e_id` int(11) DEFAULT NULL,
  `e_commission` decimal(5,2) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `c_record`
--
ALTER TABLE `c_record`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `s_record`
--
ALTER TABLE `s_record`
  ADD KEY `t_id` (`t_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1327570;

--
-- AUTO_INCREMENT for table `c_record`
--
ALTER TABLE `c_record`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60548;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Constraints for table `c_record`
--
ALTER TABLE `c_record`
  ADD CONSTRAINT `c_record_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `c_record_ibfk_2` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Constraints for table `s_record`
--
ALTER TABLE `s_record`
  ADD CONSTRAINT `s_record_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `c_record` (`t_id`),
  ADD CONSTRAINT `s_record_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `services` (`s_id`),
  ADD CONSTRAINT `s_record_ibfk_3` FOREIGN KEY (`e_id`) REFERENCES `employees` (`e_id`),
  ADD CONSTRAINT `s_record_ibfk_4` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
