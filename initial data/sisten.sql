-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 04:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisten`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicant_number` int(10) UNSIGNED NOT NULL,
  `participant_registration_number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `send_date` datetime NOT NULL,
  `score` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decision` tinyint(1) DEFAULT NULL,
  `decision_date` datetime DEFAULT NULL,
  `total_hour` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicant_number`, `participant_registration_number`, `vacancy_id`, `send_date`, `score`, `motivation`, `decision`, `decision_date`, `total_hour`, `created_at`, `updated_at`) VALUES
(1, '12S18027', 1, '2021-07-04 21:25:20', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:20', 0, '2021-07-04 14:25:20', NULL),
(2, '12S18055', 1, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(3, '12S18032', 2, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(4, '12S18048', 2, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(5, '12S18002', 3, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(6, '12S18015', 3, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(7, '12S18047', 4, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(8, '12S18026', 4, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(9, '11S18061', 5, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(10, '11S18034', 5, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(11, '11S18022', 6, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(12, '11S18051', 6, '2021-07-04 21:25:21', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:21', 0, '2021-07-04 14:25:21', NULL),
(13, '11S18067', 7, '2021-07-04 21:25:22', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:22', 0, '2021-07-04 14:25:22', NULL),
(14, '21S18067', 7, '2021-07-04 21:25:22', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:22', 0, '2021-07-04 14:25:22', NULL),
(15, '21S18066', 8, '2021-07-04 21:25:22', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:22', 0, '2021-07-04 14:25:22', NULL),
(16, '21S18062', 8, '2021-07-04 21:25:22', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:22', 0, '2021-07-04 14:25:22', NULL),
(17, '14S18053', 9, '2021-07-04 21:25:22', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:22', 0, '2021-07-04 14:25:22', NULL),
(18, '14S18050', 9, '2021-07-04 21:25:22', 'A', 'Want to teach and become a student who makes money', 1, '2021-07-04 21:25:22', 0, '2021-07-04 14:25:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_registration_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_number` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_initial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` tinyint(4) NOT NULL,
  `course_owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_initial`, `name`, `credit`, `course_owner_id`, `created_at`, `updated_at`) VALUES
(1, 'MAS2001', 'PROBSTAT', 'Probabilitas dan Statistika', 3, 1, NULL, NULL),
(2, '11S1213', 'IMK', 'Interaksi Manusia Komputer', 3, 9, NULL, NULL),
(3, '12S2102', 'BASDAT', 'Basis Data', 4, 2, NULL, NULL),
(4, '10S2201', 'ALJALI', 'Aljabar Linear', 3, 1, NULL, NULL),
(5, '10S2203', 'SISOP', 'Sistem Operasi', 3, 2, NULL, NULL),
(6, '12S2201', 'ADS', 'Analisis dan Desain Sistem', 3, 9, NULL, NULL),
(7, '12S2203', 'PBO', 'Pemrograman Berorientasi Objek', 3, 9, NULL, NULL),
(8, '12S3101', 'PPW', 'Pemrograman dan Pengujian Aplikasi Web', 4, 9, NULL, NULL),
(9, '12S3203', 'PSI', 'Proyek Sistem Informasi', 4, 9, NULL, NULL),
(10, 'KUS093', 'CITDIG', 'Citra Digital', 3, 2, NULL, NULL),
(11, 'KUS094', 'STA', 'Sains Technology & Art', 2, 1, NULL, NULL),
(12, 'KUS1202', 'PDR', 'Pengantar Desain & Rekayasa', 2, 1, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(13, '11S1213', 'RPL', 'Rekayasa Perangkat Lunak', 3, 2, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(14, '10S2202', 'JARKOM', 'Jaringan Komputer', 3, 2, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(15, '11S2110', 'PBO', 'Pemrograman Berorientasi Objek', 4, 8, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(16, '11S2203', 'IMK', 'Interaksi Manusia Komputer', 3, 8, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(17, '12S4081', 'PBD SI', 'Pengenalan Basis Data dan Sistem Informasi', 4, 7, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(18, 'MAS1101', 'MADAS I', 'Matematika Dasar I', 4, 1, '2021-07-04 14:25:09', '2021-07-04 14:25:09'),
(19, 'MAS1201', 'MADAS II', 'Matematika Dasar II', 4, 1, '2021-07-04 14:25:10', '2021-07-04 14:25:10'),
(20, 'FIS1103', 'FISDAS', 'Fisika Dasar', 4, 9, '2021-07-04 14:25:10', '2021-07-04 14:25:10'),
(21, 'FIS1102', 'FISDAS IB', 'Fisika Dasar IB', 4, 1, '2021-07-04 14:25:10', '2021-07-04 14:25:10'),
(22, 'FIS1202', 'FISDAS IIB', 'Fisika Dasar IIB', 4, 1, '2021-07-04 14:25:10', '2021-07-04 14:25:10'),
(23, 'TIS1101', 'INDIG', 'Inovasi Digital', 2, 1, '2021-07-04 14:25:10', '2021-07-04 14:25:10'),
(24, '14S2103', 'RE', 'Rangkaian Elektrik', 2, 6, '2021-07-04 14:25:10', '2021-07-04 14:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `course_owner`
--

CREATE TABLE `course_owner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curriculum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_owner`
--

INSERT INTO `course_owner` (`id`, `name`, `curriculum`, `level`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Institute', 'DEL-2019', 'Institute', 'active', ' ', '2021-07-04 14:25:10', NULL),
(2, 'Faculty of Informatics and Electrical Engineering', 'FITE-2019', 'Faculty', 'active', ' ', '2021-07-04 14:25:10', NULL),
(3, 'Faculty of Biotechnology', 'FB-2019', 'Faculty', 'active', ' ', '2021-07-04 14:25:10', NULL),
(4, 'Faculty of Industrial Engineering', 'FTI-2019', 'Faculty', 'active', ' ', '2021-07-04 14:25:10', NULL),
(5, 'Bachelor of Information System', 'S1SI-2014', 'Study-Program', 'inactive', ' ', '2021-07-04 14:25:10', NULL),
(6, 'Bachelor of Electrical Engineering', 'S1TE-2019', 'Study-Program', 'active', ' ', '2021-07-04 14:25:10', NULL),
(7, 'Bachelor of Management Engineering', 'S1MR-2019', 'Study-Program', 'active', ' ', '2021-07-04 14:25:10', NULL),
(8, 'Bachelor of Informatics Engineering', 'S1IF-2019', 'Study-Program', 'active', ' ', '2021-07-04 14:25:10', NULL),
(9, 'Bachelor of Information System', 'S1SI-2019', 'Study-Program', 'active', ' ', '2021-07-04 14:25:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attachment_id` int(11) NOT NULL,
  `file_name` varchar(54) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `log_number` int(10) UNSIGNED NOT NULL,
  `semester_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `activity_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activityreport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`log_number`, `semester_id`, `schedule_id`, `attendance`, `activity_type`, `date_time`, `description`, `activityreport`, `status`, `attachment_id`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 22, 'Practicum', '2021-04-20 10:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:25', '2021-07-04 14:25:25'),
(2, '2', 4, 22, 'Practicum', '2021-04-20 10:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:25', '2021-07-04 14:25:25'),
(3, '3', 7, 22, 'Practicum', '2021-04-10 08:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:25', '2021-07-04 14:25:25'),
(4, '4', 10, 22, 'Practicum', '2021-04-10 08:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:26', '2021-07-04 14:25:26'),
(5, '5', 13, 22, 'Practicum', '2021-04-17 13:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:26', '2021-07-04 14:25:26'),
(6, '6', 16, 22, 'Practicum', '2021-04-17 13:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:26', '2021-07-04 14:25:26'),
(7, '7', 19, 22, 'Practicum', '2021-04-17 15:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:26', '2021-07-04 14:25:26'),
(8, '8', 22, 22, 'Practicum', '2021-04-17 08:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:26', '2021-07-04 14:25:26'),
(9, '9', 25, 22, 'Practicum', '2021-04-17 08:00:00', 'Practicum for week 1', 'Nothing', 'unapprove', NULL, '2021-07-04 14:25:26', '2021-07-04 14:25:26');

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
(1, '2014_10_12_000000_create_user_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_05_135425_create_course_table', 1),
(5, '2021_04_05_151159_create_userlogactivity_table', 1),
(6, '2021_04_05_152459_create_schedule_table', 1),
(7, '2021_04_11_043529_create_application_table', 1),
(8, '2021_04_11_044215_create_comment_table', 1),
(9, '2021_04_11_044215_create_vacancy_table', 1),
(10, '2021_04_16_144831_create_log_activity_table', 1),
(11, '2021_05_03_150754_add_status_column', 1),
(12, '2021_05_15_101903_create_semester_table', 1),
(13, '2021_05_16_121430_create_user_semester_table', 1),
(14, '2021_05_19_122507_create_permission_tables', 1),
(15, '2021_05_19_144959_create_course_owner_table', 1),
(16, '2021_05_29_142508_create_file_table', 1),
(17, '2021_05_29_142534_create_attachment_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 34),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(4, 'App\\Models\\User', 9),
(4, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 18),
(4, 'App\\Models\\User', 19);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'baak', 'web', '2021-07-04 14:25:08', '2021-07-04 14:25:08'),
(2, 'lecturer', 'web', '2021-07-04 14:25:08', '2021-07-04 14:25:08'),
(3, 'teaching_assistant', 'web', '2021-07-04 14:25:08', '2021-07-04 14:25:08'),
(4, 'student', 'web', '2021-07-04 14:25:08', '2021-07-04 14:25:08'),
(5, 'unauthorized', 'web', '2021-07-04 14:25:08', '2021-07-04 14:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` int(11) NOT NULL,
  `session_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `semester_id`, `session_name`, `duration`, `week`, `date_time`, `created_at`, `updated_at`) VALUES
(1, 1, 'Practicum', 2, 1, '2021-04-20 10:00:00', NULL, NULL),
(2, 1, 'Practicum', 2, 2, '2021-04-27 10:00:00', NULL, NULL),
(3, 1, 'Practicum', 2, 3, '2021-05-04 10:00:00', NULL, NULL),
(4, 2, 'Practicum', 2, 1, '2021-04-20 10:00:00', NULL, NULL),
(5, 2, 'Practicum', 2, 2, '2021-04-27 10:00:00', NULL, NULL),
(6, 2, 'Practicum', 2, 3, '2021-05-04 10:00:00', NULL, NULL),
(7, 3, 'Practicum', 2, 1, '2021-04-17 10:00:00', NULL, NULL),
(8, 3, 'Practicum', 2, 2, '2021-04-24 10:00:00', NULL, NULL),
(9, 3, 'Practicum', 2, 3, '2021-05-01 10:00:00', NULL, NULL),
(10, 4, 'Practicum', 2, 1, '2021-04-17 10:00:00', NULL, NULL),
(11, 4, 'Practicum', 2, 2, '2021-04-24 10:00:00', NULL, NULL),
(12, 4, 'Practicum', 2, 3, '2021-05-01 10:00:00', NULL, NULL),
(13, 5, 'Practicum', 2, 1, '2021-04-17 13:00:00', NULL, NULL),
(14, 5, 'Practicum', 2, 2, '2021-04-24 13:00:00', NULL, NULL),
(15, 5, 'Practicum', 2, 3, '2021-05-01 13:00:00', NULL, NULL),
(16, 6, 'Practicum', 2, 1, '2021-04-17 13:00:00', NULL, NULL),
(17, 6, 'Practicum', 2, 2, '2021-04-24 13:00:00', NULL, NULL),
(18, 6, 'Practicum', 2, 3, '2021-05-01 13:00:00', NULL, NULL),
(19, 7, 'Practicum', 2, 1, '2021-04-17 15:00:00', NULL, NULL),
(20, 7, 'Practicum', 2, 2, '2021-04-24 15:00:00', NULL, NULL),
(21, 7, 'Practicum', 2, 3, '2021-05-01 15:00:00', NULL, NULL),
(22, 8, 'Practicum', 2, 1, '2021-04-17 08:00:00', NULL, NULL),
(23, 8, 'Practicum', 2, 2, '2021-04-24 08:00:00', NULL, NULL),
(24, 8, 'Practicum', 2, 3, '2021-05-01 08:00:00', NULL, NULL),
(25, 9, 'Practicum', 2, 1, '2021-04-17 08:00:00', NULL, NULL),
(26, 9, 'Practicum', 2, 2, '2021-04-24 08:00:00', NULL, NULL),
(27, 9, 'Practicum', 2, 3, '2021-05-01 08:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_students` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ta_seats` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `course_id`, `academic_year`, `semester_name`, `number_of_students`, `ta_seats`, `class_name`, `created_at`, `updated_at`) VALUES
(1, '1', '2020/2021', 'odd', '27', '2', '13SI1', NULL, NULL),
(2, '1', '2020/2021', 'odd', '26', '2', '13SI2', NULL, NULL),
(3, '1', '2020/2021', 'odd', '27', '2', '13TI1', NULL, NULL),
(4, '1', '2020/2021', 'odd', '27', '2', '13TI2', NULL, NULL),
(5, '1', '2020/2021', 'odd', '29', '2', '13MR1', NULL, NULL),
(6, '1', '2020/2021', 'odd', '28', '2', '13MR2', NULL, NULL),
(7, '1', '2020/2021', 'odd', '16', '2', '13BP1', NULL, NULL),
(8, '1', '2020/2021', 'odd', '21', '2', '13TE1', NULL, NULL),
(9, '1', '2020/2021', 'odd', '20', '2', '13TE2', NULL, NULL),
(10, '2', '2020/2021', 'odd', '27', '2', '13SI1', NULL, NULL),
(11, '2', '2020/2021', 'odd', '26', '2', '13SI2', NULL, NULL),
(12, '2', '2020/2021', 'odd', '27', '2', '13TI1', NULL, NULL),
(13, '2', '2020/2021', 'odd', '27', '2', '13TI2', NULL, NULL),
(14, '18', '2020/2021', 'odd', '27', '2', '13SI1', NULL, NULL),
(15, '18', '2020/2021', 'odd', '26', '2', '13SI2', NULL, NULL),
(16, '18', '2020/2021', 'odd', '27', '2', '13TI1', NULL, NULL),
(17, '18', '2020/2021', 'odd', '27', '2', '13TI2', NULL, NULL),
(18, '18', '2020/2021', 'odd', '29', '2', '13MR1', NULL, NULL),
(19, '18', '2020/2021', 'odd', '28', '2', '13MR2', NULL, NULL),
(20, '18', '2020/2021', 'odd', '16', '2', '13BP1', NULL, NULL),
(21, '18', '2020/2021', 'odd', '21', '2', '13TE1', NULL, NULL),
(22, '18', '2020/2021', 'odd', '20', '2', '13TE2', NULL, NULL),
(23, '3', '2020/2021', 'odd', '27', '2', '13SI1', NULL, NULL),
(24, '3', '2020/2021', 'odd', '26', '2', '13SI2', NULL, NULL),
(25, '3', '2020/2021', 'odd', '27', '2', '13TI1', NULL, NULL),
(26, '3', '2020/2021', 'odd', '27', '2', '13TI2', NULL, NULL),
(27, '3', '2020/2021', 'odd', '21', '2', '13TE1', NULL, NULL),
(28, '3', '2020/2021', 'odd', '20', '2', '13TE2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(54) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(54) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_program` varchar(54) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `middle_name`, `last_name`, `username`, `initial`, `password`, `registration_number`, `email`, `phone_number`, `bank_name`, `bank_account_number`, `study_program`, `batch`, `role`, `email_verified_at`, `verification_token`, `is_verified`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Yoke', 'Aprilia', 'Purba', 'yoke', 'YKE', '$2y$10$9ROZLFBOtbhe7BgZxsNWIuHxzg67CYwu.3RXILIk5BrnapZNaKBTe', 'ifs14001', 'yoke@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 4, NULL, NULL, 0, NULL, '2021-07-04 14:25:13', '2021-07-04 14:25:13', 'active'),
(2, 'Parmonangan', 'Rotua', 'Togatorop', 'parmonangan', 'PAT', '$2y$10$iZHscSioNFas2leG2kvrDexSmv7rPK8qdzPM/7E7yljlK3Z/KCUCa', '0130058501', 'parmonangan@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:14', '2021-07-04 14:25:14', 'active'),
(3, 'Junita', NULL, 'Amalia', 'junita', 'JUN', '$2y$10$o5hav8hmubaJJw8zHuDuW.ztVTjUjVb05kqpgBKnTXdl.rXsr6DoC', '0117069202', 'junita@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:14', '2021-07-04 14:25:14', 'active'),
(4, 'Tiurma', NULL, 'Lumban Gaol', 'tiurma', 'TLG', '$2y$10$v/X9prve3RkBju1PW8ETRuKc7U7dFfM8514vHikIFOQH1JOiX7sb.', '0108037605', 'tiurma@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:14', '2021-07-04 14:25:14', 'active'),
(5, 'Sari', 'Muthia', 'Silalahi', 'sarisilalahi', 'MSL', '$2y$10$maYyRUTp57yPk0MvP.BzreinNzcXXuxa7V22TyDEsi.EPDyawiAoy', '0117109301', 'sari.silalahi@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:14', '2021-07-04 14:25:14', 'active'),
(6, 'Riyanthi', 'Angrainy', 'Sianturi', 'riyanthi', 'RIS', '$2y$10$c2wgGuVx/YW6QWzXVAzUXew4CLSfhkrT8WCBSamvlwu9F75xmwyyW', '0121058503', 'riyanthi@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:14', '2021-07-04 14:25:14', 'active'),
(7, 'Tennov', ' ', 'Simanjuntak', 'tennov', 'TEN', '$2y$10$Bf3qdiJElgEhJ3A.Sq9hGeWGhn5PLufJax7Cr9ibTx2l.LLBPD/zC', '0110117601', 'tennov@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:15', '2021-07-04 14:25:15', 'active'),
(8, 'Mario', 'E', 'Simaremare', 'mario', 'MSS', '$2y$10$fMRZt9XA9Xp6PfDFiB9ypO3EJ.C5m40Hc3FrEux9f5D4aRI98YfUq', '0128058805', 'mario@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 3, NULL, NULL, 0, NULL, '2021-07-04 14:25:15', '2021-07-04 14:25:15', 'active'),
(9, 'Paulus', 'Richardo', 'Simanjuntak', 'iss18068', 'Paulus001', '$2y$10$3j7DL2bUYpjFflxiOXMd0u1GQr5TuU/8.5eRLVCowsfgptc7l55e.', '12S18068', 'iss18068@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 1, NULL, NULL, 0, NULL, '2021-07-04 14:25:15', '2021-07-04 14:25:15', 'active'),
(10, 'Christopher', 'Alfred', 'Hutabarat', 'iss18027', 'Christopher001', '$2y$10$g4MCJlV7mRfzXbyMx8V9NO0mT3nngMzzbY7sWqIGh03FuRExlRcaq', '12S18027', 'iss18027@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:15', '2021-07-04 14:25:15', 'active'),
(11, 'Raja', 'Muda Gading Tulen', 'Sihite', 'iss18055', 'Raja001', '$2y$10$ovuyTeIeN8N6BoX4JX4gY.iAj9SUpUJVKFvC89TpaVAy3PxuKc5im', '12S18055', 'iss18055@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 1, NULL, NULL, 0, NULL, '2021-07-04 14:25:15', '2021-07-04 14:25:15', 'active'),
(12, 'Sarah', 'Hillary', 'Siahaan', 'iss18032', 'Sarah001', '$2y$10$zFWKXaGHy1lLrOxMncIP5O9QPKc.jFEcsm4TfWoJgnTFbexaBskle', '12S18032', '12S18032@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:15', '2021-07-04 14:25:15', 'active'),
(13, 'Rifka', 'Uli', 'Siregar', 'iss18048', 'Rifka001', '$2y$10$GGXmCIf4FLL/Mw/.8YzuTuLOn0QDtplTCjUsFfq3Zii2dpTul3GdO', '12S18048', '12S18048@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:16', '2021-07-04 14:25:16', 'active'),
(14, 'Wiranda', 'Megawati', 'Siahaan', 'iss18002', 'Wiranda001', '$2y$10$hrAI37M8m05nA4.5jtF5reZLTzVh0AcuX7jm.Kf/j7WHG672gBpTS', '12S18002', '12S18002@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:16', '2021-07-04 14:25:16', 'active'),
(15, 'Della', 'Cenovita', 'Tarigan', 'iss18015', 'Della001', '$2y$10$jvRS3OOBFjZgCM6sUaMFjeRzrmRfDpJFhySr/rE4WOdDz0utWimWW', '12S18015', '12S18015@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:16', '2021-07-04 14:25:16', 'active'),
(16, 'Ulion', 'Alberto Perkasa', 'Pardede', 'iss18047', 'Ulion001', '$2y$10$ENRyLgTfgHBTm70ZvnXWt.gtd0IDzav7a8SyHgRYnUuQlJWEmnlL2', '12S18047', '12S18047@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:16', '2021-07-04 14:25:16', 'active'),
(17, 'Yohanes', 'Ray Febriyanto', 'Silitonga', 'iss18026', 'Yohanes001', '$2y$10$1mkfMlq1i734rAvo9aUaMuvgSNmJz0lqIV7SBrhFnvJznkmfayEE2', '12S18026', '12S18026@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:16', '2021-07-04 14:25:16', 'active'),
(18, 'Andika', 'Meidy Fransius', 'Tarigan', 'iss18037', 'Andika001', '$2y$10$yy/udfHmUcRaXktDUbwMNe3PoeQl/3prIPr4naZQSIlH6w03i96ou', '12S18037', '12S18037@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 1, NULL, NULL, 0, NULL, '2021-07-04 14:25:16', '2021-07-04 14:25:16', 'active'),
(19, 'Dennito', 'Gilbert', 'Gultom', 'iss18066', 'Dennito001', '$2y$10$KQA4lggd6ZDvNOodulIs9.l18BYJJE4zyFQl7MS/R0pJBtHdpyg.m', '12S18066', '12S18066@del.ac.id', '0812123123', 'BNI', '071123123', 'Information System', '2018', 1, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(20, 'Surya', 'Ferary', 'Nainggolan', 'ifs18061', 'Surya001', '$2y$10$a1sfzl/1b1yq60wGrRcNBuX7FTljnxbfMrzdIlj27BdcPB5V05.Ni', '11S18061', 'ifs18061@del.ac.id', '0812123123', 'BNI', '071123123', 'Informatics Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(21, 'Imam', 'Aprido', 'Simarmata', 'ifs18034', 'Imam001', '$2y$10$u0Ce3R1dIeJSDQ2zn5gqqegn5EKrkPRDIn7MG7SONxG30E3h8r522', '11S18034', 'ifs18034@del.ac.id', '0812123123', 'BNI', '071123123', 'Informatics Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(22, 'Devi', 'Wahyuni', 'Silitonga', 'ifs18022', 'Devi001', '$2y$10$W.f9LvHtSDShn/R6nDDnb.0BhUwAhsL.9rGXEemzlGRmJCXe9RqRq', '11S18022', 'ifs18022@del.ac.id', '0812123123', 'BNI', '071123123', 'Informatics Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(23, 'Auro', 'Daniel Ersa', 'Silalahi', 'ifs18051', 'Auro001', '$2y$10$ibdMb0b3joyiFYj6bkhOk.UobFywC0RRAWeoBsOFapaFACH8O7pf.', '11S18051', 'ifs18051@del.ac.id', '0812123123', 'BNI', '071123123', 'Informatics Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(24, 'Irvandi', 'Amir Hamzah', 'Sihombing', 'ifs18067', 'Irvandi001', '$2y$10$eFxMF.hRywnrDPxfUPsct.wEjYxIx1ZjPfV6PqsauH4u01mktGeAq', '11S18067', 'ifs18067@del.ac.id', '0812123123', 'BNI', '071123123', 'Informatics Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(25, 'Manaris', 'Gerald', 'Silaban', 'mrs18067', 'Manaris001', '$2y$10$uy9Bp5IL3wR0zhxbtnPdu.SsUesHpAiq2MLCnjLF3ev/7sFudJ9f6', '21S18067', 'mrs18067@del.ac.id', '085733667835', 'BNI', '1110004590474', 'Engineering Management', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:17', '2021-07-04 14:25:17', 'active'),
(26, 'Grace', 'Manzoya', 'Tampubolon', 'mrs18066', 'Grace001', '$2y$10$QvwQy/vrFbOG3mTfZwFeIuPVuwHJC1ukkEY7BW4BJ7Ps0WVozxcWW', '21S18066', 'mrs18066@del.ac.id', '085730777835', 'BRI', '011101057361507', 'Engineering Management', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(27, 'Yessi', 'Annaria', 'Naibaho', 'mrs18062', 'Yessi001', '$2y$10$clN0agEI1A0oOF2HxpGCtOOYuKSmRHjoDeINOW5Di5kmFSkEc3MY2', '21S18062', 'mrs18062@del.ac.id', '085730887835', 'BCA', '0329009710', 'Engineering Management', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(28, 'Kevin', 'Gerald', 'Sitanggang', 'els18053', 'Kevin001', '$2y$10$4xssz9lmS7Fc1M01ADRye.Gzou4bi17alrJ/N8BDQ7b7YSdCUGds6', '14S18053', 'els18053@del.ac.id', '085730997835', 'BCA', '0329009779', 'Electrical Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(29, 'Rio', 'Frans Hegen', 'Hutasoit', 'els18050', 'Rio001', '$2y$10$K6DS8sMvL98OpqkBhWMnLOkEIenwtUZ7Mw5EAK3keG5oFD2EuaCga', '14S18050', 'els18050@del.ac.id', '085730007835', 'BNI', '1110004590475', 'Electrical Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(30, 'Juvensen', 'Immanuel', 'Tambunan', 'els18046', 'Juvensen001', '$2y$10$PQuxPoACX0F9ynbPG2I5oOF9TQHfXdJTEmT2/uxmUPIlTgQgsMQKO', '14S18046', 'els18046@del.ac.id', '085730667835', 'BNI', '1110004590476', 'Electrical Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(31, 'Intan', 'Sani', 'Siahaan', 'bps18027', 'Intan001', '$2y$10$kls4wpxUjNSgIIUOuzvineuxLYn5Yi9//aLhOZBE0nvFj2uV6jOQy', '31S18027', 'bps18027@del.ac.id', '085730667345', 'BNI', '1110004590888', 'Bioprocess Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(32, 'Naomi', 'Cynthia Mempawati', 'Siringo', 'bps18020', 'Naomi001', '$2y$10$auOHypXAmEX4u0pg1KrOF.WvgkMvJ5L.OuhqzPWIKMWHO6CoGdlrS', '31S18020', 'bps18020@del.ac.id', '081230667835', 'Mandiri', '0700001855999', 'Bioprocess Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(33, 'Yason', '', 'Manullang', 'bps18028', 'Yason001', '$2y$10$1PSTkpd7Cm737PgNqyg7w.RWaMsxi6xurwzPHizZnPEHLCSSMOe5G', '31S18028', 'bps18028@del.ac.id', '085730667123', 'BRI', '011101057361009', 'Bioprocess Engineering', '2018', 2, NULL, NULL, 0, NULL, '2021-07-04 14:25:18', '2021-07-04 14:25:18', 'active'),
(34, 'Anggiat', '', 'Tambunan', 'anggiat', 'AGT', '$2y$10$88IFsfEoZRrMEHo2r79iJuN4tavB3FyXSK5gPx3DNARWbSU3fjP9y', 'ifs14002', 'anggiat@del.ac.id', '0812123123', NULL, NULL, NULL, NULL, 4, NULL, NULL, 0, NULL, '2021-07-04 14:25:19', '2021-07-04 14:25:19', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `userlogactivity`
--

CREATE TABLE `userlogactivity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `initial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userlogactivity`
--

INSERT INTO `userlogactivity` (`id`, `initial`, `activity`, `created_at`, `updated_at`) VALUES
(1, 'Dev-Team', 'Sisten deployed', '2021-07-04 14:25:20', '2021-07-04 14:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_semester`
--

CREATE TABLE `user_semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_semester`
--

INSERT INTO `user_semester` (`id`, `user_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 3, 5, NULL, NULL),
(10, 6, 10, NULL, NULL),
(11, 6, 11, NULL, NULL),
(12, 6, 12, NULL, NULL),
(13, 6, 13, NULL, NULL),
(14, 5, 14, NULL, NULL),
(15, 5, 15, NULL, NULL),
(16, 5, 16, NULL, NULL),
(17, 5, 17, NULL, NULL),
(18, 5, 18, NULL, NULL),
(19, 5, 19, NULL, NULL),
(20, 5, 20, NULL, NULL),
(21, 5, 21, NULL, NULL),
(22, 5, 22, NULL, NULL),
(23, 2, 23, NULL, NULL),
(24, 2, 24, NULL, NULL),
(25, 2, 25, NULL, NULL),
(26, 2, 26, NULL, NULL),
(27, 2, 27, NULL, NULL),
(28, 2, 28, NULL, NULL),
(29, 2, 26, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(11) NOT NULL,
  `minimum_batch` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `teaching_duration` tinyint(4) NOT NULL,
  `minimum_score` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `semester_id`, `minimum_batch`, `deadline`, `teaching_duration`, `minimum_score`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(2, 2, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(3, 3, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(4, 4, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(5, 4, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(6, 6, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(7, 7, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(8, 8, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(9, 9, '2018', '2021-07-07', 12, 'A', 'Teaching activities in PROBSTAT class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(10, 10, '2018', '2021-07-07', 12, 'A', 'Teaching activities in IMK class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(11, 11, '2018', '2021-07-07', 12, 'A', 'Teaching activities in IMK class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(12, 12, '2018', '2021-07-07', 12, 'A', 'Teaching activities in IMK class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(13, 13, '2018', '2021-07-07', 12, 'A', 'Teaching activities in IMK class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(14, 14, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(15, 15, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(16, 16, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(17, 17, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(18, 18, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(19, 19, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(20, 20, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(21, 21, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(22, 22, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS1 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(23, 23, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(24, 24, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(25, 25, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(26, 26, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(27, 27, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(28, 28, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(29, 29, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(30, 30, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(31, 31, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(32, 32, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL),
(33, 33, '2018', '2021-07-07', 12, 'AB', 'Teaching activities in MADAS2 class, as an additional class for students, aim to hone the lessons that will be delivered by students to provide a more relaxed and comfortable feeling, and to increase students\' understanding.\r\n\r\n            you as a lecturer assistant are entitled to wages, certificates and work experience.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicant_number`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_unique` (`course_code`,`course_owner_id`);

--
-- Indexes for table `course_owner`
--
ALTER TABLE `course_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_owner_unique` (`name`,`curriculum`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`log_number`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD UNIQUE KEY `user_initial_unique` (`initial`),
  ADD UNIQUE KEY `user_registration_number_unique` (`registration_number`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `userlogactivity`
--
ALTER TABLE `userlogactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_semester`
--
ALTER TABLE `user_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `applicant_number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course_owner`
--
ALTER TABLE `course_owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `log_number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `userlogactivity`
--
ALTER TABLE `userlogactivity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_semester`
--
ALTER TABLE `user_semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
