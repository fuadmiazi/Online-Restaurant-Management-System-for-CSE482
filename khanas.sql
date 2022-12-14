-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 09:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khanas`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` tinyint(4) NOT NULL DEFAULT 0,
  `total_price` float NOT NULL,
  `added_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customer_id`, `item_name`, `quantity`, `total_price`, `added_time`) VALUES
(26, 'Quarter Pounder', 4, 12, '2022-12-14 20:47:29'),
(26, 'Rafid Cheese Pizza', 2, 6, '2022-12-14 20:47:31'),
(26, 'Special Cold Coffee', 4, 2, '2022-12-14 20:47:32'),
(26, 'Smoky BLT Quarter Pounder', 2, 4, '2022-12-15 01:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `ordered` mediumint(9) NOT NULL DEFAULT 0,
  `image_name` varchar(1024) NOT NULL DEFAULT 'food1.jpg',
  `added_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`type`, `name`, `description`, `price`, `ordered`, `image_name`, `added_time`) VALUES
('Wraps', 'Chicken Shawrma Wrap', 'This is Chicken Shawrma Wrap ', 2, 0, 'food1.jpg', '2022-12-04 23:19:56'),
('Burger', 'Quarter Pounder', 'Each Quarter Pounder® with Cheese burger features a ¼ lb.* of 100% fresh beef that’s hot, deliciously juicy and cooked when you order. It’s seasoned with just a pinch of salt and pepper, sizzled on a flat iron grill, then topped with slivered onions, tangy pickles and two slices of melty American cheese on a sesame seed bun. Our QPC® contains no artificial flavors, preservatives or added colors from artificial sources.', 3, 0, 'food1.jpg', '2022-12-04 23:19:56'),
('Pizza', 'Rafid Cheese Pizza', 'This is a cheese pizza', 3, 0, 'food1.jpg', '2022-12-04 23:19:56'),
('Burger', 'Smoky BLT Quarter Pounder', 'First, there’s the Quarter Pounder with Cheese (QPC). Now, there’s still the QPC— but with smoky sauce and bacon. The Smoky BLT QPC offers bold and savory flavors you’ll want to enjoy with two hands.\r\n\r\n \r\n\r\nEach Smoky BLT Quarter Pounder® with Cheese is cooked when you order with a 100% fresh beef quarter pound patty, two slices of melty American cheese, thick cut applewood smoked bacon, fresh Roma tomatoes, shredded lettuce, smoky sauce and a toasted sesame seed bun. A Smoky BLT Quarter Pounder® with Cheese has 770 Calories.', 2, 0, 'food1.jpg', '2022-12-04 23:19:56'),
('Drinks', 'Special Cold Coffee', 'It\'s a cold coffee', 0.5, 0, 'food1.jpg', '2022-12-04 23:19:56'),
('Drinks', 'Strawberry Coffee', 'This is a strawberry-flavored Coffee', 1, 0, 'food1.jpg', '2022-12-05 00:22:04'),
('Pizza', 'Tasin\'s Sausage Pizza', 'This is a pizza made with tasin\'s sausage.', 500, 0, 'food1.jpg', '2022-12-04 23:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_name` varchar(1024) NOT NULL DEFAULT 'propic.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `image_name`) VALUES
(16, 'Fuad Hasan', '1518442776', 'fuad.hasan.1997@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(17, 'Kuddus Mia', '169696969', 'kuddus@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(18, 'Khanas Mia', '16969696', 'khanas@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(19, 'Chandu Mia', '1466455454', 'chandu@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(20, 'John', '16465465465', 'john@gmai.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(21, 'Moina Mia', '654564654', 'mia@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(22, 'Elen Chandra ', '15698566', 'chandra@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(23, 'Rafid Ahmmad', '155959565', 'rafid.ahmmad.3@northsouth.edu', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(24, 'Lal Mia', '1264656565', 'lal@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(25, 'Random', '4564545', 'random@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'propic.jpg'),
(26, 'rafid1', '1234567', 'rafid1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'propic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `item_name` (`item_name`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_name`) REFERENCES `food_items` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
