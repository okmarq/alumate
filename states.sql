-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 159.203.96.51
-- Generation Time: May 30, 2022 at 07:22 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumates`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Abia', 1),
(2, 'Adamawa', 1),
(3, 'Akwa Ibom', 1),
(4, 'Anambra', 1),
(5, 'Bauchi', 1),
(6, 'Bayelsa', 1),
(7, 'Benue', 1),
(8, 'Borno', 1),
(9, 'Cross River', 1),
(10, 'Delta', 1),
(11, 'Ebonyi', 1),
(12, 'Edo', 1),
(13, 'Ekiti', 1),
(14, 'Enugu', 1),
(15, 'FCT', 1),
(16, 'Gombe', 1),
(17, 'Imo', 1),
(18, 'Jigawa', 1),
(19, 'Kaduna', 1),
(20, 'Kano', 1),
(21, 'Katsina', 1),
(22, 'Kebbi', 1),
(23, 'Kogi', 1),
(24, 'Kwara', 1),
(25, 'Lagos', 1),
(26, 'Nasarawa', 1),
(27, 'Niger', 1),
(28, 'Ogun', 1),
(29, 'Ondo', 1),
(30, 'Osun', 1),
(31, 'Oyo', 1),
(32, 'Plateau', 1),
(33, 'Rivers', 1),
(34, 'Sokoto', 1),
(35, 'Taraba', 1),
(36, 'Yobe', 1),
(37, 'Zamfara', 1),

(38, 'Ashanti', 2),
(39, 'Volta', 2),
(40, 'Western', 2),
(41, 'Northern', 2),
(42, 'Central', 2),
(43, 'Brong-Ahafo', 2),
(44, 'Upper East', 2),
(45, 'Eastern', 2),
(46, 'Upper West', 2),

(47, 'Eastern Cape', 3),
(48, 'The Free State', 3),
(49, 'Gauteng', 3),
(50, 'KwaZulu-Natal', 3),
(51, 'Limpopo', 3),
(52, 'Mpumalanga', 3),
(53, 'The Northern Cape', 3),
(54, 'North West', 3),
(55, 'The Western  Cape', 3),

(56, 'Nairobi', 4),
(57, 'Mombasa', 4),
(58, 'Kisumu', 4),
(59, 'Nakuru', 4),
(60, 'MalindiBaringo', 4),
(61, 'Bomet', 4),
(62, 'Bungoma', 4),
(63, 'Busia', 4),
(64, 'Elgeyo Marakwet', 4),
(65, 'Embu', 4),
(66, 'Garissa', 4),
(67, 'Homa Bay', 4),
(68, 'Isiolo', 4),
(69, 'Kajiado', 4),
(70, 'Kakamega', 4),
(71, 'Kericho', 4),
(72, 'Kiambu', 4),
(73, 'Kilifi', 4),
(74, 'Kirinyaga', 4),
(75, 'Kisii', 4),
(76, 'Kisumu County', 4),
(77, 'Kitui County', 4),
(78, 'Kwale County', 4),
(79, 'Laikipia County', 4),
(80, 'Lamu County', 4),
(81, 'Machakos County', 4),
(82, 'Makueni County', 4),
(83, 'Mandera County', 4),
(84, 'Meru County', 4),
(85, 'Migori County', 4),
(86, 'Marsabit County', 4),
(87, 'Mombasa County', 4),
(88, 'Muranga County', 4),
(89, 'Nairobi County', 4),
(90, 'Nakuru County', 4),
(91, 'Nandi County', 4),
(92, 'Narok County', 4),
(93, 'Nyamira County', 4),
(94, 'Nyandarua County', 4),
(95, 'Nyeri County', 4),
(96, 'Samburu County', 4),
(97, 'Siaya County', 4),
(98, 'Taita Taveta County', 4),
(99, 'Tana River County', 4),
(100, 'Tharaka Nithi County', 4),
(101, 'Trans Nzoia County', 4),
(102, 'Turkana County', 4),
(103, 'Uasin Gishu County', 4),
(104, 'Vihiga County', 4),
(105, 'Wajir County', 4),
(106, 'West Pokot County', 4),

(107, 'England', 5),
(108, 'England-North East', 5),
(109, 'England-North West', 5),
(110, 'Yorkshire and The Humber', 5),
(111, 'England-East Midlands', 5),
(112, 'West Midlands', 5),
(113, 'East of England', 5),
(114, 'London', 5),
(115, 'South West', 5),
(116, 'South East', 5),
(117, 'Central Belt', 5),
(118, 'Scottish Midlands', 5),
(119, 'Scottish Highlands', 5),
(220, 'Scottish Lowlands', 5),
(221, 'Scottish Borders', 5),
(222, 'Galloway', 5),
(223, 'Northern Isles', 5),
(224, 'South West Wales', 5),
(225, 'South Wales', 5),
(226, 'Mid Wales', 5),
(227, 'North Wales', 5),
(228, 'West Wales', 5),
(229, 'Antrim', 5),
(230, 'Amagh', 5),
(231, 'Down', 5),
(232, 'Fermanagh', 5),
(233, 'Londonderry', 5),
(234, 'Tyrone', 5),

(235, 'Alabama', 6),
(236, 'Arizona', 6),
(237, 'Alaska', 6),
(238, 'Arkansas', 6),
(239, 'California', 6),
(240, 'Colorado', 6),
(241, 'Connecticut', 6),
(242, 'Delaware', 6),
(243, 'Florida', 6),
(244, 'Georgia', 6),
(245, 'Hawaii', 6),
(246, 'Idaho', 6),
(247, 'Illinois', 6),
(248, 'Indiana', 6),
(249, 'Iowa', 6),
(250, 'Kansas', 6),
(251, 'Kentucky', 6),
(252, 'Louisanna', 6),
(253, 'Maine', 6),
(254, 'Maryland', 6),
(255, 'Massachusetts', 6),
(256, 'Mississippi', 6),
(257, 'Michigan', 6),
(258, 'Missouri', 6),
(260, 'Montana', 6),
(261, 'Nebraska', 6),
(262, 'Nevada', 6),
(263, 'New Hampshire', 6),
(264, 'New Jersey', 6),
(265, 'New Mexico', 6),
(266, 'Newyork', 6),
(267, 'North Carolina', 6),
(268, 'North Dakota', 6),
(269, 'Ohio', 6),
(270, 'Oklahoma', 6),
(271, 'Oregon', 6),
(272, 'Pennsylvania', 6),
(273, 'Rhode Island', 6),
(274, 'South Carolina', 6),
(275, 'South Dakota', 6),
(276, 'Tennessee', 6),
(277, 'Texas', 6),
(278, 'Utah', 6),
(279, 'Vermont', 6),
(280, 'Virginia', 6),
(281, 'Washington', 6),
(282, 'West Virginia', 6),
(283, 'Wisconsin', 6),
(284, 'Wyoming', 6),

(285, 'Emirates of UAE', 7),
(286, 'Abu Dhabi', 7),
(287, 'Dubai', 7),
(288, 'Sharjah', 7),
(289, 'Umm al-Qaiwain', 7),
(290, 'Fujairah', 7),
(291, 'Ajman', 7),
(292, 'Ra’s al-Khaimah', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`),
  ADD KEY `states_name_index` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
