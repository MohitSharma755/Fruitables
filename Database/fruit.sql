-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 10:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(12) NOT NULL,
  `description` mediumtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalprice` int(100) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `productid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `category`, `name`, `description`, `quantity`, `totalprice`, `rate`, `photo`, `productid`) VALUES
(14, 'rand2334', 'FRUIT', 'Apple', 'Grapes grow in clusters, like tiny jewels on a vine.', 4, 0, '60', 'best-product-6.jpg', 24),
(16, 'rand9609', 'FRUIT', 'Raspberries', 'Fresh and organic ', 2, 0, '9.8', 'best-product-2.jpg', 20),
(18, 'rand2507', 'FRUIT', 'Raspberries', 'Fresh and organic ', 1, 0, '4.9', 'best-product-2.jpg', 20),
(20, 'rand5425', 'FRUIT', 'Raspberries', 'Fresh and organic ', 4, 0, '19.6', 'best-product-2.jpg', 20),
(21, 'rand5425', 'Vegetable', 'Patato', 'Sun-kissed and velvety, apricots boast a golden orange hue. Sweet and juicy, they offer a taste', 2, 0, '2', 'vegetable-item-5.jpg', 21),
(23, '9876543210', 'Vegetable', 'Patato', 'Sun-kissed and velvety, apricots boast a golden orange hue. Sweet and juicy, they offer a taste', 2, 2, '1.00', 'vegetable-item-5.jpg', 21),
(26, '9876543210', 'Vegetable', 'Brocoli', 'Natural', 2, 10, '5', 'featur-3.jpg', 22),
(27, '9876543210', 'FRUIT', 'Apple', 'Grapes grow in clusters, like tiny jewels on a vine.', 1, 15, '15', 'best-product-6.jpg', 24),
(28, '9897294141', 'FRUIT', 'Raspberries', 'Fresh and organic ', 10, 49, '4.9', 'best-product-2.jpg', 20),
(29, '9897294141', 'Vegetable', 'Patato', 'Sun-kissed and velvety, apricots boast a golden orange hue. Sweet and juicy, they offer a taste', 7, 7, '1.00', 'vegetable-item-5.jpg', 21),
(30, '9897294141', 'FRUIT', 'Apple', 'Grapes grow in clusters, like tiny jewels on a vine.', 4, 60, '15', 'best-product-6.jpg', 24),
(31, 'rand4935', 'FRUIT', 'Grapes', 'Grapes grow in clusters, like tiny jewels on a vine.', 2, 10, '5', 'best-product-5.jpg', 19),
(32, 'rand4935', 'Vegetable', 'Brocoli', 'Natural', 2, 10, '5', 'featur-3.jpg', 22),
(33, 'rand3623', 'Vegetable', 'Patato', 'Fresh and organic', 0, 0, '1.00', 'vegetable-item-5.jpg', 21),
(34, 'rand3623', 'Vegetable', 'Brocoli', 'Natural', 3, 15, '5', 'featur-3.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(160) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, 'mohit sharma', '7217747900@gmail.com', ''),
(6, 'mohit sharma', 'mohitsharma755k@gmail.com', 'its my message'),
(7, 'mohit sharma', 'mohitsharma755k@gmail.com', 'Second message'),
(8, 'mohit sharma', 'mohitsharma755k@gmail.com', 'hhhh'),
(9, 'rohan', '@gmail.com', 'hey today i visit your web its an amaging.'),
(10, 'mohit sharma', 'mohitsharma755k@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` mediumtext NOT NULL,
  `photo` varchar(100) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `sellermobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `description`, `photo`, `quantity`, `rate`, `sellermobile`) VALUES
(19, 'FRUIT', 'Grapes', 'Fresh and organic', 'best-product-5.jpg', 1000, '5', ''),
(20, 'FRUIT', 'Raspberries', 'Fresh and organic ', 'best-product-2.jpg', 20, '4.9', ''),
(21, 'Vegetable', 'Patato', 'Fresh and organic', 'vegetable-item-5.jpg', 1000, '1.00', ''),
(22, 'Vegetable', 'Brocoli', 'Natural', 'featur-3.jpg', 10, '5', '9897294140'),
(23, 'FRUIT', 'Apple', 'Fresh and organic ', 'best-product-6.jpg', 1000, '1.5.00', '9897294140'),
(24, 'FRUIT', 'Apple', 'Fresh and organic', 'best-product-6.jpg', 100, '15', '9897294141'),
(25, 'Vegetable', 'Patato', 'Fresh and organic ', 'vegetable-item-5.jpg', 10000, '4.9', '9897294141'),
(26, 'FRUIT', 'fruit', 'Fresh and organic ', 'best-product-6.jpg', 200, '4.9', '<br /><b>Warning</b>:  Undefined variable $mobile '),
(27, 'FRUIT', 'Apple', 'Fresh and organic ', 'best-product-6.jpg', 200, '5.00', '8979258138'),
(28, 'Vegetable', 'Meal', 'Good condition', 'download.jpeg', 200, '12', '9876543210'),
(29, 'FRUIT', 'Orange', 'Fresh and organic', 'fruite-item-1.jpg', 10000, '15.00', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(34) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `name`, `email`, `review`) VALUES
(1, '', '', ''),
(2, 'Mohit sharma', '', ''),
(3, 'gaurav ', 'agaurav@gmail.com', 'lkajsdfljsdf'),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, 'first', 'mohitsharma755k@gmail.com', 'ddddd'),
(9, '', '', ''),
(10, 'first', 'mohitsharma755k@gmail.com', 'good review'),
(11, 'first', '7217747900@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(34) NOT NULL,
  `usersession` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `country` varchar(32) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `mobile` bigint(19) NOT NULL,
  `email` varchar(34) NOT NULL,
  `ship` varchar(11) NOT NULL,
  `orders` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercheck`
--

INSERT INTO `usercheck` (`id`, `first`, `last`, `usersession`, `address`, `town`, `country`, `postcode`, `mobile`, `email`, `ship`, `orders`) VALUES
(1, 'mohit', 'sharma', ' rand2334', 'Village - Badhouli District - Meerut  uttar pradesh', 'Meerut', 'India', '245206', 9897294141, 'mohitsharma755k@gmail.com', 'ship', 'correct'),
(2, 'mohit', 'sharma', ' rand6893', 'Village - Badhouli District - Meerut  uttar pradesh', 'Meerut', 'India', '245206', 9897294141, 'mohitsharma755k@gmail.com', 'ship', ''),
(3, ' Gaurav', 'sharma', ' rand5425', 'meerut', 'meerut', 'india', '245206', 38473484905956, 'cmvnfmb;gkkb', 'ship', ''),
(13, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(26, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(27, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(28, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(29, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(30, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(31, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(32, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(33, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(34, ' Mohit', ' Sharma', ' 9897294141', ' Village + Post - Badhouli Meerut', ' Meerut', ' India', ' 245206', 9897294141, ' mohitsharma755k@gmail.com', 'ship', ''),
(35, 'mohit', 'sharma', ' rand4935', 'Village - Badhouli District - Meerut  uttar pradesh', 'Meerut', 'India', '245206', 9897294141, 'mohitsharma755k@gmail.com', 'ship', ''),
(36, ' ', ' ', ' rand4935', ' ', ' ', ' ', ' ', 0, ' ', 'ship', ''),
(37, ' ', ' ', ' rand4935', ' ', ' ', ' ', ' ', 0, ' ', 'ship', ''),
(38, ' ', ' ', ' rand4935', ' ', ' ', ' ', ' ', 0, ' ', 'ship', ''),
(39, ' ', ' ', ' rand4935', ' ', ' ', ' ', ' ', 0, ' ', 'ship', ''),
(40, ' ', ' ', ' rand3623', ' ', ' ', ' ', ' ', 0, ' ', 'ship', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(34) NOT NULL,
  `company` varchar(500) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(32) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `mobilese` bigint(32) NOT NULL,
  `email` varchar(34) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(99) NOT NULL,
  `login_type` varchar(100) NOT NULL,
  `guest_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `first`, `last`, `company`, `address`, `city`, `country`, `zip`, `mobilese`, `email`, `password`, `profile`, `login_type`, `guest_user`) VALUES
(1, 'mohit', 'sharma', 'Quicklive Solution', 'Village - Badhouli District - Meerut  uttar pradesh', 'Meerut', 'India', 245206, 9876543210, 'mohitsharma755k@gmail.com', '111', '', 'seller', NULL),
(2, 'Gaurav', 'sharma', 'Quicklive Solution', 'Village - Badhouli District - Meerut  uttar pradesh', 'Meerut', 'India', 245206, 8979258138, 'mohitsharma755k@gmail.com', '111', '', 'customer', NULL),
(3, 'Gaurav', 'Sharma', 'Technod', 'masdfeaerut', 'asdfs', 'sdfasd', 54656, 7897897890, 'gaurav@gmai.com', '222', '', 'customer', NULL),
(4, 'Mohit', 'Sharma', '', 'Village + Post - Badhouli Meerut', 'Meerut', 'India', 245206, 9897294141, 'mohitsharma755k@gmail.com', '123456', '', 'customer', NULL),
(8, 'mohit', 'sharma', '', 'Village - Badhouli District - Meerut  uttar pradesh', 'Meerut', 'India', 245206, 9897293233, 'mohitsharma755k@gmail.com', '112233', '', 'customer', NULL),
(9, 'Ram', 'tyagi', '', 'aaaaa', 'sssssssss', 'sssssss', 0, 1234567, 'mdndndnsdd', 'msddcnmd', '', 'customer', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercheck`
--
ALTER TABLE `usercheck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
