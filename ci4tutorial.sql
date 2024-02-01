-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 02:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) UNSIGNED NOT NULL,
  `brand_name` varchar(45) DEFAULT NULL,
  `year_of_company_foundation` date NOT NULL,
  `year_of_offering_franchises` date NOT NULL,
  `pay_box_of_franchises` varchar(45) DEFAULT NULL,
  `average_turnover` int(11) DEFAULT NULL,
  `contact_phone_name` varchar(45) DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `whatsApp_INT` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `office_INT` int(11) DEFAULT NULL,
  `postal_address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `brand_logo` varchar(245) DEFAULT NULL,
  `setup_image_1` varchar(245) DEFAULT NULL,
  `setup_image_2` varchar(245) DEFAULT NULL,
  `setup_image_3` varchar(245) DEFAULT NULL,
  `brand_type` varchar(45) DEFAULT NULL,
  `brand_slogan` varchar(245) DEFAULT NULL,
  `slider` varchar(245) DEFAULT NULL,
  `image` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `brand_name`, `year_of_company_foundation`, `year_of_offering_franchises`, `pay_box_of_franchises`, `average_turnover`, `contact_phone_name`, `designation`, `whatsApp_INT`, `email`, `office_INT`, `postal_address`, `description`, `category`, `country`, `city`, `province`, `brand_logo`, `setup_image_1`, `setup_image_2`, `setup_image_3`, `brand_type`, `brand_slogan`, `slider`, `image`) VALUES
(3, 'Quemby Snow', '2017-09-16', '2017-12-16', 'Laboris corrupti et', 93, 'Amal Tran', 'Expedita quae dolore', '78', 'dihohecex@mailinator.com', 69, 'Distinctio Voluptat', 'Eligendi earum dolor', 'Facilis et labore be', 'Sit ab neque distinc', 'Aliqua Quos minus d', 'Officia ut facere fa', NULL, NULL, NULL, NULL, 'Et fugit officiis o', 'In ea modi debitis i', NULL, NULL),
(4, 'Igor Lang', '2014-06-26', '1975-09-28', 'Aut ad velit tenetur', 22, 'Odessa Thomas', 'Aliquip numquam ex a', '84', 'fowe@mailinator.com', 79, 'Sit qui a id incidu', 'Ducimus animi adip', 'Omnis esse quibusdam', 'Qui nobis eius et ex', 'Iure officiis explic', 'Saepe obcaecati et e', NULL, NULL, NULL, NULL, 'Non est officia acc', 'Consequuntur praesen', '1706181279_6d66104d02edea8c20ee.png', '1706181279_ec051248506e46e9a6e4.jpg'),
(5, 'Bruno Knowles', '2015-08-17', '2003-07-03', 'Sunt dolores enim mi', 55, 'Ali Atkins', 'Id delectus sed no', '29', 'hyjasoqico@mailinator.com', 79, 'Quibusdam consectetu', 'Veniam repudiandae ', 'Aliquid ad nihil dol', 'Eu officiis qui volu', 'Odit minima occaecat', 'Modi consequatur Ve', '1706181306_ac9e276b73709977ac03.png', '1706181306_13dd225b83125e98d435.png', NULL, '1706181306_6d26ce6832f0fad5a9bc.png', 'Tempor nihil labore ', 'Est duis minus dolo', NULL, '1706181306_28536eb77baf154c0bc5.png'),
(6, 'Dillon Wiley', '2004-04-26', '1986-08-20', 'Consequatur Magna o', 97, 'Rhoda Gross', 'Est adipisci eligend', '80', 'lazu@mailinator.com', 21, 'At et nemo corporis ', 'Culpa aut accusamus', 'Quia doloribus sequi', 'Esse facilis delenit', 'Ipsum ut fuga Culp', 'Do sint itaque sed ', NULL, NULL, '1706181323_390588bfd52e26e715b4.jpg', NULL, 'Hic ea Nam laborum ', 'Quo veritatis cum in', '1706181323_796c7bb2c1c62c3a3720.jpg', NULL),
(7, 'SRK', '2024-01-31', '2024-01-31', 'Aut voluptatem Quia', 435, 'Jarrod Delgado', 'Backend Developer', '03168871033', 'shayan@gmail.com', 545, 'IT park Peshawar\r\nIT park Peshawar', 'adsasdasdasdasdasdasd', 'asdasdasd', 'Pakistan', 'Peshawar', 'Cillum in quam sint', '1706708518_5a0b28458d990858cb5e.png', '1706708518_147b59aa81cc3356c203.png', '1706708518_917078204c557cd61b41.png', '1706708518_839ef0525335d6323d86.png', 'Est fugiat ratione ', 'Soluta qui mollit no', '1706708518_23d048860b284732f233.png', '1706708518_e3b7d02c81e822de57bc.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `deleted`) VALUES
(1, 'Joseph ', 'Quos et quae ', 0),
(3, 'Wynne Campos', 'Est et quia ut omni', 0),
(4, 'Wynne Campos', 'Est et quia ut omni', 0),
(5, 'Willa Pace', 'Proident anim incid', 0),
(6, 'Willa Pace', 'Proident anim incid', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-01-23-063803', 'App\\Database\\Migrations\\Company', 'default', 'App', 1705993845, 1),
(2, '2024-01-24-065636', 'App\\Database\\Migrations\\UploadFile', 'default', 'App', 1706079679, 2),
(3, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1706791579, 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
(1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2, 'Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
(3, 'Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.'),
(4, 'Dolor a asperiores e', 'dolor-a-asperiores-e', 'Eligendi recusandaeEligendi recusandae');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id`, `image`) VALUES
(1, 'C:\\xampp\\tmp\\php202E.tmp'),
(2, 'C:\\xampp\\tmp\\php6F87.tmp'),
(3, 'C:\\xampp\\tmp\\phpCC1F.tmp'),
(4, '1706105737_b8bb12a487255c8ca004.png'),
(5, '1706105882_201f51a02be060ad2b39.png'),
(6, '1706105931_7fed6441a2d715b85237.png'),
(7, '1706105940_7ec8a29f21f6562786de.png'),
(8, '1706105951_fbec52b75e9861acbd69.png'),
(9, '1706105961_97c0f61c71526fa4dae6.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
