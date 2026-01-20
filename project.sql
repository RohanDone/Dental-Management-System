-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 11:07 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `date`) VALUES
(6, 'shubham', 'shubham1234@gmail.com', '9545651245', '2022-11-23 12:16:00'),
(9, 'alfaj', 'explorerpatil@gmail.com', '446656556', '2022-11-23 12:33:00'),
(10, 'alfaj', 'shubham1234@gmail.com', '9322305913', '2022-11-23 12:51:00'),
(11, 'Alfaj', 'alfajmulla27@gmail.com', '9845621548', '2022-11-23 12:53:00'),
(12, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '7249004472', '2022-11-23 21:44:00'),
(13, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '7249004472', '2022-11-23 21:44:00'),
(14, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '9322305913', '2022-11-23 21:46:00'),
(15, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '9322305913', '2022-11-23 21:48:00'),
(16, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '9322305913', '2022-11-23 21:48:00'),
(17, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '9322305913', '2022-11-23 21:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sr no` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Mobileno` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sr no`, `Name`, `lname`, `Mobileno`, `city`, `subject`) VALUES
(1, 'shubham', 'pawar', '9322305913', 'satara', 'Hello '),
(22, 'shubham', 'pawar', '9878456545', '', 'nLZkZZL;zm:Z;z;'),
(23, 'Rohit', 'dhavare', '7845984562', '', 'knxLNxkxlxX'),
(24, 'shubham', 'pawar', '4578945785', '', 'zknzkzlZ'),
(25, 'Harshavardhan ', 'Parit', '9503600105', '', 'root canel'),
(26, 'sandesh', 'shinde', '9845987845', '', 'asdfgh'),
(29, 'shubham', '9322305913', '4845854515', 'Satara', 'hfhghjg'),
(30, 'Alfaj', 'Mulla', '7845123545', 'Kolhapur', 'abcd'),
(31, '', '', '', 'Kolhapur', ''),
(32, '', '', '', 'Kolhapur', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `sr no` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Disease` varchar(1000) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`sr no`, `Name`, `Disease`, `review`) VALUES
(23, 'shubham pawar', 'root canel', 'Awesome'),
(24, 'Harsha', 'Root canel', 'awesome'),
(25, 'Rajdeep', 'Root canel', 'Awesome'),
(26, 'Rohan', 'Root canel', 'Fantastic');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `cpassword`, `user_type`) VALUES
(1, 'shubham', 'shubham1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user'),
(2, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '4567', '', 'admin'),
(3, 'Rohit Dhavare', 'rohitdhavare754@gmail.com', '4564', '', 'admin'),
(4, 'Sandesh', 'sandesh1234@gmail.com', '7777', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sr no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
