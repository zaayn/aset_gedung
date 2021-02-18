-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 02:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_gedung`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `g_id` int(10) UNSIGNED NOT NULL,
  `k_id` int(10) UNSIGNED NOT NULL,
  `g_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`g_id`, `k_id`, `g_nama`, `g_lokasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gedung 1', 'jl. Kimia', '2021-02-18 06:14:01', '2021-02-18 06:14:01'),
(2, 1, 'Gedung 2', 'jl. bayaran', '2021-02-18 06:14:14', '2021-02-18 06:14:14'),
(3, 1, 'Masjid', 'Jl. Melati', '2021-02-18 06:14:32', '2021-02-18 06:14:32'),
(4, 1, 'Kantin', 'Jl. Mesin', '2021-02-18 06:14:47', '2021-02-18 06:14:47'),
(5, 2, 'Gedung 1', 'Jl. Biologi', '2021-02-18 06:15:02', '2021-02-18 06:15:02'),
(6, 2, 'Parkir', 'Jl. Elang', '2021-02-18 06:15:20', '2021-02-18 06:15:20'),
(7, 2, 'Silo', 'Jl. Rajawali', '2021-02-18 06:15:32', '2021-02-18 06:15:32'),
(8, 3, 'Gedung 1', 'Jl. Siloam', '2021-02-18 06:15:43', '2021-02-18 06:15:43'),
(9, 3, 'Green House', 'Jl. Anggrek', '2021-02-18 06:15:58', '2021-02-18 06:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `k_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`k_id`, `email`, `k_nama`, `k_lokasi`, `created_at`, `updated_at`) VALUES
(1, 'zayn@gmail.com', 'kampus A', 'jl. sumorame', '2021-02-18 06:13:21', '2021-02-18 06:13:21'),
(2, 'iqbal@gmail.com', 'kampus B', 'jl. Merdeka', '2021-02-18 06:13:31', '2021-02-18 06:13:31'),
(3, 'ulfa@gmail.com', 'kampus C', 'Jl. Merpati', '2021-02-18 06:13:40', '2021-02-18 06:13:40');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_18_035107_create_kampus_table', 1),
(5, '2021_02_18_100306_create_gedung_table', 1),
(6, '2021_02_18_100450_create_ruang_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `r_id` int(10) UNSIGNED NOT NULL,
  `g_id` int(10) UNSIGNED NOT NULL,
  `r_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`r_id`, `g_id`, `r_nama`, `r_lokasi`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ruang 1', 'Lantai 2', '2021-02-18 06:17:29', '2021-02-18 06:17:29'),
(2, 2, 'Ruang 2', 'Lantai 3', '2021-02-18 06:17:48', '2021-02-18 06:17:48'),
(3, 2, 'Pantry', 'Lantai 4', '2021-02-18 06:18:01', '2021-02-18 06:18:01'),
(4, 8, 'Ruang 1', 'Lantai 2', '2021-02-18 06:18:38', '2021-02-18 06:18:38'),
(5, 9, 'Ruang 2', 'Lantai 4', '2021-02-18 06:18:49', '2021-02-18 06:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zayn', 'zayn@gmail.com', NULL, '$2y$10$lnkAi7UEPmwf2KNbaEZ8a.D.pEnFmYOmKIq/2RskKHQ3WmJsZBm8W', NULL, '2021-02-18 06:11:53', '2021-02-18 06:11:53'),
(2, 'Iqbal Izzul', 'iqbal@gmail.com', NULL, '$2y$10$5ZSCShHsKxmHEg2A9Dc0oOen3IzZ4HT.45.CSktDht9PqpPk/o3u2', NULL, '2021-02-18 06:12:21', '2021-02-18 06:12:21'),
(3, 'Ulfatuz zahroh', 'ulfa@gmail.com', NULL, '$2y$10$47FKHx/2Co3G9xUVKWFrBuVUc7AbIXdTB/fwJREkrQFflmN5df46C', NULL, '2021-02-18 06:12:34', '2021-02-18 06:12:34'),
(4, 'Itsna dzakiatul huriroh', 'kiki@gmail.com', NULL, '$2y$10$xLfJ4k408XzeMSUiG45nye2odeYSqhe46X0Ez4/EL.03jULjA1buq', NULL, '2021-02-18 06:13:08', '2021-02-18 06:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`g_id`),
  ADD UNIQUE KEY `gedung_g_id_unique` (`g_id`),
  ADD KEY `gedung_k_id_foreign` (`k_id`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`k_id`),
  ADD UNIQUE KEY `kampus_k_id_unique` (`k_id`),
  ADD KEY `kampus_email_foreign` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `ruang_r_id_unique` (`r_id`),
  ADD KEY `ruang_g_id_foreign` (`g_id`);

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
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `k_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `r_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gedung`
--
ALTER TABLE `gedung`
  ADD CONSTRAINT `gedung_k_id_foreign` FOREIGN KEY (`k_id`) REFERENCES `kampus` (`k_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kampus`
--
ALTER TABLE `kampus`
  ADD CONSTRAINT `kampus_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `ruang_g_id_foreign` FOREIGN KEY (`g_id`) REFERENCES `gedung` (`g_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
