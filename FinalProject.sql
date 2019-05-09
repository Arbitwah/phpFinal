-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 02:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project_online_store`
--
CREATE DATABASE IF NOT EXISTS `final_project_online_store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `final_project_online_store`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'PS4'),
(2, 'Nintendo Switch'),
(3, 'Blu-ray Movie');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `customerName` varchar(250) NOT NULL,
  `qtyOrdered` int(11) NOT NULL,
  `purchaseID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `productID`, `customerName`, `qtyOrdered`, `purchaseID`) VALUES
(2, 1, 'Gregory Pugh', 1, '460c791a562583a3ba01f05e5bb0bb90'),
(3, 3, 'Gregory Pugh', 9, 'a41ea306130396e83977c51555365b80'),
(4, 3, 'Gregory Pugh', 9, '3bb17d49b39e975a273147de6e9c6e08'),
(5, 3, 'Gregory Pugh', 9, '37f1283e8da84038d2906e0d10c75f29'),
(6, 3, 'Gregory Pugh', 9, 'c7e0f3a1d98bc06557c10f9242b185a9'),
(7, 3, 'Gregory Pugh', 9, '7b95a5e95b44e9ab6ef7d71499c53178'),
(8, 3, 'Gregory Pugh', 9, '947b097d39510f8da0c13710f9b5d48f'),
(9, 11, 'Gregory Pugh', 2, 'e03b4ff58417751f2ca95b5d43a9eb70'),
(10, 11, 'Gregory Pugh', 2, 'd51416eb3c68571323260c8dd7a97965'),
(11, 11, 'Gregory Pugh', 2, '187a9e63d5638f9ef71b79c2beb07548'),
(12, 11, 'Gregory Pugh', 2, '0f60f28d14096fdd0710d9d4fbd62fca'),
(13, 11, 'Gregory Pugh', 3, 'f8fb63d0ef65d712f922ef11ccb1e70d'),
(14, 11, 'Gregory Pugh', 3, '2a3f37f2c92886deaaea0bb2c2047b8d');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `listPrice` decimal(11,2) NOT NULL,
  `qtyOnHand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productName`, `productImage`, `listPrice`, `qtyOnHand`) VALUES
(1, 1, 'Resident Evil 2', 'RE2.jpg', '65.00', 19),
(3, 1, 'Kingdom Hearts 3', 'KH3.jpg', '59.99', 23),
(4, 1, 'Red Dead Redemption 2', 'RDR2.jpg', '59.99', 4),
(5, 2, 'Mario Odyssey', 'MarioOdy.jpg', '59.99', 8),
(7, 2, 'Zelda: Breath of the Wild ', 'ZeldaBOTW.jpg', '19.99', 8),
(8, 2, 'Civilization 6', 'Civ6.jpg', '59.99', 4),
(9, 3, 'Ghost in the Shell', 'Ghost.jpg', '29.99', 7),
(10, 3, 'Star Wars: Rogue One', 'SWRogueOne.jpg', '29.99', 8),
(11, 3, 'Ant-Man', 'ANTMAN.jpg', '29.99', 27);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `firstName`, `password`) VALUES
(1, 'gregAdmin', 'Gregory', 'f5d1278e8109edd94e1e4197e04873b9'),
(2, 'Kirsten', 'Kirsten', 'beae421a14a34f831c113f61323d1ab3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
