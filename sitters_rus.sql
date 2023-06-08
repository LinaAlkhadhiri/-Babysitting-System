-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2022 at 05:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitters_rus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(20) NOT NULL,
  `offer_id` int(20) NOT NULL,
  `request_id` int(20) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `sitter_id` int(20) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `booking_time` varchar(50) NOT NULL,
  `task_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `offer_id`, `request_id`, `parent_id`, `sitter_id`, `booking_date`, `booking_time`, `task_status`) VALUES
(2, 2, 4, 2, 1, '06-11-2022', '09:02 PM', 1),
(3, 3, 2, 4, 1, '07-11-2022', '10:44 PM', 1),
(4, 5, 1, 4, 1, '08-11-2022', '10:47 PM', 0),
(5, 6, 2, 4, 1, '09-11-2022', '11:09 PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_request`
--

CREATE TABLE `job_request` (
  `req_id` int(20) NOT NULL,
  `kidfirst_name` varchar(100) NOT NULL,
  `kidlast_name` varchar(100) NOT NULL,
  `kidgender` varchar(50) NOT NULL,
  `kidage` int(20) NOT NULL,
  `service` text NOT NULL,
  `duration` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `status` int(20) NOT NULL,
  `request_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_request`
--

INSERT INTO `job_request` (`req_id`, `kidfirst_name`, `kidlast_name`, `kidgender`, `kidage`, `service`, `duration`, `user_id`, `status`, `request_date`) VALUES
(1, 'sara', 'khalid', 'female', 2, 'infants,meals', 4, 2, 1, '06-11-2022'),
(2, 'reema', 'saud', 'female', 5, 'infants,meals,homework,laundary', 6, 2, 1, '06-11-2022'),
(4, 'Alii', 'alii', 'male', 4, 'infants,meals', 4, 4, 1, '08-11-2022'),
(5, 'saraa', 'aalli', 'female', 6, 'homework,laundary', 6, 2, 0, '08-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(20) NOT NULL,
  `request_id` int(20) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `sitter_id` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `request_id`, `parent_id`, `sitter_id`, `price`, `status`) VALUES
(1, 1, 2, 1, 100, 2),
(2, 4, 5, 3, 500, 0),
(3, 2, 4, 1, 653, 1),
(5, 2, 2, 3, 323, 0),
(6, 4, 4, 1, 300, 1),
(7, 4, 4, 1, 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(20) NOT NULL,
  `booking_id` int(20) NOT NULL,
  `sitter_id` int(20) NOT NULL,
  `stars` int(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `booking_id`, `sitter_id`, `stars`, `comment`) VALUES
(1, 2, 1, 3, 'very good services'),
(2, 5, 3, 1, 'excellent job'),
(3, 3, 1, 3, 'great service'),
(4, 4, 3, 4, 'friendly babysitter'),
(5, 2, 1, 5, 'thank you so much'),
(6, 2, 1, 4, 'hhhdds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `ID_number` varchar(20) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `city`, `location`, `ID_number`, `phone_number`, `age`, `gender`, `bio`, `image`, `user_type`) VALUES
(1, 'Dinaahhh2q', 'Alromih', 'dina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'riyadh', '', '2345678', '033334444333333', 22, 'female', '                                                                            hi', 'images/Dinaahhh2q.jpg', 1),
(2, 'ahad', 'aa', 'ahaad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'jeddah', 'king fahad', '', '345678765', 0, 'female', 'duiasdguoasg ouasgduoafsudofasodf', 'images/adiii.jpg', 2),
(3, 'reef', 'althunayan', 'reef@gmail.come', '827ccb0eea8a706c4c34a16891f84e7b', 'riyadh', 'exit 5', '1234567', '03222222222', 30, 'male', 'i\'m a sitter', 'images/Alina.jpg', 1),
(4, 'leena', 'leen', 'leena@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'jeddah', 'king abdullah', '', '23456', 0, 'female', '', 'images/alina plina.jpg', 2),
(5, 'latifah', 'lll', 'admin@agemd.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Riyadh', 'exit 8', '', '123344555', 0, 'female', '', 'images/ubaid.jpg', 2),
(7, 'tryd', 'test', 'test@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'riyadh', '', '3333', '4444', 44, '', '              ', 'images/tryd.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `offer_id` (`offer_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `sitter_id` (`sitter_id`);

--
-- Indexes for table `job_request`
--
ALTER TABLE `job_request`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `sitter_id` (`sitter_id`),
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `sitter_id` (`sitter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `req_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`offer_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`request_id`) REFERENCES `job_request` (`req_id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`sitter_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `job_request`
--
ALTER TABLE `job_request`
  ADD CONSTRAINT `job_request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`sitter_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `offers_ibfk_3` FOREIGN KEY (`request_id`) REFERENCES `job_request` (`req_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`sitter_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
