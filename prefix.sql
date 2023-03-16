-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 05:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xspeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_settings`
--

CREATE TABLE `about_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_image` varchar(191) DEFAULT NULL,
  `about_title` varchar(191) DEFAULT NULL,
  `about_experience_icon` varchar(191) DEFAULT NULL,
  `about_experience_number` varchar(191) DEFAULT NULL,
  `about_experience_after_number` varchar(191) DEFAULT NULL,
  `about_experience_text` varchar(191) DEFAULT NULL,
  `about_section_label` varchar(191) DEFAULT NULL,
  `about_section_first_title` varchar(191) DEFAULT NULL,
  `about_section_title_middle` varchar(191) DEFAULT NULL,
  `about_section_title_last` varchar(191) DEFAULT NULL,
  `about_section_title_desc` longtext DEFAULT NULL,
  `about_section_title_rich_desc` longtext DEFAULT NULL,
  `about_progress_label` varchar(191) DEFAULT NULL,
  `about_progress_percent` varchar(191) DEFAULT NULL,
  `about_progress_label_two` varchar(191) DEFAULT NULL,
  `about_progress_label_two_percent` varchar(191) DEFAULT NULL,
  `about_progress_label_three` varchar(191) DEFAULT NULL,
  `about_progress_label_three_percent` varchar(191) DEFAULT NULL,
  `about_progress_label_four` varchar(191) DEFAULT NULL,
  `about_progress_label_four_percent` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_settings`
--

INSERT INTO `about_settings` (`id`, `about_image`, `about_title`, `about_experience_icon`, `about_experience_number`, `about_experience_after_number`, `about_experience_text`, `about_section_label`, `about_section_first_title`, `about_section_title_middle`, `about_section_title_last`, `about_section_title_desc`, `about_section_title_rich_desc`, `about_progress_label`, `about_progress_percent`, `about_progress_label_two`, `about_progress_label_two_percent`, `about_progress_label_three`, `about_progress_label_three_percent`, `about_progress_label_four`, `about_progress_label_four_percent`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/p61Ui7LLGl7Su70kDM0BjpSR83bnhUtyAy0f3Ztd.jpg', NULL, NULL, NULL, NULL, NULL, 'About Us', 'About X-Peed Internet', 'Find out more about us', 'Customer happiness is our main goal', 'Since 1997 we have been a visionary and a reliable software engineering partner for world-class brands.abbreviated as co., is a legal entity representing an association of people, whether natural, legal or a mixture of both, with a specific objective. Company members share a common purpose and unite to achieve specific, declared is an overview of the company\'s plan, vision, and relationships.', '<p>Since 1997 we have been a visionary and a reliable software engineering partner for world-class brands.abbreviated as co., is a legal entity representing an association of people, whether natural, legal or a mixture of both, with a specific objective. Company members share a common purpose and unite to achieve specific, declared goals.description is an overview of the company\'s plan, vision, and relationships.</p><p>As this guide explains, investing in cryptocurrency comes with a ton of benefits. You do want to make sure you vet a currency before investing in it. Get Started</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-14 01:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `img` varchar(191) DEFAULT NULL,
  `blog_categories_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `text`, `img`, `blog_categories_id`, `created_at`, `updated_at`) VALUES
(1, 'This is a test title Updated', '<p>Updated All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking out for friends. This will mean that they are naturally looking out for good people who are interesting enough. For this, the profile has to be very interesting. on MySpace will know that there are millions.</p><p><i><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</strong></i></p><p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata.</i></p>', 'storage/img/yFZCWszL5dqiew4spBO14ZZr7c0xrnttyoVZLS3n.jpg', 3, '2023-03-05 03:36:38', '2023-03-09 01:19:52'),
(2, 'We Provide any Kind of Business and Creative Consultant Solutions.', '<p><i><strong>All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking out for friends. </strong></i>This will mean that they are naturally looking out for good people who are interesting enough. For this, the profile has to be very interesting. on MySpace will know that there are millions. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata.</p><p>&nbsp;</p>', 'storage/img/jvIJ67sypFyEwnpCxQFlRT0AVaWv3oTnwHd153L0.jpg', 4, '2023-03-05 03:53:24', '2023-03-05 03:53:24'),
(3, 'We Provide any Kind of Business and Creative Consultant Solutions.TEst', '<p><i>TEst All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking out for friends. This will mean that they are naturally looking out for good people who are interesting enough. </i>For this, the profile has to be very interesting. on MySpace will know that there are millions. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata.</p>', 'storage/img/uMFb10LVV23kNAEDOFSrKfWr1KtNLH3gvv1D6eho.jpg', 5, '2023-03-05 03:54:06', '2023-03-05 03:58:55'),
(7, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '<h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><h2>Where can I get some?</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'storage/img/z08kErs1kIEn8oBkIntEshUL7GlmIT5AK5Aj5MH7.jpg', 1, '2023-03-13 23:20:55', '2023-03-13 23:20:55'),
(8, 'Lorem Ipsum is simply dummy te', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><h2>Where can I get some?</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'storage/img/WQYt4wjOwBurZKas1VTNx4KKXJMDJaupAzgi62Qw.jpg', 1, '2023-03-13 23:22:23', '2023-03-13 23:22:23'),
(9, 'Lorem Ipsum is simply dummy test', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><h2>Where can I get some?</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'storage/img/A6yqvx0070pQANOoB2WJ2WI4VVf9dvW0IkNcSsx9.jpg', 1, '2023-03-13 23:22:43', '2023-03-13 23:22:43'),
(10, 'Lorem Ipsum is simply dummy test again', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br>&nbsp;</p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><h2>Where can I get some?</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'storage/img/GaMBHEFQsYMslh8dbzwuLtY1RqOGDiaAaBZezo3P.jpg', 5, '2023-03-13 23:23:00', '2023-03-13 23:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(191) NOT NULL,
  `icon` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `topic`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Offer', 'fa-thin fa-gift', '2023-03-04 22:47:27', '2023-03-04 22:59:49'),
(3, 'Test', 'fa-brands fa-blogger', '2023-03-04 22:58:53', '2023-03-04 22:58:53'),
(4, 'ISP', 'fa-thin fa-gift', '2023-03-04 22:59:30', '2023-03-04 22:59:30'),
(5, 'Cultural', 'fa-thin fa-gift', '2023-03-04 22:59:44', '2023-03-04 22:59:44'),
(6, 'Test Updated', 'fa-brands fa-blogger', '2023-03-09 00:50:33', '2023-03-09 00:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `blog_titles`
--

CREATE TABLE `blog_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_titles`
--

INSERT INTO `blog_titles` (`id`, `label`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Blog & Offer Test', 'Test Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit.', '2023-03-05 03:53:43', '2023-03-04 22:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `client_logo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `client_logo`, `created_at`, `updated_at`) VALUES
(1, 'Desh', 'storage/img/7skZQKBhDOV1vKBXLnOv7cwPvHyAPeG33jdbDE2D.jpg', NULL, '2023-02-22 02:37:34'),
(3, 'sodai nagar', 'storage/img/LaK7TYcGXaymp2EGrdOFBgJrOpHQvLZxQvCHzc90.jpg', '2023-02-22 01:42:35', '2023-02-22 01:42:35'),
(4, 'sodavvffffiffgfgfgfgfg12', 'storage/img/VpXgazEhmgIWeB4sPp8RKuZluwPjAFgsoQEXEAVL.jpg', '2023-02-22 01:49:54', '2023-02-22 03:17:52'),
(5, 'Tele wire', 'storage/img/8DVRZvhJIPP5BDY15u1z0slhAXnvB32YolPAVGwf.jpg', '2023-02-22 02:37:56', '2023-02-23 00:19:16'),
(7, 'Edufy', 'storage/img/tcdzzE3XNG10Vg3CsWr5L5rev9EO8PJwXc8BCTwi.jpg', '2023-02-22 03:30:35', '2023-02-23 00:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_boxes`
--

CREATE TABLE `contact_boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_phone_icon` varchar(191) DEFAULT NULL,
  `contact_phone_title` varchar(191) DEFAULT NULL,
  `contact_phone_text` varchar(191) DEFAULT NULL,
  `contact_email_icon` varchar(191) DEFAULT NULL,
  `contact_email_title` varchar(191) DEFAULT NULL,
  `contact_email_text` varchar(191) DEFAULT NULL,
  `contact_location_icon` varchar(191) DEFAULT NULL,
  `contact_location_title` varchar(191) DEFAULT NULL,
  `contact_location_text` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_boxes`
--

INSERT INTO `contact_boxes` (`id`, `contact_phone_icon`, `contact_phone_title`, `contact_phone_text`, `contact_email_icon`, `contact_email_title`, `contact_email_text`, `contact_location_icon`, `contact_location_title`, `contact_location_text`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-phone', 'Phone Number', '<ul><li>+8801738008820</li><li>+8809639164769</li></ul>', 'fa-envelope', 'Email Address', '<ul><li><a href=\"mailto:Info@telewirebd.net\">Info@telewirebd.net</a></li><li>support@telewirebd.net</li></ul>', 'fa-location-dot', 'Location', '<ul><li><strong>Corporate Office:&nbsp;</strong> 965/A, 8D, East Shewrapara, Mirpur, Dhaka -1216, Bangladesh</li><li><strong>ISP Local Office:</strong> Holding No:384, Dabtoli, Ranisankail, Thakurgaon</li></ul>', NULL, '2022-12-21 13:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_titles`
--

CREATE TABLE `contact_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_section_label` varchar(191) DEFAULT NULL,
  `contact_section_first_title` varchar(191) DEFAULT NULL,
  `contact_section_title_middle` varchar(191) DEFAULT NULL,
  `contact_section_title_last` varchar(191) DEFAULT NULL,
  `contact_section_title_desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_titles`
--

INSERT INTO `contact_titles` (`id`, `contact_section_label`, `contact_section_first_title`, `contact_section_title_middle`, `contact_section_title_last`, `contact_section_title_desc`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'Contact Us', 'Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttit', 'storage/img/b9gJYlzdNjGdZzneFXwiGMgWnQLzeF9w7mg8gVfP.jpg', 'It is a long established fact that a reader will be distracted by the of a page when looking at its layout. content here making it look like readable English.', NULL, '2023-03-07 03:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `coverage_areas`
--

CREATE TABLE `coverage_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) DEFAULT NULL,
  `district` varchar(191) DEFAULT NULL,
  `maps_iframe_code` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coverage_areas`
--

INSERT INTO `coverage_areas` (`id`, `city`, `district`, `maps_iframe_code`, `created_at`, `updated_at`) VALUES
(1, 'Khilgaon test', 'Dhaka 2', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29212.767279465435!2d90.43275815624263!3d23.76178519099907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80e827f19df%3A0x9c7482b95bc6d57c!2sKhilgaon%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1678179925216!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '2023-03-07 03:19:02'),
(2, 'Badda', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29207.25652684596!2d90.41200265626192!3d23.7863234828162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b71894d7cb%3A0x725a1e9ba77a8744!2sBadda%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1678179908656!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '2023-03-01 01:14:24'),
(3, 'Rampura', 'Dhaka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.2446185451645!2d90.41679097656261!3d23.76084430776433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8783ab9882f%3A0x50f429f46d937f3c!2sRampura%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1678179747602!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-02-28 23:21:23', '2023-03-01 01:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `coverage_titles`
--

CREATE TABLE `coverage_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(191) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coverage_titles`
--

INSERT INTO `coverage_titles` (`id`, `label`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Coverage Area', 'Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erhh test', NULL, '2023-02-28 22:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) NOT NULL,
  `district_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `created_at`, `updated_at`) VALUES
(3, 'Thakurgaon', '2022-12-22 00:17:10', '2022-12-22 00:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `explores`
--

CREATE TABLE `explores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card1_img` varchar(191) DEFAULT NULL,
  `card1_button_text` varchar(191) DEFAULT NULL,
  `card1_button_link` varchar(191) DEFAULT NULL,
  `card2_img` varchar(191) DEFAULT NULL,
  `card2_button_text` varchar(191) DEFAULT NULL,
  `card2_button_link` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `explores`
--

INSERT INTO `explores` (`id`, `card1_img`, `card1_button_text`, `card1_button_link`, `card2_img`, `card2_button_text`, `card2_button_link`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/ioGrMA8ZrzDmD063lz3M6o091VztLIyRooZuTgZj.jpg', 'explore more', '/explores', 'storage/img/sfdiFBIy3fBYQnrQdvnu0qe5zydiuvSHYKlGSvfR.jpg', 'explore us', '/explore us', NULL, '2023-03-06 20:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_list_answers`
--

CREATE TABLE `faq_list_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_list_answer` varchar(191) DEFAULT NULL,
  `faq_list_title_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_list_answers`
--

INSERT INTO `faq_list_answers` (`id`, `faq_list_answer`, `faq_list_title_id`, `created_at`, `updated_at`) VALUES
(1, 'Set up billing frequencies and cycles', 1, '2023-02-27 01:39:09', '2023-02-27 01:39:09'),
(2, 'Automate proration', 1, '2023-02-27 01:40:10', '2023-02-27 01:40:10'),
(3, 'Bill across the globe and stay tax compliant', 1, '2023-02-27 01:40:22', '2023-02-27 01:40:22'),
(4, 'Securely store customer credit card information test 2', 1, '2023-02-27 01:40:35', '2023-02-27 04:30:48'),
(5, 'Bill across the globe and stay tax compliant test 5', 6, '2023-02-27 01:40:50', '2023-02-27 04:21:16'),
(6, 'test 2', 5, '2023-02-27 01:41:21', '2023-02-27 01:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `faq_list_titles`
--

CREATE TABLE `faq_list_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_list_title` varchar(191) DEFAULT NULL,
  `faq_list_text` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_list_titles`
--

INSERT INTO `faq_list_titles` (`id`, `faq_list_title`, `faq_list_text`, `created_at`, `updated_at`) VALUES
(9, 'test 2', '<p><strong>TestTestTestTestTestTestTestTestTestTestT</strong>estTest 2</p>', '2023-03-06 22:05:56', '2023-03-06 22:09:26'),
(11, 'Why choose us for WordPress test?', '<p>testtesttesttesttesttesttesttesttesttesttesttestt</p>', '2023-03-07 04:37:05', '2023-03-07 04:37:59'),
(12, 'Why is it essential to have a website test?', '<p>testtesttesttesttesttesttesttesttesttesttesttesttestesttesttesttesttesttesttesttesttesttesttesttest</p>', '2023-03-07 04:37:18', '2023-03-07 04:38:03'),
(13, 'Why should I get a domain name?', '<p>testtesttesttesttesttesttesttesttesttesttesttestte</p><p>sttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p><p>testtesttesttesttesttesttesttesttesttesttesttestte</p><p>sttesttesttesttesttesttesttesttesttesttesttestte</p><p>sttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttes</p><p>ttesttesttesttesttesttesttesttesttesttesttesttesttest</p><p>testtesttesttesttesttesttesttesttesttesttestte</p><p>sttettesttesttesttesttesttesttesttesttest</p>', '2023-03-07 04:37:23', '2023-03-07 04:39:27'),
(14, 'Why should I get a domain name?', '<p>testtesttesttesttesttesttesttesttesttesttestte</p><p>sttesttesttesttesttesttesttesttesttesttesttestte\'st</p><p>testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestte\'</p><p>sttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p><p>testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestt</p><p>esttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestte</p><p>sttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p><p>testtesttesttesttesttest</p>', '2023-03-07 04:37:28', '2023-03-07 04:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `faq_titles`
--

CREATE TABLE `faq_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_title` varchar(191) DEFAULT NULL,
  `faq_sub_title` varchar(191) DEFAULT NULL,
  `faq_bg_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_titles`
--

INSERT INTO `faq_titles` (`id`, `faq_title`, `faq_sub_title`, `faq_bg_img`, `created_at`, `updated_at`) VALUES
(1, 'Frequently Asked Question', 'Read our common faq', 'storage/img/l9MYdd2l9Z1WIyFC8YzuSLCyiChC6uITbIAgPqvU.jpg', NULL, '2023-02-27 00:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_title` varchar(191) NOT NULL,
  `feature_text` longtext NOT NULL,
  `feature_icon` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_title`, `feature_text`, `feature_icon`, `created_at`, `updated_at`) VALUES
(1, 'Reliable Connection', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'fa-solid fa fa-wifi', '2022-09-22 02:47:08', '2023-03-06 05:10:53'),
(2, 'Affordable price\n', 'Telewire Communications provides complete security solutions for both home and office.', 'fa-solid fa fa-wifi', '2022-09-22 02:50:11', '2022-11-20 02:40:51'),
(4, 'Fastest speed', 'Get the latest Network Accessory items from Telewire at a reasonable price.', 'fa-solid fa fa-wifi', '2022-11-14 05:23:11', '2022-11-20 02:40:36'),
(6, '24/7 live support', 'It is a long established fact that a reader will be distracted by the readable.', 'fa-solid fa fa-wifi', '2023-02-20 04:50:48', '2023-02-20 04:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `footer_settings`
--

CREATE TABLE `footer_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_bg_image` varchar(191) NOT NULL,
  `footer_logo` varchar(191) DEFAULT NULL,
  `footer_heading` varchar(191) DEFAULT NULL,
  `footer_text` longtext DEFAULT NULL,
  `footer_facebook_url` varchar(191) DEFAULT NULL,
  `footer_twitter_url` varchar(191) DEFAULT NULL,
  `footer_linkedin_url` varchar(191) DEFAULT NULL,
  `footer_instagram_url` varchar(191) DEFAULT NULL,
  `footer_youtube_url` varchar(191) DEFAULT NULL,
  `footer_link_one` varchar(191) DEFAULT NULL,
  `footer_link_one_url` varchar(191) DEFAULT NULL,
  `footer_link_two` varchar(191) DEFAULT NULL,
  `footer_link_two_url` varchar(191) DEFAULT NULL,
  `footer_link_three` varchar(191) DEFAULT NULL,
  `footer_link_three_url` varchar(191) DEFAULT NULL,
  `footer_link_four` varchar(191) DEFAULT NULL,
  `footer_link_four_url` varchar(191) DEFAULT NULL,
  `footer_link_five` varchar(191) DEFAULT NULL,
  `footer_link_five_url` varchar(191) DEFAULT NULL,
  `footer_address` varchar(191) DEFAULT NULL,
  `footer_phone` varchar(191) DEFAULT NULL,
  `footer_email` varchar(191) DEFAULT NULL,
  `support_title` varchar(191) DEFAULT NULL,
  `support_number` varchar(191) DEFAULT NULL,
  `footer_large_image` varchar(191) DEFAULT NULL,
  `footer_copyright` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_settings`
--

INSERT INTO `footer_settings` (`id`, `footer_bg_image`, `footer_logo`, `footer_heading`, `footer_text`, `footer_facebook_url`, `footer_twitter_url`, `footer_linkedin_url`, `footer_instagram_url`, `footer_youtube_url`, `footer_link_one`, `footer_link_one_url`, `footer_link_two`, `footer_link_two_url`, `footer_link_three`, `footer_link_three_url`, `footer_link_four`, `footer_link_four_url`, `footer_link_five`, `footer_link_five_url`, `footer_address`, `footer_phone`, `footer_email`, `support_title`, `support_number`, `footer_large_image`, `footer_copyright`, `created_at`, `updated_at`) VALUES
(3, 'storage/img/footer_bg_image.svg', 'storage/img/footer_logo.svg', 'Welcome to X speed ISP', 'We are one of the best ISPs in Bangladesh providing high-speed and trusted internet connection to our valued customers.', 'https://www.facebook.com/Xspeed', 'https://www.skype.com/Xspeed', 'https://www.whatsapp.com/Xspeed', 'https://www.instagram.com/Xspeed', NULL, 'Test', 'http://127.0.0.1:8000/page-4', 'Privacy Policy', 'http://127.0.0.1:8000/page-3', 'Terms & Conditions', 'http://127.0.0.1:8000/page-1', 'Return & Refund Policy', 'http://127.0.0.1:8000/page-2', 'Contact', 'http://127.0.0.1:8000/contactus', 'Flat No: B4, House No: 71 Road No: 27, Dhaka 1212', '8801700000000', 'support@xspeed.net', NULL, NULL, 'storage/img/footer_large_image.svg', '<p>&nbsp;Copyright © 2023 &nbsp;<a href=\"https://xspeed.net/\">X Speed</a>&nbsp;</p>', NULL, '2023-03-09 00:34:10'),
(4, '', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fun_facts`
--

CREATE TABLE `fun_facts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `funfact_thumbnail` varchar(191) DEFAULT NULL,
  `funfact_countdown` varchar(191) DEFAULT NULL,
  `funfact_countdown_after` varchar(191) DEFAULT NULL,
  `funfact_desc` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fun_facts`
--

INSERT INTO `fun_facts` (`id`, `funfact_thumbnail`, `funfact_countdown`, `funfact_countdown_after`, `funfact_desc`, `created_at`, `updated_at`) VALUES
(3, 'storage/img/p3us09Y7cHlmcGbN3UV0RvYYki29Nt95ra7tyZcO.png', '10', '+', 'Active Employee', '2022-09-22 01:07:33', '2022-11-14 01:06:49'),
(4, 'storage/img/I5oInNDDa8ZFpqMDqjLdlPh0pKewVCo1Z5z9JmCg.png', '5', '+', '5 Coverage Areas', '2022-09-22 01:08:12', '2022-10-31 02:18:44'),
(5, 'storage/img/RVcuGKh6STOQsHyRjLylKQgf59WP9tgO2Tw1slJM.png', '24', '/7', 'Customer Support', '2022-09-22 01:09:12', '2022-10-31 02:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `google_maps`
--

CREATE TABLE `google_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maps_iframe_code` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google_maps`
--

INSERT INTO `google_maps` (`id`, `maps_iframe_code`, `created_at`, `updated_at`) VALUES
(2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.010422399462!2d90.41269471536312!3d23.78264319345989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b1bc2acc3e3f%3A0xc1754878d221b24e!2sGetUp%20Limited!5e0!3m2!1sen!2sbd!4v1678182800366!5m2!1sen!2sbd', NULL, '2023-03-07 03:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `header_settings`
--

CREATE TABLE `header_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(191) DEFAULT NULL,
  `header_phone` varchar(191) DEFAULT NULL,
  `header_email` varchar(191) DEFAULT NULL,
  `header_main_button` varchar(255) DEFAULT NULL,
  `header_main_button_url` varchar(255) DEFAULT NULL,
  `header_button` varchar(191) DEFAULT NULL,
  `header_button_url` varchar(191) DEFAULT NULL,
  `header_button_two` varchar(191) DEFAULT NULL,
  `header_button_two_url` varchar(191) DEFAULT NULL,
  `header_button_three` varchar(191) DEFAULT NULL,
  `header_button_three_url` varchar(191) DEFAULT NULL,
  `header_facebook_url` varchar(191) DEFAULT NULL,
  `header_twitter_url` varchar(191) DEFAULT NULL,
  `header_linkedin_url` varchar(191) DEFAULT NULL,
  `header_instagram_url` varchar(191) DEFAULT NULL,
  `header_youtube_url` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_settings`
--

INSERT INTO `header_settings` (`id`, `header_logo`, `header_phone`, `header_email`, `header_main_button`, `header_main_button_url`, `header_button`, `header_button_url`, `header_button_two`, `header_button_two_url`, `header_button_three`, `header_button_three_url`, `header_facebook_url`, `header_twitter_url`, `header_linkedin_url`, `header_instagram_url`, `header_youtube_url`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/header_logo.png', '01700000001', 'info@xspeed.net', 'Self care', '#', 'Mobile app', 'https://play.google.com/store/apps', 'BTRC Tarrif', '#', 'PayBill', 'http://127.0.0.1:8000/paybill', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-14 00:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sliders`
--

CREATE TABLE `hero_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title` varchar(191) DEFAULT NULL,
  `hero_sub_title` varchar(191) DEFAULT NULL,
  `hero_text` longtext DEFAULT NULL,
  `hero_main_button` varchar(191) DEFAULT NULL,
  `hero_main_button_link` varchar(191) DEFAULT NULL,
  `hero_main_button_two` varchar(191) DEFAULT NULL,
  `hero_main_button_two_link` varchar(191) DEFAULT NULL,
  `hero_link_button` varchar(191) DEFAULT NULL,
  `hero_link_button_url` varchar(191) DEFAULT NULL,
  `hero_link_button_thumbnail` varchar(191) DEFAULT NULL,
  `hero_link_button_two` varchar(191) DEFAULT NULL,
  `hero_link_button_two_url` varchar(191) DEFAULT NULL,
  `hero_link_button_two_thumbnail` varchar(191) DEFAULT NULL,
  `hero_link_button_three` varchar(191) DEFAULT NULL,
  `hero_link_button_three_url` varchar(191) DEFAULT NULL,
  `hero_link_button_three_thumbnail` varchar(191) DEFAULT NULL,
  `hero_link_button_four` varchar(191) DEFAULT NULL,
  `hero_link_button_four_url` varchar(191) DEFAULT NULL,
  `hero_link_button_four_thumbnail` varchar(191) DEFAULT NULL,
  `hero_thumbnail` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sliders`
--

INSERT INTO `hero_sliders` (`id`, `hero_title`, `hero_sub_title`, `hero_text`, `hero_main_button`, `hero_main_button_link`, `hero_main_button_two`, `hero_main_button_two_link`, `hero_link_button`, `hero_link_button_url`, `hero_link_button_thumbnail`, `hero_link_button_two`, `hero_link_button_two_url`, `hero_link_button_two_thumbnail`, `hero_link_button_three`, `hero_link_button_three_url`, `hero_link_button_three_thumbnail`, `hero_link_button_four`, `hero_link_button_four_url`, `hero_link_button_four_thumbnail`, `hero_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Thundered Internet Speeds', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Pricing', '/pricing', 'Call for line', 'tel:+8801829483843', 'Facebook', 'https://www.facebook.com/Telewire-Communications-100687142776508/', 'storage/img/vqsmLh5gIE6ORXhQcNuAyO24yfgqB0A4vD4CnwsA.png', 'What\'s App', 'https://www.whatsapp.com', 'storage/img/t6CCnUfgRgbZN7QOdY46lLWIHxR9ztCof1oSQN0p.png', 'Instagram', 'https://www.instagram.com', 'storage/img/9F6HsT8zz7o8tQ373lEjJMQxrU2PUkuwZ8cUG43X.png', 'Twitter', 'https://www.twitter.com', 'storage/img/TZuKNaZHMlUm7EbbCCiBsyQvW3cWLmAjhOjxHZvu.png', 'storage/img/hero-img-1.png', '2022-09-22 02:41:02', '2023-03-06 03:58:46'),
(2, '5G speed when browsing and downloading', ' X-peed internet service provider- extreme speed', '   Best affordable internet service In Dhaka,Bangladesh.\n                      Lorem Ipsum is simply dummy text of the printing and\n                      typesetting industry. Lorem Ipsum has been the\n                      industry\'s standard dummy text ever since the way.', 'Server', '/mediaserver', 'Call for line', 'tel:+8801829483843', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'storage/img/hero-img-2.png', '2022-09-22 02:45:47', '2022-11-14 12:11:43'),
(11, 'X-peed internet service provider- extreme speed', 'Speed is yours', 'Best affordable internet service In Dhaka,Bangladesh.\r\n                      Lorem Ipsum is simply dummy text of the printing and\r\n                      typesetting industry. Lorem Ipsum has been the\r\n                      industry\'s standard dummy text ever since the way.', 'Payment', '/paybill', 'Call for line', 'tel:+8801829483843', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'storage/img/ows1pXny5dZPNt4YLGNAflmvQiwCB36RvzjrgEEI.png', '2023-02-20 01:05:12', '2023-02-20 01:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `media_categories`
--

CREATE TABLE `media_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medialist_category_name` varchar(191) NOT NULL,
  `medialist_category_slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_categories`
--

INSERT INTO `media_categories` (`id`, `medialist_category_name`, `medialist_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'FTP Server', '#', '2022-09-22 04:30:34', '2022-09-22 04:30:34'),
(2, 'Live TV', '#', '2022-09-22 04:30:40', '2022-09-22 04:30:40'),
(3, 'Media Server', '#', '2022-09-22 04:31:43', '2022-09-22 04:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `media_lists`
--

CREATE TABLE `media_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medialist_thumbnail` varchar(191) NOT NULL,
  `medialist_title` varchar(191) NOT NULL,
  `medialist_link` varchar(191) NOT NULL,
  `media_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_lists`
--

INSERT INTO `media_lists` (`id`, `medialist_thumbnail`, `medialist_title`, `medialist_link`, `media_category_id`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/7skZQKBhDOV1vKBXLnOv7cwPvHyAPeG33jdbDE2D.jpg', 'FTP Server', 'https://sites.google.com/view/bdixftpserverlist/live-tv-servers?pli=1', 1, '2022-09-22 05:26:44', '2022-11-23 13:48:06'),
(2, 'storage/img/l9dnKj64E5hu2re1BInAoKI1pPw4GKsmR2jcmjtI.jpg', 'Live TV', 'https://sites.google.com/view/bdixftpserverlist/live-tv-servers', 2, '2022-09-22 05:27:20', '2022-11-23 13:48:36'),
(3, 'storage/img/uN7wqv5SRBVkepoKFx4CTIUMwEzMUOrUTHhfdYor.jpg', 'Media Server 3', 'https://sites.google.com/view/bdixftpserverlist/bd-isp-media-ftp-live-tv-servers-list-link', 3, '2022-09-22 05:27:52', '2022-11-23 13:50:03'),
(5, 'storage/img/uN7wqv5SRBVkepoKFx4CTIUMwEzMUOrUTHhfdYor.jpg', 'Sam FTP', 'http://172.16.50.', 1, '2022-12-14 23:21:33', '2022-12-14 23:21:46'),
(6, 'storage/img/uN7wqv5SRBVkepoKFx4CTIUMwEzMUOrUTHhfdYor.jpg', 'a', 'https://sites.google.com/view/bdixftpserverlist/bd-isp-media-ftp-live-tv-servers-list-link', 3, '2022-09-22 05:27:52', '2022-11-23 13:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `media_titles`
--

CREATE TABLE `media_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_section_label` varchar(191) DEFAULT NULL,
  `media_section_first_title` varchar(191) DEFAULT NULL,
  `media_section_title_middle` varchar(191) DEFAULT NULL,
  `media_section_title_last` varchar(191) DEFAULT NULL,
  `media_section_title_desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_titles`
--

INSERT INTO `media_titles` (`id`, `media_section_label`, `media_section_first_title`, `media_section_title_middle`, `media_section_title_last`, `media_section_title_desc`, `created_at`, `updated_at`) VALUES
(1, 'Enjoy Media Server', 'Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus er', 'Enjoy with Thousands of', 'Media Servers', 'Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit.', NULL, '2022-11-23 13:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_first_name` varchar(191) DEFAULT NULL,
  `customer_last_name` varchar(191) DEFAULT NULL,
  `customer_number` varchar(191) DEFAULT NULL,
  `customer_email` varchar(191) DEFAULT NULL,
  `customer_comments` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `customer_first_name`, `customer_last_name`, `customer_number`, `customer_email`, `customer_comments`, `created_at`, `updated_at`) VALUES
(1, 'Omar Sharif', 'Rajme', '01850017691', 'omar.sharif.rajme@gmail.com', 'this is test', '2022-12-10 16:10:55', '2022-12-10 16:10:55'),
(2, 'ReM0wigG', 'FP2iiCoS', 'Ov4Hxqdp', 'kDE7_generic_76baf412_telewirebd.net@example.com', NULL, '2023-01-28 15:22:37', '2023-01-28 15:22:37'),
(3, 'FNYMPob3', 'xcUiNQ67', 'mMFj9F6d', 'BRkv_generic_76baf412_telewirebd.net@data-backup-store.com', NULL, '2023-02-12 09:43:43', '2023-02-12 09:43:43'),
(4, 'test first name', 'test last name', '01611111111', 'almamun@gmail.com', 'This is a test', '2023-02-28 05:55:42', '2023-02-28 05:55:42'),
(5, 'Omar Sharif Rajme', 'Rajme', '01850017691', 'rajme@gmail.com', 'this is test', '2023-03-06 00:06:29', '2023-03-06 00:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(57, '2022_07_04_064043_create_settings_table', 1),
(58, '2022_09_05_200310_create_hero_sliders_table', 1),
(59, '2022_09_06_095556_create_header_settings_table', 1),
(60, '2022_09_07_114020_create_footer_settings_table', 1),
(61, '2022_09_12_135018_create_features_table', 1),
(62, '2022_09_12_144436_create_fun_facts_table', 1),
(63, '2022_09_14_085645_create_about_settings_table', 1),
(64, '2022_09_15_050501_create_pricings_table', 1),
(65, '2022_09_15_050518_create_contact_boxes_table', 1),
(66, '2022_09_15_050546_create_google_maps_table', 1),
(67, '2022_09_18_052222_create_products_table', 1),
(68, '2022_09_18_074829_create_product_titles_table', 1),
(69, '2022_09_18_082148_create_pay_bills_table', 1),
(70, '2022_09_18_113211_create_media_lists_table', 1),
(71, '2022_09_18_124253_create_media_categories_table', 1),
(72, '2022_09_21_195906_create_pricing_categories_table', 1),
(73, '2022_09_21_203431_create_seo_optimizeds_table', 1),
(74, '2022_09_22_034851_create_site_pages_table', 1),
(75, '2022_09_23_063622_create_pricing_titles_table', 1),
(76, '2022_09_23_063713_create_media_titles_table', 1),
(77, '2022_09_23_063738_create_contact_titles_table', 1),
(78, '2022_09_23_085047_update_error_message_in_log_for_user_table', 1),
(79, '2023_02_22_055858_create_clients_table', 2),
(80, '2023_02_22_095027_create_what_we_dos_table', 3),
(81, '2023_02_22_120050_create_explores_table', 4),
(82, '2023_02_26_074300_create_questions_table', 5),
(83, '2023_02_26_094321_create_testimonial_titles_table', 6),
(84, '2023_02_26_101445_create_testimonial_lists_table', 7),
(85, '2023_02_27_044241_create_faq_titles_table', 8),
(86, '2023_02_27_060815_create_faq_list_titles_table', 9),
(87, '2023_02_27_072909_create_faq_list_answers_table', 10),
(88, '2023_03_01_041646_create_coverage_titles_table', 11),
(89, '2023_03_01_044538_create_coverage_areas_table', 12),
(90, '2023_03_02_034906_create_pay_bill_options_table', 13),
(91, '2023_03_02_043924_create_pay_bill_option_steps_table', 14),
(92, '2023_03_02_091439_create_pay_bill_banks_table', 15),
(93, '2023_03_05_033724_create_blog_titles_table', 16),
(94, '2023_03_05_040619_create_blog_categories_table', 17),
(95, '2023_03_05_050707_create_blogs_table', 18),
(96, '2023_03_13_075435_create_themes_table', 19),
(97, '2023_03_14_041814_create_scripts_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `order_packages`
--

CREATE TABLE `order_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(191) DEFAULT NULL,
  `customer_first_name` varchar(191) DEFAULT NULL,
  `customer_last_name` varchar(191) DEFAULT NULL,
  `customer_number` varchar(191) DEFAULT NULL,
  `customer_email` varchar(191) DEFAULT NULL,
  `customer_address` varchar(191) DEFAULT NULL,
  `customer_district` varchar(191) DEFAULT NULL,
  `customer_upazilla` varchar(191) DEFAULT NULL,
  `customer_comments` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_packages`
--

INSERT INTO `order_packages` (`id`, `package_name`, `customer_first_name`, `customer_last_name`, `customer_number`, `customer_email`, `customer_address`, `customer_district`, `customer_upazilla`, `customer_comments`, `created_at`, `updated_at`) VALUES
(1, 'Junior', 'Omar Sharif', 'Rajme', '01850017691', 'omar.sharif.rajme@gmail.com', 'B-1, South Banasree Project, Goran, Khilgaon, Dhaka-1219', 'Dhaka', 'Thakurgaon', 'This is test description', '2022-12-10 15:10:37', '2022-12-10 15:10:37'),
(2, 'Learner', 'Omar Sharif', 'Rajme', '01850017691', 'omar.sharif.rajme@gmail.com', 'B-1, South Banasree Project, Goran, Khilgaon, Dhaka-1219', 'Dhaka', 'Thakurgaon', 'faga', '2022-12-10 15:32:51', '2022-12-10 15:32:51'),
(3, 'Minor', 'NataliaOl', 'NataliaOl', '+420 2861919609', 'nataliaOl@crosenoutinabsi.tk', 'http://poiginmuna.tk/item-85558/', 'dhaka', 'thakurgaon', 'Hello!\r\nРerhapѕ mу mеѕsаgе iѕ tоo spеcific.\r\nВut my оlder sister fоund a wоnderful mаn here and thеy hаvе а grеat rеlatіonѕhiр, but what abоut mе?\r\nΙ аm 22 yеаrs оld, Νаtaliа, frоm thе Сzech Reрublic, know Englіsh lаnguаgе аlѕо\r\nΑnd... bеttеr tо ѕау it іmmediаtelу. Ι аm biѕехuаl. I аm not ϳealous оf anothеr wоman... esрeсiallу іf wе mаkе love togеthеr.\r\nΑh yeѕ, Ι cook vеry taѕtуǃ аnd Ι lоvе not оnlу cook ;))\r\nΙm reаl gіrl аnd lооkіng fоr serіous аnd hot rеlationѕhіp...\r\nАnywaу, уоu cаn fіnd my рrоfіle hеre: http://poiginmuna.tk/item-85558/', '2022-12-19 18:15:53', '2022-12-19 18:15:53'),
(4, 'Junior', 'babul', 'Haque', '01719164769', 'babul@telewirebd.net', 'Ranisankail vandara', 'Thakurgaon', 'Ranisankail', '500tk package', '2022-12-21 13:37:03', '2022-12-21 13:37:03'),
(5, 'Confident', 'Test', 'Test', '0487346342', 't@g.com', 'Test', 'Thakurgaon', 'Ranisankail', 't', '2023-01-02 23:45:13', '2023-01-02 23:45:13'),
(6, 'Supreme', 'Anglea', 'Dyring', '0486 85 32 06', 'dyring.anglea@hotmail.com', 'Serenade Opus 288', 'Thakurgaon', 'Haripur', 'Have you tried this secret Artificial intelligence bot that makes it super fast & super easy to boost revenue for your website telewirebd.net? This hidden Artificial intelligence bot loads hundreds of thousands of ideal customers, FOR YOU, in email liste on autopilot every day....\r\n \r\nWe Explain Everything Here : 50kemailsperday.com\r\n \r\nOur business stopped spending so much time & money on paid advertising... We just let the Artificial intelligence software generate sales for us. Just imagine for a second, never having to run a single paid ad, ever again, for the rest of your life. That’s what this Artificial intelligence assistant will allow you to do. \r\n \r\nGo Here To Find Out More: 50kemailsperday.com\r\n \r\nKind regards\r\n \r\nP.S: The inventors of this Artificial intelligence software consulted with the world’s leading traffic and Direct Response Marketing experts to teach the bot how to find potential leads, FOR YOU.\r\nYou are seriously missing out right now by not using it…', '2023-01-05 06:23:30', '2023-01-05 06:23:30'),
(7, 'Minor', 'Marialymn', 'Marialymn', '+40 2902002135', 'marialymn@denpelatucarenn.tk', 'http://terpsubtdumbneby.gq/topic-52753/', 'Thakurgaon', 'Pirganj', 'Hеllo!\r\nΙ аpologіzе fоr thе overly ѕрecifiс meѕѕage.\r\nМy gіrlfrіеnd and Ι love eаch оthеr. And wе arе аll grеаt.\r\nΒut... wе neеd а man.\r\nWе аre 24 уеars оld, from Rоmаniа, we аlso knоw еnglіsh.\r\nԜe never gеt borеd! And not оnly іn talk...\r\nMy name iѕ Маriа, mу prоfіlе іѕ hеrе: http://terpsubtdumbneby.gq/topic-52753/', '2023-01-15 06:57:21', '2023-01-15 06:57:21'),
(8, 'Supreme', 'Ernest', 'Glassey', '09563 83 56 43', 'ernest.glassey@msn.com', 'Borstelmannsweg 16', 'Thakurgaon', 'Thakurgaon Sadar', '*INFO SERVICE EXPIRATION FOR telewirebd.net\r\n\r\nAttention: Accounts Payable / Domain Owner / Telewire Communications \r\n\r\nYour Domain: www.telewirebd.net \r\nExpected Reply before: Jan 18, 2023.\r\n\r\nThis Notice for: www.telewirebd.net will expire on Jan 18, 2023. \r\n\r\n\r\n\r\n*For details and to make a payment for telewirebd.net services by credit card: \r\n  Visit: https://whats-ip.com/?web=telewirebd.net\r\n\r\n\r\n0118202321502209563 83 56 43', '2023-01-18 20:50:30', '2023-01-18 20:50:30'),
(9, 'Minor', 'AlenaVors', 'AlenaVors', '+40 2533491514', 'alenaVors@helen@guimetbioboulirec.tk', 'http://cialatla.gq/itm-88822/', 'Thakurgaon', 'Baliadangi', 'Нellо all, guуѕǃ I knоw, my mеѕѕage mау be toо ѕреcifiс,\r\nΒut my ѕіster fоund niсе mаn hеrе and theу mаrriеd, ѕo hоw аbout mе?ǃ :)\r\nI аm 25 уeаrѕ оld, Αlenа, from Rоmanіa, Ι know Еngliѕh and Gеrman lаnguаgеѕ аlѕo\r\nAnd... Ι hаve spеcіfіс disеase, nаmed nуmphomanіa. Who knоw whаt iѕ thіs, саn undеrstаnd me (better tо ѕаy it іmmediatelу)\r\nAh yes, Ι сoоk vеrу tаstуǃ аnd Ι love nоt only cook ;))\r\nIm real gіrl, not рrоѕtіtute, аnd lооkіng fоr serіоuѕ аnd hоt rеlаtiоnѕhiр...\r\nAnуwау, уou cаn fіnd mу profіlе hеrе: http://cialatla.gq/itm-88822/', '2023-01-21 21:11:57', '2023-01-21 21:11:57'),
(10, 'Confident', 'Mim', 'Telecom', '01917760407', 'mimtelecom407@gmail.com', 'Chadni Road', 'Thakurgaon', 'Ranisankail', 'I need a secure & confidential connection.', '2023-01-28 05:51:58', '2023-01-28 05:51:58'),
(11, 'Minor', 'KH9WWGtt', 'OhMNQH8y', 'LhL20VGn', '5yPY_generic_f3fd848f_telewirebd.net@example.com', 'TrK2EpCJ', '-- Select district--', '-- Select upazilla--', NULL, '2023-01-28 15:22:36', '2023-01-28 15:22:36'),
(12, 'Minor', 'q0fLUAr6', 'pXowEzsY', 'l5jWoIBI', 'MYcy_generic_f3fd848f_telewirebd.net@data-backup-store.com', 'UsoSd83s', '-- Select district--', '-- Select upazilla--', NULL, '2023-02-12 09:43:42', '2023-02-12 09:43:42'),
(13, 'Minor', 'MildredFug', 'MildredFugRN', '89963339155', 'lussi121@outlook.com', 'https://xn--mga-kra.net', 'Thakurgaon', 'Pirganj', 'Telewire Communications \r\n- \r\n \r\n \r\n<a href=\"https://xn--meg-kla.com\" title=\"mega даркнет\">ссылка мега даркнет</a> \r\n<a href=\"https://xn--mga-0ra.com\" title=\"MEGA сайт даркнет | Ссылка на площадку МЕГА\">мега официальный сайт</a> \r\n<a href=\"https://megadmeovbj2ahqw3reuqu1gbg5meixha.xyz\" title=\"мега площадка даркнет\">MEGA сайт даркнет | Ссылка на площадку МЕГА</a> \r\n<a href=\"https://xn--mea-ysa.com\" title=\"зеркала мега\">mega darknet</a> \r\n<a href=\"https://xn--meg-kla.com\" title=\"мега онион\">мега ссылка сайт</a>', '2023-02-14 14:59:36', '2023-02-14 14:59:36'),
(14, 'Minor', 'KelvinHon', 'KelvinHonOY', '85146471863', 'timothysalazar12@gmail.com', 'https://elysios.com.br/wp-content/pages/jetx_103.html', 'Thakurgaon', 'Thakurgaon Sadar', '<a href=\"http://thecatoctinbanner.com/pag/?jetix_jogo_12.html\">cbet jetx</a> \r\n \r\n \r\njetx bet:https://apartmentcareers.com/pag/cbet_jetix_3.html \r\njetx bet:https://pulosdogatos.com.br/articles/jetx_147.html \r\njetix bet:http://pdtgeneve.ch/lib/inc/jeux_jetx_10.html \r\njetx bet:https://rhslilygroup.org/wp-includes_new/inc/?jetx_137.html', '2023-02-14 17:10:12', '2023-02-14 17:10:12'),
(15, 'Minor', 'LigiaVah', 'LigiaVahWT', '87865953478', 'lussi121@outlook.com', 'http://xn--mgmg-u0bc.com', 'Thakurgaon', 'Pirganj', 'Hello guys! Good article Telewire Communications \r\n \r\n \r\nOmg Omg onion - инновационный анонимный рынок, работающий посредством позиций моментальных магазинов, доступных в любом городе РФ и СНГ. Платформа Омг Омг онион  http://xn--mgmg-u0bc.com  с развитой инфраструкторой продажи и отличными селлерами и услугами. Каждому человеку стоит посетить данный сайт и найти для себя, что-нибудь новое и полезное. Удобное пополнение баланса, встроенный обмен, разные способы оплаты, а также анонимность переводов. Самая защищенная площадка. Обеспечивает максимальный уровень защиты и анонимности. Устройте себе феерию удовольствия и прекрасного настроения.\r\n \r\n \r\n<a href=\"http://xn--mg-7bb.com\">площадка omg</a> \r\n<a href=\"http://xn--omom-cxac.com\">omg omg площадка отзывы</a> \r\n<a href=\"http://xn--om-4na.com\">omg купить</a>', '2023-02-14 17:10:15', '2023-02-14 17:10:15'),
(16, 'Minor', 'nugilorti', 'nugilorti', '83346227138', 'i.nna.f.edors@gmail.com', 'http://www.glk.com.np/2019/03/see-question-paper-math-2075-class-10.html', 'Thakurgaon', 'Pirganj', 'dormie arise originate \r\n<a href=\"https://farming-mods.com/load/farming_simulator_2019/mod_russkie_karty/svapa_agro_remastered_final/84-1-0-3134\">https://farming-mods.com/load/farming_simulator_2019/mod_russkie_karty/svapa_agro_remastered_final/84-1-0-3134</a>\r\n<a href=\"https://telegra.ph/Lazernaya-gravirovka-na-lyubom-materiale-v-Sankt-Peterburge-11-05\">https://telegra.ph/Lazernaya-gravirovka-na-lyubom-materiale-v-Sankt-Peterburge-11-05</a>\r\n<a href=\"https://supermoneyforum.frmbb.ru/viewtopic.php?id=22896#p51719\">https://supermoneyforum.frmbb.ru/viewtopic.php?id=22896#p51719</a>\r\n<a href=\"http://dontworrybehappykeeplearning.blogspot.com/2013/09/diy-wooden-sign.html\">http://dontworrybehappykeeplearning.blogspot.com/2013/09/diy-wooden-sign.html</a>\r\n<a href=\"http://trainertfitness.blogspot.com/2014/05/mdfitness-is-more-than-workout.html\">http://trainertfitness.blogspot.com/2014/05/mdfitness-is-more-than-workout.html</a>\r\n<a href=\"http://kyawsoetunaung.blogspot.com/2013/04/ubuntu.html\">http://kyawsoetunaung.blogspot.com/2013/04/ubuntu.html</a>\r\n<a href=\"http://forum.openokdv.ru/member.php?u=2089\">http://forum.openokdv.ru/member.php?u=2089</a>\r\n<a href=\"http://mncraftmods.ru/index.php?subaction=userinfo&user=ydofyhu\">http://mncraftmods.ru/index.php?subaction=userinfo&user=ydofyhu</a>\r\n<a href=\"http://it-klimovsk.ru/index.php?subaction=userinfo&user=ovizary\">http://it-klimovsk.ru/index.php?subaction=userinfo&user=ovizary</a>\r\n<a href=\"http://palvinka.blogspot.com/2019/10/nature-walk-add-on-freebie-dsd-sale-new.html\">http://palvinka.blogspot.com/2019/10/nature-walk-add-on-freebie-dsd-sale-new.html</a>\r\n<a href=\"http://www.noivacomclasse.com/2011/12/casamento-ralf-schumacher-e-cora.html\">http://www.noivacomclasse.com/2011/12/casamento-ralf-schumacher-e-cora.html</a>\r\n<a href=\"http://zhansugirov-aksu.mektebi.kz/meroprijatija-prazdniki/page,1,2,29-bayau.html\">http://zhansugirov-aksu.mektebi.kz/meroprijatija-prazdniki/page,1,2,29-bayau.html</a>\r\n<a href=\"http://speedway-world.pl/forum/member.php?action=profile&uid=325209\">http://speedway-world.pl/forum/member.php?action=profile&uid=325209</a>\r\n<a href=\"http://pqeapp.com/index.php?subaction=userinfo&user=emewewo\">http://pqeapp.com/index.php?subaction=userinfo&user=emewewo</a>\r\n<a href=\"http://hardpapier.blogspot.com/2010/06/reuzenvlammenwerper.html\">http://hardpapier.blogspot.com/2010/06/reuzenvlammenwerper.html</a>', '2023-02-14 19:55:43', '2023-02-14 19:55:43'),
(17, 'Minor', 'Liskatnix', 'LiskatnixQP', '86741227584', 'lonik112@outlook.com', 'https://hydra-original.shop', 'Thakurgaon', 'Baliadangi', 'Hi. Good article Telewire Communications: \r\n \r\nЛучший сайт для покупки товаров разной направленности - Hydra (hydraruzxpnew4af). Это крупнейшая в России и СНГ торговая анонимная площадка, которая позволяет быстро и безопасно продавать и покупать товары любого типа. Для каждого пользователя представлена масса возможностей. К тому же, у каждого продавца есть рейтинг, отзывы, и другая информация, которая поможет вам подобрать подходящее предложение. https://xn--hdraruxzpnew4af-n35h.com — это лучший, и наверное, единственный сайт, на котором можно купить любые вещи, независимо от вашего желания и требований. При этом Администрация проекта гарантирует анонимность и безопасность при совершении сделок. И контролирует каждую покупку, чтобы пользователей не обманывали. Именно поэтому площадка настолько востребована и популярна. hydra как зайти\r\n \r\n \r\n \r\n \r\n<a href=\"https://xn--hydraruzxpnw4af-m8b.net\">гидра ссылка\r\n</a>', '2023-02-14 21:30:53', '2023-02-14 21:30:53'),
(18, NULL, 'Al', 'Mamun', '01611111111', 'almamun@gmail.com', 'gulshan, dhaka', NULL, NULL, NULL, '2023-02-26 00:07:31', '2023-02-26 00:07:31'),
(19, NULL, 'Al', 'Mamun', '01611111111', 'almamun@gmail.com', 'gulshan, dhaka', NULL, NULL, NULL, '2023-02-26 00:09:11', '2023-02-26 00:09:11'),
(20, 'Learner', 'Al', 'Mamun', '01611111111', 'almamun@gmail.com', 'gulshan, dhaka', NULL, NULL, NULL, '2023-02-26 00:11:55', '2023-02-26 00:11:55'),
(21, 'Dominant', 'test first name', 'test lastname', '0171111111', 'test@gmail.com', 'test, dhaka', NULL, NULL, NULL, '2023-02-26 21:52:54', '2023-02-26 21:52:54'),
(22, 'Confident', 'test 2', 'test 2', '01611111111', 'shamimalmamun.aiub@gmail.com', 'gulshan, dhaka', NULL, NULL, 'Test message', '2023-02-26 22:05:56', '2023-02-26 22:05:56'),
(23, 'Primary', 'test', 'test 3', '0171111111', 'test@gmail.com', 'gulshan, dhaka', NULL, NULL, 'Test message', '2023-02-26 22:23:27', '2023-02-26 22:23:27'),
(24, 'Junior', 'Meheraj Hossain', 'Sagar', '01829367024', 'mhossainsagar10@gmail.com', 'Uttar-Badda, Dhaka-1200', NULL, NULL, 'hello i\'m meheraj hossain sagar', '2023-03-14 01:48:53', '2023-03-14 01:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) DEFAULT NULL,
  `customer_first_name` varchar(191) DEFAULT NULL,
  `customer_last_name` varchar(191) DEFAULT NULL,
  `customer_number` varchar(191) DEFAULT NULL,
  `customer_email` varchar(191) DEFAULT NULL,
  `customer_address` varchar(191) DEFAULT NULL,
  `customer_district` varchar(191) DEFAULT NULL,
  `customer_upazilla` varchar(191) DEFAULT NULL,
  `customer_comments` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `product_name`, `customer_first_name`, `customer_last_name`, `customer_number`, `customer_email`, `customer_address`, `customer_district`, `customer_upazilla`, `customer_comments`, `created_at`, `updated_at`) VALUES
(1, 'Black Router', 'Omar Sharif', 'Rajme', '01850017691', 'omar.sharif.rajme@gmail.com', 'B-1, South Banasree Project, Goran, Khilgaon, Dhaka-1219', NULL, NULL, 'this is test', '2022-12-10 15:48:07', '2022-12-10 15:48:07'),
(2, 'ONU', 'Omar Sharif', 'Rajme', '01850017691', 'omar.sharif.rajme@gmail.com', 'B-1, South Banasree Project, Goran, Khilgaon, Dhaka-1219', NULL, NULL, 'this is test', '2022-12-10 15:48:38', '2022-12-10 15:48:38'),
(3, 'Black Router', 'Mamun', 'hasan', '749879797', 'mamun@gmail.com', 'gulsan', 'dhaka', 'thakurgaon', 'this is test', '2022-12-11 01:05:54', '2022-12-11 01:05:54'),
(4, 'ONU', 'Al', 'Mamun', '01611111111', 'almamun@gmail.com', NULL, NULL, NULL, 'Test message', '2023-02-26 22:22:14', '2023-02-26 22:22:14'),
(5, 'Remote Router', 'test', 'test 3', '01611111111', 'almamun@gmail.com', NULL, NULL, NULL, 'Test message', '2023-02-26 22:24:11', '2023-02-26 22:24:11'),
(6, 'Black Router', 'sagar', 'hossain', '01611111111', 'almamun@gmail.com', NULL, NULL, NULL, 'Test', '2023-03-14 01:51:38', '2023-03-14 01:51:38'),
(7, 'ONU', 'test', 'test', '0111111111111', 'test@gmail.com', 'test, dhaka', NULL, NULL, '123', '2023-03-14 02:16:46', '2023-03-14 02:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shakilunique@outlook.com', '$2y$10$3BP/XOOfkz3wlMSkLEv1lObdvlZn7dCSuVFdwL5FDJ.8kkoB96JOW', '2022-10-31 02:08:42'),
('shakilunique@outlook.com', '$2y$10$3BP/XOOfkz3wlMSkLEv1lObdvlZn7dCSuVFdwL5FDJ.8kkoB96JOW', '2022-10-31 02:08:42'),
('rajme@getup.com.bd', '$2y$10$xcAseQuFnBpWIIY.bRidb.onCBgbCuKWBqhCuJamkp1Bc7yY7yIwe', '2023-03-08 23:21:21'),
('mamun@getup.com.bd', '$2y$10$jsvlVmst9qpI8TCBNszzJeWhAl0sT1J0.qBg352cjV5mvYu6PojfS', '2023-03-12 00:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `pay_bills`
--

CREATE TABLE `pay_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paybill_bg_image` varchar(191) NOT NULL,
  `paybill_section_label` varchar(191) DEFAULT NULL,
  `paybill_section_first_title` varchar(191) DEFAULT NULL,
  `paybill_section_title_middle` varchar(191) DEFAULT NULL,
  `paybill_section_title_last` varchar(191) DEFAULT NULL,
  `paybill_section_title_desc` longtext DEFAULT NULL,
  `paybill_tab_name_one` varchar(191) DEFAULT NULL,
  `paybill_image_one` varchar(191) DEFAULT NULL,
  `paybill_button_one` varchar(191) DEFAULT NULL,
  `paybill_button_url_one` varchar(191) DEFAULT NULL,
  `paybill_tab_name_two` varchar(191) DEFAULT NULL,
  `paybill_image_two` varchar(191) DEFAULT NULL,
  `paybill_button_two` varchar(191) DEFAULT NULL,
  `paybill_button_url_two` varchar(191) DEFAULT NULL,
  `paybill_tab_name_three` varchar(191) DEFAULT NULL,
  `paybill_image_three` varchar(191) DEFAULT NULL,
  `paybill_button_three` varchar(191) DEFAULT NULL,
  `paybill_button_url_three` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_bills`
--

INSERT INTO `pay_bills` (`id`, `paybill_bg_image`, `paybill_section_label`, `paybill_section_first_title`, `paybill_section_title_middle`, `paybill_section_title_last`, `paybill_section_title_desc`, `paybill_tab_name_one`, `paybill_image_one`, `paybill_button_one`, `paybill_button_url_one`, `paybill_tab_name_two`, `paybill_image_two`, `paybill_button_two`, `paybill_button_url_two`, `paybill_tab_name_three`, `paybill_image_three`, `paybill_button_three`, `paybill_button_url_three`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/paybill_bg_image.jpg', 'Pay Bill', NULL, 'Now You can Pay Directly from your Digital Wallet Including Bkash Rocket & Nagad.', NULL, 'Test Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit.', 'Shurjo Pay', 'storage/img/photo_2023-01-04_14-14-56.jpg', 'Pay Now', 'https://pay.telewirebd.net/billpayment/index?', 'Bkash', 'storage/img/paybill_image_two.png', 'Pay Now', 'https://pay.telewirebd.net/billpayment/index?', 'Nagad', 'storage/img/paybill_image_three.jpeg', 'Pay Now', 'https://pay.telewirebd.net/billpayment/index?', NULL, '2023-03-07 01:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `pay_bill_banks`
--

CREATE TABLE `pay_bill_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `text` varchar(191) DEFAULT NULL,
  `img` varchar(191) DEFAULT NULL,
  `account_name` varchar(191) DEFAULT NULL,
  `account_no` int(100) DEFAULT NULL,
  `routing_no` int(100) DEFAULT NULL,
  `branch` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_bill_banks`
--

INSERT INTO `pay_bill_banks` (`id`, `title`, `text`, `img`, `account_name`, `account_no`, `routing_no`, `branch`, `created_at`, `updated_at`) VALUES
(1, 'One Bank', 'This is a test', 'storage/img/BnRiVuHoCIrUbgax9RyNXeBQ2VVh15bw111V8NUA.jpg', 'Junu Online', 3910200, 7457, 'BANASREE BRANCH', '2023-03-02 04:18:45', '2023-03-02 04:18:45'),
(3, 'test', 'test', 'storage/img/fPQ0EjbkDpZpzhnyFLwow9D9OVgvP6wiRkdHtSla.jpg', 'test', 123456789, 123456789, 'test', '2023-03-02 04:33:34', '2023-03-08 23:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `pay_bill_options`
--

CREATE TABLE `pay_bill_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_bill_options`
--

INSERT INTO `pay_bill_options` (`id`, `option`, `created_at`, `updated_at`) VALUES
(1, 'Bkash test', '2023-03-01 22:17:18', '2023-03-02 02:33:39'),
(2, 'Nagad  Final Test 4', '2023-03-01 22:18:41', '2023-03-02 02:47:50'),
(5, 'Upay', '2023-03-07 05:57:46', '2023-03-07 05:57:46'),
(6, 'Test', '2023-03-08 23:31:21', '2023-03-08 23:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `pay_bill_option_steps`
--

CREATE TABLE `pay_bill_option_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `pay_bill_options_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_bill_option_steps`
--

INSERT INTO `pay_bill_option_steps` (`id`, `img`, `text`, `pay_bill_options_id`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/hero-img-1.png', 'card 1 text 1', 1, NULL, '2023-03-02 02:33:39'),
(4, 'storage/img/BStX48HKyVVzUZ8dSSuHjp5bJtoXhCUH3a2ign6n.jpg', 'Login to your Nagad account with your account\'s PIN number and tap on \"পে বিল\" option.', 2, NULL, NULL),
(5, 'storage/img/hero-img-2.png', 'card 1 text 2', 1, NULL, NULL),
(6, 'storage/img/p3us09Y7cHlmcGbN3UV0RvYYki29Nt95ra7tyZcO.png', 'This is a test.', 2, NULL, NULL),
(7, 'storage/img/ows1pXny5dZPNt4YLGNAflmvQiwCB36RvzjrgEEI.png', 'card 1 text 3 test again', 1, NULL, '2023-03-02 01:55:28'),
(8, 'storage/img/eRSNBAh8xHk2LmMZcdpEanKZ9uCDVGgP1JEdxaBh.jpg', 'bird  final test 4', 2, '2023-03-02 01:20:27', '2023-03-02 02:47:50'),
(9, 'storage/img/HwwUSmHCsFu5eAHkC9B7GSsr74YnewpbtidCLjXL.jpg', 'fish pic test', 2, '2023-03-02 01:21:52', '2023-03-02 02:47:50'),
(10, 'storage/img/J9Yj4jMn3mH13V1CPzQ0klY2wp2sZL2SCAlId2o4.jpg', NULL, 2, '2023-03-07 01:16:47', '2023-03-07 01:16:47'),
(12, 'storage/img/64BtCwm3xETEF42LtCRl0zRspbLB9EZ372aY5ZX6.jpg', 'test', 1, '2023-03-07 02:16:07', '2023-03-07 02:16:07'),
(13, 'storage/img/FwnuLrT13Qw3Z34t56iW469F8sJABzEs2iw2Wz4e.jpg', 'watch updated', 1, '2023-03-07 02:16:43', '2023-03-07 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pricing_title` varchar(191) DEFAULT NULL,
  `pricing_megabytes` varchar(191) DEFAULT NULL,
  `pricing_megabytes_text` varchar(191) DEFAULT NULL,
  `pricing_price_amount` varchar(191) DEFAULT NULL,
  `pricing_price_amount_bottom` varchar(191) DEFAULT NULL,
  `pricing_price_desc` longtext DEFAULT NULL,
  `pricing_price_offer_desc` longtext DEFAULT NULL,
  `pricing_price_button_text` varchar(191) DEFAULT NULL,
  `pricing_price_button_url` varchar(191) DEFAULT NULL,
  `pricing_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `pricing_title`, `pricing_megabytes`, `pricing_megabytes_text`, `pricing_price_amount`, `pricing_price_amount_bottom`, `pricing_price_desc`, `pricing_price_offer_desc`, `pricing_price_button_text`, `pricing_price_button_url`, `pricing_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Minors', '5', NULL, '5000', '<p>Per Month&nbsp;<br>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Carer&nbsp;</li><li>24/7 Customer Carer&nbsp;</li><li>24/7 Customer Carer&nbsp;</li><li>24/7 Customer Carer&nbsp;</li><li>24/7 Customer Carer&nbsp;</li></ul>', '<p>No Offer is available at this moment</p>', 'Choose Package', 'order-package', 4, '2022-09-22 03:47:32', '2023-03-14 01:39:16'),
(3, 'Junior', '7', NULL, '600', '<p>Per Month&nbsp;<br>5% Vat Exlcuding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>No Offer available at this moment</p>', 'Choose Package', '127.0.0.1:8000/order-package', 4, '2022-09-22 04:22:35', '2023-03-07 00:30:00'),
(4, 'Learner', '8', NULL, '700', '<p>Per Month<br>5% Vat Excluding&nbsp;</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>No Offer available at this moment</p>', 'Choose Package', '127.0.0.1:8000/order-package', 4, '2022-09-22 04:23:25', '2023-03-07 04:42:57'),
(5, 'Basic', '10', NULL, '800', '<p>Per Month</p><p>5% Vat Excluding&nbsp;</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>No Offer available at this moment</p>', 'Choose Package', '#', 4, '2022-10-20 06:12:10', '2023-03-07 04:43:02'),
(6, 'Primary', '15', NULL, '1000', '<p>Per Month</p><p>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>No Offer available at this moment</p>', 'Choose Package', '#', 4, '2022-10-20 06:12:48', '2023-03-07 00:30:17'),
(7, 'Dominant', '20', NULL, '1200', '<p>Per Month</p><p>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>OTC Fee - 1,000 Taka Free</p>', 'Choose Package', '#', 5, '2022-10-20 06:13:19', '2023-03-07 00:30:24'),
(8, 'Confident', '25', NULL, '1500', '<p>Per Month</p><p>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>OTC Fee - 1,000 Taka</p>', 'Choose Package', '#', 4, '2022-10-20 06:13:59', '2023-03-07 00:30:32'),
(9, 'Positive', '30', NULL, '2000', '<p>Per Month</p><p>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>OTC Fee - 1,000 Taka</p><p>200 Tk. Cashback</p>', 'Choose Package', '#', 4, '2022-10-20 06:14:34', '2023-03-07 00:30:37'),
(10, 'Advance', '40', NULL, '2500', '<p>Per Month</p><p>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>No Offer available at this moment</p>', 'Choose Package', '#', 3, '2022-10-20 06:15:28', '2023-03-07 00:30:44'),
(12, 'Extreme', '75', NULL, '4500', '<p>Per Month</p><p>5% Vat Excluding</p>', '<ul><li>24 Hours Unlimited</li><li>Largest FTB Server</li><li>Live TV&nbsp;</li><li>Fiber Optics</li><li>BDIX Connected&nbsp;</li><li>Low Latency</li><li>Public IP Available</li><li>OTC Fee - 1,000 Taka</li><li>24/7 Customer Care</li></ul>', '<p>No Offer available at this moment</p>', 'Choose Package', '#', 2, '2022-10-20 06:16:30', '2023-01-01 13:50:06'),
(14, 'this is title', NULL, NULL, '3450', NULL, '<h2>pricing one</h2><p>pricing one</p>', NULL, 'read moreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', NULL, 4, '2023-03-14 01:39:26', '2023-03-14 01:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_categories`
--

CREATE TABLE `pricing_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pricing_category_name` varchar(191) NOT NULL,
  `pricing_category_slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_categories`
--

INSERT INTO `pricing_categories` (`id`, `pricing_category_name`, `pricing_category_slug`, `created_at`, `updated_at`) VALUES
(4, 'Corporate Internate', '#Corporate', '2023-03-07 00:14:46', '2023-03-07 00:14:46'),
(3, 'Home Internate', '#Home', '2023-03-07 00:13:00', '2023-03-07 00:13:00'),
(5, 'Test Internet', '#Test', '2023-03-07 00:15:46', '2023-03-07 00:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_titles`
--

CREATE TABLE `pricing_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pricing_section_label` varchar(191) DEFAULT NULL,
  `pricing_section_first_title` varchar(191) DEFAULT NULL,
  `pricing_section_title_middle` varchar(191) DEFAULT NULL,
  `pricing_section_title_last` varchar(191) DEFAULT NULL,
  `pricing_section_title_desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_titles`
--

INSERT INTO `pricing_titles` (`id`, `pricing_section_label`, `pricing_section_first_title`, `pricing_section_title_middle`, `pricing_section_title_last`, `pricing_section_title_desc`, `created_at`, `updated_at`) VALUES
(1, 'Pricing Plans', 'All Internet packages', 'Check out all our affordable internet packages.', 'Internet Packages', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', NULL, '2023-03-07 00:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_thumbnail` varchar(191) NOT NULL,
  `product_title` varchar(191) NOT NULL,
  `product_price` varchar(191) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_quick_view_desc` longtext NOT NULL,
  `prodcut_button` varchar(191) NOT NULL,
  `prodcut_button_url` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_thumbnail`, `product_title`, `product_price`, `product_desc`, `product_quick_view_desc`, `prodcut_button`, `prodcut_button_url`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/TOwlZYZvmwYXGkzttrPAXLqANnNHR3XlG3gJ9gRr.jpg', 'Black Router', '৳ ১৫০০', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.', '<h4>Product Features</h4><ul><li>consectetur adipiscing elit. Etiam vestibulum</li><li>sagittis augue sit amet, gravi Nulla facilisi</li><li>Curabitur fermentum odio eu nisi&nbsp;</li></ul>', 'Buy Now', 'https://telewirebd.net/order-product', '2022-10-11 07:11:51', '2022-11-14 05:55:08'),
(2, 'storage/img/IJbT1NqCUlFufWh4DALyG9ql4zdSOlb3g5msg94u.jpg', 'Remote Router', '৳ ১৫০০', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.', '<h4>Product Features</h4><ul><li>consectetur adipiscing elit. Etiam vestibulum</li><li>sagittis augue sit amet, gravi Nulla facilisi</li><li>Curabitur fermentum odio eu nisi&nbsp;</li></ul>', 'Buy Now', 'https://telewirebd.net/order-product', '2022-10-11 07:13:38', '2022-11-17 12:50:40'),
(6, 'storage/img/KK1HVvtJRX7sAOEjpb1aCx9lqBj4IaX3N8erlsxg.jpg', 'ONU', '৳ 1299', 'Tenda G103 Gpon 1 Port Gigabit Optical Network Terminal (ONU)', '<h2>Key Features</h2><ul><li>Model: Tenda G103</li><li>Compliant with ITU-T G.984 standard</li><li>Upstream rate up to 1.25Gbps</li><li>Downstream rate up to 2.5Gbps</li><li>Transmission distance up to 20Km</li></ul><h2><strong>Description</strong></h2><h2><strong>Tenda G103 Gpon 1 Port Gigabit Optical Network Terminal (ONU)</strong></h2><p>Compliant with ITU-T G.984 standard, G103 is widely compatible with global ISP and OLT. 1 gigabit wired RJ45 port is provided by G103 to bring ultra-fast data transfer. Plug and play, G103 supports OMCI remote management without onsite configuration as well .G103 is an ideal FTTH device with a simple and easy design. With an upstream rate of up to 1.25Gbps, a downstream rate of up to 2.5Gbps, and a transmission distance of up to 20Km, G103 can bring freewheeling internet access.</p>', 'Order Now', 'https://telewirebd.net/order-product', '2022-11-14 14:33:24', '2022-11-14 14:36:39'),
(8, 'storage/img/ZheiXGAb4mMY85ulsqMW3vi6cnMnNNYmQmovKXhQ.jpg', 'Test product watch', '100', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 04:44:16', '2023-03-07 04:44:16'),
(9, 'storage/img/QeNlOiJPZdrPjxO7jv3sy1xPg69QWEsnQB7MF2aN.jpg', 'Test product watch', '100', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 04:45:17', '2023-03-07 04:45:17'),
(10, 'storage/img/yd6rBKtLgj6hgZk0oAD0UH23WrmawRq1A9zrzwZT.jpg', 'bag', '100', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 04:45:32', '2023-03-07 04:45:32'),
(11, 'storage/img/dbZPOYK3IvsIZs7gtjCL1iygOTtIk3jH1l0Ib5Ww.jpg', 'Test product 1', '1001', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 06:36:15', '2023-03-07 06:36:15'),
(12, 'storage/img/yJwadCHLDDMQBdaI5k7pO9b3NMwy3zyYVdBchn1C.jpg', 'Test product', '100', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 06:37:57', '2023-03-07 06:37:57'),
(13, 'storage/img/lRQtqGEjAvqV3x4hi9nL6xluF5svH9HVHlIaiQGZ.jpg', 'Test product', '1001', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 06:38:15', '2023-03-07 06:38:15'),
(14, 'storage/img/82dNsA6UpXqoR325aUW7FIaD52bP7tB3mQ8zduBT.jpg', 'Test product', '100', 'N/A', 'N/A', 'N/A', 'N/A', '2023-03-07 06:38:27', '2023-03-07 06:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_titles`
--

CREATE TABLE `product_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_section_label` varchar(191) DEFAULT NULL,
  `product_section_first_title` varchar(191) DEFAULT NULL,
  `product_section_title_middle` varchar(191) DEFAULT NULL,
  `product_section_title_last` varchar(191) DEFAULT NULL,
  `product_section_title_desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_titles`
--

INSERT INTO `product_titles` (`id`, `product_section_label`, `product_section_first_title`, `product_section_title_middle`, `product_section_title_last`, `product_section_title_desc`, `created_at`, `updated_at`) VALUES
(1, 'Products', 'Check out ours', 'Exclusive Products', 'Buy genuine products from X-peeds', NULL, NULL, '2023-03-07 04:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_bg_img` varchar(191) DEFAULT NULL,
  `question_title` varchar(191) DEFAULT NULL,
  `question_text` longtext DEFAULT NULL,
  `question_btn1_text` varchar(191) DEFAULT NULL,
  `question_btn1_link` varchar(191) DEFAULT NULL,
  `question_btn2_text` varchar(191) DEFAULT NULL,
  `question_btn2_link` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_bg_img`, `question_title`, `question_text`, `question_btn1_text`, `question_btn1_link`, `question_btn2_text`, `question_btn2_link`, `created_at`, `updated_at`) VALUES
(1, 'storage/img/TZuKNaZHMlUm7EbbCCiBsyQvW3cWLmAjhOjxHZvu.png', 'Is Your Question Not Listed?', 'Aenean ullamcorper at erat a dictum. Donec vel nulla elit. Aliquam pharetra massa elit, sed maximus lectus mollis ut. Phasellus a ligula et neque fringilla efficitur.', 'call us', '0167777777', 'conatct us', '/conatctus', NULL, '2023-02-26 23:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `scripts`
--

CREATE TABLE `scripts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `script` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scripts`
--

INSERT INTO `scripts` (`id`, `title`, `script`, `created_at`, `updated_at`) VALUES
(10, 'CSS', '<link rel=\"stylesheet\" href=\"test/style.css\" />', '2023-03-13 23:16:24', '2023-03-13 23:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `seo_optimizeds`
--

CREATE TABLE `seo_optimizeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_name` varchar(191) NOT NULL,
  `meta_description` longtext NOT NULL,
  `meta_keywords` longtext NOT NULL,
  `meta_author` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_optimizeds`
--

INSERT INTO `seo_optimizeds` (`id`, `meta_name`, `meta_description`, `meta_keywords`, `meta_author`, `created_at`, `updated_at`) VALUES
(1, 'X speed', 'Best Internet Service Provider (ISP) in Dhaka', 'X speed, Internet Service Provider, Broadband, Internet, Wi-Fi, Best Internet', 'Al Mamun', NULL, '2023-03-08 21:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(191) NOT NULL DEFAULT '1',
  `header_favicon` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `header_favicon`, `created_at`, `updated_at`) VALUES
(1, 'X speed Communications', 'storage/img/header_favicon.svg', NULL, '2023-03-13 05:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `site_pages`
--

CREATE TABLE `site_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(191) NOT NULL,
  `page_description` longtext DEFAULT NULL,
  `page_permalink` varchar(191) DEFAULT NULL,
  `page_content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_pages`
--

INSERT INTO `site_pages` (`id`, `page_title`, `page_description`, `page_permalink`, `page_content`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions', 'Terms and conditions, also known as terms of service or terms of use, are a set of rules and guidelines that a user must agree to in order to use a website, app, or service. These terms typically outline the rights and responsibilities.', NULL, '<p>Welcome to the Telewire Internet!</p><p>These terms and conditions outline the rules and regulations for using Telewire Internet’s website, located at https://www.ajwahnetwork.com/.</p><p>By accessing this website, we assume you accept these terms and conditions. Do not continue to use Telewire Internet if you do not agree to all of the terms and conditions stated on this page.</p><p>The following terminology applies to these terms and conditions, the privacy statement and disclaimer notice, and all agreements: “client,” “you,” and “your” refer to you, the person logged on to this website and compliant with the company’s terms and conditions.&nbsp;“The Company,” “Ourselves,” “We,” “Our,” and “Us”, refers to our Company.&nbsp;“Party,” “Parties,” or “Us”, refers to both the Client and ourselves.&nbsp;All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process of our assistance to the client in the most appropriate manner for the express purpose of meeting the client’s needs in respect of the provision of the company’s stated services, in accordance with and subject to, prevailing law in the Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, is taken as interchangeable and therefore as referring to the same.</p><p><strong>Cookies</strong></p><p>We employ the use of cookies. By accessing the Telewire Internet, you agree to use cookies in accordance with the Telewire Internet’s Privacy Policy.</p><p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas&nbsp;to&nbsp;make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p><p><strong>License</strong></p><p>Unless otherwise stated, Telewire Internet and/or its licensors own the intellectual property rights for all material on Telewire Internet. All intellectual property rights are reserved. You may access this from the Telewire Internet for your own personal use, subjected to the restrictions set forth in these terms and conditions.</p><p>You must not.</p><ul><li>Republish material from Telewire Internet.</li><li>Sell, rent, or sub-license material from the Telewire Internet.</li><li>Reproduce, duplicate, or copy material from Telewire Internet.</li><li>Redistribute content from the Telewire Internet.</li></ul><p>This Agreement shall begin on the date hereof.&nbsp;Our terms and conditions were created with the help of the&nbsp;terms and conditions template.</p><p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Telewire Internet does not filter, edit, publish, or review comments prior to their presence on the website. Comments do not reflect the views and opinions of Telewire Internet, its agents, and/or affiliates. Comments reflect the views and opinions of the people who post their views and opinions.&nbsp;To the extent permitted by applicable laws, Telewire Internet shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p><p>Telewire Internet reserves the right to monitor all comments and to remove any comments that can be considered inappropriate, offensive, or cause a breach of these terms and conditions.</p><p>You warrant and represent that:</p><ul><li>You are entitled to post the comments on our website and have all the necessary licenses and consents to do so;</li><li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li><li>The comments do not contain any defamatory, libelous, offensive, indecent, or otherwise unlawful material, which is an invasion of privacy.</li><li>The comments will not be used to solicit or promote business, customs, or present commercial activities or unlawful activity.</li></ul><p>You hereby grant Telewire Internet a non-exclusive license to use, reproduce, edit, and authorize others to use, reproduce, and edit any of your comments in any and all forms, formats, or media.</p><p><strong>Hyperlinking to our Content</strong></p><p>The following organizations may link to our website without prior written approval:</p><ul><li>government agencies;</li><li>Search engines;</li><li>news organizations;</li><li>Online directory distributors may link to our website in the same manner as they hyperlink to the websites of other listed businesses; and</li><li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li></ul><p>These organizations may link to our home page, to publications, or to other website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement, or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p><p>We may consider and approve other link requests from the following types of organizations:</p><ul><li>commonly-known consumer and/or business information sources;</li><li>dot.com community sites;</li><li>associations or other groups representing charities.</li><li>online directory distributors.</li><li>internet portals;</li><li>Accounting, law, and consulting firms; and</li><li>educational institutions and trade associations.</li></ul><p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Telewire Internet; and (d) the link is in the context of general resource information.</p><p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement, or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p><p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Telewire Internet. Please include your name, your organization name, and contact information, as well as the URL of your site, a list of any URLs from which you intend to link to our website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p><p>Approved organizations may hyperlink to our website as follows:</p><ul><li>By the use of our corporate name; or</li><li>By use of the uniform resource locator being linked to, or</li><li>By use of any other description of our website being linked to that makes sense within the context and format of the content on the linking party’s site.</li></ul><p>Absent a trademark license agreement, no use of Telewire Internet’s logo or other artwork will be allowed for linking.</p><p><strong>iFrames</strong></p><p>Without prior approval and written permission, you may not create frames around our webpages that alter in any way the visual presentation or appearance of our website.</p><p><strong>Content Liability</strong></p><p>We will not be held responsible for any content that appears on your website. You agree to protect and defend us against all claims that arise on your website.&nbsp;No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p><p><strong>Your Privacy</strong></p><p>Please read the Privacy Policy.</p><p><strong>Reservation of Rights</strong></p><p>We reserve the right to request that you remove all links or any particular link to our website. You agree to immediately remove all links to our website upon request. We also reserve the right to amend these terms and conditions and&nbsp;it’s&nbsp;linking policy at any time. By continuously linking to our website, you agree to be bound by and follow these linking terms and conditions.</p><p><strong>Removal of links from our website</strong></p><p>If you find any link on our website that is offensive for any reason, you are free to contact and inform us at any moment. We will consider requests to remove links, but we are not obligated to do so or to respond to you directly.</p><p>We do not ensure that the information on this website is correct. We do not warrant its completeness or accuracy. Nor do we promise to ensure that the website remains available or that the material on the website is kept up-to-date.</p><p><strong>Disclaimer</strong></p><p>To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p><ul><li>limit or exclude our or your liability for death or personal injury;</li><li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li><li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li><li>exclude any of our or your liabilities that may not be excluded under applicable law.</li></ul><p>The limitations and prohibitions of liability set out in this section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort, and for breach of statutory duty.</p><p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>', '2022-10-20 06:20:14', '2022-10-20 06:20:14'),
(2, 'Return & Refund Policy', 'A privacy policy is a document that outlines how a company or organization collects, uses, and protects the personal information of its users. It should include information on what types of information are collected, why it is collected.', NULL, '<p>You are entitled to return &amp; refund your order within 10 days without giving any reason for doing so.</p><p>The deadline for refunding the order is 10 days from the date you received the services or on which a third party you have appointed, who is not the carrier, takes possession of the product delivered.</p><p>In order to exercise your right of cancellation, you must inform us of your decision by means of a clear statement.</p><p>You can inform us of your decision by e-mail at&nbsp;<a href=\"mailto:support@telewirebd.net\">support@telewirebd.net</a></p><p>We will return &amp; refund you no later than 10 days from the day on which we receive the returned services. We will use the same means of payment as you used for the order, and you will not incur any fees for such reimbursement.</p><p><strong>Conditions for returns:</strong></p><p>In order for the services to be eligible for a return, please make sure that:</p><ul><li>The services were purchased in the last 10 days</li><li>The services are in the original packaging</li></ul><p>The following services cannot be returned:</p><ul><li>The supply of services is made to your specifications or clearly personalized.</li><li>The supply of services which according to their nature are not suitable to be returned, for example, services which deteriorate rapidly or where the date of expiry is over.</li><li>The supply of services that are not suitable for return due to health protection or hygiene reasons were unsealed after delivery.</li><li>The supply of services which are, after delivery, according to their nature, inseparably mixed with other items.</li></ul><p>We reserve the right to refuse returns of any merchandise that does not meet the above return conditions at our sole discretion.</p><p><strong>Returning Services</strong></p><p>You are responsible for the cost and risk of returning the services to us. You should send the services to the following address:</p><p>Holding No:384, Dabtoli, Ranisankail Paurashava, Ranisankail, Thakurgaon.</p><p>We cannot be held responsible for services damaged or lost in return shipment. Therefore, we recommend an insured and trackable mail service. We are unable to issue a refund without actual receipt of the services or proof of received return delivery.</p><p><strong>Gifts:</strong></p><p>If the services were marked as a gift when purchased and then shipped directly to you, you’ll receive a gift credit for the value of your return. Once the returned product is received, a gift certificate will be mailed to you.</p><p>If the services weren’t marked as a gift when purchased, or the gift giver had the order shipped to themselves to give it to you later, We will send the refund to the gift giver.</p><p><strong>Contact Us</strong></p><p>If you have any questions about our Returns and Refunds Policy, please contact us by e-mail at&nbsp;<a href=\"mailto:support@telewirebd.net\">support@telewirebd.net</a>&nbsp;</p>', '2022-10-20 06:20:23', '2022-10-20 06:20:23'),
(4, 'TEST Upsdated', 'This is a test page TEST Upsdated', NULL, '<p><strong>This is the test content: TEST Upsdated</strong></p><p>This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content. This is a test of the content This is a test of the content. This is a test of the content &nbsp;This is a test of the content.</p><p>&nbsp;</p><p><i>&nbsp;This is an end test of the content. This is an end test of the content. This is an end test of the content. This is an end test of the content. This is an end test of the content.</i></p>', '2023-02-16 05:00:08', '2023-03-09 00:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_lists`
--

CREATE TABLE `testimonial_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_text` varchar(191) DEFAULT NULL,
  `testimonial_img` varchar(191) DEFAULT NULL,
  `testimonial_rating` varchar(191) DEFAULT NULL,
  `testimonial_name` varchar(191) DEFAULT NULL,
  `testimonial_title` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_lists`
--

INSERT INTO `testimonial_lists` (`id`, `testimonial_text`, `testimonial_img`, `testimonial_rating`, `testimonial_name`, `testimonial_title`, `created_at`, `updated_at`) VALUES
(1, 'Maecenas suscipit luctus enim, ut facilisis elit venenatisut. Aenean ullamcorper at erat a dictum. Donec vel nulla.', 'storage/img/9FP3V3EI4ncZmnJxIfosra56zDmkQkjtFik3kaZH.jpg', '5', 'Reduwan Ali', 'Developer', NULL, '2023-03-06 23:29:53'),
(2, 'This is a test data....', 'storage/img/nSIRdYgY1qZNPjCPH9wlU9xAcrXzelyb9smuXede.jpg', '3', 'Salman Khan', 'Model', '2023-02-26 05:12:18', '2023-02-26 05:12:18'),
(5, 'test.............', 'storage/img/pVSCUfaiPGIwT8oLgFdgQB4PEBYFqPlAwwSgkRQd.jpg', '1', 'test', 'test', '2023-02-26 05:52:15', '2023-02-26 06:03:06'),
(6, 'test updated.', 'storage/img/ktcK5UdmtRXXSDv9cs08FllJFhcxmCQ092ltOeoH.jpg', '4', 'test 2', 'test 2', '2023-02-26 06:02:15', '2023-02-26 06:02:56'),
(7, 'test 9', 'storage/img/Ay9FHiguHaBkZ3Mnz24rYNjSpQznCsUAHLoWsvEX.jpg', '1', 'test 9', 'test 9', '2023-03-06 23:09:26', '2023-03-06 23:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_titles`
--

CREATE TABLE `testimonial_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_title` varchar(191) DEFAULT NULL,
  `testimonial_sub_title` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_titles`
--

INSERT INTO `testimonial_titles` (`id`, `testimonial_title`, `testimonial_sub_title`, `created_at`, `updated_at`) VALUES
(1, 'Client Testimonial Test', 'Test Maecenas suscipit luctus enim, ut facilisis elit venenatis ut. Aenean ullamcorper at erat a dictum. Donec vel nulla elit. Aliquam pharetra massa elit.', NULL, '2023-03-06 22:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primary_color` varchar(191) DEFAULT NULL,
  `secondary_color` varchar(191) DEFAULT NULL,
  `heading_color` varchar(191) DEFAULT NULL,
  `sub_headin_color` varchar(191) DEFAULT NULL,
  `paragraph_color` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `primary_color`, `secondary_color`, `heading_color`, `sub_headin_color`, `paragraph_color`, `created_at`, `updated_at`) VALUES
(1, '#50b748', '#0081c9', '#1a1a2e', '#484858', '#303030', '2023-03-13 08:49:37', '2023-03-14 03:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `upazillas`
--

CREATE TABLE `upazillas` (
  `id` bigint(20) NOT NULL,
  `upazilla_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upazillas`
--

INSERT INTO `upazillas` (`id`, `upazilla_name`, `created_at`, `updated_at`) VALUES
(8, 'Ranisankail', '2022-12-22 00:14:08', '2022-12-22 00:14:08'),
(9, 'Pirganj', '2022-12-22 00:14:37', '2022-12-22 00:14:37'),
(10, 'Haripur', '2022-12-22 00:14:47', '2022-12-22 00:14:47'),
(11, 'Baliadangi', '2022-12-22 00:14:54', '2022-12-22 00:14:54'),
(12, 'Thakurgaon Sadar', '2022-12-22 00:15:04', '2022-12-22 00:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'getup', 'info@getup.com.bd', NULL, '$2y$10$kFw2HWVRgcukTMuLLNhuyuL2zoNfa0QAJ1Z21P5BBbngXUFKSr6aW', NULL, '2022-10-31 02:09:34', '2022-10-31 02:09:34'),
(3, 'Telewire', 'info@telewirebd.com', NULL, '$2y$10$gY6dHW7XpLnK1ZtPnscDxuP8NZyjT76Aj8zMYW2fl/23Qc84VxTH2', NULL, '2022-11-13 01:45:23', '2022-11-13 01:45:23'),
(4, 'telewirebd', 'admin@telewirebd.net', NULL, '$2y$10$8dghH2N.9xWcuIAs7pmFDOorE3uBNiZ1LqCe2C/r8g778nMJ7lB5y', '0IwZk2b8BpiyF6rc4nyyQwaojIwwIe6FXOcWVhDchJ1eb5PHQQoTvRt6Wl9l', '2022-11-13 01:48:04', '2022-11-13 01:48:04'),
(5, 'mamun', 'mamun@getup.com.bd', NULL, '$2a$12$jfKccwyGgmi5xniGbnUrhegIP0HbDpuJiA42vuhC59FLgral8OEtW\r\n\r\n', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `what_we_dos`
--

CREATE TABLE `what_we_dos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `list1` varchar(191) DEFAULT NULL,
  `list2` varchar(191) DEFAULT NULL,
  `list3` varchar(191) DEFAULT NULL,
  `list4` varchar(191) DEFAULT NULL,
  `list5` varchar(191) DEFAULT NULL,
  `list6` varchar(191) DEFAULT NULL,
  `list7` varchar(191) DEFAULT NULL,
  `list8` varchar(191) DEFAULT NULL,
  `list9` varchar(191) DEFAULT NULL,
  `list10` varchar(191) DEFAULT NULL,
  `card1_logo` varchar(191) DEFAULT NULL,
  `card1_title` varchar(191) DEFAULT NULL,
  `card1_text` varchar(191) DEFAULT NULL,
  `card2_logo` varchar(191) DEFAULT NULL,
  `card2_title` varchar(191) DEFAULT NULL,
  `card2_text` varchar(191) DEFAULT NULL,
  `card3_logo` varchar(191) DEFAULT NULL,
  `card3_title` varchar(191) DEFAULT NULL,
  `card3_text` varchar(191) DEFAULT NULL,
  `card4_logo` varchar(191) DEFAULT NULL,
  `card4_title` varchar(191) DEFAULT NULL,
  `card4_text` varchar(191) DEFAULT NULL,
  `card5_logo` varchar(191) DEFAULT NULL,
  `card5_title` varchar(191) DEFAULT NULL,
  `card5_text` varchar(191) DEFAULT NULL,
  `card6_logo` varchar(191) DEFAULT NULL,
  `card6_title` varchar(191) DEFAULT NULL,
  `card6_text` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_we_dos`
--

INSERT INTO `what_we_dos` (`id`, `title`, `sub_title`, `text`, `list1`, `list2`, `list3`, `list4`, `list5`, `list6`, `list7`, `list8`, `list9`, `list10`, `card1_logo`, `card1_title`, `card1_text`, `card2_logo`, `card2_title`, `card2_text`, `card3_logo`, `card3_title`, `card3_text`, `card4_logo`, `card4_title`, `card4_text`, `card5_logo`, `card5_title`, `card5_text`, `card6_logo`, `card6_title`, `card6_text`, `created_at`, `updated_at`) VALUES
(1, 'What We Do?', 'Extreme and super fast internet', 'Mauris eu est at neque bibendum rhoncus ut maximus purus. Duis lacinia justo luctus ultricies faucibus. Phasellus quis lorem bibendum, eleifend massa eu, vulputate urna. Sed et sodales dui. Suspendisse ac neque ut leo placerat vehicula. Morbi volutpat nunc ac finibus mollis.', 'Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero.', 'Pellentesque pharetra felis sit amet erat pellentesque malesuada.', 'Pellentesque pharetra felis sit amet erat pellentesque malesuada.', 'Pellentesque pharetra felis sit amet erat pellentesque malesuada.', 'Pellentesque pharetra felis sit amet erat pellentesque malesuada.', NULL, NULL, NULL, NULL, 'Pellentesque pharetra felis sit amet erat pellentesque malesuada.', 'storage/img/about_image.png', 'Home internet', 'card 1 text 3', 'storage/img/about_image.jpg', 'Corporate internet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Quisque sapien.', 'storage/img/eJPlR4CdNuWrsPrWMT7hyHVDLzq9GXPlDnQw6Fj3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-14 01:34:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_settings`
--
ALTER TABLE `about_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_titles`
--
ALTER TABLE `blog_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_boxes`
--
ALTER TABLE `contact_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_titles`
--
ALTER TABLE `contact_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coverage_areas`
--
ALTER TABLE `coverage_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coverage_titles`
--
ALTER TABLE `coverage_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explores`
--
ALTER TABLE `explores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq_list_answers`
--
ALTER TABLE `faq_list_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_list_titles`
--
ALTER TABLE `faq_list_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_titles`
--
ALTER TABLE `faq_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_settings`
--
ALTER TABLE `footer_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fun_facts`
--
ALTER TABLE `fun_facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_maps`
--
ALTER TABLE `google_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_settings`
--
ALTER TABLE `header_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sliders`
--
ALTER TABLE `hero_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_categories`
--
ALTER TABLE `media_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_lists`
--
ALTER TABLE `media_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_titles`
--
ALTER TABLE `media_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_packages`
--
ALTER TABLE `order_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay_bills`
--
ALTER TABLE `pay_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_bill_banks`
--
ALTER TABLE `pay_bill_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_bill_options`
--
ALTER TABLE `pay_bill_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_bill_option_steps`
--
ALTER TABLE `pay_bill_option_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_categories`
--
ALTER TABLE `pricing_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_titles`
--
ALTER TABLE `pricing_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_titles`
--
ALTER TABLE `product_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scripts`
--
ALTER TABLE `scripts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_optimizeds`
--
ALTER TABLE `seo_optimizeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_pages`
--
ALTER TABLE `site_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_lists`
--
ALTER TABLE `testimonial_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_titles`
--
ALTER TABLE `testimonial_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazillas`
--
ALTER TABLE `upazillas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_settings`
--
ALTER TABLE `about_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_titles`
--
ALTER TABLE `blog_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_boxes`
--
ALTER TABLE `contact_boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_titles`
--
ALTER TABLE `contact_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coverage_areas`
--
ALTER TABLE `coverage_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coverage_titles`
--
ALTER TABLE `coverage_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `explores`
--
ALTER TABLE `explores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_list_answers`
--
ALTER TABLE `faq_list_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq_list_titles`
--
ALTER TABLE `faq_list_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faq_titles`
--
ALTER TABLE `faq_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer_settings`
--
ALTER TABLE `footer_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fun_facts`
--
ALTER TABLE `fun_facts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `google_maps`
--
ALTER TABLE `google_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_settings`
--
ALTER TABLE `header_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_sliders`
--
ALTER TABLE `hero_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `media_categories`
--
ALTER TABLE `media_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media_lists`
--
ALTER TABLE `media_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media_titles`
--
ALTER TABLE `media_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `order_packages`
--
ALTER TABLE `order_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pay_bills`
--
ALTER TABLE `pay_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pay_bill_banks`
--
ALTER TABLE `pay_bill_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pay_bill_options`
--
ALTER TABLE `pay_bill_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pay_bill_option_steps`
--
ALTER TABLE `pay_bill_option_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pricing_categories`
--
ALTER TABLE `pricing_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricing_titles`
--
ALTER TABLE `pricing_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_titles`
--
ALTER TABLE `product_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scripts`
--
ALTER TABLE `scripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seo_optimizeds`
--
ALTER TABLE `seo_optimizeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_pages`
--
ALTER TABLE `site_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial_lists`
--
ALTER TABLE `testimonial_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial_titles`
--
ALTER TABLE `testimonial_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upazillas`
--
ALTER TABLE `upazillas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `what_we_dos`
--
ALTER TABLE `what_we_dos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
