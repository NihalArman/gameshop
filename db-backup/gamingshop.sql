-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 04:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamestore`
--

CREATE TABLE `gamestore` (
  `id` int(11) NOT NULL,
  `gameName` varchar(100) NOT NULL,
  `about` varchar(300) NOT NULL,
  `releaseDate` date NOT NULL,
  `price` float NOT NULL,
  `trailer` varchar(300) NOT NULL,
  `requirements` varchar(300) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamestore`
--

INSERT INTO `gamestore` (`id`, `gameName`, `about`, `releaseDate`, `price`, `trailer`, `requirements`, `image`) VALUES
(18, 'The Elder Scrolls:V Skyrim', 'The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.', '2011-11-11', 39, 'https://www.youtube.com/watch?v=PjqsYzBrP-M', 'CPU: Quad-core Intel or AMD CPU.\r\nOS: Windows 7/Vista/XP PC (32 or 64 bit)\r\nVIDEO CARD: DirectX 9.0c compatible NVIDIA or AMD ATI video card with 1 GB of RAM (NVIDIA GeForce GTX 260 or higher; ATI Radeon HD 4890 or higher)\r\nFREE DISK SPACE: 6 GB.', 'skyrim.jpg'),
(19, 'Counter Strike Global Offensive', 'Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed by Hidden Path Entertainment and Valve Corporation. It is the fourth game in the Counter-Strike series and was released for Microsoft Windows, OS X, Xbox 360, and PlayStation 3 in August 2012', '2012-08-12', 6, 'https://www.youtube.com/watch?v=edYCtaNueQY', 'MINIMUM:\r\nOS: WindowsÂ® 7/Vista/XP\r\nProcessor: IntelÂ® Coreâ„¢ 2 Duo E6600 or AMD Phenomâ„¢ X3 8750 processor or better\r\nMemory: 2 GB RAM\r\nGraphics: Video card must be 256 MB or more and should be a DirectX 9-compatible with support for Pixel Shader 3.0\r\nDirectX: Version 9.0c\r\nStorage: 15 GB availab', 'csgo.jpg'),
(20, 'The Witcher 3: Wild Hunt', 'The Witcher 3: Wild Hunt is a 2015 action role-playing video game developed and published by CD Projekt.', '2015-05-19', 40, 'https://www.youtube.com/watch?v=XHrskkHf958', 'CPU: Intel CPU Core i5-2500K 3.3GHz / AMD CPU Phenom II X4 940.\r\nRAM: 6 GB.\r\nOS: 64-bit Windows 7 or 64-bit Windows 8 (8.1)\r\nVIDEO CARD: Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870.\r\nFREE DISK SPACE: 40 GB.', 'header.jpg'),
(21, 'Grand Theft Auto V', 'Grand Theft Auto V is an action-adventure video game developed by Rockstar North and published by Rockstar Games.', '2013-09-17', 49, 'https://www.youtube.com/watch?v=VjZ5tgjPVfU', 'OS: Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1.\r\nProcessor: Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs)\r\nMemory: 8GB.\r\nVideo Card: NVIDIA GTX 660 2GB / AMD HD7870 2GB.\r\nSound Card: 100% DirectX 10 compatible.\r\nHDD Space: 65GB.\r\nDVD Drive', '0fdedc9e27ff6c18eecb54e75f695c8d.jpg'),
(22, 'Call of Duty: Black Ops III', 'Call of Duty: Black Ops III is a first-person shooter video game, developed by Treyarch and published by Activision. It is the twelfth entry in the Call of Duty series and the sequel to the 2012 video game Call of Duty: Black Ops II.', '2015-11-06', 30, 'https://www.youtube.com/watch?v=PjLk6tKVFB0', 'CPU: Intel Core i3-530 @ 2.93 GHz / AMD Phenom II X4 810 @ 2.60 GHz.\r\nRAM: 6 GB.\r\nOS: Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit.\r\nVIDEO CARD: NVIDIA GeForce GTX 470 @ 1GB / ATI Radeon HD 6970 @ 1GB.', 'header (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `username`, `email`, `password`, `gender`, `dob`, `image`) VALUES
(16, 'nihal', 'arman', 'nihalarman', 'nihal.orbid@gmail.com', '123', 'Male', '1996-06-24', 'nihal.jpg'),
(19, 'test', 'test', 'test', 'test', '123', 'Male', '2018-09-05', 'Vegeta-ssj4-221.png');

-- --------------------------------------------------------

--
-- Table structure for table `userlibrary`
--

CREATE TABLE `userlibrary` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `gameid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlibrary`
--

INSERT INTO `userlibrary` (`id`, `username`, `gameid`, `date`) VALUES
(7, 'nihalarman', 18, '2018-09-02'),
(8, 'nihalarman', 19, '2018-09-02'),
(9, 'nihalarman', 20, '2018-09-02'),
(10, 'nihalarman', 21, '2018-09-02'),
(11, 'nihalarman', 22, '2018-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamestore`
--
ALTER TABLE `gamestore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlibrary`
--
ALTER TABLE `userlibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamestore`
--
ALTER TABLE `gamestore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `userlibrary`
--
ALTER TABLE `userlibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
