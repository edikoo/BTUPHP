-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2021 at 08:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaluri`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'სათამაშო', '2021-01-01 14:03:15', '2021-01-01 14:03:15'),
(2, 'საყოფაცხოვრებო ტექნიკა', '2021-01-01 14:04:07', '2021-01-01 14:13:00'),
(3, 'კოსმეტიკა', '2021-01-01 14:04:11', '2021-01-01 14:04:11'),
(5, 'სუვენირი', '2021-01-01 14:26:22', '2021-01-01 14:26:22'),
(7, 'სხვა', '2021-01-01 15:52:18', '2021-01-01 15:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `category_parcel`
--

CREATE TABLE `category_parcel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `parcel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_parcel`
--

INSERT INTO `category_parcel` (`id`, `category_id`, `parcel_id`) VALUES
(1, 1, 1),
(6, 1, 4),
(7, 2, 4),
(8, 3, 4),
(9, 5, 4),
(18, 2, 3),
(19, 3, 3),
(20, 5, 3);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_01_01_150119_create_parcels_table', 2),
(6, '2021_01_01_174021_create_categories_table', 3),
(7, '2021_01_01_183400_create_category_parcel_table', 4),
(8, '2021_01_01_184756_create_notifications_table', 5),
(9, '2016_06_01_000001_create_oauth_auth_codes_table', 6),
(10, '2016_06_01_000002_create_oauth_access_tokens_table', 6),
(11, '2016_06_01_000003_create_oauth_refresh_tokens_table', 6),
(12, '2016_06_01_000004_create_oauth_clients_table', 6),
(13, '2016_06_01_000005_create_oauth_personal_access_clients_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0cdee017-be2f-4ca7-9bb0-fd9fd02873bf', 'App\\Notifications\\ParcelStatus', 'App\\Models\\User', 3, '{\"data\":\"\\u10d7\\u10e5\\u10d5\\u10d4\\u10dc\\u10d8 \\u10d0\\u10db\\u10d0\\u10dc\\u10d0\\u10d7\\u10d8 \\u10d7\\u10e0\\u10d4\\u10e5\\u10d8\\u10dc\\u10d2\\u10d8\\u10d7: 123456789 \\u10db\\u10d8\\u10e6\\u10d4\\u10d1\\u10e3\\u10da\\u10d8\\u10d0 \\u10d0\\u10db\\u10d4\\u10e0\\u10d8\\u10d9\\u10d8\\u10e1 \\u10e1\\u10d0\\u10ec\\u10e7\\u10dd\\u10d1\\u10e8\\u10d8\"}', NULL, '2021-01-01 15:03:25', '2021-01-01 15:03:25'),
('3c643aa4-1f59-4ced-a043-64a402b05e4a', 'App\\Notifications\\ParcelStatus', 'App\\Models\\User', 1, '{\"data\":\"\\u10d7\\u10e5\\u10d5\\u10d4\\u10dc\\u10d8 \\u10d0\\u10db\\u10d0\\u10dc\\u10d0\\u10d7\\u10d8 \\u10d7\\u10e0\\u10d4\\u10e5\\u10d8\\u10dc\\u10d2\\u10d8\\u10d7: 123 \\u10db\\u10d8\\u10e6\\u10d4\\u10d1\\u10e3\\u10da\\u10d8\\u10d0 \\u10e1\\u10d0\\u10e5\\u10d0\\u10e0\\u10d7\\u10d5\\u10d4\\u10da\\u10dd\\u10e8\\u10d8\"}', NULL, '2021-01-01 15:34:32', '2021-01-01 15:34:32'),
('73a139c2-8b5f-47d4-b7a8-539a23992509', 'App\\Notifications\\ParcelStatus', 'App\\Models\\User', 1, '{\"data\":\"\\u10d7\\u10e5\\u10d5\\u10d4\\u10dc\\u10d8 \\u10d0\\u10db\\u10d0\\u10dc\\u10d0\\u10d7\\u10d8 \\u10d7\\u10e0\\u10d4\\u10e5\\u10d8\\u10dc\\u10d2\\u10d8\\u10d7: 123 \\u10d2\\u10d0\\u10db\\u10dd\\u10d8\\u10d2\\u10d6\\u10d0\\u10d5\\u10dc\\u10d0 \\u10e1\\u10d0\\u10e5\\u10d0\\u10e0\\u10d7\\u10d5\\u10d4\\u10da\\u10dd\\u10e8\\u10d8\"}', NULL, '2021-01-01 15:33:42', '2021-01-01 15:33:42'),
('ab95da11-9c93-4c04-9677-8ad5a682d9c0', 'App\\Notifications\\ParcelStatus', 'App\\Models\\User', 3, '{\"data\":\"\\u10d7\\u10e5\\u10d5\\u10d4\\u10dc\\u10d8 \\u10d0\\u10db\\u10d0\\u10dc\\u10d0\\u10d7\\u10d8 \\u10d7\\u10e0\\u10d4\\u10e5\\u10d8\\u10dc\\u10d2\\u10d8\\u10d7: 123456789 \\u10db\\u10d8\\u10e6\\u10d4\\u10d1\\u10e3\\u10da\\u10d8\\u10d0 \\u10e1\\u10d0\\u10e5\\u10d0\\u10e0\\u10d7\\u10d5\\u10d4\\u10da\\u10dd\\u10e8\\u10d8\"}', NULL, '2021-01-01 15:34:08', '2021-01-01 15:34:08'),
('b04a0a7d-66c5-410e-8d98-4a68c5b4893d', 'App\\Notifications\\ParcelStatus', 'App\\Models\\User', 3, '{\"data\":\"\\u10d7\\u10e5\\u10d5\\u10d4\\u10dc\\u10d8 \\u10d0\\u10db\\u10d0\\u10dc\\u10d0\\u10d7\\u10d8 \\u10d7\\u10e0\\u10d4\\u10e5\\u10d8\\u10dc\\u10d2\\u10d8\\u10d7: 123456789 \\u10d2\\u10d0\\u10db\\u10dd\\u10d8\\u10d2\\u10d6\\u10d0\\u10d5\\u10dc\\u10d0 \\u10e1\\u10d0\\u10e5\\u10d0\\u10e0\\u10d7\\u10d5\\u10d4\\u10da\\u10dd\\u10e8\\u10d8\"}', NULL, '2021-01-01 15:33:14', '2021-01-01 15:33:14'),
('c66ff2c0-f739-4c8a-b1e8-2d59ff2d4604', 'App\\Notifications\\ParcelStatus', 'App\\Models\\User', 1, '{\"data\":\"\\u10d7\\u10e5\\u10d5\\u10d4\\u10dc\\u10d8 \\u10d0\\u10db\\u10d0\\u10dc\\u10d0\\u10d7\\u10d8 \\u10d7\\u10e0\\u10d4\\u10e5\\u10d8\\u10dc\\u10d2\\u10d8\\u10d7: 123 \\u10db\\u10d8\\u10e6\\u10d4\\u10d1\\u10e3\\u10da\\u10d8\\u10d0 \\u10d0\\u10db\\u10d4\\u10e0\\u10d8\\u10d9\\u10d8\\u10e1 \\u10e1\\u10d0\\u10ec\\u10e7\\u10dd\\u10d1\\u10e8\\u10d8\"}', NULL, '2021-01-01 14:53:19', '2021-01-01 14:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('2a329a7276cb52610383d523e75c50203c57c32911d62061b9f8962d2131423a28db57d2d17583be', 1, 1, 'authToken', '[]', 0, '2021-01-01 15:54:41', '2021-01-01 15:54:41', '2022-01-01 19:54:41'),
('da59982df55d63ec0b23f6ec284e5591f55a223e53d95d0c1b8107f44e959f39d2001380f6ccaa43', 1, 1, 'authToken', '[]', 0, '2021-01-01 15:47:50', '2021-01-01 15:47:50', '2022-01-01 19:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'finaluri Personal Access Client', '1ZGtSZa3iFwcHnkzjTvHNWHcMexg51iJ9YFxwdc9', NULL, 'http://localhost', 1, 0, 0, '2021-01-01 15:38:37', '2021-01-01 15:38:37'),
(2, NULL, 'finaluri Password Grant Client', '1EufXmIsq4Ee2XPZEoKTaz6xgpUcU3OqrmIGUlgW', 'users', 'http://localhost', 0, 1, 0, '2021-01-01 15:38:37', '2021-01-01 15:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-01-01 15:38:37', '2021-01-01 15:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tracking` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `user_id`, `tracking`, `shop`, `price`, `weight`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, '123', 'amazon.com', '2500', '50', 3, '2021-01-01 14:53:15', '2021-01-01 15:34:24'),
(4, 3, '123456789', 'albiaba.com', '15', '3', 3, '2021-01-01 15:03:20', '2021-01-01 15:34:04');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','moderator') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'moderator',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.ge', NULL, '$2y$10$K8r5bC9Um7bmX/9gw38kUuTRHcGynk3ZsHGUhUDRVxVngwKrs/cXK', 'admin', NULL, NULL, NULL),
(2, 'moderator', 'moderator@moderator.ge', NULL, '$2y$10$28.E2uGuQS2pg7uujyc7cOa7U5TCmRy4qlq3Kj49FpPZxuk1zeNOG', 'moderator', NULL, NULL, NULL),
(3, 'სატესტო', 'test@test.ge', NULL, '$2y$10$VE9qQ7jU8UbtTZ7R/PLC..T0XsOZXygBS0cCuui5gwS19x1fKNvaq', 'moderator', NULL, '2021-01-01 11:16:23', '2021-01-01 11:16:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_parcel`
--
ALTER TABLE `category_parcel`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parcels_tracking_unique` (`tracking`) USING HASH;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_parcel`
--
ALTER TABLE `category_parcel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
