-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2019 at 08:06 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keyua_test`
--
CREATE DATABASE IF NOT EXISTS `keyua_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `keyua_test`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Electronics'),
(2, 'Computers'),
(3, 'Video'),
(4, 'Photo'),
(5, 'Audio'),
(6, 'Computer accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `subcategory_id`) VALUES
(1, 'Sharp 14EM3G', 1, 1),
(2, 'Philips 232EL', 1, 2),
(3, 'Lenovo IdeaPad 320-14IAP (80XQ007ARA) Onyx Black', 2, 3),
(4, 'Lenovo IdeaPad 320-14IAP (80XQ007ARA) Onyx Black', 2, 3),
(5, 'Asus X543UB-DM973 Silver Gradient', 2, 3),
(6, 'Asus X543UB-DM973 Silver Gradient', 2, 3),
(7, 'HP 15-ra047ur (3QT61EA) Jet Black', 2, 3),
(8, 'HP 15-ra047ur (3QT61EA) Jet Black', 2, 3),
(9, 'HP 15-ra047ur (3QT61EA) Jet Black', 2, 3),
(10, 'Samsung Galaxy Tab A 10.1\' 32GB LTE Black (SM-T515NZKDSEK)', 2, 4),
(11, 'Samsung Galaxy Tab A 10.1\' 32GB LTE Black (SM-T515NZKDSEK)', 2, 4),
(12, 'Samsung Galaxy Tab A 10.1\' LTE Black (SM-T585NZKASEK)', 2, 4),
(13, 'Samsung Galaxy Tab A 10.1\' LTE Black (SM-T585NZKASEK)', 2, 4),
(14, 'Lenovo Tab4 10 X304L 32Gb LTE (ZA2K0119UA) Slate Black', 2, 4),
(15, 'Lenovo Tab4 10 X304L 32Gb LTE (ZA2K0119UA) Slate Black', 2, 4),
(16, 'Huawei MediaPad T3 10\' 16GB LTE (AGS-L09) Gold', 2, 4),
(17, 'Huawei MediaPad T3 10\' 16GB LTE (AGS-L09) Gold', 2, 4),
(18, 'Huawei MediaPad T3 10\' 16GB LTE (AGS-L09) Gold', 2, 4),
(19, 'ASUS Transformer Book T100', 2, 5),
(20, 'ASUS Transformer Book T100', 2, 5),
(21, 'Lenovo Miix 10', 2, 5),
(22, 'Lenovo Miix 10', 2, 5),
(23, 'Lenovo Miix 10', 2, 5),
(24, 'Apple iPad Wi-Fi 32GB MR7F2RK/A Space Grey', 2, 6),
(25, 'Apple iPad Wi-Fi 32GB MR7F2RK/A Space Grey', 2, 6),
(26, 'Apple iPad Wi-Fi 32GB MR7F2RK/A Space Grey', 2, 6),
(27, 'ETE HB-A4300-810.G730-CR', 2, 7),
(28, 'ETE HB-A4300-810.G730-CR', 2, 7),
(29, 'IMPRESSION Game I2418', 2, 7),
(30, 'IMPRESSION Game I2418', 2, 7),
(31, 'Asus V200IBUK-BC006M', 2, 7),
(32, 'Asus V200IBUK-BC006M', 2, 7),
(33, 'Asus V200IBUK-BC006M', 2, 7),
(34, 'Globex GE-112', 3, 8),
(35, 'Globex GE-112', 3, 8),
(36, 'Aspiring AT220 WI-FI', 3, 8),
(37, 'Aspiring AT220 WI-FI', 3, 8),
(38, 'Aspiring AT220 WI-FI', 3, 8),
(39, 'GoPro HERO 7 Black (CHDHX-701-RW)', 3, 9),
(40, 'GoPro HERO 7 Black (CHDHX-701-RW)', 3, 9),
(41, 'GoPro HERO 7 Black (CHDHX-701-RW)', 3, 9),
(42, 'Canon IXUS 70', 4, 10),
(43, 'Nikon Coolpix B500 Black (VNA951E1)', 4, 11),
(44, 'Nikon Coolpix B500 Black (VNA951E1)', 4, 11),
(45, 'Apple iPod shuffle 2GB MKM72RP/A Pink', 5, 12),
(46, 'Apple iPod shuffle 2GB MKM72RP/A Pink', 5, 12),
(47, 'Astro M3 Black', 5, 12),
(48, 'Astro M3 Black', 5, 12),
(49, 'Astro M3 Black', 5, 12),
(50, 'OLYMPUS WS-852', 5, 13),
(51, 'OLYMPUS WS-852', 5, 13),
(52, 'OLYMPUS WS-852', 5, 13),
(53, 'InnoVision GeForce GTE560', 6, 14),
(54, 'Western Digital 500 GB( WD5000AAKX )', 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `product_category_id`) VALUES
(1, 'TV', 1),
(2, 'Monitors', 1),
(3, 'Notebook', 2),
(4, 'Tablet', 2),
(5, 'Hybrids computers', 2),
(6, 'Tablet PC', 2),
(7, 'Stationary Computer', 2),
(8, 'DVR', 3),
(9, 'Video cams', 3),
(10, 'Canon', 4),
(11, 'Nikon', 4),
(12, 'MP3-player', 5),
(13, 'Dictaphone', 5),
(14, 'Video cards', 6),
(15, 'Hard Drives', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
