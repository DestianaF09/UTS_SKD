-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 03:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skdp_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `nisn` char(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `bindo` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `ips` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `nisn`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `bindo`, `mtk`, `ipa`, `ips`) VALUES
(1, '36564575746', 'Destiana', 'JL raya kebun sawit,Jakarta Selatan', 'Perempuan', 'Islam', 95, 100, 92, 95),
(2, '1', '1', '1', '1', '1', 1, 1, 1, 1),
(3, 'asdasd', 'adsadasd', 'kjhgiugbii', 'laki-lakai', '1', 11, 4, 3, 4),
(4, '12345678', 'Destiana', 'mojosongo', 'perempuan', '1', 90, 90, 90, 90),
(5, 'dandy', 'dandy', 'sekarpace', 'laki-lakai', '1', 80, 80, 80, 80),
(6, '12345678', 'Arif', 'Sragen', 'laki-lakai', 'kristen', 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rule` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `rule`) VALUES
(1, 'Destiana', 'destiana', 'dastian@gmail.com', '8066e397dc7ce4d688b7af302cdd6842', 'user'),
(2, 'Destiana', 'destiana', 'destianafs_09@studet.uns.ac.id', '6444748e0152396f71cd0786d2190eec', 'user'),
(3, 'Destiana', 'destiana', 'destianafs_09@studet.uns.ac.id', '88c103198b7332753c65257e11fde1f3', 'user'),
(4, 'Destiana', 'destiana', 'desti@gmail.com', '2e7ca8e54ea7c268359e451a952d985d', 'user'),
(5, 'Admin', 'admin', 'admin@gmail.com', '2e7ca8e54ea7c268359e451a952d985d', 'admin'),
(6, 'Arif', 'arif', 'Arif@gmail.com', '2e7ca8e54ea7c268359e451a952d985d', 'user'),
(7, 'Rohman', 'rohman', 'Rohman@gmail.com', '06b229420e965dd0688178cb788b3ba4', 'user'),
(8, 'Galih', 'galih', 'Galih@gmail.com', '0e4a35eb081effab2d42bb6b18f3947b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
