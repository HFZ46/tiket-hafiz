-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 02:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`, `created_at`) VALUES
(10, 'banghafiz0107@gmail.com', 'hafiz', '$2y$10$Z/LMBphqmRmbIqLzubT3EeV9VgyqVt1OwjVpVzqPa9ZOU9qAh1xAO', '2025-02-26 00:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `akun_mall`
--

CREATE TABLE `akun_mall` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(231) NOT NULL,
  `nama_mall` varchar(231) NOT NULL,
  `nik` varchar(231) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_mall`
--

INSERT INTO `akun_mall` (`id`, `email`, `password`, `nama_mall`, `nik`) VALUES
(1, 'cytidryu123@gmail.com', '$2y$10$S7gbpwrlweXxex2rH3B2neoWOgDfVtRA5.cdUiw7PKEyFMD6CXlWq', 'pesona square', '888888');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` varchar(250) NOT NULL,
  `banner` varchar(231) NOT NULL,
  `trailer` varchar(231) NOT NULL,
  `nama_film` varchar(231) NOT NULL,
  `judul` longtext NOT NULL,
  `total_menit` varchar(231) NOT NULL,
  `usia` varchar(231) NOT NULL,
  `genre` varchar(231) NOT NULL,
  `dimensi` varchar(231) NOT NULL,
  `Producer` varchar(231) NOT NULL,
  `Director` varchar(231) NOT NULL,
  `Writer` varchar(231) NOT NULL,
  `Cast` varchar(231) NOT NULL,
  `Distributor` varchar(231) NOT NULL,
  `harga` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `poster`, `banner`, `trailer`, `nama_film`, `judul`, `total_menit`, `usia`, `genre`, `dimensi`, `Producer`, `Director`, `Writer`, `Cast`, `Distributor`, `harga`) VALUES
(5, 'uploads/poster/OIP.jpeg', 'uploads/banner/OIP.jpeg', 'uploads/trailer/WIN_20230913_13_12_34_Pro.mp4', 'doraemon', 'ga', '30', '13', 'Action', '2D', 'dada', 'da', 'ga', 'gafg', 'ga', 'ga'),
(8, 'uploads/poster/download.jpg', 'uploads/banner/download.jpg', 'uploads/trailer/WIN_20230913_13_12_34_Pro.mp4', 'hxh', 'fnjafa', '30', '13', 'Action', '2D', 'kurai', 'kui', 'kulai', 'krei', 'shai', '35000'),
(11, 'uploads/poster/poster_transformers.jpg', 'uploads/banner/banner_transformer.jpg', 'uploads/trailer/WIN_20230913_13_12_34_Pro.mp4', 'Transformer: The Last Knight', 'dimula dari aar nyamper wildan', '90', '17', 'Action', '2D', 'atar', 'vito', 'fajar', 'bayu', 'bayuu', '35000'),
(12, 'uploads/poster/poster_transformers.jpg', 'uploads/banner/banner_transformer.jpg', 'uploads/trailer/WIN_20230913_13_12_34_Pro.mp4', 'Transformer: The Last Knight', 'dimula dari aar nyamper wildan', '90', '17', 'Comedy', '2D', 'atar', 'vito', 'fajar', 'FAFA', 'FAFA', '20000'),
(14, 'uploads/poster/elden.png', 'uploads/banner/banner_transformer.jpg', 'uploads/trailer/WIN_20230913_13_12_34_Pro.mp4', 'elden ', 'dimula dari aar nyamper wildan', '90', '17', 'Erotic', '2D', 'atar', 'vito', 'fajar', 'dnjdnj', 'www', '40000'),
(15, 'uploads/poster/hunter.jpeg', 'uploads/banner/huntero.jpeg', 'uploads/trailer/videoplayback.mp4', 'hunter x hunter', 'Hunter x Hunter adalah anime dan manga karya Yoshihiro Togashi yang mengikuti petualangan Gon Freecss, seorang anak yang bercita-cita menjadi Hunter untuk menemukan ayahnya. Dalam perjalanannya, ia bertemu teman-teman seperti Killua, Kurapika, dan Leorio, serta menghadapi berbagai tantangan, termasuk Ujian Hunter, Phantom Troupe, Greed Island, dan semut Chimera. Seri ini terkenal dengan alur cerita kompleks, karakter mendalam, dan sistem kekuatan unik bernama Nen. Meskipun manga sering hiatus, Hunter x Hunter tetap menjadi salah satu seri shonen paling populer dan berpengaruh.', '30', 'SU', 'Adventure,Action', '2D', 'Naokazu , Atsushi , Tomoko ', 'Hiroshi Kōjina', 'Yoshihiro Togashi (mangaka)', 'Gon Freecss: Megumi Han Killua Zoldyck: Mariya Ise Kurapika: Miyuki Sawashiro Leorio Paradinight: Keiji Fujiwara Hisoka: Daisuke Namikawa', 'Nippon Television Network (NTV), Viz Media (untuk distribusi di luar Jepang)', '35000');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_film`
--

CREATE TABLE `jadwal_film` (
  `id` int(11) NOT NULL,
  `mall_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `studio` varchar(231) NOT NULL,
  `jam_tayang_1` time NOT NULL,
  `jam_tayang_2` time NOT NULL,
  `jam_tayang_3` time NOT NULL,
  `tanggal_tayang` date NOT NULL,
  `tanggal_akhir_tayang` date NOT NULL,
  `total_menit` varchar(231) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_film`
--

INSERT INTO `jadwal_film` (`id`, `mall_id`, `film_id`, `studio`, `jam_tayang_1`, `jam_tayang_2`, `jam_tayang_3`, `tanggal_tayang`, `tanggal_akhir_tayang`, `total_menit`) VALUES
(1, 1, 8, 'Studio 1', '22:22:00', '03:33:00', '04:44:00', '2025-02-27', '2025-03-01', '30'),
(2, 1, 8, 'Studio 1', '22:22:00', '03:33:00', '04:44:00', '2025-02-27', '2025-03-01', '30'),
(3, 1, 8, 'Studio 1', '22:22:00', '03:33:00', '04:44:00', '2025-02-27', '2025-03-01', '30'),
(4, 1, 11, 'Studio 2', '19:55:00', '15:56:00', '19:56:00', '2025-02-18', '2025-02-26', '90'),
(5, 1, 5, 'Studio 3', '15:58:00', '17:59:00', '20:59:00', '2025-02-18', '2025-02-23', '30'),
(6, 1, 11, 'Studio 2', '09:47:00', '09:52:00', '10:48:00', '2025-02-21', '2025-02-28', '90'),
(7, 1, 5, 'Studio 3', '09:33:00', '11:35:00', '15:40:00', '2025-02-22', '2025-02-28', '30'),
(8, 1, 5, 'Studio 3', '09:33:00', '11:35:00', '15:40:00', '2025-02-22', '2025-02-28', '30'),
(9, 1, 8, 'Studio 3', '09:41:00', '14:40:00', '15:41:00', '2025-02-22', '2025-02-27', '30'),
(10, 1, 14, 'Studio 3', '12:59:00', '14:01:00', '18:05:00', '2025-02-01', '2025-02-05', '90');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `mall_name` varchar(255) NOT NULL,
  `seat_number` varchar(10) NOT NULL,
  `status` enum('available','occupied') NOT NULL,
  `film_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `mall_name`, `seat_number`, `status`, `film_name`) VALUES
(1, 'pesona square', 'A4', 'occupied', 'Transformer: The Last Knight'),
(2, 'pesona square', 'A5', 'occupied', 'Transformer: The Last Knight'),
(3, 'pesona square', 'C5', 'occupied', 'Transformer: The Last Knight'),
(4, 'pesona square', 'D5', 'occupied', 'Transformer: The Last Knight'),
(5, 'pesona square', 'A8', 'occupied', 'Transformer: The Last Knight'),
(6, 'pesona square', 'A9', 'occupied', 'Transformer: The Last Knight'),
(7, 'pesona square', 'D6', 'occupied', 'Transformer: The Last Knight'),
(8, 'pesona square', 'D7', 'occupied', 'Transformer: The Last Knight'),
(9, 'pesona square', 'H8', 'occupied', 'Transformer: The Last Knight'),
(10, 'pesona square', 'H9', 'occupied', 'Transformer: The Last Knight'),
(11, 'pesona square', 'G8', 'occupied', 'Transformer: The Last Knight'),
(12, 'pesona square', 'G9', 'occupied', 'Transformer: The Last Knight'),
(13, 'pesona square', 'F8', 'occupied', 'Transformer: The Last Knight'),
(14, 'pesona square', 'F9', 'occupied', 'Transformer: The Last Knight'),
(15, 'pesona square', 'A2', 'occupied', 'Transformer: The Last Knight'),
(16, 'pesona square', 'A3', 'occupied', 'Transformer: The Last Knight'),
(17, 'pesona square', 'H6', 'occupied', 'Transformer: The Last Knight'),
(18, 'pesona square', 'H7', 'occupied', 'Transformer: The Last Knight'),
(19, 'pesona square', 'B4', 'occupied', 'Transformer: The Last Knight'),
(20, 'pesona square', 'B5', 'occupied', 'Transformer: The Last Knight'),
(21, 'pesona square', 'C6', 'occupied', 'Transformer: The Last Knight'),
(22, 'pesona square', 'D4', 'occupied', 'Transformer: The Last Knight'),
(23, 'pesona square', 'B7', 'occupied', 'Transformer: The Last Knight'),
(24, 'pesona square', 'E8', 'occupied', 'Transformer: The Last Knight'),
(26, 'pesona square', 'G1', 'occupied', 'Transformer: The Last Knight'),
(27, 'pesona square', 'G2', 'occupied', 'Transformer: The Last Knight'),
(28, 'pesona square', 'H2', 'occupied', 'Transformer: The Last Knight'),
(29, 'pesona square', 'H3', 'occupied', 'Transformer: The Last Knight'),
(30, 'pesona square', 'A1', 'occupied', 'Transformer: The Last Knight'),
(31, 'pesona square', 'F6', 'occupied', 'Transformer: The Last Knight'),
(32, 'pesona square', 'F7', 'occupied', 'Transformer: The Last Knight'),
(33, 'pesona square', 'F1', 'occupied', 'Transformer: The Last Knight'),
(34, 'pesona square', 'F2', 'occupied', 'Transformer: The Last Knight'),
(35, 'pesona square', 'E4', 'occupied', 'Transformer: The Last Knight'),
(36, 'pesona square', 'E5', 'occupied', 'Transformer: The Last Knight'),
(37, 'pesona square', 'A1', 'occupied', 'hxh'),
(38, 'pesona square', 'A2', 'occupied', 'hxh'),
(39, 'pesona square', 'H10', 'occupied', 'Transformer: The Last Knight'),
(40, 'pesona square', 'B2', 'occupied', 'Transformer: The Last Knight'),
(41, 'pesona square', 'B3', 'occupied', 'Transformer: The Last Knight'),
(42, 'pesona square', 'A7', 'occupied', 'Transformer: The Last Knight'),
(43, 'pesona square', 'D8', 'occupied', 'Transformer: The Last Knight'),
(44, 'pesona square', 'H5', 'occupied', 'Transformer: The Last Knight');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `username` varchar(250) NOT NULL,
  `seat_number` varchar(250) NOT NULL,
  `nama_film` varchar(231) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `status`, `payment_type`, `amount`, `transaction_time`, `username`, `seat_number`, `nama_film`) VALUES
(1, 'TIX-1740122674', 'settlement', 'qris', 70000, '2025-02-21 14:25:19', 'cytidryu123@gmail.com', 'C5,D5', 'Transformer: The Last Knight'),
(2, 'TIX-1740123726', 'settlement', 'qris', 70000, '2025-02-21 14:42:17', 'cytidryu123@gmail.com', 'H8,H9', 'Transformer: The Last Knight'),
(3, 'TIX-1740124070', 'settlement', 'qris', 70000, '2025-02-21 14:47:58', 'cytidryu123@gmail.com', 'F8,F9', 'Transformer: The Last Knight'),
(4, 'TIX-1740124422', 'settlement', 'qris', 70000, '2025-02-21 14:53:48', 'cytidryu123@gmail.com', 'H6,H7', 'Transformer: The Last Knight'),
(5, 'TIX-1740139907', 'settlement', 'qris', 70000, '2025-02-21 19:11:56', 'cytidryu123@gmail.com', 'G1,G2', 'Transformer: The Last Knight'),
(6, 'TIX-1740139955', 'settlement', 'qris', 70000, '2025-02-21 19:12:39', 'cytidryu123@gmail.com', 'H2,H3', 'Transformer: The Last Knight'),
(7, 'TIX-1740191450', 'settlement', 'qris', 70000, '2025-02-22 09:30:55', 'cytidryu123@gmail.com', 'E4,E5', 'Transformer: The Last Knight'),
(8, 'TIX-1740191777', 'settlement', 'qris', 70000, '2025-02-22 09:36:21', 'cytidryu123@gmail.com', 'A1,A2', 'hxh'),
(9, 'TIX-1740192136', 'settlement', 'qris', 35000, '2025-02-22 09:42:20', 'cytidryu123@gmail.com', 'H10', 'Transformer: The Last Knight'),
(10, 'TIX-1740195756', 'settlement', 'qris', 70000, '2025-02-22 10:42:44', 'cytidryu123@gmail.com', 'B2,B3', 'Transformer: The Last Knight');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `created_at`) VALUES
(16, 'cytidryu123@gmail.com', 'hafiz', '$2y$10$erYkicr9Ksm6n/GTUHT9Du/s.cL9JBjR8oiLysc96BAOz5rWaafYW', '2025-02-19 06:49:42'),
(17, 'cytidryu123@gmail.com', 'hafiz', '$2y$10$oWd5mvcyNMfI9I.c22Bh/e5naScUqmiqC54jODso/tqvlpjnZ4gKO', '2025-02-19 06:55:56'),
(18, 'cytidryu123@gmail.com', 'fiz', '$2y$10$h5ZD47xsAP/TKssqG6ngN.tTb3QilWjUOTiOjMcDRKOBgA0kQmIOe', '2025-02-19 06:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_mall`
--
ALTER TABLE `akun_mall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_film`
--
ALTER TABLE `jadwal_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `akun_mall`
--
ALTER TABLE `akun_mall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jadwal_film`
--
ALTER TABLE `jadwal_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
