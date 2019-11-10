-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2019 at 09:10 AM
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
(1, 'Žiemos koncertas visai šeimai \"Balta, balta - kur dairais\"', 'Kalėdiniame koncerte visai šeimai skambės šviesiausios melodijos iš kino filmų, miuziklų, kalėdinės dainos, pasakos ir lopšinės.\r\nMuzikinę pasaką kurs – Viktorija Streiča(vokalas), Kristina Siurbytė(vokalas), Akvilė Garbenčiūtė(vokalas), Marius Bučys(gitara, perkusija), Arūnas Šerpytis(klavišiniai).\r\n\r\nKartu su tamsiausiu metų laikotarpiu ateina stebuklo laukimo metas. Vakarai tampa ilgesni ir mes prisiminimuose sugrįžtame į vaikystę, kai močiutė sekdavo pasakas, mama dainuodavo lopšines, o mus apimdavo malonus virpesys belaukiant artėjančių švenčių. Šie pojūčiai, tarsi apgaubianti ir šildanti skraistė, kai tampame pernelyg suaugę ir rimti.\r\nTad kviečiame į baltą kelionę, kurioje, sustabdę laiką, nukeliausime į vaikystės šalį, kurioje viskas buvo taip lengva ir paprasta.'),
(2, 'Rock and lipstick', 'Roko muzika dažnam asocijuojasi su pašėlusiais, tatuiruotais ilgaplaukiais, kurie neturi jokių tabu. Būtent tokių vyrukų muzika šiame koncerte švelniai prabils moters lūpomis. Ši programa tarsi ekskliuzyvinė kelionė, nes žymiausios Metallicos, Queen, Aerosmith, Nirvana, Bon Jovi ir daugelio kt. roko grandų baladės prisikels naujam gyvenimui, joms suteikdama naują, unikalų skambesį.\r\n\r\nAkvilei Garbenčiūtei įgyvendinti jos viziją padeda du puikūs muzikantai.\r\n\r\nĄžuolas Paulauskas – jaunosios kartos džiazo būgnininkas, multiinstrumentalistas, tarptautinių konkursų laureatas, kompozitorius. Ne kartą kaip solistas koncertavęs su simfoniniais orkestrais, o džiazo scenoje muzikavęs su Bobbu Minzeriu, Jukka Linkola, Nabiliu Khemiru  ir kitais tarptautiniu mastu žinomais menininkais. 2019m. Ąžuolas  išleido naujų  savo kompozicijų  albumą  „4“, o festivalyje “Kaunas Jazz 2019“ – tapo metų atlikėju.\r\n\r\nKasparas Šerpytis – jaunosios kartos atlikėjas, respublikinių džiazo ir klasikos konkursų laureatas,  violončelininkas, jaunasis kompozitorius.\r\n\r\nTaigi visus smalsius ir neabejingus kokybiškai muzikai kviečiame pabūti drauge.'),
(3, 'Šviesos misterija', 'Šviesos misterija - tai muzikinė misterija, teatralizuotas koncertas, apjungiantis gyvą vokalą, instrumentinę muziką, išraiškos šokį, teatro elementus, žodžio, poezijos meną, šviesų dailę, video projekcijas į vieną jausminę patyriminę kelionę, savitą garso ir vaizdo išraišką.\r\n\r\nNaujo, šviesaus muzikos skambesio bei daugialypio scenos meno kūryboje susibūrę profesionalai –„Fortūnos“, „Auksinio scenos kryžiaus“ laureatės bei nominantės solistės Kristina Siurbytė, Akvilė Garbenčiūtė bei kiti atveria mitais apipintą gamtos būtybių pasaulį, kviesdami žiūrovus pasinerti į žmogaus kelią, egzistenciją, jo ryšį su gamta bei pačiu savimi paliečiantį skambesį, o mažuosius žiūrovus - mėgautis šviesia skaidria muzika, šokiu, natūralių medžiagų bei augalinių dažų kostiumais praturtinta istorija.\r\n\r\nNetradicinis ir netikėtas muzikos instrumentų derinys - smuikas, koncertinės kanklės, klavišinis instrumentas, gitara, įvairi perkusija, netgi grojimas vandeniu, kontrastuojantys klasikinio ir džiazinio vokalo stiliai sukuria naują, savitą muzikinių kūrinių skambesį ir leidžia Arvo Pärt, Hans Zimmer, Ara Malikian, Philip Glass, Stingo, Michael Jackson, P.Čaikovskio, Z.Bružaitės, K.Mašanausko, V.Kernagio ir kitų kompozitorių kūrinius bei jų motyvus išgirsti kitaip.\r\n\r\nMisterija ypatinga ne tik skirtingų muzikos stilių gijų persipynimais, tai ir muzikinė istorija, paremta senųjų keltų pasakojimų motyvais, kurioje šokio, muzikos ir poezijos žaismės susijungia į vieną ratą.\r\n„Šviesos Misterija“ – tai jaudinanti ir paslaptinga istorija, kurios pagrindinė ašis – trys kontrastingos gamtos dievybės, primenančios mums apie mūsų sąsają su gamta, savimi pačiais, harmonijos praradimą ir kelionę iš naujo atrandant tai, kas iš tikrųjų kvepia namais – mūsų Žemei, gamtai, mūsų pačių esačiai ar visoms mitinėms gamtos būtybėms, kuriomis tikėjimas vis dar rusena mūsų visų pasąmonėje. \r\n\r\nGamtos būtybių balsais skambės:\r\n       Kristina Siurbytė     (klasikinis vokalas)\r\n       Akvilė Garbenčiūtė  (džiazinis vokalas)\r\nŠviesos burtus muzikos garsais perteiks:\r\n      Ingrida Spalinskaitė (koncertinės kanklės/ perkusija)\r\n       Milda Kazakevičiūtė (smuikas/ klavišiniai)\r\n       Marius Bučys (gitara/ perkusija)\r\n      Pagal klasikų ir šiuolaikinių kompozitorių muziką.\r\nBurtus šokio judesiais kurs:\r\n        Viltė Kazlauskaitė (šokis)\r\n\r\n         Tautvydas Stanelis (projekcijų režisierius)\r\n         Erikas Mineikis (garso režisierius)\r\n         Remigijus Januška (šviesų dailininkas)\r\n         Viltė Kazlauskaitė (kostiumų dailininkė)'),
(5, 'Teatralizuotas koncertas \"Pasiutusios meilės artelė\"', 'Daugybė miuziklo ir džiazo kūrinių kalba apie tą patį – meilę, kad ir kokia ji būtų. Neišsemiamos meilės patirtys, gausybė melodijų, poezijos ir meilės dramų – tai amžinas žmogaus bandymo suprasti save menas.\r\n\r\nDvi Auksinių scenos kryžių savininkės – miuziklo ir džiazo vokalo meistrės aktorės Viktorija Streiča ir Akvilė Garbenčiūtė-Bučienė – kviečia žaismingam pokalbiui amžinąja tema. Gyva muzika, teatrališka žaismė, aistringos spalvos scenoje ir skirtingiausių žanrų dramatizmas „Pasiutusios meilės artelėje“ suteikia progą pasimėgauti mūsų pačių prisiminimais ir patirtimis Amūro strėlių lauke.'),
(11, 'Mažieji MIUZIKLO meistrai', 'Gražiausių miuziklų dainas gyvai mamoms ir jas atlydėjusiems asmenims atliks mažieji miuziklo meistrai - patys talentingiausi vaikai, kuriems talkins jau užaugę vaikai - scenos profesionalai.'),
(12, 'Muzikinis spektaklis \"Nutylėtos išpažintys\"', 'Vėlų vakarą, užgesus rampų šviesoms, susitinka vienišos artistų sielos.\r\nJos tokios skirtingos, kaip keturi metų laikai…\r\nKiekviena su savo istorija ir išpažintimi…\r\n\r\n \r\nDalyvauja:\r\n\r\nDainininkės: Akvilė Garbenčiūtė, Kristina Siurbytė, Viktorija Streiča, Ieva Vaznelytė'),
(13, 'Koncertas \"Operos ir miuziklo susitikimas\"', '\"Operos ir Miuziklo susitikimas\" - tai dviejų dalių koncertas, kurį sudaro arijos iš operų ir miuziklų. Koncerto atlikėjai yra profesionalūs dainininkai ir muzikantai, dainuojantis spektakliuose Lietuvos muzikiniuose teatruose. \r\n\r\nKoncerte skambės arijos iš G. Kuprevičiaus, G. Puccini, C. M. Schönberg, G. Donizetti, G. Gershwin, A. L. Webber bei kitų garsių kompozitorių miuziklų ir operų.\r\n\r\nKoncerte dalyvauja:\r\n\r\n\r\nSandra Lebrikaitė. Sopranas. \r\nJurgis Jarašius. Tenoras. \r\n \r\nAkvilė Garbenčiūtė-Bučienė. Sopranas. \r\n \r\nGabrielė Bielskytė. Mecosopranas. '),
(14, 'Miuziklų vakaras ', 'Pučiamųjų instrumentų orkestras „Ąžuolynas“ pristato miuziklų vakarą. Orkestro viešnios, solistės, Dagna Kondratavičiūtė, Akvilė Garbenčiūtė – Bučienė, Nombeko Augustė Khotseng klausytojus ves gerai žinomų XX amžiaus miuziklų takais.\r\n\r\nKoncerte skambės melodijos iš miuziklų „Jėzus Kristus – super žvaigždė“, „Evita“, „Katės“, „Merė Popins“. Šalia jų, „Ąžuolynas“ atliks tokius gerai žinomus kūrinius kaip „Don‘t cry for me Argentina“ iš miuziklo „Evita“, Florenco ir Svetlanos duetas iš miuziklo „Šachmatai“, „Yo Soy Maria“ iš tango operitos „Maria de Buenos Aires“ ir kiti.'),
(15, 'Kvapų naktis', 'Vaizdo ir garso projekcija „Gyvenimas Aukštosios Fredos dvare“. Dalyvauja Egidijus Bavikinas, Kristina Siurbytė, Akvilė Garbenčiūtė.\r\n\r\n');

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
(9, 'astapasta@test.lt'),
(10, '2@2.lt');

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
(45, 'img/pasiutusi.jpg', 'img/pasiutusi2.jpg', '', '', '', '5'),
(46, 'img/miuziklomeistrai.jpg', '', '', '', '', '11'),
(47, 'img/nutyletosispazintys.jpg', '', '', '', '', '12'),
(48, 'img/operairmiuziklas.jpg', '', '', '', '', '13'),
(49, 'img/azuolynas.jpg', '', '', '', '', '14'),
(50, 'img/kvapunaktis.jpg', 'img/kvapunaktis2.jpg', 'img/kvapunaktis3.jpg', 'img/kvapunaktis1.jpg', '', '15');

-- --------------------------------------------------------

--
-- Table structure for table `renginiai`
--

CREATE TABLE `renginiai` (
  `id` int(10) UNSIGNED NOT NULL,
  `metai` date NOT NULL,
  `valanda` time NOT NULL,
  `vieta` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `bilietai` varchar(160) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `aprasymo_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renginiai`
--

INSERT INTO `renginiai` (`id`, `metai`, `valanda`, `vieta`, `bilietai`, `aprasymo_id`) VALUES
(1, '2018-01-07', '17:00:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', 'https://www.tiketa.lt', 1),
(3, '2017-12-27', '12:00:00', 'Teatro klubas, Vilniaus g.22, Kaunas', 'tiketa.lt', 1),
(5, '2017-12-17', '14:00:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', 'https://www.tiketa.lt', 1),
(9, '2019-05-02', '12:00:00', 'COMPENSA koncertų salė, Kernavės g. 84, Vilnius', '', 11),
(10, '2017-06-10', '17:00:00', 'Birrštono kultūros centras, Jaunimo g. 4, Birštonas', '', 12),
(11, '2017-06-11', '17:00:00', 'Raudondvario dvaro menų inkubatorius', '', 12),
(12, '2017-09-16', '17:00:00', 'Gelgaudiškio dvaras, Parko g. 5, Šakių r. sav.', '', 12),
(13, '2017-09-26', '18:00:00', 'Raudondvario pilies baltoji salė, Pilies takas 1, Raudonvaris', '', 13),
(14, '2015-12-05', '17:00:00', 'Kauno valstybinė filharmonija, E. Ožeškienės g. 12, Kaunas', '', 14),
(16, '2019-07-19', '22:45:00', 'Kauno Botanikos sodas, Ž. E. Žilibero g. 4, Kaunas', '', 15),
(17, '2017-07-18', '21:00:00', 'Ž. E. Žilibero g. 4, Kaunas', '', 15),
(18, '2015-12-27', '16:00:00', '\r\nRaudondvario dvaro menų inkubatorius\r\nPilies takas 1, 54127 Raudondvaris', '', 3),
(19, '2016-09-30', '18:00:00', '\r\nKauno valstybinis lėlių teatras\r\nLaisvės al. 87A, LT-44297 Kaunas', '', 3),
(20, '2016-11-09', '18:00:00', '\r\nKauno valstybinis lėlių teatras\r\nLaisvės al. 87A, LT-44297 Kaunas', '', 3),
(21, '2017-04-17', '17:00:00', '\r\nKauno valstybinis lėlių teatras\r\nLaisvės al. 87A, LT-44297 Kaunas', '', 3),
(22, '2018-01-14', '17:00:00', 'Teatro klubas, Vilniaus g.22, kaunas', '', 1),
(23, '2016-11-10', '18:30:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', '', 5),
(24, '2016-03-08', '18:00:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', '', 5),
(25, '2015-12-17', '18:00:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', '', 5),
(26, '2015-04-15', '18:00:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', '', 5),
(27, '2014-12-29', '18:00:00', 'Teatro klubas, Vilniaus g.22, Kaunas', '', 5),
(28, '2019-12-01', '18:00:00', 'Raudondvario pilies baltoji salė, Pilies takas 1, Raudonvaris', 'https://www.bilietai.lt/lit/renginiai/koncertai/rock--lipstick--raudondvaris-297466/?fbclid=IwAR2RsjvDiAL1-ZioRkjd8DqHVP2IF1YruMS24dPHTnpkJsL-QYDM4gg8Q4c', 2),
(29, '2019-12-08', '12:00:00', 'Teatro klubas, Vilniaus g. 22, Kaunas', 'https://www.tiketa.lt/LT/____balta_balta__kur_dairais_____17759?fbclid=IwAR2NS7fEPipAcABT7CleYf0MzJZLCCHiPbt7tsUeOO17AthIcGXoDIKUy88', 1),
(30, '2019-12-13', '18:00:00', 'Raudondvario pilies baltoji salė, Pilies takas 1, Raudonvaris', '', 1),
(31, '2019-12-29', '17:00:00', 'Šv.Sakramento bažnyčia, Vilniaus g. 31, Kaunas', '', 1),
(32, '2020-03-01', '19:00:00', 'Šv.Kotrynos bažnyčia, Vilniaus g.30, Vilnius', 'https://www.bilietai.lt/lit/renginiai/koncertai/rock--lipstick--vilnius-297460/?fbclid=IwAR17iOwuqouxIacmLp2tYq9abhr-5OjWJB6sG3lZ0DhS-x2bteEsBB1QTt0', 2);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `naujienlaiskis`
--
ALTER TABLE `naujienlaiskis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nuotraukos`
--
ALTER TABLE `nuotraukos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `renginiai`
--
ALTER TABLE `renginiai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `uzklausos`
--
ALTER TABLE `uzklausos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
