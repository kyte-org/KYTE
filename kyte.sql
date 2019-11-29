-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 11:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(1, 'yo back to you', '9918103154', '9918103154', '2019-11-20 21:12:50', 'no', 16),
(6, 'hey', '18104041', '18104057', '2019-11-21 08:18:30', 'no', 31),
(7, 'hi', '18104057', '18104041', '2019-11-21 08:22:32', 'no', 32),
(9, 'who knows!!', '18104057', '9918103143', '2019-11-21 14:25:55', 'no', 33),
(10, 'qwerty', '1234', '9918103238', '2019-11-24 15:22:13', 'no', 35),
(11, 'hi sid', '18104057', '18104067', '2019-11-27 15:02:08', 'no', 45);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(1, '9918103154', 16),
(2, '18104057', 22),
(3, '18104057', 31),
(4, '18104041', 31),
(5, '18104041', 32),
(11, '18104057', 33),
(12, '1234', 38),
(13, '1234', 35),
(14, '18104057', 38),
(16, '18104067', 44),
(17, '18104057', 45);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`) VALUES
(1, 'Hey', '18104057', 'none', '2019-11-15 02:50:14', 'no', 'no', 0, ''),
(6, 'hey', '18104057', 'none', '2019-11-15 03:34:05', 'no', 'no', 0, ''),
(9, 'yes', '18104057', 'none', '2019-11-20 19:17:00', 'no', 'no', 0, ''),
(10, 'how are you', '18104057', 'none', '2019-11-20 19:17:13', 'no', 'no', 0, ''),
(29, 'hello', '18104057', 'none', '2019-11-20 21:47:16', 'no', 'no', 0, ''),
(32, 'Hello everyone', '18104041', 'none', '2019-11-21 08:18:00', 'no', 'no', 2, ''),
(36, 'qwerty', '1234', 'none', '2019-11-24 15:22:24', 'no', 'no', 0, ''),
(37, 'Game of Thrones\r\n', '1234', 'none', '2019-11-27 00:38:54', 'no', 'no', 0, ''),
(38, 'Game of Thrones\r\n', '1234', 'none', '2019-11-27 00:39:08', 'no', 'no', 2, ''),
(44, 'look', '18104057', 'none', '2019-11-27 02:02:10', 'no', 'no', 1, 'assets/images/posts5ddd8bcac2dd8heroimage.jpg'),
(45, 'Awsome blossom', '18104067', 'none', '2019-11-27 14:57:25', 'no', 'no', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(4, 'Atishay', 'Srivastava', 18104057, 'Atishay.srivastava.11@gmail.com', '2f8266acc149f760bf6df5d11f0d45e2', '2019-11-11', 'assets/images/profile_pics/181040570100916aa189ad5be078061bc917faf7n.jpeg', 6, 1, 'no', ','),
(5, 'Hrithik', 'Nigam', 18104059, 'Atishay.srivastava.17@gmail.com', '80a45fee12e4c3e6e953baa8aa7979c1', '2019-11-12', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ','),
(8, 'Kshitij', 'Taneja', 2147483647, 'Khitij.899@gmail.com', 'bed6943824a7087980ec36681d9d529d', '2019-11-15', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ','),
(9, 'Nikhil', 'Kumar', 18104022, 'Nikhil@gmail.com', 'ce35fa81eb584340cf6db1dca438b968', '2019-11-15', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ','),
(11, 'Adarsh', 'Mishra', 99, 'Misharaadarsh.899@gmail.com', '03908e06f4e3d3470f08a52c7d399d9d', '2019-11-15', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ','),
(13, 'Prashant', 'Srivastava', 18104041, 'Prashant@gmail.com', 'a912df5725735943240fdd0cb602648d', '2019-11-21', 'assets/images/profile_pics/defaults/head_deep_blue.png', 1, 2, 'no', ','),
(15, 'Adarshh', 'Mishra', 9918103238, 'Mishr.899@gmail.com', 'f1cd466d3f10655e96fcf5ddb556f93c', '2019-11-21', 'assets/images/profile_pics/defaults/head_emerald.png', 1, 1, 'no', ','),
(16, 'Chunky ', 'Pandey', 1234, 'Qwerty@gmail.com', '58b4e38f66bcdb546380845d6af27187', '2019-11-24', 'assets/images/profile_pics/123442f548404e8ef51d2e0b0a887f7d3641n.jpeg', 3, 2, 'no', ','),
(17, 'Abc', 'Xyz', 18104067, 'Abc@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '2019-11-27', 'assets/images/profile_pics/18104067d1e26849b3ceb10fd321de7d4d741c26n.jpeg', 1, 1, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
