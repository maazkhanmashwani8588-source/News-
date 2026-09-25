-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 08:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(42, 'motor car', 0),
(38, 'politics', 1),
(39, 'sports', 2),
(41, 'HEALTH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(38, 'i am absar hassan', '                     heloo  how are  you gays   i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster .             \r\n				                  \r\n				                  \r\n				  ', '41', '27,Jan,2024', 0, 'IMG-20230509-WA0059.jpg'),
(37, 'hello', '          hello gays i hope you be fine lets introduce  wedding cermony mister absar hassan thank you so much those people who attend my wedding cermoy.        \r\n				  ', '39', '27,Jan,2024', 0, 'IMG-20230509-WA0016.jpg'),
(39, 'weeding picture', '                  hello gays i hope you be fine lets introduce  wedding cermony mister absar hassan thank you so much those people who attend my weddind cermoy.                \r\n				  ', '38', '29,Jan,2024', 0, 'IMG-20230509-WA0029.jpg'),
(45, 'college', 'heloo how are you gays i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster heloo how are you gays i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster .', '38', '04,Feb,2024', 0, 'IMG-20230509-WA0058.jpg'),
(41, 'besties', '                                                      hello gays i hope you be fine lets introduce  wedding cermony mister absar hassan thank you so much those people who attend my weddind cermoy.                \r\n				                  \r\n				                  \r\n				  ', '38', '29,Jan,2024', 0, 'IMG-20230528-WA0002.jpg'),
(42, 'enjoy with friend', '                  hello gays i hope you be fine lets introduce  wedding cermony mister absar hassan thank you so much those people who attend my weddind cermoy.                \r\n				  ', '41', '29,Jan,2024', 0, 'IMG-20230509-WA0025.jpg'),
(43, 'health', 'djshdiaywquewekjdhsakd', '41', '04,Feb,2024', 0, 'IMG-20230509-WA0009.jpg'),
(44, 'office.', '             heloo how are you gays i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster heloo how are you gays i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster .\r\n\r\n   \r\n				  ', '41', '04,Feb,2024', 0, 'IMG-20230509-WA0003.jpg'),
(46, 'sports', 'heloo how are you gays i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster heloo how are you gays i hope you will fine i induce my self i am absar hassan i come kpk dir lower teshil timeraghara villege saddo i am a student of BS chimistry university of malankand i read 7th semeaster .', '39', '04,Feb,2024', 0, 'IMG-20230528-WA0034.jpg'),
(47, 'hello', 'how are you', '39', '14,Apr,2024', 0, 'IMG-20230509-WA0007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `websitename` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `footerdesc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`websitename`, `logo`, `footerdesc`) VALUES
('abc', 'news.jpg', '                                this is new footer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(27, 'amir ', 'ayyub', 'amir', '', 1),
(29, 'khan', 'wali', 'khan', '', 1),
(30, 'atif', 'khan', 'atif', '', 1),
(31, 'waqas', 'khan', 'waqas', '', 0),
(48, 'absar', 'hassan', 'absar', '12345', 1),
(44, 'jalal', 'khan', 'jalal', '', 1),
(45, 'anwar', 'khan', 'anwar', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
