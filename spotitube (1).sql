-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 jun 2018 om 09:00
-- Serverversie: 10.1.32-MariaDB
-- PHP-versie: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotitube`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `playlist_naam` varchar(150) NOT NULL,
  `playlist_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(2, 'hahaha', '1bbd886460827015e5d605ed44252251'),
(3, 'yrostem', '1bbd886460827015e5d605ed44252251'),
(4, 'naam', '1bbd886460827015e5d605ed44252251'),
(5, 'hoihoi', '481701fa4093499eacd05b57bebc7ffc'),
(7, '&quot; or &quot;&quo', '62e0192eeecb52a9210af173dcd4549a'),
(8, 'hahahaha', '1bbd886460827015e5d605ed44252251'),
(9, 'hoihoi', '1bbd886460827015e5d605ed44252251'),
(10, 'a', '1bbd886460827015e5d605ed44252251');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
