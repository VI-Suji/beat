-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 04:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `myteam`
--

CREATE TABLE `myteam` (
  `id` int(11) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `p6` varchar(50) NOT NULL,
  `p7` varchar(50) NOT NULL,
  `p8` varchar(50) NOT NULL,
  `p9` varchar(50) NOT NULL,
  `p10` varchar(50) NOT NULL,
  `p11` varchar(50) NOT NULL,
  `tscore` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myteam`
--

INSERT INTO `myteam` (`id`, `useremail`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `tscore`) VALUES
(1, '0', 'dhoni', 'ABD', 'sanju', 'kohli', 'gale', 'smith', 'stokes', 'hardik', 'jadeja', 'chahal', 'morris', '0'),
(2, 'test', 'dhoni', 'ABD', 'sanju', 'kohli', 'gale', 'smith', 'stokes', 'hardik', 'jadeja', 'chahal', 'morris', '0'),
(3, 'test', 'dhoni', 'ABD', 'sanju', 'kohli', 'gale', 'smith', 'stokes', 'hardik', 'jadeja', 'chahal', 'morris', '0'),
(4, 'test', 'AB de Villiers', 'Parthiv Patel', 'Josh Philippe', 'Rishabh Pant', 'Virat Kohli', 'Devdutt Padikkal', 'Gurkeerat Mann Singh', 'Aaron Finch', 'Chris Morris', 'Axar Patel', 'Keemo Paul', '0'),
(5, 'test', 'AB de Villiers', 'Parthiv Patel', 'Josh Philippe', 'Rishabh Pant', 'Virat Kohli', 'Devdutt Padikkal', 'Gurkeerat Mann Singh', 'Aaron Finch', 'Moeen Ali', 'Pawan Negi', 'Shivam Dube', '0'),
(6, 'test', 'AB de Villiers', 'Parthiv Patel', 'Virat Kohli', 'Devdutt Padikkal', 'Moeen Ali', 'Pawan Negi', 'Navdeep Saini', 'Umesh Yadav', 'Alex Carey', 'Shreyas Iyer', 'Axar Patel', '0'),
(7, '180112@tkmce.ac.in', 'AB de Villiers', 'Parthiv Patel', 'Josh Philippe', 'Virat Kohli', 'Devdutt Padikkal', 'Moeen Ali', 'Pawan Negi', 'Axar Patel', 'Mohammed Siraj', 'Navdeep Saini', 'Shahbaz Ahmed', '0');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img` varchar(25) NOT NULL,
  `skill` varchar(25) NOT NULL,
  `credit` varchar(5) NOT NULL,
  `team` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `img`, `skill`, `credit`, `team`) VALUES
(4, 'Virat Kohli', 'RCB', 'bat', '9', 'RCB'),
(5, 'AB de Villiers', 'RCB', 'wk', '9', 'RCB'),
(6, 'Devdutt Padikkal', 'RCB', 'bat', '8.5', 'RCB'),
(7, 'Gurkeerat Mann Singh', 'RCB', 'bat', '8', 'RCB'),
(8, 'Moeen Ali', 'RCB', 'ar', '8', 'RCB'),
(9, 'Mohammed Siraj', 'RCB', 'bowl', '8', 'RCB'),
(10, 'Navdeep Saini', 'RCB', 'bowl', '8.5', 'RCB'),
(11, 'Parthiv Patel', 'RCB', 'wk', '8', 'RCB'),
(12, 'Pawan Negi', 'RCB', 'ar', '8', 'RCB'),
(13, 'Shivam Dube', 'RCB', 'ar', '8', 'RCB'),
(14, 'Umesh Yadav', 'RCB', 'bowl', '8', 'RCB'),
(15, 'Washington Sundar', 'RCB', 'ar', '8.5', 'RCB'),
(16, 'Yuzvendra Chahal', 'RCB', 'bowl', '8.5', 'RCB'),
(17, 'Aaron Finch', 'RCB', 'bat', '8.5', 'RCB'),
(18, 'Chris Morris', 'RCB', 'ar', '8.5', 'RCB'),
(19, 'Josh Philippe', 'RCB', 'wk', '8', 'RCB'),
(20, 'Pavan Deshpande', 'RCB', 'bat', '8', 'RCB'),
(21, 'Dale Steyn', 'RCB', 'bowl', '8.5', 'RCB'),
(22, 'Shahbaz Ahmed', 'RCB', 'bowl', '8.5', 'RCB'),
(23, 'Isuru Udana', 'RCB', 'bowl', '8', 'RCB'),
(24, 'Adam Zampa', 'RCB', 'bowl', '8', 'RCB'),
(25, 'Shreyas Iyer', 'DC', 'bat', '8.5', 'DC'),
(26, 'Ajinkya Rahane', 'DC', 'bat', '8.5', 'DC'),
(27, 'Amit Mishra', 'DC', 'bowl', '8.5', 'DC'),
(28, 'Avesh Khan', 'DC', 'bowl', '8', 'DC'),
(29, 'Axar Patel', 'DC', 'ar', '8', 'DC'),
(30, 'Harshal Patel', 'DC', 'bowl', '8', 'DC'),
(31, 'Ishant Sharma', 'DC', 'bowl', '8', 'DC'),
(32, 'Kagiso Rabada', 'DC', 'bowl', '9', 'DC'),
(33, 'Keemo Paul', 'DC', 'ar', '8', 'DC'),
(34, 'Prithvi Shaw', 'DC', 'bat', '8.5', 'DC'),
(35, 'Ravichandran Ashwin', 'DC', 'bowl', '8.5', 'DC'),
(36, 'Rishabh Pant', 'DC', 'wk', '9', 'DC'),
(37, 'Sandeep Lamichhane', 'DC', 'bowl', '8.5', 'DC'),
(38, 'Shikhar Dhawan', 'DC', 'bat', '8.5', 'DC'),
(39, 'Alex Carey', 'DC', 'wk', '8', 'DC'),
(40, 'Shimron Hetmyer', 'DC', 'bat', '8.5', 'DC'),
(41, 'Mohit Sharma', 'DC', 'bowl', '8', 'DC'),
(42, 'Tushar Deshpande', 'DC', 'bowl', '8', 'DC'),
(43, 'Marcus Stonis', 'DC', 'ar', '8', 'DC'),
(44, 'Lalith Yadav', 'DC', 'ar', '8', 'DC'),
(45, 'Anrich Nortje', 'DC', 'bowl', '8', 'DC'),
(46, 'Daniel Sams', 'DC', 'ar', '8', 'DC'),
(47, 'Pravin Dubey', 'DC', 'bowl', '8', 'DC');

-- --------------------------------------------------------

--
-- Table structure for table `toppers`
--

CREATE TABLE `toppers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `pos` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toppers`
--

INSERT INTO `toppers` (`id`, `name`, `img`, `pos`, `score`) VALUES
(1, 'SUJITH', 'img', 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `useremail`, `password`) VALUES
(1, '180112@tkmce.ac.in', 'Sujith'),
(2, '180639@tkmce.ac.in', '180639@tkmce.ac.in'),
(3, '180909@tkmce.ac.in', '180909@tkmce.ac.in'),
(4, '190978@tkmce.ac.in', '190978@tkmce.ac.in'),
(5, '190465@tkmce.ac.in', '190465@tkmce.ac.in'),
(6, '190041@tkmce.ac.in', '190041@tkmce.ac.in'),
(7, '190878@tkmce.ac.in', '190878@tkmce.ac.in'),
(8, '190793@tkmce.ac.in', '190793@tkmce.ac.in'),
(9, '190126@tkmce.ac.in', '190126@tkmce.ac.in'),
(10, '180785@tkmce.ac.in', '180785@tkmce.ac.in'),
(11, '190976@tkmce.ac.in', '190976@tkmce.ac.in'),
(12, '190546@tkmce.ac.in', '190546@tkmce.ac.in'),
(13, '181013@tkmce.ac.in', '181013@tkmce.ac.in'),
(14, '190261@tkmce.ac.in', '190261@tkmce.ac.in'),
(15, '190824@tkmce.ac.in', '190824@tkmce.ac.in'),
(16, '180398@tkmce.ac.in', '180398@tkmce.ac.in'),
(17, '190444@tkmce.ac.in', '190444@tkmce.ac.in'),
(18, '180883@tkmce.ac.in', '180883@tkmce.ac.in'),
(19, '190954@tkmce.ac.in', '190954@tkmce.ac.in'),
(20, '190877@tkmce.ac.in', '190877@tkmce.ac.in'),
(21, '190851@tkmce.ac.in', '190851@tkmce.ac.in'),
(22, '190907@tkmce.ac.in', '190907@tkmce.ac.in'),
(23, '181003@tkmce.ac.in', '181003@tkmce.ac.in'),
(24, '180471@tkmce.ac.in', '180471@tkmce.ac.in'),
(25, '190048@tkmce.ac.in', '190048@tkmce.ac.in'),
(26, '190386@tkmce.ac.in', '190386@tkmce.ac.in'),
(27, '170946@tkmce.ac.in', '170946@tkmce.ac.in'),
(28, '180026@tkmce.ac.in', '180026@tkmce.ac.in'),
(29, '190609@tkmce.ac.in', '190609@tkmce.ac.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myteam`
--
ALTER TABLE `myteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppers`
--
ALTER TABLE `toppers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myteam`
--
ALTER TABLE `myteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `toppers`
--
ALTER TABLE `toppers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
