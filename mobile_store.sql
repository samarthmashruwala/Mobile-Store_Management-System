-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 12:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_store`
--
CREATE DATABASE IF NOT EXISTS `mobile_store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mobile_store`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(15) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `qty` int(50) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `user_id`, `product_id`, `item_name`, `qty`, `amount`, `item_image`) VALUES
(13, 10, 10, 'redmi note 7', 1, '100.00', 'assets/uploads/10.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(155) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `product_id`, `customer_name`, `customer_email`, `product_name`, `product_price`, `product_qty`, `product_image`) VALUES
(1, 10, 'Shani', 'samarthmashruwala@gmail.com', 'redmi note 7', 100, 1, 'assets/uploads/10.png'),
(2, 10, 'raj', 'raj@gmail.com', 'redmi note 7', 100, 7, 'assets/uploads/10.png'),
(3, 14, 'dipti', 'diptimashruwala@gmail.com', 'iphone 11', 400, 1, 'assets/uploads/i11.png'),
(4, 10, 'samarth', 'samarthmashruwala@gmail.com', 'redmi note 7', 100, 1, 'assets/uploads/10.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `item`, `price`, `item_description`, `product_image`) VALUES
(10, 'redmi note 7', '100.00', 'Redmi note 7 | 4gb ram | 128 internal Strorage | black metal', 'assets/uploads/10.png'),
(11, 'Iphone 12', '550.00', 'iphone 12 | 8 gb ram | 256 internal storage | black', 'assets/uploads/i12.png'),
(14, 'iphone 11', '400.00', 'Iphone 11 | 4 gb ram | 128 internal storage | grey', 'assets/uploads/i11.png'),
(15, 'Samsung s20 ultra', '300.00', 'Samsung s20 ultra | 12 gb ram | 1tb internal storage | navy blue', 'assets/uploads/sam1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `phone_num`, `pincode`, `password`, `is_admin`) VALUES
(1, 'admin', '123', 'admin@gmail.com', '7990469514', 395004, '$2y$10$FVsCNME210iBCDx3D3TpDuqNxOSAP03m30RXm63SjOKz/MY.GmWFG', 1),
(2, 'dipti', 'Mashruwala', 'diptimashruwala@gmail.com', '8780129782', 395004, '$2y$10$uxY3gNzxVh6R/7ZTLonF5uIIGxPCeM43V7A1qd2rMrvpm2EVV0Q8.', 0),
(3, 'samarth', 'Mashruwala', 'samarthmashruwala@gmail.com', '7990469514', 395004, '$2y$10$9YNqUQ8OM2vDFiiziBnOJ.qqooxNeonSVzwRjYoLFLnjiVrioVzVu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
