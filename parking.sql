-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2023 at 05:52 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1638bu6_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` int(11) NOT NULL,
  `vehicle_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_in_time` datetime DEFAULT NULL,
  `parking_charge` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_id`, `customer_id`, `customer_name`, `contact_number`, `vehicle_category`, `vehicle_number`, `slot_name`, `vehicle_in_time`, `parking_charge`, `created_at`, `updated_at`) VALUES
(8, '#P650e87aac6cb9', 9, 'Raj kamal pandey', 2147483647, 'Four Wheelers', 'BK-123', 'fw-1', NULL, 50, '2023-09-23 06:43:37', '2023-09-23 06:43:37'),
(9, '#P650e89be19240', 9, 'Raj kamal pandey', 2147483647, 'Four Wheelers', 'BK-123', 'fw-1', NULL, 50, '2023-09-23 06:46:34', '2023-09-23 06:46:34'),
(10, '#P650e8b2bd0e65', 9, 'new', 2147483647, 'Four Wheelers', 'Sk-569', 'fw-1', NULL, 50, '2023-09-23 06:52:56', '2023-09-23 06:52:56'),
(11, '#P650e8dce4ac06', 9, 'new endlk', 456123213, 'Four Wheelers', 'Sk-569', 'fw-1', NULL, 50, '2023-09-23 07:04:35', '2023-09-23 07:04:35'),
(12, '#P650e8e1b27b7b', 9, 'fsdfsd', 2147483647, 'Four Wheelers', 'BK-123', 'fw-1', NULL, 50, '2023-09-23 07:06:27', '2023-09-23 07:06:27'),
(13, '#P650e8ea422e00', 9, 'dfgdfgdf', 2147483647, 'Four Wheelers', 'BK-123', 'fw-1', NULL, 50, '2023-09-23 07:07:29', '2023-09-23 07:07:29'),
(14, '#P650e8ed0916fa', 9, 'sdffasdfs', 234342432, 'Four Wheelers', 'BK-123', 'fw-2', NULL, 500, '2023-09-23 07:08:23', '2023-09-23 07:08:23'),
(15, '#P650e8fb0be923', 9, 'sdfdsfsd', 2147483647, 'Four Wheelers', 'Sk-569', 'fw-2', NULL, 500, '2023-09-23 07:12:06', '2023-09-23 07:12:06'),
(16, '#P650e91be0208e', 12, 'Kumar', 2147483647, 'Four Wheelers', 'BK-123', 'fw-1', NULL, 50, '2023-09-23 07:20:59', '2023-09-23 07:20:59'),
(17, '#P650e94c619203', 13, 'Testing', 2147483647, 'Four Wheelers', 'test-123', 'fw-1', NULL, 50, '2023-09-23 07:34:08', '2023-09-23 07:34:08'),
(18, '#P650e9511ca94b', 13, 'testing', 0, 'Four Wheelers', 'sdfs', 'fw-1', NULL, 50, '2023-09-23 07:36:22', '2023-09-23 07:36:22'),
(19, '#P650ecf115311e', 14, 'new user', 99999999, 'Four Wheelers', 'v-123', 'fw-2', NULL, 500, '2023-09-23 11:43:45', '2023-09-23 11:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Two Wheelers 2', 'Bicycles, Motarbike', 'Enable', '2023-09-22 08:00:05', '2023-09-23 11:45:10'),
(4, 'Four Wheelers', NULL, 'Enable', '2023-09-22 08:00:26', '2023-09-22 08:00:26');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_03_10_235215_create_settings_table', 1),
(16, '2023_05_18_141200_create_categories_table', 1),
(17, '2023_05_18_141215_create_brands_table', 1),
(18, '2023_05_18_141229_create_products_table', 1),
(19, '2023_05_19_093527_create_product_variants_table', 1),
(20, '2023_07_07_020634_create_taxes_table', 1),
(21, '2023_06_01_145318_create_product_images_table', 2),
(22, '2023_07_11_225931_create_invoices_table', 2),
(23, '2023_07_11_232047_create_invoice_data_table', 3),
(24, '2023_08_29_112947_create_product_images_table', 4),
(26, '2023_08_29_124952_create_product_transfers_table', 5),
(27, '2023_09_22_135433_create_slots_table', 6),
(28, '2023_09_22_152048_create_bookings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sidebar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'primary',
  `sidenav` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg-gray-200',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sidebar`, `sidenav`, `theme`, `created_at`, `updated_at`) VALUES
(1, 'dark', 'warning', 'bg-gray-200', '2023-07-08 05:55:40', '2023-07-08 05:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehical_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `vehical_category`, `slot_name`, `slot_price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Two Wheelers', 'tw-1', 25, 0, '2023-09-22 09:20:05', '2023-09-23 08:12:06'),
(3, 'Four Wheelers', 'fw-1', 50, 0, '2023-09-22 09:41:16', '2023-09-22 09:41:16'),
(4, 'Four Wheelers', 'fw-2', 500, 0, '2023-09-23 06:07:02', '2023-09-23 06:07:02'),
(5, 'Two Wheelers 2', 'Two wheeler 1', 250, 1, '2023-09-23 11:46:22', '2023-09-23 11:46:22'),
(6, 'Four Wheelers', 'parking5', 900, 0, '2023-09-23 11:52:10', '2023-09-23 11:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
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
(1, 'admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$bsfAXkaT/04XhQmENGPFj.us.RCs6HIIC8twHGQ0CGwM/4HJwQEfy', NULL, '2023-07-08 05:56:13', '2023-09-23 12:20:04'),
(9, 'user', 'Raj kamal pandey', 'Rkpdfwa1@gmail.com', NULL, '$2y$10$u73bvNDsXmRJmZDF1YkM5ehE/ii6dTFZJiO1evT.ydOGEYN0up7/C', NULL, '2023-09-22 05:33:18', '2023-09-22 05:59:09'),
(12, 'user', 'Kumar', 'kumar@gmail.com', NULL, '$2y$10$R/OjZ3b3rXjaTm/Yecj0NuHE07pLmjFv5UqVqyNNeBPnaT6UtFUcK', NULL, '2023-09-22 13:06:33', '2023-09-22 13:06:33'),
(13, 'user', 'testing', 'testing@gmail.com', NULL, '$2y$10$8aiuXEiefKYMsyIhafEW8etfp0nIWivd0KD5vOF/V0zj7qVE2AjNi', NULL, '2023-09-23 07:33:19', '2023-09-23 07:33:19'),
(14, 'user', 'new user', 'newuser@gmail.com', NULL, '$2y$10$HY6LUzbB0dVo8cfw/feXX.0uM2WDqF2rEmgv4QcgO6teXPnVjg7Bm', NULL, '2023-09-23 11:41:54', '2023-09-23 11:41:54'),
(15, 'user', 'test', 'testuser@gmail.com', NULL, '$2y$10$AUAQJSQY3DNYO/yxjCky5OL3EtDIMFlwo1YZQacOGfzhbVC/NvSeu', NULL, '2023-09-23 11:50:20', '2023-09-23 11:50:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
