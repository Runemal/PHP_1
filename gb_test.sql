-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2020 at 07:28 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gb_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id_good` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `info` text NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imgBig` varchar(50) DEFAULT NULL,
  `imgSmall` varchar(50) DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id_good`, `title`, `price`, `info`, `date_create`, `imgBig`, `imgSmall`, `count`) VALUES
(1, '5L_Green', 1000, 'В отличном состоянии. В наличии.', '2020-12-07 17:39:42', 'images/5l_green.jpg', 'images/small/5l_green.jpg', 3),
(2, 'Carob', 1200, 'В отличном состоянии. В наличии.', '2020-12-07 17:39:52', 'images/carob.jpg', 'images/small/carob.jpg', 5),
(3, 'Vios', 1100, 'By sell', '2020-12-07 17:41:25', 'images/vios.jpg', 'images/small/vios.jpg', 2),
(4, 'Avocado', 900, 'By sell', '2020-12-07 17:41:25', 'images/avokado.png', 'images/small/avokado.png', 1),
(5, 'HLWN', 1100, 'By sell', '2020-12-07 17:41:28', 'images/hlwn.jpg', 'images/small/hlwn.jpg', 2),
(11, 'start.jpg', 1000, '', '2020-12-10 07:16:22', 'images/start.jpg', 'images/small/start.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_good`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id_good` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
