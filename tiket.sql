-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(4) NOT NULL,
  `penyedia` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `kursi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `penyedia`, `waktu`, `jurusan`, `kelas`, `harga`, `kursi`) VALUES
(14, 'sriwijaya', '2021-01-01', 'bali', 'ekonomi', 5000, 500),
(15, 'garuda', '2021-01-08', 'jogjkarta', 'ekonomi', 100, 12),
(16, 'first travel', '2021-01-16', 'jakarta', 'bisnis', 1000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT 2,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_level`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 1, 'admin', 'admin@gm.co', '$2y$10$PLlowVjWFJKiAMXPUPRHJ.TWxDBIYL/RYpd9xyfJ62Wpdd9NyP51S', '2020-12-07 07:59:01'),
(3, 2, 'asep', 'abc@gmail.com', '$2y$10$F67seDJAuPNPy/dYfc9tp.Vxvt.DhnC1icsfCZtnCgaN1d9wtvp6K', '2020-12-07 08:01:19'),
(4, 2, 'buds', 'buds@mail.com', '$2y$10$PXPFmINOjvp9ZV6W8KWRze2mlGmYAP6lZbZ/8if1Qd/u/hp27/40S', '2020-12-08 03:26:22'),
(5, 2, 'asd', 'asd@gm.co', '$2y$10$hmmrVUNw7ukev1adYQNVs.gmVug0wiYQWIk7DgVeQmTsZyXIzXzGq', '2021-01-05 07:53:32'),
(6, 2, 'budi su budu', 'budi@ymail.com', '$2y$10$iewfcypPi1WHiO2UzHMhHOm/f0Hm77.14vTOS4iJRbDTJzMHxzow.', '2021-01-15 07:28:03'),
(7, 2, 'praktek', 'prak@gmail.com', '$2y$10$o2awigxS9Zuy1/O0ve7rf.dgHomWVKMcom0Y/jXkPpeKnb4YcVB3m', '2021-01-15 10:21:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
