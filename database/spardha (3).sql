-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 12:27 PM
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
  `collage_logo` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collage_data`
--

INSERT INTO `collage_data` (`collage_id`, `collage_short`, `collage_name`, `collage_logo`, `created_at`) VALUES
(1, 'NIET', 'NIMS Institute of Engineering Technologies ', './demo/collage_logo/rAcilUphQP/img 3.png', '2023-04-20 16:31:40'),
(2, 'Management', 'Management', './demo/collage_logo/OWs7VJ8qn2/img 6.png', '2023-04-20 16:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `game_data`
--

CREATE TABLE `game_data` (
  `game_id` int(11) NOT NULL,
  `game_name` text NOT NULL,
  `game_description` text NOT NULL,
  `game_type` text NOT NULL,
  `game_logo` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_data`
--

INSERT INTO `game_data` (`game_id`, `game_name`, `game_description`, `game_type`, `game_logo`, `created_at`) VALUES
(2, 'Football', 'sdfgh', 'Male', './demo/game_logo/Hh2TZClvYg/img 9.png', '2023-04-20 18:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `match_data`
--

CREATE TABLE `match_data` (
  `match_id` int(11) NOT NULL,
  `team_1` text NOT NULL,
  `team_2` text NOT NULL,
  `game_type` text NOT NULL,
  `date_time` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_data`
--

INSERT INTO `match_data` (`match_id`, `team_1`, `team_2`, `game_type`, `date_time`, `created_at`) VALUES
(1, 'NIMS Institute of Engineering Technologies ', 'Management', 'Football / Male', '2023-04-24T20:18', '2023-04-20 18:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `score_data`
--

CREATE TABLE `score_data` (
  `score_id` int(11) NOT NULL,
  `match_id` text NOT NULL,
  `team_1` text NOT NULL,
  `team_2` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score_data`
--

INSERT INTO `score_data` (`score_id`, `match_id`, `team_1`, `team_2`, `created_at`) VALUES
(1, '1', '10', '12', '2023-04-20 18:19:18');

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
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `email`, `phone`, `password`, `user_type`, `profile_picture`, `created_at`) VALUES
(1, 'Zaidan Khan', 'khanzaidan786@gmail.com', '+91-7727084370', '$2y$10$9cvQPmA9HGoSxLNLUpNenOWUR3W2JhFufoGAcg3qFVzw2f57AETqi', 'superadmin', '', '2023-03-25 12:32:33'),
(5, 'Aarush Asthana', 'aarush@gmail.com', '1233123123', '$2y$10$xWT50pKuECRXLrkxvjohpeZA6vBNNBcodqcYkxSHGrxTn5XaoICNK', 'superadmin', './demo/profile_picture/I5TA2jUZPf/img_3_sq.jpg', '2023-04-19 15:50:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collage_data`
--
ALTER TABLE `collage_data`
  ADD PRIMARY KEY (`collage_id`);

--
-- Indexes for table `game_data`
--
ALTER TABLE `game_data`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `match_data`
--
ALTER TABLE `match_data`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `score_data`
--
ALTER TABLE `score_data`
  ADD PRIMARY KEY (`score_id`);

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
  MODIFY `collage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game_data`
--
ALTER TABLE `game_data`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `match_data`
--
ALTER TABLE `match_data`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `score_data`
--
ALTER TABLE `score_data`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
