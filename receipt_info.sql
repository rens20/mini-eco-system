-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 07:26 PM
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
-- Database: `receipt_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipt_info`
--

CREATE TABLE `receipt_info` (
  `id` int(50) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `gcash_number` int(50) NOT NULL,
  `receipt_mobile_number` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `receipt_attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipt_info`
--

INSERT INTO `receipt_info` (`id`, `account_name`, `gcash_number`, `receipt_mobile_number`, `amount`, `receipt_attachment`) VALUES
(1, 'dina lily go', 912345678, 'adobo', 1000, 'angpogi.jph'),
(2, '', 0, '', 500, 'uploads/'),
(3, '', 0, '', 500, 'uploads/'),
(4, '', 0, '', 500, 'uploads/'),
(5, '', 0, '', 0, 'uploads/'),
(6, '', 0, '', 700, 'uploads/'),
(7, 'renspogi', 2147483647, 'fgd7575747', 500, 'uploads/436528127_431108086062084_6308416243482573415_n.jpg'),
(8, 'renspogiss', 2147483647, '685856', 700, 'uploads/436528127_431108086062084_6308416243482573415_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receipt_info`
--
ALTER TABLE `receipt_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receipt_info`
--
ALTER TABLE `receipt_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
