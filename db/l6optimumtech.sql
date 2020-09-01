-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 08:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l6optimumtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicant_number`, `course_id`, `first_name`, `last_name`, `email`, `address`, `cnic`, `phone`, `city`, `province`, `zip`, `country`, `img`, `status`, `created_at`, `updated_at`) VALUES
(8, 'AppNo -33763', 1, 'testfirst', 'testlast', 'test786@gmail.com', '434', '3550103259583', '03013435656', 'lahore', 'punjab', '38000', 'pakistan', 'admin/images/courseApplication/35zyl3dsT842Xh0FVXn3EhSJ6dQa5UQXz21poWb9.png', 1, '2020-08-24 06:21:38', '2020-08-28 22:35:02'),
(10, 'AppNo -90259', 2, 'testfirst', 'testlast', 'test@gmail.com', '434', '3550103259583', '03013435656', 'lahore', 'punjab', '38000', 'pakistan', 'admin/images/courseApplication/zOZ9tbTZ0jPK8N1AnDUAgoCLUiUPZ6y8pRUui6dK.png', 0, '2020-08-26 00:04:31', '2020-08-28 01:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'final semster', 'this is description', NULL, '2020-08-12 05:21:39', '2020-08-12 05:21:39'),
(2, 'technical', 'this is description', NULL, '2020-08-12 05:30:21', '2020-08-27 06:04:54'),
(3, 'designing', 'this is description', NULL, '2020-08-12 05:31:38', '2020-08-12 05:31:38'),
(4, 'short', 'this is description', NULL, '2020-08-12 05:31:52', '2020-08-12 05:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `url`, `img`, `created_at`, `updated_at`) VALUES
(2, 'kksecurity', 'www.kksecurity.com', 'admin/images/client/PxdQvBmm0fJOhrGAUITQCMFpNqYqItMFF9K4KGyj.jpeg', '2020-08-07 05:00:22', '2020-08-07 05:12:54'),
(4, 'care to cure', 'http://caretocure.com', 'admin/images/client/xu5KO2db24eRknNyH28Zfx7tRCVXK37PDlddXl8V.jpeg', '2020-08-08 06:49:21', '2020-08-08 06:49:33'),
(5, 'ambulatory center', 'http://ambulatory.com', 'admin/images/client/8tHsfb7US6a94D65y6IC562guRaomwhWZE9PEUhS.jpeg', '2020-08-08 06:50:17', '2020-08-08 06:50:17'),
(6, 'invincible solar energy', 'http://invinciblesolarenergy.com', 'admin/images/client/3BBe9LH3VOnYZ3S85OOiRlSGpLlipyoh7VCOm9L5.jpeg', '2020-08-08 06:55:12', '2020-08-08 06:55:12'),
(7, 'themeforest', 'http://themeforest.com', 'admin/images/client/SYfi0gqJeGK5z5tZbbBCSeO7kdZ0NnP64ATzFLqu.png', '2020-08-08 07:02:46', '2020-08-08 07:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `title`, `detail`, `img`, `type`, `price`, `url`, `status`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(1, '1', 'adobe photo', 'The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largests professional property management companies the region.The largest professional property management companies is a recognized leader in landlord tenant representation throughout Texas', 'admin/images/courses/4tdunslm5YGMpY2qQDhC1ik0H7up1gJS48D3Jnhe.png', 'free', '0', 'http://127.0.0.1:8000/CourseDetail/1', '1', '', '', '2020-08-06 04:48:31', '2020-08-27 05:51:23'),
(2, '3', 'nodejs', 'The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largests professional property management companies the region.The largest professional property management companies is a recognized leader in landlord tenant representation throughout Texas', 'admin/images/courses/JNb2pJGQBl2xfq0Qd7y4ytGKQmpib04khsn7ahyA.png', 'paid', '13500', 'http://127.0.0.1:8000/CourseDetail/2', '1', '', '', '2020-08-06 05:04:30', '2020-08-27 05:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `detail`, `event_date`, `address`, `img`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(1, 'Blood Donation', '\"Saving One Life Is As If Saving Whole Of Humanity…\"', '2020-12-11', 'Agriculture University Faisalabad', 'admin/images/events/CuUd3MmN2FJ9sEXvuAN1onCUC6eM3DbLjMlVPFpT.png', '', '', '2020-08-07 00:39:10', '2020-08-08 03:14:43'),
(2, 'Wordpress Training', 'Optimum Provide For all of its Current or Past Students A Workshop About Wordpress', '2020-08-26', 'Nusrat Auditorium', 'admin/images/events/h3mb74uBYAeJxzoPsP1L0Jea4dlIW1u9nGTY5sfL.png', '', '', '2020-08-07 01:05:50', '2020-08-08 03:13:51'),
(3, 'Digital Marketing', 'Digital Marketing Master Class Session is going to start this month, Be ready and Cennected.', '2020-09-08', 'Optimum Tech', 'admin/images/events/Gp3FrBZp4rJAZ98WeQ2jRG0Bszu6Xyyjj5emoM0J.png', '', '', '2020-08-07 01:06:27', '2020-08-08 03:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `category`, `img`, `created_at`, `updated_at`) VALUES
(1, 'photo', 'admin/images/gallery/yi3RrHbTGkSFGZZuGIAvetAiKI4zrpt9jKVwebZm.png', '2020-08-07 04:16:16', '2020-08-07 04:24:13'),
(3, 'student', 'admin/images/gallery/8XgsG3ybbFTzceHjOz4Us1mUuz74tFg6sunYnKZJ.png', '2020-08-08 01:41:31', '2020-08-08 01:41:31'),
(4, 'campus', 'admin/images/gallery/EEysc0w5hcFQTsyXN74szHZKb9k6JjMnjU8AWRMx.png', '2020-08-08 01:42:00', '2020-08-08 01:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `main_menus`
--

CREATE TABLE `main_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_menus`
--

INSERT INTO `main_menus` (`id`, `title`, `created_at`, `updated_at`) VALUES
(5, 'home', '2020-08-22 04:55:50', '2020-08-22 04:55:50'),
(6, 'products', '2020-08-22 04:56:12', '2020-08-22 04:56:34'),
(7, 'services', '2020-08-22 04:56:28', '2020-08-22 04:56:28'),
(8, 'courses', '2020-08-22 04:56:46', '2020-08-22 05:46:46'),
(9, 'contact us', '2020-08-22 05:43:54', '2020-08-22 05:47:03');

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
(4, '2020_08_05_124601_create_sliders_table', 1),
(5, '2020_08_06_091145_courses', 2),
(6, '2020_08_06_100858_news', 3),
(7, '2020_08_07_051647_events', 4),
(8, '2020_08_07_060938_testimonials', 5),
(9, '2020_08_07_071631_teams', 6),
(10, '2020_08_07_074802_galleries', 7),
(11, '2020_08_07_093923_clients', 8),
(12, '2020_08_08_102427_products', 9),
(13, '2020_08_08_102427_services', 10),
(14, '2020_07_24_064351_create_categories_table', 11),
(15, '2020_08_12_114322_create_batches_table', 12),
(16, '2020_08_13_054233_applications', 13),
(17, '2020_08_13_064606_add_column_phone_applications', 14),
(18, '2020_08_13_074558_add_column_applicant_number_applications', 15),
(19, '2020_08_22_070739_create_main_menus_table', 16),
(20, '2020_08_22_070804_create_sub_menus_table', 16),
(21, '2020_08_24_091547_add_new_columns_courses', 17),
(22, '2020_08_24_091944_add_new_columns_courses', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `detail`, `news_date`, `img`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(4, 'first', 'Optimum-Tech  Service. Himanshu and the team have always provided us with a prompt, reliable, a', '2020-08-07', 'admin/images/news/rYzq9INL37KVlcHPNVuDN3MCwAoVN6Yw5WMSEp2Q.png', '', '', '2020-08-06 07:16:56', '2020-08-08 04:00:50'),
(5, 'second', 'Optimum tech has played a significant role in the development of web based projects.They have', '2020-10-14', 'admin/images/news/029WC6CflqBD0MSBoKMkbOIw4oxvhHP1LG7rboqL.png', '', '', '2020-08-08 04:01:50', '2020-08-28 00:31:18'),
(6, 'Third', 'This develop amazing features that perform under the highest performance and demanded requireme', '2020-11-25', 'admin/images/news/My6kl6qF13PxRsxLwF5WAB8XyVPRXcXoC9DFECO0.png', '', '', '2020-08-08 04:02:42', '2020-08-08 04:17:31');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `img`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(1, 'ecommerce website development', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&nbsp;</p>\r\n<table style=\"height: 210px;\">\r\n<tbody>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"height: 46px;\"><img src=\"/img/image_1598872213_NKdrmhCmFMaGss2wSQyKCvcs1DnDHopIpAid20cS.png\" alt=\"\" width=\"131\" height=\"159\" />&nbsp;</td>\r\n<td style=\"height: 46px;\">\r\n<table style=\"width: 100%; height: 65px;\" width=\"100\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 526px; vertical-align: top; text-align: left; padding-left: 30px;\">We build according to the <span class=\"example1\">demand</span><strong><span class=\"example1\">&nbsp;</span></strong>of clients&rsquo; with an efficient way using customer features.And Deleiver our Best Solutions to Clients According to their Demands.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3><span style=\"font-size: 14pt;\">Why Take This Product</span></h3>\r\n<p style=\"padding-left: 30px;\">These services will be proved to be matching perfectly with your requirements as far as these services are being provided by considering costumers interest to fulfill and to take these services unique strategic and administrative talent is applied, . The world that we experience now is mounting at an exponential pace and optimum tech has proven itself and satisfied its customers. Companies equal to the size of countries lead the industries and make it very difficult for new entrants to survive the competition. To grow in such monopolistic environment, companies needs to falsify this myth and give new comers a chance to take part and grow and compete bigger companies. Optimum tech is providing such kind of opportunities to their customers.</p>\r\n</body>\r\n</html>', 'admin/images/product/pNmD23fpO0d8UAxdQRREkpGiaK84RAxKwFM5vwx4.png', 'test', 'test detila', '2020-08-08 05:34:36', '2020-08-31 06:44:27'),
(2, 'hotel rooms reservation system', 'Determining all the necessities, Optimum Tech Pvt. Ltd gives you Hotel and Restaurant Management Software solution.', 'admin/images/product/qNegmAy9BpvB7Z8ec5uLzIIeuDxl0F7u8rPhZet9.png', '', '', '2020-08-10 01:49:12', '2020-08-13 05:04:29'),
(3, 'management information system development', 'We believe that our highly customized Management Information System Development in Islamabad work wonder for our clients.', 'admin/images/product/nZL9OfPkPBgZIvRaK8Zbwm7Tde3G0p7zZqhqEzYZ.png', '', '', '2020-08-10 01:49:54', '2020-08-13 05:03:41'),
(4, 'finance management system', 'Today No business can imagine achieving aspiring growth targets and beating the competition without consistent, high‑functioning business.', 'admin/images/product/GvzXJYm1LlVH5VeH8z8459O2QY5fmeMp86cXu6Ix.png', '', '', '2020-08-13 05:02:37', '2020-08-13 05:02:37'),
(5, 'student information system', 'Student Information System developed by Optimum tech is the leading web-based solution provider for all type of schools and educational institutions.', 'admin/images/product/xbAHFopGMzzfg9eaFh7S9l30kbiSpdjgZ5fXoBAG.png', '', '', '2020-08-13 05:05:52', '2020-08-13 05:05:52'),
(6, 'content management system', 'Helping you control and monitor the content within your CMS product without any advanced technical training or expertise.', 'admin/images/product/wv5cl6xtpx4OsPuZ5sQ3FqBBJrtJ8ApJTtTBs0TW.png', '', '', '2020-08-13 05:06:36', '2020-08-13 05:06:36'),
(7, 'property management system', 'Management as the core module designed to facilitate comprehensive property management system open source for rentals, sales, purchase.', 'admin/images/product/VsxSviSrxwIDI39j604W89gwdW9iqMDi1wjFsIZg.png', '', '', '2020-08-13 05:08:14', '2020-08-13 05:08:14'),
(8, 'develpment of job portal', 'We also develop Job portal in Pakistan with innovative and advance features like National Testing Services (NTS).Includes all the features', 'admin/images/product/a1BxZndMddlpKvmW8qYp2t1HYDak6BW6GURy3TWX.png', '', '', '2020-08-13 05:09:27', '2020-08-13 05:09:27'),
(9, 'development of taxi app', 'Taxi app development is one such area of specialization that involves drivers and passengers, engaging on the interactive platform of taxi app in Pakistan.', 'admin/images/product/T9FYfQ3KYeG8XAzMmBQ8wvycqn3m78FPTABiYcL9.png', '', '', '2020-08-13 05:10:12', '2020-08-13 05:10:12'),
(10, 'hajj umra voucher management system', 'he Vouchers Management System for Hajj and Umrah is a complete web based Umrah Management Software System suitable for the companies', 'admin/images/product/ZR45pvli9JhfWgI4X90OnVQsS8LNIUgpSnrHwW4N.png', '', '', '2020-08-13 05:11:11', '2020-08-13 05:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `why` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `detail`, `why`, `img`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(1, 'Website Designing Website Development', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p style=\"padding-left: 30px;\">Delivering flawless Web applications is our m&eacute;tier/ forte. Optimum Tech has a proficient and a devoted team of developers which have been developing high performance websites since 2005. If you choose to work with OPTIMUM TECH, your product is in safe hands. Optimum tech is located in Faisalabad and it has been providing excellent services regarding web designing and web development, also provide services regarding designing Task for Business Goals Creative design and custom development work. Optimum tech aims to change that with its intergalactic range of judicious web designing and development packages. By joining hands with our experienced and qualified designers, you will not only get great website development designs and influential website features but also end up saving a fortune. Designing professionals at optimum tech has helped web traders in creating websites that undertake visitor engagement and greater makeovers. Optimum Tech has the team of proficient web developers and designers. We proudly provide our service of progress that helping businesses and online marketers realize the true power of web. With the many years of software industry experience and archetypal website development work in Faisalabad, Pakistan, we earn the reward of best development company from our clients. We have completed more than 2000 projects, and are determined to make web development services reasonable for all.</p>\r\n<h3 class=\"text-theme-colored\">Why to take this Services</h3>\r\n<p style=\"padding-left: 30px;\">To fulfill these unique strategic and administrative talent needs, offshore staffing services prove to be a great alternative.The world that we experience now is growing at an exponential pace. Companies equal to the size of countries lead the industries and make it very difficult for new entrants to survive the competition. To take on the big boys at their game and to grow in such monopolistic environment, companies need to shove off the orthodox techniques and need to think out-of-box techniques. Talent plays a big role in taking a company from 0 to 1 and then 1 to &rsquo;n&rsquo;. However attracting top talent for a company is far from easy.</p>\r\n</body>\r\n</html>', 'To fulfill these unique strategic and administrative talent needs, offshore staffing services prove to be a great substitute. The world that we experience now is growing at an exponential pace. In this modern digital world, online presence is the thing that matters the most, and if that is not appealing enough, then you may fail to create the impression that you envisioned. Optimum Tech can help you create that impression with the help of a customized website', 'admin/images/service/K8fUBN53ZLOSjXbZ8rzKuq7LeIC0Yebv7pO498gC.png', 'test', 'test', '2020-08-08 06:01:43', '2020-08-31 06:53:44'),
(2, 'Mobile Application Development', 'Day by day the new devices are introduced to the market with innovative options just because of growing technology. The evolution of mobile application development technology with new devices made our lives much easier. Optimum tech has set up an advanced Mobile Application Development Course in Faisalabad , Pakistan. Mobile app development is a great way to reach the potential customers. You can improve your customer experience by creating the best mobile app.\r\n\r\nOptimum tech is here to provide their customers the premium services with years of involvement in mobile apps development in Faisalabad , Pakistan and we are creating applications for clients along with best apps designing. We focus on supporting the local and international based clients with client engagement, sales, software management, application & website deployment and a complete deliverance cycle. You will find the great philosophies at the core of all of optimum tech mobile apps user experience intend, and bestow with the framework that formulate our developed apps.', 'These services will be proved to be matching perfectly with your requirements as far as these services are being provided by considering costumers interest to fulfill and to take these services unique strategic and administrative talent is applied, . The world that we experience now is mounting at an exponential pace and optimum tech has proven itself and satisfied its customers.\r\n\r\nCompanies equal to the size of countries lead the industries and make it very difficult for new entrants to survive the competition. To grow in such monopolistic environment, companies needs to falsify this myth and give new comers a chance to take part and grow and compete bigger companies. Optimum tech is providing such kind of opportunities to their customers.', 'admin/images/service/ypEmQ41ZxdDVio45DcXcLkXGdT5DyzH6EAmUR8UF.png', '', '', '2020-08-10 01:45:57', '2020-08-10 01:45:57'),
(3, 'Search Engine Marketing', 'With the advancement of marketing world, business companies need more efficient ways to capture their position in the competitive market. And what can be more efficient than Search Engine Marketing? Around 85% of retailers consider SEM as the most effective route for client acquisition. If you want to use the SEM service, Optimum Tech can be your best choice in Faisalabad, Pakistan as we provide the most effective and efficient Pay Per Click Services which can be your fastest way to get qualified leads.\r\n\r\nOptimum Tech can help you purchase ads online and get your product, services, or websites more presence and visibility. You will have a perfect chance to get more than ever web audience.', 'Search Engine Marketing is the most effective way in current era to nourish your business. There are thousands of businesses out there all aiming for the same eyeballs, it has become essential to advertise online, and for this purpose, SEM can be your best option to promote your business.\r\n\r\nOptimum Tech will help you gain through a viable paid search on Internet marketing strategy to offer your business with immense flexibility and control in your advertising campaigns. You can implement it as a temporary, seasonal or long-term strategy and monthly budgets can be closely monitored and controlled. It is about ensuring that through our Search Engine Marketing efforts we will deliver to the right person, the right message and the right experience at the right time.', 'admin/images/service/Ca8anNq7p9MSr3PmJXWE05tM144fNIVjMKDU0b3A.png', '', '', '2020-08-10 01:47:28', '2020-08-10 01:47:28'),
(4, 'product branding', 'Our world is in a state of dynamic innovations which sometimes seems to be pretty exciting and productive but at the same time, really intimidating. Many entrepreneurs might find it appalling catching up with evolving trends on their own. In such case, product branding comes handy. Product Branding is the process of developing a unique name and identity for a product ensuring awareness and credibility and creating customer loyalty, among other advantages. Building a brand takes time and involves a lot of resources. It is however an important marketing tool for stimulating recognition.\r\n\r\nOptimum Tech can help you in leading your product to topnotch position. We won’t be just designing an attractive logo and printing all your collateral in the company’s colors we’ll be establishing a brand message which conveys the key point of the difference between you and your competitor.', 'What do you offer to clients that no one else does? To find that crux, apart from only deep understanding of your product and company culture, we also explore what your competitors have to deliver as well. We also examine your target market segment and identify it’s both needs and wants. Only then, after knowing the bigger picture, do we develop digital media to represent your brand.\r\n\r\nWe extend your brand’s reach with displays, events and promotions to catch reader’s attention and create a memorable impression instantaneously, leaving him/her thinking about the advertisement after they have driven past it.', 'admin/images/service/ehgxCmdHjucx0ueKwePCdIcasVqolDz54oNz4GK4.png', '', '', '2020-08-13 04:51:02', '2020-08-13 04:51:02'),
(5, 'Offshore IT Staffing', 'OPTIMUM-TECH, Faisalabad is a trusted name for offshore support and development services. It has been a trusted name since years. The idea of providing top-notch service of Offshore It staffing is to promote the small and big scale businesses and organizations , helping businesses to innovate and implement digital modifications. Finding good staff with remarkable capabilities is still a big difficult task among business and organization\'s set-up. And it\'s even more difficult to find the right staff at right price. OPTIMUM TECH is providing all the basic and necessary facilities to all the representative based workers in our office with the pertinent packages. You, as our client don\'t need to worry about the management, housing, taxes, requirements of staff members and other overheads that are connected to your offshore work. Offshore staffing can help you expand without overcrowding your current office space and without overspending.', 'ffshore IT staffing is the optimal solutions for those companies who wish to save considerable money, time and efforts. We truly understand your basic requirements and offer IT staffing solutions that you can depend on! To fulfill these unique strategic, offshore staffing is the great alternative.\r\n\r\nYou can outsource a small part or full departments of your workforce. Our impeccable range of services (include creative services, customer care, recruitment of employees or back office work)', 'admin/images/service/JwV9Q24xrKT2zRQAMVyvjIcmSxynwOthg0GcUA4H.png', '', '', '2020-08-13 04:54:14', '2020-08-13 04:54:14'),
(6, 'Domain & Hosting', 'Domain & Hosting service of Solutions Player (Pvt) Ltd is the online portal which is all the way through an individual or a business project can get premium Domain Registration to mechanize their business procedures, functions, requirements and needs at most favorable or negotiable rates. Electrical & Electronic corporis dolorum blanditiis ullam officia .\r\nIn our hosting services select the best one with: Shared Hosting (also known as multiple hosting, perfect for websites and blogs) WordPress Hosting (the best way to run WordPress open source) Virtual Private Servers (Perfect for businesses, Ecommerce, and developers) Dedicated Servers (Perfect for huge websites and resource heavy apps)\r\n\r\nDomain names on the internet are much similar to entry in a phone book and the hosting is much similar to the place that rented out to have a business in. we are as top ranked domain and web hosting provider, offers with an extensive range of hosting packages appropriate to small, medium and large enterprises.', 'To fulfill these unique strategic and administrative talent needs, offshore staffing services prove to be a great alternative.The world that we experience now is growing at an exponential pace. Companies equal to the size of countries lead the industries and make it very difficult for new entrants to survive the competition. To take on the big boys at their game and to grow in such monopolistic environment, companies need to shove off the orthodox techniques and need to think out-of-box techniques. Talent plays a big role in taking a company from 0 to 1 and then 1 to ’n’. However attracting top talent for a company is far from easy.', 'admin/images/service/rrGcs3GlLUis5ZrJWFuwM1JAdys1W1s5Dulu7Epg.png', '', '', '2020-08-13 04:55:11', '2020-08-13 04:55:11'),
(7, 'Outsourcing', 'The outside company, known as a third-party provider arranges for it\'s own workers or and systems to perform their tasks or services either on site at the hiring company\'s own facilities. Outsourcing is a getting more popular in data innovation and for the administration of different business that have viewed as natural for delaying with business. For a company to effectively outsource responsibilities, it is crucial to focus on business partnership, managing relationship more than service-level agreements.\r\n\r\nMaintaining and securing a trusted relationship is important in outsourcing efforts and is more complex than establishing service levels and relationships. Optimum Tech work nearly with the customer to enhance the employment efficiencies of nature of contract, staffing flexibility, rate of conveyance and expense regulation provide the best Outsourcing Service.', 'Outsourcing is the most effective way to promote you business in today\'s era. There is thousands of business here that are in same boat and trying to up hold their business, aiming for the best logistics in the community.\r\n\r\nOptimum Tech will give you the service at low and pertinent costs, increased efficiency of whole system/management, provide access to skills or resources, we focus more on strategy and core competencies. It is about ensuring that through our services and efforts we will deliver to the right person, the right message and the right experience at the right time.', 'admin/images/service/J7caCm0neYhnzeCPK2JdEZfYcp02pb6KwZTqGm69.jpeg', '', '', '2020-08-13 04:56:14', '2020-08-13 04:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `created_at`, `updated_at`) VALUES
(2, 'admin/images/slider/x5p0u6qRkPm1j2j3n7XqmMMx1LgxHo4nZbWx8TRx.png', '2020-08-06 02:43:52', '2020-08-06 03:13:10'),
(3, 'admin/images/slider/PrTaMsAT3MMVPsni4cjMRcEM1j4rLxCtsVq8XkJT.png', '2020-08-06 02:48:41', '2020-08-06 03:13:30'),
(4, 'admin/images/slider/xMDav9kak8evhAwktz2V7elHYBS9GKKpMDQZQ0yr.png', '2020-08-06 03:07:48', '2020-08-06 03:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `tbl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `main_id`, `title`, `route`, `item_id`, `tbl`, `created_at`, `updated_at`) VALUES
(26, 7, 'Website Designing Website Development', '/ServiceDetail/1', NULL, 'services', '2020-08-28 21:30:35', '2020-08-28 22:30:27'),
(27, 6, 'ecommerce website development', '/ProductDetail/1', NULL, 'products', '2020-08-28 21:31:15', '2020-08-28 22:30:35'),
(28, 7, 'Mobile Application Development', '/ServiceDetail/2', NULL, 'services', '2020-08-28 21:47:25', '2020-08-28 21:47:25'),
(29, 6, 'hotel rooms reservation system', '/ProductDetail/2', NULL, 'products', '2020-08-28 21:48:03', '2020-08-28 22:27:34'),
(31, 6, 'management information system development', '/ProductDetail/3', NULL, 'products', '2020-08-28 22:38:10', '2020-08-28 22:38:10'),
(32, 8, 'adobe photo', '/CourseDetail/1', NULL, 'courses', '2020-08-28 22:38:54', '2020-08-28 22:38:54'),
(34, 8, 'nodejs', '/CourseDetail/2', NULL, NULL, '2020-08-28 22:59:36', '2020-08-28 22:59:36'),
(35, 6, 'student information system', '/ProductDetail/5', NULL, NULL, '2020-08-29 20:17:47', '2020-08-29 20:18:13'),
(36, 6, 'content management system', '/ProductDetail/6', NULL, NULL, '2020-08-31 02:22:42', '2020-08-31 02:22:42'),
(37, 6, 'property management system', '/ProductDetail/7', NULL, NULL, '2020-08-31 02:22:57', '2020-08-31 02:22:57'),
(38, 6, 'develpment of job portal', '/ProductDetail/8', NULL, NULL, '2020-08-31 02:23:13', '2020-08-31 02:23:13'),
(39, 6, 'development of taxi app', '/ProductDetail/9', NULL, NULL, '2020-08-31 02:23:28', '2020-08-31 02:23:28'),
(40, 7, 'Search Engine Marketing', '/ServiceDetail/3', NULL, NULL, '2020-08-31 02:23:42', '2020-08-31 02:23:42'),
(41, 7, 'product branding', '/ServiceDetail/4', NULL, NULL, '2020-08-31 02:23:55', '2020-08-31 02:23:55'),
(42, 7, 'Offshore IT Staffing', '/ServiceDetail/5', NULL, NULL, '2020-08-31 02:24:08', '2020-08-31 02:24:08'),
(43, 7, 'Domain & Hosting', '/ServiceDetail/6', NULL, NULL, '2020-08-31 02:24:21', '2020-08-31 02:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `email`, `phone`, `education`, `experience`, `address`, `designation`, `detail`, `img`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(1, 'Ahsan Raza', 'ahsanraza363@gmail.com', '+92 313 6650965', 'BS-IT, MS-CS', '4 years', '25-a, batala colony Faisalabad', 'Co Founder', 'OPTIMUM-TECH enjoying a very positive reputation across the town by the grace of Allah Almighty', 'admin/images/team/stj7r136SWCSMyLXaL44oeDEIMoihoqBheOF5XXR.jpeg', 'meta name', 'meta detail', '2020-08-07 02:37:43', '2020-08-31 01:48:03'),
(3, 'Ali', '', '', '', '', '', 'Campus Manager', 'Our main focus is to make our Students enough capable to support their family financially.', 'admin/images/team/YBZ2y3qntsDzs7vVpitnRn57lxC18CbW6yg3pukV.jpeg', '', '', '2020-08-08 01:19:20', '2020-08-08 01:26:02'),
(4, 'Ahmad', '', '', '', '', '', 'Head Tourism', 'Tourism is travel for pleasure to boost energy of our staff and students to', 'admin/images/team/m3oiesywRZoWcfQ1Zd85lT4odbbNdfrQKYKPOcfM.jpeg', '', '', '2020-08-08 01:20:39', '2020-08-08 01:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `detail`, `img`, `meta_name`, `meta_detail`, `created_at`, `updated_at`) VALUES
(1, 'firsts', 'tests', 'Optimum-Tech  Service. Himanshu and the team have always provided us with a prompt, reliable, a', 'admin/images/testimonials/1IcAwXeFvwkjTakB6fUO0HAWdivnsVMqzSpJ5sGM.jpeg', '', '', '2020-08-07 01:44:36', '2020-08-08 05:12:54'),
(4, 'Second', 'Developer', 'Trustworthy with their advice.  Its been 3 years since we started getting our SEO and marketing', 'admin/images/testimonials/3tjVxafxlPhmqNn7Ml67jHhNs61O4tznW0m0yWM7.jpeg', '', '', '2020-08-08 04:50:06', '2020-08-08 05:12:21'),
(5, 'third', 'content writer', 'Optimum-Tech  has played a significant role in the development of web based projects. They have', 'admin/images/testimonials/IylkJWIN5ms6xy7WrVnCJwVYKP7fJZ98NWRrP3IG.jpeg', '', '', '2020-08-08 04:50:52', '2020-08-08 05:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'admin@gmail.com', 'admin', NULL, '$2y$10$YaQ47Lb/Ry/LFJMBHyjl6u/sNi7r8AAizIPjAtwcnhuKvkHtYqb76', 'PUxPAViw7he5o7cF1mTTzblpANXee4SDQKj2PrfhUM6QaPeHuQkFoRiD7TwM', '2020-08-07 06:23:10', '2020-08-07 06:23:10'),
(2, 'user', 'test@gmail.com', NULL, NULL, '$2y$10$2DjIoSUJyekIOppbQlj5pei7HtbnqDN2oG9h22yPeP72y4OACmCEq', NULL, '2020-08-07 06:30:38', '2020-08-07 06:30:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applications_applicant_number_unique` (`applicant_number`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menus`
--
ALTER TABLE `main_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main_menus`
--
ALTER TABLE `main_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
