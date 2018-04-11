-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2018 at 03:16 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `content`
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
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID`, `IDurl`, `Titel`, `Jahrzahl`, `Objekt_Jahr`, `Objekt_Modell`, `BildPfad`, `BildLegende`, `Vorher`, `Nachher`, `Vorhanden`, `Autor`, `Descriptions`, `Keywords`) VALUES
(49, 'abakus', 'Abakus', '-2500', 'ca 1970', 'Chinesischer Abakus', 'abakus.png', 'Abakus', NULL, 'rechenschieber', 1, '', 'Die Geschichte des Abakus', 'chinesischer Zählrahmen'),
(50, 'pascaline', 'Pascaline', '1642', '1652', 'Pascaline', 'pascaline.png', 'Pascaline', 'rechenschieber', 'binaer', 0, '', 'Die Geschichte der Pascaline', 'Blaise Pascal, Mechanische Rechenmaschine'),
(51, 'binaer', 'Binärsystem', '1697', '', '', 'binaer.png', 'Binärsystem', 'pascaline', 'differenzenmaschine', 1, 'Lisa Kalberer, Philipp Gressly Freimann', 'Die Geschichte des Binärsystems', 'Leibniz, Dualsystem'),
(52, 'differenzenmaschine', 'Differenzenmaschine', '1822', '', 'Nachbildung im Da Vinci Museum Mailand', 'babbage.png', 'Differenzenmaschine', 'binaer', 'addiator', 0, '', 'Die Geschichte der Differenzmaschine', 'Babbage'),
(53, 'addiator', 'Mechanischer Rechner', '1847', 'ca. 1950', 'Addiator', 'zahlenschieber.png', 'Zahlenschieber', 'differenzenmaschine', 'relais', 1, '', 'Die Geschichte des menchanischen Rechners', 'mechanische Rechenmaschine'),
(54, 'relais', 'Relais', '1835', '2017', 'Finder: Printrelais 6 V', 'relais.png', 'Relais', 'addiator', 'notRelaisNachbau', 1, '', 'Die Geschichte des Relais\'', ''),
(55, 'halbleiter', 'Halbleiter', '1874', '', 'Element Silizium', 'halbleiter.png', 'Halbleiter', 'notRelaisNachbau', 'transistor', 1, '', 'Die  Geschichte von Halbleitern', 'Silizium, Transistor, Diode'),
(56, 'transistor', 'Transistor', '1934', '1997', 'Transistor BC548C', 'transistor.png', 'Transistor', 'halbleiter', 'notTransistorNachbau', 1, '', 'Die Geschichte des Transistors', ' NPN, BC548C'),
(57, 'halbaddierer', 'Halbaddierer', '1937', '', '', 'halbaddierer.png', 'Halbaddierer', 'notTransistorNachbau', 'volladdiererRelaisNachbau', 1, '', 'Die Geschichte des Halbaddierers', ''),
(58, 'roehre', 'Röhrenrechner', '1940', '', '', 'roehren.png', 'Röhrenrechner', 'volladdiererTransistorNachbau', 'rechnerchip', 1, '', 'Die Geschichte des Röhrenrechners', ''),
(59, 'rechnerchip', 'Rechnerchip', '1959', '', '', 'rechnerchip.png', 'Rechnerchip', 'roehre', 'taschenrechner', 1, '', 'Die Geschichte des Rechenchips', ''),
(62, 'taschenrechner', 'Taschenrechner', '1967', 'ca. 2013', '', 'taschenrechner.png', 'Taschenrechner', 'rechnerchip', 'pc', 1, '', 'Die Geschichte des Taschenrechners', ''),
(63, 'pc', 'Personal Computer', '1975', '2008', 'Asus Eee PC 1000', 'pc.png', 'Personal Computer', 'taschenrechner', 'tablet', 1, '', 'Die Geschichte des PC\'s', 'PC, Laptop'),
(64, 'tablet', 'Tablet', '1989', '2011', 'iPad 2', 'tablet.png', 'Tablet', 'pc', 'smartphone', 1, '', 'Die Geschichte des Tablets', 'iPad, iPad2'),
(65, 'smartphone', 'Smartphone', '1994', '1998', 'Nokia NSM-1NY', 'smartphone.png', 'Smartphone', 'tablet', 'smartwatch', 1, '', 'Die Geschichte des Smartphones', 'Handy, Mobile Phone'),
(66, 'smartwatch', 'Smartwatch', '2003', '', '', 'smartwatch.png', 'Smartwatch', 'smartphone', NULL, 0, '', 'Die Geschichte der Smartwatch', ''),
(67, 'amphore', 'Amphore', '-500', '2016', 'Nachbildung etruskischer Amphore', 'amphore.png', 'Amphore', NULL, 'lochkarte', 1, '', 'Die Geschichte der Amphore', 'Speicher'),
(68, 'lochkarte', 'Lochkarte', '1874', '', '', 'lochkarte.png', 'Lochkarte', 'amphore', 'magnetband', 1, '', 'Die Geschichte der Lochkarte', ''),
(69, 'magnetband', 'Magnetband', '1930', '1990', 'Magnetband BASF', 'magnetband.png', 'Magnetband', 'lochkarte', 'kernspeicher', 1, '', 'Die Geschichte des Magnetbandes', ''),
(70, 'kernspeicher', 'Kernspeicher', '1949', 'ca. 1960', '', 'kernspeicher.png', 'Kernspeicher', 'magnetband', 'festplatte', 1, '', 'Die Geschichte des Kernspeichers', 'Speicher'),
(71, 'festplatte', 'Festplatte', '1956', '1998', '', 'festplatte.png', 'Festplatte', 'kernspeicher', 'integrierterSpeicher', 1, '', 'Die Geschichte der Festplatte', 'HDD, SSD'),
(72, 'speicherchip', 'Speicherchip', '1959', '', 'NEC Japan 8633 kb', 'speicherchip.png', 'Speicherchip', 'integrierterSpeicher', 'swafer', 1, '', 'Die Geschichte des Speicherchips', ''),
(73, 'integrierterSpeicher', 'Integrierter Schaltkreis', '1959', '', '', 'integrierterSpeicher.png', 'Integrierter Schaltkreis', 'festplatte', 'speicherchip', 1, '', 'Die Geschichte des integrierten Schaltkreises', 'IC'),
(74, 'swafer', 'Wafer', '1960', '', '', 'wafer.png', 'Wafer', 'speicherchip', 'diskette', 1, '', 'Die Geschichte des Wafers', ''),
(75, 'diskette', 'Diskette', '1969', '2002', 'Externes Laufwerk', 'diskette.png', 'Diskette', 'swafer', 'cd', 1, '', 'Die Geschichte  der Diskette', 'Floppy'),
(76, 'cd', 'CD - ROM', '1979', '2000', 'crd-8481B', 'cd.png', 'CD - ROM', 'diskette', 'usbstick', 1, '', 'Die Geschichte der CD-ROM', 'CD, DVD, Bluray'),
(77, 'usbstick', 'USB - Stick', '1996', '', '16 mb', 'usbstick.png', 'USB - Stick', 'cd', 'bitRelaisNachbau', 1, '', 'Die Geschichte des USB- Sticks', 'Universal serial Bus'),
(78, 'volladdiererRelaisNachbau', 'Nachbau Relaisrechner', '(1937)', '2017', 'Nachbau Relaisrechner', 'volladdiererRelaisNachbau.png', 'Nachbau Relaisrechner', 'halbaddierer', 'volladdiererTransistorNachbau', 1, '', 'Nachbau eines Relaisrechners', 'Relais'),
(79, 'volladdiererTransistorNachbau', 'Nachbau Transistorrechner', '(1937)', '2017', 'Nachbau Transistorrechner', 'volladdiererTransistorNachbau.png', 'Nachbau Transistorrechner', 'volladdiererRelaisNachbau', 'roehre', 1, '', 'Nachbau eines Transistorrechners', 'Transistor'),
(80, 'rechenschieber', 'Rechenschieber', '1632', 'ca 1960\n', 'ARISTO Nr. 89\n', 'rechenschieber.png', 'Rechenschieber', 'abakus', 'pascaline\r\n', 1, '', 'Die Geschichte des Rechenschiebers eingebettet in die Geschichte des Computers.', 'Logarithmus'),
(81, 'notRelaisNachbau', 'Nachbau NOT mit Relais', '(1835)', '2017', NULL, 'notRelaisNachbau.png', 'NOT Schaltung mit einem Relais', 'relais', 'halbleiter', 1, '', '', 'Relais, NOT'),
(82, 'notTransistorNachbau', 'Nachbau NOT mit Transistoren', '(1934)', '2017', NULL, 'notTransistorNachbau.png', 'NOT Schaltung mit Transistoren', 'transistor', 'halbaddierer', 1, '', '', 'Transistor, NOT'),
(83, 'bitRelaisNachbau', 'Nachbau Bit mit Relais', '(2017)', '2017', '', 'bitRelaisNachbau.png', 'Ein-Bit-Speicher mit Relais', 'usbstick', 'bitTransistorNachbau', 1, '', 'Wie kann mit einem Relais ein Bit gespeichert werden.', 'Relais, Bit, Speicher'),
(84, 'bitTransistorNachbau', 'Nachbau Bit mit Transistoren', '(2017)', '2017', NULL, 'bitTransistorNachbau.png', 'Ein-Bit-Speicher mit Transistoren', 'bitRelaisNachbau', NULL, 1, '', '', 'Bit, Transistor, Speicher');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id', AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
