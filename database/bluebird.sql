-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 10:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluebird`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Long', '15122000');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatId` int(11) NOT NULL,
  `CatName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Kid');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `CatId` int(11) NOT NULL,
  `ProductDetails` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Image`, `Price`, `CatId`, `ProductDetails`) VALUES
('1', 'Royal Azure Gown', 'images/royal_azure.jpg', 89.99, 2, 'Fancy Blue gown'),
('2', 'Black T-Shirt', 'images/black_tee.jpg', 39.99, 1, 'Rib finish strips, inverted seams and an adjusted fit. Perfect for a windy summer day.'),
('3', 'Casual Pink Shirt', 'images/pink_casual.jpg', 39.99, 2, 'Casual pink shirt to help with your daily needs. Sometimes simplicity is the best.'),
('4', 'Blue Skinny Jeans', 'images/jeans.jpg', 59.99, 2, 'Blue skinny jeans that goes with almost everything, comes in many sizes.'),
('5', 'Pink Princess Dress', 'images/princess.jpg', 59.99, 3, 'The dream dress of every little girl, transform your daughter into your own little princess, suitable for every important occasion.'),
('6', 'Boys Sailor Outfit', 'images/sailor.jpg', 39.99, 3, 'Quirky sailor outfit for small boys, twice as energetic everyday with bright color clothes!'),
('7', 'Black Kojira Hoodie', 'images/hoodie.jpg', 59.99, 1, 'Black Zipped hoodie branded with stylish KOJIRA for the fashion fan, limited edition.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `foreignkey_product_catid` (`CatId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreignkey_product_catid` FOREIGN KEY (`CatId`) REFERENCES `category` (`CatId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
