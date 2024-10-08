-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 10:51 AM
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
-- Database: `eleave`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `applicaton_id` int(200) NOT NULL,
  `application_user_id` int(200) NOT NULL,
  `application_status` varchar(200) NOT NULL DEFAULT 'Pending Approval',
  `application_start_date` varchar(200) NOT NULL,
  `application_end_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`applicaton_id`, `application_user_id`, `application_status`, `application_start_date`, `application_end_date`) VALUES
(1, 1, 'Approved', '2024-10-01', '2024-10-01'),
(2, 2, 'Approved', '2024-11-01', '2024-11-01'),
(4, 2, 'Declined', '2024-10-01', '2024-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_names` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_access_level` varchar(200) NOT NULL,
  `user_contacts` varchar(200) NOT NULL,
  `user_designation` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_names`, `user_email`, `user_password`, `user_access_level`, `user_contacts`, `user_designation`, `user_address`) VALUES
(1, 'System Admin', 'admin@eleave.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Admin', 'admin@eleave.com', 'HR ', '120-90348 Localhost'),
(2, 'Staff', 'staff@eleave.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Staff', '074568923', 'HR ', '120 lOCALHOST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`applicaton_id`),
  ADD KEY `ApplicationUserID` (`application_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `applicaton_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD CONSTRAINT `ApplicationUserID` FOREIGN KEY (`application_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
