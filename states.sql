-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 04:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `capital`, `country_id`) VALUES
(1, 'Abia', 'Umuahia', 129),
(2, 'Adamawa', 'Yola', 129),
(3, 'Akwa Ibom', 'Uyo', 129),
(4, 'Anambra', 'Awka', 129),
(5, 'Bauchi', 'Bauchi', 129),
(6, 'Bayelsa', 'Yenagoa', 129),
(7, 'Benue', 'Makurdi', 129),
(8, 'Borno', 'Maiduguri', 129),
(9, 'Cross River', 'Calabar', 129),
(10, 'Delta', 'Asaba', 129),
(11, 'Ebonyi', 'Abakaliki', 129),
(12, 'Edo', 'Benin City', 129),
(13, 'Ekiti', 'Ado Ekiti', 129),
(14, 'Enugu', 'Enugu', 129),
(15, 'Gombe', 'Gombe', 129),
(16, 'Imo', 'Owerri', 129),
(17, 'Jigawa', 'Dutse', 129),
(18, 'Kaduna', 'Kaduna', 129),
(19, 'Kano', 'Kano', 129),
(20, 'Katsina', 'Katsina', 129),
(21, 'Kebbi', 'Birnin Kebbi', 129),
(22, 'Kogi', 'Lokoja', 129),
(23, 'Kwara', 'Ilorin', 129),
(24, 'Lagos', 'Ikeja', 129),
(25, 'Nasarawa', 'Lafia', 129),
(26, 'Niger', 'Minna', 129),
(27, 'Ogun', 'Abeokuta', 129),
(28, 'Ondo', 'Akure', 129),
(29, 'Osun', 'Oshogbo', 129),
(30, 'Oyo', 'Ibadan', 129),
(31, 'Plateau', 'Jos', 129),
(32, 'Rivers', 'Port Harcourt', 129),
(33, 'Sokoto', 'Sokoto', 129),
(34, 'Taraba', 'Jalingo', 129),
(35, 'Yobe', 'Damaturu', 129),
(36, 'Zamfara', 'Gusau', 129),
(37, 'Federal Capital Territory', 'Abuja', 129),
(38, 'Ashanti', '0', 65),
(39, 'Volta', '1', 65),
(40, 'Western', '2', 65),
(41, 'Northern', '3', 65),
(42, 'Central', '4', 65),
(43, 'Brong-Ahafo', '5', 65),
(44, 'Upper East', '6', 65),
(45, 'Eastern', '7', 65),
(46, 'Upper West', '8', 65),
(47, 'Eastern Cape', '9', 164),
(48, 'The Free State', '10', 164),
(49, 'Gauteng', '11', 164),
(50, 'KwaZulu-Natal', '12', 164),
(51, 'Limpopo', '13', 164),
(52, 'Mpumalanga', '14', 164),
(53, 'The Northern Cape', '15', 164),
(54, 'North West', '16', 164),
(55, 'The Western  Cape', '17', 164),
(56, 'Nairobi', '18', 88),
(57, 'Mombasa', '19', 88),
(58, 'Kisumu', '20', 88),
(59, 'Nakuru', '21', 88),
(60, 'MalindiBaringo', '22', 88),
(61, 'Bomet', '23', 88),
(62, 'Bungoma', '24', 88),
(63, 'Busia', '25', 88),
(64, 'Elgeyo Marakwet', '26', 88),
(65, 'Embu', '27', 88),
(66, 'Garissa', '28', 88),
(67, 'Homa Bay', '29', 88),
(68, 'Isiolo', '30', 88),
(69, 'Kajiado', '31', 88),
(70, 'Kakamega', '32', 88),
(71, 'Kericho', '33', 88),
(72, 'Kiambu', '34', 88),
(73, 'Kilifi', '35', 88),
(74, 'Kirinyaga', '36', 88),
(75, 'Kisii', '37', 88),
(76, 'Kisumu County', '38', 88),
(77, 'Kitui County', '39', 88),
(78, 'Kwale County', '40', 88),
(79, 'Laikipia County', '41', 88),
(80, 'Lamu County', '42', 88),
(81, 'Machakos County', '43', 88),
(82, 'Makueni County', '44', 88),
(83, 'Mandera County', '45', 88),
(84, 'Meru County', '46', 88),
(85, 'Migori County', '47', 88),
(86, 'Marsabit County', '48', 88),
(87, 'Mombasa County', '49', 88),
(88, 'Muranga County', '50', 88),
(89, 'Nairobi County', '51', 88),
(90, 'Nakuru County', '52', 88),
(91, 'Nandi County', '53', 88),
(92, 'Narok County', '54', 88),
(93, 'Nyamira County', '55', 88),
(94, 'Nyandarua County', '56', 88),
(95, 'Nyeri County', '57', 88),
(96, 'Samburu County', '58', 88),
(97, 'Siaya County', '59', 88),
(98, 'Taita Taveta County', '60', 88),
(99, 'Tana River County', '61', 88),
(100, 'Tharaka Nithi County', '62', 88),
(101, 'Trans Nzoia County', '63', 88),
(102, 'Turkana County', '64', 88),
(103, 'Uasin Gishu County', '65', 88),
(104, 'Vihiga County', '66', 88),
(105, 'Wajir County', '67', 88),
(106, 'West Pokot County', '68', 88),
(107, 'England', '69', 187),
(108, 'England-North East', '70', 187),
(109, 'England-North West', '71', 187),
(110, 'Yorkshire and The Humber', '72', 187),
(111, 'England-East Midlands', '73', 187),
(112, 'West Midlands', '74', 187),
(113, 'East of England', '75', 187),
(114, 'London', '76', 187),
(115, 'South West', '77', 187),
(116, 'South East', '78', 187),
(117, 'Central Belt', '79', 187),
(118, 'Scottish Midlands', '80', 187),
(119, 'Scottish Highlands', '81', 187),
(120, 'Scottish Lowlands', '82', 187),
(121, 'Scottish Borders', '83', 187),
(122, 'Galloway', '84', 187),
(123, 'Northern Isles', '85', 187),
(124, 'South West Wales', '86', 187),
(125, 'South Wales', '87', 187),
(126, 'Mid Wales', '88', 187),
(127, 'North Wales', '89', 187),
(128, 'West Wales', '90', 187),
(129, 'Antrim', '91', 187),
(130, 'Amagh', '92', 187),
(131, 'Down', '93', 187),
(132, 'Fermanagh', '94', 187),
(133, 'Londonderry', '95', 187),
(134, 'Tyrone', '96', 187),
(135, 'Alabama', 'Montgomery', 188),
(136, 'Arizona', '98', 188),
(137, 'Alaska', '99', 188),
(138, 'Arkansas', '100', 188),
(139, 'California', '101', 188),
(140, 'Colorado', '102', 188),
(141, 'Connecticut', '103', 188),
(142, 'Delaware', '104', 188),
(143, 'Florida', '105', 188),
(144, 'Georgia', '106', 188),
(145, 'Hawaii', '107', 188),
(146, 'Idaho', '108', 188),
(147, 'Illinois', '109', 188),
(148, 'Indiana', '110', 188),
(149, 'Iowa', '111', 188),
(150, 'Kansas', '112', 188),
(151, 'Kentucky', '113', 188),
(152, 'Louisanna', '114', 188),
(153, 'Maine', '115', 188),
(154, 'Maryland', '116', 188),
(155, 'Massachusetts', '117', 188),
(156, 'Mississippi', '118', 188),
(157, 'Michigan', '119', 188),
(158, 'Missouri', '120', 188),
(159, 'Montana', '121', 188),
(160, 'Nebraska', '122', 188),
(161, 'Nevada', '123', 188),
(162, 'New Hampshire', '124', 188),
(163, 'New Jersey', '125', 188),
(164, 'New Mexico', '126', 188),
(165, 'Newyork', '127', 188),
(166, 'North Carolina', '128', 188),
(167, 'North Dakota', '129', 188),
(168, 'Ohio', '130', 188),
(169, 'Oklahoma', '131', 188),
(170, 'Oregon', '132', 188),
(171, 'Pennsylvania', '133', 188),
(172, 'Rhode Island', '134', 188),
(173, 'South Carolina', '135', 188),
(174, 'South Dakota', '136', 188),
(175, 'Tennessee', '137', 188),
(176, 'Texas', '138', 188),
(177, 'Utah', '139', 188),
(178, 'Vermont', '140', 188),
(179, 'Virginia', '141', 188),
(180, 'Washington D.C', '142', 188),
(181, 'West Virginia', '143', 188),
(182, 'Wisconsin', '144', 188),
(183, 'Wyoming', '145', 188),
(184, 'Emirates of UAE', '146', 186),
(185, 'Abu Dhabi', '147', 186),
(186, 'Dubai', '148', 186),
(187, 'Sharjah', '149', 186),
(188, 'Umm al-Qaiwain', '150', 186),
(189, 'Fujairah', '151', 186),
(190, 'Ajman', '152', 186),
(191, 'Ra’s al-Khaimah', '153', 186);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_name_country_id_unique` (`name`,`country_id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
