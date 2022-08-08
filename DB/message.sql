-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 05:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `inboxs`
--

CREATE TABLE `inboxs` (
  `meg_id` int(11) NOT NULL,
  `meg` text NOT NULL,
  `incoming` int(10) NOT NULL,
  `outgoing` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inboxs`
--

INSERT INTO `inboxs` (`meg_id`, `meg`, `incoming`, `outgoing`) VALUES
(1, 'hello', 1, 2),
(2, 'kemon acho', 1, 3),
(3, 'hi', 1, 2),
(4, 'hi ridoy', 2, 1),
(5, 'How are you?', 2, 1),
(6, 'I am fine and you?', 1, 2),
(7, 'I am also fine', 2, 1),
(8, 'What are you doing?', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `img`, `active`) VALUES
(1, 'sahos', 'sahos@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1659925146528.jpg', 1),
(2, 'ridoy', 'ridoy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1659928495485.jpg', 2),
(3, 'rimi', 'rimi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1659928551593.jpg', 2),
(4, 'Simu', 'simu@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1659928984696.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inboxs`
--
ALTER TABLE `inboxs`
  ADD PRIMARY KEY (`meg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inboxs`
--
ALTER TABLE `inboxs`
  MODIFY `meg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
