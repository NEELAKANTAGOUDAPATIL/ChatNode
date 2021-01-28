-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 06:12 AM
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
-- Database: `pchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 3, 'hi', '2021-01-26 05:18:11', 0),
(2, 3, 1, 'hello', '2021-01-26 05:18:40', 0),
(3, 1, 6, 'hi', '2021-01-26 07:54:23', 0),
(4, 6, 3, 'hi', '2021-01-26 08:04:35', 0),
(5, 3, 6, 'hello', '2021-01-26 08:05:21', 1),
(6, 2, 1, 'Hi', '2021-01-26 13:40:23', 0),
(7, 2, 1, 'I am Patil', '2021-01-26 13:42:05', 0),
(8, 1, 2, 'Hello Patil', '2021-01-26 13:48:32', 0),
(9, 1, 2, 'Nice meeting you.', '2021-01-26 14:34:10', 0),
(10, 2, 1, 'Same here', '2021-01-26 14:34:53', 0),
(11, 2, 1, 'Testing', '2021-01-26 14:35:58', 0),
(12, 2, 1, 'Testing once more', '2021-01-26 14:39:21', 0),
(13, 2, 1, 'test now', '2021-01-26 14:40:19', 0),
(14, 2, 1, 'test', '2021-01-26 14:41:10', 0),
(15, 2, 1, 'hello', '2021-01-26 14:41:55', 0),
(16, 1, 2, 'hi', '2021-01-26 14:42:23', 0),
(17, 1, 2, 'now', '2021-01-26 14:46:21', 0),
(18, 1, 2, 'working', '2021-01-26 14:46:28', 0),
(19, 2, 1, 'yes', '2021-01-26 14:47:08', 0),
(20, 1, 2, 'test', '2021-01-26 15:00:28', 0),
(21, 2, 1, 'hi', '2021-01-26 15:00:37', 0),
(22, 3, 1, 'How are you\n', '2021-01-27 06:09:40', 1),
(23, 1, 2, 'Hello', '2021-01-27 06:20:53', 0),
(24, 3, 1, 'Testing', '2021-01-27 06:21:15', 1),
(25, 6, 1, 'Hello', '2021-01-27 06:41:38', 1),
(26, 2, 1, 'test', '2021-01-27 07:00:20', 0),
(27, 3, 1, 'test', '2021-01-27 07:00:38', 1),
(28, 6, 1, 'test', '2021-01-27 07:01:19', 1),
(29, 6, 1, 'test', '2021-01-27 07:05:39', 1),
(30, 2, 1, 'test', '2021-01-27 07:05:55', 0),
(31, 1, 2, 'Working perfectly.', '2021-01-27 19:24:23', 0),
(32, 2, 1, 'Thank you for your ML notes.', '2021-01-28 04:20:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`) VALUES
(1, 'nbpatil'),
(2, 'varun'),
(3, 'lkeerthi'),
(6, 'gani');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2021-01-26 05:24:43', 'no'),
(2, 3, '2021-01-26 05:23:11', 'no'),
(3, 3, '2021-01-26 05:36:07', 'no'),
(4, 3, '2021-01-26 06:33:34', 'no'),
(5, 1, '2021-01-26 14:20:36', 'no'),
(6, 1, '2021-01-26 14:27:12', 'no'),
(7, 1, '2021-01-26 14:59:15', 'no'),
(8, 2, '2021-01-26 19:08:44', 'no'),
(9, 1, '2021-01-26 15:00:51', 'no'),
(10, 1, '2021-01-27 13:26:26', 'no'),
(11, 2, '2021-01-27 06:22:06', 'no'),
(12, 2, '2021-01-27 13:55:00', 'no'),
(13, 2, '2021-01-27 17:42:22', 'no'),
(14, 1, '2021-01-27 19:27:29', 'no'),
(15, 2, '2021-01-27 19:24:31', 'no'),
(16, 2, '2021-01-27 19:36:45', 'no'),
(17, 1, '2021-01-28 04:11:21', 'no'),
(18, 1, '2021-01-28 04:21:40', 'no'),
(19, 2, '2021-01-28 04:27:24', 'no'),
(20, 1, '2021-01-28 05:07:53', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
