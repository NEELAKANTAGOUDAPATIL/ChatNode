-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 06:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatnode`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(1, '2', '1', 'NB Patil', 'Hi, This is for testing.', 'uploads/profile/NEELAKANTAGOUDAPATIL.png', '1607532805'),
(2, '1', '2', 'Varun Patil', 'Hello', 'uploads/profile/logo-dark.svg', '1607532815'),
(3, '6', '1', 'Neelakanta Gouda Patil', 'Thank full its working.', 'uploads/profile/NEELAKANTAGOUDAPATIL.png', '1610879091'),
(4, '9', '1', 'Neelakanta Gouda Patil', 'Helpful', 'uploads/profile/NEELAKANTAGOUDAPATIL.png', '1611807492');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) DEFAULT NULL,
  `doc_file` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `doc_file`, `content`, `created`) VALUES
(1, '1', 'uploads/pic/map.jpg', NULL, 'Hello World!', '1607532529'),
(2, '2', 'uploads/pic/BigData-thumbnail.png', NULL, 'Big Data', '1607532893'),
(3, '1', 'uploads/pic/Mood board1.jpg', NULL, 'Testing the new changes!', '1609753428'),
(4, '1', 'uploads/pic/dbf5b23592c4347741d6b756c60d6347.jpg', NULL, 'Working good', '1609753698'),
(5, '1', 'uploads/pic/badge.png', NULL, 'Checking the updates', '1610862735'),
(6, '1', 'uploads/pic/black lion live wallpaper HD Photo Wallpaper Collection HD WALLPAPERS.jpg', NULL, 'Checking once again after the changes that I have made!', '1610878991'),
(9, '2', 'uploads/pic/ML-thumbnail.jpg', 'uploads/doc/ML.pdf', 'Machine Learning', '1611765284'),
(10, '1', 'uploads/pic/python1-thumbnail.png', 'uploads/doc/Python Tutorial.pdf', 'Python Tutorial', '1611808026');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(100) NOT NULL,
  `from_id` int(100) NOT NULL,
  `to_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `timestamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `from_id`, `to_id`, `post_id`, `timestamp`) VALUES
(1, 1, 2, 9, '2021-01-28 00:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `credits` int(100) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `birthday`, `gender`, `number`, `email`, `password`, `profile_picture`, `credits`) VALUES
(1, 'Neelakanta Gouda', 'Patil', 'nbpatil', '1999-11-01', 'Male', '6365254140', 'patil@example.com', 'b813a1b1181d720d0fbad61a0ac27ed9', 'uploads/profile/NEELAKANTAGOUDAPATIL.png', 9),
(2, 'Varun', 'Patil', 'varun', '2012-06-20', 'Male', '6365254141', 'varun@example.com', '7d5a71f538ad2d041eccf37b2d5b3772', 'uploads/profile/logo-dark.svg', 11),
(3, 'KEERTHI', 'M R', 'lkeerthi', '1998-09-14', 'Male', '9066421048', 'keerthikitty1998@gmail.com', '9f7c6177c5e664e6a9122a9c1c8108cc', 'uploads/profile/DSC03559.JPG', 10),
(6, 'Ganesh', 'v', 'gani', '1999-10-12', 'Male', '9066421648', 'something@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'uploads/profile/user.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
