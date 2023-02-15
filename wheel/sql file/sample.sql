-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 03:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `boxes`
--

CREATE TABLE `boxes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boxes`
--

INSERT INTO `boxes` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Box1', '2022-01-27', '2022-01-27'),
(2, 'Box2', '2022-01-27', '2022-01-27'),
(3, 'Box3', '2022-01-27', '2022-01-27'),
(4, 'Box4', '2022-01-27', '2022-01-27'),
(5, 'Box5', '2022-01-27', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created`, `modified`) VALUES
(1, 'L1', '2022-01-27', '0000-00-00'),
(2, 'L2', '2022-01-27', '0000-00-00'),
(3, 'L3', '2022-01-27', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`) VALUES
(1, 'surendran', 'd287ce7453c37be672b1cb7f71cd0864c46f9dc8', 'suren@gmail.com', 'rook', '2022-01-27 07:45:25', '2022-01-27 07:45:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wheels`
--

CREATE TABLE `wheels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `box_id` int(50) NOT NULL,
  `location_id` int(50) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wheels`
--

INSERT INTO `wheels` (`id`, `name`, `box_id`, `location_id`, `created`, `modified`) VALUES
(2, 'Bridgestone Select', 3, 1, '2022-01-27', '2022-01-27'),
(3, 'BORBET ', 3, 2, '2022-01-27', '2022-01-27'),
(4, 'ENKEI', 4, 3, '2022-01-27', '2022-01-27'),
(5, ' Ronal Wheels', 1, 2, '2022-01-27', '2022-01-27'),
(6, 'CM Wheels', 4, 2, '2022-01-27', '2022-01-27'),
(7, 'ALCOA WHEELS (Arconic)', 1, 1, '2022-01-27', '2022-01-27'),
(8, 'CITIC Dicastal', 1, 2, '2022-01-27', '2022-01-27'),
(9, 'Maxion Wheels', 3, 3, '2022-01-27', '2022-01-27'),
(10, 'UNIWHEELS Group', 1, 1, '2022-01-27', '2022-01-27'),
(11, 'Foshan Nanhai Zhongnan Aluminum Wheel Co., Ltd', 1, 1, '2022-01-27', '2022-01-27'),
(12, 'Superior Industries', 3, 1, '2022-01-27', '2022-01-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wheels`
--
ALTER TABLE `wheels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boxes`
--
ALTER TABLE `boxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wheels`
--
ALTER TABLE `wheels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
