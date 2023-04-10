-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 10 avr. 2023 à 15:39
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cpc`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `datepost` datetime NOT NULL,
  `datesortie` date DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ida`, `titre`, `photo`, `datepost`, `datesortie`, `description`) VALUES
(1, 'Spider man : No Way Home', 'images/spiderman.jpg', '2023-04-05 15:50:30', '2021-12-15', 'Pour la première fois dans son histoire cinématographique, Spider-Man, le héros sympa du quartier est démasqué et ne peut désormais plus séparer sa vie normale de ses lourdes responsabilités de super-héros. Quand il demande de l\'aide à Doctor Strange, les enjeux deviennent encore plus dangereux, le forçant à découvrir ce qu\'être Spider-Man signifie véritablement.\n'),
(3, 'Seven', 'images/seven.jpg', '2023-04-05 16:52:51', '1996-01-31', 'Pour conclure sa carrière, l\'inspecteur Somerset, vieux flic blasé, tombe à sept jours de la retraite sur un criminel peu ordinaire. John Doe, c\'est ainsi que se fait appeler l\'assassin, a decidé de nettoyer la societé des maux qui la rongent en commettant sept meurtres basés sur les sept pechés capitaux: la gourmandise, l\'avarice, la paresse, l\'orgueil, la luxure, l\'envie et la colère.'),
(5, 'Cyberpunk:Edgerunners', 'images/cyberpunk.jpg', '2023-04-09 14:49:36', '2022-09-13', 'Série animée dérivée du jeu vidéo Cyberpunk 2077.\nElle raconte une histoire indépendante sur 10 épisodes à propos d’un enfant des rues essayant de survivre dans une ville du futur obsédée par la technologie et les modifications corporelles. Ayant tout à perdre, il choisit de rester en vie en devenant un edgerunner - un hors-la-loi mercenaire également connu comme un cyberpunk.'),
(10, 'Les 3 mousquetaires', 'images/Les 3 mousquetaires.jpg', '2023-04-09 18:17:21', '2023-04-05', 'Du Louvre au Palais de Buckingham, des bas-fonds de Paris au siège de La Rochelle… dans un Royaume divisé par les guerres de religion et menacé d’invasion par l’Angleterre, une poignée d’hommes et de femmes vont croiser leurs épées et lier leur destin à celui de la France.'),
(11, 'Suzume', 'images/Suzume.jpg', '2023-04-09 18:21:31', '2023-04-12', 'Dans une petite ville paisible de Kyushu, une jeune fille de 17 ans, Suzume, rencontre un homme qui dit voyager afin de chercher une porte. Décidant de le suivre dans les montagnes, elle découvre une unique porte délabrée trônant au milieu des ruines, seul vestige ayant survécu au passage du temps. Cédant à une inexplicable impulsion, Suzume tourne la poignée, et d\'autres portes s\'ouvrent alors aux quatre coins du Japon, laissant entrer toutes les catastrophes qu\'elles renferment. L\'homme est formel : toute porte ouverte doit être fermée. Là où elle s\'est égarée se trouvent les étoiles, le crépuscule et l\'aube, une voûte céleste où tous les temps se confondent. Guidée par des portes nimbées de mystère, Suzume entame un périple en vue de toutes les refermer.');

-- --------------------------------------------------------

--
-- Structure de la table `cine`
--

DROP TABLE IF EXISTS `cine`;
CREATE TABLE IF NOT EXISTS `cine` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gazette`
--

DROP TABLE IF EXISTS `gazette`;
CREATE TABLE IF NOT EXISTS `gazette` (
  `idg` int(11) NOT NULL AUTO_INCREMENT,
  `nomgazette` varchar(50) NOT NULL,
  `dategazette` date NOT NULL,
  `pdf` varchar(1000) NOT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `gazette`
--

INSERT INTO `gazette` (`idg`, `nomgazette`, `dategazette`, `pdf`) VALUES
(7, 'Gazette du ', '2023-02-09', 'gazette/Gazette du -2023-02-09.pdf'),
(6, 'Gazette du ', '2023-03-09', 'gazette/Gazette du -2023-03-09.pdf'),
(5, 'Gazette du ', '2023-04-09', 'gazette/Gazette du -2023-04-09.pdf'),
(8, 'Gazette du ', '2023-01-09', 'gazette/Gazette du -2023-01-09.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
