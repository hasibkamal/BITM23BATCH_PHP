-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 12:57 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_seip_ecoomerce23_and_24`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `stock_quantity` int(7) NOT NULL,
  `product_sku` varchar(5) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `stock_quantity`, `product_sku`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`) VALUES
(1, 'Samsung Galaxy DUOS', 6, 1, 26000.00, 12, '2', 'WEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product', 'WEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product', '../assets/admin_assets/product_images/PA080545.jpg', 1),
(2, 'T-shirt', 7, 5, 1600.00, 50, '10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. ', '../assets/admin_assets/product_images/indweex.jpg', 1),
(3, 'Fashionable T-Shirt', 7, 5, 1800.00, 50, '5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. ', '../assets/admin_assets/product_images/10176430-origpic-0453e1.jpg', 1),
(4, 'New T-Shirt', 7, 5, 1200.00, 100, '10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. ', '../assets/admin_assets/product_images/imwerages.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
