-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Apr 2018 um 12:46
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smoch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `ID` int(11) NOT NULL COMMENT 'unique id',
  `IDurl` text NOT NULL COMMENT 'withount *.php without *http://" without path',
  `Titel` varchar(30) NOT NULL COMMENT 'visible title',
  `Jahrzahl` varchar(7) NOT NULL COMMENT 'sometimes as text (eg. 900 - 1200)',
  `Objekt_Jahr` text COMMENT 'Jahr des ältesten Ausstellungsobjekts',
  `Objekt_Modell` text COMMENT 'Modell  des ältesten Ausstellungsobjekts',
  `BildPfad` text NOT NULL COMMENT 'relative url to img INKL ".jpg"',
  `BildLegende` text NOT NULL COMMENT 'Bildunterschrift',
  `Vorher` text COMMENT 'Text der IDurl',
  `Nachher` text COMMENT 'Text der IDurl',
  `Vorhanden` tinyint(1) NOT NULL COMMENT 'Ist an der Hohlstr. zu besichtigen',
  `Autor` text NOT NULL,
  `Descriptions` text NOT NULL,
  `Keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`ID`, `IDurl`, `Titel`, `Jahrzahl`, `Objekt_Jahr`, `Objekt_Modell`, `BildPfad`, `BildLegende`, `Vorher`, `Nachher`, `Vorhanden`, `Autor`, `Descriptions`, `Keywords`) VALUES
(49, 'abakus', 'Abakus', '-2500', 'ca 1970', 'Chinesischer Abakus', 'abakus.png', 'Abakus', NULL, 'pascaline', 1, '', 'Die Geschichte des Abakus', 'chinesischer Zählrahmen'),
(50, 'pascaline', 'Pascaline', '1642', '1652', 'Pascaline', 'pascaline.png', 'Pascaline', 'abakus', 'binaer', 0, '', 'Die Geschichte der Pascaline', 'Blaise Pascal, Mechanische Rechenmaschine'),
(51, 'binaer', 'Binärsystem', '1697', '', '', 'binaer.png', 'Binärsystem', 'pascaline', 'babbage', 1, 'Lisa Kalberer, Philipp Gressly Freimann', 'Die Geschichte des Binärsystems', 'Leibniz, Dualsystem'),
(52, 'babbage', 'Differenzenmaschine', '1822', '', 'Nachbildung im Da Vinci Museum Mailand', 'babbage.png', 'Differenzenmaschine', 'binaer', 'mechanik', 0, '', 'Die Geschichte der Differenzmaschine', 'Babbage'),
(53, 'mechanik', 'Mechanischer Rechner', '1847', 'ca. 1950', 'Addiator', 'zahlenschieber.png', 'Zahlenschieber', 'babbage', 'relais', 1, '', 'Die Geschichte des menchanischen Rechners', ''),
(54, 'relais', 'Relais', '1835', '', '', 'relais.png', 'Relais', 'mechanik', 'halbleiter', 1, '', 'Die Geschichte des Relais\'', ''),
(55, 'halbleiter', 'Halbleiter', '1874', '', 'Element Silizium', 'halbleiter.png', 'Halbleiter', 'relais', 'transistor', 1, '', 'Die  Geschichte von Halbleitern', ''),
(56, 'transistor', 'Transistor', '1934', '1997', 'Transistor BC', 'transistor.png', 'Transistor', 'halbleiter', 'halbaddierer', 1, '', 'Die Geschichte des Transistors', ''),
(57, 'halbaddierer', 'Halbaddierer', '1937', '', '', 'halbaddierer.png', 'Halbaddierer', 'transistor', 'roehren', 1, '', 'Die Geschichte des Halbaddierers', ''),
(58, 'roehren', 'Röhrenrechner', '1940', '', '', 'roehren.png', 'Röhrenrechner', 'halbaddierer', 'rechnerchip', 1, '', 'Die Geschichte des Röhrenrechners', ''),
(59, 'rechnerchip', 'Rechnerchip', '1959', '', '', 'rechnerchip.png', 'Rechnerchip', 'roehren', 'integrierterRechner', 1, '', 'Die Geschichte des Rechenchips', ''),
(60, 'integrierterRechner', 'Integrierter Schaltkreis', '1959', '', '', 'integrierter.png', 'Integrierter Schaltkreis', 'rechnerchip', 'rwafer', 1, '', 'Die Geschichte des integrierten Schaltkreises', ''),
(61, 'rwafer', 'Wafer', '1960', '', '', 'wafer.png', 'Wafer', 'integrierterRechner', 'taschenrechner', 1, '', 'Die Geschichte des Wafers', ''),
(62, 'taschenrechner', 'Taschenrechner', '1967', '', '', 'taschenrechner.png', 'Taschenrechner', 'rwafer', 'pc', 1, '', 'Die Geschichte des Taschenrechners', ''),
(63, 'pc', 'Personal Computer', '1975', '2008', 'Asus Eee PC 1000', 'pc.png', 'Personal Computer', 'taschenrechner', 'tablet', 1, '', 'Die Geschichte des PC\'s', 'PC, Laptop'),
(64, 'tablet', 'Tablet', '1989', '2011', 'iPad 2', 'tablet.png', 'Tablet', 'pc', 'smartphone', 1, '', 'Die Geschichte des Tablets', ''),
(65, 'smartphone', 'Smartphone', '1994', '1998', 'Nokia NSM-1NY', 'smartphone.png', 'Smartphone', 'tablet', 'smartwatch', 1, '', 'Die Geschichte des Smartphones', ''),
(66, 'smartwatch', 'Smartwatch', '2003', '', '', 'smartwatch.png', 'Smartwatch', 'smartphone', NULL, 0, '', 'Die Geschichte der Smartwatch', ''),
(67, 'amphore', 'Amphore', '-500', '2016', 'Nachbildung etruskischer Amphore', 'amphore.png', 'Amphore', NULL, 'lochkarte', 1, '', 'Die Geschichte der Amphore', 'Speicher'),
(68, 'lochkarte', 'Lochkarte', '1874', '', '', 'lochkarte.png', 'Lochkarte', 'amphore', 'magnetband', 1, '', 'Die Geschichte der Lochkarte', ''),
(69, 'magnetband', 'Magnetband', '1930', '1990', 'Magnetband BASF', 'magnetband.png', 'Magnetband', 'lochkarte', 'kernspeicher', 1, '', 'Die Geschichte des Magnetbandes', ''),
(70, 'kernspeicher', 'Kernspeicher', '1949', '', '', 'kernspeicher.png', 'Kernspeicher', 'magnetband', 'festplatte', 1, '', 'Die Geschichte des Kernspeichers', 'Speicher'),
(71, 'festplatte', 'Festplatte', '1956', '1998', '', 'festplatte.png', 'Festplatte', 'kernspeicher', 'speicherchip', 1, '', 'Die Geschichte der Festplatte', 'HDD, SSD'),
(72, 'speicherchip', 'Speicherchip', '1959', '', 'NEC Japan 8633 kb', 'speicherchip.png', 'Speicherchip', 'festplatte', 'integrierterSpeicher', 1, '', 'Die Geschichte des Speicherchips', ''),
(73, 'integrierterSpeicher', 'Integrierter Schaltkreis', '1959', '', '', 'integrierter.png', 'Integrierter Schaltkreis', 'speicherchip', 'swafer', 1, '', 'Die Geschichte des integrierten Schaltkreises', ''),
(74, 'swafer', 'Wafer', '1960', '', '', 'wafer.png', 'Wafer', 'integrierterSpeicher', 'diskette', 1, '', 'Die Geschichte des Wafers', ''),
(75, 'diskette', 'Diskette', '1969', '2002', 'Externes Laufwerk', 'diskette.png', 'Diskette', 'swafer', 'cd', 1, '', 'Die Geschichte  der Diskette', ''),
(76, 'cd', 'CD - ROM', '1979', '2000', 'crd-8481B', 'cd.png', 'CD - ROM', 'diskette', 'usbstick', 1, '', 'Die Geschichte der CD-ROM', 'CD, DVD, Bluray'),
(77, 'usbstick', 'USB - Stick', '1996', '', '16 mb', 'usbstick.png', 'USB - Stick', 'cd', NULL, 1, '', 'Die Geschichte des USB- Sticks', 'Universal serial Bus'),
(78, 'relaisnachbau', 'Nachbau Relairechner', '2017', '', 'Nachbau Relaisrechner', 'relaisnachbau.png', 'Nachbau Relaisrechner', 'halbaddierer', 'roehren', 1, '', 'Nachbau eines Relaisrechners', ''),
(79, 'transistornachbau', 'Nachbau Transistorrechner', '2017', '', 'Nachbau Transistorrechner', 'transistornachbau.png', 'Nachbau Transistorrechner', 'halbaddierer', 'roehren', 1, '', 'Nachbau eines Transistorrechners', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id', AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
