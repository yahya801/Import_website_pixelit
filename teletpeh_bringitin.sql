-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 11:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teletpeh_bringitin`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandID` int(11) NOT NULL,
  `brandname` varchar(45) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url2` varchar(255) DEFAULT NULL,
  `urlmobile` varchar(255) DEFAULT NULL,
  `origin` varchar(45) DEFAULT NULL,
  `charge` float DEFAULT NULL,
  `free` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandID`, `brandname`, `url`, `url2`, `urlmobile`, `origin`, `charge`, `free`) VALUES
(21, 'ADIDAS', 'https://www.adidas.co.uk', NULL, NULL, 'UK', 3.99, 50),
(22, 'Amazon', 'https://www.amazon.co.uk', NULL, NULL, 'UK', NULL, NULL),
(23, 'Clarks', 'https://www.clarks.co.uk', NULL, NULL, 'UK', 3.95, NULL),
(24, 'GAP', 'https://www.gap.co.uk', NULL, NULL, 'UK', 4, 25),
(25, 'NEXT', 'https://www.next.co.uk', NULL, NULL, 'UK', NULL, NULL),
(26, 'Ralph Lauren', 'https://www.ralphlauren.co.uk', NULL, NULL, 'UK', NULL, NULL),
(27, 'Reebok', 'https://www.reebok.co.uk', NULL, NULL, 'UK', NULL, NULL),
(28, 'ZALANDO', 'https://www.zalando.co.uk', NULL, NULL, 'UK', NULL, NULL),
(29, 'UNDER ARMOUR', 'https://www.underarmour.co.uk/en-gb/', NULL, NULL, 'UK', NULL, NULL),
(31, 'ASOS', 'https://www.asos.com', NULL, NULL, 'UK', 4, 35),
(32, 'BOOHOO', 'https://www.boohoo.com', NULL, NULL, 'UK', 3.99, NULL),
(33, 'Debenhams', 'https://www.debenhams.com', NULL, NULL, 'UK', 2.99, NULL),
(34, 'DuneLondon', 'https://www.dunelondon.com', NULL, NULL, 'UK', 3.5, 120),
(35, 'M&S', 'https://www.marksandspencer.com', NULL, NULL, 'UK', NULL, NULL),
(36, 'RiverIsland', 'https://www.riverisland.com', NULL, NULL, 'UK', NULL, NULL),
(37, 'SportsDirect', 'https://www.sportsdirect.com', NULL, NULL, 'UK', NULL, NULL),
(38, 'TOPSHOP', 'https://www.topshop.com', NULL, NULL, 'UK', NULL, NULL),
(39, 'MotherCare', 'https://www.boots.com/mothercare/', NULL, NULL, 'UK', NULL, NULL),
(41, 'ALDO', 'https://aldoshoes.co.uk', 'https://www.aldoshoes.com/uk/en_UK\r\n', NULL, 'UK', 5, NULL),
(42, 'Armani UK', 'https://www.armani.com/gb/armanicom/', NULL, NULL, 'UK', NULL, NULL),
(43, 'Bershka', 'https://www.bershka.com/gb/', NULL, NULL, 'UK', 3.95, NULL),
(44, 'GUCCI', 'https://www.gucci.com/uk/en_gb/', NULL, NULL, 'UK', NULL, NULL),
(45, 'H&M', 'https://www2.hm.com/en_gb/', NULL, NULL, 'UK', NULL, NULL),
(46, 'Harrods', 'https://www.harrods.com/en-gb/', NULL, NULL, 'UK', 5.95, 100),
(47, 'Lacoste', 'https://www.lacoste.com/gb/', NULL, NULL, 'UK', NULL, NULL),
(48, 'MANGO', 'https://shop.mango.com/gb/', NULL, NULL, 'UK', NULL, NULL),
(49, 'Massimo Dutti', 'https://www.massimodutti.com/gb/', NULL, NULL, 'UK', NULL, NULL),
(50, 'NastyGal', 'https://www.nastygal.com/gb/sitemap/', NULL, NULL, 'UK', NULL, NULL),
(51, 'Nike', 'https://www.nike.com/gb/', NULL, NULL, 'UK', NULL, NULL),
(52, 'SelfRidges', 'https://www.selfridges.com/GB/en/', NULL, NULL, 'UK', NULL, NULL),
(53, 'TedBaker', 'https://www.tedbaker.com/uk/', NULL, NULL, 'UK', NULL, NULL),
(54, 'TkMaxx', 'https://www.tkmaxx.com/uk/en/', NULL, NULL, 'UK', NULL, NULL),
(55, 'Urban Outfitters', 'https://www.urbanoutfitters.com/en-gb/', NULL, NULL, 'UK', NULL, NULL),
(56, 'Victoria\'s Street', 'https://www.victoriassecret.com/gb/', NULL, NULL, 'UK', NULL, NULL),
(57, 'Weekday', 'https://www.weekday.com/en_gbp/index.html/', NULL, NULL, 'UK', NULL, NULL),
(58, 'ZARA', 'https://www.zara.com/uk/', NULL, 'https://m.zara.com/uk/', 'UK', NULL, NULL),
(59, 'Huda Beauty', 'https://hudabeauty.com/en_GB/home/', NULL, NULL, 'UK', NULL, NULL),
(69, 'Any Other Brand', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `cartID` int(11) NOT NULL,
  `size` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `priceinpound` float DEFAULT NULL,
  `producttotal` int(11) DEFAULT NULL,
  `brandID` int(11) NOT NULL,
  `shippingID` int(11) NOT NULL,
  `requests` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `brandshipping` int(11) DEFAULT NULL,
  `airshipping` int(11) DEFAULT NULL,
  `sessionID` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `paymentmethodID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `conversionrate`
--

CREATE TABLE `conversionrate` (
  `conversionrateID` int(11) NOT NULL,
  `conversionrate` float DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `totalamountRS` int(11) DEFAULT NULL,
  `totalservice` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `paymentmethodID` int(11) NOT NULL,
  `conversionrateID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderitemID` int(11) NOT NULL,
  `size` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `priceinpound` float DEFAULT NULL,
  `producttotal` int(11) DEFAULT NULL,
  `orderID` int(11) DEFAULT NULL,
  `brandID` int(11) NOT NULL,
  `shippingID` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `brandshipping` int(11) DEFAULT NULL,
  `airshipping` int(11) DEFAULT NULL,
  `requests` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `paymentmethodID` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `percentage` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`paymentmethodID`, `description`, `percentage`) VALUES
(0, 'Cash on Delivery', 0.15),
(1, 'Bank Transfer', 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `rolesID` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`rolesID`, `description`) VALUES
(1, 'customer'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingID` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingID`, `description`, `amount`) VALUES
(51, 'Rs 500 Shirt/Top/Undergarment/Jewellery/Accessory', 500),
(52, 'Rs 1000 each Trouser/Jeans/Sweater/Jumper', 1000),
(53, 'Rs 1800 each Jacket/Blazer/Hoodie - Light weight', 1800),
(54, 'Rs 2500 each Long Coat/Jacket', 2500),
(55, 'Rs 500 each Footwear(Kids)/Slippers(Adults)', 500),
(56, 'Rs 1500 each Footwear(Adults)/Handbag/Purse', 1500),
(57, 'Rs 500 each Small Book - Paperback/SoftCover', 500),
(58, 'Rs 2000 each Book - Hardcover/CoffeeTable', 2000),
(59, 'Rs 500 each Mobile Cover', 500),
(60, 'Rs 1000 each Medicine/Small Cosmetics', 1000),
(61, 'Rs 1200 each Watch/Sunglasses', 1200),
(62, 'Miscellaneous will be discussed on Call', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address1` varchar(45) NOT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `phoneno` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `rolesID` int(11) NOT NULL,
  `sessionID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `brandID` (`brandID`),
  ADD KEY `shippingID` (`shippingID`);

--
-- Indexes for table `conversionrate`
--
ALTER TABLE `conversionrate`
  ADD PRIMARY KEY (`conversionrateID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `paymentmethodID` (`paymentmethodID`),
  ADD KEY `conversionrateID` (`conversionrateID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderitemID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `brandID` (`brandID`),
  ADD KEY `shippingID` (`shippingID`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`paymentmethodID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolesID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `rolesID` (`rolesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderitemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`brandID`) REFERENCES `brand` (`brandID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`shippingID`) REFERENCES `shipping` (`shippingID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`paymentmethodID`) REFERENCES `paymentmethod` (`paymentmethodID`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`conversionrateID`) REFERENCES `conversionrate` (`conversionrateID`);

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`),
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`brandID`) REFERENCES `brand` (`brandID`),
  ADD CONSTRAINT `orderitem_ibfk_3` FOREIGN KEY (`shippingID`) REFERENCES `shipping` (`shippingID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rolesID`) REFERENCES `roles` (`rolesID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
