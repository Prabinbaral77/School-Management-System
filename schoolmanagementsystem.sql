-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 12:20 PM
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
(37, 13, 19, '2021-07-14', '1', '2021-07-14 00:02:15', '2021-07-14 00:02:15', NULL),
(38, 13, 7, '2021-07-14', '1', '2021-07-14 00:02:15', '2021-07-14 00:02:15', NULL),
(39, 13, 15, '2021-07-14', '0', '2021-07-14 00:02:15', '2021-07-14 00:02:15', NULL),
(40, 15, 20, '2021-07-14', '1', '2021-07-15 08:30:27', '2021-07-15 08:30:27', NULL),
(41, 15, 21, '2021-07-14', '1', '2021-07-15 08:30:27', '2021-07-15 08:30:27', NULL),
(42, 15, 22, '2021-07-14', '0', '2021-07-15 08:30:27', '2021-07-15 08:30:27', NULL),
(43, 15, 20, '2021-07-15', '1', '2021-07-15 08:30:43', '2021-07-15 08:30:43', NULL),
(44, 15, 21, '2021-07-15', '0', '2021-07-15 08:30:43', '2021-07-15 08:30:43', NULL),
(45, 15, 22, '2021-07-15', '0', '2021-07-15 08:30:43', '2021-07-15 08:30:43', NULL);

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
(1, 'Thermodynamics', 'Hanary Queba', 'Prabin Baral', '2021-06-21', 'img21624631431.jpg', 70, '2021-05-25 06:37:09', '2021-07-11 21:37:25'),
(2, 'Electronics And Communication', 'Tim Salfort', 'Prabin Baral', '2021-06-17', 'img31624631464.png', 30, '2021-05-25 06:40:05', '2021-07-14 08:20:27'),
(5, 'Data Communication', 'Robert Kiyosaki', 'Prabin Baral', '2021-06-18', 'img11624631247.jpg', 32, '2021-06-20 21:28:54', '2021-07-15 08:34:02'),
(6, 'Data mining and Wirehouse', 'Balkrishna Neupane', 'Prabin Baral', '0', 'img51626421440.jpg', 10, '2021-07-16 01:59:00', '2021-07-16 01:59:00');

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
(14, '2021_05_24_080002_create_libraries_table', 4),
(15, '2021_07_14_061950_create_notices_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `body`, `issued_by`, `issue_date`, `created_at`, `updated_at`) VALUES
(5, 'Online कक्षा संचालन सम्बन्धी जरुरी सूचना ।।।', 'Corona virus को दोस्रो लहरको बढ्दो जोखिमका कारण भौतिक रुपमा पठनपाठन गर्न सम्भव नभएको र T U ले समेत सोही बमोजिमको निर्देशन जारी गरेकोले BBS 1st Year र 4th year का कक्षा यही मिति 2078 वैशाख 12 गतेबाट तथा MBS 2nd Semester वैशाख 13 बाट हुने निम्नानुसार हुने व्यहोरा सम्बन्धित सबैमा जानकारी गराइन्छ ।\r\n\r\n पुनश्च: subject teacher बाट CR मार्फत google meet को link उपलब्ध हुने छ । थप जानकारीको लागि कलेजमा सम्पर्क राख्नुहुन समेत अनुरोध गरिन्छ।', 'Prabin Baral', '2021-07-14', '2021-07-15 07:03:44', '2021-07-15 07:03:44'),
(6, 'भर्ना सम्बन्धी सूचना ।।।', 'Our School पोखरा -३०  , खुदीमा नयाँ बर्ष लागि कक्षा १ देखी ९ सम्म को  भर्ना खुलेको जानकारी गराइन्छ।\r\nOur School पोखरा -३०  , खुदीमा नयाँ बर्ष लागि कक्षा १ देखी ९ सम्म को  भर्ना खुलेको जानकारी गराइन्छ।\r\nOur School पोखरा -३०  , खुदीमा नयाँ बर्ष लागि कक्षा १ देखी ९ सम्म को  भर्ना खुलेको जानकारी गराइन्छ।', 'Prabin Baral', '2021-07-13', '2021-07-15 07:09:35', '2021-07-15 07:09:35'),
(7, 'नोबेल कोरोना भाइरस (COVID-19) ', 'नोबेल कोरोना भाइरस (COVID-19) बाट नेपालमा हुन सक्ने सम्भावित जोखिम तथा संक्रमण नियन्त्रण एवम् रोकथामका लागि नेपाल सरकारबाट देशैभर संघ, प्रदेश र स्थानीय तहका सार्वजनिक, सामुदायिक तथा निजी सेवा प्रदायक संस्थाहरूबाट प्रदान गरिने नेपाल राजपत्रमा प्रकाशन गरिए अनुसारका अत्यावश्यक सेवा बाहेकका अन्य सबै सेवाहरु बन्द गर्ने निर्णय गरेको साथै जोखिम तथा संक्रमण नियन्त्रण एवम् रोकथामका लागि विशेष सचेतना अपनाई पूर्व तयारी एवं सतर्कता अवलम्बन गर्न आवश्यक रहेकोले नेपाल सरकारबाट यस सम्बन्धमा गरिएका सबै निर्णय एवं सूचनाहरू कार्यान्वयन गर्न गराउन नेपाल सरकारले Lockdown को मिति थपेसंगै हाम्रो कार्यतालिका समेत प्रभावित भएको व्यहोरा अनुरोध छ ।Be safe, Stay home!', 'Lal Babu Pandit', '2021-07-11', '2021-07-15 07:24:28', '2021-07-15 07:24:28');

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
(5, 1, 1, 1, 2, '2021-04-16 06:34:03', '2021-04-16 06:34:03', NULL),
(6, 13, 1, 2, 4, '2021-07-15 08:27:59', '2021-07-15 08:27:59', NULL);

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
(1, 'Ratan Secondary School', 'prabin.baral00@gmail.com', 'ratanpanday.com.np', '9856056842', 'hero-img1616515026.jpg', 'pokhara 13 arva', 'Elon Musk', '2021-03-23 15:51:33', '2021-07-15 08:00:14');

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
(2, 'Kshitiz Baniya', 'Pokhara', '9846785483', 'Cleaner', 'male', 'img171624630719.jfif', '2021-04-16 06:30:36', '2021-06-25 08:33:39', NULL);

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
(3, 1, 'Kane Willmson', 'prabinlapto40@gmail.com', 2, 'male', 'Pokhara 13', 'Hanary', '9846743130', 'img21624629045.jpg', '2021-03-11', '2021-03-23 10:17:13', '2021-06-25 08:05:45', NULL),
(5, 2, 'David Warner', 'prabin.baral0@gmail.com', 1, 'male', 'Pokhara 13', 'Candy Warner', '9846743130', 'img31624629111.jpg', '2021-03-24', '2021-03-31 04:12:35', '2021-06-25 08:06:51', NULL),
(7, 13, 'Sam Curran', 'prabinlaptop11@gmail.com', 2, 'male', 'Pokhara 13', 'Tim Southee', '9846743130', 'img81624630579.jpg', '2021-03-31', '2021-03-31 05:05:58', '2021-06-25 08:31:19', NULL),
(10, 2, 'Jony Bristow', 'prabin.baral12@gmail.com', 1, 'male', 'Pokhara', 'Malan', '9846743131', 'img41624629146.jpeg', '2021-04-16', '2021-04-16 07:28:24', '2021-06-25 08:07:26', NULL),
(13, 3, 'Kagiso Rabada', 'prabinlaptop13@gmail.com', 1, 'male', 'Pokhara', 'Kaajs Rabada', '985414521', 'img61624630361.jpg', '2021-06-09', '2021-06-25 08:27:45', '2021-06-25 08:27:45', NULL),
(14, 3, 'Steven Smith', 'prabinlaptop14@gmail.com', 2, 'male', 'Pokhara', 'Tvid Malan', '985414521', 'img51624630455.jpg', '2021-06-18', '2021-06-25 08:29:19', '2021-06-25 08:29:19', NULL),
(15, 13, 'Namrata Shrestha', 'prabinlaptop05@gmail.com', 3, 'female', 'Pokhara', 'Kaajs Rabada', '985414521', 'img201624630787.jpg', '2021-06-10', '2021-06-25 08:34:51', '2021-06-25 08:34:51', NULL),
(16, 1, 'David malan', 'aaaaaa@gmail.com', 1, 'male', 'pokharaa', 'Atif Aslam', '984565256', 'nakul-QxPRz2oTOWo-unsplash (1)1626079362.jpg', '2021-07-12', '2021-07-12 02:57:50', '2021-07-12 05:16:22', NULL),
(19, 13, 'Tim david', 'david@gmail.com', 1, 'male', 'texus', 'warner', '9875558441', 'img71626093539.jpg', '2021-07-01', '2021-07-12 06:54:06', '2021-07-12 06:54:06', NULL),
(20, 15, 'Bibek Kc', 'wasted_man01@gmail.com', 1, 'male', 'pokhara', 'prabin baral(mama)', '9840171483', 'austin-distel-ortvukjV1bM-unsplash1626357877.jpg', '2021-07-01', '2021-07-15 08:19:43', '2021-07-15 08:19:43', NULL),
(21, 15, 'Prabin Baral', 'prabinlaptop00@gmail.com', 2, 'male', 'pokhara', 'bibek', '9846868438', 'austin-distel-ortvukjV1bM-unsplash1626358187.jpg', '2021-07-15', '2021-07-15 08:24:52', '2021-07-15 08:24:52', NULL),
(22, 15, 'Bibek vanja', 'wastedman01@gmail.com', 4, 'male', 'pokhara', 'chari don', '9814545654', 'austin-distel-ortvukjV1bM-unsplash1626358306.jpg', '2021-07-01', '2021-07-15 08:26:50', '2021-07-15 08:26:50', NULL);

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
(2, 2, 'Bishnu Parsad Dahal', 'abc@gmail.com', '1234', 'Pokhara', '9846865527', 'Master in English', 'English', 'male', 'img111624630611.jpg', '2021-01-02', '2021-01-13 10:30:47', '2021-07-16 04:22:00', NULL),
(3, 2, 'Min Kc', 'aaa@gmail.com', '1234', 'Pokhara 13', '9846865527', 'Msc Physics', 'Physics', 'male', 'img131624630627.jpg', '2021-03-10', '2021-03-23 10:19:03', '2021-06-25 08:32:07', NULL),
(4, 2, 'Prabin Baral', 'aaa@gmail.com', '1234', 'Pokhara', '9846865527', 'Msc Physics', 'English', 'male', 'img141624630641.jfif', '2021-04-06', '2021-04-12 11:26:59', '2021-06-25 08:32:21', NULL),
(6, 2, 'Rabin Datta Baral', 'prabin.baral00@gmail.com', '1234', 'Pokhara', '984674310', 'Bse skss', 'Math', 'male', 'img191624630665.jfif', '2021-05-04', '2021-05-25 03:42:49', '2021-06-25 08:32:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(12) NOT NULL,
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

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `contact_no`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', 2147483647, NULL, '1234', NULL, NULL, NULL, NULL),
(2, 1, 'jjdshdsubins', 'dsjs@gmail.comm', 464654654, NULL, 'cbsdjhc', NULL, NULL, NULL, NULL);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `borrow_book`
--
ALTER TABLE `borrow_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
