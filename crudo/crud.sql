-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 11:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(5, 'Boss', 'bosayurinovandil@primebisco.com', '08142526780', '5425327eb4f254bd75eeb42092e9960b'),
(6, 'Lekanq', 'oduh@hotmail.com', '0902145261', 'd9b1d7db4cd6e70935368a1efb10e377'),
(7, 'Esther Adebiyi', 'adebiyi.esther@naturalprime.com', '070215672332', '698d51a19d8a121ce581499d7b701668'),
(8, 'Janet Jackson', 'jackson@ymail.com', '09023123423', '698d51a19d8a121ce581499d7b701668'),
(9, 'Queen Okoye', 'Qokoye@hotmail.com', '09877665', '698d51a19d8a121ce581499d7b701668'),
(10, 'godwin', 'blessed@gmail.com', '9999900', '202cb962ac59075b964b07152d234b70'),
(11, 'Blesssing', 'blessed@ymail.com', '08012562412', '698d51a19d8a121ce581499d7b701668'),
(12, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'S', 'A@GMAIL.COM', '00', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
