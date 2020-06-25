-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 09:56 AM
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Hiruzen', '082158486758', 'Konoha', '2020-06-24 16:07:12', '0000-00-00 00:00:00'),
(2, 'Tobirama', '082103940594', 'Konoha', '2020-06-24 16:07:12', '0000-00-00 00:00:00');

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
(1, 0, 'Itachi', 'Uciha', '909090909', 'L', 'Teknik Ilusi', 'Konoha', 'rsz_1images.jpg', NULL, '2020-06-24 10:21:28'),
(2, 0, 'Sasuke', 'Uciha', '584739484', 'L', 'Teknik Ilusi', 'Konoha', NULL, NULL, '2020-06-22 12:35:09'),
(3, 0, 'Nagato', 'Uzumaki', '58475948', 'L', 'Teknik Ilusi', 'Amegakure', NULL, NULL, '2020-06-22 12:35:19'),
(11, 0, 'Shikamaru', 'Nara', '847583748', 'L', 'Teknik Strategi', 'Konoha', NULL, '2020-06-22 12:32:46', '2020-06-22 12:35:35'),
(12, 0, 'Jiraiya', 'Sannin', '857495869', 'L', 'Teknik Sage Mode', 'Konoha', NULL, '2020-06-22 12:34:32', '2020-06-22 22:04:00'),
(13, 0, 'Kakashi', 'Hatake', '948504958', 'Laki-Laki', 'Teknik Peniru', 'Konoha', NULL, '2020-06-22 12:37:04', '2020-06-22 12:37:04'),
(14, 0, 'Maito', 'Guy', '758675747', 'Laki-Laki', 'Teknik Taijutsu', 'Konoha', NULL, '2020-06-22 12:38:00', '2020-06-22 12:38:00'),
(15, 0, 'Rock', 'Lee', '959485980', 'Laki-Laki', 'Teknik Taijutsu', 'Konoha', NULL, '2020-06-22 12:38:36', '2020-06-22 12:38:36'),
(16, 0, 'Kazekage', 'Gaara', '859689858', 'Laki-Laki', 'Teknik Pengendali Pasir', 'Sunakagure', NULL, '2020-06-22 12:39:55', '2020-06-22 12:39:55'),
(17, 0, 'Tsuchikage', 'Ohnoki', '857687458', 'Laki-Laki', 'Tenik Jinton', 'Iwakagure', NULL, '2020-06-22 12:42:34', '2020-06-22 12:42:34'),
(31, 17, 'Lala', 'Lulu', '13431345', 'L', 'Teknik Mesin', 'dfasdfsadf', 'course.jpg', '2020-06-23 23:28:29', '2020-06-23 23:28:29');

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
(2, 1, 2, 56, '2020-06-23 11:33:20', '2020-06-24 17:33:55'),
(3, 2, 2, 100, '2020-06-24 01:23:29', '2020-06-24 08:23:29'),
(4, 2, 1, 80, '2020-06-24 01:24:51', '2020-06-24 08:24:51'),
(5, 3, 1, 80, '2020-06-24 01:41:27', '2020-06-24 08:41:27'),
(7, 1, 1, 100, '2020-06-24 08:35:28', '2020-06-24 15:35:28'),
(8, 1, 3, 100, '2020-06-24 09:23:05', '2020-06-24 16:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode`, `nama`, `semester`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'K-001', 'Kagebunshin', 'Ganjil', 2, '2020-06-23 11:29:02', '0000-00-00 00:00:00'),
(2, 'S-001', 'Shuriken', 'Ganjil', 1, '2020-06-23 11:29:02', '0000-00-00 00:00:00'),
(3, 'C-005', 'Kuchiyose', 'Ganjil', 1, '2020-06-24 16:17:11', '0000-00-00 00:00:00');

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
(1, 'admin', 'Ujang', 'ujang@gmail.com', NULL, '$2y$10$WwXBbiEJzjOfU1NZ/aWGXecePo9xl8j5.QOZI6kYf03e9m9KpEudG', 'IK4MFkA83SarICeHCmiKHPJBfZc3V8qnC558DnBQVnUtkMIeSLy8NF09jI6n', '2020-06-22 09:09:07', '2020-06-22 09:09:07'),
(17, 'mahasiswa', 'Lala', 'lala@gmail.com', NULL, '$2y$10$FRc4G60ZhQRbj..ZsD9FEetjF2NF9S6hfn/OugG6VYdYIvaAWLXDa', 'o05ch9SrF7sdk3c1RGjoMfMjQDlaIi8VWxRtZh6YK5ZzBT5mToQH0zbsrD1a', '2020-06-23 23:28:29', '2020-06-23 23:28:29'),
(18, 'mahasiswa', 'fdfdfd', 'fdasdf@gmail.com', NULL, '$2y$10$wJ3VQwt8HNB8ey/fz.599e2BsZrsMt.vC5EgCnCWw6j0i4xx6WBSq', 'rIalH7GPgNY7SiG37mKnwtuk3hjMZYAKTpSMv52JST8WWXAWwjKKb9eQYh6K', '2020-06-23 23:39:22', '2020-06-23 23:39:22'),
(19, 'mahasiswa', 'ipipasdf', 'ytutyt@gmail.com', NULL, '$2y$10$FSMMvFZLbDH.9Y8T6LTgKua4UGYcm08iHuSjw3euTYMEtVYWDyCR.', 'r0Rm2huQGbsHHhOvmkpuWUxDVBfngGLzKoFKrGxPZPzxSgkN5SStu41w7Pbh', '2020-06-23 23:48:56', '2020-06-23 23:48:56'),
(20, 'mahasiswa', 'ipipasdf', 'fhgfhg@gmail.com', NULL, '$2y$10$AA7marcqCjfEMGHfjAEW4.WOnRdK3PuAt4WtExosV9ZjGJNQF60j.', '0Mbi7bpRGJI5B0xK35z9nWLjJgH7dVCHtVv7COuzfvBE2aaESFshJuEpCsAn', '2020-06-23 23:58:09', '2020-06-23 23:58:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
