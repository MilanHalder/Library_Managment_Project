-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libray`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `Name`, `pass`) VALUES
(2, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `Bname` varchar(150) DEFAULT NULL,
  `Aname` varchar(150) DEFAULT NULL,
  `Uimage` varchar(200) DEFAULT NULL,
  `Type` varchar(150) DEFAULT NULL,
  `Des` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Bname`, `Aname`, `Uimage`, `Type`, `Des`) VALUES
(5, 'C Programming', 'Greg Perry', 'IMG-628151607c8f49.26114681.jpg', 'Computer Programming', 'This is a c programming book'),
(6, 'Embedded C Programming', 'Mark Siegesmund', 'IMG-628151c41fab05.99197181.jpg', 'Computer Programming', 'Techniques and application of c and pic mcus'),
(7, 'Let Us C', 'Yashavant Kanetkar', 'IMG-628151fb5b3e06.14810703.jpg', 'Computer Programming', 'This a c programming book'),
(8, 'Data Structures & Algorithms in java', 'Revised Problem sets', 'IMG-62815246419827.10476693.jpg', 'Computer Programming', 'this is a book'),
(9, 'Data Structures ', 'Michael t goodrich', 'IMG-6281528f634844.76856450.jpg', 'Computer Programming', 'this is a algorithm book in pythone'),
(10, 'Java Programming', 'Surbhi kakar', 'IMG-628152be5249c1.57772053.jpg', 'Computer Programming', 'this a java programming book'),
(11, 'Php Cookbook', 'David sklar', 'IMG-628152e5444076.64161426.jpg', 'Computer Programming', 'this is a php book'),
(12, 'Sql cookbook', 'Antbory modinary', 'IMG-6281532160f331.93081197.jpg', 'Computer Programming', 'this is a data base book'),
(13, 'Python book', 'Rakesh K. Yadav', 'IMG-6281535220c135.36563150.jpg', 'Computer Programming', 'this is a pythone book'),
(14, 'Digital Image Processing', 'RAfael c. gonzalez', 'IMG-62815388b61159.70661167.jpg', 'Computer Programming', 'this is a dip book'),
(15, 'Html Book', 'Wendy Willard', 'IMG-628153acc4dca1.93918040.jpg', 'Computer Programming', 'this is a html book'),
(16, 'java script', 'david flanagan', 'IMG-628153ef1e1f53.20810261.jpg', 'Computer Programming', 'Master the world\'s most-used programming language'),
(17, 'Networking Fundamentals', 'Kaveh Pahlavan', 'IMG-6281542521eb79.41506309.jpg', 'Computer Programming', 'this is a networking book'),
(18, 'Comiler Design', 'Reinhard Wilhelm', 'IMG-6281545ad2dcd5.16565306.jpg', 'Computer Programming', 'This is a compiler design book'),
(20, 'Data Structure', 'Sachi nandan mohanty', 'IMG-628154c8e43aa6.56930314.jpg', 'Computer Programming', 'this a another data structure book'),
(21, 'Laravel', 'matt Stauffer', 'IMG-628154efc03453.71376858.jpg', 'Computer Programming', 'this is a laravel book');

-- --------------------------------------------------------

--
-- Table structure for table `booked_item`
--

CREATE TABLE `booked_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_item`
--

INSERT INTO `booked_item` (`id`, `user_id`, `book_id`) VALUES
(21, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `Uname` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `Uname`, `Email`, `pass`) VALUES
(1, 'Milan', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Monish', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'a', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Milan Halder', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Jojo', 'j@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'Souvick', 's@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Milan', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_item`
--
ALTER TABLE `booked_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `booked_item`
--
ALTER TABLE `booked_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_item`
--
ALTER TABLE `booked_item`
  ADD CONSTRAINT `booked_item_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `reg` (`id`),
  ADD CONSTRAINT `booked_item_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
