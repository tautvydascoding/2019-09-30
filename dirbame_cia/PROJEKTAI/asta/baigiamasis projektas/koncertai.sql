-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2019 at 01:22 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koncertai`
--

-- --------------------------------------------------------

--
-- Table structure for table `koncerto_apras`
--

CREATE TABLE `koncerto_apras` (
  `id` int(10) UNSIGNED NOT NULL,
  `pavadinimas` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `aprasymas` varchar(10000) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koncerto_apras`
--

INSERT INTO `koncerto_apras` (`id`, `pavadinimas`, `aprasymas`) VALUES
(1, 'Balta, balta, kur dairais...', 'Ziemos koncertas visai seimai'),
(2, 'Rock and lipstick', 'Svelnioji roko puse'),
(3, 'Šviesos misterija', 'Šviesus, grazus, idomus ir visoks kitoks'),
(4, 'Šviesos misterija', 'Šviesus, grazus, idomus ir visoks kitoks'),
(5, 'Pasiutusios meilės artelė', 'Raudonais siūlais susius Jūsų dainas');

-- --------------------------------------------------------

--
-- Table structure for table `naujienlaiskis`
--

CREATE TABLE `naujienlaiskis` (
  `id` int(10) UNSIGNED NOT NULL,
  `elpastas` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `naujienlaiskis`
--

INSERT INTO `naujienlaiskis` (`id`, `elpastas`) VALUES
(1, ''),
(2, 'aaa@fff.lt'),
(3, 'aaa@fff.lt'),
(4, 'backback@gmail.com'),
(5, 'backback@gmail.com'),
(6, 'qqqwww@dll.com'),
(7, 'sdsfsf@fff.com'),
(8, 'praeitas@sdsdsd.com'),
(9, 'astapasta@test.lt');

-- --------------------------------------------------------

--
-- Table structure for table `nuotraukos`
--

CREATE TABLE `nuotraukos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nuotrauka1` varchar(50) NOT NULL,
  `nuotrauka2` varchar(50) NOT NULL,
  `nuotrauka3` varchar(50) NOT NULL,
  `nuotrauka4` varchar(50) NOT NULL,
  `nuotrauka5` varchar(50) NOT NULL,
  `koncerto_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nuotraukos`
--

INSERT INTO `nuotraukos` (`id`, `nuotrauka1`, `nuotrauka2`, `nuotrauka3`, `nuotrauka4`, `nuotrauka5`, `koncerto_id`) VALUES
(1, 'img/balta1.jpg', 'img/balta2.jpg', 'img/balta3.jpg', '', '', '1'),
(2, 'img/rock1.jpg', 'img/rock2.jpg', '', '', '', '2'),
(45, 'img/pasiutusi.jpg', 'img/pasiutusi2.jpg', '', '', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `renginiai`
--

CREATE TABLE `renginiai` (
  `id` int(10) UNSIGNED NOT NULL,
  `metai` date NOT NULL,
  `valanda` time NOT NULL,
  `vieta` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `bilietai` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `aprasymo_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renginiai`
--

INSERT INTO `renginiai` (`id`, `metai`, `valanda`, `vieta`, `bilietai`, `aprasymo_id`) VALUES
(1, '2018-12-25', '12:00:00', 'Filharmonija', 'https://www.tiketa.lt', 1),
(2, '2019-12-01', '18:00:00', 'Raudondvaris', 'bilietai.lt', 2),
(3, '2019-12-27', '12:00:00', 'Menininku namai', 'tiketa.lt', 1),
(4, '2020-03-01', '18:00:00', 'Sv.Kotrynos baznycia', 'bilietai.lt', 2),
(5, '2020-02-25', '14:00:00', 'Muzikinis teatras', 'https://www.tiketa.lt', 1),
(6, '2020-01-31', '12:59:00', 'Kaunas', 'https://www.tiketa.lt', 2),
(7, '2019-10-17', '01:01:00', 'Kaunas', 'https://www.tiketa.lt', 1),
(8, '2021-02-02', '01:01:00', 'operosteatras', 'https://www.tiketa.lt', 5);

-- --------------------------------------------------------

--
-- Table structure for table `uzklausos`
--

CREATE TABLE `uzklausos` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `elpastas` varchar(30) NOT NULL,
  `zinute` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzklausos`
--

INSERT INTO `uzklausos` (`id`, `vardas`, `elpastas`, `zinute`) VALUES
(1, 'Saulius', 'backback@gmail.com', 'vamskdj'),
(2, '', 'aaa@fff.lt', 'Labas labas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koncerto_apras`
--
ALTER TABLE `koncerto_apras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naujienlaiskis`
--
ALTER TABLE `naujienlaiskis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuotraukos`
--
ALTER TABLE `nuotraukos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renginiai`
--
ALTER TABLE `renginiai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzklausos`
--
ALTER TABLE `uzklausos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koncerto_apras`
--
ALTER TABLE `koncerto_apras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `naujienlaiskis`
--
ALTER TABLE `naujienlaiskis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nuotraukos`
--
ALTER TABLE `nuotraukos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `renginiai`
--
ALTER TABLE `renginiai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `uzklausos`
--
ALTER TABLE `uzklausos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
