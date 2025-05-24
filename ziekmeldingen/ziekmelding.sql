-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mei 2025 om 16:16
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ziekmelding`
--

CREATE TABLE `ziekmelding` (
  `id` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `datum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ziekmelding`
--

INSERT INTO `ziekmelding` (`id`, `naam`, `datum`) VALUES
(4, 'Willem', '2025-01-01'),
(5, 'Sofie', '2025-02-15'),
(6, 'Jasper', '2025-03-10'),
(7, 'Emma', '2025-04-25'),
(8, 'Daan', '2025-05-05'),
(9, 'Lotte', '2025-06-20'),
(10, 'Milan', '2025-07-12'),
(11, 'Tess', '2025-08-30'),
(12, 'Noah', '2025-09-14'),
(13, 'Julia', '2025-10-01');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ziekmelding`
--
ALTER TABLE `ziekmelding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `ziekmelding`
--
ALTER TABLE `ziekmelding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
