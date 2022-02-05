-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 03:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teretanadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_grupa` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `program_opis` text COLLATE utf8_unicode_ci NOT NULL,
  `program_cena` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `teretana_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_grupa`, `program_opis`, `program_cena`, `teretana_id`) VALUES
(16, 'Tae Bo', '<p><strong>Tae Bo</strong>&nbsp;is a total body fitness system that incorporates&nbsp;<a href=\"https://en.wikipedia.org/wiki/Martial_arts\">martial arts</a>&nbsp;techniques such as kicks and punches, which became quite popular in the 1990s. It was developed by American&nbsp;<a href=\"https://en.wikipedia.org/wiki/Taekwondo\">taekwondo</a>&nbsp;practitioner&nbsp;<a href=\"https://en.wikipedia.org/wiki/Billy_Blanks\">Billy Blanks</a><a href=\"https://en.wikipedia.org/wiki/Tae_Bo#cite_note-nyt-1\">[1]</a>&nbsp;and was one of the first &quot;cardio-boxing&quot; programs to enjoy commercial success.[<em><a href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\">citation needed</a></em>]&nbsp;Such programs use the motions of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Martial_arts\">martial arts</a>&nbsp;at a rapid pace designed to promote&nbsp;<a href=\"https://en.wikipedia.org/wiki/Physical_fitness\">fitness</a>.<a href=\"https://en.wikipedia.org/wiki/Tae_Bo#cite_note-Tae-Bo_or_Not_Tae-Bo-2\">[2]</a>&nbsp;The name Tae Bo is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Portmanteau\">portmanteau</a>&nbsp;of&nbsp;<strong>tae</strong>&nbsp;kwon do and&nbsp;<strong>bo</strong>xing.<a href=\"https://en.wikipedia.org/wiki/Tae_Bo#cite_note-3\">[3]</a><a href=\"https://en.wikipedia.org/wiki/Tae_Bo#cite_note-4\">[4]</a><a href=\"https://en.wikipedia.org/wiki/Tae_Bo#cite_note-5\">[5]</a>&nbsp;Furthermore, it is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bacronym\">bacronym</a>&nbsp;for:</p><ul><li><em><strong>T</strong>otal commitment to whatever you do</em></li><li><em><strong>A</strong>wareness of yourself and the world</em></li><li><em><strong>E</strong>xcellence, the truest goal in anything you do</em></li><li><em>(the)&nbsp;<strong>B</strong>ody as a force for total change</em></li><li><em><strong>O</strong>bedience to your will and your true desire for change</em></li></ul>', '120e', 1),
(22, 'ZUMBA', '<p>Zumba jednostavno ulazi pod kozu, na treningu se izbacuje sva negativna energija i sa treninga se izlazi sa osmehom uz recenicu: &quot;Moram da dodjem ponovo&quot;. Osecaj na treningu ja kao da ste u klubu gde djuskate uz dobre latino ritmove, i nemate osecaj bilo kakvog napora. Dobar trening sadrzi osim dobre muzike i koreografija: osmeh vezbaca, buku (dosta buke) koju naravno proizvode vezbaju?i, dobru energiju. Zakljucak: zumba je sve samo ne dosadan aerobic trening, zumba je program gde se uz zabavu trose kalorije, na zumba treningu vam radi svaki misic&nbsp;a da to ni ne osetite.</p><p>Zato sada spremite se za trening, ponesite osmeh i zumbajte. Za dobar osecaj i dobru energiju ne brinite to dolazi u paketu sa zumba treningom. Dodjite da zumbamo zajedno, dodjite i osetite zumba caroliju.</p>', 'Pre podne do 15:30	Celog dana	Pre podne do 15:30	Celodnevni ', 3),
(23, 'MIX AEROBIK', '<p>Mix Aerobic je dinamican i zabavan fitnes program koji ?e vam omoguciti da u 60 minuta sagorite veliki broj kalorija bez osecaja iscrpljenosti koji se javlja posle mnogih kardio programa. Svaki trening je drugacije osmisljen i time spre?ava rutinu i jednolicnost. Upravo to mu omogucava kombinacija razlicitih fitnes programa: klasican aerobik, hi-low, tai bo, latino, work out, pilates, yoga... sto i jeste sustina MIX AEROBIKA. Upravo zbog toga ovo i jeste najzastupljeniji vid grupnog treninga kod nas.</p><p>Obavezan deo casa jeste zagrevanje citave muskulature odakle se lagano prelazi u kardio blok koji moze biti koreografisan ili osmisljen kao hi impact trening sa skokovima, poskocima i trcanjem u mestu. Na treninzima se koriste i rekviziti poput traka, lopti, tegi?a kako bi se dodatno angazovali mi&scaron;i?i, a u odredjenim vezbama se koristi samo sopstvena tezina sto dovodi do postizanja optimalnih rezultata za vrlo kratko vreme. Ovaj fitnes program je namenjen kako mladjim zdravim osobama, tako i zdravim aktivnim osobama srednjih godina, dok je intenzitet MIX AEROBIKA prilagodjen grupi koja se trenira uz modifikaciju pokreta prilago?enih novim cclanovima koji polako ulaze u formu.</p><p>Jedan trening vredi vi&scaron;e od hiljadu reci, zato vas ATHLETICS GYM poziva da do?ete na besplatan probni trening i da se u dobroj atmosferi i uz odlicnu muziku zabavite i dobro oznojite.</p>', 'Rekreacija i korekcija	Redukcija Rekreacija do 15:30	Celog d', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teretana`
--

CREATE TABLE `teretana` (
  `teretana_id` int(11) NOT NULL,
  `teretana_naziv` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teretana`
--

INSERT INTO `teretana` (`teretana_id`, `teretana_naziv`) VALUES
(1, 'EthnoGym'),
(3, 'AtleticGym'),
(4, 'GreenGym'),
(6, 'OpenGym'),
(7, 'Sportska akademija Kocovic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`),
  ADD KEY `teretana_id` (`teretana_id`),
  ADD KEY `teretana_id_2` (`teretana_id`),
  ADD KEY `teretana_id_3` (`teretana_id`);

--
-- Indexes for table `teretana`
--
ALTER TABLE `teretana`
  ADD PRIMARY KEY (`teretana_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teretana`
--
ALTER TABLE `teretana`
  MODIFY `teretana_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`teretana_id`) REFERENCES `teretana` (`teretana_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
