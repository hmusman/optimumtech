-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 02:25 PM
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `detail`, `img`, `type`, `created_at`, `updated_at`) VALUES
(1, 'adobe photo', 'this is descriptionn of adobe course', 'admin/images/courses/4tdunslm5YGMpY2qQDhC1ik0H7up1gJS48D3Jnhe.png', 'free', '2020-08-06 04:48:31', '2020-08-08 01:15:52'),
(2, 'node', 'this is description of node', 'admin/images/courses/nyVeOR3BOtFMpRuTsRHdAYtawNMCbr3VLJJN3fLm.jpeg', 'paid', '2020-08-06 05:04:30', '2020-08-08 01:07:57'),
(3, 'photo shop', 'this is description of photo shop', 'admin/images/courses/Sxv5JsNBFDT9XqZLyej9evTD3jZS0fx1ZypNWUGS.jpeg', 'free', '2020-08-06 05:05:13', '2020-08-08 01:12:25');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `detail`, `event_date`, `address`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Blood Donation', '\"Saving One Life Is As If Saving Whole Of Humanity…\"', '2020-12-11', 'Agriculture University Faisalabad', 'admin/images/events/CuUd3MmN2FJ9sEXvuAN1onCUC6eM3DbLjMlVPFpT.png', '2020-08-07 00:39:10', '2020-08-08 03:14:43'),
(2, 'Wordpress Training', 'Optimum Provide For all of its Current or Past Students A Workshop About Wordpress', '2020-08-26', 'Nusrat Auditorium', 'admin/images/events/h3mb74uBYAeJxzoPsP1L0Jea4dlIW1u9nGTY5sfL.png', '2020-08-07 01:05:50', '2020-08-08 03:13:51'),
(3, 'Digital Marketing', 'Digital Marketing Master Class Session is going to start this month, Be ready and Cennected.', '2020-09-08', 'Optimum Tech', 'admin/images/events/Gp3FrBZp4rJAZ98WeQ2jRG0Bszu6Xyyjj5emoM0J.png', '2020-08-07 01:06:27', '2020-08-08 03:15:28');

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
(13, '2020_08_08_102427_services', 10);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `detail`, `news_date`, `img`, `created_at`, `updated_at`) VALUES
(4, 'first', 'Optimum-Tech  Service. Himanshu and the team have always provided us with a prompt, reliable, a', '2020-08-07', 'admin/images/news/rYzq9INL37KVlcHPNVuDN3MCwAoVN6Yw5WMSEp2Q.png', '2020-08-06 07:16:56', '2020-08-08 04:00:50'),
(5, 'second', 'Optimum tech has played a significant role in the development of web based projects. They have', '2020-10-14', 'admin/images/news/029WC6CflqBD0MSBoKMkbOIw4oxvhHP1LG7rboqL.png', '2020-08-08 04:01:50', '2020-08-08 04:17:14'),
(6, 'Third', 'This develop amazing features that perform under the highest performance and demanded requireme', '2020-11-25', 'admin/images/news/My6kl6qF13PxRsxLwF5WAB8XyVPRXcXoC9DFECO0.png', '2020-08-08 04:02:42', '2020-08-08 04:17:31');

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
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `img`, `created_at`, `updated_at`) VALUES
(1, 'ECOMMERCE WEBSITE DEVELOPMENT', 'We build according to the demand of clients’ with an efficient way using customer features.And Deleiver our Best Solutions to Clients According to their Demands.', 'admin/images/product/pNmD23fpO0d8UAxdQRREkpGiaK84RAxKwFM5vwx4.png', '2020-08-08 05:34:36', '2020-08-08 05:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `detail`, `why`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Website Designing Website Development', 'Delivering flawless Web applications is our métier/ forte. Optimum Tech has a proficient and a devoted team of developers which have been developing high performance websites since 2005. If you choose to work with OPTIMUM TECH, your product is in safe hands. Optimum tech is located in Faisalabad and it has been providing excellent services regarding web designing and web development, also provide services regarding designing Task for Business Goals Creative design and custom development work. Optimum tech aims to change that with its intergalactic range of judicious web designing and development packages. By joining hands with our experienced and qualified designers, you will not only get great website development designs and influential website features but also end up saving a fortune. Designing professionals at optimum tech has helped web traders in creating websites that undertake visitor engagement and greater makeovers.\r\n\r\nOptimum Tech has the team of proficient web developers and designers. We proudly provide our service of progress that helping businesses and online marketers realize the true power of web. With the many years of software industry experience and archetypal website development work in Faisalabad, Pakistan, we earn the reward of best development company from our clients. We have completed more than 2000 projects, and are determined to make web development services reasonable for all.', 'To fulfill these unique strategic and administrative talent needs, offshore staffing services prove to be a great substitute. The world that we experience now is growing at an exponential pace. In this modern digital world, online presence is the thing that matters the most, and if that is not appealing enough, then you may fail to create the impression that you envisioned. Optimum Tech can help you create that impression with the help of a customized website', 'admin/images/service/K8fUBN53ZLOSjXbZ8rzKuq7LeIC0Yebv7pO498gC.png', '2020-08-08 06:01:43', '2020-08-08 06:01:43');

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `detail`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ahsan Raza', 'Co Founder', 'OPTIMUM-TECH enjoying a very positive reputation across the town by the grace of Allah Almighty', 'admin/images/team/stj7r136SWCSMyLXaL44oeDEIMoihoqBheOF5XXR.jpeg', '2020-08-07 02:37:43', '2020-08-08 01:18:26'),
(3, 'Ali', 'Campus Manager', 'Our main focus is to make our Students enough capable to support their family financially.', 'admin/images/team/YBZ2y3qntsDzs7vVpitnRn57lxC18CbW6yg3pukV.jpeg', '2020-08-08 01:19:20', '2020-08-08 01:26:02'),
(4, 'Ahmad', 'Head Tourism', 'Tourism is travel for pleasure to boost energy of our staff and students to', 'admin/images/team/m3oiesywRZoWcfQ1Zd85lT4odbbNdfrQKYKPOcfM.jpeg', '2020-08-08 01:20:39', '2020-08-08 01:26:25');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `detail`, `img`, `created_at`, `updated_at`) VALUES
(1, 'firsts', 'tests', 'Optimum-Tech  Service. Himanshu and the team have always provided us with a prompt, reliable, a', 'admin/images/testimonials/1IcAwXeFvwkjTakB6fUO0HAWdivnsVMqzSpJ5sGM.jpeg', '2020-08-07 01:44:36', '2020-08-08 05:12:54'),
(4, 'Second', 'Developer', 'Trustworthy with their advice.  Its been 3 years since we started getting our SEO and marketing', 'admin/images/testimonials/3tjVxafxlPhmqNn7Ml67jHhNs61O4tznW0m0yWM7.jpeg', '2020-08-08 04:50:06', '2020-08-08 05:12:21'),
(5, 'third', 'content writer', 'Optimum-Tech  has played a significant role in the development of web based projects. They have', 'admin/images/testimonials/IylkJWIN5ms6xy7WrVnCJwVYKP7fJZ98NWRrP3IG.jpeg', '2020-08-08 04:50:52', '2020-08-08 05:11:55');

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
(1, 'administrator', 'admin@gmail.com', 'admin', NULL, '$2y$10$YaQ47Lb/Ry/LFJMBHyjl6u/sNi7r8AAizIPjAtwcnhuKvkHtYqb76', NULL, '2020-08-07 06:23:10', '2020-08-07 06:23:10'),
(2, 'user', 'test@gmail.com', NULL, NULL, '$2y$10$2DjIoSUJyekIOppbQlj5pei7HtbnqDN2oG9h22yPeP72y4OACmCEq', NULL, '2020-08-07 06:30:38', '2020-08-07 06:30:38');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
