-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 08:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `solutions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `solutions`, `created_at`, `updated_at`) VALUES
(1, 'adhesive', '2019-07-26 00:45:31', '2019-07-26 00:45:31'),
(2, 'informative', '2019-07-26 00:48:29', '2019-07-26 00:48:29'),
(3, 'adoption', '2019-07-26 00:48:57', '2019-07-26 00:48:57'),
(4, 'connote', '2019-07-26 00:49:11', '2019-07-26 00:49:11'),
(5, 'scholarly', '2019-07-26 00:49:28', '2019-07-26 00:49:28'),
(6, 'nonsensical', '2019-07-26 00:49:42', '2019-07-26 00:49:42'),
(7, 'equanimity', '2019-07-26 00:50:17', '2019-07-26 00:50:17'),
(8, 'extensive', '2019-07-26 00:50:32', '2019-07-26 00:50:32'),
(9, 'lattice', '2019-07-26 00:50:45', '2019-07-26 00:50:45'),
(10, 'overfill', '2019-07-26 00:51:04', '2019-07-26 00:51:04'),
(11, 'assiduously', '2019-07-26 06:15:26', '2019-07-26 06:15:26'),
(12, 'force', '2019-07-26 06:15:55', '2019-07-26 06:15:55'),
(13, 'eager', '2019-07-26 06:16:10', '2019-07-26 06:16:10'),
(14, 'rest', '2019-07-26 06:16:28', '2019-07-26 06:16:28'),
(15, 'calcify', '2019-07-26 06:17:45', '2019-07-26 06:17:45'),
(16, 'accelerate', '2019-07-26 06:18:04', '2019-07-26 06:18:04'),
(17, 'flexible', '2019-07-26 06:18:16', '2019-07-26 06:18:16'),
(18, 'genteel', '2019-07-26 06:19:53', '2019-07-26 06:19:53'),
(19, 'genial', '2019-07-26 06:20:16', '2019-07-26 06:20:16'),
(20, 'democratic', '2019-07-26 06:20:49', '2019-07-26 06:20:49'),
(21, 'comprehensible', '2019-07-26 06:21:12', '2019-07-26 06:21:12'),
(22, 'compress', '2019-07-26 06:25:44', '2019-07-26 06:25:44'),
(23, 'inconceivable', '2019-07-26 06:26:00', '2019-07-26 06:26:00'),
(24, 'humane', '2019-07-26 06:26:15', '2019-07-26 06:26:15'),
(25, 'tiny', '2019-07-26 06:26:31', '2019-07-26 06:26:31'),
(26, 'adjacent', '2019-07-26 06:26:48', '2019-07-26 06:26:48'),
(27, 'proven', '2019-07-26 06:27:07', '2019-07-26 06:27:07'),
(28, 'mellow', '2019-07-26 06:27:19', '2019-07-26 06:27:19'),
(29, 'ethereal', '2019-07-26 06:27:33', '2019-07-26 06:27:33'),
(30, 'eulogise', '2019-07-26 06:27:52', '2019-07-26 06:27:52'),
(31, '165', '2019-07-26 06:28:14', '2019-07-26 06:28:14'),
(32, '42', '2019-07-26 06:28:32', '2019-07-26 06:28:32'),
(33, '72', '2019-07-26 06:28:58', '2019-07-26 06:28:58'),
(34, '135', '2019-07-26 06:29:11', '2019-07-26 06:29:11'),
(35, '14', '2019-07-26 06:29:26', '2019-07-26 06:29:26'),
(36, '24', '2019-07-26 06:29:40', '2019-07-26 06:29:40'),
(37, '87.5', '2019-07-26 06:29:56', '2019-07-26 06:29:56'),
(38, '61', '2019-07-26 06:30:15', '2019-07-26 06:30:15'),
(39, '458', '2019-07-26 06:30:29', '2019-07-26 06:30:29'),
(40, '168', '2019-07-26 06:30:43', '2019-07-26 06:30:43'),
(41, '1', '2019-07-30 06:13:06', '2019-07-30 06:13:06'),
(42, '1', '2019-07-30 06:18:46', '2019-07-30 06:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programme_id` int(11) NOT NULL,
  `coursetitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_05_04_000617_create_courses_table', 1),
(5, '2019_07_25_184054_create_answers_table', 2),
(7, '2019_07_26_203954_create_personality_table', 4),
(10, '2019_05_03_224253_create_programmes_table', 7),
(11, '2019_07_27_050838_create_schorlastics_table', 8),
(12, '2019_07_27_025822_create_personalities_table', 9),
(13, '2019_07_26_023759_create_results_table', 10);

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
-- Table structure for table `personalities`
--

CREATE TABLE `personalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `socials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enterprising` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conventional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realistic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artistic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personalities`
--

INSERT INTO `personalities` (`id`, `user_id`, `socials`, `enterprising`, `conventional`, `realistic`, `investigative`, `artistic`, `assessment`, `created_at`, `updated_at`) VALUES
(1, 2, '12', '7', '4', '4', '1', '2', 'Socials', '2019-07-30 16:37:42', '2019-07-30 16:37:42'),
(2, 1, '5', '3', '10', '2', '1', '4', 'Conventional', '2019-07-30 17:18:38', '2019-07-30 17:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

CREATE TABLE `personality` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `socials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enterprising` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conventional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realistic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artistic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programmename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(191) NOT NULL,
  `correctanswer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `correctanswer`, `assessment`, `created_at`, `updated_at`) VALUES
(1, 2, '20', 'Good', '2019-07-30 16:33:12', '2019-07-30 16:33:12'),
(2, 1, '30', 'Very Good', '2019-07-30 17:17:52', '2019-07-30 17:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `schorlastics`
--

CREATE TABLE `schorlastics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `examstype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `averagescore` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schorlastics`
--

INSERT INTO `schorlastics` (`id`, `user_id`, `examstype`, `averagescore`, `assessment`, `created_at`, `updated_at`) VALUES
(1, 2, 'G.R.E', '15', 'Very Good', '2019-07-30 16:38:20', '2019-07-30 16:38:20'),
(2, 1, 'Degree', '6', 'Exceptional', '2019-07-30 17:18:59', '2019-07-30 17:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edulevel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `edulevel`, `age`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roland', 'Aryee', 'niiayikumaaryee@gmail.com', 'Secondary Level', '29', NULL, '$2y$10$ho23esTsZ7VmMy0mhZS7GOScA/F565P5.WCQqRyX3OQ4xqBJkC01i', '0', NULL, '2019-07-25 05:26:58', '2019-07-30 14:51:02'),
(2, 'Robert', 'Codjoe', 'gameboy12@yahoo.com', 'Secondary Level', '26', NULL, '$2y$10$8sDqnUaO1T8QKHR77JKat.1Q0YJOKvA/5trDpdQoqHuxSPEP1mrr6', '1', NULL, '2019-07-30 02:09:12', '2019-07-30 02:09:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `personalities`
--
ALTER TABLE `personalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personality`
--
ALTER TABLE `personality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schorlastics`
--
ALTER TABLE `schorlastics`
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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personalities`
--
ALTER TABLE `personalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personality`
--
ALTER TABLE `personality`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schorlastics`
--
ALTER TABLE `schorlastics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
