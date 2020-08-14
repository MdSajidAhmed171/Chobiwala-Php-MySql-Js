-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 08:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chobiwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `babiesphoto`
--

CREATE TABLE `babiesphoto` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `licence` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `babiesphoto`
--

INSERT INTO `babiesphoto` (`id`, `name`, `image`, `price`, `photographer`, `credit`, `licence`, `location`, `info`, `collection`) VALUES
(31, 'baby with pink headcap', 'babiesphoto/31.jpg', 500, 'Sajid', 'Sajid', 2111111111, 'Dhaka', 'Edit by Chobiwala production', 'babies photography'),
(32, 'baby with black headcap', 'babiesphoto/32.jpg', 300, 'Farzana', 'Farzana', 211111114, 'Gazipur', 'Edit by Chobiwala production', 'babies photography'),
(33, 'cute baby photography', 'babiesphoto/33.jpg', 400, 'Daniel', 'Daniel', 0, 'Dhaka', '', 'babies photography'),
(34, 'A baby on fields', 'babiesphoto/34.jpg', 300, 'Badrul', 'Badrul', 211111113, 'Dhaka', 'Edit by Chobiwala production', 'babies photography'),
(35, 'twin baby', 'babiesphoto/35.jpg', 250, 'Nur Hasan', 'Nur Hasan', 111111111, 'Dhaka', '', 'babies photography');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `img_id` int(5) NOT NULL,
  `user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
  `post_time` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `img_id`, `user`, `comment`, `post_time`) VALUES
(69, 21, 'sajid_ahmed_1', 'nice', '2020-03-29 21:31:47'),
(70, 21, 'sajid_ahmed_1', 'nice', '2020-03-29 21:32:17'),
(71, 21, 'sajid_ahmed_1', 'joss', '2020-03-29 21:35:40'),
(72, 25, 'sajid_ahmed_1', 'h', '2020-04-05 21:38:49'),
(73, 21, 'sajid_ahmed_1', 'j', '2020-04-07 04:31:07'),
(74, 35, 'sajid_ahmed_1', 'g', '2020-04-08 02:53:25'),
(75, 35, 'sajid_ahmed_1', 'h', '2020-04-08 02:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `conceptualphoto`
--

CREATE TABLE `conceptualphoto` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `licence` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conceptualphoto`
--

INSERT INTO `conceptualphoto` (`id`, `name`, `image`, `price`, `photographer`, `credit`, `licence`, `location`, `info`, `collection`) VALUES
(21, 'chess_reflect_on_mirror', 'conceptualPhoto/21.jpg', '500', 'Sajid', 'Sajid', 2111111111, 'Dhaka', 'Edit by Chobiwala production', 'Conceptual'),
(22, 'match stick', 'conceptualPhoto/22.jpg', '300', 'Badrul', 'Badrul', 211111113, 'Dhaka', 'Edit by Chobiwala production', 'Conceptual'),
(23, 'Man in forest', 'conceptualPhoto/23.jpg', '300', 'Farzana', 'Farzana', 211111114, 'Gazipur', 'Edit by Chobiwala production', 'Conceptual'),
(24, 'onion_extreme_crisis', 'conceptualPhoto/24.jpg', '400', 'Daniel', '', 0, '', '', ''),
(25, 'onion crisis', 'conceptualPhoto/25.jpg', '250', 'Nur Hasan', '', 0, '', '', ''),
(26, 'A girl besides the fountain', 'conceptualPhoto/26.jpg', '300', 'Sajid', 'Sajid', 222222222, 'Brazil', '', 'Conceptual'),
(27, 'A bulbe', 'conceptualPhoto/27.jpg', '300', 'Sajid', 'Sajid', 222222212, 'Italy', '', 'Conceptual'),
(28, 'glass', 'conceptualPhoto/28.jpg', '300', 'Sajid', 'Sajid', 222222213, 'France', '', 'Conceptual');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `mobile`, `address`) VALUES
(1, 'sajid', 'ahamedsajid81@gmail.com', '01910797433', '123,dhaka, dhaka, 1200'),
(2, 'sajid', 'ahamedsajid81@gmail.com', '01910797433', '123,dhaka, dhaka, 1200'),
(3, '', '', '', ', , '),
(4, 'sajid', 'ahamedsajid81@gmail.com', '01910797433', 'bashundhara, dhaka, '),
(5, '', '', '', ', , '),
(6, 'rajib', 'ahmed@gmai.com', '01910797433', '123,dhaka, dhaka, '),
(7, '', '', '', ', , '),
(8, '', '', '', ', , ');

-- --------------------------------------------------------

--
-- Table structure for table `latestphoto`
--

CREATE TABLE `latestphoto` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `licence` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestphoto`
--

INSERT INTO `latestphoto` (`id`, `name`, `image`, `price`, `photographer`, `credit`, `licence`, `location`, `info`, `collection`) VALUES
(101, 'sunligt modeling', 'latestphoto/101.jpg', 500, 'Sajid', 'Sajid', 2111111111, 'Dhaka', 'Edit by Chobiwala production', 'Conceptual'),
(102, 'Conceptual photo', 'latestphoto/102.jpg', 300, 'Badrul', 'Badrul', 211111113, 'Dhaka', 'Edit by Chobiwala production', 'Conceptual'),
(103, 'A baby with black headcap', 'latestphoto/103.jpg', 300, 'Farzana', 'Farzana', 211111114, 'Gazipur', 'Edit by Chobiwala production', 'Conceptual'),
(104, 'Baby with pink dress', 'latestphoto/104.jpg', 400, 'Daniel', 'Daniel', 0, '', '', ''),
(105, 'coneptual photo with baby', 'latestphoto/105.jpg', 250, 'Nur Hasan', 'Nur Hasan', 0, '', '', 'Conceptual'),
(106, 'model with umbrella', 'latestphoto/106.jpg', 400, 'Sajid', 'Sajid', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `modelingphoto`
--

CREATE TABLE `modelingphoto` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `licence` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modelingphoto`
--

INSERT INTO `modelingphoto` (`id`, `name`, `image`, `price`, `photographer`, `credit`, `licence`, `location`, `info`, `collection`) VALUES
(41, 'Sahid Afridi modeling', 'modelingphoto/41.jpg', 500, 'Sajid', 'Sajid', 2111111111, 'Dhaka', 'Edit by Chobiwala production', 'Conceptual'),
(42, 'Sahid Afridi on chair', 'modelingphoto/42.jpg', 300, 'Badrul', 'Badrul', 211111113, 'Dhaka', 'Edit by Chobiwala production', 'Conceptual'),
(43, 'sunligt modeling', 'modelingphoto/43.jpg', 300, 'Farzana', 'Farzana', 211111114, 'Gazipur', 'Edit by Chobiwala production', 'Conceptual'),
(44, 'Sunlight and umbrella modeling', 'modelingphoto/44.jpg', 400, 'Daniel', '', 0, '', '', ''),
(45, 'Nobel model', 'modelingphoto/45.jpg', 250, 'Nur Hasan', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pg` varchar(255) NOT NULL,
  `apg` varchar(255) NOT NULL,
  `whour` int(5) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `pg`, `apg`, `whour`, `price`, `image`, `description`) VALUES
(1, 'Wedding Photography ', 'Sajid', 'Farzana', 8, 24999, 'package/1.jpg', 'Photographer : One top rated and one associate photographer <br>\r\n						Number of pictures : Unlimited<br>\r\n						Specially Edited Photos : 100 Copies <br>\r\n						Matte Prints : 100 Copies <br>\r\n						Print : 4R(4\"*6\") <br>\r\n						Duration : 6h <br>'),
(2, 'Wedding Photography', 'Phonix', 'Bob', 2, 20000, 'package/2.jpg', 'Photographer : One top rated and one associate photographer <br>\r\n						Number of pictures : Unlimited<br>\r\n						Specially Edited Photos : 100 Copies <br>\r\n						Matte Prints : 100 Copies <br>\r\n						Print : 4R(4\"*6\") <br>\r\n						Duration : 6h <br>'),
(3, 'Wedding Photography', 'Bob', 'Nur Hasan', 5, 30000, 'package/3.jpg', 'Photographer : One top rated and one associate photographer <br>\r\n						Number of pictures : Unlimited<br>\r\n						Specially Edited Photos : 100 Copies <br>\r\n						Matte Prints : 100 Copies <br>\r\n						Print : 4R(4\"*6\") <br>\r\n						Duration : 6h <br>'),
(4, 'Commercial Photography', 'Badrul', 'Phonix', 5, 24999, 'package/4.jpg', 'Photographer : One top rated and one associate photographer <br>\r\n						Number of pictures : Unlimited<br>\r\n						Specially Edited Photos : 100 Copies <br>\r\n						Matte Prints : 100 Copies <br>\r\n						Print : 4R(4\"*6\") <br>\r\n						Duration : 6h <br>'),
(5, 'Commercial Photography', 'Bob', 'Sajid', 5, 20000, 'package/5.jpg', 'Photographer : One top rated and one associate photographer <br>\r\n						Number of pictures : Unlimited<br>\r\n						Specially Edited Photos : 100 Copies <br>\r\n						Matte Prints : 100 Copies <br>\r\n						Print : 4R(4\"*6\") <br>\r\n						Duration : 6h <br>'),
(6, 'Commercial Photography', 'Farzana', 'Sajid', 5, 19000, 'package/6.jpg', 'Photographer : One top rated and one associate photographer <br>\r\n						Number of pictures : Unlimited<br>\r\n						Specially Edited Photos : 100 Copies <br>\r\n						Matte Prints : 100 Copies <br>\r\n						Print : 4R(4\"*6\") <br>\r\n						Duration : 6h <br>');

-- --------------------------------------------------------

--
-- Table structure for table `package_order`
--

CREATE TABLE `package_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` text NOT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_order`
--

INSERT INTO `package_order` (`id`, `order_id`, `name`, `email`, `mobile`, `address`, `price`) VALUES
(18, 1, 'sajid', 'ahamedsajid81@gmail.com', 2147483647, 'bashundhara, dhaka, ', 24999),
(19, 6, 'sohan', 'sajid@gmail.com', 2147483647, 'bashundhara, Dhaka, ', 19000),
(20, 5, 'Mickey', 'ahamedsajid18@gmail.com', 2147483647, 'bashundhara, dhaka, ', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id`, `name`, `phone`, `email`, `address`, `type`, `image`) VALUES
(1, 'Shinoda', 85432, 'shinoda.m@gmail.com', 'Ontorio,Canada', 'Wedding', 'photographers/shinoda.jpg'),
(2, 'Bob', 826544, 'bob.m@yahoo.com', 'Uttara, Aus', 'Product', 'photographers/bob.jpg'),
(3, 'Daniel', 191079, 'daniel@gmail.com', 'Gulshan,Dhaka', 'Advertisement', 'photographers/daniel.jpg'),
(4, 'Nur Hasan', 94444, 'nur@ymail.com', 'malibag,Dhaka', 'wedding', 'photographers/nurHasan.jpg'),
(5, 'Badrul', 17999999, 'badrul@yahoo.com', 'mirpur,Dhaka', 'Advertisement', 'photographers/badrul.jpg'),
(6, 'Farzana', 1788888888, 'farzana@gmail.com', 'Bashundhara, Dhaka', 'Conceptual', 'photographers/farzana.jpg'),
(7, 'Sajid', 1910797433, 'sajid.ahmed171@northsouth.edu', 'Uttarkhan, Dhaka', 'Wedding', 'photographers/sajid.jpg'),
(10, 'Jibon', 1910888888, 'jibon@gmail.com', '123,dhaka', 'Conceptual', 'photographers/sajid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `single_photo_sold`
--

CREATE TABLE `single_photo_sold` (
  `id` int(100) NOT NULL,
  `img_id` int(100) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `card_number` int(50) NOT NULL,
  `price` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_photo_sold`
--

INSERT INTO `single_photo_sold` (`id`, `img_id`, `cname`, `email`, `mobile`, `card_number`, `price`) VALUES
(30, 42, 'sumu', 'ahamedsajid81@gmail.com', 2147483647, 12345678, 300),
(31, 25, 'sumu', 'sajid@gmail.com', 2147483647, 12345678, 250),
(32, 106, 'Rajib', 'rajib@gmail.com', 1910797433, 12345678, 400);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `image`) VALUES
(1, 'sajid', 'ahmed', 'sajid_ahmed', 's@gmail.com', '123456', '12-12-2019', NULL),
(2, 'Sohan', 'Ahmed', 'sohan_ahmed', 'Sohan@gmail.com', '30220cfd902d347400efcfef5ca9d655', '2019-12-15', NULL),
(3, 'Rahim', 'Uddin', 'rahim_uddin', 'Rahim@gmail.com', 'fd9657169642ed6b46bd77332aa7f11a', '2019-12-15', NULL),
(4, 'Rajib', 'Uddin', 'rajib_uddin', 'Rajib@gmail.com', 'xahid', '2019-12-16', NULL),
(5, 'Jabid', 'Rahman', 'jabid_rahman', 'Cool@gmail.com', 'sajid1278', '2019-12-16', NULL),
(6, 'Jibon', 'Saha', 'jibon_saha', 'Jibon@gmail.com', 'sajid1278', '2019-12-16', NULL),
(7, 'Sajid', 'Ahmed', 'sajid_ahmed_1', 'Sajid1@gmail.com', 'Sajid1278', '2019-12-16', 'sajid.jpg'),
(8, 'Rahim', 'Ahmed', 'rahim_ahmed', 'Rahim1@gmail.com', 'rahim12', '2019-12-18', NULL),
(9, 'Farzana', 'Jahan', 'farzana_jahan', 'Jahan@gmail.com', 'Farzana123', '2020-02-04', NULL),
(10, 'Sumaiya', 'Ahmed', 'sumaiya_ahmed', 'Sumu@gmail.com', 'sumu12', '2020-02-05', NULL),
(11, 'Farzana', 'Zahan', 'farzana_zahan', 'Farzana@gmail.com', 'farzana1', '2020-04-09', NULL),
(12, 'Abul', 'Ahmed', 'abul_hasan', 'Abul@abul.com', 'abul1', '2020-04-09', NULL),
(13, 'Chobiwala', 'admin', 'admin', 'chobiwala@admin.com', 'admin', '2020-04-09', 'admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `babiesphoto`
--
ALTER TABLE `babiesphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conceptualphoto`
--
ALTER TABLE `conceptualphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestphoto`
--
ALTER TABLE `latestphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelingphoto`
--
ALTER TABLE `modelingphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_order`
--
ALTER TABLE `package_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_photo_sold`
--
ALTER TABLE `single_photo_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `babiesphoto`
--
ALTER TABLE `babiesphoto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `conceptualphoto`
--
ALTER TABLE `conceptualphoto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `latestphoto`
--
ALTER TABLE `latestphoto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `modelingphoto`
--
ALTER TABLE `modelingphoto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `package_order`
--
ALTER TABLE `package_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `single_photo_sold`
--
ALTER TABLE `single_photo_sold`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
