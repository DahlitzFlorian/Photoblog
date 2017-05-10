-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Feb 2017 um 20:13
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
-- Tabellenstruktur für Tabelle `todos_users`
--

CREATE TABLE IF NOT EXISTS `todos_users` (
`id` int(6) unsigned NOT NULL,
  `user_id` int(6) unsigned NOT NULL,
  `todo_id` int(6) unsigned NOT NULL,
  `dash_link` tinyint(3) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `todos_users`
--

INSERT INTO `todos_users` (`id`, `user_id`, `todo_id`, `dash_link`) VALUES
(4, 2, 14, 0),
(11, 1, 17, 1),
(23, 1, 21, 1),
(24, 2, 21, 1),
(25, 3, 21, 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `todos_users`
--
ALTER TABLE `todos_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `todos_users`
--
ALTER TABLE `todos_users`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
