-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 03:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prd_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `feature_all`
--

CREATE TABLE `feature_all` (
  `feature_id` varchar(25) NOT NULL,
  `feature_name` varchar(250) NOT NULL,
  `feature_description` varchar(1000) NOT NULL,
  `project_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature_all`
--

INSERT INTO `feature_all` (`feature_id`, `feature_name`, `feature_description`, `project_id`) VALUES
('MTF-0346137847274', 'Payment', 'N/A', 'MTPJ-6543860450003'),
('MTF-3704843832766', 'Authentication Feature', 'Sign In, Sign Up, Forget Password.', 'MTPJ-6543860450003');

-- --------------------------------------------------------

--
-- Table structure for table `project_all`
--

CREATE TABLE `project_all` (
  `project_id` varchar(25) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `project_description` varchar(1000) NOT NULL,
  `project_start_date` date NOT NULL,
  `project_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_all`
--

INSERT INTO `project_all` (`project_id`, `project_name`, `project_description`, `project_start_date`, `project_end_date`) VALUES
('MTPJ-2971777431207', 'Online Market Place', 'N/A', '2023-03-27', '2025-05-27'),
('MTPJ-6543860450003', 'Pharmacy Management System', 'A project about a pharmacy store.', '2023-03-27', '2024-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `specification_all`
--

CREATE TABLE `specification_all` (
  `specification_id` varchar(25) NOT NULL,
  `specification_name` varchar(250) NOT NULL,
  `specification_description` varchar(1000) NOT NULL,
  `feature_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specification_all`
--

INSERT INTO `specification_all` (`specification_id`, `specification_name`, `specification_description`, `feature_id`) VALUES
('MTS-4915707300296', 'Amuk', 'nnnnnn', 'MTF-3704843832766');

-- --------------------------------------------------------

--
-- Table structure for table `spec_user`
--

CREATE TABLE `spec_user` (
  `spec_user_id` varchar(25) NOT NULL,
  `spec_user_name` varchar(250) NOT NULL,
  `specification_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_all`
--

CREATE TABLE `user_all` (
  `user_id` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` int(15) DEFAULT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_joining_date` date NOT NULL,
  `user_joining_time` time(6) NOT NULL,
  `user_account_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_all`
--

INSERT INTO `user_all` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `user_joining_date`, `user_joining_time`, `user_account_type`) VALUES
('MTPM-0000000000000', 'Syed Golam Abid', 'sg.abid@hotmail.com', NULL, 'Im@Awsm786', '2023-03-25', '22:30:30.000000', 'Project Manager'),
('MTPM-7024422163361', 'Syed Golam Wahid', 'amuk@gmail.com', NULL, 'Im@Wahid123', '2023-03-26', '20:56:30.000000', 'Project Manager'),
('MTPM-9772998205687', 'S.G. Abid', 'sg.abid.13@gmail.com', NULL, 'Im@Abid123', '2023-03-25', '20:41:23.000000', 'Project Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feature_all`
--
ALTER TABLE `feature_all`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `project_all`
--
ALTER TABLE `project_all`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `specification_all`
--
ALTER TABLE `specification_all`
  ADD PRIMARY KEY (`specification_id`);

--
-- Indexes for table `spec_user`
--
ALTER TABLE `spec_user`
  ADD PRIMARY KEY (`spec_user_id`);

--
-- Indexes for table `user_all`
--
ALTER TABLE `user_all`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
