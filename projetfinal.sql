-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 09 mai 2018 à 21:56
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetfinal`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` INT(2) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(50) NOT NULL,
  `passw` VARCHAR(255) NOT NULL,
  `mail` VARCHAR(255) NOT NULL,
  `Statut` INT(11) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `passw`, `mail`, `Statut`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'morcos188@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `nummsg` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(10) NOT NULL,
  `msg` VARCHAR(255) NOT NULL,
  `idclient` INT(11) DEFAULT NULL,
  `datemsg` DATETIME NOT NULL,
  PRIMARY KEY (`nummsg`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(50) NOT NULL,
  `passw` VARCHAR(255) NOT NULL,
  `mail` VARCHAR(255) NOT NULL,
  `adress` VARCHAR(255) NOT NULL,
  `datenaiss` DATETIME NOT NULL,
  `Statut` INT(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `login`, `passw`, `mail`, `adress`, `datenaiss`, `Statut`) VALUES
(1, 'morcos71', '25f9e794323b453885f5181f1b624d0b', 'julien_dubuisson@hotmail.be', 'Rue des meuniers 188', '1995-01-16 00:00:00', 0),
(2, 'Fra', '81dc9bdb52d04dc20036dbd8313ed055', 'Fracosta@hotmail.com', 'Rue du medoc 17', '1995-09-05 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

DROP TABLE IF EXISTS `jeu`;
CREATE TABLE IF NOT EXISTS `jeu` (
  `id_jeu` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `editeur` VARCHAR(100) NOT NULL,
  `plateform` VARCHAR(50) NOT NULL,
  `prix` DECIMAL(10,2) NOT NULL,
  `pegi` INT(2) NOT NULL,
  `genre` VARCHAR(255) DEFAULT NULL,
  `date_parution` DATE NOT NULL,
  `quantité` INT(11) NOT NULL,
  `jacket` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_jeu`)
) ENGINE=INNODB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`id_jeu`, `nom`, `editeur`, `plateform`, `prix`, `pegi`, `genre`, `date_parution`, `quantité`, `jacket`) VALUES
(1, 'Monster Hunter World', 'Capcom', 'PS4', '45.99', 16, 'Action | RPG', '2018-01-26', 99, 'MonsterHunter.jpg'),
(2, 'Farcry 5', 'Ubisoft Montreal ', 'PS4', '49.99', 18, 'Action  |  FPS  |  Infiltration', '2018-03-27', 99, '35650.jpg'),
(3, 'Uncharted 4', 'Naughty Dog', 'PS4', '19.99', 16, 'Action  |  Aventure', '2016-05-10', 99, 'uncharted.jpg'),
(4, 'Dragon Ball Xenoverse 2', 'Bandai Namco', 'PS4', '29.99', 12, 'Combat', '2016-10-28', 99, 'dragon-ball-xenoverse-2-1.jpg'),
(5, 'Assassin\'s Creed Origins', 'Ubisoft Montreal', 'PS4', '29.99', 18, 'Infiltration  |  Action RPG  |  Open World', '2017-10-27', 99, 'assassin-creed-origins.jpg'),
(6, 'The Witcher 3', 'CD Projekt RED', 'PS4', '35.99', 18, 'RPG', '2015-05-19', 99, 'JkKoOgv.jpg'),
(7, 'Monster Hunter World', 'Capcom', 'XBOX', '47.99', 16, 'Action  |  RPG', '2018-01-28', 99, 'MonsterHunter.jpg'),
(8, 'Farcry 5', 'Ubisoft Montreal', 'XBOX', '55.99', 18, 'Action  |  FPS  |  Infiltration', '2018-03-27', 99, '35650.jpg'),
(9, 'Dragon Ball Xenoverse 2', 'Dimps', 'XBOX', '21.99', 12, 'Combat', '2016-10-28', 99, 'dragon-ball-xenoverse-2-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `jeuxvendu`
--

DROP TABLE IF EXISTS `jeuxvendu`;
CREATE TABLE IF NOT EXISTS `jeuxvendu` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `onum` INT(11) NOT NULL,
  `id_jeu` INT(11) NOT NULL,
  `qte_vendue` INT(11) NOT NULL,
  `prix_unitaire` FLOAT DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeuxvendu`
--

INSERT INTO `jeuxvendu` (`id`, `onum`, `id_jeu`, `qte_vendue`, `prix_unitaire`) VALUES
(1, 1, 1, 5, 45.99),
(2, 1, 2, 4, 49.99),
(3, 1, 3, 3, 19.99),
(4, 1, 4, 2, 29.99),
(5, 1, 5, 1, 29.99),
(6, 2, 1, 2, 45.99),
(7, 3, 8, 1, 55.99),
(8, 3, 6, 1, 35.99),
(9, 4, 1, 1, 45.99),
(10, 4, 4, 1, 29.99),
(11, 4, 3, 1, 19.99),
(12, 4, 6, 1, 35.99);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `onum` INT(11) NOT NULL AUTO_INCREMENT,
  `id_client` INT(11) NOT NULL,
  `prix` DECIMAL(10,2) NOT NULL,
  `odate` DATE NOT NULL,
  PRIMARY KEY (`onum`)
) ENGINE=INNODB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`onum`, `id_client`, `prix`, `odate`) VALUES
(1, 1, '579.85', '2018-05-06'),
(2, 1, '91.98', '2018-05-06'),
(3, 1, '91.98', '2018-05-08'),
(4, 2, '131.96', '2018-05-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
