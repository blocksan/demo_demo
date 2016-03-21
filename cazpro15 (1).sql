-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 02:41 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cazpro15`
--
CREATE DATABASE IF NOT EXISTS `cazpro15` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cazpro15`;

-- --------------------------------------------------------

--
-- Table structure for table `added_item`
--

CREATE TABLE IF NOT EXISTS `added_item` (
  `user_id` int(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `quantity` int(255) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `added_item_foreign_key` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `design_table`
--

CREATE TABLE IF NOT EXISTS `design_table` (
  `design_id` int(200) NOT NULL,
  `design_name` varchar(250) NOT NULL,
  `category_id` varchar(200) NOT NULL,
  `design_img1` varchar(250) NOT NULL,
  `design_img2` varchar(250) NOT NULL,
  PRIMARY KEY (`design_id`),
  KEY `design_foreign_key` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for storing designs by category';

--
-- Dumping data for table `design_table`
--

INSERT INTO `design_table` (`design_id`, `design_name`, `category_id`, `design_img1`, `design_img2`) VALUES
(301, 'hulk', 'engcse1', 'hulk.jpg', 'hulk.jpg'),
(302, 'superman', 'engcse1', 'superman.jpg', 'superman.jpg'),
(303, 'roadrash', 'engcse1', 'roadrash.jpg', 'roadrash.jpg'),
(304, 'batman', 'engece1', 'batman.jpg', ''),
(305, 'spider man', 'engece1', 'superman.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `earn_user`
--

CREATE TABLE IF NOT EXISTS `earn_user` (
  `user_id` int(255) NOT NULL,
  `referredbyemail` varchar(100) NOT NULL,
  `referredbycode` varchar(50) NOT NULL DEFAULT '0',
  `referralcode` varchar(30) NOT NULL,
  `referralpoints` int(255) NOT NULL DEFAULT '0',
  `uniquereferral` int(255) NOT NULL DEFAULT '0',
  UNIQUE KEY `referralcode` (`referralcode`),
  KEY `user_id_foreign_key` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemtypes`
--

CREATE TABLE IF NOT EXISTS `itemtypes` (
  `Type_Id` int(255) NOT NULL AUTO_INCREMENT,
  `Type_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Type_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=302 ;

--
-- Dumping data for table `itemtypes`
--

INSERT INTO `itemtypes` (`Type_Id`, `Type_Name`) VALUES
(1, 'tshirt'),
(101, 'full_tshirt'),
(102, 'half_tshirt'),
(201, 'hoodie'),
(301, 'zipper');

-- --------------------------------------------------------

--
-- Table structure for table `landing_page`
--

CREATE TABLE IF NOT EXISTS `landing_page` (
  `offer1` varchar(200) DEFAULT NULL,
  `offer2` varchar(200) DEFAULT NULL,
  `offer3` varchar(200) DEFAULT NULL,
  `offer4` varchar(200) DEFAULT NULL,
  `offer5` varchar(200) DEFAULT NULL,
  `offer6` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` varchar(20) NOT NULL,
  `user_id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `isDeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE IF NOT EXISTS `orders_details` (
  `order_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `payable_price` float NOT NULL,
  `total_discount` float NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` varchar(20) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `payment_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` varchar(20) NOT NULL,
  `product_heading` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `mrp` int(10) NOT NULL,
  `selling_price` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `total_stock` int(10) NOT NULL,
  `stock_s` int(10) NOT NULL,
  `stock_m` int(10) NOT NULL,
  `stock_l` int(10) NOT NULL,
  `stock_xl` int(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `sleeves` varchar(1) NOT NULL,
  `description` text NOT NULL,
  `collared` varchar(1) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `front_pic` varchar(100) NOT NULL,
  `back_pic` varchar(100) NOT NULL,
  `side_pic` varchar(100) NOT NULL,
  `logo_pic` varchar(100) NOT NULL,
  `product_offer` varchar(200) NOT NULL,
  `color_variant_1` varchar(255) DEFAULT NULL,
  `color_variant_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_heading`, `color`, `size`, `mrp`, `selling_price`, `category`, `sub_category`, `total_stock`, `stock_s`, `stock_m`, `stock_l`, `stock_xl`, `gender`, `sleeves`, `description`, `collared`, `type_name`, `material`, `front_pic`, `back_pic`, `side_pic`, `logo_pic`, `product_offer`, `color_variant_1`, `color_variant_2`) VALUES
('10', 'Kapde Nahi', 'Cream', '38', 450, 200, 'engineering', 'cse', 3, 0, 0, 1, 1, 'M', 'N', 'This is Kapde Nahi Soch Badlo T-shirt description.', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', 'UT101_front.jpg', 'UT101_side.jpg', 'UT101_logo.jpg', '', NULL, NULL),
('3', 'NakLi AAdmi', 'Red', '38', 450, 325, 'engineering', 'cse', 6, 2, 1, 3, 0, 'M', 'N', 'This is Nakli Aadmi T-shirt Description.', 'N', 'Round Neck', 'Fabric', 'UT101_front.jpg', 'UT101_front.jpg', 'UT101_front.jpg', 'UT101_front.jpg', '', NULL, NULL),
('4', 'NakLi AAdmi', 'Brown', '38', 400, 350, 'engineering', 'cse', 5, 0, 0, 1, 2, 'M', 'N', 'This is Teri Maa Kaa T-shirt description', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', '', '', '', '', NULL, NULL),
('5', 'Kapde Nahi', 'Cream', '38', 450, 200, 'engineering', 'ece', 3, 0, 0, 1, 1, 'M', 'N', 'This is Kapde Nahi Soch Badlo T-shirt description.', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', '', '', '', '', NULL, NULL),
('6', 'Work Hard', 'green', '38', 675, 350, 'engineering', 'cse', 4, 0, 0, 1, 1, 'M', 'N', 'This polo t-shirt is designed with an all over trendy print with short sleeves & a rib collar with contrast tipping.', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', 'fattu.jpg', 'nakli_admi.jpg', 'teri_maa_kaa.jpg', '', NULL, NULL),
('7', 'Work Hard', 'black', '38', 675, 350, 'engineering', 'ece', 4, 2, 0, 1, 1, 'M', 'N', 'This polo t-shirt is designed with an all over trendy print with short sleeves & a rib collar with contrast tipping.', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', 'fattu.jpg', 'nakli_admi.jpg', 'teri_maa_kaa.jpg', '', NULL, NULL),
('8', 'Work Hard', 'black', '38', 675, 350, 'engineering', 'cse', 4, 2, 0, 1, 1, 'M', 'N', 'This polo t-shirt is designed with an all over trendy print with short sleeves & a rib collar with contrast tipping.', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', 'fattu.jpg', 'nakli_admi.jpg', 'teri_maa_kaa.jpg', '', NULL, NULL),
('9', 'Work Hard', 'black', '38', 675, 350, 'engineering', 'cse', 4, 2, 0, 1, 1, 'M', 'N', 'This polo t-shirt is designed with an all over trendy print with short sleeves & a rib collar with contrast tipping.', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', 'fattu.jpg', 'nakli_admi.jpg', 'teri_maa_kaa.jpg', '', NULL, NULL),
('UT101', 'Work Hard', 'blue', '38', 675, 350, 'engineering', 'cse', 4, 1, 2, 1, 1, 'M', 'N', 'This polo t-shirt is designed with an all over trendy print with short sleeves & a rib collar with contrast tipping.', 'N', 'Round Neck', 'Fabric', 'UT101_front.jpg', 'UT101_back.jpg', 'UT101_side.jpg', 'UT101_logo.jpg', '0', NULL, NULL),
('UT102', 'Fattu T-shirt Round ', 'blue', '38', 650, 350, 'engineering', 'cse', 1, 0, 0, 1, 1, 'M', 'N', 'This is Fattu T-shirt Description', 'N', 'Round Neck', 'Fabric', 'UT101_back.jpg', 'UT101_front.jpg', 'UT101_side.jpg', 'UT101_logo.jpg', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_attr`
--

CREATE TABLE IF NOT EXISTS `product_attr` (
  `Product_Id` int(255) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Stock` int(255) NOT NULL,
  PRIMARY KEY (`Product_Id`,`Color`,`Size`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attr`
--

INSERT INTO `product_attr` (`Product_Id`, `Color`, `Size`, `Stock`) VALUES
(1001, 'Blue', 'M', 25),
(1001, 'Blue', 'XL', 10),
(1002, 'red', 'LL', 10),
(1002, 'red', 'M', 20),
(1002, 'yellow', 'XL', 10),
(1003, 'blue', 'LL', 10),
(1003, 'yellow', 'M', 10),
(1004, 'red', 'LL', 5),
(1005, 'green', 'M', 8),
(1006, 'red', 'M', 5),
(1007, 'white', 'M', 20),
(1008, 'red', 'XL', 5),
(1009, 'red', 'M', 10),
(1010, 'blue', 'M', 11);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `type_id` int(25) NOT NULL,
  `category_id` varchar(40) NOT NULL,
  `main_category` varchar(150) NOT NULL,
  `sub_category` varchar(150) NOT NULL,
  `Material` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `type_foreign_key_cat` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`type_id`, `category_id`, `main_category`, `sub_category`, `Material`, `Description`) VALUES
(1, 'engciv1', 'engineering', 'civil', 'polyster', 'we are the best'),
(1, 'engcse1', 'engineering', 'cse', 'cotton', 'This Tshirt is made up of pure cotton.'),
(1, 'engece1', 'Engineering', 'Ece', 'polyster', 'this tshirt is of high quality'),
(1, 'engmec1', 'engineering', 'mechanical', 'cotton', 'we are the best'),
(1, 'rewcse1', 'rewritable', 'cse', 'cotton', 'we are the best');

-- --------------------------------------------------------

--
-- Table structure for table `product_cost`
--

CREATE TABLE IF NOT EXISTS `product_cost` (
  `category_id` varchar(40) NOT NULL,
  `category_offer` int(100) NOT NULL,
  `category_price` int(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cost`
--

INSERT INTO `product_cost` (`category_id`, `category_offer`, `category_price`) VALUES
('engciv1', 100, 400),
('engcse1', 200, 500),
('engece1', 150, 500),
('engmec1', 200, 700),
('rewcse1', 100, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `product_id` int(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image_front` varchar(200) NOT NULL,
  `image_back` varchar(200) NOT NULL,
  `image_side` varchar(200) NOT NULL,
  `image_logo` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`,`color`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_id`, `color`, `image_front`, `image_back`, `image_side`, `image_logo`) VALUES
(1001, 'blue', '1001front.jpg', '1001back.jpg', '1001side.jpg', '1001logo.jpg'),
(1002, 'red', '1002front.jpg', '1002back.jpg', '1002side.jpg', '1002logo.jpg'),
(1002, 'yellow', '1002front.jpg', '1002back.jpg', '1002side.jpg', '1003logo.jpg'),
(1003, 'blue', '1003front.jpg', '1003back.jpg', '1003side.jpg', '1003logo.jpg'),
(1003, 'yellow', '1003yelfront.jpg', '1003yelback.jpg', '1003yelside.jpg', '1003yellogo.jpg'),
(1004, 'red', '1004front.jpg', '1004back.jpg', '1004side.jpg', '1004logo.jpg'),
(1005, 'green', '1005front.jpg', '1005back.jpg', '1005side.jpg', '1005logo.jpg'),
(1006, 'red', '1006front.jpg', '1006back.jpg', '1006side.jpg', '1006logo.jpg'),
(1007, 'white', '1007front.jpg', '1007back.jpg', '1007side.jpg', '1007logo.jpg'),
(1008, 'red', '1008front.jpg', '1008back.jpg', '1008side.jpg', '1008logo.jpg'),
(1009, 'red', '1009front.jpg', '1009back.jpg', '1009side.jpg', '1009logo.jpg'),
(1010, 'blue', '1010front.jpg', '1010back.jpg', '1010side.jpg', '1010logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `type_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `product_heading` varchar(200) NOT NULL,
  `design_id` int(11) NOT NULL,
  `category_id` varchar(40) NOT NULL,
  `product_design` varchar(200) NOT NULL,
  `product_neck` varchar(100) NOT NULL,
  `product_sleeves` varchar(100) NOT NULL,
  `product_gender` varchar(20) NOT NULL,
  `product_date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_extra_offer` varchar(200) NOT NULL,
  `product_extra_offer_code` varchar(255) NOT NULL,
  `total_visits` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `type_foreign_key` (`type_id`),
  KEY `category_id_foreign_key` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1011 ;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`type_id`, `product_id`, `product_name`, `product_heading`, `design_id`, `category_id`, `product_design`, `product_neck`, `product_sleeves`, `product_gender`, `product_date_added`, `product_extra_offer`, `product_extra_offer_code`, `total_visits`) VALUES
(101, 1001, 'Super Man', 'Fan of Super Man', 301, 'engcse1', 'printed', 'round-neck', 'half', 'M', '2016-01-19 18:09:35', 'GET 10% DISCOUNT', 'GET10', 277),
(101, 1002, 'Batman', 'Batman Begins', 302, 'engcse1', 'plain', 'Polo', 'half', 'Unisex', '2016-02-13 01:06:49', '', '', 64),
(102, 1003, 'spiderman', 'printing spirder man', 302, 'engmec1', 'plain', 'round neck', 'half', 'unisex', '2015-12-16 09:40:20', '', '', 33),
(201, 1004, 'spiderman', 'printing spirder man', 301, 'engcse1', 'plain', 'round neck', 'half', 'unisex', '2015-12-16 10:34:46', '', '', 44),
(301, 1005, 'superman', 'printing super man', 303, 'engece1', 'plain', 'round neck', 'half', 'unisex', '2015-12-16 09:40:36', '', '', 113),
(102, 1006, 'spiderman', 'printing spirder man', 301, 'engcse1', 'plain', 'round neck', 'half', 'unisex', '2016-01-19 18:09:27', '', '', 12),
(101, 1007, 'hulk', 'printing hulk', 302, 'rewcse1', 'plain', 'round neck', 'half', 'unisex', '2015-12-16 09:40:44', '', '', 83),
(201, 1008, 'iron man', 'printing iron man', 302, 'rewcse1', 'plain', 'round neck', 'half', 'unisex', '2015-12-16 10:12:23', '', '', 18),
(301, 1009, 'bomber man', 'printing bomber man', 303, 'engmec1', 'plain', 'round neck', 'half', 'unisex', '2015-12-16 09:40:51', '', '', 15),
(102, 1010, 'iron man', 'printing iron man', 302, 'engcse1', 'plain', 'round neck', 'half', 'unisex', '2015-12-20 19:48:35', '', '', 66);

-- --------------------------------------------------------

--
-- Table structure for table `product_offers`
--

CREATE TABLE IF NOT EXISTS `product_offers` (
  `offer_name` varchar(255) NOT NULL,
  `offer_code` varchar(255) NOT NULL,
  `offer_discount` varchar(255) NOT NULL,
  `offer_valid_to` varchar(255) NOT NULL,
  PRIMARY KEY (`offer_code`),
  KEY `product_foreign_key` (`offer_valid_to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_offers`
--

INSERT INTO `product_offers` (`offer_name`, `offer_code`, `offer_discount`, `offer_valid_to`) VALUES
('get 20% discount', 'GET20', '20%', 'engcse1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(10) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `password` varchar(32) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10003 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `mobile`, `firstname`, `lastname`, `address`, `city`, `state`, `pin`, `gender`, `password`, `registration_date`) VALUES
(10001, '', '8688686', '', '', '', '', '', 76876, '', '', ''),
(10002, 'er.sangeeta87@gmail.com', '9815083888', 'sandeep', 'ghosh', '', '', '', NULL, '', 'd686a53fb86a6c31fa6faa1d9333267e', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_del_info`
--

CREATE TABLE IF NOT EXISTS `user_del_info` (
  `user_id` int(255) NOT NULL DEFAULT '0',
  `mobile` int(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(10) NOT NULL,
  KEY `user_del_foreign_key` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE IF NOT EXISTS `user_wishlist` (
  `user_id` int(255) NOT NULL,
  `product_id` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`product_id`),
  KEY `user_wishlist_foreign_key` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`user_id`, `product_id`) VALUES
(10001, ''),
(10001, '1002');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `added_item`
--
ALTER TABLE `added_item`
  ADD CONSTRAINT `added_item_foreign_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `design_table`
--
ALTER TABLE `design_table`
  ADD CONSTRAINT `design_foreign_key` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`);

--
-- Constraints for table `earn_user`
--
ALTER TABLE `earn_user`
  ADD CONSTRAINT `user_id_foreign_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `type_foreign_key_cat` FOREIGN KEY (`type_id`) REFERENCES `itemtypes` (`Type_Id`);

--
-- Constraints for table `product_cost`
--
ALTER TABLE `product_cost`
  ADD CONSTRAINT `fk` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_attr` (`Product_Id`);

--
-- Constraints for table `product_info`
--
ALTER TABLE `product_info`
  ADD CONSTRAINT `category_id_foreign_key` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`),
  ADD CONSTRAINT `product_info_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `itemtypes` (`Type_Id`);

--
-- Constraints for table `product_offers`
--
ALTER TABLE `product_offers`
  ADD CONSTRAINT `product_foreign_key` FOREIGN KEY (`offer_valid_to`) REFERENCES `product_category` (`category_id`);

--
-- Constraints for table `user_del_info`
--
ALTER TABLE `user_del_info`
  ADD CONSTRAINT `user_del_foreign_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD CONSTRAINT `user_wishlist_foreign_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
