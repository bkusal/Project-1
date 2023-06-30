-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 10:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(28) NOT NULL,
  `Email` varchar(118) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `Email`, `Password`) VALUES
(1, 'kushal1@gmail.com', 'asdf123'),
(2, 'bishal55@gmail.com', 'bishal123'),
(3, 'kushal1@gmail.com', 'asdf123'),
(4, '', ''),
(5, 'kushal1@gmail.com', '123asd'),
(6, 'kushal1@gmail.com', '123asd'),
(7, 'kushal1@gmail.com', '123asd'),
(8, 'kushal1@gmail.com', '123sdf'),
(9, '', ''),
(10, '', ''),
(11, 'kushal1@gmail.com', '123asd'),
(12, 'kushal1@gmail.com', 'dsfsdf'),
(13, 'Luffy1@gmail.com', 'kushal123'),
(14, 'kushal1@gmail.com', '123'),
(15, 'kushal1@gmail.com', '123'),
(16, 'ramm@5gmail.com', '123'),
(17, '', ''),
(18, 'kushal1@gmail.com', 'asdf'),
(19, 'Iam4@gmail.com', 'aaaaaa'),
(20, 'Iam4@gmail.com', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
