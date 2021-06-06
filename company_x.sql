-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 03:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_x`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`) VALUES
(1, 'sample1', '5e8ff9bf55ba3508199d22e984129be6'),
(2, 'junchan', 'f4cd627c9b28973f7cd6b65b41c4a444');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `account_id`) VALUES
(1, 'sample1', 'sample1', 'samnple@gmail', 1),
(2, 'Junta', 'Kurami', 'junta@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_fees`
--

CREATE TABLE `user_fees` (
  `fee_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_fees`
--

INSERT INTO `user_fees` (`fee_id`, `user_id`, `fee`, `status`, `date`) VALUES
(11, '2', '800', 'paid', '2021-05-25'),
(12, '2', '600', 'paid', '2021-05-25'),
(29, '2', '800', 'paid', '2021-05-26'),
(30, '2', '500', 'paid', '2021-05-26'),
(31, '2', '600', 'paid', '2021-05-26'),
(32, '2', '500', 'paid', '2021-05-26'),
(33, '2', '800', 'unpaid', '2021-05-27'),
(34, '2', '500', 'unpaid', '2021-05-27'),
(35, '2', '500', 'unpaid', '2021-05-27'),
(36, '2', '600', 'unpaid', '2021-05-27'),
(37, '2', '800', 'paid', '2021-05-27'),
(38, '2', '500', 'paid', '2021-05-27'),
(39, '2', '800', 'paid', '2021-05-27'),
(40, '2', '800', 'paid', '2021-05-27'),
(41, '2', '500', 'paid', '2021-05-27'),
(42, '2', '600', 'unpaid', '2021-05-27'),
(43, '2', '800', 'unpaid', '2021-05-27'),
(44, '2', '800', 'unpaid', '2021-05-27'),
(45, '2', '500', 'paid', '2021-06-02'),
(46, '2', '800', 'paid', '2021-06-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_fees`
--
ALTER TABLE `user_fees`
  ADD PRIMARY KEY (`fee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_fees`
--
ALTER TABLE `user_fees`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
