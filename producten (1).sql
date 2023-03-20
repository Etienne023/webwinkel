-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Gegenereerd op: 20 mrt 2023 om 10:25
-- Serverversie: 10.4.28-MariaDB-1:10.4.28+maria~ubu2004
-- PHP-versie: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `productcode` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `omschrijving` varchar(526) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `genre` varchar(128) NOT NULL,
  `storage` int(11) NOT NULL,
  `age_restriction` varchar(128) NOT NULL,
  `basegame` varchar(64) NOT NULL,
  `plaatjes` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`productcode`, `name`, `omschrijving`, `price`, `genre`, `storage`, `age_restriction`, `basegame`, `plaatjes`) VALUES
(1, 'Hogwarts Legacy', 'Hogwarts Legacy is an immersive, open-world action RPG set in the world first introduced in the Harry Potter books. Now you can take control of the action and be at the center of your own adventure in the wizarding world. Your legacy is what you make of it. Live the Unwritten.', '59.99', 'Action\r\n', 85, 'pegi 12 ', 'basegame', 'hogwarts.avif'),
(3, 'Dying Light 2 Stay Human', 'The virus won and civilization has fallen back to the Dark Ages. The City, one of the last human settlements, is on the brink of collapse. Use your agility and combat skills to survive, and reshape the world. Your choices matter.', '59.99', 'Action', 60, 'PEGI 18', 'Add-on', 'dyinglight.avif'),
(4, 'Marvel\'s Spider-Man Remastered', 'In Marvel’s Spider-Man Remastered, the worlds of Peter Parker and Spider-Man collide in an original, action-packed story. Play as an experienced Peter Parker, fighting big crime and iconic villains in Marvel’s New York. Web-swing through vibrant neighborhoods and defeat villains with epic takedowns.', '59.99', 'Action', 75, 'PEGI 16', 'basegame', 'spiderman.avif'),
(5, 'FIFA 23', 'FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology, men’s and women’s FIFA World Cup™ coming during the season, women’s club teams, cross-play features*, and more.', '69.99', 'Simulation', 100, 'PEGI 3', 'basegame', 'fifa.avif'),
(6, 'Marvel’s Spider-Man: Miles Morales', 'Teenage Miles Morales is adjusting to his new home while following in the footsteps of his mentor, Peter Parker, as a new Spider-Man. When a fierce power struggle threatens to destroy his home, Miles must take up the mantle of Spider-Man and own it.', '49.99', 'Open World', 75, 'PEGI 16', 'basegame', 'spiderman1.avif'),
(7, 'Cyberpunk 2077', 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the dark future of Night City — a dangerous megalopolis obsessed with power, glamor, and ceaseless body modification.', '59.99', 'Action', 70, 'PEGI 18', 'basegame', 'cyberpunk.avif'),
(8, 'Horizon Zero Dawn™ Complete Edition', 'Experience Aloy’s legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!', '49.99', 'RPG', 100, 'PEGI 16', 'basegame', 'horizon.avif'),
(9, 'LEGO® Star Wars™: The Skywalker Saga', 'Play through all nine Skywalker saga films in a game unlike any other. With over 300 playable characters, over 100 vehicles, and 23 planets to explore, a galaxy far, far away has never been more fun! *Includes classic Obi-Wan Kenobi playable character', '49.99', 'Adventure', 40, 'PEGI 7', 'basegame', 'legostarwars.avif'),
(10, 'Dead by Daylight', 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught and killed.', '19.99', 'Survival', 50, 'PEGI 18', 'basegame', 'deadbydaylight.avif'),
(11, 'Pine', 'An open-world action adventure game set in a simulated world in which humans never reached the top of the food chain. Fight with or against a variety of species as you make your way to a new home for your human tribe.', '20.99', 'Adventure', 4, 'PEGI 10', 'basegame', 'pine.avif'),
(12, 'Fortnite', 'Grab all of your friends and drop into Epic Games\' Fortnite, a massive 100-player face-off that combines looting, crafting, shootouts and chaos. The result is a completely unpredictable competitive online experience that gets bigger and even wilder with every new season.', '0.00', 'Shooter', 26, 'PEGI 12 ', 'basegame', 'fortnite.avif'),
(13, 'STAR WARS Jedi: Survivor™ Standard Edition', 'The story of Cal Kestis continues in Star Wars Jedi: Survivor™, a third-person galaxy-spanning action-adventure game from Respawn Entertainment and Lucasfilm Games.', '69.99', 'Adventure', 130, 'PEGI 12', 'basegame', 'starwars1.avif');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`productcode`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
