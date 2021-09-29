-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 04, 2019 at 10:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`) VALUES
('C1', 'CANON EOS', 39000),
('C2', 'SONY DSLR', 50000),
('C3', 'SONY ULTRAZOOM A900', 40000),
('C4', 'OLYMPUS LUMIX DMC', 60990),
('C5', 'CANON EOS 1500D', 60000),
('C6', 'NIKON IXUS 285H5', 20890),
('C7', 'CANON POWERSHOT SX4', 29000),
('C8', 'SONY ALPHA ILCE-5', 70600),
('C9', 'FUJIFILM X-T20', 50000),
('S1', 'HIGHLANDER', 800),
('S2', 'ROADSTER', 600),
('S3', 'BENE KLEED', 944),
('S4', 'ECKO UNLTD', 560),
('S5', 'LEVIS', 2519),
('S6', 'ETHER', 1238),
('S7', 'DENIM', 2540),
('S8', 'ROADSTER', 2020),
('S9', 'WROGAN', 1769),
('W1', 'US POLO ASSN', 3000),
('W2', 'FOSSIL', 4790),
('W3', 'TIMAX', 2800),
('W4', 'DANIEL KLEIN', 3570),
('W5', 'FASTRACK', 2500),
('W6', 'CASIO', 3160),
('W7', 'TITAN', 2540),
('W8', 'OLMEGA', 3600),
('W9', 'FASTRACK', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` char(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `password`, `contact`, `city`, `address`) VALUES
(16, 'Sarthak', 'sarthakanita77@gmail.com', '12111996', 7505473456, 'Varanasi', 'Newcolony, kakarmatta varanasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
