-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2026 at 03:00 PM
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
-- Database: `collage_complaint_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `complaint` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `prn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `category`, `complaint`, `status`, `prn`) VALUES
(175, 'abhishek raj', 'Other Issue', 'hamko probelm hai ladki se ', 'Approved', ''),
(176, 'abhishek raj', 'Other Issue', 'hamko probelm hai ladki se ', 'Approved', ''),
(177, 'aditya raj', 'Classroom', 'hamko probelm hai ladki se ', 'Pending', ''),
(178, 'aditya raj', 'Classroom', 'hamko probelm hai ladki se ', 'Pending', ''),
(179, 'aditya raj', 'Classroom', 'hamko probelm hai ladki se ', 'Pending', ''),
(180, 'aditya raj', 'Classroom', 'hamko probelm hai ladki se ', 'Pending', ''),
(181, 'aditya raj', 'Classroom', 'hamko probelm hai ladki se ', 'Pending', ''),
(182, 'aditya raj', 'Classroom', 'hamko probelm hai ladki se ', 'Pending', ''),
(186, NULL, 'Ragging', 'okay', 'Pending', '240'),
(187, NULL, 'Ragging', 'okay', 'Pending', '240'),
(188, NULL, 'Classroom', 'ok', 'Pending', '250'),
(189, NULL, 'Classroom', 'okay', 'your problem approved', '240205011055'),
(190, NULL, 'Classroom', 'okay', 'Approved', '240205011092'),
(191, NULL, 'Teacher Issue', 'okay', 'your problem is approved', '240205011067'),
(192, NULL, 'Teacher Issue', 'okay', 'aap ka issue slove ker diya h', '2402050111976'),
(193, NULL, 'Teacher Issue', 'okay', 'aap ka issue slove ker diya h', '2402050111976'),
(194, NULL, 'Ragging', 'your my is bcak seesionn peroinh', 'Pending', '240205011092'),
(195, NULL, 'Ragging', 'your my is bcak seesionn peroinh', 'Pending', '240205011092'),
(196, 'vikash sing', 'Ragging', 'your my is bcak seesionn peroinh', 'Pending', '240205011092'),
(197, 'mono', 'Ragging', 'your my is bcak seesionn peroinh', 'Approved', '240205011092');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
