-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 10:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aexonjp`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `judul`, `gambar`) VALUES
(1, 'Ame-wo-Tsugeru-Hyouryuu-Danchi', 'Ame-wo-Tsugeru-Hyouryuu-Danchi-640x360.jpg.webp'),
(2, 'Blue-Thermal', 'Blue-Thermal-640x360.jpg.webp'),
(3, 'Bubble', 'Bubble-640x360.jpg.webp'),
(4, 'Jujutsu-Kaisen-0', 'Jujutsu-Kaisen-0-640x360.jpg.webp'),
(5, 'Kiniro-Mosaic-Thank-You', 'Kiniro-Mosaic-Thank-You-640x360.jpg.webp'),
(12, 'Sword-Art-Online-the-Movie-Progressive-Aria-of-a-Starless-Night', '634e4655a32f7.Sword-Art-Online-the-Movie-Progressive-Aria-of-a-Starless-Night-640x360.png.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
