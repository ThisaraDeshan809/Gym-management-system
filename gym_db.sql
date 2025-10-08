-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2025 at 11:04 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

DROP TABLE IF EXISTS `attendances`;
CREATE TABLE IF NOT EXISTS `attendances` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1737827351;', 1737827351),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1737827351),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:4:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:12:\"Manage Users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:22:\"Access Admin Dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:21:\"Access User Dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:3;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:16:\"Manage Employees\";s:1:\"c\";s:3:\"web\";}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:7:\"Trainer\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:4:\"User\";s:1:\"c\";s:3:\"web\";}}}', 1738469598);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE IF NOT EXISTS `equipments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `description`, `image`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Test New', 'xzfgzfbv', 'eYacH79ydVwVMHpNuLXMuyDm629o50dNolGkAW5m.webp', 10, '2025-01-24 14:38:11', '2025-01-24 14:38:11'),
(2, 'Test New', 'xzfgzfbv', 'Lp10GYELsPvEDVxRfelnOHkHI4AEdjnnP8yWyG8m.webp', 10, '2025-01-24 14:40:35', '2025-01-24 14:40:35'),
(3, 'Test New', 'vbmnvchj', 'o8g2aCHSa0KBl86HkkVShLOBek5MRurHH8VI8Te5.webp', 10, '2025-01-24 14:41:12', '2025-01-24 14:41:12'),
(4, 'Test New', 'zfgvbzfb', 'JkRT0eoCueWJwf1JQo0c45i38TGiGptPz4Wf40FM.webp', 10, '2025-01-24 14:42:40', '2025-01-24 14:42:40'),
(5, 'Test New', 'cvbnfxcgn', 'OtjJSPNcGgZtRA84tXnbrbQP66Wp17TL4FlGaloB.webp', 10, '2025-01-24 14:43:45', '2025-01-24 14:43:45'),
(6, 'Test New', 'zdvz', 'frpQ66u3z0cf6yOVDkF3IiyCLtCFPxFi5Pbz36LJ.webp', 10, '2025-01-24 14:44:56', '2025-01-24 14:44:56'),
(7, 'zVzsdv', 'zdvzsdv', 'dUphHukCrkwQbO8fR0IPGyUkAsDq1RnM8dYCLwtt.webp', 4, '2025-01-24 14:53:51', '2025-01-24 14:53:51'),
(8, 'ZSDfgzsdg', 'zvsgsg', 'XEv2M0rEoZvMn4oNex81JSugMXlgsn5L00vLpoKB.webp', 6, '2025-01-24 14:54:45', '2025-01-24 14:54:45'),
(9, 'zxgvzf', 'xdbhxdb', 'rtq37I5u21NYrbydUagmklVyVnX35qZzBMpH88MF.webp', 6, '2025-01-24 14:58:30', '2025-01-24 14:58:30'),
(10, 'zxgvzf', 'fghfdhg', 'x5oLIj2B4fdKe27sSkzvIvP1HRfJeE8s3S5HcJc8.webp', 6, '2025-01-25 00:02:45', '2025-01-25 00:02:45'),
(11, 'zsgzv', 'xghxfgh', 'JudYpPYBCsKwsJoy5ypASeFtYzNZcK3qFCtoNSSr.webp', 9, '2025-01-25 00:04:26', '2025-01-25 00:04:26'),
(12, 'zsgzv', 'szvzsv', 'QGhdyv78ZHzmRqxnoEF6W5u6NO5dDHa7gMQsnAhf.webp', 9, '2025-01-25 00:05:07', '2025-01-25 00:05:07'),
(13, 'zsgzv', 'xzbb', 'JWArqDCw39vcRo2IjEYKpcLwzUQc9n7PrIocxEOp.webp', 9, '2025-01-25 00:05:53', '2025-01-25 00:05:53'),
(14, 'zvgzsv', 'zfgvzfg', 'Pv8OJ4xJvhXJ5Re7Typu3KklFEkUwDPUnyki2SS0.webp', 5, '2025-01-25 00:11:02', '2025-01-25 00:11:02'),
(15, 'zvgzsv', 'zsfvgzfb', '33kbLHXa90LXspYhAx9FnVetXfnA4Lohw6bfjmyA.webp', 5, '2025-01-25 00:41:05', '2025-01-25 00:41:05'),
(16, 'vbnfjh', 'ghjghj', 'OQborI4waAOTbkEIH0GSeYQS83p9uuThzRbCHk1k.jpg', 6, '2025-01-27 07:07:22', '2025-01-27 07:07:22'),
(17, 'xbxghfgxh', 'xfgnxfgn', 'OD2WwRdAQOWFWWlMMolRBSatxUjIORTzW3DT9IWj.jpg', 20, '2025-02-01 04:40:36', '2025-02-01 04:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_reservations`
--

DROP TABLE IF EXISTS `equipment_reservations`;
CREATE TABLE IF NOT EXISTS `equipment_reservations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `equipment_id` int NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_out` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'reserved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_reservations`
--

INSERT INTO `equipment_reservations` (`id`, `user_id`, `equipment_id`, `date`, `time_in`, `time_out`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2025-01-25', '13:13', '14:14', 'completed', '2025-01-25 01:11:43', '2025-01-25 13:27:24'),
(2, 2, 1, '2025-02-01', '10:02', '11:02', 'cancelled', '2025-01-31 23:02:35', '2025-01-31 23:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_13_061024_add_two_factor_columns_to_users_table', 1),
(5, '2024_07_13_061115_create_personal_access_tokens_table', 1),
(6, '2024_07_13_061557_create_permission_tables', 1),
(7, '2024_12_31_135358_create_employees_table', 1),
(8, '2025_01_07_180840_create_price_packages_table', 1),
(9, '2025_01_11_193305_add_column_type_users_table', 1),
(10, '2025_01_12_033317_create_table_attendances_table', 1),
(11, '2025_01_12_041225_create_table_payments_table', 1),
(12, '2025_01_12_183052_add_column_duration_price_packages_table', 1),
(13, '2025_01_19_054830_create_table_trainerreservations_table', 2),
(14, '2025_01_19_060702_create_equipments_table', 3),
(15, '2025_01_19_080118_add_column_status_trainerreservations_table', 3),
(17, '2025_01_25_062722_create_equipment_reservations_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `package_id` int DEFAULT NULL,
  `package_expire_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'monthly',
  `payment_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `package_id`, `package_expire_date`, `payment_method`, `payment_status`, `payment_type`, `payment_amount`, `payment_date`, `payment_month`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, 'cash_payment', 'pending', 'package', '25000', '2025-01-31', '2025-01', '2025-01-30 23:31:40', '2025-01-30 23:31:40'),
(2, 2, 1, NULL, 'cash_payment', 'pending', 'package', '25000', '2025-01-31', '2025-01', '2025-01-30 23:32:24', '2025-01-30 23:32:24'),
(3, 2, 1, NULL, 'cash_payment', 'paid', 'package', '25000', '2025-01-31', '2025-01', '2025-01-30 23:33:23', '2025-01-31 22:57:31'),
(4, 2, 4, '2025-05-01 04:14:04', 'online_payment', 'paid', 'package', '1000', '2025-02-01', '2025-02', '2025-01-31 22:44:04', '2025-01-31 22:56:48'),
(5, 2, 1, '2025-05-01 09:37:59', 'online_payment', 'paid', 'package', '25000', '2025-02-01', '2025-02', '2025-02-01 04:07:59', '2025-02-01 04:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Manage Users', 'web', '2025-01-13 11:30:55', '2025-01-13 11:30:55'),
(2, 'Access Admin Dashboard', 'web', '2025-01-13 11:30:55', '2025-01-13 11:30:55'),
(3, 'Access User Dashboard', 'web', '2025-01-13 11:30:55', '2025-01-13 11:30:55'),
(4, 'Manage Employees', 'web', '2025-01-13 11:30:55', '2025-01-13 11:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price_packages`
--

DROP TABLE IF EXISTS `price_packages`;
CREATE TABLE IF NOT EXISTS `price_packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `trainer_id` int DEFAULT NULL,
  `package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_packages`
--

INSERT INTO `price_packages` (`id`, `trainer_id`, `package_name`, `package_description`, `price`, `duration`, `created_at`, `updated_at`) VALUES
(1, NULL, '3 months package', '3 months package', 25000.00, 3, '2025-01-18 23:02:41', '2025-02-01 05:16:22'),
(4, 3, 'Deshan', 'xgbxbgn', 1000.00, 3, '2025-01-19 03:53:00', '2025-01-19 03:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2025-01-13 11:30:55', '2025-01-13 11:30:55'),
(2, 'User', 'web', '2025-01-13 11:30:55', '2025-01-13 11:30:55'),
(3, 'Trainer', 'web', '2025-01-13 12:07:06', '2025-01-13 12:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LLfcqikH2IO3P6puY9GDAepwTZelWfYFpKGvmBMS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 Edg/132.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWXJFNFJsdXVvM2pDcjhXZUpQWFljeFZsdFBWd1FYb2dHeTM3cDVzZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGwtUGFja2FnZXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJDd5QmtpQ0N6R2Z4WE9RRkwuc3RmRi5MU1p2VThXODdzeS5yMkJOc0g2VFFmZlY5Ym1MQ3BHIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJDd5QmtpQ0N6R2Z4WE9RRkwuc3RmRi5MU1p2VThXODdzeS5yMkJOc0g2VFFmZlY5Ym1MQ3BHIjt9', 1738406782);

-- --------------------------------------------------------

--
-- Table structure for table `trainerreservations`
--

DROP TABLE IF EXISTS `trainerreservations`;
CREATE TABLE IF NOT EXISTS `trainerreservations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `trainer_id` int NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_out` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'reserved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainerreservations`
--

INSERT INTO `trainerreservations` (`id`, `user_id`, `trainer_id`, `date`, `time_in`, `time_out`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2025-01-19', '11:30', '00:30', 'reserved', '2025-01-19 00:32:09', '2025-01-19 00:32:09'),
(2, 2, 3, '2025-01-19', '11:33', '00:34', 'completed', '2025-01-19 00:33:23', '2025-01-24 12:52:22'),
(3, 2, 3, '2025-01-27', '17:52', '18:53', 'cancelled', '2025-01-27 06:52:51', '2025-01-31 23:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'management',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'devrcs@gmail.com', 'management', NULL, NULL, '$2y$12$7yBkiCCzGfxXOQFL.stfF.LSZvU8W87sy.r2BNsH6TQffV9bmLCpG', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-13 11:30:55', '2025-01-13 11:30:55'),
(2, 'Thisara', 'thisaradeshan2@gmail.com', 'customer', NULL, NULL, '$2y$12$8d8py3xvTxjMPyzdwnl3Ie41ZQE9AeBCcbcE9G1dWARNT9ouyTMBe', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-13 11:32:01', '2025-01-13 11:32:01'),
(3, 'Thisara Deshan', 'thisaradeshan1999@gmail.com', 'management', '0705749257', NULL, '$2y$12$33CyLFolNT2ebZOifRrIFeg/8q2jpXIBJyYgl1DNNCczwcjLW0UrK', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-18 23:29:42', '2025-01-18 23:29:42'),
(4, 'test@email.com', 'test@email.com', 'management', '0771255809', NULL, '$2y$12$Le8PfH1WMEKR2S63DCnscuVFvaMnduLzifZ5odzIyGTgrcMWgCKeq', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-27 07:15:36', '2025-01-27 07:15:36'),
(5, 'Thisara Deshan', 'thisaradeshan45@gmail.com', 'management', '0705749257', NULL, '$2y$12$VixQlKEzik3GCDu8ttMHqOTZrOxgULP.DVkxF2bALQNho2pC2szO.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-01 03:50:54', '2025-02-01 03:50:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
