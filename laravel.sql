-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 02:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `nrp`, `jenis_kelamin`, `jurusan`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 0, 'Ithaci', 'Uciha', '909090909', 'L', 'Teknik Ilusi', 'Konoha', 'rsz_1images.jpg', NULL, '2020-06-22 11:31:48'),
(2, 0, 'Sasuke', 'Uciha', '584739484', 'L', 'Teknik Ilusi', 'Konoha', NULL, NULL, '2020-06-22 12:35:09'),
(3, 0, 'Nagato', 'Uzumaki', '58475948', 'L', 'Teknik Ilusi', 'Amegakure', NULL, NULL, '2020-06-22 12:35:19'),
(11, 0, 'Shikamaru', 'Nara', '847583748', 'L', 'Teknik Strategi', 'Konoha', NULL, '2020-06-22 12:32:46', '2020-06-22 12:35:35'),
(12, 0, 'Jiraiya', 'Sannin', '857495869', 'L', 'Teknik Sage Mode', 'Konoha', NULL, '2020-06-22 12:34:32', '2020-06-22 22:04:00'),
(13, 0, 'Kakashi', 'Hatake', '948504958', 'Laki-Laki', 'Teknik Peniru', 'Konoha', NULL, '2020-06-22 12:37:04', '2020-06-22 12:37:04'),
(14, 0, 'Maito', 'Guy', '758675747', 'Laki-Laki', 'Teknik Taijutsu', 'Konoha', NULL, '2020-06-22 12:38:00', '2020-06-22 12:38:00'),
(15, 0, 'Rock', 'Lee', '959485980', 'Laki-Laki', 'Teknik Taijutsu', 'Konoha', NULL, '2020-06-22 12:38:36', '2020-06-22 12:38:36'),
(16, 0, 'Kazekage', 'Gaara', '859689858', 'Laki-Laki', 'Teknik Pengendali Pasir', 'Sunakagure', NULL, '2020-06-22 12:39:55', '2020-06-22 12:39:55'),
(17, 0, 'Tsuchikage', 'Ohnoki', '857687458', 'Laki-Laki', 'Tenik Jinton', 'Iwakagure', NULL, '2020-06-22 12:42:34', '2020-06-22 12:42:34'),
(21, 4, 'Lal', 'Lulu', '4545454', 'Perempuan', 'Teknik Ilusi', 'asdfadsf', NULL, '2020-06-23 01:06:17', '2020-06-23 01:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_matkul`
--

CREATE TABLE `mahasiswa_matkul` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `matkul_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_matkul`
--

INSERT INTO `mahasiswa_matkul` (`id`, `mahasiswa_id`, `matkul_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 95, '2020-06-23 11:33:20', '0000-00-00 00:00:00'),
(2, 1, 2, 100, '2020-06-23 11:33:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode`, `nama`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'K-001', 'Kagebunshin', 'Ganjil', '2020-06-23 11:29:02', '0000-00-00 00:00:00'),
(2, 'S-001', 'Shuriken', 'Ganjil', '2020-06-23 11:29:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_21_174723_create_mahasiswa_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Ujang', 'ujang@gmail.com', NULL, '$2y$10$WwXBbiEJzjOfU1NZ/aWGXecePo9xl8j5.QOZI6kYf03e9m9KpEudG', 'oBmP3Rc5BJ93bX7mRN50lxHyyR7Q6LeE8x1oHmqH4jGAOLl64ytLy4vLHXk4', '2020-06-22 09:09:07', '2020-06-22 09:09:07'),
(4, 'mahasiswa', 'Lal', 'lala@gmail.com', NULL, '$2y$10$ZB/2ixgt/EAYlcZFUtitde8BXxC05zEkzy5uJrk4bshpObQRmmGmS', 'phVC3NuB6eMKdqEwrfAuA4aCY67Mn8ogJjwAkUtixIZqDqfDOHYH0HiBAVLp', '2020-06-23 01:06:17', '2020-06-23 01:06:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
