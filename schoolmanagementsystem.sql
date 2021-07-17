-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 06:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `attendence_date` date NOT NULL,
  `attendence_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `grade_id`, `student_id`, `attendence_date`, `attendence_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2021-03-23', '1', '2021-03-23 10:51:41', '2021-03-23 10:51:41', NULL),
(2, 1, 3, '2021-03-23', '1', '2021-03-23 10:51:41', '2021-03-23 10:51:41', NULL),
(3, 1, 4, '2021-03-23', '0', '2021-03-23 10:51:41', '2021-03-23 10:51:41', NULL),
(4, 1, 2, '2021-03-30', '1', '2021-03-29 23:00:20', '2021-03-29 23:00:20', NULL),
(5, 1, 3, '2021-03-30', '0', '2021-03-29 23:00:20', '2021-03-29 23:00:20', NULL),
(6, 1, 4, '2021-03-30', '1', '2021-03-29 23:00:20', '2021-03-29 23:00:20', NULL),
(7, 2, 5, '2021-03-31', '0', '2021-03-31 04:12:52', '2021-03-31 04:12:52', NULL),
(8, 13, 6, '2021-03-31', '1', '2021-03-31 05:08:26', '2021-03-31 05:08:26', NULL),
(9, 13, 7, '2021-03-31', '0', '2021-03-31 05:08:26', '2021-03-31 05:08:26', NULL),
(10, 13, 8, '2021-03-31', '0', '2021-03-31 05:08:26', '2021-03-31 05:08:26', NULL),
(11, 1, 2, '2021-03-01', '1', '2021-03-31 05:16:48', '2021-03-31 05:16:48', NULL),
(12, 1, 3, '2021-03-01', '0', '2021-03-31 05:16:48', '2021-03-31 05:16:48', NULL),
(13, 1, 4, '2021-03-01', '0', '2021-03-31 05:16:49', '2021-03-31 05:16:49', NULL),
(14, 1, 2, '2021-05-24', '1', '2021-05-24 00:16:55', '2021-05-24 00:16:55', NULL),
(15, 1, 3, '2021-05-24', '1', '2021-05-24 00:16:55', '2021-05-24 00:16:55', NULL),
(16, 1, 4, '2021-05-24', '1', '2021-05-24 00:16:55', '2021-05-24 00:16:55', NULL),
(17, 1, 2, '2021-05-25', '0', '2021-05-25 06:19:13', '2021-05-25 06:19:13', NULL),
(18, 1, 3, '2021-05-25', '0', '2021-05-25 06:19:13', '2021-05-25 06:19:13', NULL),
(19, 1, 4, '2021-05-25', '1', '2021-05-25 06:19:13', '2021-05-25 06:19:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrow_book`
--

CREATE TABLE `borrow_book` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `author_name` varchar(70) NOT NULL,
  `borrowed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_book`
--

INSERT INTO `borrow_book` (`id`, `book_id`, `student_id`, `qty`, `author_name`, `borrowed_date`) VALUES
(2, 5, 2, 4, 'Robert Kiyosaki', '2021-06-24'),
(3, 1, 2, 7, 'Robert Baral', '2021-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `current_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nursary', '2021-01-13 09:35:04', '2021-01-13 09:35:04', NULL),
(2, 'LKG', '2021-01-13 09:35:04', '2021-01-13 09:35:04', NULL),
(3, 'UKG', '2021-01-13 09:35:04', '2021-01-13 09:35:04', NULL),
(4, 'One', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(5, 'Two', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(6, 'Three', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(7, 'Four', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(8, 'Five', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(9, 'Six', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(10, 'Seven', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(11, 'Eight', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(12, 'Nine', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(13, 'Ten', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(14, 'Eleven', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL),
(15, 'Twelve', '2021-01-13 09:35:05', '2021-01-13 09:35:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `bookname`, `author`, `issued_by`, `issued_date`, `cover_image`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Rich Dad vs Poor Dad', 'Robert Baral', 'Prabin Baral', '2021-06-21', 'IMG_20190120_1704081624245262.jpg', 3, '2021-05-25 06:37:09', '2021-06-23 19:56:07'),
(2, 'Rich Dad vs Poor Dad', 'Robert Kiyosaki', 'Prabin Baral', '2020-2-25', 'IMG_20181109_1306241621945505.jpg', 30, '2021-05-25 06:40:05', '2021-05-25 06:40:05'),
(5, 'Data Communication', 'Robert Kiyosaki', 'Prabin Baral', '0', 'nakul-QxPRz2oTOWo-unsplash1624245234.jpg', 6, '2021-06-20 21:28:54', '2021-06-23 19:53:47');

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
(3, '2020_11_30_165049_create_students_table', 1),
(4, '2020_11_30_165126_create_teachers_table', 1),
(5, '2020_11_30_165146_create_staff_table', 1),
(6, '2020_11_30_165321_create_schedules_table', 1),
(7, '2020_11_30_165356_create_attendences_table', 1),
(8, '2020_11_30_165437_create_subjects_table', 1),
(9, '2020_11_30_165522_create_grades_table', 1),
(10, '2020_12_02_133048_create_dates_table', 1),
(11, '2021_01_08_103548_create_periods_table', 1),
(12, '2021_02_25_085953_create_schooldetails_table', 2),
(13, '2021_04_12_170233_create_roles_table', 3),
(14, '2021_05_24_080002_create_libraries_table', 4);

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
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`id`, `name`, `time_range`, `created_at`, `updated_at`) VALUES
(1, 'First Period', '10:00 AM to 11:01 AM', '2021-01-13 09:36:29', '2021-03-23 10:20:49'),
(2, 'Second Period', '11:00 AM to 12:00 PM', '2021-01-13 09:36:43', '2021-01-13 09:36:43'),
(3, 'Short Break', '12:00 PM to 12:15 PM', '2021-01-13 09:36:58', '2021-01-13 09:36:58'),
(4, 'Third Period', '12:15 PM to 01:15 PM', '2021-01-13 09:37:14', '2021-01-13 09:37:14'),
(5, 'Break', '01:15 PM to 02:00 PM', '2021-01-13 09:37:27', '2021-01-13 09:37:27'),
(6, 'Fourth Period', '02:00 PM to 03:00 PM', '2021-01-13 09:38:14', '2021-01-13 09:38:14'),
(7, 'Fifth Period', '03:00 PM to 04:00 PM', '2021-01-13 09:38:56', '2021-01-13 09:38:56'),
(8, 'Sixth Period', '04:00 PM to 05:00 PM', '2021-01-13 09:39:14', '2021-04-16 06:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `id` int(11) NOT NULL,
  `book_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator\r\n', NULL, NULL),
(2, 'Teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` int(50) NOT NULL,
  `period_id` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `teacher_id` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `grade_id`, `period_id`, `subject_id`, `teacher_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 1, 1, 1, 2, '2021-04-16 06:34:03', '2021-04-16 06:34:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schooldetails`
--

CREATE TABLE `schooldetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `principle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schooldetails`
--

INSERT INTO `schooldetails` (`id`, `name`, `email`, `website`, `phone`, `thumbnail`, `location`, `principle`, `created_at`, `updated_at`) VALUES
(1, 'Shree RatanPanday Secondary School', 'prabin.baral00@gmail.com', 'ratanpanday.com.np', '9856056842', 'hero-img1616515026.jpg', 'pokhara 13 arva', 'Prabin Baral@', '2021-03-23 15:51:33', '2021-04-16 06:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fullname`, `address`, `phone_number`, `work_as`, `gender`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Prabin Datta Baral', 'Pokhara', '9846785483', 'Cleaner', 'male', 'gianluca-d-intino-vl4QuDMyeyY-unsplash1618575336.jpg', '2021-04-16 06:30:36', '2021-05-25 03:35:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` int(10) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gurdian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `grade_id`, `full_name`, `email`, `roll_no`, `gender`, `address`, `gurdian_name`, `phone_number`, `thumbnail`, `date_of_birth`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'Prabin Baral', 'prabinlaptop00@gmail.com', 1, 'male', 'Pokhara 13', 'Narayan Datta Baral', '9846743130', 'parent-21616515211.jpg', '2021-03-04', '2021-03-23 10:15:15', '2021-03-23 10:16:34', NULL),
(3, 1, 'Bishnu Baral', 'prabinlaptop00@gmail.com', 2, 'female', 'Pokhara 13', 'Prabin Subedi', '9846743130', 'parent-31616515329.jpg', '2021-03-11', '2021-03-23 10:17:13', '2021-03-23 10:17:13', NULL),
(4, 1, 'Siddartha giri', 'prabin.baral00@gmail.com', 3, 'male', 'Pokhara 13', 'Narayan Datta Baral', '9846743133', 'parent-11616515371.jpg', '2021-03-03', '2021-03-23 10:17:55', '2021-03-23 10:17:55', NULL),
(5, 2, 'Prabin Baral', 'prabin.baral00@gmail.com', 1, 'male', 'Pokhara 13', 'Narayan Datta Baral', '9846743130', 'banner16165149451617184650.jpg', '2021-03-24', '2021-03-31 04:12:35', '2021-03-31 04:12:35', NULL),
(6, 13, 'Bishnu Baral', 'prabinlaptop00@gmail.com', 1, 'male', 'Pokhara 13', 'Prabin Baral', '9846743130', 'hero-img16165150261617187816.jpg', '2021-03-15', '2021-03-31 05:05:20', '2021-03-31 05:05:20', NULL),
(7, 13, 'Prabin Baral', 'prabinlaptop00@gmail.com', 2, 'male', 'Pokhara 13', 'Narayan', '9846743130', 'banner16165149451617187854.jpg', '2021-03-31', '2021-03-31 05:05:58', '2021-03-31 05:05:58', NULL),
(8, 13, 'Namuna chaulagai', 'prabinlaptop00@gmail.com', 3, 'female', 'Pokhara 13', 'Narayan Datta Baral', '9846743130', 'IMG_20170404_10374616143098251617187914.jpg', '2021-03-30', '2021-03-31 05:06:58', '2021-03-31 05:06:58', NULL),
(10, 2, 'Prabin Baral', 'prabin.baral00@gmail.com', 1, 'male', 'Pokhara', 'Narayan', '9846743131', 'gianluca-d-intino-vl4QuDMyeyY-unsplash1618578798.jpg', '2021-04-16', '2021-04-16 07:28:24', '2021-04-16 07:28:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) NOT NULL,
  `teacher_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `grade_id`, `teacher_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'English', '2021-03-23 10:19:59', '2021-03-23 10:19:59', NULL),
(2, 5, 3, 'Mathmatics', '2021-03-23 10:20:18', '2021-03-23 10:20:18', NULL),
(3, 12, 2, 'EPS', '2021-03-23 10:20:32', '2021-03-23 10:20:32', NULL),
(4, 13, 2, 'Education', '2021-03-23 10:43:43', '2021-03-23 10:43:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(50) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_specialist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `role_id`, `fullname`, `email`, `password`, `address`, `phone_number`, `qualification`, `sub_specialist`, `gender`, `thumbnail`, `date_of_birth`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 'Bishnu Parsad Dahal', 'aaa@gmail.com', '1234', 'Pokhara', '9846865527', 'Master in English', 'English', 'male', 'viber_image_2019-05-25_18-54-521610554547.jpg', '2021-01-02', '2021-01-13 10:30:47', '2021-01-13 10:30:47', NULL),
(3, 2, 'Min Kc', 'aaa@gmail.com', '1234', 'Pokhara 13', '9846865527', 'Msc Physics', 'Physics', 'male', 'gallary-content-21616515443.jpg', '2021-03-10', '2021-03-23 10:19:03', '2021-03-23 10:19:03', NULL),
(4, 2, 'Prabin Baral', 'aaa@gmail.com', '1234', 'Pokhara', '9846865527', 'Msc Physics', 'English', 'male', '172571267_3733285153461657_15160457889217095_n1618575183.png', '2021-04-06', '2021-04-12 11:26:59', '2021-04-16 06:28:04', NULL),
(6, 2, 'Prabin Datta Baral', 'prabin.baral00@gmail.com', 'kskjd', 'Pokhara', '984674310', 'Bse skss', 'Math', 'male', 'IMG_20181109_0810591621934869.jpg', '2021-05-04', '2021-05-25 03:42:49', '2021-05-25 03:42:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', NULL, '1234', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
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
-- Indexes for table `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schooldetails`
--
ALTER TABLE `schooldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `borrow_book`
--
ALTER TABLE `borrow_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `return_book`
--
ALTER TABLE `return_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schooldetails`
--
ALTER TABLE `schooldetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
