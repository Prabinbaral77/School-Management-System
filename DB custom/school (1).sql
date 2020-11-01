-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 09:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `work_as` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `f_name`, `l_name`, `work_as`, `address`, `contact_no`, `gender`, `image`, `dob`, `status`) VALUES
(1, 'maila dai', 'kumar', 'security', 'pokhara', '9845687589', 'male', '1599808218.jpeg', '2020-09-24', 1),
(4, 'Asmita', 'maharjan', 'assistant', 'pokhara', '9845758684', 'female', '1599808187.jpeg', '2020-09-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `class` varchar(50) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `address` varchar(191) NOT NULL,
  `guardian_name` varchar(191) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `gender` varchar(60) DEFAULT NULL,
  `image` varchar(2000) NOT NULL,
  `dob` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `f_name`, `l_name`, `class`, `roll_no`, `address`, `guardian_name`, `contact_no`, `gender`, `image`, `dob`, `status`) VALUES
(3, 'Namuna', 'Baral', '11', 15, 'pokhara', 'Bishnu', '9846868438', 'female', '1599798199.jpeg', '2020-09-09', 1),
(4, 'Namrata kumari', 'Cheetri', 'nursary', 1, 'pokhara', 'Bishnu', '9846868438', 'female', '1599801519.jpeg', '2020-09-17', 1),
(11, 'Roshan', 'Kunwar', '8', 1, 'pokhara', 'Harischandra', '9846868438', 'male', '1599801551.jpeg', '2020-09-17', 1),
(12, 'Roshani', 'Addhikari', '11', 3, 'pokhara', 'Harischandra', '9846868438', 'female', '1599801585.jpeg', '2020-09-23', 1),
(14, 'Asmita', 'Addhikari', '10', 15, 'pokhara', 'Bishnu', '9846868438', 'female', '1599789705.jpeg', '2020-09-25', 1),
(15, 'Arjunnn', 'Baral', '12', 15, 'pokhara', 'Harischandra', '9846868438', 'male', '1599798239.jpeg', '2020-09-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `sub_specialist` varchar(191) NOT NULL,
  `gender` varchar(60) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `f_name`, `l_name`, `address`, `contact_no`, `qualification`, `sub_specialist`, `gender`, `image`, `dob`, `status`) VALUES
(8, 'Min', 'Kc', 'pokhara', '9845687512', 'master in physics', 'science', 'male', '1599801476.jpeg', '2020-09-15', 1),
(10, 'Bishnu Parsad', 'Dahal', 'pokhara', '984685892', 'master in BE', 'english', 'male', '1599801461.jpeg', '2020-09-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Prabin', 'admin@gmail.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
