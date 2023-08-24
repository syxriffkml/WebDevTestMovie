-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2023 at 02:33 AM
-- Server version: 8.0.29
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav_movie`
--

CREATE TABLE `fav_movie` (
  `no` int NOT NULL,
  `movie_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fav_movie`
--

INSERT INTO `fav_movie` (`no`, `movie_title`) VALUES
(1, 'The Super Mario Bros. Movie'),
(2, 'River Wild'),
(3, 'Warhorse One'),
(4, 'Ruby Gillman, Teenage Kraken'),
(5, 'Oppenheimer'),
(6, 'Guardians of the Galaxy Vol. 3'),
(7, 'Resident Evil: Death Island'),
(8, 'Hidden Strike'),
(9, 'Soulcatcher'),
(10, 'Shin Kamen Rider'),
(11, 'Meg 2: The Trench'),
(12, 'The Flash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav_movie`
--
ALTER TABLE `fav_movie`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fav_movie`
--
ALTER TABLE `fav_movie`
  MODIFY `no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
