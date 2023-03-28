-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 07:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_vlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_lname` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `a_fname`, `a_lname`, `a_email`, `a_pass`) VALUES
(0, 'Rohan', 'Chakraborty', 'rohan@gmail.com', 'rohan123'),
(1, 'Tathagata', 'Mallik', 'tatha@gmail.com', 'tatha123');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `vlogger_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summery` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL,
  `fname` varchar(255) NOT NULL,
  `p_like` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `vlogger_id`, `title`, `summery`, `content`, `published_at`, `created_at`, `updated_at`, `img_path`, `status`, `fname`, `p_like`) VALUES
(17, 10, 'my first post of cricket', 'For decades, cricket has been considered the gentleman’s game. Fine pitch, critical bouncers, twist and turns, sweeps and lofts and running shoes all around.', 'For decades, cricket has been considered the gentleman’s game. Fine pitch, critical bouncers, twist and turns, sweeps and lofts and running shoes all around. A game of elite class as well as exciting spirit with a billion strong fan-base worldwide. Today, we have a chance to take you across a terrain of cricket quotes. Through these inspirational quotes by cricketers, we shall wander in the dimension of cricketing memories. Such inspirational cricket quotes will not only leave you mesmerized but propel you to make life-changing decisions. Many authors and poets have given their quotes on cricket. The revolutionary transformation that has led the sport to this day shall be recounted in the following quotes by cricketers, who have lived a life of excellence. You can use these Cricket quotes for Instagram stories and captions as well.', '21/09/07', '2021/09/07', '', 'uploaded_files/8830902_dbms2.jpg', 'Pending', 're.jpg', 0),
(20, 2, 'This is a notice to inform you that all Player Packs will no longer be purchasable in the SHOP starting on 30/09/2021 01:59 (UTC).', 'done', 'Complete each challenge in this event to earn a “Gold Ball+“ Special Agent as a first-time reward! Each challenge can be completed by earning a set number of points, regardless of whether you win or lose. Stick it out till the very end to earn as many rewards as possible!', '21/09/08', '2021/09/08', '', 'uploaded_files/6920270_cecilia-orozco-impostor-runs-thumbnail2.jpg', 'Approved', '15071399987096.jpg', 0),
(21, 14, 'this is my 3rd post', 'jgkdfh;fh', 'dbmhb', '23/03/05', '2023/03/05', '', 'uploaded_files/835035_123.jpeg', 'Approved', 'WhatsApp Image 2022-05-29 at 3.30.25 PM.jpeg', 2),
(22, 14, 'this is my 2nd post', 'abc dvrmjrghlkj;flkbjldf', 'smfgjhklr', '', '23/03/05', '', 'uploaded_files/4326918_WhatsApp Image 2022-05-29 at 3.30.25 PM.jpeg', 'Pending', 'WhatsApp Image 2022-05-29 at 3.30.25 PM.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vlogger`
--

CREATE TABLE `vlogger` (
  `vlogger_id` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `intro` varchar(600) NOT NULL,
  `profile` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vlogger`
--

INSERT INTO `vlogger` (`vlogger_id`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `password`, `intro`, `profile`) VALUES
(2, 'tatha o ', 'mm  ', 'vai  ', 0, 'ss@gmail.com', '123456  ', '>', ''),
(3, 'e56y jskljwe,.jneh', 'byrtb un46 u3t', 'rt hu35726hb6', 2147483647, 'tgt@gmail.com', 'balll', 'yjwye3ryo834r', ''),
(4, 'Rohan', '', 'chakraborty', 2147483647, 'munn2@gmail.com', 'torbabarki', 'i am a lover of puchu', 'Photo_1622794312510.jpg'),
(5, 'tathagata', 'munna', '678', 123321133, '123@gmail.com', 'fgvfe g4fg', 'ear ', ''),
(6, 'tata', '', 'jf', 1234567890, '132@gmail.com', '123456', 'rfyuhg', ''),
(7, 'rohan', 'munna', 'munni', 1234567812, 'munnawedsmunni@gmail.com', '123456', 'hi im, munna', ''),
(8, 'tatta', 'munna', 'munni', 1234567891, 'munna123@gmail.com', '123456', 'ghre', ''),
(9, 'ok', '', 'das', 1234567890, 'ok@gmail.com', '123456', 'ok', ''),
(10, 'kasoul', '', 'das', 12345678, 'kasoul@gmail.com', '123456', 'ok', ''),
(11, 'Tathagata ', '', 'Mallik', 1234567890, 'darksoul@gmail.com', '123456', 'i am a student of cse dept', 'me.jpg'),
(12, 'tette', 'etett', 'etewt', 123, '1@test1.com', '123', 'df', 'profile_picture/4453132_Screenshot_20221105_153531.png'),
(13, 'youtube', 'dsfs', 'sf', 23, '123@rt.com', '123', 'df', 'profile_picture/2468845_Screenshot_20221022_030436.png'),
(14, 'ghhdbn', 'ddgd', 'gdg', 1234, '1234@gmail.com', '123456', 'htb', 'profile_picture/7798206_Screenshot_20221022_025955.png'),
(15, 'vxv', '', 'vx', 453, '1223@gmail.com', '1223', 'df', 'profile_picture/9396207_123.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `vlogger`
--
ALTER TABLE `vlogger`
  ADD PRIMARY KEY (`vlogger_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vlogger`
--
ALTER TABLE `vlogger`
  MODIFY `vlogger_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
