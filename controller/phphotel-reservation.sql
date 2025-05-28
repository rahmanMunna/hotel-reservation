-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 09:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel-reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_no` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `bed_type` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price_per_night` int(11) NOT NULL,
  `is_available` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `amenties` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_no`, `room_type`, `bed_type`, `capacity`, `price_per_night`, `is_available`, `floor`, `amenties`) VALUES
(3, 'rm-1', 101, 'Single', 'Single', 1, 1200, 1, 1, 'WIFI,TV,AC'),
(4, 'rm-2', 202, 'Double', 'Queen', 2, 2000, 1, 2, 'WIFI,TV'),
(5, 'rm-3', 203, 'Double', 'King', 2, 2200, 1, 2, 'WIFI,TV,Mini Fridge'),
(6, 'rm-4', 301, 'Suite', 'King', 4, 4000, 1, 3, 'WIFI,TV,AC,Jacuzzi,Mini Bar'),
(7, 'rm-5', 302, 'Suite', 'Queen', 4, 3700, 0, 3, 'WIFI,TV,AC,Kitchenette'),
(8, 'rm-6', 102, 'Single', 'Single', 1, 1100, 1, 1, 'WIFI,TV'),
(9, 'rm-7', 201, 'Double', 'Double', 2, 1800, 1, 2, 'WIFI,TV,Balcony'),
(10, 'rm-8', 303, 'Suite', 'King', 3, 3900, 1, 3, 'WIFI,TV,AC,Bathrobe'),
(11, 'rm-9', 103, 'Single', 'Single', 1, 1250, 1, 1, 'WIFI,TV,Desk Lamp'),
(12, 'rm-10', 204, 'Double', 'Queen', 2, 2100, 0, 2, 'WIFI,TV,Mini Fridge');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_id` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `is_available` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_id`, `category`, `service_name`, `price`, `is_available`, `description`) VALUES
(1, 'fd-1', 'Food & Drinks', 'Pancakes Breakfast', 15, 1, 'Fluffy pancakes with syrup.'),
(2, 'fd-2', 'Food & Drinks', 'Fresh Juice', 5, 1, 'Orange or Apple Juice.'),
(3, 'fd-3', 'Food & Drinks', 'Continental Breakfast', 18, 1, 'Croissant, coffee, and fruit.'),
(4, 'fd-4', 'Food & Drinks', 'Lunch Combo', 25, 1, 'Sandwich, salad, and drink.'),
(5, 'fd-5', 'Food & Drinks', 'Gourmet Dinner', 70, 1, 'Three-course chef\'s dinner.'),
(6, 'fd-6', 'Food & Drinks', 'Midnight Snack', 10, 1, 'Cookies and milk delivered.'),
(7, 'sw-1', 'Spa & Wellness', '30-min Back Massage', 40, 1, 'Relaxing massage therapy.'),
(8, 'sw-2', 'Spa & Wellness', 'Sauna Session', 30, 1, '45 minutes in sauna.'),
(9, 'sw-3', 'Spa & Wellness', 'Facial Treatment', 50, 1, 'Rejuvenating skin therapy.'),
(10, 'sw-4', 'Spa & Wellness', 'Aromatherapy', 35, 1, 'Essential oils relaxation.'),
(11, 'sw-5', 'Spa & Wellness', 'Yoga Class', 20, 1, 'Morning outdoor yoga session.'),
(12, 'sw-6', 'Spa & Wellness', 'Hot Stone Massage', 55, 1, 'Therapeutic hot stone massage.'),
(13, 'lt-1', 'Local Tours', 'City Sightseeing', 60, 1, '3-hour bus tour around the city.'),
(14, 'lt-2', 'Local Tours', 'River Cruise', 50, 1, '2-hour river cruise with snacks.'),
(15, 'lt-3', 'Local Tours', 'Historical Walk', 30, 1, 'Guided walk through old town.'),
(16, 'lt-4', 'Local Tours', 'Museum Tour', 40, 1, 'Visit top museums with a guide.'),
(17, 'lt-5', 'Local Tours', 'Wine Tasting', 65, 1, 'Local vineyard wine tasting tour.'),
(18, 'lt-6', 'Local Tours', 'Mountain Hike', 45, 1, 'Half-day guided mountain hike.'),
(19, 'ra-1', 'Room Amenities', 'Extra Pillow', 0, 1, 'Request an extra pillow.'),
(20, 'ra-2', 'Room Amenities', 'Baby Crib', 0, 1, 'Baby crib for room.'),
(21, 'ra-3', 'Room Amenities', 'Mini Fridge', 10, 1, 'Request a mini fridge.'),
(22, 'ra-4', 'Room Amenities', 'Microwave', 10, 1, 'Microwave for room use.'),
(23, 'ra-5', 'Room Amenities', 'Extra Towels', 0, 1, 'Additional bath towels.'),
(24, 'ra-6', 'Room Amenities', 'Bathrobe', 5, 1, 'Request a cozy bathrobe.');

-- --------------------------------------------------------

--
-- Table structure for table `services_requests`
--

CREATE TABLE `services_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `req_id` varchar(50) NOT NULL,
  `request_time` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_service` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_requests`
--

INSERT INTO `services_requests` (`id`, `user_id`, `room_id`, `service_id`, `req_id`, `request_time`, `status`, `quantity`, `price_per_service`, `total_price`) VALUES
(1, 1, 3, 1, 'req-1', '2025-05-15', 'pending', 2, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `email`, `phone`, `first_name`, `last_name`, `dob`, `role`, `password`) VALUES
(1, 'g-1', 'guest@gmail.ccom', 1604518573, 'Mr', 'Guest', '2001-10-11', 'guest', 'Guest#1234'),
(2, 'g-2', 'rahim.hossain@gmail.com', 1711223344, 'Rahim', 'Hossain', '1995-05-14', 'guest', 'Guest#1234'),
(3, 'g-3', 'karim.uddin@gmail.com', 1812345678, 'Karim', 'Uddin', '1990-02-20', 'guest', 'Guest#1234'),
(4, 'g-4', 'sumaiya.akter@gmail.com', 1987654321, 'Sumaiya', 'Akter', '1998-08-09', 'guest', 'Guest#1234'),
(5, 'g-5', 'sabbir.ahmed@gmail.com', 1678904561, 'Sabbir', 'Ahmed', '1987-11-30', 'guest', 'Guest#1234'),
(6, 'g-6', 'nishi.parvin@gmail.com', 1700334455, 'Nishi', 'Parvin', '1993-03-17', 'guest', 'Guest#1234'),
(7, 'g-7', 'tamim.iqbal@gmail.com', 1855667788, 'Tamim', 'Iqbal', '1991-06-23', 'guest', 'Guest#1234'),
(8, 'g-8', 'mahmuda.sultana@gmail.com', 1999887766, 'Mahmuda', 'Sultana', '2000-01-05', 'guest', 'Guest#1234'),
(9, 'g-9', 'shuvo.rahman@gmail.com', 1633445566, 'Shuvo', 'Rahman', '1985-07-12', 'guest', 'Guest#1234'),
(10, 'g-10', 'tania.akter@gmail.com', 1722334455, 'Tania', 'Akter', '1997-09-03', 'guest', 'Guest#1234'),
(11, 'a-1', 'admin@gmail.com', 1715308633, 'Mr', 'Admin', '1997-05-10', 'admin', 'admin#1234'),
(12, 'e-1', 'employee@gmail.com', 1956789765, 'Mr', 'Employee', '2000-05-04', 'employee', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_requests`
--
ALTER TABLE `services_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `room_id_fk` (`room_id`),
  ADD KEY `service_id_fk` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `services_requests`
--
ALTER TABLE `services_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services_requests`
--
ALTER TABLE `services_requests`
  ADD CONSTRAINT `services_requests_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `services_requests_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `services_requests_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
