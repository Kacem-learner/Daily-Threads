-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2026 at 01:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-0b5ed025495008a307f6b06dd1e4cce2', 'i:1;', 1779198853),
('laravel-cache-0b5ed025495008a307f6b06dd1e4cce2:timer', 'i:1779198853;', 1779198853),
('laravel-cache-c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1779204572),
('laravel-cache-c525a5357e97fef8d3db25841c86da1a:timer', 'i:1779204572;', 1779204572);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `phone`, `address`, `product_title`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(27, 'admin', '123456', 'caloocan', 'Terno Kids', '1', '450.00', '2026-05-11 00:49:30', '2026-05-11 00:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_05_03_012715_add_two_factor_columns_to_users_table', 1),
(5, '2026_05_03_012716_create_passkeys_table', 1),
(6, '2026_05_03_012833_create_personal_access_tokens_table', 1),
(7, '2026_05_04_041818_create_products_table', 2),
(8, '2026_05_05_041844_create_carts_table', 3),
(9, '2026_05_08_013503_create_orders_table', 4),
(10, '2026_05_08_043008_add_type_to_products_table', 5),
(11, '2026_05_19_141642_add_user_id_to_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `product_title`, `price`, `quantity`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(8, 'user', 'user@gmail.com', '12345', 'caloocan', 'Black Polo', 500, 1, 'Delivered', '2026-05-07 18:12:25', '2026-05-07 19:08:20', NULL),
(9, 'user', 'user@gmail.com', '12345', 'caloocan', 'Terno Kids', 450, 1, 'Delivered', '2026-05-07 19:25:19', '2026-05-10 21:07:11', NULL),
(10, 'user', 'user@gmail.com', '12345', 'caloocan', 'Long Sleeves', 350, 1, 'Not Delivered', '2026-05-07 19:25:19', '2026-05-07 19:25:19', NULL),
(11, 'user', 'user@gmail.com', '12345', 'caloocan', 'Black Polo', 500, 1, 'Not Delivered', '2026-05-07 19:28:40', '2026-05-07 19:28:40', NULL),
(12, 'user', 'user@gmail.com', '12345', 'caloocan', 'Terno Kids', 450, 1, 'Not Delivered', '2026-05-07 19:32:19', '2026-05-07 19:32:19', NULL),
(13, 'user', 'user@gmail.com', '12345', 'caloocan', 'Terno Kids', 450, 1, 'Not Delivered', '2026-05-07 19:34:33', '2026-05-07 19:34:33', NULL),
(14, 'user', 'user@gmail.com', '12345', 'caloocan', 'Black Polo', 500, 1, 'Not Delivered', '2026-05-07 19:35:35', '2026-05-07 19:35:35', NULL),
(15, 'user', 'user@gmail.com', '12345', 'caloocan', 'Long Sleeves', 350, 1, 'Not Delivered', '2026-05-07 19:36:04', '2026-05-07 19:36:04', NULL),
(16, 'user', 'user@gmail.com', '12345', 'caloocan', 'Maong Skirt', 450, 1, 'Not Delivered', '2026-05-07 19:56:38', '2026-05-07 19:56:38', NULL),
(17, 'user', 'user@gmail.com', '12345', 'caloocan', 'Maong Skirt', 450, 1, 'Not Delivered', '2026-05-07 19:56:38', '2026-05-07 19:56:38', NULL),
(18, 'user', 'user@gmail.com', '12345', 'caloocan', 'Formal Terno', 3000, 1, 'Not Delivered', '2026-05-07 19:56:38', '2026-05-07 19:56:38', NULL),
(19, 'user', 'user@gmail.com', '12345', 'caloocan', 'Terno Kids', 450, 1, 'Not Delivered', '2026-05-07 20:02:59', '2026-05-07 20:02:59', NULL),
(20, 'user', 'user@gmail.com', '12345', 'caloocan', 'Long Sleeves', 350, 1, 'Not Delivered', '2026-05-07 21:36:53', '2026-05-07 21:36:53', NULL),
(21, 'user', 'user@gmail.com', '12345', 'caloocan', 'Terno Kids', 450, 1, 'Not Delivered', '2026-05-07 21:36:53', '2026-05-07 21:36:53', NULL),
(22, 'user', 'user@gmail.com', '12345', 'caloocan', 'Toddler Dress', 430, 1, 'Not Delivered', '2026-05-10 21:06:26', '2026-05-10 21:06:26', NULL),
(23, 'user', 'user@gmail.com', '12345', 'caloocan', 'Beanie', 449, 1, 'Delivered', '2026-05-19 06:35:25', '2026-05-19 07:22:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passkeys`
--

CREATE TABLE `passkeys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `credential_id` varchar(255) NOT NULL,
  `credential` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`credential`)),
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `quantity`, `description`, `image`, `created_at`, `updated_at`, `type`) VALUES
(6, 'Black Polo', 500.00, 5, 'Casual Outfit', '1777872115.jpg', '2026-05-03 21:21:55', '2026-05-04 16:12:49', 'regular'),
(7, 'Terno Kids', 450.00, 5, 'Terno Outfit', '1777942429.jpg', '2026-05-04 16:53:49', '2026-05-04 16:53:49', 'regular'),
(8, 'Long Sleeves', 350.00, 10, 'White Long Sleeves', '1777942482.jpg', '2026-05-04 16:54:42', '2026-05-04 16:54:42', 'regular'),
(9, 'Green Jacket', 799.00, 20, 'Cold vibes outfit', '1777942526.jpg', '2026-05-04 16:55:26', '2026-05-07 21:30:13', 'sale'),
(10, 'Toddler Dress', 430.00, 15, 'Cute trendy outfit for girl', '1777942565.jpg', '2026-05-04 16:56:05', '2026-05-04 16:56:05', 'regular'),
(11, 'Ripped Jeans', 799.00, 7, 'Stylish Trending Jeans', '1778202307.jpg', '2026-05-07 17:05:07', '2026-05-07 17:05:07', 'regular'),
(12, 'Mini Skirt', 399.00, 20, 'Summer Outfit Skirt', '1778202346.jpg', '2026-05-07 17:05:46', '2026-05-07 17:05:46', 'regular'),
(13, 'Maong Skirt', 450.00, 10, 'Maong Skirt', '1778202373.jpg', '2026-05-07 17:06:13', '2026-05-07 17:06:13', 'regular'),
(14, 'Formal Terno', 3000.00, 5, 'Formal Attire', '1778202484.jpg', '2026-05-07 17:08:04', '2026-05-07 17:08:04', 'regular'),
(15, 'Blue Terno', 799.00, 10, 'Terno Outfit', '1778202528.jpg', '2026-05-07 17:08:48', '2026-05-07 17:08:48', 'regular'),
(16, 'Toddler Terno for Girl', 400.00, 10, 'Terno Outfit', '1778202565.jpg', '2026-05-07 17:09:25', '2026-05-07 17:09:25', 'regular'),
(17, 'Exclusive V1 Shades', 599.00, 5, 'Exclusive Items', '1778202637.jpg', '2026-05-07 17:10:38', '2026-05-07 17:10:38', 'regular'),
(18, 'Cream Cap', 399.00, 5, 'Caps', '1778202679.jpg', '2026-05-07 17:11:19', '2026-05-07 21:35:06', 'new'),
(19, 'Beanie', 449.00, 5, 'Cap', '1778202736.jpg', '2026-05-07 17:12:16', '2026-05-07 21:34:32', 'new'),
(20, 'V2 Shades', 799.00, 5, 'Trendy Shades', '1778215871.jpg', '2026-05-07 20:51:11', '2026-05-07 21:33:34', 'new'),
(21, 'Maong Shorts', 550.00, 15, 'Maong Shorts', '1778215934.jpg', '2026-05-07 20:52:14', '2026-05-07 21:33:48', 'new'),
(22, 'Polo Shirt', 599.00, 10, 'White Polo', '1778217853.jpg', '2026-05-07 21:24:13', '2026-05-07 21:34:06', 'sale'),
(23, 'Printed Shirt', 400.00, 10, 'Japanese Printed Shirt', '1778218595.jpg', '2026-05-07 21:36:35', '2026-05-07 21:36:35', 'regular'),
(24, 'Blue Sweater', 499.00, 10, 'Cold Outfit', '1779204233.jpg', '2026-05-19 07:23:53', '2026-05-19 07:23:53', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AZsnDjVWR12QyAsriZcnyQWDCV4Mf9SNFoGkVszI', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS2diQ1dVN1Q5N1BkMEFOR3ZUcEdGWEJ0Um9XWWtqcXRLN1ZiV3FnWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1779204379),
('Bxc4xMsQjFFaPCsN8veOgo3qaW9tzWf0eeMHwBiK', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYnhiYkoxVVgzN2h2UmpNNnlsWWVBZHg0aGQ0ZWtJTUJoVnpoWWZ2eSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjY0OiIxNjk2OTEzZTEwZmJlYTg2NTEyOGNiZGU1MmI2N2E1OGNlYjI3ZDNiMjgyYmUwZWEwMTg0ZTgyZTJhN2NkNjk2Ijt9', 1779204956),
('X80y6k4uNe85230WTvfOPcsx4ofPSqjGeiuDMk4K', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWt4eXloZHk4RXZtMGUyNWJSbTJHTzBxaExjN1VBaDlJVXpTcXBRdCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hY2NvdW50Ijt9fQ==', 1779204998);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Lance', 'user@gmail.com', '0', '0912345', 'caloocan', NULL, '$2y$12$ZMIhD.gcTQmrTtfDDSyu4O1AuGZKR2z/gGKercJ.CO4FpM7zbDYUK', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-02 17:49:05', '2026-05-19 06:45:20'),
(2, 'admin', 'admin@gmail.com', '1', '123456', 'caloocan', NULL, '$2y$12$It/CuUN7OxzdpN72zwRc/.BClD91WkawxOQZL8bCq6DEKwj6DDFkm', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-02 17:50:21', '2026-05-02 17:50:21'),
(3, 'Lance Michael', 'nglance1234@gmail.com', '0', '09123456789', 'Caloocan', NULL, '$2y$12$FBBIEvY.7yxbuPnerxzBJ.0q5KGMOPDdez/k/ZsK3.EyEbbccX.O.', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-10 01:02:07', '2026-05-10 01:02:07'),
(4, 'Jhoana Paula', 'paula@gmail.com', '0', '0912345555', 'Sta. Mesa', NULL, '$2y$12$s89QcMJ2oc9qA3e71BgpGe1.KKeUmnAK6X9kNgq/Ig0vwjIj43daW', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-10 01:11:21', '2026-05-10 01:11:21'),
(5, 'Juan Mario', 'juan@gmail.com', '0', '123456', 'Manila', NULL, '$2y$12$v6rP7deRhh.xnE4NiNbpl.jYRm0p8.00U54qAgcQBx33tiQdieklu', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-10 01:14:12', '2026-05-10 01:14:12'),
(6, 'Michael', 'lance123@gmail.com', '0', '1235', 'Manila', NULL, '$2y$12$aOP.2QSGFUZsebfC5aJOx..p8pcYHBIvQ3/aK9BbT/fDHRfpx3Cqi', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-10 01:21:32', '2026-05-10 01:21:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passkeys`
--
ALTER TABLE `passkeys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passkeys_credential_id_unique` (`credential_id`),
  ADD KEY `passkeys_user_id_index` (`user_id`);

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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `passkeys`
--
ALTER TABLE `passkeys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passkeys`
--
ALTER TABLE `passkeys`
  ADD CONSTRAINT `passkeys_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
