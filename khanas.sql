-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2022 at 10:09 AM
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
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `ordered` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`type`, `name`, `description`, `price`, `ordered`) VALUES
('Wraps', 'Chicken Shawrma Wrap', 'This is Chicken Shawrma Wrap ', 2, 0),
('Burger', 'Quarter Pounder', 'Each Quarter Pounder® with Cheese burger features a ¼ lb.* of 100% fresh beef that’s hot, deliciously juicy and cooked when you order. It’s seasoned with just a pinch of salt and pepper, sizzled on a flat iron grill, then topped with slivered onions, tangy pickles and two slices of melty American cheese on a sesame seed bun. Our QPC® contains no artificial flavors, preservatives or added colors from artificial sources.', 3, 0),
('Pizza', 'Rafid Cheese Pizza', 'This is a cheese pizza', 3, 0),
('Burger', 'Smoky BLT Quarter Pounder', 'First, there’s the Quarter Pounder with Cheese (QPC). Now, there’s still the QPC— but with smoky sauce and bacon. The Smoky BLT QPC offers bold and savory flavors you’ll want to enjoy with two hands.\r\n\r\n \r\n\r\nEach Smoky BLT Quarter Pounder® with Cheese is cooked when you order with a 100% fresh beef quarter pound patty, two slices of melty American cheese, thick cut applewood smoked bacon, fresh Roma tomatoes, shredded lettuce, smoky sauce and a toasted sesame seed bun. A Smoky BLT Quarter Pounder® with Cheese has 770 Calories.', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`) VALUES
(16, 'Fuad Hasan', '1518442776', 'fuad.hasan.1997@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(17, 'Kuddus Mia', '169696969', 'kuddus@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(18, 'Khanas Mia', '16969696', 'khanas@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(19, 'Chandu Mia', '1466455454', 'chandu@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(20, 'John', '16465465465', 'john@gmai.com', '25d55ad283aa400af464c76d713c07ad'),
(21, 'Moina Mia', '654564654', 'mia@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(22, 'Elen Chandra ', '15698566', 'chandra@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(23, 'Rafid Ahmmad', '155959565', 'rafid.ahmmad.3@northsouth.edu', '25d55ad283aa400af464c76d713c07ad'),
(24, 'Lal Mia', '1264656565', 'lal@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(25, 'Random', '4564545', 'random@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
