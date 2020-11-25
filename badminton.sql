-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 nov. 2020 à 09:06
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `badminton`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `matriculeAdh` int(11) NOT NULL COMMENT 'Matricule Adherent',
  `nomAdh` varchar(30) NOT NULL COMMENT 'Nom Adherent',
  `prenomAdh` varchar(30) NOT NULL COMMENT 'Prénom Adherent',
  `adresseAdh` varchar(50) NOT NULL COMMENT 'Adresse Adhérent',
  `villeAdh` varchar(30) NOT NULL COMMENT 'Ville adhérent',
  `cpAdh` int(5) NOT NULL COMMENT 'Code postal',
  `niveauAdh` varchar(30) NOT NULL COMMENT 'Niveau de jeu de l''adhérent',
  `typeAdh` int(11) NOT NULL COMMENT 'Type (Etudiant, salarié, retraité)\r\nLié à la table Type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table Adherent stock les infos des adhérents';

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`matriculeAdh`, `nomAdh`, `prenomAdh`, `adresseAdh`, `villeAdh`, `cpAdh`, `niveauAdh`, `typeAdh`) VALUES
(43, 'et', 'taze', 'azte', 'azte', 67898, 'Débutant', 1),
(44, 'zaezeaeza', 'zaeezaaez', 'aezezaeaz', 'ezaeaz', 9163, 'Débutant', 1),
(45, 'XDXDXD', 'XDXDX', 'DXD', 'XDD', 12311, 'Confirmé', 2),
(46, 'debut', 'olivier', 'mont cul', 'Marolles', 91630, 'Confirmé', 2),
(47, 'test', 'test', 'test', 'testA', 91630, 'Débutant', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `numType` int(11) NOT NULL COMMENT '1) Etudiant\r\n\r\n2) Salarié\r\n3) Retraité',
  `libelleType` varchar(30) NOT NULL COMMENT 'Nom du type',
  `montantLicence` int(11) NOT NULL COMMENT 'Montant en fonction du type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`numType`, `libelleType`, `montantLicence`) VALUES
(1, 'Etudiant', 20),
(2, 'Salarié', 27),
(3, 'Retraité', 23);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`matriculeAdh`),
  ADD KEY `typeAdh` (`typeAdh`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`numType`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `matriculeAdh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Matricule Adherent', AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD CONSTRAINT `adherent_ibfk_1` FOREIGN KEY (`typeAdh`) REFERENCES `type` (`numType`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
