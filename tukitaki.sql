-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 07:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tukitaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `ca_book_nows`
--

CREATE TABLE `ca_book_nows` (
  `id` int(10) UNSIGNED NOT NULL,
  `cabook_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabook_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabook_button` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabook_button_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabook_get` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabook_status` int(11) NOT NULL DEFAULT '1',
  `cabook_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabook_call` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabook_book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_book_nows`
--

INSERT INTO `ca_book_nows` (`id`, `cabook_heading`, `cabook_details`, `cabook_button`, `cabook_button_url`, `cabook_get`, `cabook_status`, `cabook_image`, `cabook_call`, `cabook_book`, `created_at`, `updated_at`) VALUES
(1, 'MEET BD HOME SERVICE', 'amader', 'Learn More', 'https://www.w3schools.com/', 'GET ANYTHING DONE IN JUST ONE MINUTE', 2, 'call_book_image/FB32cu2F3HGRtYE9y3mSTqzSZKtEFZOEBx7aOcTD.png', 'Call Now', 'Book Now', NULL, '2019-02-07 09:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `client_service_requests`
--

CREATE TABLE `client_service_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `selected_service_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selected_sub_service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selected_service_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selected_service_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_service_requests`
--

INSERT INTO `client_service_requests` (`id`, `selected_service_area`, `selected_sub_service`, `selected_service_street`, `contact_num`, `selected_service_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '23-b block', '01783220203', 2, '2019-02-10 00:55:55', '2019-02-11 00:03:29', NULL),
(2, '6', '2', 'Rojoni Chawdury Road', '01783220203', 2, '2019-02-10 00:57:16', '2019-02-11 10:08:38', NULL),
(3, '2', '4', 'gan', '01783220203', 2, '2019-02-10 01:52:15', '2019-02-11 00:07:56', NULL),
(4, '2', '6', '23-b block', '01783220203', 2, '2019-02-10 01:52:31', '2019-02-14 09:18:50', NULL),
(5, '3', '7', '23-b block', '01783220203', 1, '2019-02-10 01:52:50', NULL, NULL),
(6, '5', '8', 'ganjksl hdj', '01783220203', 1, '2019-02-10 01:53:04', NULL, NULL),
(7, '7', '10', '15-b', '01783220203', 1, '2019-02-10 01:54:56', NULL, NULL),
(8, '8', '12', 'ganjksl hdj', '01783220203', 1, '2019-02-10 01:55:10', NULL, NULL),
(9, '10', '13', 'Rojoni Chawdury Road', '01783220203', 1, '2019-02-10 01:55:37', NULL, NULL),
(10, '12', '17', 'Rojoni Chawdury Road', '01783220203', 1, '2019-02-10 01:55:53', NULL, NULL),
(11, '13', '14', '23-b block', '01783220203', 2, '2019-02-10 01:56:21', '2019-02-11 10:07:32', NULL),
(12, '6', '1', 'Rojoni Chawdury Road', '018202020', 2, '2019-02-11 10:05:21', '2019-02-11 10:05:49', NULL),
(13, '6', '1', '44/1', '01783221345', 1, '2019-02-14 09:17:16', NULL, NULL),
(14, '6', '1', '15-b', '017832203983', 2, '2019-02-21 00:09:06', '2019-02-21 00:10:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2019_01_29_203457_create_services_table', 2),
(38, '2019_01_30_195706_create_why_bd_homes_table', 2),
(39, '2019_01_31_151147_create_why_bgs_table', 2),
(40, '2019_02_04_120546_create_ca_book_nows_table', 2),
(41, '2019_02_07_051612_create_sub_services_table', 2),
(42, '2019_02_07_144058_create_sub_services_areas_table', 2),
(53, '2019_02_09_071040_create_client_service_requests_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_button` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=active,2=deactive',
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_details`, `service_button`, `service_status`, `service_image`, `created_at`, `updated_at`) VALUES
(1, 'Cleaning Service', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Confirm', 1, 'service_photos/XRHGQAGBOo6rlgJp7wl1BbLFULr2LFNfgvYKS7Qj.jpeg', NULL, '2019-02-07 10:39:17'),
(2, 'Baby Sitting', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Confirm', 1, 'service_photos/NF6GMnkCNMH9SKVCKI5DjMQdTVuAcuQ2lbfJy8Jj.jpeg', NULL, '2019-02-07 10:16:33'),
(3, 'Cooking Service', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Confirm', 1, 'service_photos/3rAa7DvOYlpGhupcRJDEX2vr1uIHfTlWrifhRnNZ.jpeg', NULL, '2019-02-07 10:26:02'),
(4, 'Plumbing Service', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Confirm', 1, 'service_photos/FBq9bUO4g9QZz2kPsxdlYAR8s5qwC3jHx854xl3e.jpeg', NULL, '2019-02-07 10:27:42'),
(5, 'Electrician', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Confirm', 1, 'service_photos/cf98JdgyuiDWwwaayeEPIzwQTUAgIjzBxrPMGht6.jpeg', NULL, '2019-02-08 22:58:21'),
(6, 'dskjf', 'dsfklj', 'dsfou', 1, 'service_photos/RGCwXjMiOBPWqOJHZF5llhXflb9JYAdyxXFuLLYm.jpeg', NULL, '2019-02-09 00:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL COMMENT 'foriegn key',
  `sub_service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `sub_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `service_id`, `sub_service`, `added_by`, `sub_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Carpet Cleaning', 1, 1, '2019-02-07 09:12:49', NULL, NULL),
(2, 1, 'Sofa Cleaning', 1, 1, '2019-02-07 09:12:49', NULL, NULL),
(3, 2, 'Infant Specialist', 1, 1, '2019-02-07 10:16:34', NULL, NULL),
(4, 2, 'Sitter And Language Teacher', 1, 1, '2019-02-07 10:16:34', NULL, NULL),
(5, 2, 'Responsible, Caring, Teacher Babysitter', 1, 1, '2019-02-07 10:16:34', NULL, NULL),
(6, 2, 'Montessori Teacher Babysitter', 1, 1, '2019-02-07 10:16:34', NULL, NULL),
(7, 3, 'Meat Cooking', 1, 1, '2019-02-07 10:26:02', NULL, NULL),
(8, 3, 'Rice Cooking', 1, 1, '2019-02-07 10:26:02', NULL, NULL),
(9, 3, 'Vegitable Cooking', 1, 1, '2019-02-07 10:26:02', NULL, NULL),
(10, 4, 'Water Tap Fixing', 1, 1, '2019-02-07 10:27:42', NULL, NULL),
(11, 4, 'Water Line Jam', 1, 1, '2019-02-07 10:27:42', NULL, NULL),
(12, 4, 'Complete New Setup Sanitary', 1, 1, '2019-02-07 10:27:42', NULL, NULL),
(13, 5, 'Fan Servicing', 1, 1, '2019-02-08 22:58:21', NULL, NULL),
(14, 5, 'Motor Survicing', 1, 1, '2019-02-08 22:58:21', NULL, NULL),
(15, 5, 'Light Instalation', 1, 1, '2019-02-08 22:58:21', NULL, NULL),
(16, 5, 'Ips Serviceing', 1, 1, '2019-02-08 22:58:21', NULL, NULL),
(17, 5, 'Lps Servicing', 1, 1, '2019-02-08 22:58:21', NULL, NULL),
(18, 6, 'Sofa Cleaning', 1, 1, '2019-02-09 00:51:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_services_areas`
--

CREATE TABLE `sub_services_areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_service_id` int(11) NOT NULL COMMENT 'foriegn key',
  `sub_ser_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_services_areas`
--

INSERT INTO `sub_services_areas` (`id`, `sub_service_id`, `sub_ser_area`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhanmondi', '2019-02-07 09:12:49', NULL),
(2, 2, 'Fulbari', NULL, NULL),
(3, 3, 'Gandaria', '2019-02-07 10:26:02', NULL),
(4, 3, 'Keranigonj', '2019-02-07 10:26:02', NULL),
(5, 3, 'Lalmatia', '2019-02-07 10:26:02', NULL),
(6, 1, 'Mohammadpur', '2019-02-07 10:27:42', NULL),
(7, 4, 'Basundara', '2019-02-07 10:27:43', NULL),
(8, 4, 'Shabag', '2019-02-07 10:27:43', NULL),
(9, 5, 'Shamoli', '2019-02-08 22:58:21', NULL),
(10, 5, 'Gabtoli', '2019-02-08 22:58:21', NULL),
(11, 5, 'Mohammadpur', '2019-02-08 22:58:21', NULL),
(12, 5, 'Panit tanki', '2019-02-08 22:58:21', NULL),
(13, 5, 'Uttara Sector 1', '2019-02-08 22:58:21', NULL),
(14, 5, 'Banani', '2019-02-08 22:58:21', NULL),
(15, 6, 'Lalmatia', '2019-02-09 00:51:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Delwar', 'cse.delwarhossain@gmail.com', NULL, '$2y$10$946I5bO5P/NNuYJ9EmpZZOIOXn8t/txZgjvxrpWxtlW0Lrs9HbbLW', 'LHl8da6C27k2gxcNS5oLguA4E4r1VyyxQr4KaToAGz5Hv5nNBT2L4vwKRN2t', '2019-01-30 03:08:12', '2019-01-30 03:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `why_bd_homes`
--

CREATE TABLE `why_bd_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_header_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=active,2=deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_bd_homes`
--

INSERT INTO `why_bd_homes` (`id`, `service_header_name`, `service_details`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 'Saves Money', 'dfs', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `why_bgs`
--

CREATE TABLE `why_bgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `why_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=active,2=deactive',
  `why_bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_bgs`
--

INSERT INTO `why_bgs` (`id`, `why_heading`, `service_status`, `why_bg_image`, `created_at`, `updated_at`) VALUES
(1, 'WHY BD HOME SERVICE', 2, 'why_bg_image/WDbbPc5gmvposYpVFpWYnLq0ZgqocJW4GeukeaOo.jpeg', NULL, '2019-02-07 09:14:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ca_book_nows`
--
ALTER TABLE `ca_book_nows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_service_requests`
--
ALTER TABLE `client_service_requests`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services_areas`
--
ALTER TABLE `sub_services_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_bd_homes`
--
ALTER TABLE `why_bd_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_bgs`
--
ALTER TABLE `why_bgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca_book_nows`
--
ALTER TABLE `ca_book_nows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_service_requests`
--
ALTER TABLE `client_service_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_services_areas`
--
ALTER TABLE `sub_services_areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_bd_homes`
--
ALTER TABLE `why_bd_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_bgs`
--
ALTER TABLE `why_bgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
