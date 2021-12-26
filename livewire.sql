-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 05:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livewire`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`id`, `client_id`, `date`, `time`, `status`, `note`, `created_at`, `updated_at`, `color`) VALUES
(17, 5, '2021-08-27', '09:15:00', 'CLOSED', '<p><b>Alhamdulillah</b></p>', '2021-12-25 09:16:14', '2021-12-25 09:25:20', '#0E3698'),
(18, 5, '2021-12-26', '07:10:00', 'CLOSED', '<p><b>Morning</b></p>', '2021-12-25 19:12:05', '2021-12-25 19:12:05', '#7EEF02'),
(19, 3, '2021-12-24', '09:29:00', 'SCHEDULED', '<p>dfgfdgfdg</p>', '2021-12-25 21:29:55', '2021-12-25 21:29:55', '#F70404'),
(20, 4, '2021-12-26', '09:30:00', 'SCHEDULED', '<p><b>thtryttrytr</b></p>', '2021-12-25 21:30:33', '2021-12-25 21:30:33', '#0049FF'),
(21, 5, '2021-08-27', '09:15:00', 'CLOSED', '<p><b>Alhamdulillah</b></p>', '2021-12-25 09:16:14', '2021-12-25 09:25:20', '#0E3698'),
(22, 5, '2021-12-26', '07:10:00', 'CLOSED', '<p><b>Morning</b></p>', '2021-12-25 19:12:05', '2021-12-25 19:12:05', '#7EEF02'),
(23, 3, '2021-12-24', '09:29:00', 'SCHEDULED', '<p>dfgfdgfdg</p>', '2021-12-25 21:29:55', '2021-12-25 21:29:55', '#F70404'),
(24, 4, '2021-12-26', '09:30:00', 'SCHEDULED', '<p><b>thtryttrytr</b></p>', '2021-12-25 21:30:33', '2021-12-25 21:30:33', '#0049FF'),
(25, 5, '2021-08-27', '09:15:00', 'CLOSED', '<p><b>Alhamdulillah</b></p>', '2021-12-25 09:16:14', '2021-12-25 09:25:20', '#0E3698'),
(26, 5, '2021-12-26', '07:10:00', 'CLOSED', '<p><b>Morning</b></p>', '2021-12-25 19:12:05', '2021-12-25 19:12:05', '#7EEF02'),
(27, 3, '2021-12-24', '09:29:00', 'SCHEDULED', '<p>dfgfdgfdg</p>', '2021-12-25 21:29:55', '2021-12-25 21:29:55', '#F70404'),
(28, 4, '2021-12-26', '09:30:00', 'SCHEDULED', '<p><b>thtryttrytr</b></p>', '2021-12-25 21:30:33', '2021-12-25 21:30:33', '#0049FF'),
(29, 5, '2021-08-27', '09:15:00', 'CLOSED', '<p><b>Alhamdulillah</b></p>', '2021-12-25 09:16:14', '2021-12-25 09:25:20', '#0E3698'),
(30, 5, '2021-12-26', '07:10:00', 'CLOSED', '<p><b>Morning</b></p>', '2021-12-25 19:12:05', '2021-12-25 19:12:05', '#7EEF02'),
(31, 3, '2021-12-24', '09:29:00', 'SCHEDULED', '<p>dfgfdgfdg</p>', '2021-12-25 21:29:55', '2021-12-25 21:29:55', '#F70404'),
(32, 4, '2021-12-26', '09:30:00', 'SCHEDULED', '<p><b>thtryttrytr</b></p>', '2021-12-25 21:30:33', '2021-12-25 21:30:33', '#0049FF');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ryley Konopelski', NULL, NULL),
(2, 'Tiana Thompson', NULL, NULL),
(3, 'Enola Boyle', NULL, NULL),
(4, 'Elvie Mosciski', NULL, NULL),
(5, 'Uriel Abbott', NULL, NULL),
(6, 'Dr. Emerson Bailey DVM', NULL, NULL),
(7, 'Aliza Klocko', NULL, NULL),
(8, 'Roselyn Stokes', NULL, NULL),
(9, 'Owen Goldner', NULL, NULL),
(10, 'Tess Davis', NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_31_173703_create_appoinments_table', 2),
(7, '2021_12_22_054910_create_clients_table', 2),
(9, '2021_12_23_044249_create_singles_table', 3),
(10, '2021_12_25_061745_add_color_field_to_appoinments_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singles`
--

CREATE TABLE `singles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'pityxyyyy', 'nehuho@mailinator.com', NULL, '$2y$10$0bc9W6IO/Q.RLQGoh6aKaewxty5noVqX0MHNV1yP3mWAHe1DJIq2O', NULL, NULL, NULL, '2021-12-20 23:39:53', '2021-12-21 21:50:26'),
(6, 'vaconowupy', 'xymabus@mailinator.com', NULL, '$2y$10$eroN79W6eREC2zFcU6hR3ugkoStpJjrrfg4VobAXLXyGo3HFadyge', NULL, NULL, NULL, '2021-12-21 22:04:58', '2021-12-21 22:04:58'),
(7, 'vizem', 'jeranara@mailinator.com', NULL, '$2y$10$Utrx8US./NRseDGlx.cM2uN22a6S5.8tO5Od87gvJ1FeYe.ogLRVW', NULL, NULL, NULL, '2021-12-21 22:05:05', '2021-12-21 22:05:05'),
(8, 'segiqelise', 'zycujy@mailinator.com', NULL, '$2y$10$3MKim9.uBlPvQgr94sg7Wemq53raty9.Cz2U.7XX.snKGI68/6v2q', NULL, NULL, NULL, '2021-12-21 22:05:11', '2021-12-21 22:05:40'),
(10, 'Shishir', 'shishir@gmail.com', NULL, '$2y$10$BDr0lAzo2GZEQyzrHx39v.zdRzzoRwW41BvIUs.D4XiAQnWoxrEhK', NULL, NULL, NULL, '2021-12-21 23:20:26', '2021-12-21 23:20:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `singles`
--
ALTER TABLE `singles`
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
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singles`
--
ALTER TABLE `singles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
