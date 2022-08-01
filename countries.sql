-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 03:38 PM
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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capital` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_name`, `capital`) VALUES
(1, 'Afghanistan', 'Afg', 'Kabul'),
(2, 'Albania', 'Alb', 'Tirana'),
(3, 'Algeria', 'Alg', 'Algiers'),
(4, 'Andorra	Andorra la', 'And', 'Vella'),
(5, 'Angola', 'Ang', 'Luanda'),
(6, 'Antigua and Barbuda', 'Ant', 'St. John\'s'),
(7, 'Argentina', 'Arg', 'Buenos Aires'),
(8, 'Armenia', 'Arm', 'Yerevan'),
(9, 'Australia', 'Aus', 'Canberra'),
(10, 'Austria', 'Aust', 'Vienna'),
(11, 'Azerbaijan', 'Aze', 'Baku'),
(12, 'Bahamas', 'Bah', 'Nassau'),
(13, 'Bahrain', 'Bahr', 'Manama'),
(14, 'Bangladesh', 'Ban', 'Dhaka'),
(15, 'Barbados', 'Bar', 'Bridgetown'),
(16, 'Belarus', 'Bel', 'Minsk'),
(17, 'Belgium', 'Belg', 'Brussels'),
(18, 'Belize', 'Belz', 'Belmopan'),
(19, 'Benin', 'Ben', 'Porto Novo'),
(20, 'Bhutan', 'Bhu', 'Thimphu'),
(21, 'Bolivia', 'Bol', 'Sucre'),
(22, 'Bosnia and Herzegovina', 'Bos', 'Sarajevo'),
(23, 'Botswana', 'Bot', 'Gaborone'),
(24, 'Brazil', 'Bra', 'Brasilia'),
(25, 'Brunei', 'Bru', 'Bandar Seri Begawan'),
(26, 'Bulgaria', 'Bul', 'Sofia'),
(27, 'Burkina Faso', 'Burk', 'Ouagadougou'),
(28, 'Burundi', 'Bur', 'Bujumbura'),
(29, 'Cambodia', 'Cmd', 'Phnom Penh'),
(30, 'Cameroon', 'Cam', 'Yaoundé'),
(31, 'Canada', 'Can', 'Ottawa'),
(32, 'Cape Verde', 'Cap', 'Praia'),
(33, 'Central African Republic', 'Cen', 'Bangui'),
(34, 'Chad', 'Cha', 'N\'Djamena'),
(35, 'Chile', 'Chi', 'Santiago'),
(36, 'China', 'Chn', 'Beijing'),
(37, 'Colombia', 'Col', 'Bogota'),
(38, 'Comoros', 'Com', 'Moroni'),
(39, 'Costa Rica', 'Cos', 'San José'),
(40, 'Croatia', 'Cro', 'Zagreb'),
(41, 'Cuba', 'Cub', 'Havana'),
(42, 'Cyprus', 'Cyp', 'Nicosia'),
(43, 'Czech Republic', 'Cze', 'Prague'),
(44, 'Democratic Republic of Congo', 'drc', 'Kinshasa'),
(45, 'Denmark', 'Den', 'Copenagen'),
(46, 'Djibouti', 'Dji', 'Djibouti'),
(47, 'Dominica', 'Dom', 'Roseau'),
(48, 'Dominican Republic', 'Dmr', 'Santo Domingo'),
(49, 'East Timor', 'Eas', 'Dili'),
(50, 'Ecuador', 'Ecu', 'Quito'),
(51, 'Egypt', 'Egy', 'Cairo'),
(52, 'El Salvador	San', 'Els', 'Salvador'),
(53, 'Equatorial Guinea', 'Equ', 'Malabo'),
(54, 'Eritrea', 'Eri', 'Asmara'),
(55, 'Estonia', 'Est', 'Tallinn'),
(56, 'Eswatini', 'Esw', 'Mbabane'),
(57, 'Ethiopia', 'Eth', 'Addis Ababa'),
(58, 'Fiji', 'Fij', 'Suva'),
(59, 'Finland', 'Fin', 'Helsinki'),
(60, 'France', 'Fra', 'Paris'),
(61, 'Gabon', 'Gab', 'Libreville'),
(62, 'Gambia', 'Gam', 'Banjul'),
(63, 'Georgia', 'Geo', 'Tbilisi'),
(64, 'Germany', 'Ger', 'Berlin'),
(65, 'Ghana', 'Gha', 'Accra'),
(66, 'Greece', 'Gre', 'Athens'),
(67, 'Grenada', 'Gnd', 'St. George\'s'),
(68, 'Guatemala', 'Gua', 'Guatemala City'),
(69, 'Guinea', 'Gui', 'Conakry'),
(70, 'Guinea-Bissau', 'Guib', 'Bissau'),
(71, 'Guyana', 'Guy', 'Georgetown'),
(72, 'Haiti', 'Hai', 'Port-au-Prince'),
(73, 'Honduras', 'Hon', 'Tegucigalpa'),
(74, 'Hungary', 'Hun', 'Budapest'),
(75, 'Iceland', 'Ice', 'Reykjavík'),
(76, 'India', 'Ind', 'New Delhi'),
(77, 'Indonesia', 'Idn', 'Jakarta'),
(78, 'Iran', 'Irn', 'Tehran'),
(79, 'Iraq', 'Irq', 'Baghdad'),
(80, 'Ireland', 'Ire', 'Dublin'),
(81, 'Israel', 'Isr', 'Jerusalem'),
(82, 'Italy', 'Ita', 'Rome'),
(83, 'Ivory Coast', 'Ivo', 'Yamoussoukro'),
(84, 'Jamaica', 'Jam', 'Kingston'),
(85, 'Japan', 'Jap', 'Tokyo'),
(86, 'Jordan', 'Jor', 'Amman'),
(87, 'Kazakhstan', 'Kaz', 'Astana'),
(88, 'Kenya', 'Ken', 'Nairobi'),
(89, 'Kiribati', 'Kir', 'Tarawa'),
(90, 'Korea, North', 'nk', 'Pyongyang'),
(91, 'Korea, South', 'sk', 'Seoul'),
(92, 'Kosovo', 'Kos', 'Pristina'),
(93, 'Kuwait', 'Kuw', 'Kuwait City'),
(94, 'Kyrgyzstan', 'Kyr', 'Bishkek'),
(95, 'Laos', 'Lao', 'Vientiane'),
(96, 'Latvia', 'Lat', 'Riga'),
(97, 'Lebanon', 'Leb', 'Beirut'),
(98, 'Lesotho', 'Les', 'Maseru'),
(99, 'Liberia', 'Lib', 'Monrovia'),
(100, 'Libya', 'Lby', 'Tripoli'),
(101, 'Liechtenstein', 'Lie', 'Vaduz'),
(102, 'Lithuania', 'Lit', 'Vilnius'),
(103, 'Luxembourg', 'Lux', 'Luxembourg'),
(104, 'Madagascar', 'Mad', 'Antananarivo'),
(105, 'Malawi', 'Mlw', 'Lilongwe'),
(106, 'Malaysia', 'Mly', 'Kuala Lumpur'),
(107, 'Maldives', 'Mld', 'Malé'),
(108, 'Mali', 'Mal', 'Bamako'),
(109, 'Malta', 'Mlt', 'Valletta'),
(110, 'Marshall Islands', 'Mar', 'Majuro'),
(111, 'Mauritania', 'Mau', 'Nouakchott'),
(112, 'Mauritius', 'Mrt', 'Port Louis'),
(113, 'Mexico', 'Mex', 'Mexico City'),
(114, 'Micronesia', 'Mic', 'Palikir'),
(115, 'Moldova', 'Mol', 'Chisinau'),
(116, 'Monaco', 'Mon', 'Monaco'),
(117, 'Mongolia', 'Mng', 'Ulaanbaatar'),
(118, 'Montenegro', 'Mtg', 'Podgorica'),
(119, 'Morocco', 'Mor', 'Rabat'),
(120, 'Mozambique', 'Moz', 'Maputo'),
(121, 'Myanmar', 'Mya', 'Naypyidaw'),
(122, 'Namibia', 'Nam', 'Windhoek'),
(123, 'Nauru', 'Nau', 'Yaren'),
(124, 'Nepal', 'Nep', 'Kathmandu'),
(125, 'Netherlands', 'Net', 'Amsterdam'),
(126, 'New Zealand', 'nzd', 'Wellington'),
(127, 'Nicaragua', 'Nic', 'Managua'),
(128, 'Niger', 'Nig', 'Niamey'),
(129, 'Nigeria', 'ng', 'Abuja'),
(130, 'North Macedonia', 'nmc', 'Skopje'),
(131, 'Norway', 'Nor', 'Oslo'),
(132, 'Oman', 'Oma', 'Muscat'),
(133, 'Pakistan', 'Pak', 'Islamabad'),
(134, 'Palau', 'Pal', 'Melekeok'),
(135, 'Palestine', 'Plt', 'East Jerusalem'),
(136, 'Panama', 'Pan', 'Panama City'),
(137, 'Papua New Guinea', 'Pap', 'Port Moresby'),
(138, 'Paraguay', 'Par', 'Asunción'),
(139, 'Peru', 'Per', 'Lima'),
(140, 'Philippines', 'Phi', 'Manila'),
(141, 'Poland', 'Pol', 'Warsaw'),
(142, 'Portugal', 'Por', 'Lisbon'),
(143, 'Qatar', 'Qat', 'Doha'),
(144, 'Republic of the Congo', 'Rep', 'Brazzaville'),
(145, 'Romania', 'Rom', 'Bucharest'),
(146, 'Russia', 'Rus', 'Moscow'),
(147, 'Rwanda', 'Rwa', 'Kigali'),
(148, 'Saint Kitts and Nevis', 'Skn', 'Basseterre'),
(149, 'Saint Lucia', 'Sai', 'Castries'),
(150, 'Saint Vincent and the Grenadines', 'Svg', 'Kingstown'),
(151, 'Samoa', 'Sam', 'Apia'),
(152, 'San Marino San', 'San', 'Marino'),
(153, 'São Tomé and Príncipe', 'Stp', 'São Tomé'),
(154, 'Saudi Arabia', 'Sau', 'Riyadh'),
(155, 'Senegal', 'Sen', 'Dakar'),
(156, 'Serbia', 'Ser', 'Belgrade'),
(157, 'Seychelles', 'Sey', 'Victoria'),
(158, 'Sierra Leone', 'Sie', 'Freetown'),
(159, 'Singapore', 'Sin', 'Singapore'),
(160, 'Slovakia', 'Slk', 'Bratislava'),
(161, 'Slovenia', 'Sln', 'Ljubljana'),
(162, 'Solomon Islands', 'Sol', 'Honiara'),
(163, 'Somalia', 'Som', 'Mogadishu'),
(164, 'South Africa', 'Sa', 'Pretoria'),
(165, 'South Sudan', 'Ss', 'Juba'),
(166, 'Spain', 'Spa', 'Madrid'),
(167, 'Sri Lanka', 'Sri', 'Sri Jayawardenapura Kotte'),
(168, 'Sudan', 'Sud', 'Khartoum'),
(169, 'Suriname', 'Sur', 'Paramaribo'),
(170, 'Sweden', 'Swe', 'Stockholm'),
(171, 'Switzerland', 'Swi', 'Bern'),
(172, 'Syria', 'Syr', 'Damascus'),
(173, 'Taiwan', 'Tai', 'Taipei'),
(174, 'Tajikistan', 'Taj', 'Dushanbe'),
(175, 'Tanzania', 'Tan', 'Dodoma'),
(176, 'Thailand', 'Tha', 'Bangkok'),
(177, 'Togo', 'Tog', 'Lomé'),
(178, 'Tonga', 'Ton', 'Nukualofa'),
(179, 'Trinidad and Tobago', 'Tri', 'Port of Spain'),
(180, 'Tunisia', 'Tun', 'Tunis'),
(181, 'Turkey', 'Trk', 'Ankara'),
(182, 'Turkmenistan', 'Tur', 'Ashgabat'),
(183, 'Tuvalu', 'Tuv', 'Funafuti'),
(184, 'Uganda', 'Uga', 'Kampala'),
(185, 'Ukraine', 'Ukr', 'Kiev'),
(186, 'United Arab Emirates', 'uae', 'Abu Dhabi'),
(187, 'United Kingdom', 'uk', 'London'),
(188, 'United States', 'us', 'Washington D.C'),
(189, 'Uruguay', 'Uru', 'Montevideo'),
(190, 'Uzbekistan', 'Uzb', 'Tashkent'),
(191, 'Vanuatu	Port', 'Van', 'Vila'),
(192, 'Vatican City', 'Vat', 'Vatican City'),
(193, 'Venezuela', 'Ven', 'Caracas'),
(194, 'Vietnam', 'Vie', 'Hanoi'),
(195, 'Yemen', 'Yem', 'Sana\'a'),
(196, 'Zambia', 'Zam', 'Lusaka'),
(197, 'Zimbabwe', 'Zim', 'Harare');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`),
  ADD UNIQUE KEY `countries_short_name_unique` (`short_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
