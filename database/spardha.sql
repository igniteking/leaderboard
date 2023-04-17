-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 11:09 AM
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
-- Database: `spardha`
--

-- --------------------------------------------------------

--
-- Table structure for table `collage_data`
--

CREATE TABLE `collage_data` (
  `collage_id` int(11) NOT NULL,
  `collage_short` text NOT NULL,
  `collage_name` text NOT NULL,
  `collage_description` text NOT NULL,
  `collage_logo` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collage_data`
--

INSERT INTO `collage_data` (`collage_id`, `collage_short`, `collage_name`, `collage_description`, `collage_logo`, `created_at`) VALUES
(1, 'NIET', 'blah blah blah blah', 'Description', './demo/collage_logo/t6hmnACXjF/img 6.png', '2023-04-17 14:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `profile_picture` text NOT NULL,
  `website` text NOT NULL,
  `github` text NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `email`, `phone`, `password`, `user_type`, `profile_picture`, `website`, `github`, `instagram`, `facebook`, `twitter`, `created_at`) VALUES
(1, 'Zaidan Khan', 'khanzaidan786@gmail.com', '+91-7727084370', '$2y$10$9cvQPmA9HGoSxLNLUpNenOWUR3W2JhFufoGAcg3qFVzw2f57AETqi', 'superadmin', '', 'website.com', 'github.com', 'intagram.com', 'facebook.com', 'twitter.com', '2023-03-25 12:32:33'),
(2, 'Ghufran Arshad', 'ghufranarshad700@gmail.com', '', '$2y$10$2H9mIkO2SxrMsPSKL9ZVReKD1dCAj8PBr.5ymP8J.somOpctP8j9e', 'admin', '', 'website.com', 'github.com', 'intagram.com', 'facebook.com', 'twitter.com', '2023-03-25 12:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collage_data`
--
ALTER TABLE `collage_data`
  ADD PRIMARY KEY (`collage_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collage_data`
--
ALTER TABLE `collage_data`
  MODIFY `collage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
