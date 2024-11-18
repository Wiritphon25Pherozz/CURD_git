-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 04:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_ft`
--

CREATE TABLE `post_ft` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastn` varchar(255) NOT NULL,
  `honm` int(11) NOT NULL,
  `pro` varchar(255) NOT NULL,
  `aum` varchar(255) NOT NULL,
  `tum` varchar(255) NOT NULL,
  `pass` int(11) NOT NULL,
  `phonm` int(11) NOT NULL,
  `date` date NOT NULL,
  `name2` varchar(255) NOT NULL,
  `lastn2` varchar(255) NOT NULL,
  `honm2` int(11) NOT NULL,
  `pro2` varchar(255) NOT NULL,
  `aum2` varchar(255) NOT NULL,
  `tum2` varchar(255) NOT NULL,
  `pass2` int(11) NOT NULL,
  `phonm2` int(11) NOT NULL,
  `date2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post_ft`
--

INSERT INTO `post_ft` (`id`, `name`, `lastn`, `honm`, `pro`, `aum`, `tum`, `pass`, `phonm`, `date`, `name2`, `lastn2`, `honm2`, `pro2`, `aum2`, `tum2`, `pass2`, `phonm2`, `date2`) VALUES
(2, 'pluem', 'noob', 23323, 'พระนครศรีอยุธยา', 'อำเภออมก๋อย', 'ตำบลศรีภูมิ', 70130, 2147483647, '2024-11-30', 'vhjkhkjhk', 'lor', 656565, 'เลย', 'อำเภอแม่ออน', 'ตำบลสันติธรรม', 70130, 54654654, '2024-11-30'),
(3, '', '', 0, '', '', '', 0, 0, '0000-00-00', '', '', 0, '', '', '', 0, 0, '0000-00-00'),
(4, 'wwwwwww', 'wwwwwwww', 1212121212, 'สตูล', 'อำเภอพาน', 'ตำบลแม่ตื่น', 2147483647, 2147483647, '2024-11-30', 'qweqweqweqwe', 'qweqweqweqweqwe', 2147483647, 'น่าน', 'อำเภอลำพูน', 'ตำบลหนองหอย', 2147483647, 2147483647, '2024-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_ft`
--
ALTER TABLE `post_ft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_ft`
--
ALTER TABLE `post_ft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
