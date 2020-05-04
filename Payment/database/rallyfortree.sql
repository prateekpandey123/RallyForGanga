-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 02:50 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `rallyfortree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'nishant ', '@nishant'),
(2, 'prateek', '@prateek');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(15, 'momos'),
(19, 'Fries'),
(20, 'Drinks'),
(21, 'Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(23, 'Pandey', '8687767493', 'manpreet123@gmail.com', '+91-7598121941\r\ndhartifoundation.info@gmail.com', '2020-04-02 18:45:52'),
(24, 'KISHAN', '9598608579', 'kkmaurya.0095@gmail.com', 'House No:- A/140, Baba Balak Nath Mandir, Chander Vihar, New Delhi-110091', '2020-04-02 18:51:12'),
(25, 'Styam Maurya', '9598608579', 'styammaurya@gmail.com', 'House No:- A/140, Baba Balak Nath Mandir, Chander Vihar, New Delhi-110091', '2020-04-02 18:53:02'),
(30, 'Devesh PANDEY', '8687767493', 'test@gmail.com', 'House No:- A/140, Baba Balak Nath Mandir, Chander Vihar, New Delhi-110091\r\n', '2020-04-04 08:19:20'),
(31, 'axxxcdwcd', '8687767493', 'kkmaurya.0095@gmail.com', 'sdfgh', '2020-04-05 08:29:27'),
(32, 'Pandey', '345678905678', 'kkmaurya.0095@gmail.com', 'dfghjk', '2020-04-07 22:06:05'),
(33, 'Pandey', '345678905678', 'kkmaurya.0095@gmail.com', 'dfghjk', '2020-04-07 22:08:06'),
(34, 'Pandey', '86412653256', 'prateekpandey736@gmail.com', 'sedfghjkdfghjklfgkhjk', '2020-04-07 22:08:21'),
(35, 'kishan', '9598608579', 'kkmaurya.0095@gmail.com', 'hii kishan', '2020-04-07 22:11:33'),
(36, 'Pandey', '8687767493', 'kkmaurya.0095@gmail.com', 'sdfghjk', '2020-04-08 11:18:11'),
(37, 'Pandey', '8687767493', 'kkmaurya.0095@gmail.com', 'sdfghjk', '2020-04-08 11:36:07'),
(38, 'Pandey', '8687767493', 'kkmaurya.0095@gmail.com', 'sdfghjk', '2020-04-08 11:37:08'),
(39, 'Kishan Maurya', '9598608579', 'kkmaurya.0095@gmail.com', 'qwertyuiolkhgfds', '2020-04-08 11:46:21'),
(42, 'Pandey', '8687767493', 'kkmaurya.0095@gmail.com', 'sfgdgrg', '2020-04-13 15:15:09'),
(43, 'Pandey', '8687767493', 'prateekpandey736@gmail.com', 'nhgjh', '2020-04-16 18:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` varchar(12) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_pincode` int(10) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `oder_name` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `order_cat` varchar(50) NOT NULL,
  `order_qty` int(50) NOT NULL,
  `order_total` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_type` int(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_size` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `p_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `cat_id`, `p_name`, `p_type`, `p_price`, `p_desc`, `p_size`, `create_at`, `updated_at`, `p_image`) VALUES
(11, 19, 'Barbeque Chicken Wrap', 8, '149', 'Tender chicken lathered in Barbeque sauce and mint', 'Regular', '2019-11-30 12:56:48', '0000-00-00 00:00:00', 'img11.png'),
(13, 19, 'Chole Kulcha Meal', 8, '199', 'There are meatballs. And there are double cheese meatballs', 'Large', '2019-11-30 12:55:31', '0000-00-00 00:00:00', 'p-img8.png'),
(14, 19, 'Barbeque Chicken Wrap', 11, '99', 'There are meatballs. And there are double cheese meatballs', 'Large', '2019-11-30 12:56:04', '0000-00-00 00:00:00', 'p-img4.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slid_id` int(11) NOT NULL,
  `slide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `s_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `cat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`s_id`, `sub_category`, `cat_id`) VALUES
(1, 'Veg Pizza', 19),
(2, 'Tomatino pizza', 21),
(3, 'Sezwan Chinees', 20),
(4, 'Crispy', 15),
(5, 'Plain chees pizza', 21),
(6, 'Baby Corn Pizza', 21),
(7, 'Butter cheess Burger', 15),
(8, 'cheese Papad', 19),
(11, 'Allo Paratha', 19),
(12, 'Fried Rice', 19),
(13, 'Egg Fried Rice', 15);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `amount` int(255) DEFAULT NULL,
  `pay_to` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `email`, `phone`, `amount`, `pay_to`, `created_at`) VALUES
(11, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Modi Care Releaf fund.', '2020-04-15 18:06:38'),
(12, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Modi Care Releaf fund.', '2020-04-15 18:08:02'),
(13, 'golden pandey', 'prateekpandey531@gmail.com', '8687767493', 9900, 'Modi Care Releaf fund.', '2020-04-15 18:24:23'),
(14, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 49500, 'Modi Care Releaf fund.', '2020-04-15 18:27:43'),
(15, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 49500, 'Modi Care Releaf fund.', '2020-04-15 18:34:30'),
(16, '', '', '', 198, 'Modi Care Releaf fund.', '2020-04-15 19:01:32'),
(17, 'prateek pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:11:46'),
(18, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:13:19'),
(19, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 9900, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:14:42'),
(20, 'Prateek Pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:35:33'),
(21, 'Pandey', 'prateekpandey736@gmail.com', '8687767493', 4950, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:40:02'),
(22, 'golden pandey', 'prateekpandey736@gmail.com', '8687767493', 9900, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:47:05'),
(23, 'golden', 'prateekpandey736@gmail.com', '8687767493', 198, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 13:58:31'),
(24, 'PandeyPrateek ', 'prateekpandey736@gmail.com', '8687767493', 198, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 15:48:38'),
(25, 'Pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 16:02:34'),
(26, 'Pandey', 'prateekpandey736@gmail.com', '8687767493', 198, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 18:01:03'),
(27, 'Pandey', 'prateekpandey736@gmail.com', '8687767493', 990, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 18:04:02'),
(28, 'Pandey', 'prateekpandey736@gmail.com', '8687767493', 8910, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 19:18:21'),
(29, 'Pandey', 'prateekpandey736@gmail.com', '8687767493', 119988, 'Dharti Foundation(Rally For Ganga).', '2020-04-16 19:25:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `p_type` (`p_type`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slid_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`p_type`) REFERENCES `subcategory` (`s_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
