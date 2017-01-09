-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Jan 2017 um 18:46
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
-- Tabellenstruktur für Tabelle `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(6) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'Standard',
  `path` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `tags` int(6) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `author`, `path`, `date`, `tags`, `type`) VALUES
(1, 'Example1', 'This project shows my commitment to the #100DaysOfCode challenge. In the 100 days starting at the 3rd January 2017 I will start and hopefully finish a photoblog. I will work at least one hour per day and you will see the results of my work in the appearing commits each day. The framework I use in this project is CodeIgniter.\r\n\r\nFurthermore you can find the images at the end of this article.\r\nThey are managed in a kind of image-slider. \r\n\r\nHave fun!', 'Standard', '2017/test', '2017-01-03', 1, 'slide');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
