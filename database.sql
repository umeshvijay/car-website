-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 09:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hyundai`
--

-- --------------------------------------------------------

--
-- Table structure for table `drive`
--

CREATE TABLE `drive` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drive`
--

INSERT INTO `drive` (`name`, `email`, `phone`) VALUES
('umesh', 'umeshvijay30@gmail.com', 2147483647),
('', '', 0),
('Umesh Sukumar', 'umeshvijay30@gmail.com', 2147483647),
('jojojdo', 'abbjajgdsj', 977979080),
('Bob', 'bob@gmail.com', 1122333678);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `name`, `email`, `model`) VALUES
(1, 'Umesh', 'umeshvijay30@gmail.com', 'i20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
