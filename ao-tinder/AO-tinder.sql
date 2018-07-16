-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 11 jul 2018 om 23:11
-- Serverversie: 5.5.60-0+deb8u1
-- PHP-versie: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `AO-tinder`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `AOT_swiping`
--

CREATE TABLE IF NOT EXISTS `AOT_swiping` (
`unique_id` int(11) NOT NULL,
  `id_swiper` smallint(6) NOT NULL,
  `id_swiped` smallint(6) NOT NULL,
  `liked` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `AOT_swiping`
--

INSERT INTO `AOT_swiping` (`unique_id`, `id_swiper`, `id_swiped`, `liked`) VALUES
(1, 1, 2, 1),
(2, 1, 4, 0),
(3, 1, 3, 1),
(4, 1, 5, 1),
(5, 2, 4, 1),
(6, 2, 1, 0),
(7, 2, 3, 0),
(8, 2, 5, 1),
(9, 6, 4, 1),
(10, 6, 1, 1),
(11, 6, 2, 1),
(12, 6, 5, 0),
(13, 6, 3, 0),
(14, 2, 7, 1),
(15, 2, 6, 1),
(16, 7, 8, 1),
(17, 7, 2, 1),
(18, 7, 3, 1),
(19, 7, 5, 1),
(20, 7, 6, 1),
(21, 7, 1, 1),
(22, 7, 4, 1),
(23, 7, 9, 1),
(24, 1, 7, 1),
(25, 1, 8, 0),
(26, 1, 6, 0),
(27, 1, 9, 1),
(28, 5, 3, 0),
(29, 5, 2, 1),
(30, 5, 1, 0),
(31, 5, 9, 1),
(32, 5, 7, 1),
(33, 5, 8, 1),
(34, 5, 6, 1),
(35, 5, 4, 1),
(36, 10, 8, 0),
(37, 10, 4, 0),
(38, 10, 7, 0),
(39, 10, 3, 0),
(40, 10, 2, 0),
(41, 10, 5, 0),
(42, 10, 6, 0),
(43, 10, 9, 0),
(44, 10, 1, 0),
(45, 5, 10, 1),
(46, 11, 9, 0),
(47, 11, 4, 0),
(48, 11, 5, 1),
(49, 11, 8, 0),
(50, 11, 7, 1),
(51, 11, 1, 1),
(52, 11, 2, 1),
(53, 11, 10, 0),
(54, 11, 3, 0),
(55, 11, 6, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `AOT_users`
--

CREATE TABLE IF NOT EXISTS `AOT_users` (
`id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `token` text NOT NULL,
  `phone` tinyint(4) NOT NULL,
  `language` varchar(50) NOT NULL,
  `pref_gender` varchar(1) NOT NULL,
  `desc` text NOT NULL,
  `prof_made` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `AOT_users`
--

INSERT INTO `AOT_users` (`id`, `email`, `password`, `name`, `birthday`, `gender`, `verified`, `token`, `phone`, `language`, `pref_gender`, `desc`, `prof_made`) VALUES
(1, 'remcohanenburg@hotmail.com', '12e7d73388f9b889b1e59642aee80007658a8b3041bc6b5f52cfc5e88c84b04dff67a74e05eb31280ff609177bb27c6093df4d41ebfdf5be8112220f85ae84d0ce4', 'Remco Hanenburg', '1999-02-21', 'm', 1, 'ac64ed4676640280bc3fb5ba386755e28bb73119', 3, 'Dutch', 'm', '', 1),
(2, 'niekboomsma@live.nl', '22cdb2e1dfc734a57ea4cc604d00127dde6287786d174f7bc9ffd3f0af1b1fbbee2', 'Njek Boom', '6666-06-06', 'm', 1, '39f28f1d8442e59d57f528ce00e344b9392f28c2', 127, 'dutch / english', 'm', 'i hate everthing', 1),
(3, 'LOL@LIVE.NL', '45f7b376182c5f2ff9184399190fe5a8c7a8ce0344e8aa3ed43c12aeceaca08e67d', 'Gago KING', '1999-10-04', '', 1, '6b621861d33484e99dcd2b3206bf3ae2fa7b9c8a', 0, '', '', '', 0),
(4, '123@live.nl', '40ba16d7fcd48ced7b612ff2c35d78241eb89a752eff2931647a32c2c3c22f8d747', '12', '0000-00-00', '', 1, '2d5852fd154016e179ba89d6d306f5a1ffb4eec9', 0, '', '', '', 0),
(5, 'sexy@girl.com', '14bcb6a4834af28cf89d048819e8e136a1a087ad4d7', 'SexyGirlxxx69 (Niet Ã‰toine)', '1960-07-06', 'm', 1, 'fa9adfce698a7b2328a6255d27ba8c7646b1764d', 3, 'Ass', 'm', '', 1),
(6, 'dickhead@gmail.com', '30f8943ea4c', 'Dickhead', '2001-09-01', 'm', 1, 'ec953bd73fa746256f1ee3fec35e1d8b8cd40f39', 3, 'French', 'm', 'Crossoint', 1),
(7, 'jelmer1999@gmail.com', '9b70495c134323fca93da23825fe6dee291f252ae0', 'Jelmer Pol', '1999-05-25', '', 1, 'acb4d6cf2fbe4255475dc9215f35491e7c4948fc', 0, '', '', '', 0),
(8, 'kevinsliedrecht2000@gmail.com', '42c58cd163e30e684c7614b4a001a45f20bfaaee501', 'Kevin Sliedrecht', '2000-11-14', '', 1, '969daa4674d1a54f9d82cd4a980ee0e18685cad3', 0, '', '', '', 0),
(9, 'spam@webcodesign.de', '13a25e9d55174745c3e0ffdeb7381d1994e', 'STM', '1234-12-31', '', 1, 'b9f146ae794e4fb4fed914278d9c497a2a838ea0', 0, '', '', '', 0),
(10, 'patriciapaay@hotmail.com', '31c5bed48cb65e3ded671b7ac9736d3e10e', 'Patricia Paay', '1990-01-01', 'm', 1, '9405f2d45cbf8b2ee824676ffd446ead43dbf8ca', 3, 'Dutch', 'f', '', 1),
(11, 'assblaster@gmail.com', '7ed5c12f737c04b8dea45edbf5099083e0bf94ba102eb903bb5dacba0279a12dffd63fb1792f735d3fc28b9c50e99f7e8db15f545bb9cfcdc758ae8f27c805d001', 'Assblasterthethird', '1994-06-01', 'm', 1, '29f87eb57d9a931c85f79aad885032551d826f1b', 3, 'Netherlands', 'f', 'I am the best assblaster there is.Ã‰toine already felt it.', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `AOT_swiping`
--
ALTER TABLE `AOT_swiping`
 ADD PRIMARY KEY (`unique_id`);

--
-- Indexen voor tabel `AOT_users`
--
ALTER TABLE `AOT_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `AOT_swiping`
--
ALTER TABLE `AOT_swiping`
MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT voor een tabel `AOT_users`
--
ALTER TABLE `AOT_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
