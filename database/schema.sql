-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mai 2023 à 09:16
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `depinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminn`
--

DROP TABLE IF EXISTS `adminn`;
CREATE TABLE IF NOT EXISTS `adminn` (
  `email` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `idanno` int NOT NULL AUTO_INCREMENT,
  `niv` varchar(256) NOT NULL,
  `titre` varchar(256) NOT NULL,
  `annonce` varchar(256) NOT NULL,
  `auteur` varchar(128) NOT NULL,
  `fichier` longblob NOT NULL,
  `nom_fichier` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idanno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `emailens` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`emailens`),
  KEY `email` (`emailens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `datenaiss` date NOT NULL,
  `emailetd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`emailetd`),
  UNIQUE KEY `email` (`emailetd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orientation`
--

DROP TABLE IF EXISTS `orientation`;
CREATE TABLE IF NOT EXISTS `orientation` (
  `ido` int NOT NULL AUTO_INCREMENT,
  `nomprenom` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `sectiongroupe` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `choix1` varchar(128) NOT NULL,
  `choix2` varchar(128) NOT NULL,
  `choix3` varchar(128) NOT NULL,
  `choix4` varchar(128) NOT NULL,
  `choix5` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ido`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recourconfirmer`
--

DROP TABLE IF EXISTS `recourconfirmer`;
CREATE TABLE IF NOT EXISTS `recourconfirmer` (
  `idrc` int NOT NULL AUTO_INCREMENT,
  `emailc` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `moduleenseignantc` varchar(256) NOT NULL,
  `sectiongroupec` varchar(128) NOT NULL,
  `promoc` varchar(128) NOT NULL,
  `semestrec` varchar(128) NOT NULL,
  `deliberationc` varchar(128) NOT NULL,
  `recoursc` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrc`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recourorientation`
--

DROP TABLE IF EXISTS `recourorientation`;
CREATE TABLE IF NOT EXISTS `recourorientation` (
  `idro` int NOT NULL AUTO_INCREMENT,
  `nomprenom` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `sectiongroupe` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `specialite1` varchar(128) NOT NULL,
  `specialite2` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idro`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recourt`
--

DROP TABLE IF EXISTS `recourt`;
CREATE TABLE IF NOT EXISTS `recourt` (
  `idr` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `moduleenseignant` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sectiongroupe` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `promo` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `semestre` varchar(128) NOT NULL,
  `deliberation` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recours` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
