-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 23. Sep 2022 um 17:25
-- Server-Version: 10.3.36-MariaDB-0+deb10u1
-- PHP-Version: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `arcadius`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bees`
--

CREATE TABLE `bees` (
  `id` varchar(17) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `gang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `bees`
--

INSERT INTO `bees` (`id`, `name`, `phone`, `gang`) VALUES
('bee61701d8d348bb', 'Logan McConnaughey', '6915094', 'Arcadius'),
('bee61701dab90619', 'Ajax Nester', '1726328', 'Arcadius'),
('bee61701dc014aac', 'Harald Förster', '5362938', 'Arcadius'),
('bee61701dd1d5452', 'Jojo Pisko', '8973596', 'Arcadius'),
('bee61701de3ae2c0', 'Jackson Oerding', '6117447', '-'),
('bee61701df7c07c8', 'Axel H.', '6559511', '-'),
('bee61701e06a62b8', 'Andrzej Truskawka', '9392010', '-'),
('bee61701e174d35f', 'Andy Arbeit', '6226009', '-'),
('bee61701e2110015', 'Andre Rochinsky', '4451404', '-'),
('bee61701e2e989d8', 'Alex Makarov', '1897534', 'Arcadius'),
('bee61701e394c26a', 'Bela Balasz', '374935', '-'),
('bee61701e463e258', 'Dima Sputnik', '1296342', '-'),
('bee61701e51394a7', 'Don Paulo', '9215812', '-'),
('bee61701e5f5439d', 'Dirk Koschinsky', '1648356', '-'),
('bee61701e6c27b4b', 'Emilio Black', '5433170', '-'),
('bee61701e7879296', 'Frank Eckhardt', '5757592', '-'),
('bee61701e81ee989', 'Gary Atterie', '7722768', '-'),
('bee61701e8eb2f92', 'Gustav Schulz', '9451641', '-'),
('bee61701e9f03687', 'Hamsi Peps', '3708241', '-'),
('bee61701eb5e71e4', 'Heiko Kuschinsky', '5362430', '-'),
('bee61701ec2e9b8e', 'Jackson Montana', '9526234', '-'),
('bee61701edcbabff', 'Jeff Jackson', '9481892', '-'),
('bee61701ef10abe4', 'Jeff Chilius', '3867126', '-'),
('bee61701efe4389f', 'James Ott', '9609596', '-'),
('bee61701f08c7195', 'Jack Hammer', '2269992', 'Bullet Prof MC'),
('bee61701f16a60f7', 'Justin Ben Vindicta', '7576649', 'Vindicta'),
('bee61701f24ba7c2', 'Kendrick Johnson', '1931312', 'Crips'),
('bee61701f2fa2545', 'Klaus Kleber', '5905787', '-'),
('bee61701f3c11d64', 'Kaiser Otto', '1094553', '-'),
('bee61701f485b2ff', 'Kabuto Pinkman', '6319174', '-'),
('bee61701f5aafa2a', 'Levis Coldax', '3312060', 'Arcadius'),
('bee61701f7316ced', 'Luca Hercsuth', '8298061', '-'),
('bee61701f7f07150', 'Mason Williams', '2836472', '-'),
('bee61701f8a45685', 'Maxime Renee', '2221398', 'United'),
('bee61701f963499a', 'Max Hunter', '4893328', '-'),
('bee61701fa64bdc7', 'Michaelis Papodakis', '9063265', '-'),
('bee61701fb747f95', 'Martin Meier', '4065064', '-'),
('bee61701fc7ea595', 'Mario Helm', '8796059', '-'),
('bee61701fd67624a', 'Markus Wittmann', '9497149', '-'),
('bee61701fe53e7a0', 'Mike Koschinsky', '7145393', '-'),
('bee61701ff2ebd85', 'Manu Müller', '7035972', '-'),
('bee61701fffd4f9f', 'Marc Müller', '3257545', '-'),
('bee61702015e901e', 'Olaf Eckhardt', '7593480', '-'),
('bee617020272de80', 'Pascal Welker', '7501479', '-'),
('bee617020325002e', 'Pasi McFly', '2122341', 'Arcadius'),
('bee6170203d0eeab', 'Pablo Junior', '6123521', '-'),
('bee617020531a70f', 'Peter Müller', '2266223', '-'),
('bee6170205fa9c43', 'Peyton Taylor', '3167111', '-'),
('bee6170206af02a6', 'Ronny Rabuse', '5177788', '-'),
('bee617020755c244', 'Ryne Hunter', '3235064', '-'),
('bee6170208b047d9', 'Robert Otter', '8435365', '-'),
('bee617020994c4d0', 'Rick Nomad', '9303992', '-'),
('bee617020a531476', 'Ricardo Milos', '5233361', '-'),
('bee617020b0452f7', 'Raul Flemington', '3557312', '-'),
('bee617020bb810fb', 'Roni Koschinsky', '8392979', '-'),
('bee617020c938a6f', 'Ryan Reddington', '4351470', '-'),
('bee617020e2051aa', 'Sanchez Juan', '6567895', '-'),
('bee617020ed0c0c5', 'Timo Beil', '9419513', '-'),
('bee617020faa4a6c', 'Victor Sucht', '8303592', '-'),
('bee6170210565559', 'Vadim Vadik', '8092539', '-'),
('bee617021126245e', 'William King', '4971967', 'Arcadius'),
('bee617021205f979', 'Wojtek Piwko', '4452051', '-'),
('bee61702135061b8', 'Zero Tempest', '6173520', '-'),
('bee6170215699d41', 'Matt Eagel [President]', '7412959', 'Bullet Proof MC'),
('bee6170217051d68', 'Ray Eagel [Vice President]', '9951733', 'Bullet Proof MC'),
('bee617021a1a8549', 'Andi Wand [Sergeant of Arms]', '2438196', 'Bullet Proof MC'),
('bee617021b863c53', 'James Parker', '8051972', 'United'),
('bee617021c08e2a9', 'Muhammad Gürcan', '-', 'United'),
('bee617021c9bda57', 'Ronny Bernstein', '-', 'United'),
('bee617021d860a78', 'Tommy Neumann', '-', 'United'),
('bee617021e03c61b', 'Lori Van Gogh', '6425272', 'United'),
('bee617021e8af495', 'Wayne Montoya', '-', 'United'),
('bee617021f945cd1', 'Mehmet Hängel', '-', 'United'),
('bee61702201d9306', 'Ziggi Jackson', '-', 'United'),
('bee6170220eedaec', 'Vannesa Buslowicz', '-', 'United'),
('bee6170221567674', 'Eric Klein', '2924154', 'United'),
('bee6170221e3bcf2', 'Viro Kern', '3065808', 'United'),
('bee61702228d3f6f', 'Jean-Marc Buble', '7416970', 'United'),
('bee6170222f5c7bd', 'Jan Verone', '-', 'United'),
('bee6170223624699', 'Omar Davis', '-', 'United'),
('bee6170223d2b373', 'Peter Parker', '4319098', 'United'),
('bee6170224789123', 'Justin Frettchen', '9761919', 'United'),
('bee617022551970e', 'Nathen Ferrari', '-', 'United'),
('bee6170225f0c3eb', 'Razor McKoy', '-', 'United'),
('bee617022667487d', 'Mike Oxlong', '9257743', 'United'),
('bee6170226d42433', 'Jay Fox', '-', 'United'),
('bee6170228006085', 'Manfred Randale [OG]', '3835627', 'Grove'),
('bee61719b004d370', 'Andy Theke', '3827786', 'Crips'),
('bee6172fb1a5dc25', 'Noah Fischer', '5307856', '-'),
('bee6172fb8b0697b', 'Costa Hengel', '3972007', 'United'),
('bee6172fb9fb3605', 'Lutzifer Morningstar', '-', 'United'),
('bee6172fbc7a0fda', 'Luis Sperling', '-', 'United'),
('bee6172fbea7f915', 'Xesa van Keen', '-', 'Banditos'),
('bee6172fbf8d39fe', 'Sanches van Keen', '-', 'Banditos'),
('bee6172fc0a22986', 'Niklas van Keen Vindicta', '-', 'Banditos'),
('bee6172fc1c7ce8b', 'Juan van Keen Vindicta', '-', 'Banditos'),
('bee6172fc26126cb', 'Eric van Keen', '-', 'Banditos'),
('bee6172fc31e490c', 'Mienes Perez', '-', 'Banditos'),
('bee6172fc3db7105', 'Ahmad Khalil', '-', 'Banditos'),
('bee6172fc467951c', 'Franky Oden', '-', 'Banditos'),
('bee6172fc53a995e', 'Diego Martinez', '-', 'Banditos'),
('bee6172fc683f88d', 'Jason van Keen', '-', 'Banditos'),
('bee6172fc82702c7', 'Pablo van Keen', '-', 'Banditos'),
('bee6172fcb35be3b', 'Keko G G Unit', '-', 'Banditos'),
('bee6172fcbf4701a', 'Mahmud Perez', '-', 'Banditos'),
('bee6172fccbb4ffb', 'Witali Hermann', '-', 'Banditos'),
('bee6172fcd4b64e2', 'Farid van Keen', '-', 'Banditos'),
('bee6172fce024d68', 'Paul Löwinger', '-', 'Banditos'),
('bee6172fce800f1d', 'Will Juan', '-', 'Banditos'),
('bee6172fcf3a33e0', 'Albundy Bundy', '-', 'Banditos'),
('bee6173053f198f7', 'Jason G G Unit', '-', 'Banditos'),
('bee6174782911b06', 'Nico Thyn', '9346755', '-'),
('bee6174784452a35', 'Emil Alvarez', '756-7117', '-'),
('bee6176ef1c69383', 'Björn Paker', '8389459', 'United'),
('bee6176f77cc9003', 'Sidney Vegas', '8848550', 'Justin Vendi.'),
('bee617d110300c38', 'Willy Locher', '9615551', 'Justin Vendi.'),
('bee617d112752e75', 'Albio Rosenkrieg', '6584216', 'Justin Vendi.'),
('bee617d81719c388', 'Dodo Filman', '8666386', 'Grove'),
('bee617dc59d8f0f4', 'Kevin Mayer', '8325537', 'Blue Credits'),
('bee617dc5f0efb6b', 'Harry Gemöse', '1091166', 'Justin Vendi.'),
('bee617dde53e9933', 'Tim Müller', '2363235', '-'),
('bee617df57593e05', 'Rocky Hill', '2802320', 'Justin Vindi.'),
('bee617eec5b458ec', 'Johnny Hecke', '2489838', '- '),
('bee617eec72d30d7', 'Glen Jitt- Gesucht', '3233448', '-'),
('bee617eec93687b6', 'Heino Gorke', '6452482', '-'),
('bee617f139512e72', 'Facelift77', '8761565', 'Bullet Prof MC'),
('bee617f15d513318', 'Jackson Pelligrino', '8761565', 'Bullet Prof MC'),
('bee618069abe8e12', 'Frank Castle', '7527933', 'United'),
('bee6181ad32ba124', 'Jacky Hammer', '9361221', '-'),
('bee6181ad4e82aff', 'Marco Sanjo', '8233653', '-'),
('bee6182fd0c65754', 'Toni Montana', '-', '-'),
('bee6183003ebd8b4', 'Tito Klein', '6387698', 'Immobilien'),
('bee6183005fa5441', 'Paddy Huanita', '4371308', 'Immobilien'),
('bee618300803a42e', 'Mortis Murphy ', '6845585', 'Immobilien'),
('bee6183009defa9e', 'Wede Schweiss ', '9983912', 'Immobilien'),
('bee618300c065ef7', 'Finn Brummer', '4734361', 'Immobilien'),
('bee6184641edfb33', 'Jessy Paolo', '6759662', 'Blue Credits'),
('bee6184643413b38', 'Sekko Cocco', '8704691', '-'),
('bee6184644fae1df', 'Joe Valachi', '1796587', '-'),
('bee61846468b16e2', 'Kuerby Menker', '6529582', '-'),
('bee6185dd0f56582', 'Tommy Parker', '9476642', 'United'),
('bee6185dd682a59a', 'Razor Parker', '3136812', 'United'),
('bee6185ddbf696df', 'Vannessa Parker', '1376371', 'United'),
('bee6185ddea32d3f', 'Mehmet Maier', '8905558', 'United'),
('bee6185de45a5689', 'Dion Parker', '-', 'United'),
('bee6185dec0231b0', 'Louis Fuchs', '843-2254', 'United'),
('bee6185df2a5c3de', 'Moritz Gesus', '6422822', 'United'),
('bee6185dfcfba6c9', 'Marcel Heris', '5816943', 'Bullet Prof MC'),
('bee6185dff4c1874', 'Thrash Tom', '-', 'Bullet Prof MC'),
('bee6185e012c1396', 'Natterchen', '-', 'Bullet Prof MC'),
('bee6186f1bc44671', 'John Flick', '1147542', '-'),
('bee6186f1d627449', 'Toni Stark', '9801712', '-'),
('bee6186f20647ad5', 'Leonardo Lamborgossa', '8729191', '-'),
('bee61872b1cae79d', 'Atilla Güzeladi', '1825245', 'Crips'),
('bee61872b3e1dbc8', 'Memo Karagöt', '3478279', 'Crips'),
('bee61872b6884982', 'Jeff Mandem', '5701682', 'Crips'),
('bee61872bae5230a', 'Chris Crank', '8051636', 'Nitro Organisation'),
('bee618998e319280', 'Jean-Marc Buble', '7416970', 'United'),
('bee618999598617b', 'Ernst Müller ', '1463385', 'Nitro Orrganisotion'),
('bee6189999479ef8', 'Florian Wagner', '4603790', 'Nitro Organisation'),
('bee618999b814515', 'Takeshi Lee', '7919599', 'Nitro Organisation'),
('bee618afd0b456ec', 'Mike Miles', '9921627', 'Nitro Organisation'),
('bee618afd280d6f4', 'Peter Schmidt', '2965756', '-'),
('bee618afd3bc4f1c', 'Kai Müller', '9385463', '-'),
('bee618afd5759526', 'Felix Googlesberger', '4566560', '-'),
('bee618afd7463147', 'Collin Bornaus', '1944514', '-'),
('bee618afd877d50e', 'Ivan Brown', '5888237', '-'),
('bee618afda02ad35', 'Boris Makarov', '3983510', '-'),
('bee618afdb71a853', 'Jay Martini', '3398640', '-'),
('bee618afdca8f687', 'Capo Xallas', '8602211', '-'),
('bee618c2d694c190', 'Darius Ernst', '4327630', '-'),
('bee6191580bd2111', 'Sascha Brix', '1816851', 'United\r\n'),
('bee6191580d43c4a', 'Sascha Brix', '1816851', 'United\r\n'),
('bee6191582608622', 'James Brix', '8313803', 'United'),
('bee6191583d180f3', 'Aiden Brown', '7167531', 'United'),
('bee61915860f000c', 'Ivil Lucius', '377-4997', 'United'),
('bee61915887e2c2e', 'Olaf Sancho', '8454520', 'United'),
('bee6191607590975', 'Joris Jansen', '6811681', 'LSVS'),
('bee6192b0214eb05', 'Justin Müller', '4705116', '-'),
('bee6192b039c98a2', 'Mannfred von Heep', '4656986', '-');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cars`
--

CREATE TABLE `cars` (
  `id` varchar(16) NOT NULL,
  `plate` text NOT NULL,
  `owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `cars`
--

INSERT INTO `cars` (`id`, `plate`, `owner`) VALUES
('car617306fb6c296', 'ARC20', 'Harald Förster'),
('car6173070a40878', 'ARC13', 'William Kings'),
('car6173070fcad4e', 'ARC18', 'Lorenzo Berlusconi'),
('car617307ba473fc', 'ARC1', 'Heiko Vindicta'),
('car617307be25f0c', 'ARC2', 'Jack Vindicta'),
('car617307c2761d3', 'ARC3', 'Ronny Koschynsky'),
('car617307c722a0c', 'ARC4', 'Sebastiano Vindicta'),
('car617307cb8f5c3', 'ARC5', 'Ice Snow'),
('car617307d46f6bf', 'ARC6', '- frei -'),
('car617307d8da851', 'ARC7', 'Madelyn Alvarez'),
('car617307dd16d18', 'ARC8', 'Kerim Vindicta'),
('car617307e123be7', 'ARC9', 'Carl Jackson'),
('car617307e5c8b4e', 'ARC10', 'Danny Sins'),
('car617307ea68a0e', 'ARC11', 'Dwayne Johnson'),
('car617307efd0c85', 'ARC12', 'Micki Sins'),
('car6173081a9c40e', 'ARC14', 'Alex Vindicta'),
('car6173081febe2f', 'ARC15', 'Jonny Davis'),
('car6173082856861', 'ARC16', 'Zaft Pop'),
('car6173083023123', 'ARC17', 'Kado Kawa'),
('car6173083827365', 'ARC19', 'Pasi McFly'),
('car617325f2bf8c6', 'ARC21', '- frei -'),
('car617325f77acf8', 'ARC22', '- frei -'),
('car617325fbeb09b', 'ARC23', '- frei -'),
('car617326003f234', 'ARC24', '- frei -'),
('car61732603ce076', 'ARC25', '- frei -');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `complaint`
--

CREATE TABLE `complaint` (
  `id` varchar(22) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `username` text NOT NULL,
  `phone` text NOT NULL,
  `number` text NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` varchar(18) NOT NULL,
  `title` text NOT NULL,
  `start` text NOT NULL,
  `starttime` text NOT NULL,
  `end` text NOT NULL,
  `endtime` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `starttime`, `end`, `endtime`, `description`) VALUES
('event617c040228a49', 'Entlohnung', '2021-11-01', '00:00', '2021-11-01', '23:59', 'Am 01.11.2021 gibts es für alle Mitarbeiter ein Lohntütchen. Abzuholen bei mir. \r\n\r\nGebt nicht alles auf einmal aus.'),
('event617c042038f05', 'Training', '2021-10-31', '20:30', '2021-10-31', '22:00', 'Schwerpunkt: Personenschutz, Konvoi fahren. \r\nZum Abschluss noch ne Runde Fallschirmspringen.'),
('event618aa4d364f45', 'Bahamas', '2021-11-13', '20:00', '2021-11-13', 'ca. 22:00', 'Luxury Night Party im Bahamas. Bar geführt von Haute. Glühbirnchen Verlosung von Indica. Shuttleservice vom Taxiunternehmen. ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(21) NOT NULL,
  `title` text NOT NULL,
  `username` text NOT NULL,
  `description` text NOT NULL,
  `phone` text NOT NULL,
  `number` text NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mission`
--

CREATE TABLE `mission` (
  `id` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `deadline` text NOT NULL,
  `assignee` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `id` varchar(17) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `text`) VALUES
('yeet', 'Von mir auch nochmal ein herzliches Willkommen an alle und vielen Dank, dass ihr diese Plattform nutzt, in die ich mein Herz gesteckt habe.\r\n\r\nIch bitte alle, deren Telefonnummern noch nicht in der Mitarbeiterliste stehen, mir die Nummer zu schreiben, um die Liste zu vervollständigen. Ich empfehle euch auch, die Passwörter bei uns ändern zu lassen.\r\n\r\nSolltet ihr Fehler oder Ähnliches finden, scheut nicht mich, bzw. die Abteilung IT (Logan, Ryan, Dwayne) zu kontaktieren :)\r\n\r\nIch wünsche allen viel Spaß!\r\n\r\n- gez. IT-Manager Logan McConnaughey');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `realestate`
--

CREATE TABLE `realestate` (
  `id` text NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `storage`
--

CREATE TABLE `storage` (
  `id` varchar(20) NOT NULL,
  `datetime` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `storage`
--

INSERT INTO `storage` (`id`, `datetime`, `name`, `description`, `action`) VALUES
('storage61758d4838a7b', '23.10.2021, 14:00', 'Logan McConnaughey', '- 5x Westen\r\n- 15x gebratenes Hünchen', 'Entnahme'),
('storage61758d5397e2b', '23.10.2021, 18:53', 'Kado Kawa', '- 20x RepairKit', 'Einlagerung'),
('storage61758d5e6d794', '23.10.2021, 17:00', 'Ayax Nesta', '- 70x Westen', 'Einlagerung'),
('storage61758d6b947d8', '23.10.2021, 22:45', 'Ahmed Pascha', '- 400x Westen\r\n- 100x Magazine', 'Einlagerung'),
('storage61758d752c2a6', '24.10.2021, 00:24', 'Harald Förster', '- 30x Westen\r\n- 30x Magazine', 'Einlagerung'),
('storage61758d7cc5779', '24.10.2021, 00:42', 'Carl Jackson', '- 100x Magazine', 'Einlagerung'),
('storage61758d8806c16', '24.10.2021, 01:02', 'Jonny Davis', '- 50x Magazine\r\n- 100x RepairKits', 'Einlagerung'),
('storage61758d9748daa', '24.10.2021, 02:24', 'Lorenzo Berlusconi', '- 170x Magazine\r\n- 186x Schwarzpulver', 'Einlagerung'),
('storage61758d9cde0e1', '24.10.2021, 15:20', 'Logan McConnaughey', '- 250x Magazine', 'Einlagerung'),
('storage61758da454ccb', '24.10.2021, 16:50', 'Danny Sins', '- 10x Westen', 'Entnahme'),
('storage61758dabb6984', '24.10.2021, 16:18', 'Ahmed Pascha', '- 3x Magazine', 'Entnahme'),
('storage617594cfe3cd5', '24.10.2021, 19:05', 'Kado Kawa', '- 3x Westen', 'Entnahme'),
('storage617594d7ca525', '24.10.2021, 19:05', 'Madelyn Alvarez', '- 6x Magazine', 'Entnahme'),
('storage6175b5921cd52', '24.10.2021, 21:35', 'Carl Jackson', '- 1467x Schutzwesten\r\n- 690x Magazine\r\n- 170x Repairkit\r\n- 465x Wasser und Schwamm\r\n- 186x Schwarzpulver', 'Lagerbestand'),
('storage6175bfcde2754', '24.10.2021, 22:19', 'Carl Jackson', '-5x Magazine\r\n-5x Schutzwesten', 'Entnahme'),
('storage61771537627e7', '25.10.2021, 22:36', 'Carl Jackson', '- 1445x Schutzwesten\r\n- 675x Magazine\r\n- 167x Repairkit\r\n- 462x Wasser und Schwamm\r\n- 186x Schwarzpulver', 'Lagerbestand'),
('storage617876ac91068', '26.10.2021, 23:44', 'Carl Jackson', '- 1436x Schutzwesten\r\n- 675x Magazine\r\n- 157x Repairkit\r\n- 453x Wasser und Schwamm\r\n- 186x Schwarzpulver', 'Lagerbestand'),
('storage617999d24c0de', '27.10.2021, 20:26', 'Ahmed Pascha', '- 5x Westen', 'Entnahme'),
('storage6189168926d0a', '08.11.2021, 13:22', 'Carl Jackson', '- 3898x Schutzwesten\r\n- 673x Magazine\r\n- 1040x Repairkit\r\n- 255x Wasser und Schwamm\r\n- 2200x Kabelbinder\r\n- 800x Säcke\r\n- 174x Schere\r\n- 504x Aramidfasern ', 'Lagerbestand');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` varchar(18) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `birthday` text NOT NULL,
  `aboutme` text NOT NULL,
  `usersince` text NOT NULL,
  `fullname` text NOT NULL,
  `duty` text NOT NULL,
  `phone` text NOT NULL,
  `number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `birthday`, `aboutme`, `usersince`, `fullname`, `duty`, `phone`, `number`) VALUES
('user616c0b1b4f174', 'RyanRed', '$2y$10$lPrGx0s3xR7YkAVV4mzxhucmYgjVOgZMLrur.feSwk7Kz3fbp778K', 'it manager', '', '', '17.10.21, 13:38', 'Ryan Reddington', 'on', '4351479', '26'),
('user616c0b8fa13d1', '01', '$2y$10$mKjNZMMUXklFi2XedsWO0.2NuduuVHVA6VrdOePU6MLJd8CYOM7QO', 'ceo', '', '', '17.10.21, 13:39', 'Heiko Vindicta', 'on', '1909', '01'),
('user616d915b663d7', 'HaraldFörster', '$2y$10$l9vKLoNJ1zynfjrKTbPSFeuudnKIcRdRB5RiHJL9OkJCPrUbkIZRC', 'security manager', '', '', '18.10.21, 17:23', 'Harald Förster', 'on', '5362938', '12'),
('user616d9eb2cd856', 'SebVin', '$2y$10$3hKTwrD409SQg3YrS8KfzOfawSHkrnqf26oBzcDg934aXved0SnSq', 'rechte hand', '', '', '18.10.21, 18:20', 'Sebastiano Vindicta', 'off', '0811', '04'),
('user616d9f79a5952', 'WilliamKings', '$2y$10$wEG6hBkLtfYNBG6W3be.weTbN8vtMn2z4dYQWTtjjZ/UsG.sWS6um', 'vice president', '', '', '18.10.21, 18:23', 'William Kings', 'on', '4971967', '27'),
('user616dd01e13e23', 'JackKani', '$2y$10$4sN7Z//87j9C/LmJxAQQ5.cnNriH74hudhWTUsQGIP/iK/Ivn.k2O', 'co ceo', '', '', '18.10.21, 21:50', 'Jack K. Vindicta', 'on', '2005', '03'),
('user616dd30e1188c', 'KerimVin', '$2y$10$0fSUH8wLqsAoxR7gFR4bW.jiDEbObo3CRXKOgMcpQXZ7gRP5uq0l2', 'co ceo', '', '', '18.10.21, 22:03', 'Kerim Vindicta', 'off', '110', '10'),
('user616f26e689af4', 'IceSnow', '$2y$10$8SS2kp4ymn6cZ3auYHg0dePh6j0OwNK4zlzzuyEXDA7I7vNtIe94e', 'vice president', '', '', '19.10.21, 22:13', 'Ice Snow', 'on', '6062796', '05'),
('user616gj18a564c1', 'LoganMcCon', '$2a$12$oSJHPQptSqPtpjaf64dfhuyI5bjVWo1yqim/XLZX7V5BOG47TM7yK', 'it manager', '10.09.1995', 'you\r\nare\r\nfett gay du\r\nnuite', '16.10.21, 13:38', 'Logan McConnaughey', 'off', '6915094', '24'),
('user6170112120ea4', 'LorenBerlu', '$2y$10$kKJfbzhKGkAZic5ATeN3cej2hJ1JRbbr5wPLd2IH6Qcp9ryc3iyY6', 'security staff', '', '', '20.10.21, 14:52', 'Lorenzo Berlusconi', 'on', '3717203', '25'),
('user61702ef123f8c', 'Fluffy', '$2y$10$l13/AFnqwbKxFIG0DD1pz.lYo6KZRvDKQL1OZUqSVcdoUmyCZWMym', 'it staff', '', '', '20.10.21, 17:00', 'Dwayne Johnson', 'off', '5703033', '16'),
('user617030c33fcc7', 'AhmedPascha', '$2y$10$OV/gJ52qK0ev9UJFOABsE.nZ5dbfaEoCW.6xWqqsu0j.fteM9b.em', 'security staff', '', '', '20.10.21, 17:07', 'Ahmed Pascha', 'on', '1907', '23'),
('user6171c51cb2c89', 'DannySins', '$2y$10$dUmmHMniRwRuk5vuV3fV/O56c/14.6sJvgJSYGUge.avlVoBFkgOu', 'security staff', '', '', '21.10.21, 21:53', 'Danny Sins', 'off', '3323433', '18'),
('user6172cadc74562', 'AyaxNesta', '$2y$10$s8uvMH9yc43ISLxp3927a.XGEeCTFWsCGM5OcElW0jSCPxwZH1.Wq', 'head of event / pr', '', '', '22.10.21, 16:29', 'Ayax Nesta', 'on', '1726328', '09'),
('user6172cb05bb8bb', 'ZaftPop', '$2y$10$PlNk65htWsYDtLodwdVDOOl19UMFxGgViMWrYhYmti61o57AVtLq6', 'head of event / pr', '', '', '22.10.21, 16:30', 'Zaft Pop', 'off', '-', '08'),
('user6172cb6ed27fd', 'DestinyVindicta', '$2y$10$0h/HxKz/zTk.fwrCmyMIq.XclB0NKnYNPLXgscbnBj2BvKXkQPZMm', 'rechte hand', '', '', '22.10.21, 16:32', 'Destiny Vindicta', 'off', '-', 'XY'),
('user6172cb90e4f0a', 'AlexVindicta', '$2y$10$ZINoe93jVd2N6KyphLCXa.WWTxOYVsYhMEkcTPQWBy6KKywGO.cvW', 'security staff', '', '', '22.10.21, 16:32', 'Alex Vindicta', 'off', '1897534', '17'),
('user6172cbaa284b6', 'JojoPisko', '$2y$10$xgBK2zTsWnoUQvAxnYuhr.YArnlg7ssIsH0eTlPuQcjDEazK225VK', 'security staff', '', '', '22.10.21, 16:33', 'Jojo Pisko', 'off', '-', '19'),
('user6172cbc61db9b', 'BobbySins', '$2y$10$WthAC.bXCgQlwH09a/9OHec0z.ABBqzjwfyhHewghH7Lwcvc73G4.', 'security staff', '', '', '22.10.21, 16:33', 'Bobby Sins', 'off', '-', '28'),
('user6172cbd5b7f33', 'DanielCooper', '$2y$10$RKeJqS70YoQRac3SWgkv2OYLzesTE4qI3sTv/fED4MVGTZMlqwhZK', 'security staff', '', '', '22.10.21, 16:33', 'Daniel Cooper', 'off', '-', '29'),
('user6172cbf1d1062', 'JordanMckenzie', '$2y$10$VWvrH1V7SXNoz8lMwZaXu.jt4Uf6Tf/EdqIUYEA5IUrxlA7yGlWga', 'security staff', '', '', '22.10.21, 16:34', 'Jordan McKenzie', 'off', '-', '30'),
('user6172cc63c16b1', 'JackVindicta', '$2y$10$p822nySs7Yc3vCtzRHBjWO/EhxVCCJClUvUFjrYP17rOEIf4XilYu', 'ceo', '', '', '22.10.21, 16:36', 'Jack Vindicta', 'off', '-', '02'),
('user6172ccba0fe93', 'KadoKawa', '$2y$10$MFvfdVa4vTks0jFFT9oe1uUxoT5LsDng5mWw/4cwvieOo3ndVXK6a', 'vice president', '', '', '22.10.21, 16:37', 'Kado Kawa', 'on', '-', '06'),
('user6172ccf09844e', 'CarlJackson', '$2y$10$KQJYOIm02SiXGgtjEzQHEOdloZ0bEHGxYC7chFmamRt.1KL5Z6uGC', 'security manager', '', '', '22.10.21, 16:38', 'Carl Jackson', 'on', '7875168', '11'),
('user6172cd19e24db', 'LevisColdax', '$2y$10$e7LVX55f.0tCLRbiRUXUsO/29CtU/BFW7dkIWmle18/73fbVGH0ry', 'security staff', '', '', '22.10.21, 16:39', 'Levis Coldax', 'off', '-', '20'),
('user6172cd2fe59fb', 'MickiSins', '$2y$10$fcCOu98EB4uU/KHnSdGyT.1x3bEgM55l8BUjPeodkolslIMmcBOWe', 'security staff', '', '', '22.10.21, 16:39', 'Micki Sins', 'off', '-', '21'),
('user6172cd3f4c1a0', 'PasiMcFly', '$2y$10$mkdwT9A8FZqQY7SmgWpEku5.XFfozTUUnMz6KsUsjn7GJ3D9ik7CC', 'security staff', '', '', '22.10.21, 16:39', 'Pasi McFly', 'off', '-', '22'),
('user6172cd541de80', 'MaikKoschinsky', '$2y$10$9pxgIsMS4.HgAzeh3BRYwejVBfHV41Nrg6CwbeLdiWbQPXo.t2GGW', 'club manager', '', '', '22.10.21, 16:40', 'Maik Koschinsky', 'off', '-', '13'),
('user6172cd8107522', 'RonnyKoschinsky', '$2y$10$zKlrheab6508aYnoMhoz5.KcgbbxiGMDqQCuGSP5z0liZ8xHiHtba', 'club manager', '', '', '22.10.21, 16:41', 'Ronny Koschinsky', 'off', '-', '14'),
('user6172cd934b4ca', 'MadelynAlvarez', '$2y$10$RglGQPrBtLgRmtOXLEO5yeFTPjm1zpOvf2yJKF4SL9iZ04bcKXiua', 'sekretärin', '', '', '22.10.21, 16:41', 'Madelyn Alvarez', 'off', '1812', '07'),
('user6172cdc1996d7', 'DonWave', '$2y$10$ogDfxUedJscfZqqk91ycX.4mS2sUTdij7FLPsQHqf0CJKak42TXPW', 'security staff', '', '', '22.10.21, 16:42', 'Don Wave', 'off', '-', '31'),
('user6173bde907aa3', 'JonnyDavis', '$2y$10$7dMrxaJzhNtXzOPUmzV6F.XQ59CKGWAZpeJsh/gqcU4F55GZ23u0C', 'club manager', '', '', '23.10.21, 09:46', 'Jonny Davis', 'off', '-', '15'),
('user6179b3662f62b', 'Soap', '$2y$10$/wOl.Uv99ZmZFR.iS67spuoMgmAnBetpz2IZn5ksA6rqxwSaa0mta', 'security trainee', '', '', '27.10.21, 22:15', 'Soap MacTavish', 'on', '1204043', '-'),
('user618017d982942', 'BodoWalter', '$2y$10$PwRXbhIKTdOfPiilBA4v6eIbYyJ3yHimwo4v/7l765ENB6b9VT7kG', 'security trainee', '', '', '01.11.21, 17:37', 'Bodo Walter', 'on', '7346642', '34'),
('user6180185ae5600', 'LucaHercsuth', '$2y$10$bpfBc5VR7IowatCTL.vbZePSRGzB.YPEc0V3/niy0W2fPH3hpMZCi', 'security trainee', '', '', '01.11.21, 17:39', 'Luca Hercsuth', 'on', '8298061', '36'),
('user618027431abea', 'UweFuchs', '$2y$10$s4UDUvhZvJTyxeS3hHFt8.d.y5PM4qFi3ppdT9pwdKvexHfWf48PW', 'security trainee', '', '', '01.11.21, 18:43', 'Uwe Fuchs van Keen', 'off', '100-3933', '-'),
('user6180f1773a315', 'DemoUser', '$2y$10$s10Wwd9sIZs69/k5a0pclOH725qpo/Ah3Msh9bkPcWzYq5f8ODOaS', 'security trainee', '', '', '02.11.21, 09:06', 'Demo User', 'off', '0000000', '00'),
('user6187fd9623a13', 'JacksonMontana', '$2y$10$32jTjLmXPqm5fn.F9PFsOO2e4UftmaMVpvui4nDTXQ0C04b0EOgwi', 'vice president', '', '', '07.11.21, 17:23', 'Jackson Montana', 'on', '9526234', '35'),
('user619a8bc4cce3e', 'EdgarHirsch', '$2y$10$YMWEsAfMNIP0hRsHicZ3Fe2Aty2AS.XWtH.cJefBfjB4OSZvftvbG', 'security trainee', '', '', '21.11.21, 19:11', 'Edgar Hirsch', 'off', '6667182', '32'),
('user619ea4e64408c', 'RamonHirsch', '$2y$10$7OhgtHBdHQ3fznggndMBaeo/ymSKraZsWNi8KdmrpIfwNhDe5Ev.i', 'security trainee', '', '', '24.11.21, 21:47', 'Ramon Hirsch ', 'off', '1483331', '26');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `weaponorders`
--

CREATE TABLE `weaponorders` (
  `orderid` varchar(20) NOT NULL,
  `fullname` text NOT NULL,
  `amount` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `weaponorders`
--

INSERT INTO `weaponorders` (`orderid`, `fullname`, `amount`, `comments`) VALUES
('order61700a78ad32f', 'Logan McConnaughey', '4', 'AKs - 4');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `complaint`
--
ALTER TABLE `complaint`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `mission`
--
ALTER TABLE `mission`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indizes für die Tabelle `storage`
--
ALTER TABLE `storage`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
