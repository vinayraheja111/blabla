-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2023 at 05:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blabla`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookrides`
--

CREATE TABLE `bookrides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `seat` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookrides`
--

INSERT INTO `bookrides` (`id`, `origin`, `destination`, `post_id`, `date`, `seat`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Delhi', 'Hisar', 2, '1996-04-24', 4, 24, '2023-01-29 06:32:23', '2023-01-29 06:32:23'),
(2, 'Hisar', 'Delhi', 1, '2013-01-09', 1, 229, '2023-01-29 06:55:50', '2023-01-29 06:55:50'),
(3, 'Hisar', 'Delhi', 1, '2013-01-09', 1, 229, '2023-01-29 06:56:28', '2023-01-29 06:56:28'),
(4, 'Hisar', 'Delhi', 1, '2013-01-09', 1, 229, '2023-01-29 06:58:20', '2023-01-29 06:58:20'),
(5, 'Delhi', 'Hisar', 2, '1996-04-24', 2, 24, '2023-01-29 10:44:13', '2023-01-29 10:44:13'),
(6, 'Hisar', 'Delhi', 1, '2013-01-09', 1, 229, '2023-01-29 10:47:00', '2023-01-29 10:47:00'),
(7, 'Delhi', 'Hisar', 2, '1996-04-24', 2, 24, '2023-01-29 10:47:10', '2023-01-29 10:47:10'),
(8, 'Hisar', 'Delhi', 1, '2013-01-09', 4, 229, '2023-01-29 10:47:26', '2023-01-29 10:47:26'),
(9, 'Hisar', 'Delhi', 1, '2013-01-09', 1, 229, '2023-01-29 11:03:46', '2023-01-29 11:03:46'),
(10, 'Hisar', 'Delhi', 1, '2013-01-09', 1, 229, '2023-01-29 11:04:52', '2023-01-29 11:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Suzuki', 'white', NULL, NULL),
(2, 'Hyundai', 'Red', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Delhi', NULL, NULL),
(2, 'Hisar', NULL, NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_01_28_102947_create_post_rides_table', 1),
(3, '2023_01_28_112518_create_cities_table', 1),
(4, '2023_01_28_120916_create_cars_table', 1),
(5, '2023_01_29_054730_create_bookrides_table', 1),
(6, '2023_01_29_112700_post', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_rides`
--

CREATE TABLE `post_rides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orgin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `time` time NOT NULL,
  `droptime` time NOT NULL,
  `type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `license` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `luggage` varchar(255) NOT NULL,
  `back_sitting` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `seats` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_rides`
--

INSERT INTO `post_rides` (`id`, `orgin`, `destination`, `dates`, `time`, `droptime`, `type`, `brand`, `model`, `color`, `year`, `license`, `image`, `luggage`, `back_sitting`, `other`, `seats`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Hisar', 'Delhi', '2013-01-09', '14:20:00', '06:06:00', 'one Time', 'Suzuki', 'hidden', 'white', 2018, '140', NULL, 'Small', NULL, NULL, -6, 229, '2023-01-29 06:21:59', '2023-01-29 11:04:52'),
(2, 'Delhi', 'Hisar', '1996-04-24', '15:09:00', '11:23:00', 'one Time', 'Hyundai', 'hidden', 'Red', 1972, '190', NULL, 'No Luggage', NULL, NULL, 0, 24, '2023-01-29 06:32:00', '2023-01-29 10:47:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookrides`
--
ALTER TABLE `bookrides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookrides_post_id_index` (`post_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_rides`
--
ALTER TABLE `post_rides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookrides`
--
ALTER TABLE `bookrides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_rides`
--
ALTER TABLE `post_rides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookrides`
--
ALTER TABLE `bookrides`
  ADD CONSTRAINT `bookrides_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post_rides` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
