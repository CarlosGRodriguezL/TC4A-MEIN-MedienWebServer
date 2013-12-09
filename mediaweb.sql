-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Dez 2013 um 21:25
-- Server Version: 5.6.11
-- PHP-Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `mediaweb`
--
CREATE DATABASE IF NOT EXISTS `mediaweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mediaweb`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bild`
--

CREATE TABLE IF NOT EXISTS `bild` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Beschreibung` varchar(99) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `src` varchar(99) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `bild`
--

INSERT INTO `bild` (`ID`, `Name`, `Beschreibung`, `src`) VALUES
(1, 'Skorpion', 'Von Mortal Kombat', '/bild/skorpion.jpg'),
(2, 'Tricky', 'Verkleidete Kinder', '/bild/tricky.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Titel` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Beschreibung` varchar(99) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `src` varchar(99) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Beschreibung` varchar(99) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `src` varchar(99) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `video`
--

INSERT INTO `video` (`ID`, `Name`, `Beschreibung`, `src`) VALUES
(1, 'Iron Sky', 'Cooler Film', './video/ironsky.mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
