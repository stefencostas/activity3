-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 05:59 AM
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
-- Database: `pointofsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_menu`
--

CREATE TABLE `ref_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `menu_desc` varchar(150) NOT NULL,
  `price` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_menu`
--

INSERT INTO `ref_menu` (`id`, `menu_name`, `menu_desc`, `price`) VALUES
(1, 'burger', 'cheese burger', 49.00),
(2, 'pancit', 'pancit canton', 19.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_menu`
--
ALTER TABLE `ref_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_menu`
--
ALTER TABLE `ref_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
