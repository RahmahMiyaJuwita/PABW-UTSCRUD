-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2020 at 12:08 PM
-- Server version: 10.1.44-MariaDB-cll-lve
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensus`
--

CREATE TABLE `sensus` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensus`
--

INSERT INTO `sensus` (`id`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `nama_anak`, `alamat`) VALUES
(5, 'Juhasril', 'PNS', 'Farida', 'Ibu Rumah Tangga', 'Miya & Maya', 'Jl. Karyasari'),
(6, 'Rakil', 'Pengusaha', 'Kasmi', 'pengusaha', 'jihan & zahra', 'Jl. Karyasari'),
(7, 'Aji Kusuma', 'Camat', 'Dewi', 'PNS', 'Suja, Nindya, Allisa, Aurora', 'Jl. Karyasari');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'abib', 'abib', '$2y$10$bZCPznoYndzxZZy3OVm9ee0H17aifoIQHnuTb4F9U4QpAfcQdkW9i', 'habibsayyid68@gmail.com'),
(2, 'janaria s', 'janas', '$2y$10$68pmI2Dbx.yH6T1UkDTjyuRy8bLlu9ohzEj6A6r7YHyb8SlWItw.O', ''),
(3, 'a', 'a', '$2y$10$vR0rZ2vZ9EyjuhzWLJGYh.l.G9PNAwXvNMvsuOC.v9NiXzrSlF1sG', ''),
(4, 'Rahmah Miya', 'R', '$2y$10$OmHRdhJ6kVk0n1aiJuljQuqu.awDgP883PH9cbN6vcBFpFrQlVSpa', 'rahmahmia18@gmail.com'),
(5, 'Rahmah Miya', 'juwi', '$2y$10$Y/C1UG2odLx0O2lEyw3ho.rpYb4lpUACSnsYB.8lyesyQBFMqJEgq', 'rahmahmia18@gmail.com'),
(6, 'Rahmah Miya', 'juwi', '$2y$10$UGpAksrw8VCnK7O24SibjeIrfEqg/6dp1KxG67oUstqaLFfRIWdxm', 'rahmahmia18@gmail.com'),
(7, 'Devi juli', 'dedep', '$2y$10$T32NrlJh0p5banjdAnRcpehFvoRK7tXukwIB7grt0j4wYnmNkrZnm', 'devijulisca@gmail.com'),
(8, 'Mori Hovipah', 'mr_hvp', '$2y$10$PutXxXcsvTJNuj6bVP7L6.4jcKrpVFC/UuisStpeKu7uGWh3XqB3S', ''),
(9, 'janas', 'jariasafitri', '$2y$10$GFxLjO76Csqbk5N2Mcez/uO9uicVWbAH5pc18Des63zvqib5k8I86', 'janas@gmail.com'),
(10, 'dani', 'daniii', '$2y$10$veKS6ncQBZcZG8ByrnwQCe0FuX2m.pH0Ff2nh19dHCg9VI9Oq8Kfy', 'dani@gmail.com'),
(11, 'ayam', 'hulk', '$2y$10$sxkD20egy31gy4qLXN0FLemwzLTrN0.jJdjT1Qir8vD.T1Rl3h5Jy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensus`
--
ALTER TABLE `sensus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensus`
--
ALTER TABLE `sensus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
