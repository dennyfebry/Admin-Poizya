-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2019 at 01:58 PM
-- Server version: 10.1.43-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dene4871_poizya`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `portal_code` varchar(10) DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `token`, `name`, `bio`, `gender`, `birthday`, `address`, `phone_number`, `portal_code`, `level`, `status`, `last_login`, `created`, `modified`) VALUES
('5dd781e106a86', 'papawfawwaz', 'papawfawwaz1@gmail.com', 'cXdlcnR5MTIzNDU=', NULL, 'M Fawwaz I', 'Ganteng', 'Male', '1997-11-13', 'utytgerfd', '081234567890', '35213', 0, 1, '2019-11-28 10:49:28', '2019-11-16 05:20:48', '2019-11-28 11:06:57'),
('5dd78376480da', 'inwardco', 'inwardco@gmail.com', 'aW53YXJkY28yNA==', NULL, 'Inward Company', 'Have More Quality', 'Unsex', '2013-03-24', 'Komplek SMKN 2 Jl. Ir. Sutami No 11 RT 7 / RW 11 ( Belakang SMKN2 )', '085691388200', '15118', 0, 1, '2019-11-28 10:26:13', '2019-11-22 01:43:02', '2019-11-23 10:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `token`, `level`, `status`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', 'poizya.sales@poizya.com', 'cXdlcnR5MTIzNDU=', 'gc6c4aIXvoeEbTsRtYGkQtHW8EAsIUvydha62hSdU1WpXN1NQSTZlLfoQbcS', 1, 1, '2019-11-18 14:32:39', '2019-11-16 11:53:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `rekening`) VALUES
(1, 'BCA', '731-025-2527'),
(2, 'BRI', '034-101-000-743-303'),
(3, 'BNI', '023-827-2088'),
(4, 'Mandiri', '0700-00-899-992');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `id_account`) VALUES
(1, 1, '5dd78376480da');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Backpack', 'Wikipedia lists bookbag, kitbag, knapsack, pack, sackpack or backsack as alternate names for this bag ; it is a sturdy bag carried on the back of the body with two straps. There are large backpacks used for traveling and they are called rucksacks'),
(2, 'Newsboy Bag / Satchel', 'Like the advent of the newsboy cap, the newsboy bag is a classic style that has become synonymous with men’s casual wear. It’s similar to the messenger bag’s style, but its traditional canvas exterior makes it a little less formal than the latter.'),
(3, 'Messenger Bag', 'Messenger bags have taken on a whole new meaning in urban fashion. From students with canvas bags to urban hipsters with modern leather bags, the messenger’s laid-back style will leather messenger tote also exudes a hint of uptown sophistication.');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `id` int(11) NOT NULL,
  `sending_bank` varchar(50) NOT NULL,
  `account_bank_name` varchar(50) NOT NULL,
  `receiver_bank` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `date_payment` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_order` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `sending_bank`, `account_bank_name`, `receiver_bank`, `amount`, `date_payment`, `status`, `id_order`, `created`, `modified`) VALUES
(1, 'Papaw Fawwaz', 'Mandiri', '4', 250000, '2019-11-16', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `id_product`, `id_account`) VALUES
(1, 1, '5dd78376480da'),
(2, 6, '5dd78376480da'),
(3, 4, '5dd781e106a86'),
(4, 7, '5dd781e106a86');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `total` double NOT NULL,
  `order_date` date NOT NULL,
  `payment_deadline` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `id_account` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `code`, `total`, `order_date`, `payment_deadline`, `payment_method`, `id_account`, `status`, `created`, `modified`) VALUES
(1, 'TRK001', 250000, '2019-11-16', '2019-11-17', '2', 1, 1, '2019-11-16 05:48:41', '2019-11-16 12:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `code`, `name`, `qty`, `price`, `id_order`) VALUES
(1, 'BP01', 'Pierce', 1, 250000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `code`, `name`, `price`, `description`, `stock`, `status`, `id_category`) VALUES
(1, 'BP01', 'Pierce', 250000, 'backpack pierce', 10, 1, 1),
(3, 'BP02', 'Norman', 230000, 'backpack norman', 6, 1, 1),
(4, 'BP03', 'Jane', 225000, 'backpack jane', 6, 1, 1),
(5, 'BP04', 'John', 215000, 'backpack john', 5, 0, 1),
(6, 'MB01', 'Alexander', 80000, 'messenger bag alexander', 6, 1, 3),
(7, 'MB02', 'Nora', 65000, 'messsenger bag nora', 4, 1, 3),
(8, 'MB03', 'Nadia', 65000, 'messenger bag nadia', 6, 0, 3),
(9, 'NB01', 'Sarah', 110000, 'newsboy bag /  satchel sarah', 7, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cart` (`id_product`),
  ADD KEY `account_cart` (`id_account`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_account` (`id_account`),
  ADD KEY `favorite_product` (`id_product`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `account_cart` FOREIGN KEY (`id_account`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `product_cart` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_account` FOREIGN KEY (`id_account`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `favorite_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
