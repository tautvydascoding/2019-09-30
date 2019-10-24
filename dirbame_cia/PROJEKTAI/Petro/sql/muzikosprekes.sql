-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2019 at 01:09 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzikosprekes`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) DEFAULT NULL,
  `prekes_id` int(11) DEFAULT NULL,
  `img_small` varchar(255) NOT NULL,
  `img_big` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `prekes_id`, `img_small`, `img_big`) VALUES
(1, 1, 'gitar1S.png', 'gitar1.png'),
(2, 2, 'gitar2S.jpg', 'gitar2.jpg'),
(3, 3, 'gitar3S.png', 'gitar3.png'),
(4, 4, 'gitar4S.png', 'gitar4.png'),
(5, 5, 'gitar5S.jpg', 'gitar5.jpg'),
(6, 6, 'elgit1S.jpg', 'elgit1.jpg'),
(7, 7, 'elgit2S.png', 'elgit2.png'),
(8, 8, 'elgit3S.jpg', 'elgit3.jpg'),
(9, 9, 'elgit4S.jpg', 'elgit4.jpg'),
(10, 10, 'bosgit1S.jpg', 'bosgit1.jpg'),
(11, 11, 'bosgit2S.jpg', 'bosgit2.jpg'),
(12, 12, 'bosgit3S.jpg', 'bosgit3.jpg'),
(13, 13, 'mus1S.jpg', 'mus1.jpg'),
(14, 14, 'mus2S.jpg', 'mus2.jpg'),
(15, 15, 'mus3S.jpg', 'mus3.jpg'),
(16, 16, 'mus4S.jpg', 'mus4.jpg'),
(17, 17, 'mus5S.jpg', 'mus5.jpg'),
(18, 18, 'sint1S.jpg', 'sint1.jpg'),
(19, 19, 'sint2S.jpg', 'sint2.jpg'),
(20, 20, 'sint3S.jpg', 'sint3.jpg'),
(21, 21, 'sint4S.jpg', 'sint4.jpg'),
(22, 22, 'sint5S.png', 'sint5.png'),
(30, 3, 'Brilius', 'aeewwef');

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(10) NOT NULL,
  `kategorija` varchar(30) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `aprasymas` varchar(1000) NOT NULL,
  `kaina` float(10,2) DEFAULT NULL,
  `nuolaida` bigint(11) DEFAULT NULL,
  `pozicija` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kiekis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `kategorija`, `pavadinimas`, `aprasymas`, `kaina`, `nuolaida`, `pozicija`, `data`, `kiekis`) VALUES
(1, 'klasik_gitara', 'Alvarez AD30', 'Series: Alvarez Artist;  Top Wood: Solid A+ Sitka Spruce;                        Back & Sides Wood: Mahogany; Shape: Dreadnought;                         Neck: Mahogany, 50/50 Semi gloss finish', 269.00, 0, 1, '2019-10-16 20:32:34', 5),
(2, 'klasik_gitara', 'Alvarez AD70SB Akustine gitara', 'Series: Alvarez Artist Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany', 412.71, 0, 2, '2019-10-21 13:46:01', 3),
(3, 'klasik_gitara', 'Alvarez MDA66SHB akustine gitara', ' Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany', 589.00, 0, 3, '2019-10-21 13:48:18', 7),
(4, 'klasik_gitara', 'Epiphone Hummingbird Artist Ebony akustine gitara', ' Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany', 199.00, 0, 4, '2019-10-21 13:48:29', 12),
(5, 'klasik_gitara', 'Epiphone Hummingbird Pro Faded Cherry Burst elektro-acoustic', ' Top Wood: Solid A+ Sitka Spruce Back & Sides Wood: Rosewood Shape: Dreadnought Neck: Mahogany', 589.00, 0, 5, '2019-10-21 13:48:38', 4),
(6, 'el_gitara', 'Charvel DC1ST Trans Red Elektrine gitara', 'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware', 607.91, 0, 1, '2019-10-21 14:04:19', 13),
(7, 'el_gitara', 'Charvel DX1FR Flat Black Elektrine gitara', 'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware', 692.19, 0, 2, '2019-10-21 14:04:39', 4),
(8, 'el_gitara', 'Encore E2SB Elektrine gitara', 'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware', 289.00, 0, 3, '2019-10-21 14:04:56', 8),
(9, 'el_gitara', 'Edwards E-MA-100SD VHB Elektrine gitara', 'Double cutaway Mahogany body; Trans Red finish Mahogany Through-Body Fast Neck with Tilt-Back Scarf Joint Headstock EMG 81/85 humbucking pickups Black Nickel hardware', 926.49, 0, 4, '2019-10-21 14:05:07', 11),
(10, 'bass_gitara', 'Fender Nate Mendel Precision Bass RW CAR Bosine gitara', 'Ash body with maple neck and rosewood fretboard Seymour Duncan Quarter Pound single-coil pickup for killer low end Lightly aged nitrocellulose lacquer finish', 1067.00, 0, 1, '2019-10-21 14:13:50', 3),
(11, 'bass_gitara', 'Fender Limited Edition Sandblasted P Bass Sapphire Blue Bosine gitara', 'Ash body with maple neck and rosewood fretboard Seymour Duncan Quarter Pound single-coil pickup for killer low end Lightly aged nitrocellulose lacquer finish', 1269.00, 0, 2, '2019-10-21 14:14:02', 6),
(12, 'bass_gitara', 'Fender Player Series Jaguar Bass PF SGM Bosine gitara', 'Ash body with maple neck and rosewood fretboard Seymour Duncan Quarter Pound single-coil pickup for killer low end Lightly aged nitrocellulose lacquer finish', 889.89, 0, 3, '2019-10-21 14:14:11', 2),
(13, 'musamieji', 'Alesis DM Lite Drum kit', 'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4\" jack outputs, 1x stereo 1/8\" jack aux-in, stereo 1/8\" jack headphones', 325.00, 0, 1, '2019-10-21 14:27:35', 4),
(14, 'musamieji', 'Alesis DM6 Drum kit', 'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4\" jack outputs, 1x stereo 1/8\" jack aux-in, stereo 1/8\" jack headphones', 489.46, 0, 2, '2019-10-21 14:27:44', 2),
(15, 'musamieji', 'DW Performance 18x22 bosinis būgnas', 'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4\" jack outputs, 1x stereo 1/8\" jack aux-in, stereo 1/8\" jack headphones', 307.46, 0, 3, '2019-10-21 14:27:53', 5),
(16, 'musamieji', 'Gretsch Catalina Jazz 4PC W18 SN būgnų komplektas', 'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4\" jack outputs, 1x stereo 1/8\" jack aux-in, stereo 1/8\" jack headphones', 1257.89, 0, 4, '2019-10-21 14:28:01', 7),
(17, 'musamieji', 'Yamaha YV3910M vibrofonas 3.5 ooktavų su motoru', 'DM Lite E-Drum Set for beginners, DM Lite Drummodule with 200 sounds, 10 drumkits, 30 songs, coaching-feature, LED-illumined drum and cymbal pads als optisches Feedback für Lernmodi, 2x mono 1/4\" jack outputs, 1x stereo 1/8\" jack aux-in, stereo 1/8\" jack headphones', 1050.89, 0, 5, '2019-10-21 14:28:11', 2),
(18, 'sintezatoriai', 'Korg Kronos 2-61 sintezatorius', '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8\" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai', 2749.00, 0, 1, '2019-10-21 14:37:31', 4),
(19, 'sintezatoriai', 'Korg Microkorg XL sintezatorius', '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8\" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai', 318.29, 0, 2, '2019-10-21 14:37:45', 5),
(20, 'sintezatoriai', 'Korg X50 sintezatorius', '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8\" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai', 578.95, 0, 3, '2019-10-21 14:37:54', 3),
(21, 'sintezatoriai', 'Nord Lead 4 sintezatorius', '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8\" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai', 1839.00, 0, 4, '2019-10-21 14:38:04', 6),
(22, 'sintezatoriai', 'Waldorf KB37 sintezatorius', '61 klavišo pusiau- pasunkinta klaviatūra Solid state vidinis diskinis kaupiklis 8\" spalvotas liečiamas ekranas 4 krypčių vairalazdė. 9 garso moduliai', 789.00, 0, 5, '2019-10-21 14:38:17', 4),
(24, '3', 'Jonas', 'aeewwef', 43.00, 0, 3, '2019-10-22 12:59:39', 50);

-- --------------------------------------------------------

--
-- Table structure for table `prekes_kategorija`
--

CREATE TABLE `prekes_kategorija` (
  `kategorijos_id` int(10) UNSIGNED NOT NULL,
  `kategorija` varchar(255) NOT NULL,
  `pavadinimas` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `pozicija` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes_kategorija`
--

INSERT INTO `prekes_kategorija` (`kategorijos_id`, `kategorija`, `pavadinimas`, `foto`, `pozicija`) VALUES
(1, 'klasik_gitara', 'Klasikines gitaros', 'clasicGuitars.jpg', 1),
(2, 'el_gitara', 'Elektrines gitaros', 'elGuitars.jpg', 2),
(3, 'bass_gitara', 'Bosines gitaros', 'bassGuitars.jpg', 3),
(4, 'sintezatoriai', 'Sintezatoriai', 'piano.jpg', 4),
(5, 'musamieji', 'Musamieji', 'drums.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prekes_kategorija`
--
ALTER TABLE `prekes_kategorija`
  ADD PRIMARY KEY (`kategorijos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prekes_kategorija`
--
ALTER TABLE `prekes_kategorija`
  MODIFY `kategorijos_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
