-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Feb 2017 um 20:12
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `foto`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `todos`
--

CREATE TABLE IF NOT EXISTS `todos` (
`id` int(6) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` int(6) unsigned NOT NULL,
  `date` date NOT NULL,
  `archived` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `todos`
--

INSERT INTO `todos` (`id`, `title`, `content`, `author`, `date`, `archived`) VALUES
(1, 'Test', 'Das ist ein Test', 2, '2017-02-02', 0),
(3, 'Test1', 'Das ist ein weiterer Test', 2, '2017-02-03', 0),
(4, 'Test1', 'Das ist ein weiterer Test', 2, '2017-02-03', 0),
(5, 'OKAS', 'ADJWSKFEWNFEFKEFKEFEF', 2, '2017-02-03', 0),
(7, 'retretretre', 'tretretretretret', 2, '2017-02-03', 0),
(8, 'rtujrturtur', 'turturturturturtu', 2, '2017-02-03', 0),
(9, 'rtujrturtur', 'turturturturturtu', 2, '2017-02-03', 0),
(10, 'izkujthrgfe', 'erhrehrehrehrehre', 2, '2017-02-03', 0),
(11, 'gkuilizrtut', 'rurturturturturturt', 2, '2017-02-03', 0),
(12, 'trjrtjrtjrtjrtj', 'trjrtjrtjtrjrtjrtj', 2, '2017-02-03', 0),
(13, 'rthtrhrthrt', 'hrthrthrthrthtrh', 2, '2017-02-03', 0),
(14, 'tththrthtrh', 'rthrthrthrthrthrthrthrth', 2, '2017-02-03', 0),
(21, 'Irgendwas', 'Das ein cooler Test und so', 3, '2017-02-03', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `todos`
--
ALTER TABLE `todos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `todos`
--
ALTER TABLE `todos`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
