-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 05:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--
CREATE DATABASE IF NOT EXISTS `myshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `myshop`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `storeCookie`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `storeCookie` (IN `cookie` TEXT)  BEGIN
 -- declare @count;
 -- set @count =  SELECT COUNT(*) from session WHERE cookie = cookie;
 -- IF @count > 0 THEN
 SET @count = (SELECT COUNT(*) from session WHERE cookie = cookie);
 IF @count = 0 THEN
			INSERT INTO session (cookie) VALUES (cookie);
 END IF;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user` text COLLATE latin1_general_ci NOT NULL,
  `email` text COLLATE latin1_general_ci NOT NULL,
  `password` text COLLATE latin1_general_ci NOT NULL,
  `firstname` text COLLATE latin1_general_ci NOT NULL,
  `lastname` text COLLATE latin1_general_ci NOT NULL,
  `city` text COLLATE latin1_general_ci NOT NULL,
  `state` text COLLATE latin1_general_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `emailverified` text COLLATE latin1_general_ci NOT NULL,
  `registrationdate` text COLLATE latin1_general_ci NOT NULL,
  `verificationcode` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `phone` text COLLATE latin1_general_ci NOT NULL,
  `phone2` text COLLATE latin1_general_ci NOT NULL,
  `country` text COLLATE latin1_general_ci NOT NULL,
  `address` text COLLATE latin1_general_ci NOT NULL,
  `address2` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user`, `email`, `password`, `firstname`, `lastname`, `city`, `state`, `zip`, `emailverified`, `registrationdate`, `verificationcode`, `phone`, `phone2`, `country`, `address`, `address2`) VALUES
(29, '', 'ricciardi85@gmail.com', '22', 'Andrea', 'Andrea', '', '', 0, '1', '', 'pfuef5kx', '', '', '', '', ''),
(30, '', 'rag@out.it', '12', 'Andrea', 'Andrea', '', '', 0, '', '2018-12-10', 'zq2e8z6r', '', '', '', '', ''),
(31, '', '3123@ot.it', '12', 'Andrea', 'Andrea', '', '', 0, '1', '2018-12-10', 'n8yu38ge', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text,
  `brand` text NOT NULL,
  `description` text NOT NULL,
  `additionalinformations` text NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `availableqty` int(11) DEFAULT NULL,
  `featured` bit(1) DEFAULT NULL,
  `new` bit(1) DEFAULT NULL,
  `thumbnail` text,
  `picture1` text NOT NULL,
  `picture2` text NOT NULL,
  `picture3` text NOT NULL,
  `picture4` text NOT NULL,
  `picture5` text NOT NULL,
  `picture6` text NOT NULL,
  `picture7` text NOT NULL,
  `picture8` text NOT NULL,
  `picture9` text NOT NULL,
  `picture10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `description`, `additionalinformations`, `categoryid`, `price`, `discount`, `availableqty`, `featured`, `new`, `thumbnail`, `picture1`, `picture2`, `picture3`, `picture4`, `picture5`, `picture6`, `picture7`, `picture8`, `picture9`, `picture10`) VALUES
(1, 'Cavo Micro USB.', 'Rampow', 'Cavo per ricarica micro USB da 1M (2Pezzi).', 'Trasferimento Dati e Ricarica Rapida, Antigroviglio Nylon, Cavo USB Micro USB per Samsung S7/S6, Xiaomi, Huawei - Grigio siderale', 1, 6, 0, 10, b'1', b'1', 'images/products/rampow-1m-cable.jpeg', 'images/products/rampow-1m-cable_pic1.jpeg', 'images/products/rampow-1m-cable_pic2.jpeg', 'images/products/rampow-1m-cable_pic3.jpeg', 'images/products/rampow-1m-cable_pic4.jpeg', '', '', '', '', '', ''),
(3, 'Magnetic Micro-Usb cable', 'BGTP', '', 'Micro USB Lightning e cavo di sincronizzazione di tipo C a USB 3 in 1 con 3 adattatori per iPhone Android iPad Samsung Galaxy (Argento)', 1, 13.29, 7, 20, b'1', b'0', 'images/products/bgtb-cable-magnetic.jpeg', 'images/products/bgtb-cable-magnetic-pic1.jpeg', 'images/products/bgtb-cable-magnetic-pic2.jpeg', 'images/products/bgtb-cable-magnetic-pic3.jpeg', '', '', '', '', '', '', ''),
(4, 'Powerbank 20000mAh.', 'Aukey', '', '2 Porte, Caricabatterie Portatile con Ingresso Lightning + Micro USB, per iPhone X/ 8/7/ 6s, iPad, Samsung S9/ S9+, Tablets ECC', 2, 25.99, 0, 20, b'1', b'1', 'images/products/aukey-20000-powerbank.jpg', 'images/products/aukey-20000-powerbank-pic1.jpeg', 'images/products/aukey-20000-powerbank-pic2.jpeg', 'images/products/aukey-20000-powerbank-pic3.jpeg', '', '', '', '', '', '', ''),
(5, '10000mAh Powerbank.', 'Kinps', '', 'Batteria esterna ad alta capacità per la ricarica veloce dei tuoi dispositivi Apple e Android tramite la doppia uscita USB con tecnologia Smart- Nero', 2, 15.9, 0, 20, b'1', b'0', 'images/products/kinps-10000-powerbank.jpg', '', '', '', '', '', '', '', '', '', ''),
(6, 'Powerbank10000mAh.', 'Anker', '', 'Caricabatteria Portatile Da 10000mAh Ultra Compatta - Batteria Esterna Power Bank Alta Capacità Per Huawei, Samsung, iPhone, Asus, LG e Altri', 2, 19.99, 0, 10, b'1', b'1', 'images/products/anker-powercore-10000-powerbank.jpg', '', '', '', '', '', '', '', '', '', ''),
(7, 'Pellicola Vetro Temperato.', 'Syncwire', '', 'iPhone X/XS - [Design Protettivo Compatibile con Face ID] 3-Pezzi HD 9H Durezza, Vetro Temprato Protettiva per iPhone X/XS - [Senza Bolle, Facile da Installare]', 3, 7.99, 4, 10, b'1', b'0', 'images/products/syncwire-iphone-x-xs-protector.jpg', '', '', '', '', '', '', '', '', '', ''),
(8, 'Syncwire [3-Pezzi] Pellicola Vetro Temperato iPhone XS/X - [Design Protettivo Compatibile con Face ID] HD 9H Durezza, Vetro Temprato Protettiva per iPhone XS/X [Senza Bolle, Facile da Installare]', 'Syncwire', '', '', 3, 6.59, 4, 20, b'0', b'0', 'images/products/aukey-20000-powerbank.jpg', '', '', '', '', '', '', '', '', '', ''),
(9, 'Pellicola Vetro iPhone XS/X, [3 Pezzi con 2 Pezzi Posteriore] G-Color Trasparente Pellicola Vetro Temperato Antigraffio [ Facile da Installare] per iPhone XS/X-(Garanzia a vita)', '', '', '', 3, 10.99, 0, 20, b'0', b'0', NULL, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` text,
  `thumbnails` text,
  `thumbnaill` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `thumbnails`, `thumbnaill`) VALUES
(1, 'Cables', 'images/categories/thumb_s_cables.png', 'images/categories/thumb_l_cables.png'),
(2, 'Power banks\n', 'images/categories/thumb_s_power_banks.png', 'images/categories/thumb_l_power_banks.png'),
(3, 'Screen Protectors\n', 'images/categories/thumb_s_screen_protectors.png', 'images/categories/thumb_l_screen_protectors.png'),
(4, 'Cases', 'images/categories/thumb_l_cases.png', 'images/categories/thumb_s_cases.png'),
(5, 'Accessories', 'images/categories/thumb_s_accessories.png', 'images/categories/thumb_l_accessories.png');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `cookie` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `cookie`) VALUES
(2, 'ln4h3hss70hvqflokqn4pq3013');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `orderedQty` int(11) NOT NULL,
  `userId` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `sessionId` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `orderId`, `productId`, `orderedQty`, `userId`, `sessionId`) VALUES
(34, 0, 3, 1, NULL, '479899834'),
(35, 0, 1, 1, NULL, '436724864'),
(36, 0, 4, 1, NULL, '436724864'),
(37, 0, 4, 1, NULL, '923205968'),
(38, 0, 4, 5, NULL, '923205968'),
(41, 0, 5, 1, NULL, '876932621'),
(42, 0, 5, 3, NULL, '876932621'),
(43, 0, 3, 1, NULL, '1025586969'),
(44, 0, 4, 1, NULL, '1025586969'),
(45, 0, 4, 1, NULL, '621844413'),
(46, 0, 3, 1, NULL, '621844413'),
(47, 0, 3, 1, NULL, '40414'),
(48, 0, 4, 1, NULL, '40414'),
(49, 0, 4, 1, NULL, '58330'),
(50, 0, 5, 1, NULL, '58330'),
(51, 0, 4, 1, NULL, '43082'),
(52, 0, 5, 1, NULL, '43082'),
(53, 0, 6, 1, NULL, '43082');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(11, 'ricciardi85@gmail.com', '$2y$10$R7.Xo7gs6831jAbG4SZ61uYdEHt3Lcxu3uq65OmQ7cUk5F.whm4F6', 'Andrich', 0, 1, 1, 0, 1544533412, NULL, 0),
(12, 'ricciardi854@gmail.com', '$2y$10$fsHXPo2I1HLRy1XKL9QSFe1ola9drga6Wjq8PWV03Pgrz4Hog9e.e', 'Andrich4', 0, 1, 1, 0, 1544540421, NULL, 0),
(13, 'ricciardi8533@gmail.com', '$2y$10$QYRAxM7oMI5JNdJreUbq2eXtwAbwqDE1KFrESYtjvazR.PtoIp1tC', 'Andrich333', 0, 1, 1, 0, 1544540435, 1544798273, 6),
(14, 'ajfg@outlook.it', '$2y$10$cZtzOK2AVtHlcOZ4Z6qdL.9PHZsSbi.sg5NJi7Uhijb9WXOgULZCK', 'a1234', 0, 1, 1, 0, 1544623840, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_confirmations`
--

DROP TABLE IF EXISTS `users_confirmations`;
CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_remembered`
--

DROP TABLE IF EXISTS `users_remembered`;
CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_resets`
--

DROP TABLE IF EXISTS `users_resets`;
CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_throttling`
--

DROP TABLE IF EXISTS `users_throttling`;
CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('ejWtPDKvxt-q7LZ3mFjzUoIWKJYzu47igC8Jd9mffFk', 49.4564, 1544523932, 1545063932),
('CUeQSH1MUnRpuE3Wqv_fI3nADvMpK_cg6VpYK37vgIw', 3.02565, 1544523397, 1544955397);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Indexes for table `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `product_category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
