-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 04:39 PM
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
-- Database: `web_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first Name` varchar(50) NOT NULL,
  `last Name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(10) NOT NULL DEFAULT 'User',
  `accepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first Name`, `last Name`, `email`, `phone`, `password`, `created_at`, `updated_at`, `role`, `accepted`) VALUES
(1, 'Mohaisin', 'Shahadu', 'muhaisin555@gmail.com', '4373357641', '$2y$10$TT17h3XRZ4A4e51LugqZhufx8hOmZFHyppLSmbAbwJo9M4rNLiqt2', '2024-11-13 14:41:52', '2024-11-13 14:41:52', 'User', 0),
(3, 'Mohaisina', 'Shahadue', 'muhaisin55523@gmail.com', '437335764123', '$2y$10$9oD.1s1ptvMwiNDTzKelh.ft.rSXTQYXXjloQkVEuXQpOG6qsaH2u', '2024-11-13 14:49:13', '2024-11-13 14:49:13', 'User', 0),
(4, 'megh', 'shah', 'something@gamil.com', '12516327369', '$2y$10$OD.z0rUjpxBNNKvR3cMm3exMZmHhmyiD/1YV0oan34IY5fHINQVcq', '2024-11-13 15:14:07', '2024-11-13 15:14:07', 'User', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
