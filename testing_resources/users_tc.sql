-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 08:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_tc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adm_uid` varchar(30) NOT NULL,
  `adm_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adm_uid`, `adm_pwd`) VALUES
(1, 'admin1', '$2a$10$kFBFUjkFDcYr8ZV5.Ri2k.vQzrMUtQXip8.fayT7bNl0Jl/dNrfb6'),
(3, 'admin', '$2a$04$jX7faEfjbfeTAGt5ROrqwePHE.5bwdEF2fFt6fj.cyDcNowK4CvM2');

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `id` int(11) NOT NULL,
  `fname` tinytext NOT NULL,
  `lname` tinytext NOT NULL,
  `address` text NOT NULL,
  `city` tinytext NOT NULL,
  `state` tinytext NOT NULL,
  `zip` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `email` text NOT NULL,
  `license` int(11) NOT NULL,
  `social` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`id`, `fname`, `lname`, `address`, `city`, `state`, `zip`, `phone`, `email`, `license`, `social`, `date_created`) VALUES
(0, 'Bruce', 'Kane', '1300 Dallas Dr.', 'Denton', 'TX', '76205', '4695253763', 'Bruce@gmail.com', 2147483647, '999887777', '2022-05-03 06:19:54'),
(1, 'Jerry', 'West', '1100 Road Drive', 'Dallas', 'Texas', '75063', '4447778888', 'IssaEmail@gmail.com', 41342, '141421', '2022-03-29 20:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cname` tinytext NOT NULL,
  `address` mediumtext NOT NULL,
  `city` tinytext NOT NULL,
  `state` tinytext NOT NULL,
  `zip` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `bill_info` mediumtext NOT NULL,
  `credit` mediumtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cname`, `address`, `city`, `state`, `zip`, `phone`, `email`, `bill_info`, `credit`, `date_created`) VALUES
(1, 'John Doe', '7221 Drive Dr.', 'Cleveland', 'Ohio', '77777', '4445559999', 'JohnDoe@gmail.com', '5', '1', '2022-03-29 22:18:52'),
(2, 'denis', '5555 Main St.', 'd12', 'e12421', '55555555', '151-52151-525', 'aaaa@gmail.org', '55555', '1', '2022-03-29 22:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `emp_uid` varchar(30) NOT NULL,
  `emp_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_uid`, `emp_pwd`) VALUES
(5, 'test2', '$2y$10$AjEZI7HXA31TcUG7w18IHOxpMw358RF6XrucOQK1ojI6SEcfkuT8C'),
(13, 'bub', '$2y$10$7YC1jXTYsPEyhu138bvmP.5VzDfuVgnrwS6f6AChrn20OBPN1bz6K'),
(16, 'sub1', '$2y$10$i7o/tITzcdEwU6MMqt6hHu6Ze4.AkLL6lPRfsTKiZdBXW6nJvvVsS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_uid` varchar(30) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_uid`, `user_pwd`) VALUES
(28, 'test1', '$2y$10$dTD1PP3FDHVvuPxEoV.P0eZbe3L3Ndr9HlhWvoKLyNa/yRnfgiLyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
