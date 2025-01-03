-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 04:51 PM
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
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `guests` int(3) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 0, 'HAMZAH NAJIB', 'hamzanajibo44@gmail.com', 1163944323, 'batu pahat', 'penang', 3, '2025-01-30', '2025-01-14'),
(2, 0, 'abubakar', 'abubakar123@gmail.com', 1137975367, 'Nigeria ', 'Langkawi', 2, '2025-01-23', '2025-01-31'),
(3, 0, 'Ahmed Esmail', 'AhmedEsmail11@gmail.com', 179443526, 'yemen', 'Penang ', 4, '2025-10-15', '2025-10-23'),
(4, 0, 'Abubakar', 'Sadiq123@gmail.com', 1137975367, 'Nigeria', 'Melaka', 6, '2025-01-15', '2025-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'hamzah', 'hamzanajibo44@gmail.com', '81a76a8ed7a973b4d954aabf7d7f1a7c'),
(2, 'Hamzah', 'hamzanajibo77@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'manga', 'mangasadeeq@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'admin', 'admin@com', '202cb962ac59075b964b07152d234b70'),
(5, 'Ahmed', 'AhmedEsmail11@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Sadiq', 'Sadiq123@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
