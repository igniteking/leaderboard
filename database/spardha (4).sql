-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 02:43 PM
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
(1, 'DENTAL', 'NIMS DENTAL COLLEGE & HOSPITAL', './demo/collage_logo/JoCWUjrzIm/img 2.png', '2023-04-23 16:51:07'),
(2, 'PHARMACY ', 'NIMS INSTITUTE OF PHARMACY', './demo/collage_logo/jvcizgrN0w/img 4.png', '2023-04-23 16:51:50'),
(3, 'HUMANITIES', 'NIMS SCHOOL OF HUMANITIES AND LIBERAL ART', './demo/collage_logo/kUTQobZYug/img 8.png', '2023-04-23 16:52:44'),
(4, 'MEDICAL', 'NIMS INSTITUE OF MEDICAL SCIENCES & RESEARCH ', './demo/collage_logo/aHpULJMkf6/img 10.png', '2023-04-23 16:54:01'),
(5, 'HOTEL MANAGEMENT ', 'NIMS SCHOOL OF BUSINESS', './demo/collage_logo/iYGfJx4oV7/img 7.png', '2023-04-23 16:55:42'),
(6, 'PARAMEDICAL', 'NIMS COLLEGE OF PARAMEDICAL & TECHNOLOGY', './demo/collage_logo/YrRbBnpzlg/img 1.png', '2023-04-23 16:58:16'),
(7, 'N.I.E.T', 'NIMS INSTITUTE OF ENGINEERING & TECHNOLOGY ', './demo/collage_logo/LF32JGXpPO/img 3.png', '2023-04-23 16:59:20'),
(8, 'PHYSIOTHERAPY', 'NIMS COLLEGE OF PHYSIOTHERAPY ', './demo/collage_logo/wq2V4PvLAM/img 11.png', '2023-04-23 17:00:15'),
(9, 'MANAGEMENT', 'NIMS SCHOOL OF BUSINESS', './demo/collage_logo/0mYh2Sszn4/img 6.png', '2023-04-23 17:00:56'),
(10, 'LAW', 'NIMS SCHOOL OF LAW', './demo/collage_logo/ErjXKHcgVT/img 9.png', '2023-04-23 17:01:22'),
(11, 'NURSING', 'NIMS NURSING COLLEGE ', './demo/collage_logo/YVR8euAmTl/img 5.png', '2023-04-23 17:01:49');

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
(1, 'BASKETBALL', '', 'Male', './demo/game_logo/1hO7Tr6Sl2/img 16.png', '2023-04-23 16:20:15'),
(2, 'BASKETBALL', '', 'Female', './demo/game_logo/ELuDxdcAeR/img 16.png', '2023-04-23 16:20:36'),
(4, 'VOLLEYBALL', '', 'Male', './demo/game_logo/8g3I9uRX6A/img 5.png', '2023-04-23 16:22:38'),
(5, 'VOLLEYBALL', '', 'Female', './demo/game_logo/VpyRiAGrHN/img 5.png', '2023-04-23 16:22:52'),
(6, 'FOOTBALL', '', 'Male', './demo/game_logo/mJ2NQGdLDs/img 9.png', '2023-04-23 16:23:23'),
(7, 'FOOTBALL', '', 'Female', './demo/game_logo/Hu7EGBOfCb/img 9.png', '2023-04-23 16:23:36'),
(8, 'CRICKET', '', 'Male', './demo/game_logo/WIRtVA1QkZ/img 8.png', '2023-04-23 16:24:18'),
(10, 'CRICKET', '', 'Female', './demo/game_logo/6cm7hQsaeE/img 8.png', '2023-04-23 16:25:13'),
(11, 'KABADDI', '', 'Male', './demo/game_logo/k24Qv8qGDS/img 6.png', '2023-04-23 16:25:43'),
(12, 'KABADDI', '', 'Female', './demo/game_logo/gVLMp1KYXT/img 6.png', '2023-04-23 16:25:57'),
(13, 'KHO-KHO', '', 'Male', './demo/game_logo/C4w8R2j3Ym/img 3.png', '2023-04-23 16:26:31'),
(14, 'KHO-KHO', '', 'Female', './demo/game_logo/io64uQNkRq/img 3.png', '2023-04-23 16:26:46'),
(17, 'BADMINTON ', '', 'Male', './demo/game_logo/oVQZblvgjI/img 5.png', '2023-04-23 17:04:11'),
(18, 'BADMINTON', '', 'Female', './demo/game_logo/Ojgk743KFP/img 5.png', '2023-04-23 17:04:30'),
(19, 'BADMINTON ', '', 'Male', './demo/game_logo/ydR3BrzKvt/img 5.png', '2023-04-23 17:04:52'),
(20, 'BADMINTON ', '', 'Female', './demo/game_logo/oivl9EUAjs/img 5.png', '2023-04-23 17:05:13'),
(21, 'BADMINTON ', '', 'mix', './demo/game_logo/T0cQOovHFU/img 5.png', '2023-04-23 17:15:06'),
(22, 'TABLE TENNIS', '', 'Male', './demo/game_logo/jTU4rwgNYb/img 7.png', '2023-04-23 17:17:27'),
(23, 'TABLE TENNIS', '', 'Female', './demo/game_logo/WXPjUHzvET/img 7.png', '2023-04-23 17:17:46'),
(24, 'TABLE TENNIS', '', 'Male', './demo/game_logo/9vPDJIrSHC/img 7.png', '2023-04-23 17:18:00'),
(25, 'TABLE TENNIS', '', 'Female', './demo/game_logo/QKtbvm5VOL/img 7.png', '2023-04-23 17:18:13'),
(26, 'TABLE TENNIS', '', 'mix', './demo/game_logo/fiaRjMpzLN/img 7.png', '2023-04-23 17:18:31'),
(27, 'CHESS', '', 'Male', './demo/game_logo/MxuKEo3S52/img 11.png', '2023-04-23 17:19:11'),
(28, 'CHESS', '', 'Female', './demo/game_logo/t2bv3K1qWi/img 11.png', '2023-04-23 17:19:33'),
(29, 'CARROM', '', 'Male', './demo/game_logo/tucLXj4hoi/img 12.png', '2023-04-23 17:20:43'),
(30, 'CARROM', '', 'Female', './demo/game_logo/MnOPvoDg6R/img 12.png', '2023-04-23 17:21:01'),
(31, 'CARROM', '', 'Male', './demo/game_logo/QzKsAvP6Vm/img 12.png', '2023-04-23 17:21:38'),
(32, 'CARROM', '', 'Female', './demo/game_logo/aL4VBcgZAu/img 12.png', '2023-04-23 17:21:54'),
(33, 'TUG OF WAR ', '', 'Male', './demo/game_logo/Tfz5uXhVOn/img 13.png', '2023-04-23 17:24:41'),
(34, 'TUG OF WAR ', '', 'Female', './demo/game_logo/Jpfn8ExumK/img 13.png', '2023-04-23 17:24:58'),
(35, '100 METER RACE ', '', 'Male', './demo/game_logo/BtTpWvXUau/img 14.png', '2023-04-23 17:30:41'),
(36, '100 METER RACE ', '', 'Female', './demo/game_logo/FCXkJ5Y34O/img 14.png', '2023-04-23 17:30:58'),
(37, '200 METER RACE', '', 'Male', './demo/game_logo/N92Hh0S8ye/img 14.png', '2023-04-23 17:31:38'),
(38, '200 METER RACE', '', 'Female', './demo/game_logo/MDpaQmKnce/img 14.png', '2023-04-23 17:31:59'),
(39, '400 METER RACE', '', 'Male', './demo/game_logo/knA1sgDw3H/img 14.png', '2023-04-23 17:34:38'),
(40, '400 METER RACE', '', 'Female', './demo/game_logo/uBLYOyeVXd/img 14.png', '2023-04-23 17:34:57'),
(41, '100x4 RELAY RACE ', '', 'Male', './demo/game_logo/kwZFP5bLB2/img 14.png', '2023-04-23 17:36:01'),
(42, '100x4 RELAY RACE ', '', 'Female', './demo/game_logo/k2Fz6ubQmi/img 14.png', '2023-04-23 17:36:21'),
(43, 'SHOT PUT', '', 'Male', './demo/game_logo/9x4r1ZfA3o/img 15.png', '2023-04-23 17:38:39'),
(44, 'SHOT PUT', '', 'Female', './demo/game_logo/fRGHQE3YVN/img 15.png', '2023-04-23 17:38:59'),
(46, 'DISCUSS THROW', '', 'Male', './demo/game_logo/2htLZz1qcm/img 1.png', '2023-04-23 17:53:01'),
(47, 'DISCUSS THROW', '', 'Female', './demo/game_logo/dxkh9OyrMZ/img 1.png', '2023-04-23 17:55:47'),
(48, 'JAVELIN THROW', '', 'Male', './demo/game_logo/ScnotXECN0/img 2.png', '2023-04-23 17:56:52'),
(49, 'JAVELIN THROW', '', 'Female', './demo/game_logo/jR5iBlg1Nn/img 2.png', '2023-04-23 17:57:10'),
(50, 'LONG JUMP', '', 'Male', './demo/game_logo/hoCABd9NtL/img 4.png', '2023-04-23 17:57:34'),
(51, 'LONG JUMP', '', 'Female', './demo/game_logo/jbV2rOIsGD/img 4.png', '2023-04-23 17:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `match_data`
--

CREATE TABLE `match_data` (
  `match_id` int(11) NOT NULL,
  `team_1` text NOT NULL,
  `team_2` text NOT NULL,
  `game_type` text NOT NULL,
  `game_status` text NOT NULL,
  `date_time` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_data`
--

INSERT INTO `match_data` (`match_id`, `team_1`, `team_2`, `game_type`, `game_status`, `date_time`, `created_at`) VALUES
(1, 'NIMS INSTITUTE OF ENGINEERING & TECHNOLOGY ', 'NIMS SCHOOL OF BUSINESS', 'FOOTBALL / Male', 'pending', '2023-04-23T21:00', '2023-04-23 18:08:49');

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
(5, 'Aarush Asthana', 'aarush@gmail.com', '1233123123', '$2y$10$xWT50pKuECRXLrkxvjohpeZA6vBNNBcodqcYkxSHGrxTn5XaoICNK', 'superadmin', './demo/profile_picture/I5TA2jUZPf/img_3_sq.jpg', '2023-04-19 15:50:30'),
(7, 'PremTak01', 'premtak2002@gmail.com', '9983073983', '$2y$10$TJ4OvtmgSQfjQcl1zDADIuAYe3q82yFD7acy/4KLx3QA6DEX6twq2', 'admin', './demo/profile_picture/ObzH4Z6wqX/', '2023-04-23 16:08:23');

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
  MODIFY `collage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `game_data`
--
ALTER TABLE `game_data`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `match_data`
--
ALTER TABLE `match_data`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `score_data`
--
ALTER TABLE `score_data`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
