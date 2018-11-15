-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 12:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`admin_id` int(3) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`) VALUES
(1, 'MD. Mehedi Hasan', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
`category_id` int(3) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Sports', 'Well', 1),
(6, 'Smart Phone', 'well', 1),
(7, 'Man Fashion', 'Well', 1),
(8, 'Woman Fashion', 'well', 1),
(9, 'IT Training', 'Well', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
`manufacturer_id` int(3) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(1, 'Samsung', 'Well', 1),
(2, 'BITM', 'Well', 1),
(3, 'Talha Training', 'Well', 1),
(4, 'Sony', 'Well', 0),
(5, 'Arong', 'Well', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `stock_quantity`, `product_sku`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`) VALUES
(1, 'Samsung Galaxy DUOS', 6, 1, 26000.00, 12, '2', 'WEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product', 'WEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product WEll product, WEll product WEll product WEll product WEll product WEll productWEll product, WEll product WEll product WEll product WEll product WEll product', '../assets/admin_assets/product_images/PA080545.jpg', 1),
(2, 'T-shirt', 7, 5, 1600.00, 50, '10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. ', '../assets/admin_assets/product_images/indweex.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_temp_cart` (
`temp_cart_id` int(11) NOT NULL,
  `session_id` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_temp_cart`
--

INSERT INTO `tbl_temp_cart` (`temp_cart_id`, `session_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(9, 'gruqmg0skfdicrn033i7d32da7', 1, 'Samsung Galaxy DUOS', 26000.00, 2, '../assets/admin_assets/product_images/PA080545.jpg'),
(10, 'gruqmg0skfdicrn033i7d32da7', 2, 'T-shirt', 1600.00, 1, '../assets/admin_assets/product_images/indweex.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
 ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_temp_cart`
--
ALTER TABLE `tbl_temp_cart`
 ADD PRIMARY KEY (`temp_cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
MODIFY `manufacturer_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_temp_cart`
--
ALTER TABLE `tbl_temp_cart`
MODIFY `temp_cart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
