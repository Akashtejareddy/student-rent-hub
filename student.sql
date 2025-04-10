-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 05:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `student`
--

-- --------------------------------------------------------


-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `location` text NOT NULL,
  `timeperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `location`, `timeperiod`) VALUES
(3, 'abc', 'abc@gmail.com', 'test','9733456789', 'New Jersey', 3),
(5, 'bcd', 'bcd@gmail.com', 'bcd@123', '9877694853', 'Texas', 6),
(6, 'Divya', 'divya@gmail.com', 'divya@123', '8567097560','Newark', 1),
(7, 'Vasu', 'vasu@gmail.com', 'vasu@123', '9875674045', 'HCKENSACK', 2);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

