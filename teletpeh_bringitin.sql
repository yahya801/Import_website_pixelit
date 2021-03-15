-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 06:02 PM
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
(59, 'Huda Beauty', 'https://hudabeauty.com/en_GB/home/', NULL, NULL, 'UK', NULL, NULL);

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
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`timestamp`, `cartID`, `size`, `color`, `quantity`, `priceinpound`, `producttotal`, `brandID`, `shippingID`, `requests`, `url`, `brandshipping`, `airshipping`, `sessionID`, `status`) VALUES
('2021-03-09 23:39:02', 2, '2', 'red', 2, 3, 25, 35, 55, 'hello', '123', 123, 1345, 'dfef3', 1),
('2021-03-09 23:52:10', 3, '3', 'red', 2, 12, 5760, 41, 51, 'hello', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 1200, 1000, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 00:01:39', 4, '3', 'rdw', 4, 12, 11520, 41, 51, 'hello', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 1200, 2000, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:15:20', 5, '3', 'red', 2, 12, 5760, 41, 53, '', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 1200, 3600, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:16:06', 6, '3', 'red', 2, 12, 5760, 41, 53, '', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 1200, 3600, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:29:58', 7, '3', 'red', 2, 10, 4800, 41, 53, '', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 1200, 3600, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:41:16', 8, '3', 'red', 1, 212, 50880, 41, 54, '', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:51:33', 15, '3', 'red', 1, 1, 240, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:51:48', 16, '3', 'red', 1, 1, 240, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:52:17', 17, '6', 'red', 1, 10, 2400, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:52:43', 18, '6', 'red', 1, 25, 6000, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 22:52:51', 19, '6', 'red', 1, 25, 6000, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 23:11:17', 20, '6', 'red', 1, 25, 6000, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-10 23:12:33', 21, '6', 'red', 1, 25, 6000, 24, 54, '', 'https://www.gap.co.uk/gap/women/activewear/jackets-and-hoodies/?nav=meganav%3AWomen%3AActivewear%3AJackets%20%26%20Hoodies', 0, 2500, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-11 11:04:38', 22, '0', 'red', 4, 212, 203520, 41, 53, '', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 0, 7200, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-11 12:27:29', 23, '', '', 1, 3, 720, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/women/footwear/boots/over-the-knee-boots', 0, 1000, '5up635ah5vo0bgi3b6o90qibsl', 1),
('2021-03-13 15:48:25', 24, '', '', 1, 10, 2400, 31, 52, '', 'https://www.asos.com/reclaimed-vintage/reclaimed-vintage-inspired-91-mom-jean-with-destroyed-hems-in-ecru/prd/22627439?colourwayid=60413021&SearchQuery=&cid=10597', 960, 1000, '1604c79abb634e', 1),
('2021-03-15 11:34:12', 25, '', '', 1, 1, 240, 31, 52, '', 'https://www.asos.com/na-kd/na-kd-co-ord-set-in-dusty-pink/grp/34806?colourwayid=60442814&SearchQuery=&cid=19632', 960, 1000, '1604c926801dc1', 0),
('2021-03-15 11:36:04', 26, '', '', 1, 25, 6000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604f004d21bae', 1),
('2021-03-15 11:38:09', 27, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604f00c93e5d7', 1),
('2021-03-15 11:39:39', 28, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604f011f54e70', 1),
('2021-03-15 11:40:29', 29, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 1000, '1604f015419e6a', 0),
('2021-03-15 11:40:41', 30, '', '', 1, 1, 240, 31, 52, '', 'https://www.asos.com/na-kd/na-kd-co-ord-set-in-dusty-pink/grp/34806?colourwayid=60442814&SearchQuery=&cid=19632', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 11:41:01', 31, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 1000, '1604f015419e6a', 0),
('2021-03-15 11:41:06', 32, '', '', 1, 2, 480, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604f015419e6a', 0),
('2021-03-15 11:42:52', 33, '', '', 1, 2, 480, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 1000, '1604f015419e6a', 1),
('2021-03-15 12:03:14', 34, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:03:38', 35, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:05:28', 36, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:06:02', 37, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:08:57', 38, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:10:19', 39, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:10:36', 40, '', '', 3, 1, 720, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 3000, '1604c926801dc1', 0),
('2021-03-15 12:12:48', 41, '', '', 3, 1, 720, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 3000, '1604c926801dc1', 0),
('2021-03-15 12:13:03', 42, '', '', 3, 1, 720, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 3000, '1604c926801dc1', 0),
('2021-03-15 12:13:49', 43, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:13:51', 44, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:14:19', 45, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:14:44', 46, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:15:54', 47, '', '', 5, 1, 1200, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 5000, '1604c926801dc1', 0),
('2021-03-15 12:17:24', 48, '', '', 5, 1, 1200, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 5000, '1604c926801dc1', 0),
('2021-03-15 12:18:24', 49, '', '', 2, 1, 480, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 2000, '1604c926801dc1', 0),
('2021-03-15 12:18:26', 50, '', '', 2, 1, 480, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 2000, '1604c926801dc1', 0),
('2021-03-15 12:18:44', 51, '', '', 2, 1, 480, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 2000, '1604c926801dc1', 0),
('2021-03-15 12:18:54', 52, '', '', 2, 1, 480, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 2000, '1604c926801dc1', 0),
('2021-03-15 12:19:53', 53, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:20:30', 54, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:20:55', 55, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:22:14', 56, '', '', 1, 1000, 240000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:23:20', 57, '', '', 1, 1000, 240000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:23:45', 58, '', '', 1, 1000, 240000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:23:59', 59, '', '', 1, 1000, 240000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 12:25:54', 60, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 1000, '1604c926801dc1', 0),
('2021-03-15 12:27:02', 61, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 1000, '1604c926801dc1', 0),
('2021-03-15 12:27:17', 62, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:31:36', 63, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:31:52', 64, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:34:21', 65, '', '', 2, 1, 480, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:44:05', 66, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:44:13', 67, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:45:01', 68, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:45:31', 69, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:47:47', 70, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:48:30', 71, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:49:07', 72, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:49:19', 73, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 12:55:50', 74, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 12:56:31', 75, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 13:25:19', 76, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 13:47:45', 77, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 13:50:19', 78, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 13:59:49', 79, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 13:59:57', 80, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 14:02:32', 81, '', '', 1, 1, 240, 41, 52, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 1000, '1604c926801dc1', 0),
('2021-03-15 14:03:36', 82, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 14:04:11', 83, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 14:05:00', 84, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 14:05:03', 85, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 0),
('2021-03-15 14:09:59', 86, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 14:22:50', 87, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 14:24:33', 88, '', '', 1, 1, 240, 22, 51, '', 'https://www.amazon.co.uk/deal/a2a03bfa/ref=gbps_img___a2a03bfa?showVariations=true&searchAlias=dvd&smid=A3P5ROKL5A1OLE', 0, 500, '1604c926801dc1', 0),
('2021-03-15 14:25:06', 89, '', '', 1, 1, 240, 22, 51, '', 'https://www.amazon.co.uk/deal/a2a03bfa/ref=gbps_img___a2a03bfa?showVariations=true&searchAlias=dvd&smid=A3P5ROKL5A1OLE', 0, 500, '1604c926801dc1', 0),
('2021-03-15 14:25:12', 90, '', '', 1, 1, 240, 22, 51, '', 'https://www.amazon.co.uk/deal/a2a03bfa/ref=gbps_img___a2a03bfa?showVariations=true&searchAlias=dvd&smid=A3P5ROKL5A1OLE', 0, 500, '1604c926801dc1', 0),
('2021-03-15 14:27:44', 91, '', '', 1, 25, 6000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 0),
('2021-03-15 14:27:50', 92, '', '', 1, 25, 6000, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 1200, 500, '1604c926801dc1', 1),
('2021-03-15 15:03:20', 93, '', '', 1, 1, 240, 41, 51, '', 'https://www.aldoshoes.com/uk/en_UK/men/fuscusflex-brown/p/13092424', 0, 500, '1604c926801dc1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversionrate`
--

CREATE TABLE `conversionrate` (
  `conversionrateID` int(11) NOT NULL,
  `conversionrate` float DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversionrate`
--

INSERT INTO `conversionrate` (`conversionrateID`, `conversionrate`, `updatedAt`) VALUES
(1, 230, '2021-03-04 13:03:55'),
(2, 240, '2021-03-04 13:15:08');

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
  `orderID` int(11) NOT NULL,
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
  `rolesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `address1`, `address2`, `phoneno`, `city`, `country`, `rolesID`) VALUES
(0, 'Muhammad Yahya', 'yahyaahsan83@gmail.com', 'D-68 block 9 Clifton Karachi', '', '03362271512', 'Karachi', ' Pakistan ', 1);

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

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
