-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 juin 2021 à 07:37
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `commentaire` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `destination`, `date`, `commentaire`, `photo`) VALUES
(1, 'France', '1997-09-16', 'La France, c\'est cool !', 'https://i.imgur.com/ZlPmcFZ.jpg'),
(2, 'Allemagne', '2004-04-16', 'L\'Allemagne, c\'est top !', 'https://s1.1zoom.me/b5760/102/Germany_Berlin_Evening_Roads_Houses_547288_1920x1080.jpg'),
(3, 'Suisse', '2007-08-16', 'La Suisse, je kiffe !', 'https://s1.1zoom.me/b5250/928/Switzerland_Mountains_Scenery_Alps_Clouds_517724_1920x1080.jpg'),
(4, 'Italie', '2009-08-16', 'L\'Italie, c\'est trop joli !', 'https://s1.1zoom.me/b5050/895/Italy_Houses_472842_1920x1080.jpg'),
(6, 'Danemark', '2014-10-16', 'Le Danemark, ça claque !', 'https://s1.1zoom.me/b5050/666/Denmark_Lake_Mountains_494373_1920x1080.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
