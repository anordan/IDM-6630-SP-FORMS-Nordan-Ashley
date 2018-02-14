-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2018 at 08:41 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week03`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) NOT NULL,
  `title` varchar(225) NOT NULL,
  `artist` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `cover` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `year`, `cover`) VALUES
(1, 'The Life Aquatic Studio Sessions', 'Seu Jorge', '2005', 'img/seu.jpg'),
(2, 'Chelsea Girl', 'Nico', '1967', 'img/nico.jpg'),
(3, 'Big Sur Festival', 'Various Artists', '1972', 'img/sur.jpg'),
(4, 'Born To Run', 'Bruce \"the Boss\" Springsteen', '1975', 'img/bruce.jpg'),
(5, 'Highway 61 Revisited', 'Bob Dylan', '1965', 'img/dylan.jpg'),
(6, 'Yankee Hotel Foxtrot', 'Wilco', '2002', 'img/wilco.jpg'),
(7, 'God Loves Ugly', 'Atmosphere', '2002', 'img/atmosphere.jpg'),
(9, 'Wildflowers', 'Tom Petty', '1994', 'img/petty.jpg'),
(10, 'None Shall Pass', 'Aesop Rock', '2007', 'img/aesop.jpg'),
(11, 'Appetite For Destruction', 'Guns N\' Roses', '1987', 'img/gnr.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
